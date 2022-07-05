@extends('layouts.admin')
@section('title')
    Produk
@endsection
@section('content')
<div id="content" class="flex ">
                <!-- ############ Main START-->
                <div>
                    <div class="page-hero page-container " id="page-hero">
                        <div class="padding d-flex pt-0">
                            <div class="page-title">
                                <h2 class="text-md text-highlight">Produk</h2>
                                <small class="text-muted">Daftar list seluruh produk</small>
                            </div>
                            <div class="flex"></div>
                            <div>
                                <a href="{{ route('product.create') }}" class="btn btn-md text-muted">
                                    <span class="d-none d-sm-inline mx-1">Tambah Produk</span>
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
                                            <th><span class="text-muted">Harga</span></th>
                                            <th><span class="text-muted">Thubnail</span></th>
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
                                        {{ $row->title }}
                                    </span>
                                </td>
                                <td>
                                    <span class="item-amount text-sm ">
                                        {{ $row->price }}
                                    </span>
                                </td>
                                
                                <td>
                                    <img src="{{ Storage::url($row->thumbnail) }}" width="100px" style="max-height: 400px;"
                                    alt="">                                    
                                </td>
                                <td class="flex">
                                    <div class="item-except text-muted text-sm h-1x">
                                        {{ $row->status_product }}
                                    </div>
                                </td>
                                
                                <td>
                                    <div class="item-action dropdown">
                                        <a href="#" data-toggle="dropdown" class="text-muted">
                                            <i data-feather="more-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right bg-black" role="menu">
                                            <a class="dropdown-item" href="{{ route('product.show', $row->id) }}">
                                                Lihat Detail
                                            </a>
                                            <a href="{{ route('product.edit', $row->id) }}" class="dropdown-item edit">
                                                Edit
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
