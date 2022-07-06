@extends('layouts.admin')
@section('title')
    Profile
@endsection
@section('content')
<div id="content" class="flex ">
    @include('alert.success')
                <!-- ############ Main START-->
                <div>
                    <div class="page-hero page-container " id="page-hero">
                        <div class="padding d-flex pt-0">
                            <div class="page-title">
                                <h2 class="text-md text-highlight">Profile</h2>
                                <small class="text-muted">Profile Anda</small>
                            </div>
                        </div>
                    </div>
                    <div class="page-content page-container" id="page-content">
                        <div class="padding pt-0">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong>Data Diri</strong>
                                        </div>
                                        <div class="card-body">
                                            <form action="{{ route('edit-profile', $user->id) }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label class="text-muted">Nama</label>
                                                        <input type="text" id="name" name="name" value="{{ $user->name }}"  class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="text-muted">Email</label>
                                                        <input type="text" id="email" name="email" value="{{ $user->email }}"  class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label class="text-muted">Nomer WA</label>
                                                        <input type="text" id="no_wa" name="no_wa" value="{{ $user->no_wa }}"  class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label class="text-muted">Team Dari</label>
                                                        <input type="text" id="status_user" name="status_user" readonly value="{{ $user->User->name }}"  class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label class="text-muted">Ganti Passsword</label>
                                                        <input type="password" id="password" name="password"  class="form-control">
                                                    </div>
                                                </div>
                                               
                                                <button type="submit" class="btn btn-primary mt-5 float-right">Simpan</button>
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