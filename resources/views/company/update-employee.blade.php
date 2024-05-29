@extends('admin.master')
@section('title', 'Employees')
@section('main-body')
<div class="page-content-wrapper p-xxl-4">
    <div class="row">
        <div class="col-12 mb-4 mb-sm-5">
            <div class="d-sm-flex justify-content-between align-items-center">
                <h1 class="h4 mb-3 mb-sm-0"><i class="fa fa-refresh me-1"></i>Update Employee</h1>
            </div>
        </div>
    </div>
    <div class="card shadow mt-1">
        <div class="card-body">
            <form method="post" action="{{ route('updateEmployee', $employee->id) }}">
                @csrf
                <div class="row g-3">
                    <div class="col-lg-6">
                        <div>
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" value="{{ $employee->name }}" required />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div>
                            <label for="last_name" class="form-label">Position</label>
                            <input type="text" name="position" class="form-control" value="{{ $employee->position }}" required />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div>
                            <label for="last_name" class="form-label">Current Working Mode</label>
                            <select class="form-select" name="current_working_mode">
                                <option {{ $employee->current_working_mode == 'Online' ? 'selected' : '' }} value="Online">Online</option>
                                <option {{ $employee->current_working_mode == 'Offline' ? 'selected' : '' }} value="Offline">Offline</option>
                                <option {{ $employee->current_working_mode == 'Hybrid' ? 'selected' : '' }} value="Hybrid">Hybrid</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div>
                            <label for="last_name" class="form-label">Experience Level</label>
                            <select class="form-select" name="experience_level">
                                <option {{ $employee->experience_level == 'Beginner' ? 'selected' : '' }} value="Beginner">Beginner</option>
                                <option {{ $employee->experience_level == 'Intermediate' ? 'selected' : '' }} value="Intermediate">Intermediate</option>
                                <option {{ $employee->experience_level == 'expert' ? 'selected' : '' }} value="expert">Expert</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div>
                            <label for="last_name" class="form-label">Working Days Per Week</label>
                            <input type="text" name="working_days_per_week" class="form-control" value="{{ $employee->working_days_per_week }}" required />
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div>
                            <label for="last_name" class="form-label">Working Hours Per Day</label>
                            <input type="text" name="working_hours_per_day" class="form-control" value="{{ $employee->working_hours_per_day }}" required />
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div>
                            <label for="last_name" class="form-label">Salary</label>
                            <input type="text" name="salary" class="form-control" value="{{ $employee->salary }}" required />
                        </div>
                    </div>
                    @php
                    $selected_skills = [];
                    foreach ($employee->skills as $skill) {
                        array_push($selected_skills, $skill->id);
                    }
                    @endphp
                    <div class="col-lg-12">
                        <div>
                            <label class="form-label">Skills</label>
                            <select class="form-select select-search w-100" name="skills[]" multiple="multiple">
                                @foreach ($skills as $skill)
                                <option {{ (in_array($skill->id, $selected_skills)) ? 'selected' : '' }} value="{{ $skill->id }}">{{ $skill->skill_name }}</option>
                                @endforeach
                            </select>
                            
                        </div>
                    </div>
                    <div class="d-sm-flex justify-content-end">
                        <button type="submit" class="btn btn-primary mb-0"><i class="fa fa-refresh me-1"></i>Update</button>
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
    
</script>
@endsection