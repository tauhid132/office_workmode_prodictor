@extends('admin.master')
@section('title',"Bookings")
@section('main-body')
<div class="page-content-wrapper p-xxl-4">
    <div class="row">
        <div class="col-12 mb-4 mb-sm-5">
            <div class="d-sm-flex justify-content-between align-items-center">
                <h1 class="h4 mb-3 mb-sm-0"><i class="fa fa-ticket me-2"></i>Bookings</h1>		
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
                        <th>Time</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th>Service Type</th>
                        <th>Service Details</th>
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
        "ajax" : "{{ route('get.bookings') }}",
        "columns" : [
        {"data" : 'DT_RowIndex', "name" : 'No' },
        {"data": "name"},
        {"data": "created_at"},
        {"data": "mobile_no"},
        {"data": "email"},
        {"data": "service_name"},
        {"data": "details"},
        ]
    });
    
    
    
</script>
@endsection