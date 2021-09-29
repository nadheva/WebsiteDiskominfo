<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar" data-sidebarbg="skin6">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ route('dashboard') }}" aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span class="hide-menu">Dashboard</span></a></li>

                <li class="list-divider"></li>
                <li class="nav-small-cap"><span class="hide-menu">Components</span></li>
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route("Profil.index")}}" aria-expanded="false"><i data-feather="sidebar" class="feather-icon"></i><span class="hide-menu"> Profil
                </span></a>
        </li>
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route("Berita.index")}}" aria-expanded="false"><i data-feather="sidebar" class="feather-icon"></i><span class="hide-menu"> Berita
                        </span></a>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route("PPID.index")}}" aria-expanded="false"><i data-feather="sidebar" class="feather-icon"></i><span class="hide-menu"> PPID
                        </span></a>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <i data-feather="file-text" class="feather-icon"></i><span class="hide-menu">Galeri </span></a>
                    <ul aria-expanded="false" class="collapse  first-level base-level-line">
                        <li class="sidebar-item"><a href="#" class="sidebar-link"><span class="hide-menu"> Galeri
                                </span></a>
                        </li>
                        <li class="sidebar-item"><a href="#" class="sidebar-link"><span class="hide-menu"> Vidio
                                </span></a>
                        </li>
                    </ul>
                </li>
                {{-- <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false"><i data-feather="grid" class="feather-icon"></i><span class="hide-menu">Tables </span></a>
                    <ul aria-expanded="false" class="collapse  first-level base-level-line">
                        <li class="sidebar-item"><a href="{{route('hmtp.index')}}" class="sidebar-link"><span class="hide-menu"> HMTP
                </span></a>
                </li>
                <li class="sidebar-item"><a href="{{route('periode.index')}}" class="sidebar-link"><span class="hide-menu"> Periode
                        </span></a>
                <li class="sidebar-item"><a href="{{route('Lab.index')}}" class="sidebar-link"><span class="hide-menu"> Lab
                        </span></a>
                <li class="sidebar-item"><a href="{{route('Loker.index')}}" class="sidebar-link"><span class="hide-menu"> Loker
                        </span></a>
                <li class="sidebar-item"><a href="{{route('Perpustakaan.index')}}" class="sidebar-link"><span class="hide-menu"> Perpustakaan
                        </span></a>
                <li class="sidebar-item"><a href="{{route('alumni.index')}}" class="sidebar-link"><span class="hide-menu"> Alumni
                        </span></a>
                </li>
            </ul>
            </li>
            <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false"><i data-feather="bar-chart" class="feather-icon"></i><span class="hide-menu">Charts </span></a>
                <ul aria-expanded="false" class="collapse  first-level base-level-line">
                    <li class="sidebar-item"><a href="chart-morris.html" class="sidebar-link"><span class="hide-menu"> Morris Chart
                            </span></a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false"><i data-feather="box" class="feather-icon"></i><span class="hide-menu">UI Elements </span></a>
                <ul aria-expanded="false" class="collapse  first-level base-level-line">
                    <li class="sidebar-item"><a href="ui-buttons.html" class="sidebar-link"><span class="hide-menu"> Buttons
                            </span></a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="ui-cards.html" aria-expanded="false"><i data-feather="sidebar" class="feather-icon"></i><span class="hide-menu">Cards
                    </span></a>
            </li>
            <li class="list-divider"></li>
            <li class="nav-small-cap"><span class="hide-menu">Extra</span></li>

            <li class="sidebar-item">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a type="submit" class="sidebar-link sidebar-link" onclick="event.preventDefault(); this.closest('form').submit();">
                        <i data-feather="log-out" class="log-out"></i><span class="hide-menu">Logout</span>
                    </a>
                </form>
            </li> --}}
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>