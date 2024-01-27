

@extends('admin.layout.master')
@section('content')
    
<div class="container-fluid">


    <!-- content for donor html file -->
    <div class="request_area">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="box-title">All Donor Information</h4>
                        <a href="#" class="btn btn-info btn-sm"><i class="fa fa-print"></i> Print all donor</a>
                    </div>
                    <div class="card-body">
                        <div class="table-stats order-table ov-h">
                            <table class="table table-hover display" id="MyTable">
                                <thead>
                                    <tr>
                                        <th class="serial">#</th>
                                        <th class="avatar">Image</th>
                                        <th>Name</th>
                                        <th>Gender</th>
                                        <th>Age</th>
                                        <th>Date of Birth</th>
                                        <th>Blood</th>
                                        <th>Phone</th>
                                        <th>Village</th>
                                        <th>District</th>
                                        <th>Last Donate Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $serial=1;
                                    @endphp

                                    @foreach ($profiles as $profile)
                                        
                                   
                                    <tr>
                                        <td class="serial">1</td>
                                        <td class="avatar">
                                            <div class="round-img">
                                                <img class="rounded-circle" src="" width="50px" height="50px">
                                            </div>
                                        </td>
                                        <td>{{$profile->user->name}}</td>
                                        <td>{{$profile->gender}}</</td>
                                        <td>{{$profile->age}}</span></td>
                                        <td>{{$profile->dob}}</</td>
                                        <td>{{$profile->bloodGroup->group}}</</span></td>
                                        <td>{{$profile->user->mobile}}</span></td>
                                        <td>{{$profile->village}}</span></td>
                                        <td>{{$profile->district->name}}</span></td>
                                        <td>{{$profile->last_donate}}</span></td>
                                        <td>

                                            <a href="{{ route('donor.mail', ['id' => $profile->user->id]) }}" class="btn btn-success btn-sm">Confirm</a>


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



