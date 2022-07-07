@extends('layouts.admin')
@section('title')
    Detail Pembayaran
@endsection
@section('content')
<div id="content" class="flex ">
                <!-- ############ Main START-->
                <div>
                    <div class="page-hero page-container " id="page-hero">
                        <div class="padding d-flex pt-0">
                            <div class="page-title">
                                <h2 class="text-md text-highlight">Detail Konfirmasi Pembayaran</h2>
                            </div>
                        </div>
                    </div>

                    <div class="page-content page-container" id="page-content">
                        <div class="padding pt-0">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong>Produk Dibeli</strong>
                                        </div>
                                        <div class="card-body">
                                            <form action="" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-row">
                                                    <div class="form-group col-md-4">
                                                        <label class="text-muted">Nama</label>
                                                        <input type="text" id="name_of_no_rek" name="name_of_no_rek" value="{{ $data->Product->title }}" readonly class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label class="text-muted">Harga</label>
                                                        <input type="text" id="name_of_no_rek" name="name_of_no_rek" value="{{ $data->Product->price }}" readonly class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label class="text-muted">Status</label>
                                                        <input type="text" id="name_of_no_rek" name="name_of_no_rek" value="{{ $data->Product->status_product }}" readonly class="form-control">
                                                    </div>
                                                </div>
                                               
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong>Data Siswa</strong>
                                        </div>
                                        <div class="card-body">
                                            <form action="" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-row">
                                                    <div class="form-group col-md-4">
                                                        <label class="text-muted">Nama Pemilik Bank</label>
                                                        <input type="text" id="name_of_no_rek" name="name_of_no_rek" value="{{ $data->name_of_no_rek }}" readonly class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label class="text-muted">Status Pembayaran</label>
                                                        <input type="text" id="name_of_no_rek" name="name_of_no_rek" value="{{ $data->status_payment }}" readonly class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label class="text-muted">Konfirmasi Admin</label>
                                                        <input type="text" id="name_of_no_rek" name="name_of_no_rek" value="{{ $data->confirm }}" readonly class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label class="text-muted">Nama Siswa</label>
                                                        <input type="text" id="name_of_no_rek" name="name_of_no_rek" value="{{ $data->Siswa->name }}" readonly class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label class="text-muted">Asal Sekolah</label>
                                                        <input type="text" id="name_of_no_rek" name="name_of_no_rek" value="{{ $data->Siswa->from_school }}" readonly class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label class="text-muted">No WA</label>
                                                        <input type="text" id="name_of_no_rek" name="name_of_no_rek" value="{{ $data->Siswa->wa_number }}" readonly class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label class="text-muted">Catatan</label>
                                                        <textarea id="event-desc" class="form-control" rows="12" id="note" readonly name="note">{{ $data->note }}</textarea>
                                                    </div>
                                                    <div class=" form-group col-md-12 text-center">
                                                        
                                                        <img src="{{ Storage::url($data->photo_payment) }}" width="400px" style="max-height: 400px;"
                                                        alt=""> 
                                                    </div>
                                                </div>
                                               
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong>Data yang mendaftarkan</strong>
                                        </div>
                                        <div class="card-body">
                                            <form action="" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-row">
                                                    <div class="form-group col-md-4">
                                                        <label class="text-muted">Nama</label>
                                                        <input type="text" id="name_of_no_rek" name="name_of_no_rek" value="{{ $data->User->name }}" readonly class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label class="text-muted">No WA</label>
                                                        <input type="text" id="name_of_no_rek" name="name_of_no_rek" value="{{ $data->User->no_wa }}" readonly class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label class="text-muted">Email</label>
                                                        <input type="text" id="name_of_no_rek" name="name_of_no_rek" value="{{ $data->User->email }}" readonly class="form-control">
                                                    </div>
                                               
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
