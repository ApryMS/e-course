@extends('layouts.admin')
@section('title')
    Transfer Fee Mentor
@endsection
@section('content')
<div id="content" class="flex ">
                <!-- ############ Main START-->
                <div>
                    <div class="page-hero page-container " id="page-hero">
                        <div class="padding d-flex pt-0">
                            <div class="page-title">
                                <h2 class="text-md text-highlight">Transfer Fee Mentor</h2>
                            </div>
                        </div>
                    </div>

                    <div class="page-content page-container" id="page-content">
                        <div class="padding pt-0">
                            <div class="row">
                                {{-- data mentor --}}
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
                                               
                                                
                                            
                                        </div>
                                    </div>
                                </div>
                                {{--penutup data mentor --}}

                                {{-- data fee mentor --}}
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong>Data Fee mentor</strong>
                                        </div>
                                        <div class="card-body">
                                            
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label class="text-muted">Total Siswa didapat</label>
                                                        <input type="text" id="name" name="name" value="{{ $fee->total_siswa_confirm }}"  class="form-control" readonly>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="text-muted">Total Fee </label>
                                                        <input type="text" id="email" name="email" value="{{ $fee->total_fee }}"  class="form-control" readonly>
                                                    </div>
                                                    
                                                   
                                                    
                                                </div>
                                               
                                                
                                            
                                        </div>
                                    </div>
                                </div>
                                {{-- penutup data fee mentor --}}

                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong>Bukti Transfer</strong>
                                        </div>
                                        <div class="card-body">
                                            <form action="{{ route('post-transfer-fee-mentor', $fee->id) }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-row">
                                                    
                                                    <div class="form-group col-md-8 custom-file">
                                                        {{-- <div class="form-group"> --}}
                                                            <label>Bukti Transfer Fee</label>
                                                            <input type="file" name="thumbnail" class="form-control"
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
