@php
    $title = 'Bright Ummah Academy - Create Program';
@endphp
@extends('admin.layouts.secondsidebar')

@section('content')

                <div class="ch3yp cnbwt cs7xl clu2m c6btv clbq0 cxsfz">

                    <!-- Page header -->
                    <div class="cgd7w">
                        <h1 class="text-gray-800 dark:text-gray-100 font-bold c459m cbtcb">Create Program</h1>
                    </div>

                    <div>

                        <!-- Components -->
                        <div class="cvsuf cvxzw">

                            <!-- Input Types -->
                            <div>
                                <form action="{{ route('admin.programs.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    
                                    <div class="cbpe3 coah6 c4sak">
                                    
                                    <div>
                                        <!-- Start -->
                                        <label class="block text-sm c1k3n cu6vl dark:text-gray-400" for="category">Category</label>
                                        <select name="category" id="category" class="caqf9 c6btv @error('category') is-invalid @enderror" required>
                                            <option value="">Select Category</option>
                                            <option value="Academic & School Program" {{ old('category') == 'Academic & School Program' ? 'selected' : '' }}>Academic & School Program</option>
                                            <option value="Quran & Islamic Studies Program" {{ old('category') == 'Quran & Islamic Studies Program' ? 'selected' : '' }}>Quran & Islamic Studies Program</option>
                                            <option value="Language & Skill Program" {{ old('category') == 'Language & Skill Program' ? 'selected' : '' }}>Language & Skill Program</option>
                                            <option value="Program Options" {{ old('category') == 'Program Options' ? 'selected' : '' }}>Program Options</option>
                                        </select>
                                        @error('category')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <!-- End -->
                                    </div>
                                    
                                    <div>
                                        <!-- Start -->
                                        <div>
                                            <label class="block text-sm c1k3n cu6vl dark:text-gray-400" for="name">Program Name</label>
                                            <input name="name" id="name" class="caqf9 c6btv @error('name') is-invalid @enderror" type="text" value="{{ old('name') }}" placeholder="Masukkan nama program" required>
                                            @error('name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <!-- End -->
                                    </div>

                                    <div>
                                        <!-- Start -->
                                        <label class="block text-sm c1k3n cu6vl dark:text-gray-400" for="mode">Mode</label>
                                        <select name="mode" id="mode" class="caqf9 c6btv @error('mode') is-invalid @enderror" required>
                                            <option value="">Select Mode</option>
                                            <option value="Online & Offline" {{ old('mode') == 'Online & Offline' ? 'selected' : '' }}>Online & Offline</option>
                                            <option value="Online" {{ old('mode') == 'Online' ? 'selected' : '' }}>Online</option>
                                            <option value="Offline" {{ old('mode') == 'Offline' ? 'selected' : '' }}>Offline</option>
                                        </select>
                                        @error('mode')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <!-- End -->
                                    </div>
                                    
                                    <div>
                                        <!-- Start -->
                                        <div>
                                            <label class="block text-sm c1k3n cu6vl dark:text-gray-400" for="tujuan_program">Tujuan Program</label>
                                            <textarea name="tujuan_program" id="tujuan_program" class="caqf9 c6btv @error('tujuan_program') is-invalid @enderror" rows="4" placeholder="Masukkan tujuan program..." required>{{ old('tujuan_program') }}</textarea>
                                            @error('tujuan_program')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <!-- End -->
                                    </div>

                                    <div>
                                        <!-- Start -->
                                        <div>
                                            <label class="block text-sm c1k3n cu6vl dark:text-gray-400" for="fokus_pembelajaran">Fokus Pembelajaran</label>
                                            <textarea name="fokus_pembelajaran" id="fokus_pembelajaran" class="caqf9 c6btv @error('fokus_pembelajaran') is-invalid @enderror" rows="4" placeholder="Masukkan fokus pembelajaran..." required>{{ old('fokus_pembelajaran') }}</textarea>
                                            @error('fokus_pembelajaran')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <!-- End -->
                                    </div>
                                    
                                    <div>
                                        <!-- Start -->
                                        <div>
                                            <label class="block text-sm c1k3n cu6vl dark:text-gray-400" for="manfaat_program">Manfaat Program</label>
                                            <textarea name="manfaat_program" id="manfaat_program" class="caqf9 c6btv @error('manfaat_program') is-invalid @enderror" rows="4" placeholder="Masukkan manfaat program..." required>{{ old('manfaat_program') }}</textarea>
                                            @error('manfaat_program')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <!-- End -->
                                    </div>

                                    <div>
                                        <!-- Start -->
                                        <div>
                                            <label class="block text-sm c1k3n cu6vl dark:text-gray-400" for="imageInput">Program Image</label>
                                            
                                            <input
                                                type="file"
                                                name="image"
                                                id="imageInput"
                                                class="caqf9 c6btv @error('image') is-invalid @enderror"
                                                accept="image/*"
                                                onchange="handleImageUpload(event)"
                                                required
                                            >

                                            <small id="imageHint" class="text-muted dark:text-gray-400 block mt-1">
                                                JPG, PNG, JPEG. Maksimal 10 MB.
                                            </small>

                                            {{-- IMAGE PREVIEW --}}
                                            <div id="imageWrapper" class="mt-3 hidden">
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
                                                        onclick="removeImage()"
                                                        title="Remove image"
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
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <!-- End -->
                                    </div>

                                    <div>
                                        <!-- Start -->
                                        <div>
                                            <label class="block text-sm c1k3n cu6vl dark:text-gray-400" for="level">Level</label>
                                            <input name="level" id="level" class="caqf9 c6btv @error('level') is-invalid @enderror" type="text" value="{{ old('level') }}" placeholder="Contoh: PAUD, SD" required>
                                            <datalist id="level-options">
                                                @foreach ($levels as $level)
                                                    <option value="{{ $level }}"></option>
                                                @endforeach
                                            </datalist>
                                            @error('level')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <!-- End -->
                                    </div>

                                    </div>

                                                                <hr class="cghq3 cbv37 cr4kg cf7n6">

                                    
                                    <div>
                                        <div class="flex flex-wrap items-center cnnms">
                                            <div class="ctq43">
                                                <!-- Start -->
                                                <button type="submit" class="btn bg-gray-900 cdj8c cg0jr ch8z9 cilvw cyn7a">
                                                    Save
                                                </button>
                                                <!-- End -->
                                            </div>
                                            <div class="ctq43">
                                                <!-- Start -->
                                                <a href="{{ route('admin.programs') }}" class="btn bg-white border-gray-200 text-gray-800 cc0oq cghq3 cspbm c0zkc c2vpa">Cancel</a>
                                                <!-- End -->
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>

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
        document.getElementById('imageWrapper').classList.remove('hidden');
        document.getElementById('imageInput').classList.add('hidden');
        document.getElementById('imageHint').classList.add('hidden');
    };
    reader.readAsDataURL(file);
}

function removeImage() {
    document.getElementById('imageInput').value = '';
    document.getElementById('imageInput').classList.remove('hidden');
    document.getElementById('imageWrapper').classList.add('hidden');
    document.getElementById('imageHint').classList.remove('hidden');
}
</script>

@endsection