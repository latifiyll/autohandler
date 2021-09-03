<header class="header">
                    <div class="header-block header-block-collapse d-lg-none d-xl-none">
                        <button class="collapse-btn" id="sidebar-collapse-btn">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>

                    <div class="header-block header-block-nav">
                        <ul class="nav-profile">
                            <li class="profile dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                    <div class="img" style="background-image: url('https://avatars3.githubusercontent.com/u/3959008?v=3&s=40')">
                                    </div>
                                    <span class="name"> </span>
                                </a>
                                <div class="dropdown-menu profile-dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <a class="dropdown-item" href="{{url('/user/profile')}}">
                                        <i class="fa fa-user icon"></i> Profile </a>
                                    <div class="dropdown-divider"></div>
                                    <form  method="POST" action="">
                                    @csrf
                                    <div class="dropdown-item">
                                        <i   class="fa fa-power-off icon"></i> 
                                    <button class="logout" type="submit" >Logout</button>
                                    </div>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </header>
                <aside class="sidebar">
                    <div class="sidebar-container">
                        <div class="sidebar-header">
                            <div class="brand">
                                <div class="">
                                    <img style="background-color: white;" width="100%" src="{{url('assets/logo.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <nav class="menu">
                            <ul class="sidebar-menu metismenu" id="sidebar-menu">
                                <li  class="{{ (request()->is('/')) ? 'active' : '' }}">
                                    <a href="{{url('/')}}">
                                        <i class="fa fa-home"></i> Dashboard </a>
                                </li>
                                
                                <li  class="{{ (request()->is('cars*')) ? 'active' : '' }}">
                                    <a href="{{url('cars')}}">
                                        <i class="fa fa-car"></i> Cars <i class="fa arrow"></i></a>
                                </li>
                                <li class="{{ (request()->is('expenses*')) ? 'active' : '' }}">
                                    <a href="{{url('expenses')}}">
                                        <i class="fa fa-pencil-square-o"></i> Expenses <i class="fa arrow"></i></a>
                                </li>
                                <li class="{{ (request()->is('users*')) ? 'active' : '' }}">
                                    <a href="{{url('users')}}">
                                        <i class="fa fa-users"></i> Users <i class="fa arrow"></i></a>
                                </li>
                                <li class="{{ (request()->is('settings*')) ? 'active' : '' }}">
                                    <a href="{{url('settings')}}">
                                        <i class="fa fa-cogs"></i> General Settings <i class="fa arrow"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </aside>
                