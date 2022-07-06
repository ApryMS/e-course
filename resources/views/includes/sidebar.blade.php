<div id="aside" class="page-sidenav no-shrink bg-light nav-dropdown fade" aria-hidden="true">
    <div class="sidenav h-100 bg-light modal-dialog">
        <!-- sidenav top -->
        <div class="navbar">
            <!-- brand -->
            <a href="index.html" class="navbar-brand ">
                <img src="{{ asset('basik/assets/img/afterschoolindonesia.png') }}" alt="logo">
                <span class="hidden-folded d-inline l-s-n-1x ">After School</span>
            </a>
            <!-- / brand -->
        </div>
        <!-- Flex nav content -->
        <div class="flex scrollable hover">
            <div class="nav-active-text-primary" data-nav>
                <ul class="nav bg">
                    <li class="nav-header hidden-folded">
                        <span class="text-muted">Main</span>
                    </li>
                    <li>
                        <a href="/">
                            <span class="nav-icon text-primary"><i data-feather='home'></i></span>
                            <span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    @if (Auth::user()->role == "ADMIN")
                    <li class="nav-header hidden-folded">
                        <span class="text-muted">Pembayaran</span>
                    </li>
                    <li>
                        <a href="{{ route('payment.index') }}">
                            <span class="nav-icon text-info"><i data-feather='users'></i></span>
                            <span class="nav-text">Konfirmasi Pembayaran</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('history-payment') }}">
                            <span class="nav-icon text-info"><i data-feather='users'></i></span>
                            <span class="nav-text">History Pembayaran</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('metode-payment') }}">
                            <span class="nav-icon text-info"><i data-feather='users'></i></span>
                            <span class="nav-text">Metode Pembayaran</span>
                        </a>
                    </li>
                    <li class="nav-header hidden-folded">
                        <span class="text-muted">Manajemen User</span>
                    </li>
                    <li>
                        <a href="{{ route('mentor.index') }}">
                            <span class="nav-icon text-info"><i data-feather='users'></i></span>
                            <span class="nav-text">Mentor</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('siswa.index') }}">
                            <span class="nav-icon text-info"><i data-feather='users'></i></span>
                            <span class="nav-text">Siswa</span>
                        </a>
                    </li>
                    <li class="nav-header hidden-folded">
                        <span class="text-muted">Manajemen Produk</span>
                    </li>
                    <li>
                        <a href="{{ route('product.index') }}">
                            <span class="nav-icon text-warning"><i data-feather='monitor'></i></span>
                            <span class="nav-text">Produk</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('bab-video.index') }}">
                            <span class="nav-icon text-warning"><i data-feather='list'></i></span>
                            <span class="nav-text">Bab</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('video.index') }}">
                            <span class="nav-icon text-warning"><i data-feather='video'></i></span>
                            <span class="nav-text">Video</span>
                        </a>
                    </li>
                    @elseif (Auth::user()->role == "MENTOR")
                    <li>
                        <a href="{{ route('list-siswa.index') }}">
                            <span class="nav-icon text-success"><i data-feather='user'></i></span>
                            <span class="nav-text">Siswaku</span>
                        </a>
                    </li>
                    
                    <li>
                        <a href="app.user.html">
                            <span class="nav-icon text-success"><i data-feather='user'></i></span>
                            <span class="nav-text">Pejuangku</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('list-confirmasi-pembayaran') }}">
                            <span class="nav-icon text-success"><i data-feather='user'></i></span>
                            <span class="nav-text">Konfirmasi Pembayaran</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('history-payment-fee') }}">
                            <span class="nav-icon text-success"><i data-feather='user'></i></span>
                            <span class="nav-text">Hisoty Pembayaran Fee</span>
                        </a>
                    </li>
                    
                    @else
                    <li>
                        <a href="{{ route('pejuang.index') }}">
                            <span class="nav-icon text-success"><i data-feather='user'></i></span>
                            <span class="nav-text">Siswa</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('list-confirmasi-pembayaran') }}">
                            <span class="nav-icon text-success"><i data-feather='user'></i></span>
                            <span class="nav-text">Konfirmasi Pembayaran</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('history-payment-fee') }}">
                            <span class="nav-icon text-success"><i data-feather='dollar-sign'></i></span>
                            <span class="nav-text">Hisoty Pembayaran Fee</span>
                        </a>
                    </li>
                    @endif
                    <li>
                        <a href="{{ route('profile') }}">
                            <span class="nav-icon text-success"><i data-feather='user'></i></span>
                            <span class="nav-text">Profil</span>
                        </a>
                    </li>
                    <li>
                        <a  href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                <span class="nav-icon text-success"><i data-feather='arrow-up-right'></i></span>
                                <span class="nav-text">Keluar</span>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                    </li>
                    
                </ul>
            </div>
        </div>
    </div>
</div>