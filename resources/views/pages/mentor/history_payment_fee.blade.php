@extends('layouts.admin')
@section('title')
    Pembayaran Fee
@endsection
@section('content')
<div id="content" class="flex ">
    @include('alert.success')
    @include('alert.failed')
                <!-- ############ Main START-->
                <div>
                    <div class="page-hero page-container " id="page-hero">
                        <div class="padding d-flex pt-0">
                            <div class="page-title">
                                <h2 class="text-md text-highlight">History Pembayaran Fee</h2>
                                <small class="text-muted">List pembayaran fee mu</small>
                            </div>
                            <div class="flex"></div>
                        </div>
                    </div>
                    <div class="page-content page-container" id="page-content">
                        <div class="padding">
                            <div class="table-responsive">
                                <table id="datatable" class="table table-theme table-row v-middle" data-plugin="dataTable">
                                    <thead>
                                        <tr>
                                            <th><span class="text-muted">No</span></th>
                                            <th><span class="text-muted">Tanggal</span></th>
                                            <th><span class="text-muted">Jumlah Siswa</span></th>
                                            <th><span class="text-muted">Total Fee</span></th>
                                            <th><span class="text-muted">Photo</span></th>
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
                                                {{ $row->updated_at }}
                                            </span>
                                        </td>
                                        <td>
                                            <span class="item-amount text-sm ">
                                                {{ $row->total_siswa }}
                                            </span>
                                        </td>
                                        <td class="flex">
                                            <div class="item-except text-muted text-sm h-1x">
                                                {{ $row->total_transfer }}
                                            </div>
                                        </td>
                                        <td class="flex">
                                            <img src="{{ Storage::url($row->photo) }}" width="100px" style="max-height: 400px;"
                                            alt=""> 
                                        </td>
                                        
                                        <td>
                                            <div class="item-action dropdown">
                                                <a href="#" data-toggle="dropdown" class="text-muted">
                                                    <i data-feather="more-vertical"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right bg-black" role="menu">
                                                    <a class="dropdown-item" href="">
                                                        Lihat Detail
                                                    </a>
                                                </div>
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
