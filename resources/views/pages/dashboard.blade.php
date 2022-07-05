@extends('layouts.admin')
@section('title')
    Dashboard
@endsection
@section('content')
                <!-- ############ Content START-->
                <div id="content" class="flex">
                    <!-- ############ Main START-->
                    <div>
                        <div class="page-hero page-container" id="page-hero">
                            <div class="padding d-flex pt-0">
                                <div class="page-title">
                                    <h2 class="text-md text-highlight">Dashboard</h2>
                                    <small class="text-muted">Selamat datang, {{ Auth::user()->name }} 
                                        {{-- <strong>{{ Auth::user()->name }}</strong> --}}
                                    </small>
                                </div>
                                <div class="flex"></div>
                            </div>
                        </div>
                        <div class="page-content page-container" id="page-content">
                            <div class="padding pt-0">
                                <div class="row row-sm sr">
                                    @if (Auth::user()->role == 'ADMIN')
                                        {{-- user --}}
                                    <div class="col-md-4 d-flex">
                                        <div class="card flex">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center text-hover-success">
                                                    <div class="avatar w-56 m-2 no-shadow gd-success">
                                                        <i data-feather="users"></i>
                                                    </div>
                                                    <div class="px-4 flex">
                                                        <div>Siswa</div>
                                                        <div class="text-success mt-2">
                                                            {{ $siswa }} Orang
                                                        </div>
                                                    </div>
                                                    <a href="{{ route('siswa.index') }}" class="text-muted">
                                                        <i data-feather="arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Mentor --}}
                                    <div class="col-md-4 d-flex">
                                        <div class="card flex">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center text-hover-success">
                                                    <div class="avatar w-56 m-2 no-shadow gd-primary">
                                                        <i data-feather="users"></i>
                                                    </div>
                                                    <div class="px-4 flex">
                                                        <div>Mentor</div>
                                                        <div class="text-success mt-2">
                                                            {{ $mentor }} orang
                                                        </div>
                                                    </div>
                                                    <a href="{{ route('mentor.index') }}" class="text-muted">
                                                        <i data-feather="arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Pejuang --}}
                                    <div class="col-md-4 d-flex">
                                        <div class="card flex">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center text-hover-success">
                                                    <div class="avatar w-56 m-2 no-shadow gd-warning">
                                                        <i data-feather="users"></i>
                                                    </div>
                                                    <div class="px-4 flex">
                                                        <div>Pejuang</div>
                                                        <div class="text-success mt-2">
                                                            {{ $pejuang }} Orang
                                                        </div>
                                                    </div>
                                                    <a href="#" class="text-muted">
                                                        <i data-feather="arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Penjualan --}}
                                    <div class="col-md-4 d-flex">
                                        <div class="card flex">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center text-hover-success">
                                                    <div class="avatar w-56 m-2 no-shadow gd-warning">
                                                        <i data-feather="dollar-sign"></i>
                                                    </div>
                                                    <div class="px-4 flex">
                                                        <div>Semua Penjualan</div>
                                                        <div class="text-success mt-2">
                                                            Rp {{ $total_pendapatan }}
                                                        </div>
                                                    </div>
                                                    <a href="#" class="text-muted">
                                                        <i data-feather="arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- product --}}
                                    <div class="col-md-4 d-flex">
                                        <div class="card flex">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center text-hover-success">
                                                    <div class="avatar w-56 m-2 no-shadow gd-success">
                                                        <i data-feather="monitor"></i>
                                                    </div>
                                                    <div class="px-4 flex">
                                                        <div>Jumlah Video</div>
                                                        <div class="text-success mt-2">
                                                            {{ $video }} Video
                                                        </div>
                                                    </div>
                                                    <a href="#" class="text-muted">
                                                        <i data-feather="arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- categories --}}
                                    <div class="col-md-4 d-flex">
                                        <div class="card flex">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center text-hover-success">
                                                    <div class="avatar w-56 m-2 no-shadow gd-primary">
                                                        <i data-feather="list"></i>
                                                    </div>
                                                    <div class="px-4 flex">
                                                        <div>Jumlah kategori video</div>
                                                        <div class="text-success mt-2">
                                                            {{ $bab_video }} Kategori
                                                        </div>
                                                    </div>
                                                    <a href="#" class="text-muted">
                                                        <i data-feather="arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    @elseif (Auth::user()->role == 'MENTOR')
                                    <div class="col-md-4 d-flex">
                                        <div class="card flex">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center text-hover-success">
                                                    <div class="avatar w-56 m-2 no-shadow gd-success">
                                                        <i data-feather="users"></i>
                                                    </div>
                                                    <div class="px-4 flex">
                                                        <div>Pejuang</div>
                                                        <div class="text-success mt-2">
                                                            {{ $pejuang }} Orang
                                                        </div>
                                                    </div>
                                                    <a href="#" class="text-muted">
                                                        <i data-feather="arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Siswa --}}
                                    <div class="col-md-4 d-flex">
                                        <div class="card flex">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center text-hover-success">
                                                    <div class="avatar w-56 m-2 no-shadow gd-primary">
                                                        <i data-feather="users"></i>
                                                    </div>
                                                    <div class="px-4 flex">
                                                        <div>Siswa</div>
                                                        <div class="text-success mt-2">
                                                            {{ $siswa }} orang 
                                                        </div>
                                                    </div>
                                                    <a href="#" class="text-muted">
                                                        <i data-feather="arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Pejuang --}}
                                    <div class="col-md-4 d-flex">
                                        <div class="card flex">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center text-hover-success">
                                                    <div class="avatar w-56 m-2 no-shadow gd-warning">
                                                        <i data-feather="dollar-sign"></i>
                                                    </div>
                                                    <div class="px-4 flex">
                                                        <div>Fee Didapat</div>
                                                        <div class="text-success mt-2">
                                                            Rp {{ $total_fee }}
                                                        </div>
                                                    </div>
                                                    <a href="#" class="text-muted">
                                                        <i data-feather="arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Link Pendaftaran Pejuang --}}
                                    <div class="col-md-6 d-flex">
                                        <div class="card flex">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center text-hover-success">
                                                    <div class="avatar w-56 m-2 no-shadow gd-primary">
                                                        <i data-feather="users"></i>
                                                    </div>
                                                    <div class="px-4 flex">
                                                        <div>Link Pendaftaran Pejuang</div>
                                                        <div class="text-success mt-2">
                                                            <a href="{{ route('daftar-pejuang',$linkPendaftaranPejuang) }}">http://e-course.test/daftar-pejuang/{{ $linkPendaftaranPejuang }}</a>
                                                        </div>
                                                    </div>
                                                    <a href="{{ route('daftar-pejuang',$linkPendaftaranPejuang) }}" class="text-muted">
                                                        <i data-feather="arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @else
                                    {{-- Siswa --}}
                                    <div class="col-md-6 d-flex">
                                        <div class="card flex">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center text-hover-success">
                                                    <div class="avatar w-56 m-2 no-shadow gd-primary">
                                                        <i data-feather="users"></i>
                                                    </div>
                                                    <div class="px-4 flex">
                                                        <div>Siswa</div>
                                                        <div class="text-success mt-2">
                                                            {{ $siswa }} orang 
                                                        </div>
                                                    </div>
                                                    <a href="#" class="text-muted">
                                                        <i data-feather="arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Pejuang --}}
                                    <div class="col-md-6 d-flex">
                                        <div class="card flex">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center text-hover-success">
                                                    <div class="avatar w-56 m-2 no-shadow gd-warning">
                                                        <i data-feather="dollar-sign"></i>
                                                    </div>
                                                    <div class="px-4 flex">
                                                        <div>Fee Didapat</div>
                                                        <div class="text-success mt-2">
                                                            Rp {{ $total_fee }}
                                                        </div>
                                                    </div>
                                                    <a href="#" class="text-muted">
                                                        <i data-feather="arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ############ Main END-->
                </div>
                <!-- ############ Content END-->
@endsection
