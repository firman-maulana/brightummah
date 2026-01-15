@extends('layouts.admin')

@section('title', 'Edit Program')
@section('page-title', 'Edit Program')

@section('content')
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">Edit Program Information</div>
            <div class="card-body">
                <form action="{{ route('admin.programs.update', $program) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Category <span class="text-danger">*</span></label>
                            <input type="text" name="category" class="form-control @error('category') is-invalid @enderror" 
                                   value="{{ old('category', $program->category) }}" required>
                            @error('category')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Program Name <span class="text-danger">*</span></label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" 
                                   value="{{ old('name', $program->name) }}" required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Mode <span class="text-danger">*</span></label>
                            <select name="mode" class="form-select @error('mode') is-invalid @enderror" required>
                                <option value="Online" {{ old('mode', $program->mode) == 'Online' ? 'selected' : '' }}>Online</option>
                                <option value="Onsite" {{ old('mode', $program->mode) == 'Onsite' ? 'selected' : '' }}>Onsite</option>
                                <option value="Hybrid" {{ old('mode', $program->mode) == 'Hybrid' ? 'selected' : '' }}>Hybrid</option>
                            </select>
                            @error('mode')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-4 mb-3">
                            <label class="form-label">Duration <span class="text-danger">*</span></label>
                            <input type="text" name="duration" class="form-control @error('duration') is-invalid @enderror" 
                                   value="{{ old('duration', $program->duration) }}" required>
                            @error('duration')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-4 mb-3">
                            <label class="form-label">Level <span class="text-danger">*</span></label>
                            <select name="level" class="form-select @error('level') is-invalid @enderror" required>
                                <option value="Beginner" {{ old('level', $program->level) == 'Beginner' ? 'selected' : '' }}>Beginner</option>
                                <option value="Intermediate" {{ old('level', $program->level) == 'Intermediate' ? 'selected' : '' }}>Intermediate</option>
                                <option value="Advanced" {{ old('level', $program->level) == 'Advanced' ? 'selected' : '' }}>Advanced</option>
                            </select>
                            @error('level')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary">
                            <i>Update</i>
                        </button>
                        <a href="{{ route('admin.programs') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">Program Info</div>
            <div class="card-body">
                <table class="table table-sm mb-0">
                    <tr>
                        <td style="font-size: 12px; color: #999;">Created</td>
                        <td style="font-size: 12px;">{{ $program->created_at->format('d M Y H:i') }}</td>
                    </tr>
                    <tr>
                        <td style="font-size: 12px; color: #999;">Updated</td>
                        <td style="font-size: 12px;">{{ $program->updated_at->format('d M Y H:i') }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
