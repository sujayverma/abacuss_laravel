
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                @if (auth()->user())
                
                    <li class="user-pro"> 
                        <a class="" href="/dashboard" aria-expanded="false"><i class="fa fa-columns"></i><span class="hide-menu">Dashboard</span></a>
                    </li>
                    <li> 
                        <a class="" href="{{ route('clients') }}" aria-expanded="false"><i class="fa fa-list"></i><span class="hide-menu">Clients </span></a>
                    </li>
                    <li> 
                        <a class="waves-effect waves-dark" href="#" aria-expanded="false"><i class="fa fa-key"></i><span class="hide-menu">Change Password</span></a>
                    </li>
                    <li> 
                        <a class="" href="/profile" aria-expanded="false"><i class="fa fa-address-card"></i><span class="hide-menu">Manage Profile</span></a>
                    </li>
                    <li> 
                        <a class="waves-effect waves-dark" href="{{ route('logout') }}" aria-expanded="false"><i class="fa fa-sign-out-alt"></i><span class="hide-menu">Log Out</span></a>
                    </li>
                   
                @else
                    <li class="user-pro"> 
                        <a class="" href="#" aria-expanded="false"><i class="fa fa-columns"></i><span class="hide-menu">Magazines</span></a>
                    </li>
                @endif
                
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>