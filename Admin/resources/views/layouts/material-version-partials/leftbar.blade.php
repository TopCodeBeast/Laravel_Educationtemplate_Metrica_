  <!-- leftbar-tab-menu -->
        <div class="leftbar-tab-menu">
            <div class="main-icon-menu">
                <a href="/analytics/analytics-index" class="logo logo-metrica d-block text-center">
                    <span>
                        <img src="{{ URL::asset('assets/images/logo-sm.png')}}" alt="logo-small" class="logo-sm">
                    </span>
                </a>
                <nav class="nav">
                    <a href="#MetricaAnalytics" class="nav-link" data-toggle="tooltip-custom" data-placement="right" data-trigger="hover" title="" data-original-title="Analytics">
                        <i data-feather="bar-chart-2" class="align-self-center menu-icon icon-dual"></i>
                    </a><!--end MetricaAnalytics--> 

                    <a href="#MetricaApps" class="nav-link" data-toggle="tooltip-custom" data-placement="right" data-trigger="hover" title="" data-original-title="Apps">
                        <i data-feather="grid" class="align-self-center menu-icon icon-dual"></i>
                    </a><!--end MetricaApps-->

                    <a href="#MetricaUikit" class="nav-link" data-toggle="tooltip-custom" data-placement="right" data-trigger="hover" title="" data-original-title="UI Kit">
                        <i data-feather="package" class="align-self-center menu-icon icon-dual"></i>
                    </a><!--end MetricaUikit-->

                    <a href="#MetricaPages" class="nav-link" data-toggle="tooltip-custom" data-placement="right" data-trigger="hover" title="" data-original-title="Pages">
                        <i data-feather="copy" class="align-self-center menu-icon icon-dual"></i>             
                    </a><!--end MetricaPages-->

                    <a href="#MetricaAuthentication" class="nav-link" data-toggle="tooltip-custom" data-placement="right" data-trigger="hover" title="" data-original-title="Authentication">
                        <i data-feather="lock" class="align-self-center menu-icon icon-dual"></i>
                    </a> <!--end MetricaAuthentication--> 

                </nav><!--end nav-->
                <div class="pro-metrica-end">
                    <a href="" class="help" data-toggle="tooltip-custom" data-placement="right" data-trigger="hover" title="" data-original-title="Chat">
                        <i data-feather="message-circle" class="align-self-center menu-icon icon-md icon-dual mb-4"></i> 
                    </a>
                    <a href="" class="profile">
                        <img src="{{ URL::asset('assets/images/users/user-4.jpg')}}" alt="profile-user" class="rounded-circle thumb-sm"> 
                    </a>
                </div>
            </div><!--end main-icon-menu-->

            <div class="main-menu-inner">
                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="/analytics/analytics-index" class="logo">
                        <span>
                            <img src="{{ URL::asset('assets/images/logo-dark.png')}}" alt="logo-large" class="logo-lg logo-dark">
                            <img src="{{ URL::asset('assets/images/logo.png')}}" alt="logo-large" class="logo-lg logo-light">
                        </span>
                    </a>
                </div>
                <!--end logo-->
                <div class="menu-body slimscroll">                    
                    <div id="MetricaAnalytics" class="main-icon-menu-pane">
                        <div class="title-box">
                            <h6 class="menu-title">Analytics</h6>       
                        </div>
                        <ul class="nav">
                            <li class="nav-item"><a class="nav-link" href="/material-version/analytics/analytics-index">Analytic</a></li>
                            <li class="nav-item"><a class="nav-link" href="/material-version/analytics/analytics-customers">Customers</a></li>
                            <li class="nav-item"><a class="nav-link" href="/material-version/analytics/analytics-reports">Reports</a></li> 
                        </ul>
                    </div><!-- end Analytic -->         

                    <div id="MetricaApps" class="main-icon-menu-pane">
                        <div class="title-box">
                            <h6 class="menu-title">Apps</h6>
                        </div>
                        <ul class="nav metismenu">
                            <li class="nav-item">
                                <a class="nav-link" href="javascript: void(0);"><span class="w-100">Email</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="/material-version/apps/email-inbox">Inbox</a></li>
                                    <li><a href="/material-version/apps/email-read">Read Email</a></li>            
                                </ul>            
                            </li><!--end nav-item-->
                            <li class="nav-item"><a class="nav-link" href="/material-version/apps/chat">Chat</a></li>
                            <li class="nav-item"><a class="nav-link" href="/material-version/apps/contact-list">Contact List</a></li>
                            <li class="nav-item"><a class="nav-link" href="/material-version/apps/calendar">Calendar</a></li>
                            <li class="nav-item"><a class="nav-link" href="/material-version/apps/invoice">Invoice</a></li>                            
                        </ul>
                    </div><!-- end Crypto -->
                    
                    <div id="MetricaUikit" class="main-icon-menu-pane">
                        <div class="title-box">
                            <h6 class="menu-title">UI Kit</h6>      
                        </div>
                        <ul class="nav metismenu">                                
                            <li class="nav-item">
                                <a class="nav-link" href="#"><span class="w-100">UI Elements</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="/material-version/others/ui-bootstrap">Bootstrap</a></li>
                                    <li><a href="/material-version/others/ui-animation">Animation</a></li>
                                    <li><a href="/material-version/others/ui-avatar">Avatar</a></li>
                                    <li><a href="/material-version/others/ui-clipboard">Clip Board</a></li>
                                    <li><a href="/material-version/others/ui-files">File Manager</a></li>
                                    <li><a href="/material-version/others/ui-ribbons">Ribbons</a></li>
                                    <li><a href="/material-version/others/ui-dragula">Dragula</a></li>
                                    <li><a href="/material-version/others/ui-check-radio">Check & Radio</a></li>
                                </ul>            
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="#"><span class="w-100">Advanced UI</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="/material-version/others/advanced-rangeslider">Range Slider</a></li>
                                    <li><a href="/material-version/others/advanced-sweetalerts">Sweet Alerts</a></li>
                                    <li><a href="/material-version/others/advanced-nestable">Nestable List</a></li>
                                    <li><a href="/material-version/others/advanced-ratings">Ratings</a></li>
                                    <li><a href="/material-version/others/advanced-highlight">Highlight</a></li>
                                    <li><a href="/material-version/others/advanced-session">Session Timeout</a></li>
                                    <li><a href="/material-version/others/advanced-idle-timer">Idle Timer</a></li>
                                </ul>            
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="#"><span class="w-100">Forms</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="/material-version/others/forms-elements">Basic Elements</a></li>
                                    <li><a href="/material-version/others/forms-advanced">Advance Elements</a></li>
                                    <li><a href="/material-version/others/forms-validation">Validation</a></li>
                                    <li><a href="/material-version/others/forms-wizard">Wizard</a></li>
                                    <li><a href="/material-version/others/forms-editors">Editors</a></li>
                                    <li><a href="/material-version/others/forms-repeater">Repeater</a></li>
                                    <li><a href="/material-version/others/forms-x-editable">X Editable</a></li>
                                    <li><a href="/material-version/others/forms-uploads">File Upload</a></li>
                                    <li><a href="/material-version/others/forms-img-crop">Image Crop</a></li>
                                </ul>            
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="#"><span class="w-100">Charts</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="/material-version/others/charts-apex">Apex</a></li>
                                    <li><a href="/material-version/others/charts-morris">Morris</a></li>
                                    <li><a href="/material-version/others/charts-chartist">Chartist</a></li>
                                    <li><a href="/material-version/others/charts-flot">Flot</a></li>
                                    <li><a href="/material-version/others/charts-peity">Peity</a></li>
                                    <li><a href="/material-version/others/charts-chartjs">Chartjs</a></li>
                                    <li><a href="/material-version/others/charts-sparkline">Sparkline</a></li>
                                    <li><a href="/material-version/others/charts-knob">Jquery Knob</a></li>
                                    <li><a href="/material-version/others/charts-justgage">JustGage</a></li>
                                </ul>            
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="#"><span class="w-100">Tables</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="/material-version/others/tables-basic">Basic</a></li>
                                    <li><a href="/material-version/others/tables-datatable">Datatables</a></li>
                                    <li><a href="/material-version/others/tables-responsive">Responsive</a></li>
                                    <li><a href="/material-version/others/tables-footable">Footable</a></li>
                                    <li><a href="/material-version/others/tables-jsgrid">Jsgrid</a></li>
                                    <li><a href="/material-version/others/tables-dragger">Dragger</a></li>
                                    <li><a href="/material-version/others/tables-editable">Editable</a></li>
                                </ul>            
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="#"><span class="w-100">Icons</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="/material-version/others/icons-materialdesign">Material Design</a></li>
                                    <li><a href="/material-version/others/icons-dripicons">Dripicons</a></li>
                                    <li><a href="/material-version/others/icons-fontawesome">Font awesome</a></li>
                                    <li><a href="/material-version/others/icons-themify">Themify</a></li>
                                    <li><a href="/material-version/others/icons-feather">Feather</a></li>
                                    <li><a href="/material-version/others/icons-typicons">Typicons</a></li>
                                    <li><a href="/material-version/others/icons-emoji">Emoji <i class="em em-ok_hand"></i></a></li>
                                </ul>            
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="#"><span class="w-100">Maps</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="/material-version/others/maps-google">Google Maps</a></li>
                                    <li><a href="/material-version/others/maps-leaflet">Leaflet Maps</a></li>
                                    <li><a href="/material-version/others/maps-vector">Vector Maps</a></li>       
                                </ul>            
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="#"><span class="w-100">Email Templates</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="/material-version/others/email-templates-basic">Basic Action Email</a></li>
                                    <li><a href="/material-version/others/email-templates-alert">Alert Email</a></li>
                                    <li><a href="/material-version/others/email-templates-billing">Billing Email</a></li>         
                                </ul>            
                            </li><!--end nav-item-->
                        </ul><!--end nav-->
                    </div><!-- end Others -->

                    <div id="MetricaPages" class="main-icon-menu-pane">
                        <div class="title-box">
                            <h6 class="menu-title">Pages</h6>        
                        </div>
                        <ul class="nav">
                            <li class="nav-item"><a class="nav-link" href="/material-version/pages/pages-profile">Profile</a></li>
                            <li class="nav-item"><a class="nav-link" href="/material-version/pages/pages-tour">Tour</a></li>
                            <li class="nav-item"><a class="nav-link" href="/material-version/pages/pages-timeline">Timeline</a></li>
                            <li class="nav-item"><a class="nav-link" href="/material-version/pages/pages-treeview">Treeview</a></li>
                            <li class="nav-item"><a class="nav-link" href="/material-version/pages/pages-starter">Starter Page</a></li>
                            <li class="nav-item"><a class="nav-link" href="/material-version/pages/pages-pricing">Pricing</a></li>
                            <li class="nav-item"><a class="nav-link" href="/material-version/pages/pages-blogs">Blogs</a></li>
                            <li class="nav-item"><a class="nav-link" href="/material-version/pages/pages-faq">FAQs</a></li>
                            <li class="nav-item"><a class="nav-link" href="/material-version/pages/pages-gallery">Gallery</a></li>
                        </ul>
                    </div><!-- end Pages -->
                    <div id="MetricaAuthentication" class="main-icon-menu-pane">
                        <div class="title-box">
                            <h6 class="menu-title">Authentication</h6>     
                        </div>
                        <ul class="nav">
                            <li class="nav-item"><a class="nav-link" href="/material-version/authentication/auth-login">Log in</a></li>
                            <li class="nav-item"><a class="nav-link" href="/material-version/authentication/auth-login-alt">Log in alt</a></li>
                            <li class="nav-item"><a class="nav-link" href="/material-version/authentication/auth-register">Register</a></li>
                            <li class="nav-item"><a class="nav-link" href="/material-version/authentication/auth-register-alt">Register-alt</a></li>
                            <li class="nav-item"><a class="nav-link" href="/material-version/authentication/auth-recover-pw">Re-Password</a></li>
                            <li class="nav-item"><a class="nav-link" href="/material-version/authentication/auth-recover-pw-alt">Re-Password-alt</a></li>
                            <li class="nav-item"><a class="nav-link" href="/material-version/authentication/auth-lock-screen">Lock Screen</a></li>
                            <li class="nav-item"><a class="nav-link" href="/material-version/authentication/auth-lock-screen-alt">Lock Screen</a></li>
                            <li class="nav-item"><a class="nav-link" href="/material-version/authentication/auth-404">Error 404</a></li>
                            <li class="nav-item"><a class="nav-link" href="/material-version/authentication/auth-404-alt">Error 404-alt</a></li>
                            <li class="nav-item"><a class="nav-link" href="/material-version/authentication/auth-500">Error 500</a></li>                            
                            <li class="nav-item"><a class="nav-link" href="/material-version/authentication/auth-500-alt">Error 500-alt</a></li>
                        </ul>
                    </div><!-- end Authentication-->
                </div><!--end menu-body-->
            </div><!-- end main-menu-inner-->
        </div>
        <!-- end leftbar-tab-menu-->