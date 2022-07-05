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
                                <h2 class="text-md text-highlight">Tambah Video</h2>
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
                                            <strong>Data Kategori</strong>
                                        </div>
                                        <div class="card-body">
                                            <form>
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <label class="text-muted">Judul</label>
                                                        <input type="text" id="title" class="form-control" placeholder="title">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="inputState" class="text-muted d-block">Pilih bab</label>
                                                        <select class="custom-select">
                                                            <option selected>Pilih...</option>
                                                            <option value="AKTIF">AKTIF</option>
                                                            <option value="NON AKTIF">NON AKTIF</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="inputState" class="text-muted d-block">Status</label>
                                                        <select class="custom-select">
                                                            <option selected>Pilih...</option>
                                                            <option value="AKTIF">AKTIF</option>
                                                            <option value="NON AKTIF">NON AKTIF</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label class="text-muted">Link Youtube</label>
                                                        <input type="text" id="link_youtube" class="form-control" placeholder="link_youtube">
                                                    </div>
                                                    {{-- <div class="form-group col-md-12">
                                                        <label class="col-form-label">Description</label>
                                                        <textarea id="event-desc" class="form-control" rows="6"></textarea>
                                                    </div> --}}
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
