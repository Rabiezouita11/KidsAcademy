<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>تسجيل الدخول</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="loginchildren/img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="loginchildren/css/bootstrap.min.css">
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
    <section class="fxt-template-animation fxt-template-layout33">
        <div class="fxt-content-wrap">
            <div class="fxt-heading-content">
            <div class="fxt-inner-wrap fxt-transformX-R-50 fxt-transition-delay-3">
                    <div class="fxt-transformX-R-50 fxt-transition-delay-10">
                     
                    </div>
                    <div class="fxt-transformX-R-50 fxt-transition-delay-10">
                        <div class="fxt-middle-content">
                        <div class="fxt-sub-title">مرحبا بك </div>
                          
                          <p class="fxt-description">نحن سعداء لرؤيتك مرة أخرى! احصل على إمكانية الوصول إلى الطلبات وقائمة الرغبات والتوصيات الخاصة بك.</p>
                        </div>
                    </div>
                    <div class="fxt-transformX-R-50 fxt-transition-delay-10">
                        <div class="fxt-switcher-description">ليس لديك حساب؟<a href="{{route('register')}}" class="fxt-switcher-text">تسجيل</a></div>
                    </div>
                </div>
            </div>
         
            <div class="fxt-form-content">
                <div class="fxt-main-form">
                    <div class="fxt-inner-wrap fxt-opacity fxt-transition-delay-13">
                        <h2 class="fxt-page-title">تسجيل الدخول</h2>
                        <p class="fxt-description">قم بتسجيل الدخول لتجربة خدماتنا المذهلة</p>
                        <form method="POST" action="{{ route('login') }}">
                        @csrf
                            <div class="form-group">
                                <label for="email" class="fxt-label">عنوان البريد الالكترونى</label>
                                <input  autocomplete="off" type="email" id="email" class="form-control  @error('email') is-invalid @enderror"  value="{{ old('email') }}" required  autofocus name="email" placeholder="أدخل بريدك الإلكتروني" required="required">
                           
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password" class="fxt-label">كلمة المرور</label>
                                <input  autocomplete="off" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="أدخل كلمة المرور" required="required">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="fxt-switcher-text">هل نسيت كلمة السر</a>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" class="fxt-btn-fill">تسجيل الدخول</button>
                            </div>
                        </form>
                       
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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