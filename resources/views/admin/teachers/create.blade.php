@php
    $title = 'Bright Ummah Academy - Create Teacher';
@endphp
@extends('admin.layouts.secondsidebar')

@section('content')

                <div class="ch3yp cnbwt cs7xl clu2m c6btv clbq0 cxsfz">

                    <!-- Page header -->
                    <div class="cgd7w">
                        <h1 class="text-gray-800 dark:text-gray-100 font-bold c459m cbtcb">Add Teacher</h1>
                    </div>

                    <div>

                        <!-- Components -->
                        <form action="{{ route('admin.teachers.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="cvsuf cvxzw">

                                <!-- Input Types -->
                                <div>
                                    <div class="cbpe3 coah6 c4sak">

                                        <div>
                                            <div>
                                                <label class="block text-sm c1k3n cu6vl" for="name">Name</label>
                                                <input id="name" name="name" class="caqf9 c6btv" type="text" placeholder="Teacher name..." value="{{ old('name') }}" required>
                                                @error('name')
                                                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div>
                                            <div>
                                                <label class="block text-sm c1k3n cu6vl" for="categories">Categories</label>
                                                <select id="categories" name="categories" class="caqf9 c6btv" required>
                                                    <option value="" {{ old('categories') == '' ? 'selected' : '' }}>Pilih Categories</option>
                                                    <option value="General Program" {{ old('categories') == 'General Program' ? 'selected' : '' }}>General Program</option>
                                                    <option value="Islamic Integrated Program" {{ old('categories') == 'Islamic Integrated Program' ? 'selected' : '' }}>Islamic Integrated Program</option>
                                                </select>
                                                @error('categories')
                                                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div>
                                            <div>
                                                <label class="block text-sm c1k3n cu6vl" for="institusi">Institusi</label>
                                                <input id="institusi" name="institusi" class="caqf9 c6btv" type="text" placeholder="Institusi..." value="{{ old('institusi') }}" required>
                                                @error('institusi')
                                                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div>
                                            <div>
                                                <label class="block text-sm c1k3n cu6vl" for="photo">Photo</label>

                                                <input 
                                                    id="imageInput" 
                                                    name="photo" 
                                                    type="file" 
                                                    accept="image/*" 
                                                    required
                                                    class="caqf9 c6btv"
                                                    onchange="handleImageUpload(event)"
                                                >

                                                <div id="newImageWrapper" class="mt-3 hidden">
                                                    <div class="relative inline-block">
                                                        <img
                                                            id="imagePreview"
                                                            src=""
                                                            class="shadow-md"
                                                            style="max-width: 240px; height: auto;"
                                                        >

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
                                        </div>

                                    </div>
                                </div>

                                <hr class="cghq3 cbv37 cr4kg cf7n6">

                                <div>
                                    <div class="flex flex-wrap items-center cnnms">
                                        <div class="ctq43">
                                            <button type="submit" class="btn bg-gray-900 cdj8c cg0jr ch8z9 cilvw cyn7a">Save</button>
                                        </div>
                                        <div class="ctq43">
                                            <a href="{{ route('admin.teachers.index') }}" class="btn bg-white border-gray-200 text-gray-800 cc0oq cghq3 cspbm c0zkc c2vpa">Cancel</a>
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
    };
    reader.readAsDataURL(file);
}

function removeNewImage() {
    document.getElementById('imageInput').value = '';
    document.getElementById('newImageWrapper').classList.add('hidden');
    document.getElementById('imageInput').classList.remove('hidden');
}
</script>

@endsection
