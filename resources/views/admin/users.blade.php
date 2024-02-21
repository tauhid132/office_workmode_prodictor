@extends('admin.master')
@section('title', 'Admin List')
@section('main-body')
<div class="page-content-wrapper p-xxl-4">
    <div class="row">
        <div class="col-12 mb-4 mb-sm-5">
            <div class="d-sm-flex justify-content-between align-items-center">
                <h1 class="h3 mb-3 mb-sm-0">Admin List</h1>
                <div class="d-grid">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#addUserModal" class="btn btn-primary mb-0"><i class="fa fa-plus me-2"></i>Add New Admin</a>	
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
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                
            </table>
        </div>
    </div>
</div>


<div class="modal fade zoomIn" id="addUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0">
            <div class="modal-header p-3 bg-soft-info">
                <h5 class="modal-title" id="exampleModalLabel">Add New Admin</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
            </div>
            <form id="add_admin_form">
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-lg-4">
                            <div>
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter Name" required />
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div>
                                <label for="last_name" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Enter Email" required />
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div>
                                <label for="password" class="form-label">Password</label>
                                <input type="password" id="password" name="password" class="form-control" placeholder="Enter Password" required />
                            </div>
                        </div>
                       
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="hstack gap-2 justify-content-end">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success" id="edit-btn">Create</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="modal fade zoomIn" id="changePasswordModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0">
            <div class="modal-header p-3 bg-soft-info">
                <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
            </div>
            <form id="change_password_form">
                <div class="modal-body">
                    <div class="row g-3">
                        <input type="hidden" name="id" id="id">
                        <div class="col-lg-6">
                            <div>
                                <label for="name" class="form-label">New Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Enter New Password" required />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div>
                                <label for="last_name" class="form-label">Confirm Password</label>
                                <input type="password" name="password_confirmation" class="form-control" placeholder="Enter Confirm Password" required />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="hstack gap-2 justify-content-end">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success" id="edit-btn">Create</button>
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
        "ajax" : "{{ route('getUsers') }}",
        "columns" : [
        {"data" : 'DT_RowIndex', "name" : 'DT_RowIndex' , "orderable": false, "searchable": false},
        {"data": "name"},
        {"data": "email"},
        {"data" : 'status', "name" : 'status' , "orderable": false, "searchable": false},
        {"data" : 'action', "name" : 'action' , "orderable": false, "searchable": false},
        ]
        
    });
    
    $(document).on('click', '.delete', function(){
        var id = $(this).attr("id");
        Swal.fire({
            title: 'Are you sure?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url:"{{ route('deleteUser') }}",
                    method:"POST",
                    data:{id:id},
                    success:function(data){
                        toastr["success"]("User Updated Successfully")
                        dataTable.ajax.reload();
                    }
                })
            }
        })
    });
    
    $(document).on('click', '.disable_enable', function(){
        var id = $(this).attr("id");
        Swal.fire({
            title: 'Are you sure?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url:"{{ route('disableEnableUser') }}",
                    method:"POST",
                    data:{id:id},
                    success:function(data){
                        toastr["success"]("User Updated Successfully")
                        dataTable.ajax.reload();
                    }
                })
            }
        })
    });
    $(document).on('click', '.change_password', function(){
        var id = $(this).attr("id");
        $('#id').val(id);
        $('#changePasswordModal').modal('show'); 
    });
    
    $('#add_admin_form').on("submit", function(event){  
        event.preventDefault();  
        $.ajax({  
            url:"{{ route('addNewAdmin') }}",  
            method:"POST",  
            data:$('#add_admin_form').serialize(),  
            beforeSend:function(){  
                $('#edit-btn').html("Updating");  
            },  
            success:function(data){  
                $('#add_admin_form')[0].reset();  
                $('#edit-btn').html("Create");
                $('#addUserModal').modal('hide');  
                dataTable.ajax.reload();
                toastr["success"]("Admin Added Successfully")
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
    $('#change_password_form').on("submit", function(event){  
        event.preventDefault();  
        $.ajax({  
            url:"{{ route('changePassword') }}",  
            method:"POST",  
            data:$('#change_password_form').serialize(),  
            beforeSend:function(){  
                $('#edit-btn').html("Updating");  
            },  
            success:function(data){  
                $('#change_password_form')[0].reset();  
                $('#edit-btn').html("Create");
                $('#changePasswordModal').modal('hide');  
                dataTable.ajax.reload();
                toastr["success"]("Password Changed Successfully")
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
</script>
@endsection