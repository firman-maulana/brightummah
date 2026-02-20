@php
    $title = 'Bright Ummah Academy - Edit Teacher';
@endphp
@extends('admin.layouts.sidebar')

@section('content')

                <div class="ch3yp cnbwt cs7xl clu2m c6btv clbq0 cxsfz">

                    <!-- Page header -->
                    <div class="cgd7w">
                        <h1 class="text-gray-800 dark:text-gray-100 font-bold c459m cbtcb">Edit Teacher</h1>
                    </div>

                    <div>

                        <!-- Components -->
                        <form action="{{ route('admin.teachers.update', $teacher) }}" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">
                            @csrf
                            @method('PUT')
                            
                            <div class="cvsuf cvxzw">

                                <!-- Input Types -->
                                <div>
                                    <div class="cbpe3 coah6 c4sak">

                                        <div>
                                            <!-- Start -->
                                            <div>
                                                <label class="block text-sm c1k3n cu6vl" for="name">Name</label>
                                                <input id="name" name="name" class="caqf9 c6btv" type="text" placeholder="Teacher name..." value="{{ old('name', $teacher->name) }}" required>
                                                @error('name')
                                                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <!-- End -->
                                        </div>

                                        <div>
                                            <!-- Start -->
                                            <div>
                                                <label class="block text-sm c1k3n cu6vl" for="categories">Categories</label>
                                                <select id="categories" name="categories" class="caqf9 c6btv" required>
                                                    <option value="General Program" {{ old('categories', $teacher->categories) == 'General Program' ? 'selected' : '' }}>General Program</option>
                                                    <option value="Islamic Integrated Program" {{ old('categories', $teacher->categories) == 'Islamic Integrated Program' ? 'selected' : '' }}>Islamic Integrated Program</option>
                                                </select>
                                                @error('categories')
                                                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <!-- End -->
                                        </div>

                                        <div>
                                            <!-- Start -->
                                            <div>
                                                <label class="block text-sm c1k3n cu6vl" for="institusi">Institusi</label>
                                                <input id="institusi" name="institusi" class="caqf9 c6btv" type="text" placeholder="Institusi..." value="{{ old('institusi', $teacher->institusi) }}" required>
                                                @error('institusi')
                                                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <!-- End -->
                                        </div>
                                        
                                        <div>
                                            <!-- Start -->
                                            <div>
                                                <label class="block text-sm c1k3n cu6vl" for="photo">Photo</label>
                                                
                                                {{-- EXISTING IMAGE PREVIEW --}}
                                                @if($teacher->photo_url)
                                                    <div id="existingImageWrapper" class="mt-2 mb-3">
                                                        <div class="relative inline-block">
                                                            <img 
                                                                src="{{ $teacher->photo_url }}" 
                                                                alt="{{ $teacher->name }}" 
                                                                class="shadow-md"
                                                                style="max-width: 240px; height: auto;"
                                                            >
                                                            
                                                            {{-- REMOVE BUTTON WITH SVG X ICON --}}
                                                            <button
                                                                type="button"
                                                                class="absolute top-0 right-0 bg-red-500 hover:bg-red-600 text-white rounded-full p-1 shadow-lg transition-colors"
                                                                onclick="removeExistingImage()"
                                                                title="Remove current image"
                                                            >
                                                                <svg class="h-4 w-4" width="16" height="16" viewBox="0 0 16 16" fill="currentColor">
                                                                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                    </div>
                                                @endif
                                                
                                                {{-- FILE INPUT --}}
                                                <input 
                                                    id="imageInput" 
                                                    name="photo" 
                                                    type="file" 
                                                    accept="image/*"
                                                    class="caqf9 c6btv {{ $teacher->photo_url ? 'hidden' : '' }}"
                                                    onchange="handleImageUpload(event)"
                                                >
                                                
                                                <input type="hidden" id="removeImageFlag" name="remove_photo" value="0">
                                                
                                                {{-- NEW IMAGE PREVIEW --}}
                                                <div id="newImageWrapper" class="mt-3 hidden">
                                                    <div class="relative inline-block">
                                                        <img
                                                            id="imagePreview"
                                                            src=""
                                                            class="shadow-md"
                                                            style="max-width: 240px; height: auto;"
                                                        >
                                                        
                                                        {{-- REMOVE BUTTON WITH SVG X ICON --}}
                                                        <button
                                                            type="button"
                                                            class="absolute top-0 right-0 bg-red-500 hover:bg-red-600 text-white rounded-full p-1 shadow-lg transition-colors"
                                                            onclick="removeNewImage()"
                                                            title="Remove new image"
                                                        >
                                                            <svg class="h-4 w-4" width="16" height="16" viewBox="0 0 16 16" fill="currentColor">
                                                                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                                
                                                <p class="text-xs text-gray-500 mt-2">JPG, PNG, JPEG. Maksimal 10 MB.</p>
                                                @error('photo')
                                                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <!-- End -->
                                        </div>

                                    </div>
                                </div>

                                                            <hr class="cghq3 cbv37 cr4kg cf7n6">

                                <div>
                                    <div class="flex flex-wrap items-center cnnms">
                                        <div class="ctq43">
                                            <!-- Start -->
                                            <button type="submit" class="btn bg-gray-900 cdj8c cg0jr ch8z9 cilvw cyn7a">Update</button>
                                            <!-- End -->
                                        </div>
                                        <div class="ctq43">
                                            <!-- Start -->
                                            <a href="{{ route('admin.teachers.index') }}" class="btn bg-white border-gray-200 text-gray-800 cc0oq cghq3 cspbm c0zkc c2vpa">Cancel</a>
                                            <!-- End -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>

                </div>

<script>
function validateForm() {
    const existingImageWrapper = document.getElementById('existingImageWrapper');
    const imageInput = document.getElementById('imageInput');
    const removeFlag = document.getElementById('removeImageFlag').value;
    
    // Check if existing image is visible (not removed)
    const hasExistingImage = existingImageWrapper && !existingImageWrapper.classList.contains('hidden');
    
    // Check if new image is uploaded
    const hasNewImage = imageInput.files && imageInput.files.length > 0;
    
    // Check if user is trying to remove the image
    const isRemoving = removeFlag === '1';
    
    // If removing image or no image at all, show error
    if (isRemoving || (!hasExistingImage && !hasNewImage)) {
        alert('Photo harus terisi. Silakan upload photo atau batalkan penghapusan photo.');
        return false;
    }
    
    return true;
}

function handleImageUpload(event) {
    const file = event.target.files[0];

    if (!file) return;

    if (file.size > 10 * 1024 * 1024) {
        alert('Ukuran gambar maksimal 10 MB');
        event.target.value = '';
        return;
    }

    const reader = new FileReader();
    reader.onload = function (e) {
        document.getElementById('imagePreview').src = e.target.result;
        document.getElementById('newImageWrapper').classList.remove('hidden');
        document.getElementById('imageInput').classList.add('hidden');
    };
    reader.readAsDataURL(file);
}

function removeExistingImage() {
    // Hide existing image
    document.getElementById('existingImageWrapper').classList.add('hidden');
    // Show file input
    document.getElementById('imageInput').classList.remove('hidden');
    // Set flag to remove image
    document.getElementById('removeImageFlag').value = '1';
    // Make file input required
    document.getElementById('imageInput').setAttribute('required', 'required');
}

function removeNewImage() {
    // Clear file input
    document.getElementById('imageInput').value = '';
    // Hide new image preview
    document.getElementById('newImageWrapper').classList.add('hidden');
    
    // Check if there's an existing image
    const existingImageWrapper = document.getElementById('existingImageWrapper');
    if (existingImageWrapper) {
        // Show existing image again
        existingImageWrapper.classList.remove('hidden');
        document.getElementById('imageInput').classList.add('hidden');
        document.getElementById('removeImageFlag').value = '0';
        // Remove required attribute
        document.getElementById('imageInput').removeAttribute('required');
    } else {
        // Show file input
        document.getElementById('imageInput').classList.remove('hidden');
    }
}
</script>

@endsection