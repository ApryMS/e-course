<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>E-Course | @yield('title')</title>
        <meta name="description" content="Responsive, Bootstrap, BS4" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- style -->
        <!-- build:css ../dashboard/css/site.min.css -->
        <link rel="stylesheet" href="{{ asset('basik/assets/css/bootstrap.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ asset('basik/assets/css/theme.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ asset('basik/assets/css/style.css') }}" type="text/css" />
        <!-- endbuild -->
    </head>
    <body class="layout-row">
        {{-- <!-- ############ Aside START--> --}}
        
        <div id="main" class="layout-column flex">
            {{-- <!-- ############ Header START--> --}}
            <div id="header" class="page-header mb-4">
                <div class="navbar navbar-expand-lg">
                    <!-- brand -->
                    <a href="index.html" class="navbar-brand d-lg-none">
                        <img src="{{ asset('basik/assets/img/afterschoolindonesia.png') }}" alt="logo">
                        <span class="hidden-folded d-inline l-s-n-1x d-lg-none">After School Indonesia</span>
                    </a>
                </div>
            </div>
            {{-- content --}}
            
            <div id="content" class="flex ">
                <!-- ############ Main START-->
                <div>
                    <div class="page-hero page-container " id="page-hero">
                        <div class="padding d-flex pt-0">
                            <div class="page-title">
                                <h2 class="text-md text-highlight">Daftar Pejuang</h2>
                                <small class="text-muted">Dari mentor {{ $mentor->name }}</small>
                            </div>
                        </div>
                    </div>

                    <div class="page-content page-container" id="page-content">
                        <div class="padding pt-0">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong>Mohon isi data dengan benar</strong>
                                        </div>
                                        <div class="card-body">
                                            <form action="{{ route('post-pejuang', $mentor->id) }}" method="POST" enctype="multipart/form-data">
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
                </div>
                <!-- ############ Main END-->
            </div>
            <!-- ############ Content END-->


            <!-- ############ Footer START-->
            <div id="footer" class="page-footer hide">
                <div class="d-flex p-3">
                    <span class="text-sm text-muted flex">&copy; Copyright. flatfull.com</span>
                    <div class="text-sm text-muted">Version 1.0.0</div>
                </div>
            </div>
            <!-- ############ Footer END-->  
        </div>
        <!-- build:js ../dashboard/js/site.min.js -->
        <!-- jQuery -->
        <script src="{{ asset('basik/libs/jquery/dist/jquery.min.js')  }}"></script>
        <!-- Bootstrap -->
        <script src="{{ asset('basik/libs/popper.js/dist/umd/popper.min.js') }}"></script>
        <script src="{{ asset('basik/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <!-- ajax page -->
        <script src="{{ asset('basik/libs/pjax/pjax.min.js') }}"></script>
        <script src="{{ asset('basik/assets/js/ajax.js') }}"></script>
        <!-- lazyload plugin -->
        <script src="{{ asset('basik/assets/js/lazyload.config.js') }}"></script>
        <script src="{{ asset('basik/assets/js/lazyload.js') }}"></script>
        <script src="{{ asset('basik/assets/js/plugin.js') }}"></script>
        <!-- scrollreveal -->
        <script src="{{ asset('basik/libs/scrollreveal/dist/scrollreveal.min.js') }}"></script>
        <!-- feathericon -->
        <script src="{{ asset('basik/libs/feather-icons/dist/feather.min.js') }}"></script>
        <script src="{{ asset('basik/assets/js/plugins/feathericon.js') }}"></script>
        <!-- theme -->
        <script src="{{ asset('basik/assets/js/theme.js') }}"></script>
        <script src="{{ asset('basik/assets/js/utils.js') }}"></script>
        <!-- endbuild -->
        @stack('prepend-script')
        {{-- @include('includes.script-layanan') --}}
        @stack('addon-script')
    </body>
</html>
