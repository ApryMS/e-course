@extends('layouts.admin')
@section('title')
    Bab
@endsection
@section('content')
<div id="content" class="flex ">
                <!-- ############ Main START-->
                <div>
                    <div class="page-hero page-container " id="page-hero">
                        <div class="padding d-flex pt-0">
                            <div class="page-title">
                                <h2 class="text-md text-highlight">Bab</h2>
                                <small class="text-muted">Daftar - daftar Bab</small>
                            </div>
                            <div class="flex"></div>
                            <div>
                                <a href="{{ route('bab-video.create') }}" class="btn btn-md text-muted">
                                    <span class="d-none d-sm-inline mx-1">Tambah Bab</span>
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
                                            <th><span class="text-muted">No</span></th>
                                            <th><span class="text-muted">Nama</span></th>
                                            <th><span class="text-muted">Product</span></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($data as $row )
                                    <tr class=" " data-id="3">
                                        <td style="min-width:30px;text-align:center">
                                            <small class="text-muted">{{ $no ++ }}</small>
                                        </td>
                                        <td>
                                            <span class="item-amount text-sm ">
                                                {{ $row->title }}
                                            </span>
                                        </td>
                                        <td>
                                            <span class="item-amount text-sm ">
                                                {{ $row->Product->title }}
                                            </span>
                                        </td>

                                        <td class="flex">
                                            
                                        </td>
                                        
                                        <td class="flex">
                                            
                                        </td>
                                        
                                        <td>
                                            <div class="item-action dropdown">
                                                <a href="#" data-toggle="dropdown" class="text-muted">
                                                    <i data-feather="more-vertical"></i>
                                                </a>
                                                {{-- <div class="dropdown-menu dropdown-menu-right bg-black" role="menu">
                                                    <form action="{{ route('non-active-mentor', $row->id) }}" method="POST">
                                                        @csrf
                                                        <button  class="dropdown-item" type="submit">
                                                            Non Aktif
                                                        </button>
                                                    </form>
                                                    <form action="{{ route('active-mentor', $row->id) }}" method="POST">
                                                        @csrf
                                                        <button  class="dropdown-item" type="submit">
                                                            Aktif
                                                        </button>
                                                    </form>
                                                </div> --}}
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
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
