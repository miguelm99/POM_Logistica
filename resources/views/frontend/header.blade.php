
    <!-- Header Start -->
    <div class="header-area">
        <div class="main-header ">
            <div class="header-top top-bg d-none d-lg-block">
                <div class="container">
                    <div class="col-xl-12">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="header-info-left">
                                <ul>
                                    <li>+880166 253 232</li>
                                    <li>info@domain.com </li>
                                </ul>
                            </div>
                            <div class="header-info-right">
                                <ul>
                                    <li>
                                        @if(isset(Auth::user()->email))
                                            <strong> {{ Auth::user()->name }}</strong>

                                            <a  href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>


                                            {{--                        <a href="{{ url('/logout') }}">Logout</a>--}}
                                        @else
                                            <strong> {{ "Convidado" }}</strong> (<a href="{{ url('registCliente') }}">Registe-se</a>)
                                        @endif
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom  header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-1 col-md-1">
                            <div class="logo">
                                <a href="."><img src="inds/assets/img/logo/logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-8">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="index.blade.php">Home</a></li>
                                        <li><a href="inds/about.html">Cria Guia</a></li>
                                        <li><a href="industries.blade.php">Industries</a></li>
                                        <li><a href="inds/work.html">Works</a></li>
                                        <li><a href="inds/blog.html">Guia</a>
                                            <ul class="submenu">
                                                <li><a href="inds/blog.html">Blog</a></li>
                                                <li><a href="inds/single-blog.html">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Perfil</a>
                                            <ul class="submenu">
                                                <li><a href="inds/contact.html">Dados Perfil</a></li>
                                                <li><a href="inds/elements.html">Compras</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-3">
                            <!-- Header-btn -->
                            <div class="header-btn d-none d-lg-block">
                                <a href="{{ route('loginCliente') }}" class="get-btn">Login</a>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
