<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Vendor;
use Socialite;
use Auth;
use DB;
use Razorpay\Api\Api;
use DataTables;
use Razorpay\Api\Errors\SignatureVerificationError;

class SocialController extends Controller
{
    public function redirect($provider)
    {
     return Socialite::driver($provider)->redirect();
    }

    // public function Callback($provider)
    // {
    //     $userSocial =   Socialite::driver($provider)->user();
    // }

    public function Callback($provider){
        $userSocial =   Socialite::driver($provider)->stateless()->user();
        $users       =   User::where(['email' => $userSocial->getEmail()])->first();
        if($users){
            Auth::login($users);
            return redirect('/registerVendor');
        }else{
        $user = User::create([
                'name'          => $userSocial->getName(),
                'email'         => $userSocial->getEmail(),
                'image'         => $userSocial->getAvatar(),
                'provider_id'   => $userSocial->getId(),
                'provider'      => $provider,
            ]);

        Auth::login($user);
        return redirect('/registerVendor')->with('success','User Created!');;
        }
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
    }

    public function saveUser(Request $req)
    {

        //$datas = array(

        $user = User::create([
            'name' => $req->input('firstName') ." ". $req->input('lastName'),
            'email' => $req->input('email'),
            'password' => $req->input('password'),
            'mobile' => $req->input('mobile'),
            'address' => $req->input('address')
         ]);
        // dd($user->create($data)->id);
        //DB::table('users')->insert($datas);

        //$req->session()->put('data', $req->input());

        Auth::login($user);
        //Auth::attempt($user);
        return redirect('/dashboardUser')->with('success','User Created!');
    }

    public function saveVendor(Request $req)
    {
        $user = Vendor::create([
            'storeName' => $req->input('storeName'),
            'storeAddress' => $req->input('storeAddress'),
            'storeDescription' => $req->input('storeDescription'),
            'contactNumber' => $req->input('contactNumber'),
            'profilePicture' => $req->input('profilePicture'),
            'bannerPicture' => $req->input('bannerPicture'),
            'phoneNumber' => $req->input('phoneNumber'),
            'userId' => Auth::user()->id,
         ]);

         return redirect('/dashboardUser')->with('success','Vendor details saved');
    }

    public function loginAction(Request $req){
        $user = User::where(['email' => $req->input('email')])
                ->where(['password' => $req->input('password')])
                ->first();
        if($user){
            Auth::login($user);
            $vendor = Vendor::where(['userId' => $user->id])
                ->first();
            if($vendor){
                return view('auth/dashboardVendor', compact('vendor'))->with('success','login with vendor account');//for vendor
            }else{
                return redirect('/dashboardUser')->with('success','Login with user account');//for user
            }
        }else{
            return redirect('/login');
        }
    }


    public function payWithRazorpay()
    {
        return view('payWithRazorpay');
    }


    public function payment(Request $request)
    {
        // $name = $request->input('name');
        $amount = $request->input('amount');

        // $api = new Api('rzp_test_CcRYorXwUKnx5y', 'SqHYHxVK94qmGBXwy717KHUl');
        $api = new Api(env('RAZOR_KEY'), env('RAZOR_SECRET'));
        $order  = $api->order->create(array('receipt' => '123', 'amount' => $amount * 100 , 'currency' => 'INR')); // Creates order
        $orderId = $order['id'];

        $user_pay = new Payment();

        // $user_pay->name = $name;
        $user_pay->amount = $amount;
        $user_pay->payment_id = $orderId;
        $user_pay->save();

        $data = array(
            'order_id' => $orderId,
            'amount' => $amount
        );

        // Session::put('order_id', $orderId);
        // Session::put('amount' , $amount);


        return redirect('/dashboardUser')->with('data', $data);
        // $input = $request->all();

        // $api = new Api(env('RAZOR_KEY'), env('RAZOR_SECRET'));

        // $payment = $api->payment->fetch($request->razorpay_payment_id);

        // if(count($input)  && !empty($input['razorpay_payment_id'])) {
        //     try {
        //         $api->order->create(array('amount'=>$payment['amount']));
        //        $paymentData =  $payment->capture(array('amount'=>$payment['amount']));

        //     } catch (\Exception $e) {
        //         return  $e->getMessage();
        //         \Session::put('error',$e->getMessage());
        //         return redirect()->back();
        //     }
        // }

        // $payInfo = [
        //            'payment_id' => $request->razorpay_payment_id,
        //            'user_id' => '1',
        //            'amount' => $request->amount,
        //         ];

        // Payment::insertGetId($payInfo);

        // \Session::put('success', 'Payment successful');

        // return response()->json(['success' => 'Payment successful']);
    }


    public function fetchRozarPayTransaction(Request $request)
    {
        $api = new Api(env('RAZOR_KEY'), env('RAZOR_SECRET'));

        $fetch = $api->payment->all();

        return Datatables::of($fetch->items)
        ->addColumn('email', function($fetch){

                $email = $fetch->email;

                return $email;
        })

        ->addColumn('contact', function($fetch){

                $contact = $fetch->contact;

                return $contact;
        })

        ->addColumn('amount', function($fetch){

            $amount = number_format((float)$fetch->amount/100, 2, '.', '');

            // $amount = $fetch->amount/100;

            return $amount;
        })

        ->addColumn('status', function($fetch){
            $status = "N/A";
            if ($fetch->captured == true) {
                $status = 'Captured';
            } else {
                $status = 'Not Captured';
            }


            return $status;
        })

        ->addColumn('created_at', function($fetch){

            $created_at = date('Y-m-d',$fetch->created_at);

            return $created_at;
        })


        ->rawColumns(['email','contact','amount','status','created_at'])

        ->make(true);
    }


    public function pay(Request $request){
        $data = $request->all();
        $user = Payment::where('payment_id', $data['razorpay_order_id'])->first();
        $user->payment_done = true;
        $user->razorpay_id = $data['razorpay_payment_id'];

        // $api = new Api('rzp_test_CcRYorXwUKnx5y', 'SqHYHxVK94qmGBXwy717KHUl');
        $api = new Api(env('RAZOR_KEY'), env('RAZOR_SECRET'));


        try{
        $attributes = array(
             'razorpay_signature' => $data['razorpay_signature'],
             'razorpay_payment_id' => $data['razorpay_payment_id'],
             'razorpay_order_id' => $data['razorpay_order_id']
        );
        $order = $api->utility->verifyPaymentSignature($attributes);
        $success = true;
        }catch(SignatureVerificationError $e){

            $succes = false;
        }


        if($success){
            $user->save();
            return redirect('/dashboardUser');
        }else{

            return redirect()->route('error');
        }
    }

    public function error(){
        return view('error');
    }

}
