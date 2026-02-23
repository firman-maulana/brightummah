@php
    $title = 'Bright Ummah Academy - Add Testimonial Photo';
@endphp
@extends('admin.layouts.sidebar')

@section('content')

                <div class="ch3yp cnbwt cs7xl clu2m c6btv clbq0 cxsfz">

                    <!-- Page header -->
                    <div class="cgd7w">
                        <h1 class="text-gray-800 dark:text-gray-100 font-bold c459m cbtcb">Add Photo</h1>
                    </div>

                    <div>

                        <!-- Components -->
                        <form action="{{ route('admin.testimonials.post', $testimonial) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="cvsuf cvxzw">

                                <!-- Input Types -->
                                <div>
                                    <div class="cbpe3 coah6 c4sak">

                                        <div>
                                            <div>
                                                <label class="block text-sm c1k3n cu6vl" for="name">Name</label>
                                                <input id="name" name="name" class="curyp cpqp6 cv9uq c14v6 cha85 cbnll c7cy2 czsk6 cpw2l caqf9 c6btv" type="text" value="{{ ucwords(strtolower($testimonial->name)) }}">
                                            </div>
                                        </div>

                                        <div>
                                            <div>
                                                <label class="block text-sm c1k3n cu6vl" for="institute">Institute</label>
                                                <input id="institute" name="institute" class="curyp cpqp6 cv9uq c14v6 cha85 cbnll c7cy2 czsk6 cpw2l caqf9 c6btv" type="text" value="{{ ucwords(strtolower($testimonial->institute)) }}">
                                            </div>
                                        </div>

                                        <div>
                                            <div>
                                                <label class="block text-sm c1k3n cu6vl" for="country">Country</label>
                                                <input id="country" name="country" class="curyp cpqp6 cv9uq c14v6 cha85 cbnll c7cy2 czsk6 cpw2l caqf9 c6btv" type="text" value="{{ ucwords(strtolower($testimonial->country)) }}">
                                            </div>
                                        </div>

                                        <div>
                                            <div>
                                                <label class="block text-sm c1k3n cu6vl" for="photo">Photo</label>

                                                @if($testimonial->photo)
                                                    <div id="existingImageWrapper" class="mt-3">
                                                        <div class="relative inline-block">
                                                            <img
                                                                id="existingImagePreview"
                                                                src="{{ $testimonial->photo_url }}"
                                                                class="shadow-md"
                                                                style="max-width: 240px; height: auto;"
                                                            >

                                                            <button
                                                                type="button"
                                                                class="absolute top-0 right-0 bg-red-500 hover:bg-red-600 text-white rounded-full p-1 shadow-lg transition-colors"
                                                                onclick="removeExistingImage()"
                                                                title="Remove existing image"
                                                            >
                                                                <svg class="h-4 w-4" width="16" height="16" viewBox="0 0 16 16" fill="currentColor">
                                                                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                    </div>
                                                @endif

                                                <input 
                                                    id="imageInput" 
                                                    name="photo" 
                                                    type="file" 
                                                    accept="image/*" 
                                                    {{ $testimonial->photo ? '' : 'required' }}
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

                                        <div>
                                            <div>
                                                <label class="block text-sm c1k3n cu6vl" for="message">Message</label>
                                                <textarea id="message" name="message" class="curyp cpqp6 cv9uq c14v6 cha85 cbnll c7cy2 czsk6 cpw2l caqf9 c6btv" rows="4" maxlength="225">{{ $testimonial->message }}</textarea>
                                                <div class="character-counter" style="text-align: right; font-size: 12px; color: #666; margin-top: 5px;">
                                                    <span id="char-count">{{ strlen($testimonial->message) }}</span>/225 characters
                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                </div>

                                <hr class="cghq3 cbv37 cr4kg cf7n6">

                                <div>
                                    <div class="flex flex-wrap items-center cnnms">
                                        <div class="ctq43">
                                            <button type="submit" class="btn bg-gray-900 cdj8c cg0jr ch8z9 cilvw cyn7a">Post</button>
                                        </div>
                                        <div class="ctq43">
                                            <a href="{{ route('admin.testimonials.index') }}" class="btn bg-white border-gray-200 text-gray-800 cc0oq cghq3 cspbm c0zkc c2vpa">Cancel</a>
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

        const existing = document.getElementById('existingImageWrapper');
        if (existing) {
            existing.classList.add('hidden');
        }
    };
    reader.readAsDataURL(file);
}

function removeNewImage() {
    document.getElementById('imageInput').value = '';
    document.getElementById('newImageWrapper').classList.add('hidden');
    document.getElementById('imageInput').classList.remove('hidden');
}

function removeExistingImage() {
    const existing = document.getElementById('existingImageWrapper');
    if (existing) {
        existing.classList.add('hidden');
    }

    document.getElementById('imageInput').classList.remove('hidden');
    document.getElementById('imageInput').setAttribute('required', 'required');
}

document.addEventListener('DOMContentLoaded', function () {
    const existing = document.getElementById('existingImageWrapper');
    if (existing) {
        document.getElementById('imageInput').classList.add('hidden');
    }

    // Capitalize first letter of each word for name, institute, and country fields
    const capitalizeFields = ['name', 'institute', 'country'];
    
    capitalizeFields.forEach(fieldId => {
        const field = document.getElementById(fieldId);
        if (field) {
            field.addEventListener('input', function(e) {
                const cursorPosition = this.selectionStart;
                const value = this.value;
                
                // Capitalize first letter of each word
                const capitalizedValue = value.toLowerCase().replace(/\b\w/g, char => char.toUpperCase());
                
                this.value = capitalizedValue;
                
                // Restore cursor position
                this.setSelectionRange(cursorPosition, cursorPosition);
            });
        }
    });

    // Character counter for message textarea
    const messageTextarea = document.getElementById('message');
    const charCount = document.getElementById('char-count');
    
    if (messageTextarea && charCount) {
        // Update counter on input
        messageTextarea.addEventListener('input', function() {
            const currentLength = this.value.length;
            charCount.textContent = currentLength;
            
            // Prevent typing beyond limit
            if (currentLength >= 225) {
                this.value = this.value.substring(0, 225);
                charCount.textContent = 225;
            }
        });

        // Prevent typing beyond limit
        messageTextarea.addEventListener('keydown', function(e) {
            if (this.value.length >= 225 &&
                e.key !== 'Backspace' &&
                e.key !== 'Delete' &&
                e.key !== 'ArrowLeft' &&
                e.key !== 'ArrowRight' &&
                e.key !== 'ArrowUp' &&
                e.key !== 'ArrowDown' &&
                !e.ctrlKey &&
                !e.metaKey) {
                e.preventDefault();
            }
        });
    }
});
</script>

@endsection
