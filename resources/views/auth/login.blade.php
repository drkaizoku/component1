<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Snapbook</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/css/line-awesome.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/line-awesome-font-awesome.min.css')}}">
    <link href="{{URL::asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('lib/slick/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('lib/slick/slick-theme.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/responsive.css')}}">
</head>


<body class="sign-in">


<div class="wrapper">

    <div class="sign-in-page">
        <div class="signin-popup">
            <div class="signin-pop">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="cmp-info">
                            <div class="logo-snap">
                                <img class="snaplogo" src="{{URL::asset('images/snapbook-logo.png')}}" alt="Snapbook logo">

                                <div class="p-element">
                                    <p class="p-color">Snapbook is social media of new era with dynamic and user friendly design.
                                        Get connected with friends, share moments, join us for free.</p>
                                </div>

                            </div><!--cm-logo end-->
                            <img class="main-img" src="{{URL::asset('images/social-media-main.png')}}" alt="">

                        </div><!--cmp-info end-->
                    </div>
                    <div class="col-lg-6">
                        <div class="login-sec">
                            <ul class="sign-control">
                                <li data-tab="tab-1" class="current"><a href="#" title="">Login</a></li>
                                <li data-tab="tab-2"><a href="#" title="">Sign up</a></li>
                            </ul>
                            <div class="sign_in_sec current" id="tab-1">

                                <h3>Login</h3>
                                <form action="{{route('login')}}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12 no-pdd">
                                            <div class="sn-field">
                                                <input type="text" name="email" placeholder="Email">
                                                <i class="la la-user"></i>
                                                @error('email')
                                                <div>
                                                <span>
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                </div>
                                                @enderror
                                            </div><!--sn-field end-->
                                        </div>
                                        <div class="col-lg-12 no-pdd">
                                            <div class="sn-field">
                                                <input type="password" name="password" placeholder="Password">
                                                <i class="la la-lock"></i>
                                                @error('password')
                                                <div>
                                                <span>
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-12 no-pdd">
                                            <div class="checky-sec">
                                                <div class="fgt-sec">
                                                    <input type="checkbox" name="cc" id="c1">
                                                    <label for="c1">
                                                        <span></span>
                                                    </label>
                                                    <small>Remember me</small>
                                                </div><!--fgt-sec end-->
                                                <a href="{{route('password.request')}}" title="">Forgot Password?</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 no-pdd">
                                            <button type="submit" value="submit">Login</button>
                                        </div>

                                        <p class="quote">“If you’re looking for the next big thing, and you’re looking where everyone else is, you’re looking in the wrong place.”</p>
                                    </div>
                                </form>

                            </div><!--sign_in_sec end-->
                            <div class="sign_in_sec" id="tab-2">

                                <div class="dff-tab current" id="tab-3">
                                    <h3>Sign up</h3>
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-12 no-pdd">
                                                <div class="sn-field">
                                                    <input type="text" name="name" placeholder="Full Name">
                                                    <i class="la la-user"></i>
                                                    @error('name')
                                                    <div>
                                                <span>
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                    </div>
                                                    @enderror
                                                </div>

                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <div class="sn-field">
                                                    <input type="text" name="email" placeholder="Email">
                                                    <i class="la la-user"></i>
                                                    @error('email')
                                                    <div>
                                                    <span>
                                        <strong>{{ $message }}</strong>
                                                    </span></div>
                                                    @enderror
                                                </div>


                                            </div>
                                            {{--                                            <div class="col-lg-12 no-pdd">--}}
                                            {{--                                                <div class="sn-field">--}}
                                            {{--                                                    <input type="text" name="country" placeholder="Country">--}}
                                            {{--                                                    <i class="la la-globe"></i>--}}
                                            {{--                                                </div>--}}
                                            {{--                                            </div>--}}
                                            {{--                                            <div class="col-lg-12 no-pdd">--}}
                                            {{--                                                <div class="sn-field">--}}
                                            {{--                                                    <select>--}}
                                            {{--                                                        <option>Category</option>--}}
                                            {{--                                                        <option>Category 1</option>--}}
                                            {{--                                                        <option>Category 2</option>--}}
                                            {{--                                                        <option>Category 3</option>--}}
                                            {{--                                                        <option>Category 4</option>--}}
                                            {{--                                                    </select>--}}
                                            {{--                                                    <i class="la la-dropbox"></i>--}}
                                            {{--                                                    <span><i class="fa fa-ellipsis-h"></i></span>--}}
                                            {{--                                                </div>--}}
                                            {{--                                            </div>--}}
                                            <div class="col-lg-12 no-pdd">
                                                <div class="sn-field">
                                                    <input type="password" name="password" placeholder="Password">
                                                    <i class="la la-lock"></i>
                                                    @error('password')
                                                    <div>
                                                    <span>
                                        <strong>{{ $message }}</strong>
                                    </span></div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <div class="sn-field">
                                                    <input type="password" name="password_confirmation"
                                                           placeholder="Repeat Password">
                                                    <i class="la la-lock"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <div class="checky-sec st2">
                                                    <div class="fgt-sec">
                                                        <input type="checkbox" name="cc" id="c2">
                                                        <label for="c2">
                                                            <span></span>
                                                        </label>
                                                        <small>Yes, I understand and agree to the workwise Terms &
                                                            Conditions.</small>
                                                    </div><!--fgt-sec end-->
                                                </div>
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <button type="submit" value="submit">Register</button>
                                            </div>
                                        </div>
                                    </form>
                                </div><!--dff-tab end-->
{{--                                <div class="dff-tab" id="tab-4">--}}
{{--                                    <form>--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-lg-12 no-pdd">--}}
{{--                                                <div class="sn-field">--}}
{{--                                                    <input type="text" name="company-name" placeholder="Company Name">--}}
{{--                                                    <i class="la la-building"></i>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-lg-12 no-pdd">--}}
{{--                                                <div class="sn-field">--}}
{{--                                                    <input type="text" name="country" placeholder="Country">--}}
{{--                                                    <i class="la la-globe"></i>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-lg-12 no-pdd">--}}
{{--                                                <div class="sn-field">--}}
{{--                                                    <input type="password" name="password" placeholder="Password">--}}
{{--                                                    <i class="la la-lock"></i>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-lg-12 no-pdd">--}}
{{--                                                <div class="sn-field">--}}
{{--                                                    <input type="password" name="repeat-password"--}}
{{--                                                           placeholder="Repeat Password">--}}
{{--                                                    <i class="la la-lock"></i>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-lg-12 no-pdd">--}}
{{--                                                <div class="checky-sec st2">--}}
{{--                                                    <div class="fgt-sec">--}}
{{--                                                        <input type="checkbox" name="cc" id="c3">--}}
{{--                                                        <label for="c3">--}}
{{--                                                            <span></span>--}}
{{--                                                        </label>--}}
{{--                                                        <small>Yes, I understand and agree to the workwise Terms &--}}
{{--                                                            Conditions.</small>--}}
{{--                                                    </div><!--fgt-sec end-->--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-lg-12 no-pdd">--}}
{{--                                                <button type="submit" value="submit">Get Started</button>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </form>--}}
{{--                                </div><!--dff-tab end-->--}}
                            </div>
                        </div><!--login-sec end-->
                    </div>
                </div>
            </div><!--signin-pop end-->
        </div><!--signin-popup end-->
        <div class="footy-sec">
            <div class="container">
                <ul>
                    <li><a href="help-center.html" title="">Help Center</a></li>
                    <li><a href="about.html" title="">About</a></li>
                    <li><a href="#" title="">Privacy Policy</a></li>
                    <li><a href="#" title="">Community Guidelines</a></li>
                    <li><a href="#" title="">Cookies Policy</a></li>
                    <li><a href="#" title="">Career</a></li>
                    <li><a href="forum.html" title="">Forum</a></li>
                    <li><a href="#" title="">Language</a></li>
                    <li><a href="#" title="">Copyright Policy</a></li>
                </ul>
                <p><img src="images/copy-icon.png" alt="">Copyright 2019</p>
            </div>
        </div><!--footy-sec end-->
    </div><!--sign-in-page end-->


</div><!--theme-layout end-->


<script type="text/javascript" src="{{URL::asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/popper.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('lib/slick/slick.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/script.js')}}"></script>
</body>


</html>
<style>
    .snaplogo{
       padding-right: 200px !important;
    }
    .p-color{
        color: black !important;
    }
    .p-element{
        padding-top: 15px;
    }
    .main-img{
        margin-top: 15px !important;
    }

    .quote{
        padding-top: 50px !important;
    }
</style>
