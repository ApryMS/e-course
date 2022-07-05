@extends('layouts.admin')
@section('title')
    Create Mentor
@endsection
@section('content')
<div id="content" class="flex ">
                <!-- ############ Main START-->
                <div>
                    <div class="page-hero page-container " id="page-hero">
                        <div class="padding d-flex pt-0">
                            <div class="page-title">
                                <h2 class="text-md text-highlight">Tambah Mentor</h2>
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
                                            <strong>Data - data Mentor</strong>
                                        </div>
                                        <div class="card-body">
                                            <form action="{{ route('mentor.store') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <label class="text-muted">Nama</label>
                                                        <input type="text" id="name" name="name" class="form-control" required>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label class="text-muted">Email</label>
                                                        <input type="email" id="email" name="email" class="form-control" required>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label class="text-muted">Password</label>
                                                        <input type="password" id="password" name="password" class="form-control" required>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label class="text-muted">Nomer WA</label>
                                                        <input type="text" id="no_wa" name="no_wa" class="form-control" required>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="name_payment_fee" id="name_payment_fee" class="text-muted d-block">Metode Pembayaran Fee</label>
                                                        <select name="name_payment_fee" class="custom-select">
                                                            <option selected>Pilih...</option>
                                                            <option value="BRI">BRI</option>
                                                            <option value="MANDIRI">MANDIRI</option>
                                                            <option value="BCA">BCA</option>
                                                            <option value="BNI">BNI</option>
                                                            <option value="DANA">DANA</option>
                                                            <option value="OVO">OVO</option>
                                                            <option value="GOPAY">GOPAY</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="text-muted">Nomer Pembayaran Fee</label>
                                                        <input type="text" id="no_payment" name="no_payment" class="form-control" required>
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
