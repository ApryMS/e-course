@extends('layouts.admin')
@section('title')
    Detail Mentor
@endsection
@section('content')
<div id="content" class="flex ">
                <!-- ############ Main START-->
                <div>
                    <div class="page-hero page-container " id="page-hero">
                        <div class="padding d-flex pt-0">
                            <div class="page-title">
                                <h2 class="text-md text-highlight">Detail Mentor {{ $mentor->name }}</h2>
                            </div>
                        </div>
                    </div>

                    <div class="page-content page-container" id="page-content">
                        <div class="padding pt-0">
                            <div class="row">
                                <div class="col-md-4 d-flex">
                                    <div class="card flex">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center text-hover-success">
                                                <div class="avatar w-56 m-2 no-shadow gd-success">
                                                    <i data-feather="users"></i>
                                                </div>
                                                <div class="px-4 flex">
                                                    <div>Jumlah Siswa Didapat</div>
                                                    <div class="text-success mt-2">
                                                        {{ $fee->total_siswa_confirm }}
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- soareoart --}}
                                <div class="col-md-4 d-flex">
                                    <div class="card flex">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center text-hover-success">
                                                <div class="avatar w-56 m-2 no-shadow gd-primary">
                                                    <i data-feather="users"></i>
                                                </div>
                                                <div class="px-4 flex">
                                                    <div>Jumlah Pejuang Didapat</div>
                                                    <div class="text-success mt-2">
                                                        {{ $pejuangTotal }}
                                                    </div>
                                                </div>
                                                <a href="#pejuang" class="text-muted">
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
                                                    <div>Fee Di dapat</div>
                                                    <div class="text-success mt-2">
                                                        Rp. {{  $fee->total_fee }}
                                                    </div>
                                                </div>
                                                <a href="{{ route('transfer-fee-mentor', $fee->id) }}" class="text-muted">Transfer Fee
                                                    <i data-feather="arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong>Data - data Mentor</strong>
                                        </div>
                                        <div class="card-body">
                                            
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <label class="text-muted">Nama</label>
                                                        <input type="text" id="name" name="name" value="{{ $mentor->name }}"  class="form-control" readonly>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label class="text-muted">Email</label>
                                                        <input type="email" id="email" name="email" value="{{ $mentor->email }}"  class="form-control" readonly>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label class="text-muted">Role</label>
                                                        <input type="email" id="role" name="role" value="{{ $mentor->role }}"  class="form-control" readonly>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label class="text-muted">Nomer WA</label>
                                                        <input type="text" id="no_wa" name="no_wa" value="{{ $mentor->no_wa }}"  class="form-control" readonly>
                                                    </div>
                                                    
                                                    <div class="form-group col-md-6">
                                                        <label class="text-muted">Metode Pembayaran Fee</label>
                                                        <input type="text" id="no_payment" name="no_payment" value="{{ $mentor->name_payment_fee }}"  class="form-control" readonly>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="text-muted">Nomer Pembayaran Fee</label>
                                                        <input type="text" id="no_payment" name="no_payment" value="{{ $mentor->no_payment }}"  class="form-control" readonly>
                                                    </div>
                                                   
                                                    
                                                </div>
                                               
                                                <h6 class="text-md text-highlight mt-5 mb-3">List Pejuang</h6>
                                            <div class="page-content page-container" id="pejuang">
                                                <div class="padding pl-0 pr-0 pt-2 pb-0">
                                                    <div id="toolbar">
                                                    </div>
                                                    <table id="table" class="table table-theme v-middle" data-plugin="bootstrapTable" data-toolbar="#toolbar" data-search="true" data-search-align="left" data-show-export="true" data-show-columns="true" data-detail-view="false" data-mobile-responsive="true"
                                                    data-pagination="true" data-page-list="[10, 25, 50, 100, ALL]">
                                                        <thead>
                                                            <tr>
                                                                <th data-sortable="true" data-field="id">No</th>
                                                                <th data-sortable="true" data-field="owner">Name</th>
                                                                <th data-sortable="true" data-field="project">Email</th>
                                                                <th data-sortable="true" data-field="task">No WA</th>
                                                                <th data-sortable="true" data-field="finish">Role</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @php
                                                                $no = 1;
                                                             @endphp
                                                            @foreach ($pejuang as $row)
                                                            <tr class=" " >
                                                                <td class="flex">
                                                                    <div class="item-except text-muted text-sm h-1x">
                                                                        {{ $no ++ }}
                                                                    </div>
                                                                </td>
                                                                <td class="flex">
                                                                    <div class="item-except text-muted text-sm h-1x">
                                                                        {{ $row->name}}    
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="item-except text-muted text-sm h-1x">
                                                                        {{ $row->email}}    
                                                                    </div>
                                                                </td>
                                                                
                                                                <td>
                                                                    <span class="item-amount text-sm ">
                                                                        {{ $row->no_wa}}   
                                                                </span>
                                                                </td>
                                                                <td>
                                                                    <span class="item-amount text-sm [object Object]">
                                                                        {{ $row->role}}   
                                                                </span>
                                                                </td>
                                                                
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                    
                                                </div>
                                               
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    {{-- <div class="page-content page-container" id="page-content">

                        <div class="padding">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Event form</strong>
                                    </div>
                                    <div class="card-body">
                                        <form>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Title</label>
                                                <div class="col-sm-9">
                                                    <input id="event-title" type="text" class="form-control" placeholder="Title">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Description</label>
                                                <div class="col-sm-9">
                                                    <textarea id="event-desc" class="form-control" rows="6"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3"></label>
                                                <div class="col-sm-9">
                                                    <button type="button" id="btn-save" class="btn gd-primary btn-rounded">Save</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
                <!-- ############ Main END-->
            </div>
            <!-- ############ Content END-->
@endsection
