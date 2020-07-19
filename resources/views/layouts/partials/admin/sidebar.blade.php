<nav class="navbar navbar-vertical navbar-expand-xl navbar-light navbar-glass"><a class="navbar-brand text-left"
        href="/home">
        <div class="d-flex align-items-center py-3"><img class="mr-2"
                src="{{ asset('admin_assets/img/illustrations/falcon.png') }}" alt="" width="70" /><span
                class="text-sans-serif">Genicks</span>
        </div>
    </a>
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
        <ul class="navbar-nav flex-column">
            <li class="nav-item"><a class="nav-link" href="/admin_dashboard" role="button"
                    aria-expanded="true" aria-controls="home">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                class="fas fa-chart-pie"></span></span><span>Home</span>
                    </div>
                </a>
            </li>
           
            <li class="nav-item"><a class="nav-link dropdown-indicator" href="#stories" data-toggle="collapse"
                    role="button" aria-expanded="false" aria-controls="stories">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                class="fas fa-copy"></span></span><span>Products</span></div>
                </a>
                <ul class="nav collapse" id="stories" data-parent="#navbarVerticalCollapse">
                    
                   <li class="nav-item"><a class="nav-link" href="/add_product">Add Product</a></li>

                    <li class="nav-item"><a class="nav-link" href="/manage_products">Manage Products</a></li>

                    
                </ul>
            </li>

        </ul>
        <div class="px-3 px-xl-0">
            <hr class="border-300 my-2" />
        </div>
        <ul class="navbar-nav flex-column">
            <li class="nav-item"><a class="nav-link dropdown-indicator" href="#egallery" data-toggle="collapse"
                    role="button" aria-expanded="false" aria-controls="egallery">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                class="fas fa-qrcode"></span></span><span>Requests</span></div>
                </a>
                <ul class="nav collapse" id="egallery" data-parent="#navbarVerticalCollapse">
                    <!-- <li class="nav-item"><a class="nav-link dropdown-indicator" href="#egallery-themes"
                            data-toggle="collapse" role="button" aria-expanded="false"
                            aria-controls="egallery-themes">Themes</a>
                        <ul class="nav collapse" id="egallery-themes">
                            <li class="nav-item"><a class="nav-link" href="/create_theme">Create Themes</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Manage Themes</a></li>
                        </ul>
                    </li> -->
                   
                    <li class="nav-item"><a class="nav-link" href="/manage_requests">Manage Requests</a></li>
                    
                </ul>
            </li>
           
            <li class="nav-item"><a class="nav-link dropdown-indicator" href="#utilities" data-toggle="collapse"
                    role="button" aria-expanded="false" aria-controls="utilities">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                class="fab fa-hotjar"></span></span><span>Contacts</span></div>
                </a>
                <ul class="nav collapse" id="utilities" data-parent="#navbarVerticalCollapse">
                 
                    <li class="nav-item"><a class="nav-link" href="/manage_contacts">Manage Contacts</a></li>
                    
                </ul>
            </li>
           
        </ul>
        <div class="px-3 px-xl-0">
            <hr class="border-300 my-2" />
        </div>
        <a class="btn btn-primary btn-sm btn-block my-3" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-sidebar').submit();">
            {{ __('Log out') }}
        </a>

        <form id="logout-sidebar" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</nav>