<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Payment Gateway Demo</title>
    <!-- <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css'> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css'>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.4/css/tether.min.css'>
    <link rel="stylesheet" href="css/style.css">
	<!-- Demo CSS -->
	<link rel="stylesheet" href="css/demo.css">
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha512-MoRNloxbStBcD8z3M/2BmnT+rg4IsMxPkXaGh2zD6LGNNFE80W3onsAhRcMAMrSoyWL9xD7Ert0men7vR8LUZg==" crossorigin="anonymous" />

  </head>
  <body>

<div id="wrapper">

        @include('auth/userLayout')



            <button type="button" class="hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
                <span class="hamb-top"></span>
    			<span class="hamb-middle"></span>
				<span class="hamb-bottom"></span>
            </button>
            <div class="container">

                <h3>Donate Amount</h3>
                <div id="app">
                    <main class="py-4">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 offset-3 col-md-offset-6">
                                    @if($message = Session::get('error'))
                                        <div class="alert alert-danger alert-dismissible fade in" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                            <strong>Error!</strong> {{ $message }}
                                        </div>
                                    @endif
                                        <div class="alert alert-success success-alert alert-dismissible fade show" role="alert" style="display: none;">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                            <strong>Success!</strong> <span class="success-message"></span>
                                        </div>
                                    {{ Session::forget('success') }}
                                    <div class="card card-default">
                                        <div class="card-header">
                                            Donate Amount
                                        </div>

                                        <form method="post" action="/payment">
                                            @csrf
                                            <div class="card-body text-center">
                                                <div class="form-group mt-1 mb-1">
                                                    <input type="text" name="amount" class="form-control amount" placeholder="Enter Amount">
                                                </div>
                                                <button id="rzp-button1" class="btn btn-success btn-lg">Donate</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if(Session::has('data'))

                            <div class="container tex-center mx-auto">
                            <form action="/pay" method="POST" class="text-center mx-auto mt-5">
                            <script
                                src="https://checkout.razorpay.com/v1/checkout.js"
                                data-key="{{env('RAZOR_KEY')}}"
                            data-amount="{{Session::get('data.amount')}}"
                                data-currency="INR"
                            data-order_id="{{Session::get('data.order_id')}}"
                                data-buttontext="Pay with Razorpay"
                                data-name="Coffee"
                                data-description="Test transaction"

                                data-theme.color="#F37254"
                            ></script>
                            <input type="hidden" custom="Hidden Element" name="hidden">
                            </form>

                            </div>

                        @endif
                    </main>
                </div>
                <br><br>
                <h3>Transaction History</h3>
                <table class="table table-bordered data-table" >
                    <thead>
                        <tr>
                            {{-- <th>Sr No</th> --}}
                            <th>Email</th>
                            <th>Contact No.</th>
                            <th>Amount</th>
                            <th>Status</th>
                            <th>Created At</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
<!-- partial -->


<!-- Scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha512-M5KW3ztuIICmVIhjSqXe01oV2bpe248gOxqmlcYrEzAvws7Pw3z6BK0iGbrwvdrUQUhi3eXgtxp5I8PDo9YfjQ==" crossorigin="anonymous"></script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js">
    // <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.4/js/tether.min.js'></script>
    <script  src="js/script.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>


    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    {{-- <script>
        $('body').on('click','#rzp-button1',function(e){
            e.preventDefault();
            var amount = $('.amount').val();
            var total_amount = amount * 100;
            var options = {
                "key": "{{ env('RAZOR_KEY') }}", // Enter the Key ID generated from the Dashboard
                "amount": total_amount, // Amount is in currency subunits. Default currency is INR. Hence, 10 refers to 1000 paise
                "currency": "INR",
                "name": "NiceSnippets",
                "description": "Test Transaction",
                "image": "https://www.nicesnippets.com/image/imgpsh_fullsize.png",
                "order_id": "", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
                "handler": function (response){
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        type:'POST',
                        url:"{{ route('payment') }}",
                        data:{razorpay_payment_id:response.razorpay_payment_id,amount:amount},
                        success:function(data){
                            $('.success-message').text(data.success);
                            $('.success-alert').fadeIn('slow', function(){
                               $('.success-alert').delay(5000).fadeOut();
                            });
                            $('.amount').val('');
                        }
                    });
                },
                "theme": {
                    "color": "#F37254"
                }
            };
            var rzp1 = new Razorpay(options);
            rzp1.open();
        });
    </script> --}}

    <script type="text/javascript">
        $(document).ready(function() {
            var table = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                order: [1, 'DESC'],
                ajax: "{{ route('fetchRozarPayTransaction') }}",
                columns: [
                    // {data: 'id', name: 'id'},
                    {data: 'email', name: 'email'},
                    {data: 'contact', name: 'contact'},
                    {data: 'amount', name: 'amount'},
                    {data: 'status', name: 'status'},
                    {data: 'created_at', name: 'created_at'},
                ]
            });

        });
    </script>
  </body>
</html>
