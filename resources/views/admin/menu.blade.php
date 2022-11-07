<div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li>
                        <a href="{{url('home_administrateur')}}">
                            <i class="material-icons">home</i>
                            <span>Home  / الصفحة الرئيسية</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">widgets</i>
                            <span>absences / غيابات</span>
                        </a>
                        <ul class="ml-menu">
                            @if  ( Auth::user()->classe =='السنة الأولى إبتدائي' )
                            <li >
                                <a href="{{route('index1')}}" class="menu-toggle">
                                    <span>السنة الأولى إبتدائي</span>
                                </a>
                               
                            </li>
                            @elseif  ( Auth::user()->classe =='السنة الثانية إبتدائي' )
                            <li>
                                <a href="{{route('index2')}}" class="menu-toggle">
                                    <span>السنة الثانية إبتدائي</span>
                                </a>
                               
                            </li>
                            @elseif ( Auth::user()->classe =='السنة ثالثة إبتدائي' )
                            <li>
                                <a href="{{route('index3')}}" class="menu-toggle">
                                    <span>السنة ثالثة إبتدائي</span>
                                </a>
                               
                            </li>
                            @elseif ( Auth::user()->classe =='السنة رابعة إبتدائي' )
                            <li>
                                <a href="{{route('index4')}}" class="menu-toggle">
                                    <span>السنة رابعة إبتدائي</span>
                                </a>
                               
                            </li>
                            @elseif ( Auth::user()->classe =='السنة خامسة إبتدائي' )
                            <li>
                                <a href="{{route('index5')}}" class="menu-toggle">
                                    <span>السنة خامسة إبتدائي</span>
                                </a>
                               
                            </li>
                            @elseif ( Auth::user()->classe =='السنة سادسة إبتدائي' )
                            <li>
                                <a href="{{route('index6')}}" class="menu-toggle">
                                    <span>السنة سادسة إبتدائي</span>
                                </a>
                               
                            </li>
                            @endif
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">swap_calls</i>
                            <span>historique de présences / سجل الحضور
 </span>
                        </a>
                        <ul class="ml-menu">
                            @if  ( Auth::user()->classe =='السنة الأولى إبتدائي' )
                            <li >
                                <a href="{{route('historique1')}}" class="menu-toggle">
                                    <span>السنة الأولى إبتدائي</span>
                                </a>
                               
                            </li>
                            @elseif  ( Auth::user()->classe =='السنة الثانية إبتدائي' )
                            <li>
                                <a href="{{route('historique2')}}" class="menu-toggle">
                                    <span>السنة الثانية إبتدائي</span>
                                </a>
                               
                            </li>
                            @elseif ( Auth::user()->classe =='السنة ثالثة إبتدائي' )
                            <li>
                                <a href="{{route('historique3')}}" class="menu-toggle">
                                    <span>السنة ثالثة إبتدائي</span>
                                </a>
                               
                            </li>
                            @elseif ( Auth::user()->classe =='السنة رابعة إبتدائي' )
                            <li>
                                <a href="{{route('historique4')}}" class="menu-toggle">
                                    <span>السنة رابعة إبتدائي</span>
                                </a>
                               
                            </li>
                            @elseif ( Auth::user()->classe =='السنة خامسة إبتدائي' )
                            <li>
                                <a href="{{route('historique5')}}" class="menu-toggle">
                                    <span>السنة خامسة إبتدائي</span>
                                </a>
                               
                            </li>
                            @elseif ( Auth::user()->classe =='السنة سادسة إبتدائي' )
                            <li>
                                <a href="{{route('historique6')}}" class="menu-toggle">
                                    <span>السنة سادسة إبتدائي</span>
                                </a>
                               
                            </li>
                            @endif
                        </ul>
                    </li>

                    @if  ( Auth::user()->classe =='السنة الأولى إبتدائي' )
                    <li>
                        <a href="{{route('eleve1')}}" class="menu-toggle">
                            <i class="material-icons">swap_calls</i>
                            <span>liste de élève / قائمة التلاميذ
</span>
                        </a>
                      
                    </li>
                    @elseif  ( Auth::user()->classe =='السنة الثانية إبتدائي' )
                    <li>
                        <a href="{{route('eleve2')}}" class="menu-toggle">
                            <i class="material-icons">swap_calls</i>
                            <span>liste de élève / قائمة التلاميذ</span>
                        </a>
                      
                    </li>
                    @elseif  ( Auth::user()->classe =='السنة ثالثة إبتدائي' )
                    <li>
                        <a href="{{route('eleve3')}}" class="menu-toggle">
                            <i class="material-icons">swap_calls</i>
                            <span>liste de élève / قائمة التلاميذ </span>
                        </a>
                      
                    </li>
                    @elseif  ( Auth::user()->classe =='السنة رابعة إبتدائي' )
                    <li>
                        <a href="{{route('eleve4')}}" class="menu-toggle">
                            <i class="material-icons">swap_calls</i>
                            <span>liste de élève / قائمة التلاميذ </span>
                        </a>
                      
                    </li>
                    @elseif  ( Auth::user()->classe =='السنة خامسة إبتدائي' )
                    <li>
                        <a href="{{route('eleve5')}}" class="menu-toggle">
                            <i class="material-icons">swap_calls</i>
                            <span>liste de élève / قائمة التلاميذ </span>
                        </a>
                      
                    </li>
                    @elseif  ( Auth::user()->classe =='السنة سادسة إبتدائي' )
                    <li>
                        <a href="{{route('eleve6')}}" class="menu-toggle">
                            <i class="material-icons">swap_calls</i>
                            <span>liste de élève / قائمة التلاميذ </span>
                        </a>
                      
                    </li>
                    @endif
                    <li>
                        <a href="{{route('affiche_rondivo')}}" class="menu-toggle">
                            <i class="material-icons">swap_calls</i>
                            <span>Rendez-vous /طلب موعد
 </span>
                        </a>
                  
                    </li>
                    <li>
                        <a href="{{route('affichecahierlaison')}}" class="menu-toggle">
                            <i class="material-icons">swap_calls</i>
                            <span>cahier de laision / كراس المتابعة المدرسية  ( @widget('countcahierlaison') )</span>
                        </a>
                  
                    </li>
                    <li>
                        <a href="#" class="menu-toggle">
                            <i class="material-icons">swap_calls</i>
                            <span>club aflaton /نادي أفلاطون  ( @widget('Count') )</span>
                        </a>
                        <ul class="ml-menu">
                        <li >
                                <a href="{{route('aflatonn')}}" class="menu-toggle">
                                    <span>les participants du club aflatoun / المنخرطون في نادي أفلاطون
</span>
                                </a>
                               
                            </li>
                            <li >
                                <a href="{{route('image')}}" class="menu-toggle">
                                    <span> projets-club / مشاريع النادي </span>
                                </a>
                               
                            </li>
</ul>
                    </li>
                   
                    <li>
                        <a href="{{route('showdoosiereleve')}}" class="menu-toggle">
                            <i class="material-icons">swap_calls</i>
                            <span>dossier d'élève  / سجل التلميذ</span>
                        </a>
                  
                    </li>
                    <li>
                        <a href="{{route('showcontact')}}" class="menu-toggle">
                            <i class="material-icons">swap_calls</i>
                            <span>contact / اتصل </span>
                        </a>
                  
                    </li>
                    <li>
                        <a href="{{route('feedback')}}" class="menu-toggle">
                            <i class="material-icons">swap_calls</i>
                            <span>votre avis /ردود الفعل (@widget('feedback')) </span>
                        </a>
                  
                    </li>
                  
                
                    
                
                   
                </ul>
            </div>