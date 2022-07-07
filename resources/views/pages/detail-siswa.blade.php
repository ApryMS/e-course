@extends('layouts.admin')
@section('title')
    Detail Siswa
@endsection
@section('content')
<div id="content" class="flex ">
                <!-- ############ Main START-->
                <div>
                    <div class="page-hero page-container " id="page-hero">
                        <div class="padding d-flex pt-0">
                            <div class="page-title">
                                <h2 class="text-md text-highlight">Detail Siswa</h2>
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
                                            
                                                <div class="form-row">
                                                   
                                                    <div class="form-group col-md-4">
                                                        <label class="text-muted">Nama Siswa</label>
                                                        <input type="text" id="name_of_no_rek" name="name_of_no_rek" value="{{ $data->name }}" readonly class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label class="text-muted">Asal Sekolah</label>
                                                        <input type="text" id="name_of_no_rek" name="name_of_no_rek" value="{{ $data->from_school }}" readonly class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label class="text-muted">email</label>
                                                        <input type="text" id="name_of_no_rek" name="name_of_no_rek" value="{{ $data->name }}" readonly class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="text-muted">No WA</label>
                                                        <input type="text" id="name_of_no_rek" name="name_of_no_rek" value="{{ $data->wa_number }}" readonly class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="text-muted">Nomer Orang Tua</label>
                                                        <input type="text" id="name_of_no_rek" name="name_of_no_rek" value="{{ $data->no_ortu }}" readonly class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="text-muted">Status Pembayaran</label>
                                                        <input type="text" id="name_of_no_rek" name="name_of_no_rek" value="{{ $data->payment_status }}" readonly class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="text-muted">Status Siswa</label>
                                                        <input type="text" id="name_of_no_rek" name="name_of_no_rek" value="{{ $data->siswa_status }}" readonly class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="text-muted">Provinsi</label>
                                                        <input type="text" id="name_of_no_rek" name="name_of_no_rek" value="{{ $data->province }}" readonly class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="text-muted">Kabupaten</label>
                                                        <input type="text" id="name_of_no_rek" name="name_of_no_rek" value="{{ $data->regency }}" readonly class="form-control">
                                                    </div>
                                                </div>
                                               
                                            
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
