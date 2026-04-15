@php
    $title = 'Bright Ummah Academy - Edit Program';
@endphp
@extends('admin.layouts.secondsidebar')

@section('content')

                <div class="ch3yp cnbwt cs7xl clu2m c6btv clbq0 cxsfz">

                    <!-- Page header -->
                    <div class="cgd7w">
                        <h1 class="text-gray-800 dark:text-gray-100 font-bold c459m cbtcb">Edit Program</h1>
                    </div>

                    <div>

                        <!-- Components -->
                        <form action="{{ route('admin.programs.update', $program) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            
                            <div class="cvsuf cvxzw">

                                <!-- Input Types -->
                                <div>
                                    <div class="cbpe3 coah6 c4sak">
                                        
                                        <div>
                                            <!-- Start -->
                                            <label class="block text-sm c1k3n cu6vl dark:text-gray-400" for="category">Category</label>
                                            <select id="category" name="category" class="caqf9 c6btv" required>
                                                @foreach($categories as $cat)
                                                    <option value="{{ $cat }}" {{ $program->category == $cat ? 'selected' : '' }}>{{ $cat }}</option>
                                                @endforeach
                                            </select>
                                            @error('category')
                                                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                                            @enderror
                                            <!-- End -->
                                        </div>
                                        
                                        <div>
                                            <!-- Start -->
                                            <div>
                                                <label class="block text-sm c1k3n cu6vl dark:text-gray-400" for="name">Program Name</label>
                                                <input id="name" name="name" class="caqf9 c6btv" type="text" placeholder="Program name..." value="{{ old('name', $program->name) }}" required>
                                                @error('name')
                                                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <!-- End -->
                                        </div>

                                        <div>
                                            <!-- Start -->
                                            <label class="block text-sm c1k3n cu6vl dark:text-gray-400" for="mode">Mode</label>
                                            <select id="mode" name="mode" class="caqf9 c6btv" required>
                                                @foreach($modes as $m)
                                                    <option value="{{ $m }}" {{ $program->mode == $m ? 'selected' : '' }}>{{ $m }}</option>
                                                @endforeach
                                            </select>
                                            @error('mode')
                                                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                                            @enderror
                                            <!-- End -->
                                        </div>

                                        <div>
                                            <!-- Start -->
                                            <div>
                                                <label class="block text-sm c1k3n cu6vl dark:text-gray-400" for="tujuan_program">Tujuan Program</label>
                                                <textarea id="tujuan_program" name="tujuan_program" class="caqf9 c6btv" rows="3" placeholder="Program objectives..." required>{{ old('tujuan_program', $program->tujuan_program) }}</textarea>
                                                @error('tujuan_program')
                                                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <!-- End -->
                                        </div>
                                        
                                        <div>
                                            <!-- Start -->
                                            <div>
                                                <label class="block text-sm c1k3n cu6vl dark:text-gray-400" for="manfaat_program">Manfaat Program</label>
                                                <textarea id="manfaat_program" name="manfaat_program" class="caqf9 c6btv" rows="3" placeholder="Program benefits..." required>{{ old('manfaat_program', $program->manfaat_program) }}</textarea>
                                                @error('manfaat_program')
                                                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <!-- End -->
                                        </div>

                                        <div>
                                            <!-- Start -->
                                            <div>
                                                <label class="block text-sm c1k3n cu6vl dark:text-gray-400" for="fokus_pembelajaran">Fokus Pembelajaran</label>
                                                <textarea id="fokus_pembelajaran" name="fokus_pembelajaran" class="caqf9 c6btv" rows="3" placeholder="Learning focus..." required>{{ old('fokus_pembelajaran', $program->fokus_pembelajaran) }}</textarea>
                                                @error('fokus_pembelajaran')
                                                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <!-- End -->
                                        </div>
                                        
                                        <div>
                                            <!-- Start -->
                                            <div>
                                                <label class="block text-sm c1k3n cu6vl dark:text-gray-400" for="image">Program Image</label>
                                                
                                                {{-- EXISTING IMAGE PREVIEW --}}
                                                @if($program->image)
                                                    <div id="existingImageWrapper" class="mt-2 mb-3">
                                                        <div style="position: relative; display: inline-block;">
                                                            <img 
                                                                src="{{ $program->image }}" 
                                                                alt="{{ $program->name }}" 
                                                                class="rounded-lg shadow-md"
                                                                style="max-width:300px; max-height:200px; object-fit: cover; display: block;"
                                                            >
                                                            
                                                            {{-- REMOVE BUTTON WITH SVG X ICON --}}
                                                            <button
                                                                type="button"
                                                                class="text-white rounded-full shadow-lg transition-colors"
                                                                style="position: absolute; top: 8px; right: 8px; padding: 4px; z-index: 10; display: flex; align-items: center; justify-content: center; background-color: #ef4444 !important; border-radius: 50% !important; border: none; cursor: pointer; width: 24px; height: 24px;"
                                                                onmouseover="this.style.backgroundColor='#dc2626'"
                                                                onmouseout="this.style.backgroundColor='#ef4444'"
                                                                onclick="removeExistingImage()"
                                                                title="Remove current image"
                                                            >
                                                                <svg class="h-3 w-3" width="12" height="12" viewBox="0 0 16 16" fill="currentColor" style="color: white;">
                                                                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <small class="text-muted dark:text-gray-400 block mt-2">
                                                            JPG, PNG, JPEG. Maksimal 10 MB.
                                                        </small>
                                                    </div>
                                                @endif
                                                
                                                {{-- FILE INPUT --}}
                                                <input 
                                                    id="imageInput" 
                                                    name="image" 
                                                    type="file" 
                                                    accept="image/*" 
                                                    class="caqf9 c6btv {{ $program->image ? 'hidden' : '' }}"
                                                    onchange="handleImageUpload(event)"
                                                >
                                                
                                                <small id="imageHint" class="text-muted dark:text-gray-400 block mt-1 {{ $program->image ? 'hidden' : '' }}">
                                                    JPG, PNG, JPEG. Maksimal 10 MB.
                                                </small>
                                                
                                                <input type="hidden" id="removeImageFlag" name="remove_image" value="0">
                                                
                                                {{-- NEW IMAGE PREVIEW --}}
                                                <div id="newImageWrapper" class="mt-3 hidden">
                                                    <div style="position: relative; display: inline-block;">
                                                        <img
                                                            id="imagePreview"
                                                            src=""
                                                            class="rounded-lg shadow-md"
                                                            style="max-width:300px; max-height:200px; object-fit: cover; display: block;"
                                                        >

                                                        {{-- REMOVE BUTTON WITH SVG X ICON --}}
                                                        <button
                                                            type="button"
                                                            class="text-white rounded-full shadow-lg transition-colors"
                                                            style="position: absolute; top: 8px; right: 8px; padding: 4px; z-index: 10; display: flex; align-items: center; justify-content: center; background-color: #ef4444 !important; border-radius: 50% !important; border: none; cursor: pointer; width: 24px; height: 24px;"
                                                            onmouseover="this.style.backgroundColor='#dc2626'"
                                                            onmouseout="this.style.backgroundColor='#ef4444'"
                                                            onclick="removeNewImage()"
                                                            title="Remove new image"
                                                        >
                                                            <svg class="h-3 w-3" width="12" height="12" viewBox="0 0 16 16" fill="currentColor" style="color: white;">
                                                                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <small class="text-muted dark:text-gray-400 block mt-2">
                                                        JPG, PNG, JPEG. Maksimal 10 MB.
                                                    </small>
                                                </div>
                                                
                                                @error('image')
                                                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <!-- End -->
                                        </div>

                                        <div>
                                            <!-- Start -->
                                            <div>
                                                <label class="block text-sm c1k3n cu6vl dark:text-gray-400" for="level">Level</label>
                                                <input id="level" name="level" class="caqf9 c6btv" type="text" placeholder="Level..." value="{{ old('level', $program->level) }}" required>
                                                @error('level')
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
                                            <a href="{{ route('admin.programs.show', $program) }}" class="btn bg-white border-gray-200 text-gray-800 cc0oq cghq3 cspbm c0zkc c2vpa">Cancel</a>
                                            <!-- End -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>

                </div>

<script>
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
        document.getElementById('imageHint').classList.add('hidden');
    };
    reader.readAsDataURL(file);
}

function removeExistingImage() {
    // Hide existing image
    document.getElementById('existingImageWrapper').classList.add('hidden');
    // Show file input
    document.getElementById('imageInput').classList.remove('hidden');
    document.getElementById('imageHint').classList.remove('hidden');
    // Set flag to remove image
    document.getElementById('removeImageFlag').value = '1';
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
        document.getElementById('imageHint').classList.add('hidden');
        document.getElementById('removeImageFlag').value = '0';
    } else {
        // Show file input
        document.getElementById('imageInput').classList.remove('hidden');
        document.getElementById('imageHint').classList.remove('hidden');
    }
}
</script>

@endsection