@extends('layouts.admin')
@section('title')
    Bab
@endsection
@section('content')
<div id="content" class="flex ">
                <!-- ############ Main START-->
                <div>
                    <div class="page-hero page-container " id="page-hero">
                        <div class="padding d-flex">
                            <div class="page-title">
                                <h2 class="text-md text-highlight">Tambah Bab</h2>
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
                                            <strong>Data Bab</strong>
                                        </div>
                                        <div class="card-body">
                                            <form action="{{ route('bab-video.store') }}"" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label class="text-muted">Nama Bab</label>
                                                        <input type="text" id="title" name="title" required class="form-control" >
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="product_id" class="text-muted d-block">Produk</label>
                                                        <select class="custom-select" name="product_id" id="product_id">
                                                            <option selected>Pilih...</option>
                                                            @foreach ($produk as $row)
                                                                <option value="{{ $row->id }}">{{ $row->title }}</option>
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
