@extends('admin.master')
@section('title','Profile Settings')
@section('main-body')
<div class="page-content-wrapper p-xxl-4">
    <div class="card border">
        <div class="card-header border-bottom">
            <h4 class="card-header-title">Profile Settings</h4>
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
            <form class="row g-3" method="post" action="{{ route('viewMyProfile') }}">
                @csrf
                <div class="col-md-6">
                    <label class="form-label">Full Name<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="name" value="{{ Auth::user()->name }}">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Email<span class="text-danger">*</span></label>
                    <input type="email" class="form-control" value="{{ Auth::user()->email }}" disabled>
                </div>
                <div class="col-12 text-end">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#changeImageModal" class="btn btn-primary btn-sm mb-0"><i class="fa fa-image"></i> Change Profile Picture</a>
                    <a href="{{ route('viewChangePassword') }}" class="btn btn-warning btn-sm mb-0"><i class="fa fa-lock"></i> Change Password</a>
                    <button type="submit" class="btn btn-success btn-sm mb-0"><i class="fa fa-save"></i> Save</button>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="modal fade zoomIn" id="changeImageModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0">
            <div class="modal-header p-3 bg-soft-info">
                <h5 class="modal-title" id="exampleModalLabel">Change Profile <Picture></Picture></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
            </div>
            <form action="{{ route('changeProfileImage') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-lg-12">
                            <div>
                                <input type="file" name="profile_image" class="form-control" required />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="hstack gap-2 justify-content-end">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success" id="edit-btn">Upload</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection