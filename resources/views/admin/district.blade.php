

@extends('admin.layout.master')
@section('content')
    
<div class="container-fluid">


    <!-- content for donor html file -->
    <div class="request_area">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="box-title">All District</h4>
                        <a href="{{route('district.create')}}" class="btn btn-info btn-sm"><i class="fa "></i>Add District</a>
                    </div>
                    <div class="card-body">
                        <div class="table-stats order-table ov-h">
                            <table class="table table-hover display" id="MyTable">
                                <thead>
                                    <tr>
                                        <th class="serial">Serial</th>
                                        <th>District Name</th>
                                        <th>Division Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $serial = 1;
                                    @endphp
                                    @foreach ($districts as $district)
                                        
                                   
                                    <tr>
                                        <td class="serial">{{$serial++}}</td>
                                        <td>{{$district->name}}</td>
                                        <td>{{$district->divisons->name}}</td>
                                        <td>
                                       
                                            <form action="{{ route('district.delete', ['id' => $district->id]) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-success btn-sm">Delete</button>
                                            </form>
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



