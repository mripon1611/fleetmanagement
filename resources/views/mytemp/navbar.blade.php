<nav class="navbar header-navbar pcoded-header">
    <div class="navbar-wrapper">
        <div class="navbar-logo">
            <a class="mobile-menu" id="mobile-collapse" href="{{url()->current()}}#!">
                <i class="feather icon-menu"></i>
            </a>
            <a href="/">
                <img class="img-fluid" src="files/assets/images/site-logo.png" alt="Theme-Logo" />
            </a>
            <a class="mobile-options">
                <i class="feather icon-more-horizontal"></i>
            </a>
        </div>

        <div class="navbar-container">
            <ul class="nav-right">
                <li class="header-notification">
                    <div class="dropdown-primary dropdown">
                        @if(count($totalNotifications)>0)
                        <div class="dropdown-toggle" data-toggle="dropdown">
                            <i class="feather icon-bell"></i>
                            <span class="badge bg-c-pink">{{count($totalNotifications)}}</span>
                        </div>
                        <ul class="show-notification notification-view dropdown-menu"
                            data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                            <li>
                                <h6>Notifications</h6>
                                <label class="label label-danger">New</label>
                            </li>
                            @foreach($totalNotifications as $totalNotification)
                            <li>
                                <div class="media">
                                    <div class="media-body">
                                        <h5 class="notification-user">Vehicle : 
                                            <span class="text-info">{{$totalNotification->vcode}}</span></h5>
                                        <p class="notification-msg">It's <strong><code>{{$totalNotification->papers_type}}</code></strong> paper
                                            {{$totalNotification->expire_date}} days left to expired!</p>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                        @else
                        <div class="dropdown-toggle" data-toggle="dropdown">
                            <i class="feather icon-bell"></i>
                        </div>
                        <ul class="show-notification notification-view dropdown-menu"
                            data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                            <li>
                                <h6>Recently You have no notifications!</h6>
                            </li>
                        </ul>
                        @endif
                    </div>
                </li>
                <li class="header-notification">
                    <div class="dropdown-primary dropdown">
                        <div class="displayChatbox dropdown-toggle" data-toggle="dropdown">
                            <i class="feather icon-message-square"></i>
                            <span class="badge bg-c-green">3</span>
                        </div>
                    </div>
                </li>
                <li class="user-profile header-notification">
                    <div class="dropdown-primary dropdown">
                        <div class="dropdown-toggle" data-toggle="dropdown">
                            <img src="files/assets/images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
                            <span>John Doe</span>
                            <i class="feather icon-chevron-down"></i>
                        </div>
                        <ul class="show-notification profile-notification dropdown-menu"
                            data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                            <li>
                                <a href="index.html#!">
                                    <i class="feather icon-settings"></i> Settings
                                </a>
                            </li>
                            <li>
                                <a href="default/user-profile.html">
                                    <i class="feather icon-user"></i> Profile
                                </a>
                            </li>
                            <li>
                                <a href="default/email-inbox.html">
                                    <i class="feather icon-mail"></i> My Messages
                                </a>
                            </li>
                            <li>
                                <a href="default/auth-lock-screen.html">
                                    <i class="feather icon-lock"></i> Lock Screen
                                </a>
                            </li>
                            <li>
                                <a href="default/auth-normal-sign-in.html">
                                    <i class="feather icon-log-out"></i> Logout
                                </a>
                            </li>
                        </ul>

                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>