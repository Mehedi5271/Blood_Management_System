@extends('user.layout.master')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header">
                    Your Profile
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{$user->name}}</h5>
                    <p class="card-text">Email: {{$user->email}}</p>
                    <p class="card-text">Mobile Number: {{$user->mobile}}</p>
                    <hr>
                    <div class="row">
                        <!-- Left Column -->
                        <div class="col-md-6">
                            <form action="{{route('profile.store')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="gender">Gender</label>
                                    <select id="gender" name="gender" class="form-control">
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                                 <div class="form-group">
                                <label for="age">Age</label>
                                <input type="number" id="age" name="age">
                            </div>

                               <div class="form-group">
                                <label for="dob">Date Of Birth</label>
                                <input type="number" id="dob" name="dob">
                            </div>
                            
                                
                                
                                <div class="form-group">
                                    <label for="blood_group">Blood Group</label>
                                    <select id="blood_group" name="blood_group">
                                        @foreach($blood_groups as $blood_group)
                                            <option value="{{ $blood_group->id }}">{{ $blood_group->group }}</option>
                                        @endforeach
                                    </select>
                                </div>
                              
                                <div class="form-group">
                                    <label for="division">Division</label>
                                    <select id="division" name="division">
                                        @foreach($divisons as $divison)
                                            <option value="{{ $divison->id }}">{{ $divison->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="district">District</label>
                                <select id="district" name="district">
                                    @foreach($districts as $district)
                                        <option value="{{ $district->id }}">{{ $district->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="upazilla">Upazilla</label>
                                <select id="upazilla" name="upazilla">
                                    @foreach($upazillas as $upazilla)
                                        <option value="{{ $upazilla->id }}">{{ $upazilla->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="post_office">Post Office</label>
                                <select id="post_office" name="post_office">
                                    @foreach($post_offices as $post_office)
                                        <option value="{{ $post_office->id }}">{{ $post_office->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="village">Village</label>
                                <input type="text" id="village" name="village">
                            </div>
                             <div class="form-group">
                                <label for="last_donate">Last Donate</label>
                                <input type="date" id="last_donate" name="last_donate">
                            </div>
                             <div class="form-group">
                                <label for="donation_count">Total Donation</label>
                                <input type="text" id="donation_count" name="donation_count">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Profile</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

<!-- Blog Section -->
<div id="blog" class="blog-container container-fluid">
    <!-- Blog content -->
</div>

@endsection
