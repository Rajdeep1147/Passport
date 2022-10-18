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
                <form action="{{route('employee.Info', $getid->id)}}" method="post">
            <!-- Form row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Form Row</h4>
                            <div class="tab-content">
                               
                                <div class="tab-pane show active" id="form-row-preview">
                                    <form id="myform" action="{{ route('add.employee'), }}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label for="inputAddress" class="col-form-label">Address</label>
                                            <input type="text" class="form-control" name="address" id="inputAddress" placeholder="1234 Main St">
                                            </div>

                                            <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputCity" class="col-form-label">City</label>
                                                <input type="text" class="form-control" name="city" id="inputCity" placeholder="Enter the City Name">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputState" class="col-form-label">State</label>
                                                <select id="inputState" class="form-control" name="state" required>
                                                    <option value ="0">Choose</option>
                                                    <option value ="1">Option 1</option>
                                                    <option value ="2">Option 2</option>
                                                    <option value ="3">Option 3</option>
                                                </select>

    @error('state')
        <span class="text-danger">{{$message}}</span>
    @enderror
</div>
<div class="form-group col-md-2">
    <label for="inputZip" class="col-form-label">Zip</label>
    <input type="text" class="form-control" name="zip" id="inputZip">
</div>
</div>

<div class="form-row">
<div class="form-group col-md-6">
    <label for="inputEmail4" class="col-form-label">Salary</label>
    <input type="text" class="form-control" name="salary" id="inputEmail4" placeholder="Enter the Salary">
    @error('salary')
    <span class="text-danger">{{$message}}</span>
    @enderror
</div>
<div class="form-group col-md-6">
    <label for="inputPassword4" class="col-form-label">Education</label>
    <input type="text" class="form-control" name="education" id="inputPassword4" placeholder="Enter edution">
    @error('education')
    <span class="text-danger">{{$message}}</span>
    @enderror
</div>

<div class="form-group col-md-6">
    <label for="inputPassword4" class="col-form-label">Role</label>
    <input type="text" class="form-control" name="role" id="inputPassword4" placeholder="Enter Role">
    @error('role')
    <span class="text-danger">{{$message}}</span>
    @enderror
</div>  

<div class="form-group col-md-6">
    <label for="inputPassword4" class="col-form-label">Department</label>
    <input type="text" class="form-control" name="department" id="inputPassword4" placeholder="Enter Department">
    @error('department')
    <span class="text-danger">{{$message}}</span>
    @enderror
</div>  
</div>



<div class="form-group">
<div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="customCheck11">
    <label class="custom-control-label" for="customCheck11">Check this custom checkbox</label>
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