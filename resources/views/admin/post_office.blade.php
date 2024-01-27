

@extends('admin.layout.master')
@section('content')
    
<div class="container-fluid">


    <!-- content for donor html file -->
    <div class="request_area">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="box-title">All Post Office</h4>
                        <a href="{{route('post_office.create')}}" class="btn btn-info btn-sm"><i class="fa "></i>Add Post Office</a>
                    </div>
                    <div class="card-body">
                        <div class="table-stats order-table ov-h">
                            <table class="table table-hover display" id="MyTable">
                                <thead>
                                    <tr>
                                        <th class="serial">Serial</th>
                                        
                                        <th>Post Office Name</th>
                                        <th>Upazilla Name</th>
                                        <th>District Name</th>
                                        <th>Division Name</th>
                                      
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $serial =1;
                                    @endphp

                                    @foreach ($post_offices as $post_office)
                                        
                
                                    <tr>
                                        <td class="serial">{{$serial++}}</td>
                                       
                                        <td>{{$post_office->name}}</td>
                                        <td>{{$post_office->upazila->name}}</td>
                                        <td>{{$post_office->district->name}}</td>
                                        <td>{{$post_office->division->name}}</td>
                                        <td>
                                            <a href="" class="btn btn-success btn-sm">Delete</a>
                                        </td>
                                       
                                          
                                        
                                    </tr>

                                    @endforeach

                                </tbody>
                            </table>
                        </div> <!-- /.table-stats -->
                    </div>
                    <div class="card-footer">
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- .request_area end -->



</div> <!-- .container-fluid end -->
		

     



  
@endsection



