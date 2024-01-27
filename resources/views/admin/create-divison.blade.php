@extends('admin.layout.master')
@section('content')
    
<div class="container-fluid">


   <!-- content for donor html file -->
<div class="request_area">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4 class="box-title">Create Division</h4>
                </div>
                <div class="card-body">

                    <form action="{{ route('divison.store') }}" method="POST">
                        @csrf
                        <!-- Other input fields -->
                        <div class="form-group">
                            <label for="division">Division Name:</label>
                            <input type="text" class="form-control" id="division" name="name" placeholder="Enter Division Name">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    
        
                </div>
                <div class="card-footer">
                </div>
            </div>
        </div>
    </div>
</div> <!-- .request_area end -->




</div> <!-- .container-fluid end -->
		

     



  
@endsection


