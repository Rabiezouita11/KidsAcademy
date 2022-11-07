
<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">


</head>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<div class="container">
    <div class="main-body">
    
          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{route('home')}}">إستقبال</a></li>
              <li class="breadcrumb-item"><a href="{{route('changemdp')}}">تغيير كلمة المرور</a></li>
              <li class="breadcrumb-item"><a href="{{route('Affichemodifier',['id'=>Auth::user()->id])}}">تعديل الملف الشخصي</a></li>
            
              <li class="breadcrumb-item active" aria-current="page">حساب تعريفي</li>
            </ol>
          </nav>
          <!-- /Breadcrumb -->
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                  <?php

$x= Auth::user()->image  ;

?>
                    <img src="{{$x}}" alt="User"  width="350" >
                    <div class="mt-3">
                      <h4> {{ Auth::user()->name }}</h4>
                  
                    </div>
                  </div>
                </div>
              </div>
         
            </div>
            
        
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                @if (session('vert'))
        <div class="alert alert-success">
        {{session('vert')}}

        </div>
        @endif
        <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">ID</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{ Auth::user()->id }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">اسم الكامل</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{ Auth::user()->name }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">بريد الالكتروني</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{ Auth::user()->email }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">صف دراسي</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{ Auth::user()->classe }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">تاريخ الميلاد</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{ Auth::user()->date_de_naissance }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">مكان الولادة</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{ Auth::user()->lieu_de_naissance }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">الهاتف الرئيسي</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{ Auth::user()->telephone_principale }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">الهاتف الثانوي</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{ Auth::user()->telephone_secondaire }}
                    </div>
                  </div>
                 
                  
                  <div class="row">
         
                </div>
              </div>
             
              
              </div>
            </div>
          </div>
        </div>
    </div>