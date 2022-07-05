@extends('layouts.admin')
@section('title')
    Pembayaran
@endsection
@section('content')
<div id="content" class="flex ">
                <!-- ############ Main START-->
                <div>
                    <div class="page-hero page-container " id="page-hero">
                        <div class="padding d-flex pt-0">
                            <div class="page-title">
                                <h2 class="text-md text-highlight">Buat Konfirmasi Pembayaran</h2>
                                <small class="text-muted">Silahkan Isi data dengan benar</small>
                            </div>
                        </div>
                    </div>

                    <div class="page-content page-container" id="page-content">
                        <div class="padding pt-0">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong>Data - data konfirmasi pembayaran</strong>
                                        </div>
                                        <div class="card-body">
                                            <form action="{{ route('post-create-payment') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label class="text-muted">Nama Pemilik Bank</label>
                                                        <input type="text" id="name_of_no_rek" name="name_of_no_rek" class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="siswa_id" id="siswa_id" class="text-muted d-block">Nama Siswa</label>
                                                        <select name="siswa_id" class="custom-select">
                                                            <option selected>Pilih...</option>
                                                            @foreach ($data as $row )
                                                            <option value="{{ $row->id }}">{{ $row->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label class=text-muted">Catatan</label>
                                                        <textarea id="event-desc" class="form-control" rows="12" id="note" required name="note"></textarea>
                                                    </div>
                                                    <div class="form-group col-md-12 custom-file">
                                                        {{-- <div class="form-group"> --}}
                                                            <label>Bukti Transfer</label>
                                                            <input type="file" name="photo_payment" class="form-control"
                                                                placeholder="photo_payment">
                                                        {{-- </div> --}}
                                                        {{-- <input type="file" class="custom-file-input" id="thumbnail">
                                                        <label class="custom-file-label" for="thumbnail">Pilih Thumbnail</label> --}}
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
