<?php
$b = DB::table('contacts')->get(); 

?>


<li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">notifications</i>
                            @widget('notifcation')

                           
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">NOTIFICATIONS</li>
                            <li class="body">
                                <ul class="menu">
                               
                                @widget('notifcationcontenu')
                                
                                
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="{{route('showcontact')}}">View All Notifications</a>
                            </li>
                        </ul>
                    </li>