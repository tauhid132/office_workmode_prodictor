@extends('master')
@section('main-body')
@include('admin.includes.navbar')
<section class="pt-0">
    <div class="container vstack gap-4">
        <div class="row">
            <div class="col-12 mb-2">
                <div class="d-sm-flex justify-content-between align-items-center">
                    <h1 class="h4 mb-3 mb-sm-0"><i class="fa fa-bar-chart me-1"></i>Project Analysis</h1>
                </div>
            </div>
        </div>
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
        <div class="card shadow mt-1">
            <div class="card-body">
                <form method="post" action="{{ route('addNewProjectStepTwo' , $project->id) }}">
                    @csrf
                    <div class="row g-3">
                        <input type="hidden" name="id" value="{{ $project->id }}">
                        <div class="col-lg-12">
                            <div>
                                <label for="name" class="form-label">Project Type</label>
                                <select class="form-select" name="project_type" disabled>
                                    @foreach ($project_types as $project_type)
                                    <option value="{{ $project_type->id }}">{{ $project_type->project_type_name }}</option>
                                    @endforeach
                                    
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div>
                                <label for="last_name" class="form-label">Project Description</label>
                                <textarea class="form-control"rows="3" name="project_description" id="ticket_description">{{ $project->project_description }}</textarea>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div>
                                <label for="last_name" class="form-label">Estimated Time (In Weeks)</label>
                                <input type="text" name="project_duration" class="form-control" value="{{ $project->project_duration }}" disabled />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div>
                                <label for="last_name" class="form-label">Estimated Budget (In BDT)</label>
                                <input type="text" name="project_budget" class="form-control" value="{{ $project->project_budget }}" disabled />
                            </div>
                        </div>
                        @php
                        $required_skills = [];
                        foreach ($project->skills as $skill) {
                            array_push($required_skills, $skill->id);
                        }
                        @endphp
                        <div class="col-lg-6 mt-4">
                            <div>
                                <label class="form-label h6 fw-bold text-black">Required Skills</label>
                                <ul class="list-group list-group-borderless mb-0" style="display: inline">
                                    @foreach ($skills as $skill)
                                    <li class="list-group-item h6 fw-light d-flex mb-0">
                                        <input type="checkbox" {{ (in_array($skill->id, $required_skills)) ? 'checked' : '' }} name="categories[]" value="{{ $skill->skill_name }}" class="form-check-input me-2">{{ $skill->skill_name }}
                                    </li> 
                                    @endforeach
                                </ul>
                                
                            </div>
                        </div>
                        
                        <div class="col-lg-6 mt-4">
                            <div>
                                <label class="form-label h6 fw-bold text-black">Project Level</label>
                                <ul class="list-group list-group-borderless mb-0" style="display: inline">
                                    <li class="list-group-item h6 fw-light d-flex mb-0">
                                        <input type="radio" {{ $project->experience_level == 'Beginner' ? 'checked' : '' }} name="experience_level" value="Beginner" class="form-check-input me-2">Beginner
                                    </li> 
                                    <li class="list-group-item h6 fw-light d-flex mb-0">
                                        <input type="radio" {{ $project->experience_level == 'Intermediate' ? 'checked' : '' }} name="experience_level" value="Intermediate" class="form-check-input me-2">Intermediate
                                    </li> 
                                    <li class="list-group-item h6 fw-light d-flex mb-0">
                                        <input type="radio" {{ $project->experience_level == 'expert' ? 'checked' : '' }} name="experience_level" value="expert" class="form-check-input me-2">Expert
                                    </li> 
                                </ul>
                                
                            </div>
                        </div>
                        
                        
                        <div class="d-sm-flex justify-content-end">
                            <button type="submit" class="btn btn-primary btn-sm mb-0 mt-3"><i class="fa fa-refresh me-1"></i>Re-Analyze Project</button>
                        </div>
                        
                        
                    </div>
                </form>
            </div>
        </div>
        
        
        <div class="col-md-12">
            <div class="row">
                <div class="col-12">
                    <div class="card shadow border">
                        <!-- Card header START -->
                        <div class="card-header border-bottom">
                            <h5 class="card-header-title">Suggested Employees</h5>
                        </div>
                        <!-- Card header END -->
                        
                        <!-- Card body START -->
                        <div class="card-body">
                            
                            <div class="table-responsive border-0">
                                <table class="table align-middle p-4 mb-0 table-hover table-shrink">
                                    <!-- Table head -->
                                    <thead class="table-light">
                                        <tr>
                                            <th scope="col" class="border-0 rounded-start">#</th>
                                            <th scope="col" class="border-0">Employee</th>
                                            <th scope="col" class="border-0">Position</th>
                                            <th scope="col" class="border-0">Duties/Skills</th>
                                            <th scope="col" class="border-0">Working Mode</th>
                                            <th scope="col" class="border-0">Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <!-- Table body START -->
                                    <tbody class="border-top-0">
                                        @foreach ($project->employees as $employee)
                                        @php
                                            $emp = App\Models\Employee::where('id',$employee->employee_id)->first();
                                        @endphp
                                        <tr>
                                            <td> <h6 class="mb-0">{{ $loop->iteration }}</h6> </td>
                                            <td> 
                                                <div class="col">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar avatar-xs flex-shrink-0">
                                                            <img class="avatar-img rounded-circle" src="{{ asset('images/avatar.png') }}" alt="avatar">
                                                        </div>
                                                        <div class="ms-2">
                                                            <h6 class="mb-0 fw-light">{{ $emp->name }}</h6>
                                                        </div>
                                                    </div>
                                                </div> 
                                            </td>
                                            <td>{{ $emp->position }}</td>
                                            <td> <h6 class="mb-0 fw-light">{{ $employee->skills }}</h6> </td>
                                            <td> 
                                                @if ($employee->working_mode == 'Office')
                                                <div class="badge text-bg-success">Office</div>
                                                @elseif ($employee->working_mode == 'Hybrid')
                                                <div class="badge text-bg-warning">Hybrid</div>
                                                @elseif ($employee->working_mode == 'Remote')
                                                <div class="badge text-bg-info">Remote</div>
                                                @endif
                                             </td>
                                            
                                            <td> <a href="{{ route('assignEmployee') }}" class="btn btn-sm btn-primary mb-0">Assign</a> </td>
                                        </tr>
                                        
                                        @endforeach
                                        
                                        
                                    </tbody>
                                    <!-- Table body END -->
                                </table>
                            </div>
                            <!-- Hotel room list END -->
                        </div>
                        
                    </div>
                </div>
            </div> 
        </div>
    </div>
    
</section>




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