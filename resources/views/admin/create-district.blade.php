@extends('admin.layout.master')
@section('content')
    
<div class="container-fluid">


   <!-- content for donor html file -->
   <div class="container-fluid">
    <div class="request_area">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="box-title">Create District</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('district.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="divison">Division Name:</label>
                                <select class="form-control" id="divison_id" name="divison_id">
                                    @foreach($divisons as $divison)
                                        <option value="{{ $divison->id }}">{{ $divison->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="district">District Name:</label>
                                <input type="text" class="form-control" id="district" name="district" placeholder="Enter district Name">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    <div class="card-footer">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




</div> <!-- .container-fluid end -->
		

     



  
@endsection



