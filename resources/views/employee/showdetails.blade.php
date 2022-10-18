@extends('layout.employeelayout')

@section('content')
<div class="container-fluid">

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
           
            <h4 class="page-title">Data Tables</h4>
        </div>
    </div>
</div>     
<!-- end page title --> 

<div class="row">
    <div class="col-12">
        
        <div class="card">
            <div class="card-body">

                <div class="tab-content">
                    <div class="tab-pane show active" id="buttons-table-preview">
                        <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>City</th>
                                    <th>state</th>
                                    <th>Eduction</th>
                                    
                                    <th>Action</th>
                                </tr>
                            </thead>
                        
                            <tbody>
                            
                                @foreach($employeedetail as $user)
                                    <td>{{$parent->name}}</td>
                                    <td>{{$parent->email}}</td>
                                   <td>{{$user->address}}</td>
                                    <td>{{$user->city}}</td>
                                    <td>{{$user->state}}</td>
                                    <td>{{$user->education}}</td>
                                    <td>{{$user->country}}</td>
                                    <td><a href="{{route('add.details')}}/{{$user->id}}">Delete</a> </td>
                                    </tr> 
                                @endforeach
                             
                               
                            </tbody>
                        </table>                                           
                    </div> <!-- end preview-->
                
                 
                </div> <!-- end tab-content-->
                
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
<!-- end row-->


</div>
@endsection