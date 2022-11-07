<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>تسجيل</title>
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
                        <div class="fxt-switcher-description"> لديك حساب؟<a href="{{route('login')}}" class="fxt-switcher-text">تسجيل الدخول</a></div>
                    </div>
                </div>
            </div>
            <div class="fxt-form-content">
                <div class="fxt-main-form">
                    <div class="fxt-inner-wrap fxt-opacity fxt-transition-delay-13">
                        <h2 class="fxt-page-title"> اشتراك</h2>
                        <p class="fxt-description">قم بالتسجيل لتجربة خدماتنا المذهلة</p>
                        <form  method="POST" action="{{ route('register') }}"  enctype="multipart/form-data"  >
                @csrf
                            <div class="form-group">
                                <label for="name" class="fxt-label">الاسم الكامل للأب/ 
le nom complet</label>
                                <input type="text" id="name" class="form-control  @error('name') is-invalid @enderror "  value="{{ old('name') }}" name="name"  autocomplete="off" placeholder=" أدخل أسمك الكامل" required="required">
                                
                            </div>
                            @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:red;" > {{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="form-group">
                                <label for="name" class="fxt-label"> الاسم الكامل لتلميذ/
le nom complet</label>
                                <input type="text" id="name" class="form-control  @error('nom') is-invalid @enderror "  value="{{ old('nom') }}" name="nom"  autocomplete="off" placeholder=" أدخل أسمك الكامل" required="required">
                                
                            </div>
                            @error('nom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:red;" > {{ $message }}</strong>
                                    </span>
                                @enderror
                            <div class="form-group">
                                <label for="email" class="fxt-label">عنوان البريد الالكترونى /e-mail
</label>
                                <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"  autocomplete="off" name="email" placeholder="أدخل بريدك الإلكتروني" required="required">
                                
                            </div>
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:red;" > {{ $message }}</strong>
                                    </span>
                                @enderror
                            <div class="form-group">
                                <label for="email" class="fxt-label">صورة / image</label>
                                <input type="file"  class="form-control @error('image') is-invalid @enderror" name="image"  required="required">
                            </div>
                            @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:red;" > {{ $message }}</strong>
                                    </span>
                                @enderror
                            <div class="form-group">
                                <label for="password" class="fxt-label"> القسم /classe </label>
                                <select name="classe" id="pet-select"  class="form-control"  required="required">
    <option value="">--الرجاء تحديد خيار--</option>
    <option value="السنة الأولى إبتدائي">السنة الأولى</option>
    <option value="السنة الثانية إبتدائي">السنة الثانية</option>
    <option value="السنة ثالثة إبتدائي">السنة ثالثة</option>
    <option value="السنة رابعة إبتدائي">السنة رابعة</option>
    <option value="السنة خامسة إبتدائي">السنة خامسة</option>
    <option value="السنة سادسة إبتدائي">السنة سادسة</option>
</select>
                            </div>
                            <div class="form-group">
                                <label for="password" class="fxt-label">كلمة المرور /Mot de passe
</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror " name="password" placeholder="أدخل كلمة المرور" required="required">
                               
                            </div>
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:red;" > {{ $message }}</strong>
                                    </span>
                                @enderror
                            <div class="form-group">
                                <label for="password" class="fxt-label"> تأكيد كلمة المرور / 
Confirmez le mot de passe</label>
                                <input id="password" type="password" class="form-control" name="password_confirmation" placeholder="تأكيد كلمة المرور" required="required">
                            </div>
                            <div class="form-group">
                                <label for="password" class="fxt-label">الهاتف الرئيسي /telephone principale
</label>
                                <input id="password" type="text" class="form-control @error('telephone_principale') is-invalid @enderror " name="telephone_principale" value="{{ old('telephone_principale') }}" placeholder="أدخل الهاتف الرئيسي" required="required">
                               
                            </div>
                            @error('telephone_principale')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:red;" > {{ $message }}</strong>
                                    </span>
                                @enderror
                            <div class="form-group">
                                <label for="password" class="fxt-label">الهاتف الثانوي /telephone secondaire
</label>
                                <input  value="{{ old('telephone_secondaire') }}" id="password" type="text" class="form-control @error('telephone_secondaire') is-invalid @enderror " name="telephone_secondaire" placeholder="أدخل الهاتف الثانوي" required="required">
                               
                            </div>
                            @error('telephone_secondaire')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:red;" > {{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="form-group">
                                <label for="password" class="fxt-label">تاريخ الميلاد /date de naissance
</label>
                                <input  value="{{ old('date_de_naissance') }}"  type="date" class="form-control @error('date_de_naissance') is-invalid @enderror " name="date de naissance" placeholder="أدخل تاريخ الميلاد " required="required">
                               
                            </div>
                            @error('date_de_naissance')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:red;" > {{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="form-group">
                                <label for="password" class="fxt-label">مكان الولادة/lieu de naissance
</label>
                                <input value="{{ old('lieu_de_naissance') }}"   type="text" class="form-control @error('lieu_de_naissance') is-invalid @enderror " name="lieu_de_naissance" placeholder="أدخل مكان الولادة" required="required">
                               
                            </div>
                            @error('lieu_de_naissance')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:red;" > {{ $message }}</strong>
                                    </span>
                                @enderror
                            <div class="form-group mb-3">
                                <button type="submit" class="fxt-btn-fill">تسجيل الدخول</button>
                            </div>
                        </form>
                    
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