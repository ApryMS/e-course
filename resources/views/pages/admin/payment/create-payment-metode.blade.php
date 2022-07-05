@extends('layouts.admin')
@section('title')
    Metode Pembayaran
@endsection
@section('content')
<div id="content" class="flex ">
                <!-- ############ Main START-->
                <div>
                    <div class="page-hero page-container " id="page-hero">
                        <div class="padding d-flex pt-0">
                            <div class="page-title">
                                <h2 class="text-md text-highlight">Tambah Metode Pembayaran</h2>
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
                                            <strong>Data Metode Pembayaran</strong>
                                        </div>
                                        <div class="card-body">
                                            <form action="{{ route('payment.store') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label class="text-muted">Nama Bank</label>
                                                        <input type="text" id="name_bank" name="name_bank" class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="status" id="status" class="text-muted d-block">Status</label>
                                                        <select name="status" class="custom-select">
                                                            <option selected>Pilih...</option>
                                                            <option value="AKTIF">AKTIF</option>
                                                            <option value="NON AKTIF">NON AKTIF</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label class="text-muted">No. Rekening</label>
                                                        <input type="number" id="no_rek" name="no_rek" class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-8 custom-file">
                                                        {{-- <div class="form-group"> --}}
                                                            <label>Foto Bank</label>
                                                            <input type="file" name="photo" class="form-control"
                                                                placeholder="Photo">
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
