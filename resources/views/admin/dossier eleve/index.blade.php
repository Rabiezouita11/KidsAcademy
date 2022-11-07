<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Administrateur</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../../plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../../plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../../css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../../css/themes/all-themes.css" rel="stylesheet" />
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
  <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
        <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
 
</head>

<body class="theme-red">

    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
   
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="../../index.html">ADMINBSB - MATERIAL DESIGN</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                    <!-- #END# Call Search -->
                    <!-- Notifications -->
                   @include('admin.notification')
                    <!-- #END# Notifications -->
                    <!-- Tasks -->
                   <!--  <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">flag</i>
                            <span class="label-count">9</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">TASKS</li>
                            <li class="body">
                                <ul class="menu tasks">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Footer display issue
                                                <small>32%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-pink" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 32%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Make new buttons
                                                <small>45%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-cyan" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Create new dashboard
                                                <small>54%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-teal" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 54%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Solve transition issue
                                                <small>65%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Answer GitHub questions
                                                <small>92%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 92%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="javascript:void(0);">View All Tasks</a>
                            </li>
                        </ul>
                    </li> -->
                    <!-- #END# Tasks -->
                    <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            @include('admin.userinfo')
            <!-- #User Info -->
            <!-- Menu -->
           @include('admin.menu')
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2022 <a href="javascript:void(0);">Administrateur</a>.
                </div>
              
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
    
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                    <ul class="demo-choose-skin">
                        <li data-theme="red" class="active">
                            <div class="red"></div>
                            <span>Red</span>
                        </li>
                        <li data-theme="pink">
                            <div class="pink"></div>
                            <span>Pink</span>
                        </li>
                        <li data-theme="purple">
                            <div class="purple"></div>
                            <span>Purple</span>
                        </li>
                        <li data-theme="deep-purple">
                            <div class="deep-purple"></div>
                            <span>Deep Purple</span>
                        </li>
                        <li data-theme="indigo">
                            <div class="indigo"></div>
                            <span>Indigo</span>
                        </li>
                        <li data-theme="blue">
                            <div class="blue"></div>
                            <span>Blue</span>
                        </li>
                        <li data-theme="light-blue">
                            <div class="light-blue"></div>
                            <span>Light Blue</span>
                        </li>
                        <li data-theme="cyan">
                            <div class="cyan"></div>
                            <span>Cyan</span>
                        </li>
                        <li data-theme="teal">
                            <div class="teal"></div>
                            <span>Teal</span>
                        </li>
                        <li data-theme="green">
                            <div class="green"></div>
                            <span>Green</span>
                        </li>
                        <li data-theme="light-green">
                            <div class="light-green"></div>
                            <span>Light Green</span>
                        </li>
                        <li data-theme="lime">
                            <div class="lime"></div>
                            <span>Lime</span>
                        </li>
                        <li data-theme="yellow">
                            <div class="yellow"></div>
                            <span>Yellow</span>
                        </li>
                        <li data-theme="amber">
                            <div class="amber"></div>
                            <span>Amber</span>
                        </li>
                        <li data-theme="orange">
                            <div class="orange"></div>
                            <span>Orange</span>
                        </li>
                        <li data-theme="deep-orange">
                            <div class="deep-orange"></div>
                            <span>Deep Orange</span>
                        </li>
                        <li data-theme="brown">
                            <div class="brown"></div>
                            <span>Brown</span>
                        </li>
                        <li data-theme="grey">
                            <div class="grey"></div>
                            <span>Grey</span>
                        </li>
                        <li data-theme="blue-grey">
                            <div class="blue-grey"></div>
                            <span>Blue Grey</span>
                        </li>
                        <li data-theme="black">
                            <div class="black"></div>
                            <span>Black</span>
                        </li>
                    </ul>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="settings">
                    <div class="demo-settings">
                        <p>GENERAL SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Report Panel Usage</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Email Redirect</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>SYSTEM SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Notifications</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Auto Updates</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>ACCOUNT SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Offline</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Location Permission</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </aside>
        <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
              <center>  <h2>@widget('date')</h2></center> 
              <br>
             </center>
             <a class="btn btn-primary" href="{{route('ajouterdossier')}}" role="button">ajouter   dossier d'eleve </a></center>
            </div>
            <!-- Basic Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                          <center><h2>
                          مجال اللغة العربية
                               
                            </h2>   </center>  
                            <ul class="header-dropdown m-r--5">
                               
                            </ul>
                        </div>
                        {!! Toastr::message() !!}
                        <?php
$x=Auth::user()->id;


$b = \App\Models\Langaearabe::with('parent')->where('enseignant_id','=',$x)->get();

?>
                      
                        @if( $b->isEmpty())
  
  <center>  <h2>  il n'ya pas des message   </h2>
 </center>
@else

<div class="body table-responsive">
      <table class="table">
          <thead>
              <tr>
                  <th>#</th>
                  <th>nom de parent</th>
                  <th>nom de prof</th>
                  <th>image de parent</th>
                  <th>semstre</th>
                 
          
              </tr>
          </thead>
          
          <tbody>


          @foreach( $b as $l)
          <?php
$a=$l->etat;

           ?>
              <tr>
                  <th scope="row">{{$l->id}}</th>
                  <td>{{$l->parent->name}}</td>
                  <td>{{$l->enseignant->name}}</td>
                  <td><img src="{{$l->parent->image}}" alt=" " class="img-fluid"  width="100px" height="100px"></td>
                  <td>{{$l->semstre}}</td>
               
                  </tr>
             @endforeach
          </tbody>
         
      </table>
   
  </div>
</div>
</div>
</div>
@endif


              
                   
            <!-- #END# Basic Table -->
            <!-- Striped Rows -->
           
          
         
            <!-- #END# Condensed Table -->
          
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
           
            <!-- Basic Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                          <center><h2>
                         
                          مجال العلوم و التكنولوجيا
                            </h2>  
                   </center>  
                            <ul class="header-dropdown m-r--5">
                               
                            </ul>
                        </div>
                   
                        <?php
$x=Auth::user()->id;


$z = \App\Models\Al3ouloum::with('parent')->where('enseignant_id','=',$x)->get();

?>
                      
                        @if( $z->isEmpty())
  
  <center>  <h2>  il n'ya pas des message   </h2>
 </center>
@else

<div class="body table-responsive">
      <table class="table">
          <thead>
              <tr>
                  <th>#</th>
                  <th>nom de parent</th>
                  <th>nom de prof</th>
                  <th>image de parent</th>
                  <th> semstre </th>
                 
                 
          
              </tr>
          </thead>
          
          <tbody>


          @foreach( $z as $l)
          <?php
$a=$l->etat;

           ?>
              <tr>
                  <th scope="row">{{$l->id}}</th>
                  <td>{{$l->parent->name}}</td>
                  <td>{{$l->enseignant->name}}</td>
                  <td><img src="{{$l->parent->image}}" alt=" " class="img-fluid"  width="100px" height="100px"></td>
                  <td>{{$l->semstre}}</td>
               
                 
              </tr>
             @endforeach
           
          </tbody>

      </table>
      
  </div>
</div>
</div>
</div>
@endif


              
                   
            <!-- #END# Basic Table -->
            <!-- Striped Rows -->
           
          
         
            <!-- #END# Condensed Table -->
          
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
           
            <!-- Basic Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                          <center><h2>
                          مجال التنشئة
                               
                            </h2>   </center>  
                            <ul class="header-dropdown m-r--5">
                               
                            </ul>
                        </div>
                   
                        <?php
$x=Auth::user()->id;


$ii = \App\Models\Tanschaa::with('parent')->where('enseignant_id','=',$x)->get();

?>
                      
                        @if( $ii->isEmpty())
  
  <center>  <h2>  il n'ya pas des message   </h2>
 </center>
@else

<div class="body table-responsive">
      <table class="table">
          <thead>
              <tr>
                  <th>#</th>
                  <th>nom de parent</th>
                  <th>nom de prof</th>
                  <th>image de parent</th>
                 <th>semstre</th>
                 
          
              </tr>
          </thead>
          
          <tbody>


          @foreach( $ii as $l)
          <?php
$a=$l->etat;

           ?>
              <tr>
                  <th scope="row">{{$l->id}}</th>
                  <td>{{$l->parent->name}}</td>
                  <td>{{$l->enseignant->name}}</td>
                  <td><img src="{{$l->parent->image}}" alt=" " class="img-fluid"  width="100px" height="100px"></td>
                  <td>{{$l->semstre}}</td>

                
             @endforeach
           
          </tbody>

      </table>
      
  </div>
</div>
</div>
</div>
@endif


              
                   
            <!-- #END# Basic Table -->
            <!-- Striped Rows -->
           
          
         
            <!-- #END# Condensed Table -->
          
        </div>
    </section>
<?php

$m= Auth::user()->classe;

?>
  @if ( $m =='السنة خامسة إبتدائي' )  
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
              <center>  <h2>@widget('date')</h2></center> 
              
            </div>
            <!-- Basic Table -->

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                          <center><h2>
                          مجال اللغات

                               
                            </h2>   </center>  
                            <ul class="header-dropdown m-r--5">
                               
                            </ul>
                        </div>
                 
                        <?php
$x=Auth::user()->id;


$o = \App\Models\Francais::with('parent')->where('enseignant_id','=',$x)->get();

?>
                      
                        @if( $o->isEmpty())
  
  <center>  <h2>  il n'ya pas des message   </h2>
 </center>
@else

<div class="body table-responsive">
      <table class="table">
          <thead>
              <tr>
                  <th>#</th>
                  <th>nom de parent</th>
                  <th>nom de prof</th>
                  <th>image de parent</th>
               <th>semstre</th>
                 
          
              </tr>
          </thead>
          
          <tbody>


          @foreach( $o as $l)
          <?php
$a=$l->etat;

           ?>
              <tr>
                  <th scope="row">{{$l->id}}</th>
                  <td>{{$l->parent->name}}</td>
                  <td>{{$l->enseignant->name}}</td>
                  <td><img src="{{$l->parent->image}}" alt=" " class="img-fluid"  width="100px" height="100px"></td>
                  <td>{{$l->semstre}}</td>

              
             @endforeach
             <a class="btn btn-primary" href="{{route('pageRepondre')}}" role="button">ajouter message</a>
          </tbody>

      </table>
      
  </div>
</div>
</div>
</div>
@endif


              
                   
            <!-- #END# Basic Table -->
            <!-- Striped Rows -->
           
          
         
            <!-- #END# Condensed Table -->
          
        </div>
    </section>
    @endif
    @if  ( $m =='السنة سادسة إبتدائي' )
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
              <center>  <h2>@widget('date')</h2></center> 
              
            </div>
            <!-- Basic Table -->

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                          <center><h2>
                          مجال اللغات

                               
                            </h2>   </center>  
                            <ul class="header-dropdown m-r--5">
                               
                            </ul>
                        </div>
                 
                        <?php
$x=Auth::user()->id;


$o = \App\Models\Francais::with('parent')->where('enseignant_id','=',$x)->get();

?>
                      
                        @if( $o->isEmpty())
  
  <center>  <h2>  il n'ya pas des message   </h2>
 </center>
@else

<div class="body table-responsive">
      <table class="table">
          <thead>
              <tr>
                  <th>#</th>
                  <th>nom de parent</th>
                  <th>nom de prof</th>
                  <th>image de parent</th>
               <th>semstre</th>
                 
          
              </tr>
          </thead>
          
          <tbody>


          @foreach( $o as $l)
          <?php
$a=$l->etat;

           ?>
              <tr>
                  <th scope="row">{{$l->id}}</th>
                  <td>{{$l->parent->name}}</td>
                  <td>{{$l->enseignant->name}}</td>
                  <td><img src="{{$l->parent->image}}" alt=" " class="img-fluid"  width="100px" height="100px"></td>
                  <td>{{$l->semstre}}</td>

              
             @endforeach
             <a class="btn btn-primary" href="{{route('pageRepondre')}}" role="button">ajouter message</a>
          </tbody>

      </table>
      
  </div>
</div>
</div>
</div>
@endif


              
                   
            <!-- #END# Basic Table -->
            <!-- Striped Rows -->
           
          
         
            <!-- #END# Condensed Table -->
          
        </div>
    </section>

@endif




    @if ( $m =='السنة ثالثة إبتدائي' ) 
    <section class="content">
        <div class="container-fluid">
           
            <!-- Basic Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                          <center><h2>
                          مجال اللغة الفرنسية

                               
                            </h2>   </center>  
                            <ul class="header-dropdown m-r--5">
                               
                            </ul>
                        </div>
               
                        <?php
$x=Auth::user()->id;


$m = \App\Models\Francais::with('parent')->where('enseignant_id','=',$x)->get();

?>
                      
                        @if( $m->isEmpty())
  
  <center>  <h2>  il n'ya pas des message   </h2>
 
@else

<div class="body table-responsive">
      <table class="table">
          <thead>
              <tr>
                  <th>#</th>
                  <th>nom de parent</th>
                  <th>nom de prof</th>
                  <th>image de parent</th>
                <th>semstre</th>
                 
          
              </tr>
          </thead>
          
          <tbody>


          @foreach( $m as $l)
          <?php
$a=$l->etat;

           ?>
              <tr>
                  <th scope="row">{{$l->id}}</th>
                  <td>{{$l->parent->name}}</td>
                  <td>{{$l->enseignant->name}}</td>
                  <td><img src="{{$l->parent->image}}" alt=" " class="img-fluid"  width="100px" height="100px"></td>
                  
               
                  <td>{{$l->semstre}}</td>

                 
             @endforeach
             <a class="btn btn-primary" href="{{route('pageRepondre')}}" role="button">ajouter message</a>
          </tbody>

      </table>
      
  </div>
</div>
</div>
</div>
@endif


              
                   
            <!-- #END# Basic Table -->
            <!-- Striped Rows -->
           
          
         
            <!-- #END# Condensed Table -->
          
        </div>
    </section>
@endif
@if  ( $m =='السنة رابعة إبتدائي' )
<section class="content">
        <div class="container-fluid">
           
            <!-- Basic Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                          <center><h2>
                          مجال اللغة الفرنسية

                               
                            </h2>   </center>  
                            <ul class="header-dropdown m-r--5">
                               
                            </ul>
                        </div>
               
                        <?php
$x=Auth::user()->id;


$m = \App\Models\Message::with('parent')->where('enseignant_id','=',$x)->get();

?>
                      
                        @if( $m->isEmpty())
  
  <center>  <h2>  il n'ya pas des message   </h2>
 
@else

<div class="body table-responsive">
      <table class="table">
          <thead>
              <tr>
                  <th>#</th>
                  <th>nom de parent</th>
                  <th>nom de prof</th>
                  <th>image de parent</th>
                <th>semstre</th>
                 
          
              </tr>
          </thead>
          
          <tbody>


          @foreach( $m as $l)
          <?php
$a=$l->etat;

           ?>
              <tr>
                  <th scope="row">{{$l->id}}</th>
                  <td>{{$l->parent->name}}</td>
                  <td>{{$l->enseignant->name}}</td>
                  <td><img src="{{$l->parent->image}}" alt=" " class="img-fluid"  width="100px" height="100px"></td>
                  
               
                  <td>{{$l->semstre}}</td>

                 
             @endforeach
             <a class="btn btn-primary" href="{{route('pageRepondre')}}" role="button">ajouter message</a>
          </tbody>

      </table>
      
  </div>
</div>
</div>
</div>
@endif


              
                   
            <!-- #END# Basic Table -->
            <!-- Striped Rows -->
           
          
         
            <!-- #END# Condensed Table -->
          
        </div>
    </section>


@endif
    <!-- Jquery Core Js -->
    <script src="../../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../../plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../../plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="../../js/admin.js"></script>

    <!-- Demo Js -->
    <script src="../../js/demo.js"></script>
</body>

</html>