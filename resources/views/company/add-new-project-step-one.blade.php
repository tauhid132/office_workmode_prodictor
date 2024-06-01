@extends('master')
@section('main-body')
@include('admin.includes.navbar')
<section class="pt-0">
    <div class="container vstack gap-4">
        <div class="row">
            <div class="col-12 mb-2">
                <div class="d-sm-flex justify-content-between align-items-center">
                    <h1 class="h4 mb-3 mb-sm-0"><i class="fa fa-add me-1"></i>Create New Project</h1>
                </div>
            </div>
        </div>
        <div class="card shadow mt-1">
            <div class="card-body">
                <form method="post" action="{{ route('addNewProjectStepOne') }}">
                    @csrf
                    <div class="row g-3">
                        <div class="col-lg-6">
                            <div>
                                <label class="form-label h6 fw-bold text-black">Project Type</label>
                                <select class="form-select" name="project_type">
                                    @foreach ($project_types as $project_type)
                                    <option value="{{ $project_type->id }}">{{ $project_type->project_type_name }}</option>
                                    @endforeach
                                    
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div>
                                <label class="form-label h6 fw-bold text-black">Project Name</label>
                                <input type="text" name="project_name" class="form-control" placeholder="Project Name" required />
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div>
                                <label class="form-label h6 fw-bold text-black">Project Description</label>
                                <textarea class="form-control" placeholder="Enter Project Description" rows="3" name="project_description" id="ticket_description"></textarea>
                            </div>
                        </div>
                        {{-- <div class="col-lg-12">
                            <div>
                                <label class="form-label h6 fw-bold text-black">Required Skills</label>
                                <select class="form-select select-search w-100" name="skills[]" multiple="multiple">
                                    @foreach ($skills as $skill)
                                    <option value="{{ $skill->id }}">{{ $skill->skill_name }}</option>
                                    @endforeach
                                </select>
                                
                            </div>
                        </div> --}}
                        <div class="col-lg-6">
                            <div>
                                <label class="form-label h6 fw-bold text-black">Estimated Time (In Weeks)</label>
                                <input type="text" name="project_duration" class="form-control" placeholder="Project Estimated Time" required />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div>
                                <label class="form-label h6 fw-bold text-black">Estimated Budget (In BDT)</label>
                                <input type="text" name="project_budget" class="form-control" placeholder="Project Estimated Budget" required />
                            </div>
                        </div>
                        
                        <div class="d-sm-flex justify-content-end">
                            <button type="submit" class="btn btn-primary btn-sm mb-0 mt-3"><i class="fa fa-add me-1"></i>Analyze Project</button>
                        </div>
                        
                        
                    </div>
                </form>
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