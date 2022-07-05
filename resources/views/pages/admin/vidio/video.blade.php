@extends('layouts.admin')
@section('title')
    Video
@endsection
@section('content')
<div id="content" class="flex ">
                <!-- ############ Main START-->
                <div>
                    <div class="page-hero page-container " id="page-hero">
                        <div class="padding d-flex pt-0">
                            <div class="page-title">
                                <h2 class="text-md text-highlight">Video</h2>
                                <small class="text-muted">Daftar video yang telah di upload</small>
                            </div>
                            <div class="flex"></div>
                            <div>
                                <a href="{{ route('video.create') }}" class="btn btn-md text-muted">
                                    <span class="d-none d-sm-inline mx-1">Tambah Video</span>
                                    <i data-feather="arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="page-content page-container" id="page-content">
                        <div class="padding">
                            <div class="table-responsive">
                                <table id="datatable" class="table table-theme table-row v-middle" data-plugin="dataTable">
                                    <thead>
                                        <tr>
                                            <th><span class="text-muted">Judul</span></th>
                                            <th><span class="text-muted">Produk</span></th>
                                            <th><span class="text-muted">Bab</span></th>
                                            <th><span class="text-muted">Vidio</span></th>
                                            <th><span class="text-muted">Aksi</span></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ############ Main END-->
            </div>
            <!-- ############ Content END-->
@endsection
