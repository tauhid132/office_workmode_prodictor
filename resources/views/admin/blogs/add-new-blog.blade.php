@extends('admin.master')
@section('title',"All Blogs")
@section('main-body')
<div class="page-content-wrapper p-xxl-4">
    <div class="row">
        <div class="col-12 mb-4 mb-sm-5">
            <div class="d-sm-flex justify-content-between align-items-center">
                <h1 class="h3 mb-3 mb-sm-0">Publish New Blog</h1>
            </div>
        </div>
    </div>
    <form action="{{ route('createNewBlog') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12 col-sm-12">
                                <div class="mb-3">
                                    <label class="form-label" for="product-price-input">Title</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Enter Blog Title" name="title" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12">
                                <div class="mb-3">
                                    <label class="form-label" for="product-price-input">Blog Cover Image</label>
                                    <div class="input-group mb-3">
                                        <input type="file" class="form-control" name="cover_image" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12">
                                <div class="mb-3">
                                    <label class="form-label" for="product-price-input">Blog Body</label>
                                    <textarea class="ckeditor form-control" name="body" required></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-end m-3">
                    <button type="submit" class="btn btn-success w-sm">Submit</button>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection
@section('script')
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.ckeditor').ckeditor();
    });
</script>
@endsection