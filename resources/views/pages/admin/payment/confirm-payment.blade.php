@extends('layouts.admin')
@section('title')
    Payment
@endsection
@section('content')
<div id="content" class="flex ">
                <!-- ############ Main START-->
                @include('alert.success')
                <div>
                    <div class="page-hero page-container " id="page-hero">
                        <div class="padding d-flex pt-0">
                            <div class="page-title">
                                <h2 class="text-md text-highlight">Konfirmasi Pembayaran</h2>
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
                                            <th><span class="text-muted">Nama Siswa</span></th>
                                            <th><span class="text-muted">Nomer WA</span></th>
                                            <th><span class="text-muted">Sekolah</span></th>
                                            <th><span class="text-muted">Status Payment</span></th>
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
                                        {{ $row->Siswa->name }}
                                    </span>
                                </td>
                                <td>
                                    <span class="item-amount text-sm ">
                                        {{ $row->Siswa->wa_number }}
                                    </span>
                                </td>
                                
                                <td>
                                    <span class="item-amount text-sm ">
                                        {{ $row->Siswa->from_school }}
                                    </span>                              
                                </td>
                                <td class="flex">
                                    <div class="item-except text-muted text-sm h-1x">
                                        {{ $row->status_payment }}
                                    </div>
                                </td>
                                
                                <td>
                                    <div class="item-action dropdown">
                                        <a href="#" data-toggle="dropdown" class="text-muted">
                                            <i data-feather="more-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right bg-black" role="menu">
                                            <a class="dropdown-item" href="{{ route('product.show', $row->id) }}">
                                                Lihat Detail Pembayaran
                                            </a>
                                            <a href="{{ route('product.edit', $row->id) }}" class="dropdown-item edit">
                                                Konfirmasi pembayaran
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
