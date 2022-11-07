<?php
$b = DB::table('contacts')->get(); 
?>
 @foreach ($b as $a)
                                <li>
                                        <a href="javascript:void(0);">
                                           
                                          
                                            <div class="menu-info">
                                                <h4>{{$a->nom}} : {{$a->message}}  </h4>
                    
                                               
                                                <p>
                                                    <i class="material-icons">access_time</i> {{$a->created_at}} 
                                                </p>
                                            </div>

                                        </a>
                                    </li>
                                    @endforeach
                              