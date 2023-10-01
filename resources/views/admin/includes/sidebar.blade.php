<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!-- User details -->
        <div class="user-profile text-center mt-3">
            <div class="">
                <img src="{{ (!empty(Auth::user()->profile_image))? asset('upload/admin_images/'.Auth::user()->profile_image) : asset('upload/admin_images/profile.jpg') }}" alt="" class="avatar-md rounded-circle">
            </div>
            <div class="mt-3">
                <h4 class="font-size-16 mb-1">{{ Auth::user()->name }}</h4>
                <span class="text-muted"><i class="ri-record-circle-line align-middle font-size-14 text-success"></i> Online</span>
            </div>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{ route('dashboard') }}" class="waves-effect">
                        <i class="ri-dashboard-line"></i><span class="badge rounded-pill bg-success float-end">3</span>
                        <span>Dashboard</span>
                    </a>
                </li>

             
                {{-- home slide --}}
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi-airballoon"></i>
                        <span>Home slide setup</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('home.slide') }}">Home Slide</a></li>
                       
                    </ul>
                </li>
                {{-- end --}}

                 {{-- About part --}}
                 <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-pages-line"></i>
                        <span>About page setup</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('about.page') }}">About Page</a></li>
                        <li><a href="{{ route('about.multi_image') }}">About Multi Image</a></li>
                        <li><a href="{{ route('about.all.multi_image') }}">All Multi Images</a></li>
                    </ul>
                </li>
                {{-- end --}}

                   {{-- Portfolio part --}}
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-account-circle-line"></i>
                        <span>Portfolio page setup</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('portfolio.page') }}">All Portfolio</a></li>
                        <li><a href="{{ route('add.portfolio') }}">Add portfolio</a></li>
                    </ul>
                </li>
                {{-- end --}}

                  {{-- blog category part --}}
                  <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fas fa-address-card"></i>
                        <span>Blog Category setup</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('all.blog.category') }}">All Blog Category</a></li>
                        <li><a href="{{ route('add.blog.category') }}">Add Blog Category</a></li>
                    </ul>
                </li>
                {{-- end --}}

                {{-- blog category part --}}
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class=" fas fa-address-book"></i>
                        <span>Blog setup</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('all.blog') }}">All Blog</a></li>
                        <li><a href="{{ route('add.blog') }}">Add Blog</a></li>
                    </ul>
                </li>
                {{-- end --}}


                <li class="menu-title">Settings</li>
                {{-- footer --}}
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-account-circle-line"></i>
                        <span>Footer Setup</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('footer.manage') }}">Footer Mange</a></li>
                        
                    </ul>
                </li>

                {{-- contact message --}}
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-account-circle-line"></i>
                        <span>Contact Message</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('contact.message') }}">Contact Message Manage</a></li>
                        
                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>