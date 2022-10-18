@extends('layout.layout')

@section('content')
<div class="container-fluid">

<!-- Begin page -->
<div class="wrapper">

    <!-- ========== Left Sidebar Start ========== -->
    @include('layout.sidebar')
    <!-- Left Sidebar End -->

    <div class="content-page">
        <div class="content">
            
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                <li class="breadcrumb-item active">Form Elements</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Form Elements</h4>
                    </div>
                </div>
            </div>     
            <!-- end page title --> 


            <!-- Form row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Form Row</h4>
                            <div class="tab-content">
                                @if(Session::has('registersuccess'))
                                    <div class="alert alert-success">{{Session::get('registersuccess')}}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                @endif

                                @if(Session::has('registerfail'))
                                    <div class="alert alert-danger">{{Session::get('registerfail')}}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                @endif
                                <div class="tab-pane show active" id="form-row-preview">
                                    <form id="myform" action="{{ route('add.employee') }}" method="post">
                                        @csrf
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputEmail4" class="col-form-label">Email</label>
                                                <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Enter Email">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputPassword4" class="col-form-label">Name</label>
                                                <input type="text" class="form-control" name="name" id="inputPassword4" placeholder="Enter Name">
                                                @error('name')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                  </div>

                                    <button type="submit" class="btn btn-primary text-center">Save Employee</button>
                            </form>                      
                                </div> <!-- end preview-->
                            
                              
                            </div> <!-- end tab-content-->

                        </div> <!-- end card-body -->
                    </div> <!-- end card-->
                </div> <!-- end col -->
            </div>
            <!-- end row -->
            
        </div> <!-- End Content -->

        <!-- Footer Start -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        2018 - 2020 © Hyper - Coderthemes.com
                    </div>
                    <div class="col-md-6">
                        <div class="text-md-right footer-links d-none d-md-block">
                            <a href="javascript: void(0);">About</a>
                            <a href="javascript: void(0);">Support</a>
                            <a href="javascript: void(0);">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->

    </div> <!-- content-page -->

</div> <!-- end wrapper-->
</div>
@endsection