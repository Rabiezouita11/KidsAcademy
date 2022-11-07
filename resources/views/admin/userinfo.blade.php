<div class="user-info">
                <div class="image">
                    <img src="{{ Auth::user()->image}}" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</div>
                    <div class="email"> {{ Auth::user()->email }}</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="{{route('profilee')}}"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>
                           
                      
                        
                            <li role="separator" class="divider"></li>
                            
                            <li><a  href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
             @csrf
         </form>
                    </div>
                </div>
            </div>