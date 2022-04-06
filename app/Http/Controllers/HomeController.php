<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\Vendor;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function getProfile($id)
    {
        $user = User::where(['id' => $id])
                ->first();
        return view('auth/editProfile', compact('user'));
    }

    public function getVendorProfile($id)
    {
        $vendor = Vendor::where(['userId' => $id])
                ->first();
                // dd($vendor);
        return view('auth/editVendorProfile', compact('vendor'));
    }

    public function changePassword($id)
    {
        $user = User::where(['id' => $id])
                ->first();
        return view('auth/changePassword', compact('user'));
    }

    public function changeUserPassword($id)
    {
        $user = User::where(['id' => $id])
                ->first();
        return view('auth/changeUserPassword', compact('user'));
    }

    public function updateUser(Request $req){
   
        $user = User::where('id', $req->input('id'))
                ->first();

           $user->name = $req->input('name');
           $user->password = $req->input('password');
           $user->address = $req->input('address');

           $user->save();

        return redirect('/dashboardUser')->with('success','Update successfully');
    }

    public function updateVendorUser(Request $req){
   
        $user = User::where('id', $req->input('id'))
                ->first();

           $user->name = $req->input('name');
           $user->save();

          // Storage::disk('local')->put($req->file('profilePicture'), 'Contents');
          
        // dd($req->file('profilePicture'));
        // $fileName = $req->file('profilePicture')->getClientOriginalName();
        $file = $req->file('profilePicture');
        $originalname = $file->getClientOriginalName();
        $path = $file->storeAs('public/', $originalname);

        $file1 = $req->file('bannerPicture');
        $originalname1 = $file1->getClientOriginalName();
        $path1 = $file1->storeAs('public/', $originalname1);
        // $path = $req->file('profilePicture')->store('public');
        //    $path = $req->file('profilePicture')->store('profilePicture');

            $vendor = Vendor::where('userId', $user->id)->first();

            $vendor->storeName = $req->input('storeName');
            $vendor->storeAddress = $req->input('storeAddress');
            $vendor->storeDescription = $req->input('storeDescription'); 
            $vendor->contactNumber = $req->input('contactNumber');
            $vendor->profilePicture = $originalname; 
            $vendor->bannerPicture = $originalname1;
            $vendor->phoneNumber = $req->input('phoneNumber');

            $vendor->save();

        return redirect('/dashboardVendor')->with('success','Update successfully');
    }

    public function profileVendor(){
        $vendor = Vendor::where('userId', Auth::user()->id)->first();
        return view('auth/dashboardVendor', compact('vendor'));
    }

    public function updateUserPassword(Request $req){
        
        $user = User::where('id', $req->input('id'))
        ->first();

        if($user->password == $req->input('oldpassword')){
            if($req->input('password') == $req->input('repassword'))
            {
                $user->password = $req->input('password');
                $user->save();
            }else{
                return redirect('/dashboardVendor')->with('error','password not matched');
            }
        }else{
            return redirect('/dashboardVendor')->with('error','wrong password');
        }

        return redirect('/dashboardVendor')->with('success','Update successfully');
    }

    public function updatePassword(Request $req){
        
        $user = User::where('id', $req->input('id'))
        ->first();

        if($user->password == $req->input('oldpassword')){
            if($req->input('password') == $req->input('repassword'))
            {
                $user->password = $req->input('password');
                $user->save();
            }else{
                return redirect('/dashboardVendor')->with('error','password not matched');
            }
        }else{
            return redirect('/dashboardVendor')->with('error','wrong password');
        }

        return redirect('/dashboardVendor')->with('success','Update successfully');
    }

    public function fetchUserData(Request $request)
    {

        return datatables()->of(User::query())
        ->addIndexColumn()
                    ->addColumn('action', function($row){
                        $btn = '<a href="javascript:void(0)" class="">View</a> &nbsp;';
                        $btn = $btn.'<a href="javascript:void(0)" class="">Edit</a> &nbsp;';
                        $btn = $btn.'<a href="javascript:void(0)" class="">Delete</a>';
      
                         return $btn;
                    })
                    ->rawColumns(['action'])

        ->make(true);
    }

    public function fetchVendorData(Request $request)
    {
        $sql = User::rightJoin('vendors','vendors.userId','=','users.id')
        ->select('*')
       ->get();

        return datatables()->of($sql)
        ->addIndexColumn()
                    ->addColumn('action', function($row){
                        $btn = '<a href="javascript:void(0)" class="">View</a> &nbsp;';
                        $btn = $btn.'<a href="javascript:void(0)" class="">Edit</a> &nbsp;';
                        $btn = $btn.'<a href="javascript:void(0)" class="">Delete</a>';
      
                         return $btn;
                    })
                    ->rawColumns(['action'])

        ->make(true);
    }

}
