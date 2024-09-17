 <!-- Imroz Preloader -->
 <div class="preloader">
     <div class='loader'>
         <div class='circle'></div>
         <div class='circle'></div>
         <div class='circle'></div>
         <div class='circle'></div>
         <div class='circle'></div>
     </div>
 </div>
 <!-- Start Left panel -->
 <div class="rbt-left-panel popup-dashboardleft-section">
     <div class="rbt-default-sidebar">
         <div class="inner">
             <div class="content-item-content">
                 <div class="rbt-default-sidebar-wrapper">
                     <nav class="mainmenu-nav">
                         <ul class="dashboard-mainmenu rbt-default-sidebar-list">
                             <li>
                                 <a href="{{ route('tools.text.generator') }}"> <img
                                         src="{{ asset('assets/images/generator-icon/text.png') }}" alt="AI Generator">
                                     <span>Text Generator</span></a>
                             </li>
                             <li>
                                 <a href="{{ route('tools.image.generator') }}">
                                     <img src="{{ asset('assets/images/generator-icon/photo.png') }}"
                                         alt="AI Generator">
                                     <span>Image Generator</span>
                                     <div class="rainbow-badge-card badge-sm ml--10">NEW</div>
                                 </a>
                             </li>
                             <li>
                                 <a href="{{ route('tools.code.generator') }}">
                                     <img src="{{ asset('assets/images/generator-icon/code-editor.png') }}"
                                         alt="AI Generator">
                                     <span>Code Generator</span>
                                 </a>
                             </li>
                             <li>
                                 <a href="{{ route('tools.image.editor') }}">
                                     <img src="{{ asset('assets/images/generator-icon/photo.png') }}"
                                         alt="AI Generator">
                                     <span>Image Editor</span>
                                 </a>
                             </li>
                             <li>
                                 <a href="{{ route('tools.video.generator') }}">
                                     <img src="{{ asset('assets/images/generator-icon/video-camera.png') }}"
                                         alt="AI Generator">
                                     <span>Vedio Generator</span>
                                 </a>
                             </li>
                             <li>
                                 <a href="{{ route('tools.email.generator') }}">
                                     <img src="{{ asset('assets/images/generator-icon/email.png') }}"
                                         alt="AI Generator"><span>Email
                                         Generator</span>
                                 </a>
                             </li>
                             <li>
                                 <a tabindex="-1" class="disabled" aria-disabled="true"
                                     href="{{ route('tools.web.generator') }}">
                                     <img src="{{ asset('assets/images/generator-icon/website-design.png') }}"
                                         alt="AI Generator"><span>Website Generator</span>
                                     <div class="rainbow-badge-card badge-sm ml--10">PRO</div>
                                 </a>
                             </li>
                         </ul>
                     </nav>

                     <div class="rbt-sm-separator"></div>

                     <nav class="mainmenu-nav">
                         <ul class="dashboard-mainmenu rbt-default-sidebar-list">
                             <li class="has-submenu"><a class="collapse-btn collapsed" data-bs-toggle="collapse"
                                     href="#collapseExample" role="button" aria-expanded="false"
                                     aria-controls="collapseExample"><i
                                         class="fa-sharp fa-solid fa-circle-plus"></i><span>Setting</span></a>
                                 <div class="collapse" id="collapseExample">
                                     <ul class="submenu rbt-default-sidebar-list">
                                         <li>
                                             <a href="{{ route('pages.profile') }}">
                                                 <i class="fa-sharp fa-regular fa-user"></i>
                                                 <span>Profile Details</span>
                                             </a>
                                         </li>
                                         <li>
                                             <a href="{{ route('pages.notification') }}">
                                                 <i class="fa-sharp fa-regular fa-shopping-bag"></i>
                                                 <span>Notification</span>
                                             </a>
                                         </li>
                                         <li>
                                             <a href="{{ route('pages.chat.export') }}">
                                                 <i class="fa-sharp fa-regular fa-users"></i>
                                                 <span>Chat Export</span>
                                             </a>
                                         </li>
                                         <li>
                                             <a href="{{ route('pages.chat.export') }}">
                                                 <i class="fa-sharp fa-regular fa-home"></i>
                                                 <span>Apperance</span>
                                             </a>
                                         </li>
                                         <li>
                                             <a href="{{ route('pages.plans.billing') }}">
                                                 <i class="fa-sharp fa-regular fa-briefcase"></i>
                                                 <span>Plans and Billing</span>
                                             </a>
                                         </li>
                                         <li>
                                             <a href="{{ route('pages.sessions') }}">
                                                 <i class="fa-sharp fa-regular fa-users"></i>
                                                 <span>Sessions</span>
                                             </a>
                                         </li>
                                         <li>
                                             <a href="{{ route('pages.application') }}">
                                                 <i class="fa-sharp fa-regular fa-list"></i>
                                                 <span>Application</span>
                                             </a>
                                         </li>
                                     </ul>
                                 </div>
                             </li>
                             <li>
                                 <a href="#">
                                     <i class="fa-sharp fa-regular fa-award"></i>
                                     <span>Help & FAQ</span>
                                 </a>
                             </li>
                         </ul>
                         <div class="rbt-sm-separator"></div>
                         <ul class="dashboard-mainmenu rbt-default-sidebar-list">
                             <li>
                                 <a href="{{ route('pages.release.notes') }}">
                                     <i class="fa-sharp fa-regular fa-bell"></i><span>Release
                                         notes</span></a>
                             </li>
                             <li>
                                 <a href="{{ route('pages.terms.policy') }}">
                                     <i class="fa-sharp fa-regular fa-briefcase"></i>
                                     <span>Terms & Policy</span>
                                 </a>
                             </li>
                         </ul>
                     </nav>
                 </div>
             </div>
         </div>
         <div class="subscription-box">
             <div class="inner">
                 <a href="{{ route('pages.profile') }}" class="autor-info">
                     <div class="author-img active">
                         <img class="w-100" src="{{ asset('assets/images/team/team-01sm.jpg') }}" alt="Author">
                     </div>
                     <div class="author-desc">
                         <h6>Adam Milner</h6>
                         <p>trentadam@net</p>
                     </div>
                     <div class="author-badge">Free</div>
                 </a>
                 <div class="btn-part">
                     <a href="{{ route('pages.plans.billing') }}" class="btn-default btn-border">Upgrade To Pro</a>
                 </div>
             </div>
         </div>
         <p class="subscription-copyright copyright-text text-center b3  small-text">© 2024 <a
                 href="https://themeforest.net/user/pixcelsthemes/portfolio">Pixcels Themes</a>.</p>
     </div>
 </div>
 <!-- End Left panel -->
