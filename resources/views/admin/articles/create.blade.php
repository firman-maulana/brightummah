@extends('admin.layouts.sidebar')
@section('content')

<div class="ch3yp cnbwt cs7xl clu2m c6btv clbq0 cxsfz">

                    <!-- Smaller container -->
                    <div class="cbb0u clu2m">

                        <!-- Page header -->
                        <div class="c2g1r cwnq4 cnlq0 cgd7w">
    
                            <!-- Left: Title -->
                            <div class="c2rn6 cdiog">
                                <h1 class="text-gray-800 dark:text-gray-100 font-bold c459m cbtcb">Create Articles</h1>
                            </div>
    
                        </div>

                        <!-- Tasks -->
                        <form action="{{ route('admin.articles.store') }}" method="POST" enctype="multipart/form-data" id="articleForm">
                            @csrf
                            <div class="cmxzb">

                                    <div>
                                        <!-- Start -->
                                        <div>
                                            <label class="block text-sm c1k3n cu6vl" for="title">Judul</label>
                                            <input id="title" name="title" class="caqf9 c6btv" type="text" placeholder="Masukkan judul..." required value="{{ old('title') }}">
                                            @error('title')
                                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <!-- End -->
                                    </div>
                                    <div>
                                        <!-- Start -->
                                        <div>
                                            <label class="block text-sm c1k3n cu6vl" for="thumbnail">Thumbnail <span class="czr3n">*</span></label>
                                            <input id="thumbnail" name="thumbnail" class="caqf9 c6btv" type="file" accept="image/*" required onchange="previewThumbnail(event)">
                                            <div id="thumbnailPreview" class="mt-2"></div>
                                            @error('thumbnail')
                                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <!-- End -->
                                    </div>
                                    <div>
                                        <!-- Start -->
                                        <div>
                                            <label class="block text-sm c1k3n cu6vl" for="hashtag">Hastag <span class="czr3n">*</span></label>
                                            <div id="hashtagsContainer">
                                                <input id="hashtag" name="hashtags[]" class="caqf9 c6btv mb-2" type="text" required>
                                            </div>
                                            <button type="button" onclick="addHashtag()" class="text-sm text-violet-500 hover:text-violet-600">+ Add Hashtag</button>
                                            @error('hashtags')
                                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <!-- End -->
                                    </div>
                                    <div class="cm3b7 c51uw ccww4 csdex cemhh c4sak">

                                <!-- Avatars -->
                                <div class="flex cjgpi coqgc cg40v">
                                    <button type="button" onclick="toggleContentOptions()" class="flex justify-center items-center rounded-full bg-white border border-gray-200 text-violet-500 cc0oq cghq3 cspbm c2vpa cxxol c5vqk c8bkw cex0k c6oul">
                                        <span class="cn8jz">Add new user</span>
                                        <svg class="w-3 h-3 cbm9w" viewBox="0 0 12 12">
                                            <path d="M11 5H7V1a1 1 0 0 0-2 0v4H1a1 1 0 0 0 0 2h4v4a1 1 0 0 0 2 0V7h4a1 1 0 0 0 0-2Z"></path>
                                        </svg>
                                    </button>
                                </div>
                                <div class="flex flex-wrap items-center c9uh3" id="contentOptions" style="display: none;">
                            
                                    <div class="cm0ci">
                                        <!-- Start -->
                                        <label class="flex items-center cursor-pointer" onclick="addContentBlock('paragraph')">
                                            <input type="radio" name="content-type-selector" class="cgd3c">
                                            <span class="text-sm c8bkw">Paragraf</span>
                                        </label>
                                        <!-- End -->
                                    </div>
                            
                                    <div class="cm0ci">
                                        <!-- Start -->
                                        <label class="flex items-center cursor-pointer" onclick="addContentBlock('point')">
                                            <input type="radio" name="content-type-selector" class="cgd3c">
                                            <span class="text-sm c8bkw">Point</span>
                                        </label>
                                        <!-- End -->
                                    </div>
                                    <div class="cm0ci">
                                        <!-- Start -->
                                        <label class="flex items-center cursor-pointer" onclick="addContentBlock('photo')">
                                            <input type="radio" name="content-type-selector" class="cgd3c">
                                            <span class="text-sm c8bkw">Photo</span>
                                        </label>
                                        <!-- End -->
                                    </div>
                                </div>
                            </div>
    
    
                            </div>

                            <!-- Group 1 -->
                            <div>
                                <div class="cweej" id="contentBlocks">
    
                                    <!-- Content blocks will be added here dynamically -->

                                </div>
                                
                            </div>

                            <hr class="cghq3 cbv37 cr4kg cf7n6">

                            
                            <div>
                                <div class="flex flex-wrap items-center cnnms">
                                    <div class="ctq43">
                                        <button type="submit" class="btn bg-gray-900 cdj8c cg0jr ch8z9 cilvw cyn7a">Save</button>   
                                    </div>
                                    <div class="ctq43">
                                        <a href="{{ route('admin.articles.index') }}" class="btn bg-white border-gray-200 text-gray-800 cc0oq cghq3 cspbm c0zkc c2vpa">Cancel</a> 
                                    </div>
                                </div>
                            </div>
                            
                        </form>

                    </div>

                </div>

<script>
let blockCounter = 0;

function previewThumbnail(event) {
    const preview = document.getElementById('thumbnailPreview');
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            preview.innerHTML = `<img src="${e.target.result}" class="w-32 h-32 object-cover rounded">`;
        }
        reader.readAsDataURL(file);
    }
}

function addHashtag() {
    const container = document.getElementById('hashtagsContainer');
    const div = document.createElement('div');
    div.className = 'flex gap-2 mb-2';
    div.innerHTML = `
        <input name="hashtags[]" class="caqf9 c6btv flex-1" type="text" required>
        <button type="button" onclick="this.parentElement.remove()" class="text-red-500 hover:text-red-600">Remove</button>
    `;
    container.appendChild(div);
}

function toggleContentOptions() {
    const options = document.getElementById('contentOptions');
    options.style.display = options.style.display === 'none' ? 'flex' : 'none';
}

function addContentBlock(type) {
    const container = document.getElementById('contentBlocks');
    const blockId = `block_${blockCounter++}`;
    const div = document.createElement('div');
    div.className = 'bg-white c2vpa c1hly c5vqk clxb7';
    div.setAttribute('draggable', 'true');
    div.setAttribute('data-block-id', blockId);
    div.ondragstart = handleDragStart;
    div.ondragover = handleDragOver;
    div.ondrop = handleDrop;
    div.ondragend = handleDragEnd;

    let content = '';
    
    if (type === 'paragraph') {
        content = `
            <div class="c2g1r cv0ns cnlq0">
                <div class="cjav5 c2rn6 cz7b0 cxg65 cbw8w">
                    <div class="flex items-center">
                        <button type="button" class="mr-2 c8uzu drag-handle">
                            <span class="cn8jz">Drag</span>
                            <svg class="w-3 h-3 ca2tk cyq9w" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 1h12v2H0V1Zm0 4h12v2H0V5Zm0 4h12v2H0V9Z" fill-rule="evenodd"></path>
                            </svg>
                        </button>
                        <label class="flex items-center">
                            <span class="text-gray-800 dark:text-gray-100 c225f c1k3n c8bkw">Paragraf</span>
                        </label>
                    </div>
                </div>
                <div class="flex items-center justify-end cp3jk">
                    <button type="button" onclick="removeBlock(this)" class="casia cz0f0 cmpw7 cdqku">
                        <svg class="cbm9w czr3n coqgc" width="16" height="16" viewBox="0 0 16 16">
                            <path d="M5 7h2v6H5V7zm4 0h2v6H9V7zm3-6v2h4v2h-1v10c0 .6-.4 1-1 1H2c-.6 0-1-.4-1-1V5H0V3h4V1c0-.6.4-1 1-1h6c.6 0 1 .4 1 1zM6 2v1h4V2H6zm7 3H3v9h10V5z"></path>
                        </svg>
                    </button>
                </div>
            </div>
            <div>
                <input type="hidden" name="content[${blockId}][type]" value="paragraph">
                <div>
                    <textarea name="content[${blockId}][text]" class="caqf9 c6btv" rows="4" placeholder="Something cool..." required></textarea>
                </div>
            </div>
        `;
    } else if (type === 'point') {
        content = `
            <div class="c2g1r cv0ns cnlq0">
                <div class="cjav5 c2rn6 cz7b0 cxg65 cbw8w">
                    <div class="flex items-center">
                        <button type="button" class="mr-2 c8uzu drag-handle">
                            <span class="cn8jz">Drag</span>
                            <svg class="w-3 h-3 ca2tk cyq9w" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 1h12v2H0V1Zm0 4h12v2H0V5Zm0 4h12v2H0V9Z" fill-rule="evenodd"></path>
                            </svg>
                        </button>
                        <label class="flex items-center">
                            <span class="text-gray-800 dark:text-gray-100 c225f c1k3n c8bkw">Point</span>
                        </label>
                    </div>
                </div>
                <div class="flex items-center justify-end cp3jk">
                    <button type="button" onclick="addPoint('${blockId}')" class="mr-2">
                        <svg class="w-3 h-3 cbm9w" viewBox="0 0 12 12">
                            <path d="M11 5H7V1a1 1 0 0 0-2 0v4H1a1 1 0 0 0 0 2h4v4a1 1 0 0 0 2 0V7h4a1 1 0 0 0 0-2Z"></path>
                        </svg>
                    </button>
                    <button type="button" onclick="removeBlock(this)" class="casia cz0f0 cmpw7 cdqku">
                        <svg class="cbm9w czr3n coqgc" width="16" height="16" viewBox="0 0 16 16">
                            <path d="M5 7h2v6H5V7zm4 0h2v6H9V7zm3-6v2h4v2h-1v10c0 .6-.4 1-1 1H2c-.6 0-1-.4-1-1V5H0V3h4V1c0-.6.4-1 1-1h6c.6 0 1 .4 1 1zM6 2v1h4V2H6zm7 3H3v9h10V5z"></path>
                        </svg>
                    </button>
                </div>
            </div>
            <div id="points_${blockId}">
                <input type="hidden" name="content[${blockId}][type]" value="point">
                <div class="flex gap-2 mb-2">
                    <div class="cm84d flex-1">
                        <input name="content[${blockId}][points][]" class="caqf9 c6btv cxbw2" type="text" required>
                        <div class="flex items-center pointer-events-none c29dn cqdkw cini7">
                            <span class="text-sm cmpw7 cdqku c1k3n cb2br">Point</span>
                        </div>
                    </div>
                    <button type="button" onclick="this.parentElement.remove()" class="casia cz0f0 cmpw7 cdqku">
                        <svg class="cbm9w czr3n coqgc" width="16" height="16" viewBox="0 0 16 16">
                            <path d="M5 7h2v6H5V7zm4 0h2v6H9V7zm3-6v2h4v2h-1v10c0 .6-.4 1-1 1H2c-.6 0-1-.4-1-1V5H0V3h4V1c0-.6.4-1 1-1h6c.6 0 1 .4 1 1zM6 2v1h4V2H6zm7 3H3v9h10V5z"></path>
                        </svg>
                    </button>
                </div>
            </div>
        `;
    } else if (type === 'photo') {
        content = `
            <div class="c2g1r cv0ns cnlq0">
                <div class="cjav5 c2rn6 cz7b0 cxg65 cbw8w">
                    <div class="flex items-center">
                        <button type="button" class="mr-2 c8uzu drag-handle">
                            <span class="cn8jz">Drag</span>
                            <svg class="w-3 h-3 ca2tk cyq9w" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 1h12v2H0V1Zm0 4h12v2H0V5Zm0 4h12v2H0V9Z" fill-rule="evenodd"></path>
                            </svg>
                        </button>
                        <label class="flex items-center">
                            <span class="text-gray-800 dark:text-gray-100 c225f c1k3n c8bkw">Photo</span>
                        </label>
                    </div>
                </div>
                <div class="flex items-center justify-end cp3jk">
                    <button type="button" onclick="removeBlock(this)" class="casia cz0f0 cmpw7 cdqku">
                        <svg class="cbm9w czr3n coqgc" width="16" height="16" viewBox="0 0 16 16">
                            <path d="M5 7h2v6H5V7zm4 0h2v6H9V7zm3-6v2h4v2h-1v10c0 .6-.4 1-1 1H2c-.6 0-1-.4-1-1V5H0V3h4V1c0-.6.4-1 1-1h6c.6 0 1 .4 1 1zM6 2v1h4V2H6zm7 3H3v9h10V5z"></path>
                        </svg>
                    </button>
                </div>
            </div>
            <div>
                <input type="hidden" name="content[${blockId}][type]" value="photo">
                <input type="file" name="content[${blockId}][file]" class="caqf9 c6btv" accept="image/*" onchange="previewPhoto(event, '${blockId}')">
                <div id="photoPreview_${blockId}" class="mt-2"></div>
            </div>
        `;
    }

    div.innerHTML = content;
    container.appendChild(div);
    
    document.getElementById('contentOptions').style.display = 'none';
}

function removeBlock(btn) {
    btn.closest('.bg-white').remove();
}

function addPoint(blockId) {
    const container = document.getElementById(`points_${blockId}`);
    const div = document.createElement('div');
    div.className = 'flex gap-2 mb-2';
    div.innerHTML = `
        <div class="cm84d flex-1">
            <input name="content[${blockId}][points][]" class="caqf9 c6btv cxbw2" type="text" required>
            <div class="flex items-center pointer-events-none c29dn cqdkw cini7">
                <span class="text-sm cmpw7 cdqku c1k3n cb2br">Point</span>
            </div>
        </div>
        <button type="button" onclick="this.parentElement.remove()" class="casia cz0f0 cmpw7 cdqku">
            <svg class="cbm9w czr3n coqgc" width="16" height="16" viewBox="0 0 16 16">
                <path d="M5 7h2v6H5V7zm4 0h2v6H9V7zm3-6v2h4v2h-1v10c0 .6-.4 1-1 1H2c-.6 0-1-.4-1-1V5H0V3h4V1c0-.6.4-1 1-1h6c.6 0 1 .4 1 1zM6 2v1h4V2H6zm7 3H3v9h10V5z"></path>
            </svg>
        </button>
    `;
    container.appendChild(div);
}

function previewPhoto(event, blockId) {
    const preview = document.getElementById(`photoPreview_${blockId}`);
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            preview.innerHTML = `<img src="${e.target.result}" class="w-48 h-48 object-cover rounded">`;
        }
        reader.readAsDataURL(file);
    }
}

// Drag and Drop functionality
let draggedElement = null;

function handleDragStart(e) {
    draggedElement = this;
    this.style.opacity = '0.4';
    e.dataTransfer.effectAllowed = 'move';
}

function handleDragOver(e) {
    if (e.preventDefault) {
        e.preventDefault();
    }
    e.dataTransfer.dropEffect = 'move';
    return false;
}

function handleDrop(e) {
    if (e.stopPropagation) {
        e.stopPropagation();
    }
    
    if (draggedElement !== this) {
        const container = document.getElementById('contentBlocks');
        const allBlocks = [...container.children];
        const draggedIndex = allBlocks.indexOf(draggedElement);
        const targetIndex = allBlocks.indexOf(this);
        
        if (draggedIndex < targetIndex) {
            this.parentNode.insertBefore(draggedElement, this.nextSibling);
        } else {
            this.parentNode.insertBefore(draggedElement, this);
        }
    }
    
    return false;
}

function handleDragEnd(e) {
    this.style.opacity = '1';
}
</script>

@endsection
