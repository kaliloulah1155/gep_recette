<nav id="sidebar">
               <div class="sidebar_blog_1">
                  <div class="sidebar-header">
                     <div class="logo_section">
                        <a href="{{ asset('#')}}"><img class="logo_icon img-responsive" src="{{asset('assets_front/images/logo/logo_icon.png')}}" alt="#" /></a>
                     </div>
                  </div>
                  <div class="sidebar_user_info">
                     <div class="icon_setting"></div>
                     <div class="user_profle_side">
                        <div class="user_img"><img class="img-responsive" src="{{asset('assets_front/images/layout_img/user_img.jpg')}}" alt="#" /></div>
                        <div class="user_info">
                           <h6>John David</h6>
                           <p><span class="online_animation"></span> Online</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sidebar_blog_2">
                  <h4>General</h4>
                  <ul class="list-unstyled components">
                     <li class="active">
                        <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-pie-chart yellow_color"></i> <span>Dashboard</span></a>
                        <ul class="collapse list-unstyled" id="dashboard">
                           <li>
                              <a href="{{asset('assets_front/html/dashboard.html')}}">> <span>Default Dashboard</span></a>
                           </li>
                           <li>
                              <a href="{{asset('assets_front/html/dashboard_2.html')}}">> <span>Dashboard style 2</span></a>
                           </li>
                        </ul>
                     </li>
                     <li><a href="{{asset('assets_front/html/widgets.html')}}"><i class="fa fa-users orange_color"></i> <span>Utilisateurs</span></a></li>
                     <li>
                        <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-diamond purple_color"></i> <span>Elements</span></a>
                        <ul class="collapse list-unstyled" id="element">
                           <li><a href="{{asset('assets_front/html/general_elements.html')}}">> <span>General Elements</span></a></li>
                           <li><a href="{{asset('assets_front/html/media_gallery.html')}}">> <span>Media Gallery</span></a></li>
                           <li><a href="{{asset('assets_front/html/icons.html')}}">> <span>Icons</span></a></li>
                           <li><a href="{{asset('assets_front/html/invoice.html')}}">> <span>Invoice</span></a></li>
                        </ul>
                     </li>
                     <li><a href="{{asset('assets_front/html/tables.html')}}"><i class="fa fa-male purple_color2"></i> <span>Profils</span></a></li>
                     <li>
                        <a href="#apps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-object-group blue2_color"></i> <span>Organisations</span></a>
                        <ul class="collapse list-unstyled" id="apps">
                           <li><a href="{{asset('assets_front/html/email.html')}}">> <span>Email</span></a></li>
                           <li><a href="{{asset('assets_front/html/calendar.html')}}">> <span>Calendar</span></a></li>
                           <li><a href="{{asset('assets_front/html/media_gallery.html')}}">> <span>Media Gallery</span></a></li>
                        </ul>
                     </li>
                     <li><a href="{{asset('assets_front/html/price.html')}}"><i class="fa fa-briefcase blue1_color"></i> <span>Semestres</span></a></li>
                     <li>
                        <a href="{{asset('assets_front/html/contact.html')}}">
                        <i class="fa fa-paper-plane red_color"></i> <span>Filières</span></a>
                     </li>
                     <li class="active">
                        <a href="#additional_page" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-clone yellow_color"></i> <span>Additional Pages</span></a>
                        <ul class="collapse list-unstyled" id="additional_page">
                           <li>
                              <a href="{{asset('assets_front/html/profile.html')}}">> <span>Profile</span></a>
                           </li>
                           <li>
                              <a href="{{asset('assets_front/html/project.html')}}">> <span>Projects</span></a>
                           </li>
                           <li>
                              <a href="{{asset('assets_front/html/login.html')}}">> <span>Login</span></a>
                           </li>
                           <li>
                              <a href="{{asset('assets_front/html/404_error.html')}}">> <span>404 Error</span></a>
                           </li>
                        </ul>
                     </li>
                     <li><a href="{{asset('assets_front/html/map.html')}}"><i class="fa fa-map purple_color2"></i> <span>Année Academique</span></a></li>
                     <li><a href="{{asset('assets_front/html/charts.html')}}"><i class="fa fa-bar-chart-o green_color"></i> <span>Charts</span></a></li>
                     <li><a href="{{asset('assets_front/html/settings.html')}}"><i class="fa fa-cog yellow_color"></i> <span>Settings</span></a></li>
                  </ul>
               </div>
            </nav>