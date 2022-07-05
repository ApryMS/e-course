@extends('layouts.admin')
@section('title')
    Siswa
@endsection
@section('content')
<div id="content" class="flex ">
    @include('alert.failed')
                <!-- ############ Main START-->
                <div>
                    <div class="page-hero page-container " id="page-hero">
                        <div class="padding d-flex pt-0">
                            <div class="page-title">
                                <h2 class="text-md text-highlight">Tambah Siswa</h2>
                                <small class="text-muted">Silahkan Isi data dengan benar</small>
                            </div>
                        </div>
                    </div>

                    <div class="page-content page-container" id="page-content">
                        <div class="padding pt-0">
                            <div class="row">
                                <div class="col-md-12">
                                    @if ($errors->any())
                        <div class="alert alert-danger ">
                            <ul>
                                @foreach ($errors->all() as $error )
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                                    <div class="card">
                                        <div class="card-header">
                                            <strong>Data Siswa</strong>
                                        </div>
                                        <div class="card-body">
                                            <form action="{{ route('siswa.store') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <label class="text-muted">Nama Lengkap</label>
                                                        <input type="text" class="form-control @error('name')
                                                        @enderror"  name="name" value="{{ old('name') }}" required >
                                                        @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="text-muted">Email</label>
                                                        <input type="email"  class="form-control @error('email') is-valid
                                                        @enderror"  name="email" value="{{ old('email') }}" required >
                                                        @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                    
                                                    <div class="form-group col-md-6">
                                                        <label class="text-muted">Password</label>
                                                        <input type="password" id="password" name="password" class="form-control"  required>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label class="text-muted">No WA</label>
                                                        <input type="text" id="wa_number" name="wa_number" class="form-control" value="{{ old('wa_number') }}" required>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label class="text-muted">No HP Orang Tua</label>
                                                        <input type="text" id="no_ortu" name="no_ortu" class="form-control" value="{{ old('wa_number') }}" required>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label class="text-muted">Asal Sekolah</label>
                                                        <input type="text" id="from_school" name="from_school" class="form-control" value="{{ old('from_school') }}" required>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="province" id="province" class="text-muted d-block">Provinsi</label>
                                                        <select name="province" class="custom-select"  required>
                                                            <option selected>Pilih...</option>
                                                            @foreach ($data as $row )
                                                            <option value="{{ $row->name }}">{{ $row->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="regency" id="regency" class="text-muted d-block">Kabupaten</label>
                                                        <select name="regency" class="custom-select"  required>
                                                            <option selected>Pilih...</option>
                                                            @foreach ($data as $row )
                                                            <option value="{{ $row->name }}">{{ $row->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="product_id" id="product_id" class="text-muted d-block">Produk Dibeli</label>
                                                        <select name="product_id" class="custom-select" required>
                                                            <option selected>Pilih...</option>
                                                            @foreach ($product as $row )
                                                            <option value="{{ $row->id }}">{{ $row->title }} || Rp. {{ $row->price }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="payment_method_id" id="payment_status" class="text-muted d-block">Metode Pembayaran</label>
                                                        <select name="payment_method_id" class="custom-select" required>
                                                            <option selected>Pilih...</option>
                                                            @foreach ($payment_metode as $row )
                                                            <option value="{{ $row->id }}">{{ $row->name_bank }} || {{ $row->no_rek }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                   
                                                </div>
                                               
                                                <button type="submit" class="btn btn-primary mt-5 float-right">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                </div>
                <!-- ############ Main END-->
            </div>
            <!-- ############ Content END-->
@endsection

