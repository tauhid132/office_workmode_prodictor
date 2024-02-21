@extends('admin.master')
@section('title',"Customer Reviews")
@section('main-body')
<div class="page-content-wrapper p-xxl-4">
    <div class="row">
        <div class="col-12 mb-4 mb-sm-5">
            <div class="d-sm-flex justify-content-between align-items-center">
                <h1 class="h4 mb-3 mb-sm-0"><i class="fa fa-star"></i> Customer Reviews</h1>
                <div class="d-grid">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#addNewGroupModal" class="btn btn-success btn-sm mb-0"><i class="fa fa-plus me-2"></i>Add New Review</a>
                </div>					
            </div>
        </div>
    </div>
    <div class="card shadow mt-1">
        <div class="card-body table-responsive ">
            <table id="users-table" class="table align-middle p-2 mb-0 table-hover">
                <thead class="table-light">
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Rating</th>
                        <th>Location</th>
                        <th>Action</th>
                        <th>Review</th>
                        
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>


<div class="modal fade zoomIn" id="addNewGroupModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0">
            <div class="modal-header p-3 bg-soft-info">
                <h5 class="modal-title" id="modalHeader">Add New Review</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
            </div>
            <form id="add_new_review_form">
                <div class="modal-body">
                    <div class="row g-3">
                        <input type="hidden" name="id" id="id2">
                        <div class="col-lg-4">
                            <div>
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" id="name" class="form-control" required />
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div>
                                <label for="name" class="form-label">Rating</label>
                                <select class="form-select" name="rating" id="rating">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div>
                                <label for="name" class="form-label">Location</label>
                                <input type="text" name="location" id="location" class="form-control" required />
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div>
                                <label for="name" class="form-label">Review</label>
                                <textarea name="review" id="review" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="hstack gap-2 justify-content-end">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success" id="submit-btn">Create</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
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
<script>
    var dataTable = $('#users-table').DataTable({
        "processing" : true,
        "serverSide": true,
        "pageLength": 10,
        "ajax" : "{{ route('get.customer.reviews') }}",
        "columns" : [
        {"data" : 'DT_RowIndex', "name" : 'No' },
        {"data": "name"},
        {"data": "rating"},
        {"data": "location"},
        {"data" : 'action', "name" : 'action' , "orderable": false, "searchable": false},
        {"data": "review"},
        
        ]
    });
    

    $('#add_new_review_form').on("submit", function(event){  
        event.preventDefault();  
        $.ajax({  
            url:"{{ route('add.review') }}",  
            method:"POST",  
            data:$('#add_new_review_form').serialize(),  
            beforeSend:function(){  
                $('#submit-btn').html("Updating");  
            },  
            success:function(data){  
                $('#add_new_review_form')[0].reset();  
                $('#submit-btn').html("Create");
                $('#addNewGroupModal').modal('hide');  
                dataTable.ajax.reload();
                toastr["success"]("Updated Successfully")
            },
            error: function(xhr, status, error) 
            {
                $.each(xhr.responseJSON.errors, function (key, item) 
                {
                    toastr["error"](item)
                });
            } 
        });     
    });

    $(document).on('click', '.edit_review', function(){
        var id = $(this).attr("id");  
        $.ajax({  
            url:"{{ route('fetch.review') }}",  
            method:"post",  
            data:{id:id},  
            success:function(data){ 
                $('#id2').val(data.id);
                $('#name').val(data.name);
                $('#rating').val(data.rating);
                $('#location').val(data.location);
                $('#review').val(data.review);
                
                $('#modalHeader').html("Edit Review");
                $('#submit-btn').html("Update"); 
                $('#addNewGroupModal').modal("show");  
            }  
        });  
    }); 
    
    
</script>
@endsection