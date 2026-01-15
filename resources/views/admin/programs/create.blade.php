@extends('layouts.admin')

@section('title', 'Add Program')
@section('page-title', 'Add New Program')

@section('content')
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">Program Information</div>
            <div class="card-body">
                <form action="{{ route('admin.programs.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Category <span class="text-danger">*</span></label>
                            <input type="text" name="category" class="form-control @error('category') is-invalid @enderror" 
                                   value="{{ old('category') }}" placeholder="e.g., Design, Programming" required>
                            @error('category')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Program Name <span class="text-danger">*</span></label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" 
                                   value="{{ old('name') }}" placeholder="e.g., Web Development Bootcamp" required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Mode <span class="text-danger">*</span></label>
                            <select name="mode" class="form-select @error('mode') is-invalid @enderror" required>
                                <option value="Online" {{ old('mode') == 'Online' ? 'selected' : '' }}>Online</option>
                                <option value="Onsite" {{ old('mode') == 'Onsite' ? 'selected' : '' }}>Onsite</option>
                                <option value="Hybrid" {{ old('mode') == 'Hybrid' ? 'selected' : '' }}>Hybrid</option>
                            </select>
                            @error('mode')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-4 mb-3">
                            <label class="form-label">Duration <span class="text-danger">*</span></label>
                            <input type="text" name="duration" class="form-control @error('duration') is-invalid @enderror" 
                                   value="{{ old('duration') }}" placeholder="e.g., 3 Months" required>
                            @error('duration')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-4 mb-3">
                            <label class="form-label">Level <span class="text-danger">*</span></label>
                            <select name="level" class="form-select @error('level') is-invalid @enderror" required>
                                <option value="Beginner" {{ old('level') == 'Beginner' ? 'selected' : '' }}>Beginner</option>
                                <option value="Intermediate" {{ old('level') == 'Intermediate' ? 'selected' : '' }}>Intermediate</option>
                                <option value="Advanced" {{ old('level') == 'Advanced' ? 'selected' : '' }}>Advanced</option>
                            </select>
                            @error('level')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary">
                            <i>Save</i>
                        </button>
                        <a href="{{ route('admin.programs') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">Guidelines</div>
            <div class="card-body">
                <ul style="font-size: 12px; line-height: 1.8; padding-left: 20px; margin: 0;">
                    <li>Fill all required fields (*)</li>
                    <li>Category: Program type/field</li>
                    <li>Mode: Online/Onsite/Hybrid</li>
                    <li>Duration: e.g., "3 Months", "6 Weeks"</li>
                    <li>Level: Beginner/Intermediate/Advanced</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
