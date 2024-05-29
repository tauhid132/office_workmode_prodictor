@extends('admin.master')
@section('title',"Projects")
@section('main-body')
<div class="page-content-wrapper p-xxl-4">
    <div class="row">
        <div class="col-12 mb-4 mb-sm-5">
            <div class="d-sm-flex justify-content-between align-items-center">
                <h1 class="h4 mb-3 mb-sm-0"><i class="fa fa-address-book me-2"></i>Projects</h1>	
                <div class="d-flex gap-2">
                    <a href="{{ route('addNewProjectStepOne') }}" class="btn btn-success btn-sm mb-0"><i class="fa fa-plus me-2"></i>Add New Project</a>	
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
                        <th>Project Type</th>
                        <th>Project Time</th>
                        <th>Budget</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </table>
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
        "ajax" : "{{ route('getProjects') }}",
        "columns" : [
        {"data" : 'DT_RowIndex', "name" : 'No' },
        {"data": "project_type"},
        {"data": "project_duration"},
        {"data": "project_budget"},
        {"data": "project_description"},
        {"data": "action"},
        ]
    });
    
    
    
</script>
@endsection