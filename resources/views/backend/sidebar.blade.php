<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="inds/assets/img/logo/logo2_footer.png" height="25px" alt="AdminLTE Logo"
             style="opacity: .8">
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="bower_components/admin-lte/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">

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
                        <script>window.location = "http://localhost/POM_Logistica/public/backend/loginAdmin";</script>
                    @endif

                </a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{url('admin')}}" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Perfil
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('guias')}}" class="nav-link">
                        <i class="nav-icon fas fa-archive"></i>
                        <p>
                            Gias
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="guiatransportes" class="nav-link">
                        <i class="nav-icon fas  fa-truck"></i>
                        <p>
                            Entrada/Saida
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-print "></i>
                        <p>
                            Fatura
                        </p>
                    </a>
                </li>
                @if(Auth::user()->type==='admin')
                <li class="nav-item">
                    <a href="{{url('homeFrontend')}}" class="nav-link">
                        <i class="nav-icon fas fa-object-group"></i>
                        <p>
                            Index
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-magic"></i>
                        <p>
                            Caracteristicas
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-arrow-circle-right"></i>
                        <p>
                            Pos
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas  fa-question-circle"></i>
                        <p>
                            Suporte
                        </p>
                    </a>
                </li>

                @endif
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
