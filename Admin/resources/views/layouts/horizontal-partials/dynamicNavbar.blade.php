 <div class="navbar-custom-menu">
            <div class="container-fluid">
                <div id="navigation">
                    <!-- Navigation Menu-->
                    <ul class="navigation-menu">
                      
                       @yield('dynamicNavbar')

                        <li class="has-submenu">
                            <a href="#">
                                <i data-feather="grid" class="align-self-center icon-sm icon-dual-hori-nav mr-1"></i>
                                <span>Apps</span>
                            </a>
                            <ul class="submenu">
                                <li class="has-submenu">
                                    <a href="#"><i class="dripicons-dot"></i>Email</a>
                                    <ul class="submenu">
                                        <li><a href="/apps/email-inbox"><i class="dripicons-dot"></i>Inbox</a></li>
                                        <li><a href="/apps/email-read"><i class="dripicons-dot"></i>Read Email</a></li>
                                        <li class="divider-custom">
                                            <div class="divider-text bg-light">Email Template</div>
                                        </li>
                                        <li><a href="/others/email-templates-basic"><i class="dripicons-dot"></i>Basic Action Email</a></li>
                                        <li><a href="/others/email-templates-alert"><i class="dripicons-dot"></i>Alert Email</a></li>
                                        <li><a href="/others/email-templates-billing"><i class="dripicons-dot"></i>Billing Email</a></li>
                                    </ul>
                                </li> <!--end has-submenu-->  
                                <li><a href="/apps/chat"><i class="dripicons-dot"></i>Chat</a></li>
                                <li><a href="/apps/contact-list"><i class="dripicons-dot"></i>Contact List</a></li>
                                <li><a href="/apps/calendar"><i class="dripicons-dot"></i>Calendar</a></li>
                                <li><a href="/apps/invoice"><i class="dripicons-dot"></i>Invoice</a></li>                                               
                            </ul><!--end submenu-->
                        </li><!--end has-submenu-->                            
                        
                        <li class="has-submenu">
                            <a href="#">
                                <i data-feather="package" class="align-self-center icon-sm icon-dual-hori-nav mr-1"></i>
                                <span>UI Kit</span>
                            </a>
                            <ul class="submenu">                                    
                                <li class="has-submenu">
                                    <a href="#"><i class="dripicons-dot"></i>UI Elements</a>
                                    <ul class="submenu">
                                        <li><a href="/others/ui-bootstrap"><i class="dripicons-dot"></i>Bootstrap</a></li>
                                        <li><a href="/others/ui-animation"><i class="dripicons-dot"></i>Animation</a></li>
                                        <li><a href="/others/ui-avatar"><i class="dripicons-dot"></i>Avatar</a></li>
                                        <li><a href="/others/ui-clipboard"><i class="dripicons-dot"></i>Clip Board</a></li>
                                        <li><a href="/others/ui-files"><i class="dripicons-dot"></i>File Manager</a></li>
                                        <li><a href="/others/ui-ribbons"><i class="dripicons-dot"></i>Ribbons</a></li>
                                        <li><a href="/others/ui-dragula"><i class="dripicons-dot"></i>Dragula</a></li>
                                        <li><a href="/others/ui-check-radio"><i class="dripicons-dot"></i>Check & Radio</a></li>
                                    </ul>
                                </li><!--end has-submenu-->
                                <li class="has-submenu">
                                    <a href="#"><i class="dripicons-dot"></i>Advanced UI</a>
                                    <ul class="submenu">
                                        <li><a href="/others/advanced-rangeslider"><i class="dripicons-dot"></i>Range Slider</a></li>
                                        <li><a href="/others/advanced-sweetalerts"><i class="dripicons-dot"></i>Sweet Alerts</a></li>
                                        <li><a href="/others/advanced-nestable"><i class="dripicons-dot"></i>Nestable List</a></li>
                                        <li><a href="/others/advanced-ratings"><i class="dripicons-dot"></i>Ratings</a></li>
                                        <li><a href="/others/advanced-highlight"><i class="dripicons-dot"></i>Highlight</a></li>
                                        <li><a href="/others/advanced-session"><i class="dripicons-dot"></i>Session Timeout</a></li>
                                        <li><a href="/others/advanced-idle-timer"><i class="dripicons-dot"></i>Idle Timer</a></li>
                                    </ul>
                                </li><!--end has-submenu-->
                                <li class="has-submenu">
                                    <a href="#"><i class="dripicons-dot"></i>Forms</a>
                                    <ul class="submenu">
                                        <li><a href="/others/forms-elements"><i class="dripicons-dot"></i>Basic Elements</a></li>
                                        <li><a href="/others/forms-advanced"><i class="dripicons-dot"></i>Advance Elements</a></li>
                                        <li><a href="/others/forms-validation"><i class="dripicons-dot"></i>Validation</a></li>
                                        <li><a href="/others/forms-wizard"><i class="dripicons-dot"></i>Wizard</a></li>
                                        <li><a href="/others/forms-editors"><i class="dripicons-dot"></i>Editors</a></li>
                                        <li><a href="/others/forms-repeater"><i class="dripicons-dot"></i>Repeater</a></li>
                                        <li><a href="/others/forms-x-editable"><i class="dripicons-dot"></i>X Editable</a></li>
                                        <li><a href="/others/forms-uploads"><i class="dripicons-dot"></i>File Upload</a></li>
                                        <li><a href="/others/forms-img-crop"><i class="dripicons-dot"></i>Image Crop</a></li>
                                    </ul>
                                </li> <!--end has-submenu-->
                                <li class="has-submenu">
                                    <a href="#"><i class="dripicons-dot"></i>Charts</a>
                                    <ul class="submenu">
                                        <li><a href="/others/charts-apex"><i class="dripicons-dot"></i>Apex</a></li>
                                        <li><a href="/others/charts-morris"><i class="dripicons-dot"></i>Morris</a></li>                                            
                                        <li><a href="/others/charts-chartjs"><i class="dripicons-dot"></i>Chartjs</a></li>
                                        <li><a href="/others/charts-flot"><i class="dripicons-dot"></i>Flot</a></li>
                                        <li><a href="/others/charts-chartist"><i class="dripicons-dot"></i>Chartist</a></li>
                                        <li><a href="/others/charts-peity"><i class="dripicons-dot"></i>Peity</a></li>
                                        <li><a href="/others/charts-sparkline"><i class="dripicons-dot"></i>Sparkline</a></li>
                                        <li><a href="/others/charts-knob"><i class="dripicons-dot"></i>Jquery Knob</a></li>
                                        <li><a href="/others/charts-justgage"><i class="dripicons-dot"></i>JustGage</a></li>
                                    </ul>
                                </li><!--end has-submenu-->                                    
                                <li class="has-submenu">
                                    <a href="#"><i class="dripicons-dot"></i>Tables </a>
                                    <ul class="submenu">
                                        <li><a href="/others/tables-basic"><i class="dripicons-dot"></i>Basic</a></li>
                                        <li><a href="/others/tables-datatable"><i class="dripicons-dot"></i>Datatables</a></li>
                                        <li><a href="/others/tables-responsive"><i class="dripicons-dot"></i>Responsive</a></li>
                                        <li><a href="/others/tables-editable"><i class="dripicons-dot"></i>Editable</a></li>
                                        <li><a href="/others/tables-footable"><i class="dripicons-dot"></i>Footable</a></li>
                                        <li><a href="/others/tables-jsgrid"><i class="dripicons-dot"></i>Jsgrid</a></li>
                                        <li><a href="/others/tables-dragger"><i class="dripicons-dot"></i>Dragger</a></li>
                                    </ul>
                                </li><!--end has-submenu-->
                                <li class="has-submenu">
                                    <a href="#"><i class="dripicons-dot"></i>Icons</a>
                                    <ul class="submenu">
                                        <li><a href="/others/icons-materialdesign"><i class="dripicons-dot"></i>Material Design</a></li>
                                        <li><a href="/others/icons-dripicons"><i class="dripicons-dot"></i>Dripicons</a></li>
                                        <li><a href="/others/icons-fontawesome"><i class="dripicons-dot"></i>Font awesome</a></li>
                                        <li><a href="/others/icons-themify"><i class="dripicons-dot"></i>Themify</a></li>
                                        <li><a href="/others/icons-typicons"><i class="dripicons-dot"></i>Typicons</a></li>
                                        <li><a href="/others/icons-feather"><i class="dripicons-dot"></i>Feather</a></li>
                                        <li><a href="/others/icons-emoji"><i class="dripicons-dot"></i>Emoji</a></li>
                                    </ul>
                                </li> <!--end has-submenu-->                                   
                                <li class="has-submenu">
                                    <a href="#"><i class="dripicons-dot"></i>Maps</a>
                                    <ul class="submenu">
                                        <li><a href="/others/maps-google"><i class="dripicons-dot"></i>Google Maps</a></li>
                                        <li><a href="/others/maps-leaflet"><i class="dripicons-dot"></i>Leaflet Maps</a></li>
                                        <li><a href="/others/maps-vector"><i class="dripicons-dot"></i>Vector Maps</a></li>
                                    </ul>
                                </li> <!--end has-submenu-->                     
                            </ul><!--end submenu-->
                        </li><!--end has-submenu-->

                        <li class="has-submenu">
                            <a href="#">
                                <i data-feather="copy" class="align-self-center icon-sm icon-dual-hori-nav mr-1"></i>
                                <span>Pages</span>
                            </a>
                            <ul class="submenu">
                                <li><a href="/pages/pages-profile"><i class="dripicons-dot"></i>Profile</a></li>
                                <li><a href="/pages/pages-timeline"><i class="dripicons-dot"></i>Timeline</a></li>
                                <li><a href="/pages/pages-treeview"><i class="dripicons-dot"></i>Treeview</a></li>
                                <li><a href="/horizontal/horizontal-starter"><i class="dripicons-dot"></i>Starter Page</a></li>
                                <li><a href="/pages/pages-pricing"><i class="dripicons-dot"></i>Pricing</a></li>
                                <li><a href="/pages/pages-tour"><i class="dripicons-dot"></i>Tour</a></li>
                                <li><a href="/pages/pages-blogs"><i class="dripicons-dot"></i>Blogs</a></li>
                                <li><a href="/pages/pages-faq"><i class="dripicons-dot"></i>FAQs</a></li>
                                <li><a href="/pages/pages-gallery"><i class="dripicons-dot"></i>Gallery</a></li>
                            </ul>
                        </li><!--end has-submenu-->

                        <li class="has-submenu">
                            <a href="#">
                                <i data-feather="lock" class="align-self-center icon-sm icon-dual-hori-nav mr-1"></i>
                                <span>Authentication</span>
                            </a>
                            <ul class="submenu">
                                <li><a href="/authentication/auth-login"><i class="dripicons-dot"></i>Log In</a></li>
                                <li><a href="/authentication/auth-login-alt"><i class="dripicons-dot"></i>Log In-alt</a></li>
                                <li><a href="/authentication/auth-register"><i class="dripicons-dot"></i>Register</a></li>
                                <li><a href="/authentication/auth-register-alt"><i class="dripicons-dot"></i>Register-alt</a></li>
                                <li><a href="/authentication/auth-recover-pw"><i class="dripicons-dot"></i>Re-Password</a></li>
                                <li><a href="/authentication/auth-recover-pw-alt"><i class="dripicons-dot"></i>Re-Password-alt</a></li>
                                <li><a href="/authentication/auth-lock-screen"><i class="dripicons-dot"></i>Lock Screen</a></li>
                                <li><a href="/authentication/auth-lock-screen-alt"><i class="dripicons-dot"></i>Lock Screen-alt</a></li>
                                <li><a href="/authentication/auth-404"><i class="dripicons-dot"></i>Error 404</a></li>
                                <li><a href="/authentication/auth-404-alt"><i class="dripicons-dot"></i>Error 404-alt</a></li>
                                <li><a href="/authentication/auth-500"><i class="dripicons-dot"></i>Error 500</a></li>
                                <li><a href="/authentication/auth-500-alt"><i class="dripicons-dot"></i>Error 500-alt</a></li>
                            </ul>
                        </li><!--end has-submenu-->
                    </ul><!-- End navigation menu -->
                </div> <!-- end navigation -->
            </div> <!-- end container-fluid -->
        </div> <!-- end navbar-custom -->