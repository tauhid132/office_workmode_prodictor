@extends('admin.master')
@section('title','Change Password')
@section('main-body')
<div class="page-content-wrapper p-xxl-4">
    <div class="card border">
        <div class="card-header border-bottom">
            <h4 class="card-header-title">Change Password</h4>
        </div>
        <div class="card-body">
            @foreach ($errors->all() as $error)
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong> {{ $error }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endforeach
            @if(session()->has('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong> {{ $error }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>  {{ session()->get('success') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <form class="row g-3" method="post" action="{{ route('viewChangePassword') }}">
                @csrf
                <div class="col-md-4">
                    <label class="form-label">Old Password<span class="text-danger">*</span></label>
                    <input type="password" class="form-control" name="old_password" placeholder="Enter Old Password">
                </div>
                <div class="col-md-4">
                    <label class="form-label">New Password<span class="text-danger">*</span></label>
                    <input type="password" class="form-control" name="password" placeholder="Enter New Password">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Confirm Password<span class="text-danger">*</span></label>
                    <input type="password" class="form-control" name="password_confirmation" placeholder="Enter Confirm Password">
                </div>
                <div class="col-12 text-end">
                    <button type="submit" class="btn btn-primary mb-0">Update Password</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection