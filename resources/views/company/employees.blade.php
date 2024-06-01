@extends('master')
@section('main-body')
@include('admin.includes.navbar')


<section class="pt-0">
	<div class="container vstack gap-4">
    <div class="row">
        <div class="col-12 mb-4">
            <div class="d-sm-flex justify-content-between align-items-center">
                <h1 class="h4 mb-3 mb-sm-0"><i class="fa fa-users me-1"></i>Employees</h1>
                <div class="d-flex gap-2">
                    <a href="{{ route('addNewEmployee') }}" class="btn btn-success btn-sm mb-0"><i class="fa fa-plus me-2"></i>Add New Employee</a>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#importEmployeeModal" class="btn btn-primary btn-sm mb-0"><i class="fa fa-file-excel me-2"></i>Import Employees</a>	
                </div>					
            </div>
        </div>
    </div>
    <div class="card shadow mt-1">
        <div class="card-body table-responsive ">
            @foreach ($errors->all() as $error)
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong> {{ $error }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endforeach
            @if(session()->has('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong> {{ session()->get('error') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>  {{ session()->get('success') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <table id="users-table" class="table align-middle p-2 mb-0 table-hover">
                <thead class="table-light">
                    <tr>
                        <th>No</th>
                        <th>Employee Name</th>
                        <th>Role</th>
                        <th>Skills</th>
                        <th>Salary</th>
                        <th>Current W.Mode</th>
                        <th>Action</th>
                    </tr>
                </thead>
                
            </table>
        </div>
    </div>
</div>
</section>


<div class="modal fade zoomIn" id="addUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0">
            <div class="modal-header p-3 bg-soft-info">
                <h5 class="modal-title" id="exampleModalLabel">Add New Employee</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
            </div>
            <form id="add_admin_form">
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-lg-6">
                            <div>
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter Name" required />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div>
                                <label for="last_name" class="form-label">Position</label>
                                <input type="text" name="position" class="form-control" placeholder="Enter Position" required />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div>
                                <label for="last_name" class="form-label">Current Working Mode</label>
                                <select class="form-select" name="current_working_mode">
                                    <option value="Online">Online</option>
                                    <option value="Offline">Offline</option>
                                    <option value="Hybrid">Hybrid</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div>
                                <label for="last_name" class="form-label">Experience Level</label>
                                <select class="form-select" name="experience_level">
                                    <option value="Beginner">Beginner</option>
                                    <option value="Intermediate">Intermediate</option>
                                    <option value="expert">Expert</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div>
                                <label for="last_name" class="form-label">Working Days Per Week</label>
                                <input type="text" name="working_days_per_week" class="form-control" placeholder="Enter Working Days Per Week" required />
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div>
                                <label for="last_name" class="form-label">Working Hours Per Day</label>
                                <input type="text" name="working_hours_per_day" class="form-control" placeholder="Enter Working hours Per day" required />
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div>
                                <label for="last_name" class="form-label">Salary</label>
                                <input type="text" name="salary" class="form-control" placeholder="Enter Salary" required />
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div>
                                <label class="form-label">Services</label>
                                <select class="form-select select2Input w-100" name="zones[]" multiple="multiple">
                                    <option value="">Seleccionar</option>
                                    <option value="">Seleccionar</option>
                                    {{-- @foreach ($zones as $zone)
                                        <option value="{{ $zone->id }}">{{ $zone->zone_name }}</option>
                                        @endforeach --}}
                                    </select>
                                    
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
    
    
    <div class="modal fade zoomIn" id="importEmployeeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content border-0">
                <div class="modal-header p-3 bg-soft-info">
                    <h5 class="modal-title" id="exampleModalLabel">Import Employee</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                </div>
                <form id="change_password_form">
                    <div class="modal-body">
                        <center><i class="fa fa-info-circle text-success me-2 mb-3"></i>Click here to <a href="#">Download</a> Sample CSV File</center>
                        <div class="row g-3">
                            <input type="hidden" name="id" id="id">
                            <div class="col-lg-12">
                                <div>
                                    <input type="file" name="employee_list" class="form-control" placeholder="Enter New Password" required />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="hstack gap-2 justify-content-end">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success" id="edit-btn">Import</button>
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
            "ajax" : "{{ route('getEmployees') }}",
            "columns" : [
            {"data" : 'DT_RowIndex', "name" : 'DT_RowIndex' , "orderable": false, "searchable": false},
            {"data": "name"},
            {"data": "position"},
            {"data": "skills"},
            {"data": "salary"},
            {"data": "current_working_mode"},
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