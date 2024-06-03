@extends('master')
@section('main-body')
@include('admin.includes.navbar')
<section class="pt-0">
    <div class="container vstack gap-4">
        <div class="row">
            <div class="col-12 mb-4">
                <div class="d-sm-flex justify-content-between align-items-center">
                    <h1 class="h4 mb-3 mb-sm-0"><i class="fa fa-star me-1"></i>Project Feedback</h1>			
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
        <form action="{{ route('viewProjectFeedback', $project->id) }}" method="post">
            @csrf
            <div class="col-lg-12">
                <!-- Email setting -->
                <div class="card shadow mb-4">
                    <!-- Card header -->
                    <div class="card-header border-bottom">
                        <h5 class="card-title mb-0">Overall Project</h5>
                    </div>
                    <!-- Card body -->
                    <div class="card-body vstack gap-4">
                        <!-- Item -->
                        <div class="d-md-flex justify-content-between align-items-center">
                            <!-- Content -->
                            <div>
                                <h6 class="mb-0">Was the project successfull?</h6>
                            </div>
                            <!-- Switch -->
                            <div class="form-check form-switch form-check-md mb-0">
                                <input class="form-check-input" type="checkbox"  name="is_successfull" {{ $project->feedback->is_successfull == 1 ? 'checked' : '' }}>
                            </div>
                        </div>
                        
                        <!-- Item -->
                        <div class="d-md-flex justify-content-between align-items-center">
                            <!-- Content -->
                            <div>
                                <h6 class="mb-0">Is the predicted working-mode correct?</h6>
                            </div>
                            <!-- Switch -->
                            <div class="form-check form-switch form-check-md mb-0">
                                <input class="form-check-input" type="checkbox" name="is_prediction_correct" {{ $project->feedback->is_prediction_correct == 1 ? 'checked' : '' }}>
                            </div>
                        </div>
                        
                        <!-- Item -->
                        <div class="d-md-flex justify-content-between align-items-center">
                            <!-- Content -->
                            <div>
                                <h6 class="mb-0">Does it saved money and resouces?</h6>
                            </div>
                            <!-- Switch -->
                            <div class="form-check form-switch form-check-md mb-0">
                                <input class="form-check-input" type="checkbox" name="save_resource" {{ $project->feedback->save_resource == 1 ? 'checked' : '' }}>
                            </div>
                        </div>
                        <div class="d-md-flex justify-content-between align-items-center">
                            <!-- Content -->
                            <div>
                                <h6 class="mb-0">Have the efficiency rate increased?</h6>
                            </div>
                            <!-- Switch -->
                            <div class="form-check form-switch form-check-md mb-0">
                                <input class="form-check-input" type="checkbox" name="increased_efficiency" {{ $project->feedback->increased_efficiency == 1 ? 'checked' : '' }}>
                            </div>
                        </div>
                        
                        
                        <div class="collapse show" id="collapseComment">
                            <div class="d-flex mt-3">
                                <textarea class="form-control mb-0" placeholder="Add comment about the project..." rows="3" name="comment" spellcheck="false">{{ $project->feedback->comment }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="card shadow border">
                                <!-- Card header START -->
                                <div class="card-header border-bottom">
                                    <h5 class="card-header-title">Project's Employees</h5>
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
                                                </tr>
                                            </thead>
                                           
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
                <div class="d-sm-flex justify-content-end mt-4">
                    <button type="submit" class="btn btn-success mb-0 mt-3"><i class="fa fa-save me-1"></i>Save Project Feedback</button>
                </div>
            </div>
        </form>
        
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