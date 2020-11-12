@extends('layouts.app')

@section('content')

    <div class="container">
        <h1 class="text-center mt-5">Create Phone Book Entry</h1>
        <form action="/create" method="POST">
            <div class="form-group">
                <label for="First_Name">First Name</label>
                <input type="text" name="First_Name" class="form-control" required id="First_Name"
                       placeholder="Enter First Name">
            </div>
            <div class="form-group">
                <label for="Last_Name">Last Name</label>
                <input type="text" name="Last_Name" class="form-control" id="Last_Name" placeholder="Enter Last Name">
            </div>
            <div class="form-group">
                <label for="Address">Address</label>
                <input type="text" name="Address" class="form-control" id="Address" placeholder="Enter Address">
            </div>
            <div class="form-group">
                <label for="Phone">Phone</label>
                <input type="text" name="Phone" class="form-control" id="Phone" placeholder="Enter Phone Number">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection