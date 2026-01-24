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

                    <input type="hidden" name="remove_image" id="removeImageFlag" value="0">
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Category <span class="text-danger">*</span></label>
                            <select name="category" class="form-select @error('category') is-invalid @enderror" required>
                                <option value="">Select Category</option>
                                <option value="Academic & School Program" {{ old('category', $program->category) == 'Academic & School Program' ? 'selected' : '' }}>Academic & School Program</option>
                                <option value="Quran & Islamic Studies Program" {{ old('category', $program->category) == 'Quran & Islamic Studies Program' ? 'selected' : '' }}>Quran & Islamic Studies Program</option>
                                <option value="Language & Skill Program" {{ old('category', $program->category) == 'Language & Skill Program' ? 'selected' : '' }}>Language & Skill Program</option>
                                <option value="Program Options" {{ old('category', $program->category) == 'Program Options' ? 'selected' : '' }}>Program Options</option>
                            </select>
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
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Mode <span class="text-danger">*</span></label>
                            <select name="mode" class="form-select @error('mode') is-invalid @enderror" required>
                                <option value="">Select Mode</option>
                                <option value="Online & Offline" {{ old('mode', $program->mode) == 'Online & Offline' ? 'selected' : '' }}>Online & Offline</option>
                                <option value="Online" {{ old('mode', $program->mode) == 'Online' ? 'selected' : '' }}>Online</option>
                                <option value="Offline" {{ old('mode', $program->mode) == 'Offline' ? 'selected' : '' }}>Offline</option>
                            </select>
                            @error('mode')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Level <span class="text-danger">*</span></label>

<input
    type="text"
    name="level"
    class="form-control @error('level') is-invalid @enderror"
    value="{{ old('level', $program->level) }}"
    list="level-options"
    placeholder="Contoh: Beginner, Intermediate, Advanced, SMP, SMA"
    required
>

<datalist id="level-options">
    @foreach ($levels as $level)
        <option value="{{ $level }}"></option>
    @endforeach
</datalist>

@error('level')
    <div class="invalid-feedback">{{ $message }}</div>
@enderror

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-8 mb-3">
                            <label class="form-label">Price (Rp) <span class="text-danger">*</span></label>
                            <input type="number" name="price" class="form-control @error('price') is-invalid @enderror" 
                                   value="{{ old('price', $program->price) }}" min="0" step="0.01" required>
                            @error('price')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <small class="text-muted">Enter amount without dots or commas (e.g., 5000000)</small>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label class="form-label">Price Period <span class="text-danger">*</span></label>
                            <select name="price_period" class="form-select @error('price_period') is-invalid @enderror" required>
                                <option value="">Select Period</option>
                                <option value="Per Day" {{ old('price_period', $program->price_period) == 'Per Day' ? 'selected' : '' }}>Per Day</option>
                                <option value="Per Week" {{ old('price_period', $program->price_period) == 'Per Week' ? 'selected' : '' }}>Per Week</option>
                                <option value="Per Month" {{ old('price_period', $program->price_period) == 'Per Month' ? 'selected' : '' }}>Per Month</option>
                                <option value="Per Year" {{ old('price_period', $program->price_period) == 'Per Year' ? 'selected' : '' }}>Per Year</option>
                            </select>
                            @error('price_period')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Teacher</label>
                        <input type="text" name="teacher" class="form-control @error('teacher') is-invalid @enderror" 
                               value="{{ old('teacher', $program->teacher) }}" placeholder="e.g., John Doe" required>
                        @error('teacher')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Tujuan Program</label>
                        <textarea name="tujuan_program" class="form-control @error('tujuan_program') is-invalid @enderror" 
                                  rows="4" placeholder="Masukkan tujuan program..." required>{{ old('tujuan_program', $program->tujuan_program) }}</textarea>
                        @error('tujuan_program')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Fokus Pembelajaran</label>
                        <textarea name="fokus_pembelajaran" class="form-control @error('fokus_pembelajaran') is-invalid @enderror" 
                                  rows="4" placeholder="Masukkan fokus pembelajaran..." required>{{ old('fokus_pembelajaran', $program->fokus_pembelajaran) }}</textarea>
                        @error('fokus_pembelajaran')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Manfaat Program</label>
                        <textarea name="manfaat_program" class="form-control @error('manfaat_program') is-invalid @enderror" 
                                  rows="4" placeholder="Masukkan manfaat program..." required>{{ old('manfaat_program', $program->manfaat_program) }}</textarea>
                        @error('manfaat_program')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
    <label class="form-label">Program Image</label>

    {{-- FILE INPUT --}}
    <input
        type="file"
        name="image"
        id="imageInput"
        class="form-control @error('image') is-invalid @enderror
            {{ ($program->image && old('remove_image') != 1) ? 'd-none' : '' }}"
        accept="image/*"
        onchange="handleImageUpload(event)"
    >

    {{-- FLAG REMOVE IMAGE --}}
    <input type="hidden" name="remove_image" id="removeImageInput" value="0">

    {{-- WARNING --}}
    <div
        id="imageWarning"
        class="text-danger mt-1 {{ old('remove_image') == 1 ? '' : 'd-none' }}"
        style="font-size:13px">
        Gambar program wajib diupload.
    </div>

    {{-- IMAGE PREVIEW --}}
    <div
        id="imageWrapper"
        class="mt-3 {{ ($program->image && old('remove_image') != 1) ? '' : 'd-none' }}"
    >
        <div class="position-relative d-inline-block">
            <img
                id="imagePreview"
                src="{{ $program->image }}"
                class="img-thumbnail"
                style="max-width:300px; max-height:200px; cursor:pointer"
                onclick="openImageModal()"
            >

            {{-- REMOVE --}}
            <button
                type="button"
                class="btn btn-danger btn-sm position-absolute top-0 end-0"
                style="border-radius:50%; padding:4px 7px"
                onclick="removeImage()"
            >
                <i class="bi bi-x-lg"></i>
            </button>

            {{-- ZOOM --}}
            <button
                type="button"
                class="btn btn-dark btn-sm position-absolute bottom-0 end-0"
                style="padding:4px 7px"
                onclick="openImageModal()"
            >
                <i class="bi bi-zoom-in"></i>
            </button>
        </div>
    </div>
</div>

<div class="modal fade" id="imageModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-body text-center">
                <img id="modalImage" class="img-fluid">
            </div>
        </div>
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
                    <tr>
                        <td style="font-size: 12px; color: #999;">Current Price</td>
                        <td style="font-size: 12px;">Rp {{ number_format($program->price, 0, ',', '.') }}<br>
                            <small class="text-muted">{{ $program->price_period }}</small>
                        </td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="card mt-3">
            <div class="card-header">Guidelines</div>
            <div class="card-body">
                <ul style="font-size: 12px; line-height: 1.8; padding-left: 20px; margin: 0;">
                    <li>Update any field as needed</li>
                    <li>Upload new image to replace current one</li>
                    <li>Leave image field empty to keep current image</li>
                    <li>Price changes will be reflected immediately</li>
                    <li>Teacher, Tujuan, Fokus, dan Manfaat adalah opsional</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function handleImageUpload(event) {
    const file = event.target.files[0];
    if (!file) return;

    const reader = new FileReader();
    reader.onload = function (e) {
        document.getElementById('imagePreview').src = e.target.result;
        document.getElementById('modalImage').src = e.target.result;

        document.getElementById('imageWrapper').classList.remove('d-none');
        document.getElementById('imageInput').classList.add('d-none');
        document.getElementById('imageWarning').classList.add('d-none');

        document.getElementById('removeImageFlag').value = 0;
    };
    reader.readAsDataURL(file);
}

function removeImage() {
    document.getElementById('imageInput').value = '';
    document.getElementById('imageInput').classList.remove('d-none');

    document.getElementById('imageWrapper').classList.add('d-none');
    document.getElementById('imageWarning').classList.remove('d-none');

    document.getElementById('removeImageFlag').value = 1;
}

function openImageModal() {
    const src = document.getElementById('imagePreview').src;
    document.getElementById('modalImage').src = src;
    new bootstrap.Modal(document.getElementById('imageModal')).show();
}
</script>

@endsection