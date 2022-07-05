@extends('layouts.admin')
@section('title')
    Metode Payment
@endsection
@section('content')
<div id="content" class="flex ">
    @include('alert.success')
                <!-- ############ Main START-->
                <div>
                    <div class="page-hero page-container " id="page-hero">
                        <div class="padding d-flex pt-0">
                            <div class="page-title">
                                <h2 class="text-md text-highlight">Metode Pembayaran</h2>
                                <small class="text-muted">Daftar - daftar Metode Pembayaran</small>
                            </div>
                            <div class="flex"></div>
                            <div>
                                <a href="{{ route('payment.create') }}" class="btn btn-md text-muted">
                                    <span class="d-none d-sm-inline mx-1">Tambah Metode</span>
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
                                            <th><span class="text-muted">Nama Bank</span></th>
                                            <th><span class="text-muted">Rekening Bank</span></th>
                                            <th><span class="text-muted">Foto Bank</span></th>
                                            <th><span class="text-muted">Status</span></th>
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
                                        {{ $row->name_bank }}
                                    </span>
                                </td>
                                <td>
                                    <span class="item-amount text-sm ">
                                        {{ $row->no_rek }}
                                    </span>
                                </td>
                                
                                <td>
                                    <img src="{{ Storage::url($row->photo) }}" width="100px" style="max-height: 400px;"
                                    alt="">                                    
                                </td>
                                <td class="flex">
                                    <div class="item-except text-muted text-sm h-1x">
                                        {{ $row->status }}
                                    </div>
                                </td>
                                
                                <td>
                                    <div class="item-action dropdown">
                                        <a href="" data-toggle="dropdown" class="text-muted">
                                            <i data-feather="more-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right bg-black" role="menu">
                                            <form action="{{ route('non-active-payment-metode', $row->id) }}" method="POST">
                                                @csrf
                                                <button  class="dropdown-item" type="submit">
                                                    Non Aktif
                                                </button>
                                            </form>
                                            <form action="{{ route('active-payment-metode', $row->id) }}" method="POST">
                                                @csrf
                                                <button  class="dropdown-item" type="submit">
                                                    Aktif
                                                </button>
                                            </form>
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
