<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>สมัครสมาชิก</title>

    <link href="{{asset('admin/assetsfont/img/LOGO thawat.png')}}" rel="icon">

    <!-- Icons font CSS-->
    <link href="{{asset('admin/assetsregister/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin/assetsregister/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="{{asset('admin/assetregister/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin/assetregister/vendor/datepicker/daterangepicker.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('admin/assetsregister/css/main.css')}}" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">สมัครสมาชิก</h2>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label for="username" class="label">Username</label>
                                    <input class="input--style-4" type="text" name="username"@error('username') is-invalid @enderror id="username"  placeholder="username" required autocomplete="username">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label for="name" class="label">Name</label>
                                    <input class="input--style-4" type="text" @error('name') is-invalid @enderror id="name" name="name" placeholder="name" required autocomplete="name">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label for="password" class="label">password</label>
                                    <input class="input--style-4" type="password" @error('password') is-invalid @enderror id="password" name="password" placeholder="password" required autocomplete="new-password">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label for="password-confirm" class="label">confirm-password</label>
                                    <input class="input--style-4" type="password" id="password-confirm" name="password_confirmation" placeholder="password confirm" required autocomplete="new-password">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label for="address" class="label">Address</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text"@error('address') is-invalid @enderror id="address" name="address" placeholder="address" required autocomplete="address" >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label for="email" class="label">Email</label>
                                    <input class="input--style-4" type="email" @error('email') is-invalid @enderror id="email" name="email" placeholder="email" required autocomplete="email">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label for="phone" class="label">Phone Number</label>
                                    <input class="input--style-4" type="text" @error('phone') is-invalid @enderror id="phone" name="phone" placeholder="phone" required autocomplete="phone">
                                </div>
                            </div>
                        </div>
                        
                        <!--<div class="input-group">
                            <label class="label">Subject</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="subject">
                                    <option disabled="disabled" selected="selected">Choose option</option>
                                    <option>Subject 1</option>
                                    <option>Subject 2</option>
                                    <option>Subject 3</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>-->
                        <div class="col-12 text-center py-3">
                            <input type="submit" name="submit" class="btn btn--radius-2 btn--blue" value="submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="{{asset('admin/assetregister/vendor/jquery/jquery.min.js')}}"></script>
    <!-- Vendor JS-->
    <script src="{{asset('admin/assetregister/vendor/select2/select2.min.js')}}"></script>
    <script src="{{asset('admin/assetregister/vendor/datepicker/moment.min.js')}}"></script>
    <script src="{{asset('admin/assetregister/vendor/datepicker/daterangepicker.js')}}"></script>

    <!-- Main JS-->
    <script src="{{asset('admin/assetsregister/js/global.js')}}"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->