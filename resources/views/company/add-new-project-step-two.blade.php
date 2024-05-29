@extends('admin.master')
@section('title', 'Add New Project')
@section('main-body')
<div class="page-content-wrapper p-xxl-4">
    <div class="row">
        <div class="col-12 mb-3">
            <div class="d-sm-flex justify-content-between align-items-center">
                <h1 class="h4 mb-3 mb-sm-0"><i class="fa fa-bar-chart me-1"></i>Project Report: {{ $project->project_name }}</h1>
            </div>
        </div>
    </div>
    <div class="card shadow mt-1">
        <div class="card-body">
            <form method="post" action="{{ route('addNewProjectStepTwo') }}">
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
                    <div class="col-lg-12">
                        <div>
                            <label class="form-label">Required Skills</label>
                            <select class="form-select select-search w-100" name="skills[]" multiple="multiple">
                                @foreach ($skills as $skill)
                                <option {{ (in_array($skill->id, $required_skills)) ? 'selected' : '' }} value="{{ $skill->id }}">{{ $skill->skill_name }}</option>
                                @endforeach
                            </select>
                            
                        </div>
                    </div>
                    <div class="col-lg-6 mt-4">
                        <div>
                            <label class="form-label">Suggested Skills</label>
                            <ul class="list-group list-group-borderless mb-0" style="display: inline">
                                @foreach ($skills as $skill)
                                <li class="list-group-item h6 fw-light d-flex mb-0">
                                    <input type="checkbox" name="categories[]" value="{{ $skill->id }}" class="form-check-input me-2">{{ $skill->skill_name }}
                                </li> 
                                @endforeach
                            </ul>
                            
                        </div>
                    </div>
                    <div class="col-lg-6 mt-4">
                        <div>
                            <label class="form-label">Select Features</label>
                            <ul class="list-group list-group-borderless mb-0" style="display: inline">
                                @foreach ($features as $feature)
                                <li class="list-group-item h6 fw-light d-flex mb-0">
                                    <input type="checkbox" name="categories[]" value="{{ $feature->id }}" class="form-check-input me-2">{{ $feature->feature_name }}
                                </li> 
                                @endforeach
                            </ul>
                            
                        </div>
                    </div>
                    
                    
                    <div class="d-sm-flex justify-content-end">
                        <button type="submit" class="btn btn-primary mb-0 mt-3"><i class="fa fa-add me-1"></i>Analyze Project</button>
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