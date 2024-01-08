@php
$systemData = App\Models\System::all();
@endphp

@foreach($systemData as $system)
    <header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 145, 'stickySetTop': '-145px', 'stickyChangeLogo': true}">
        <div class="header-body border-0 box-shadow-none">
            <div class="header-top header-top-borders">
                <div class="container h-100">
                    <div class="header-row h-100">
                        <div class="header-column justify-content-start">
                            <div class="header-row">
                                <nav class="header-nav-top">
                                    <ul class="nav nav-pills">
                                        <li class="nav-item nav-item-anim-icon d-none d-md-block">
                                            <a class="nav-link pl-0" href="#"><i class="fas fa-angle-right"></i> About Us</a>
                                        </li>
                                        <li class="nav-item nav-item-anim-icon d-none d-md-block">
                                            <a class="nav-link" href="#"><i class="fas fa-angle-right"></i> Contact Us</a>
                                        </li>
                                        <li class="nav-item nav-item-anim-icon d-none d-md-block">
                                            <a class="nav-link" href="{{route('login.view')}}"><i class="icon-login icons"></i> Login</a>
                                        </li>
                                        {{-- <li class="nav-item dropdown nav-item-left-border d-none d-sm-block nav-item-left-border-remove nav-item-left-border-md-show">
                                            <a class="nav-link" href="#" role="button" id="dropdownLanguage" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img src="img/blank.gif" class="flag flag-us" alt="English" /> English
                                                <i class="fas fa-angle-down"></i>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownLanguage">
                                                <a class="dropdown-item" href="#"><img src="img/blank.gif" class="flag flag-us" alt="English" /> English</a>
                                                <a class="dropdown-item" href="#"><img src="img/blank.gif" class="flag flag-np" alt="English" /> Nepali</a>
                                            </div>
                                        </li> --}}
                                        <li class="nav-item nav-item-left-border nav-item-left-border-remove nav-item-left-border-sm-show">
                                            <span class="ws-nowrap"><i class="fas fa-phone"></i> (+977) {{$system->phone}}</span>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="header-column justify-content-end">
                            <div class="header-row">
                                <ul class="header-social-icons social-icons d-none d-sm-block social-icons-clean">
                                    <li class="social-icons-facebook"><a href="https://sprjbs.edu.np/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="social-icons-twitter"><a href="https://sprjbs.edu.np/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                    <li class="social-icons-linkedin"><a href="https://sprjbs.edu.np/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-container container">
                <div class="header-row py-2">
                <div class="header-column justify-content-end">
                        <div class="header-row">
                            <ul class="header-extra-info d-flex align-items-center">
                                <li class="d-none d-sm-inline-flex">
                                    <div class="header-extra-info-text">
                                        <strong><a href="{{ route('school.website') }}">{{ $system->name }}</a></strong>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>  
 
                    </div>
                    <div class="header-column justify-content-end">
                        <div class="header-row">
                            <ul class="header-extra-info d-flex align-items-center">
                                <li class="d-none d-sm-inline-flex">
                                    <div class="header-extra-info-text">
                                        <label>SEND US AN EMAIL</label>
                                        <strong><a href="mailto:{{$system->email}}">{{$system->email}}</a></strong>
                                    </div>
                                </li>
                                <li>
                                    <div class="header-extra-info-text">
                                        <label>CALL US NOW</label>
                                        <strong><a href="tel:{{$system->phone}}">{{$system->phone}}</a></strong>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>					
            <div class="header-nav-bar bg-color-light-scale-1 z-index-0" data-sticky-header-style="{'minResolution': 991}" data-sticky-header-style-active="{'background-color': 'transparent'}" data-sticky-header-style-deactive="{'background-color': '#f7f7f7'}">
                <div class="container">
                    <div class="header-row">
                        <div class="header-column">
                            <div class="header-row justify-content-end">
                                <div class="header-nav header-nav-stripe justify-content-start">
                                    <div class="header-nav-main header-nav-main-square header-nav-main-effect-1 header-nav-main-sub-effect-1">
                                        <nav class="collapse">
                                            <ul class="nav nav-pills" id="mainNav" data-sticky-header-style="{'minResolution': 991}" data-sticky-header-style-active="{'margin-left': '120px'}" data-sticky-header-style-deactive="{'margin-left': '0'}">
                                                <li class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle" href="{{route('school.website')}}">Home</a>
                                                </li>
                                                <li class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle" href="#">About Us</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="{{route('team.view')}}">Our Team</a></li>
                                                        <li><a class="dropdown-item" href="{{route('schoolprofile')}}">School Profile</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                                        <i class="fas fa-bars"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endforeach
