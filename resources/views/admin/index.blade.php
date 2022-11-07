<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Administrateur</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="loginchildren/img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="loginchildren/css/bootstrap-rtl.min.css">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="loginchildren/css/fontawesome-all.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="loginchildren/font/flaticon.css">
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <div id="preloader" class="preloader">
        <div class='inner'>
            <div class='line1'></div>
            <div class='line2'></div>
            <div class='line3'></div>
        </div>
    </div>
    <div id="wrapper" class="wrapper">        
        <div class="fxt-template-animation fxt-template-layout5">
            <div class="fxt-bg-img fxt-none-767" data-bg-image="loginchildren/img/figure/bg5-l.jpg">
                <div class="fxt-intro">
                    <div class="sub-title"> </div>
                  
                    
                </div>
            </div>
            <div class="fxt-bg-color">
                <div class="fxt-header">
                    <a href="" class="fxt-logo"><img src="loginchildren/img/logo-5.png" alt="Logo"></a>
                    @if (session('success'))
        <div class="alert alert-success">
        {{session('success')}}

        </div>
        @endif
                    
                    <div class="fxt-page-switcher">
                        <a href="{{route('admin.login')}}" class="switcher-text switcher-text1 active">LogIn</a> 
                        <br>
                        <a href="{{route('registerr')}}" class="switcher-text switcher-text1 ">register</a>
                    
                    </div>
                </div>
                <div class="fxt-form">
                <form method="POST" action="{{ route('acces') }}">
                    @csrf
                        <div class="form-group fxt-transformY-50 fxt-transition-delay-1">                                                
                            <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"  name="email" placeholder="Email Address" required="required">
                            <i class="flaticon-envelope"></i>
                            
                          
                        </div>
                        @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        <div class="form-group fxt-transformY-50 fxt-transition-delay-2">                                                
                            <input type="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}"  name="password" placeholder="Password" required="required">
                            <i class="flaticon-padlock"></i>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <a href="forgot-password-5.html" class="switcher-text3">Forgot Password</a>
                        </div>
                        <div class="form-group fxt-transformY-50 fxt-transition-delay-3">
                            <div class="fxt-content-between">
                                <button type="submit" class="fxt-btn-fill">Log in</button>
                                <div class="checkbox">
                                    <input id="checkbox1" type="checkbox">
                                    <label for="checkbox1">Keep me logged in</label>
                                </div>
                            </div>
                        </div>
                    </form>                            
                </div> 
                
            </div>  
        </div>
    </div>
    <!-- jquery-->
    <script src="loginchildren/js/jquery-3.5.0.min.js"></script>
    <!-- Bootstrap js -->
    <script src="loginchildren/js/bootstrap.min.js"></script>
    <!-- Imagesloaded js -->
    <script src="loginchildren/js/imagesloaded.pkgd.min.js"></script>
    <!-- Validator js -->
    <script src="loginchildren/js/validator.min.js"></script>
    <!-- Custom Js -->
    <script src="loginchildren/js/main.js"></script>

</body>

</html>