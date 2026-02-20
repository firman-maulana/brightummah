@extends('admin.layouts.sidebar')
@section('content')

<div class="ch3yp cnbwt cs7xl clu2m c6btv clbq0 cxsfz">

                    <!-- Smaller container -->
                    <div class="cbb0u clu2m">

                        <!-- Page header -->
                        <div class="c2g1r cwnq4 cnlq0 cgd7w">
    
                            <!-- Left: Title -->
                            <div class="c2rn6 cdiog">
                                <h1 class="text-gray-800 dark:text-gray-100 font-bold c459m cbtcb">Edit Articles</h1>
                            </div>
    
                        </div>

                        <!-- Tasks -->
                        <form action="{{ route('admin.articles.update', $article->id) }}" method="POST" enctype="multipart/form-data" id="articleForm">
                            @csrf
                            @method('PUT')
                            <div class="cmxzb">

                                    <div>
                                        <!-- Start -->
                                        <div>
                                            <label class="block text-sm c1k3n cu6vl" for="title">Judul</label>
                                            <input id="title" name="title" class="caqf9 c6btv" type="text" placeholder="Masukkan judul..." required value="{{ old('title', $article->title) }}">
                                            @error('title')
                                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <!-- End -->
                                    </div>
                                    <div>
                                        <!-- Start -->
                                        <div>
                                            <label class="block text-sm c1k3n cu6vl" for="thumbnail">Thumbnail</label>
                                            <input id="thumbnail" name="thumbnail" class="caqf9 c6btv" type="file" accept="image/*" onchange="previewThumbnail(event)">
                                            <div id="thumbnailPreview" class="mt-2">
                                                <div class="relative inline-block">
                                                    <img src="{{ asset('storage/' . $article->thumbnail) }}" class="w-32 h-32 object-cover rounded">
                                                    <button type="button" onclick="removeThumbnail()" class="absolute -top-2 -right-2 bg-red-500 text-white rounded-full w-6 h-6 flex items-center justify-center hover:bg-red-600" style="cursor: pointer;">
                                                        <svg class="w-3 h-3" viewBox="0 0 12 12" fill="currentColor">
                                                            <path d="M10.707 1.293a1 1 0 0 0-1.414 0L6 4.586 2.707 1.293a1 1 0 0 0-1.414 1.414L4.586 6 1.293 9.293a1 1 0 1 0 1.414 1.414L6 7.414l3.293 3.293a1 1 0 0 0 1.414-1.414L7.414 6l3.293-3.293a1 1 0 0 0 0-1.414z"/>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
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
                                            <input id="hashtagInput" class="caqf9 c6btv mb-2" type="text" placeholder="Type hashtag and press Enter...">
                                            <div id="hashtagsDisplay" class="flex flex-wrap gap-2 mt-2"></div>
                                            <div id="hashtagsContainer" style="display: none;"></div>
                                            @error('hashtags')
                                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <!-- End -->
                                    </div>
    
    
                            </div>

                            <!-- Group 1 -->
                            <div style="margin-top: 48px;">
                                <div class="cweej" id="contentBlocks">

                                    @foreach($article->content as $index => $block)
                                        @php
                                            $blockId = "block_existing_{$index}";
                                        @endphp
                                        
                                        <div class="bg-white c2vpa c1hly c5vqk clxb7" draggable="true" data-block-id="{{ $blockId }}">
                                            @if($block['type'] === 'paragraph')
                                                <div class="flex items-center justify-between w-full">
                                                    <div class="flex items-center gap-2">
                                                        <button type="button" class="c8uzu drag-handle flex-shrink-0">
                                                            <span class="cn8jz">Drag</span>
                                                            <svg class="w-3 h-3 ca2tk cyq9w" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M0 1h12v2H0V1Zm0 4h12v2H0V5Zm0 4h12v2H0V9Z" fill-rule="evenodd"></path>
                                                            </svg>
                                                        </button>
                                                        <label class="flex items-center">
                                                            <span class="text-gray-800 dark:text-gray-100 c225f c1k3n c8bkw">Paragraf</span>
                                                        </label>
                                                    </div>
                                                    <button type="button" onclick="removeBlock(this)" class="casia cz0f0 cmpw7 cdqku flex-shrink-0" style="margin-left: auto;">
                                                        <svg class="cbm9w czr3n coqgc" width="16" height="16" viewBox="0 0 16 16">
                                                            <path d="M5 7h2v6H5V7zm4 0h2v6H9V7zm3-6v2h4v2h-1v10c0 .6-.4 1-1 1H2c-.6 0-1-.4-1-1V5H0V3h4V1c0-.6.4-1 1-1h6c.6 0 1 .4 1 1zM6 2v1h4V2H6zm7 3H3v9h10V5z"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div style="margin-top: 16px;">
                                                    <input type="hidden" name="content[{{ $blockId }}][type]" value="paragraph">
                                                    <div>
                                                        <textarea name="content[{{ $blockId }}][text]" class="caqf9 c6btv" rows="4" placeholder="Something cool..." required>{{ $block['text'] }}</textarea>
                                                    </div>
                                                </div>
                                            @elseif($block['type'] === 'point')
                                                <div class="flex items-center justify-between w-full">
                                                    <div class="flex items-center gap-2">
                                                        <button type="button" class="c8uzu drag-handle flex-shrink-0">
                                                            <span class="cn8jz">Drag</span>
                                                            <svg class="w-3 h-3 ca2tk cyq9w" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M0 1h12v2H0V1Zm0 4h12v2H0V5Zm0 4h12v2H0V9Z" fill-rule="evenodd"></path>
                                                            </svg>
                                                        </button>
                                                        <label class="flex items-center">
                                                            <span class="text-gray-800 dark:text-gray-100 c225f c1k3n c8bkw">Point</span>
                                                        </label>
                                                    </div>
                                                    <div class="flex items-center flex-shrink-0" style="margin-left: auto; gap: 20px;">
                                                        <button type="button" onclick="addPoint('{{ $blockId }}')" class="flex-shrink-0">
                                                            <svg class="w-3 h-3 cbm9w" viewBox="0 0 12 12">
                                                                <path d="M11 5H7V1a1 1 0 0 0-2 0v4H1a1 1 0 0 0 0 2h4v4a1 1 0 0 0 2 0V7h4a1 1 0 0 0 0-2Z"></path>
                                                            </svg>
                                                        </button>
                                                        <button type="button" onclick="removeBlock(this)" class="casia cz0f0 cmpw7 cdqku flex-shrink-0">
                                                            <svg class="cbm9w czr3n coqgc" width="16" height="16" viewBox="0 0 16 16">
                                                                <path d="M5 7h2v6H5V7zm4 0h2v6H9V7zm3-6v2h4v2h-1v10c0 .6-.4 1-1 1H2c-.6 0-1-.4-1-1V5H0V3h4V1c0-.6.4-1 1-1h6c.6 0 1 .4 1 1zM6 2v1h4V2H6zm7 3H3v9h10V5z"></path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div id="points_{{ $blockId }}" style="margin-top: 16px;">
                                                    <input type="hidden" name="content[{{ $blockId }}][type]" value="point">
                                                    @foreach($block['points'] as $point)
                                                        <div class="flex items-center justify-between" style="margin-bottom: 16px;">
                                                            <input name="content[{{ $blockId }}][points][]" class="caqf9 c6btv" style="max-width: calc(100% - 80px); width: 100%; flex: 1 1 auto; min-width: 0;" type="text" placeholder="Point" required value="{{ $point }}">
                                                            <button type="button" onclick="this.parentElement.remove()" class="casia cz0f0 cmpw7 cdqku flex-shrink-0" style="margin-left: 12px;">
                                                                <svg class="cbm9w czr3n coqgc" width="16" height="16" viewBox="0 0 16 16">
                                                                    <path d="M5 7h2v6H5V7zm4 0h2v6H9V7zm3-6v2h4v2h-1v10c0 .6-.4 1-1 1H2c-.6 0-1-.4-1-1V5H0V3h4V1c0-.6.4-1 1-1h6c.6 0 1 .4 1 1zM6 2v1h4V2H6zm7 3H3v9h10V5z"></path>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            @elseif($block['type'] === 'photo')
                                                <div class="flex items-center justify-between w-full">
                                                    <div class="flex items-center gap-2">
                                                        <button type="button" class="c8uzu drag-handle flex-shrink-0">
                                                            <span class="cn8jz">Drag</span>
                                                            <svg class="w-3 h-3 ca2tk cyq9w" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M0 1h12v2H0V1Zm0 4h12v2H0V5Zm0 4h12v2H0V9Z" fill-rule="evenodd"></path>
                                                            </svg>
                                                        </button>
                                                        <label class="flex items-center">
                                                            <span class="text-gray-800 dark:text-gray-100 c225f c1k3n c8bkw">Photo</span>
                                                        </label>
                                                    </div>
                                                    <button type="button" onclick="removeBlock(this)" class="casia cz0f0 cmpw7 cdqku flex-shrink-0" style="margin-left: auto;">
                                                        <svg class="cbm9w czr3n coqgc" width="16" height="16" viewBox="0 0 16 16">
                                                            <path d="M5 7h2v6H5V7zm4 0h2v6H9V7zm3-6v2h4v2h-1v10c0 .6-.4 1-1 1H2c-.6 0-1-.4-1-1V5H0V3h4V1c0-.6.4-1 1-1h6c.6 0 1 .4 1 1zM6 2v1h4V2H6zm7 3H3v9h10V5z"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div style="margin-top: 16px;">
                                                    <input type="hidden" name="content[{{ $blockId }}][type]" value="photo">
                                                    @if(isset($block['path']))
                                                        <input type="hidden" name="content[{{ $blockId }}][path]" value="{{ $block['path'] }}">
                                                    @endif
                                                    <input type="file" name="content[{{ $blockId }}][file]" class="caqf9 c6btv" accept="image/*" onchange="previewPhoto(event, '{{ $blockId }}')">
                                                    <div id="photoPreview_{{ $blockId }}" class="mt-2">
                                                        @if(isset($block['path']))
                                                            <div class="relative inline-block">
                                                                <img src="{{ asset('storage/' . $block['path']) }}" class="w-48 h-48 object-cover rounded">
                                                                <button type="button" onclick="removePhoto('{{ $blockId }}')" class="absolute -top-2 -right-2 bg-red-500 text-white rounded-full w-6 h-6 flex items-center justify-center hover:bg-red-600" style="cursor: pointer;">
                                                                    <svg class="w-3 h-3" viewBox="0 0 12 12" fill="currentColor">
                                                                        <path d="M10.707 1.293a1 1 0 0 0-1.414 0L6 4.586 2.707 1.293a1 1 0 0 0-1.414 1.414L4.586 6 1.293 9.293a1 1 0 1 0 1.414 1.414L6 7.414l3.293 3.293a1 1 0 0 0 1.414-1.414L7.414 6l3.293-3.293a1 1 0 0 0 0-1.414z"/>
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    @endforeach

                                </div>
                                
                                <!-- Add Content Button (moved here) -->
                                <div style="margin-top: 48px;">
                                    <div class="flex flex-col" style="gap: 24px;">
                                        <button type="button" onclick="toggleContentOptions()" class="flex justify-center items-center rounded-full bg-white border border-gray-200 text-violet-500 cc0oq cghq3 cspbm c2vpa cxxol c5vqk c8bkw cex0k c6oul w-fit">
                                            <span class="cn8jz">Add new user</span>
                                            <svg class="w-3 h-3 cbm9w" viewBox="0 0 12 12">
                                                <path d="M11 5H7V1a1 1 0 0 0-2 0v4H1a1 1 0 0 0 0 2h4v4a1 1 0 0 0 2 0V7h4a1 1 0 0 0 0-2Z"></path>
                                            </svg>
                                        </button>
                                        <div class="flex flex-wrap items-center" style="gap: 20px; display: none;" id="contentOptions">
                                    
                                            <div>
                                                <!-- Start -->
                                                <label class="flex items-center cursor-pointer">
                                                    <input type="radio" name="content-type-selector" class="cgd3c" onclick="addContentBlock('paragraph')">
                                                    <span class="text-sm c8bkw">Paragraf</span>
                                                </label>
                                                <!-- End -->
                                            </div>
                                    
                                            <div>
                                                <!-- Start -->
                                                <label class="flex items-center cursor-pointer">
                                                    <input type="radio" name="content-type-selector" class="cgd3c" onclick="addContentBlock('point')">
                                                    <span class="text-sm c8bkw">Point</span>
                                                </label>
                                                <!-- End -->
                                            </div>
                                            <div>
                                                <!-- Start -->
                                                <label class="flex items-center cursor-pointer">
                                                    <input type="radio" name="content-type-selector" class="cgd3c" onclick="addContentBlock('photo')">
                                                    <span class="text-sm c8bkw">Photo</span>
                                                </label>
                                                <!-- End -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr class="cghq3 cbv37 cr4kg cf7n6">

                            
                            <div>
                                <div class="flex flex-wrap items-center cnnms">
                                    <div class="ctq43">
                                        <button type="submit" class="btn bg-gray-900 cdj8c cg0jr ch8z9 cilvw cyn7a">Update</button>   
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
let blockCounter = {{ count($article->content) }};

let hashtags = @json($article->hashtags ?? []);

// Hashtag functionality
document.addEventListener('DOMContentLoaded', function() {
    const hashtagInput = document.getElementById('hashtagInput');
    
    // Render existing hashtags
    renderHashtags();
    
    hashtagInput.addEventListener('keydown', function(e) {
        if (e.key === 'Enter') {
            e.preventDefault();
            const value = this.value.trim();
            
            if (value && !hashtags.includes(value)) {
                hashtags.push(value);
                renderHashtags();
                this.value = '';
            }
        }
    });
});

function renderHashtags() {
    const display = document.getElementById('hashtagsDisplay');
    const container = document.getElementById('hashtagsContainer');
    
    // Clear both containers
    display.innerHTML = '';
    container.innerHTML = '';
    
    // Render badges
    hashtags.forEach((tag, index) => {
        // Create badge
        const badge = document.createElement('div');
        badge.className = 'ctq43';
        badge.innerHTML = `
            <div class="inline-flex rounded-full c1lu4 c19il cydwr c1k3n ch4gv c1iho cwn3v cursor-pointer hover:opacity-80" onclick="removeHashtag(${index})">
                ${tag}
            </div>
        `;
        display.appendChild(badge);
        
        // Create hidden input
        const input = document.createElement('input');
        input.type = 'hidden';
        input.name = 'hashtags[]';
        input.value = tag;
        container.appendChild(input);
    });
}

function removeHashtag(index) {
    hashtags.splice(index, 1);
    renderHashtags();
}

function previewThumbnail(event) {
    const preview = document.getElementById('thumbnailPreview');
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            preview.innerHTML = `
                <div class="relative inline-block">
                    <img src="${e.target.result}" class="w-32 h-32 object-cover rounded">
                    <button type="button" onclick="removeThumbnail()" class="absolute -top-2 -right-2 bg-red-500 text-white rounded-full w-6 h-6 flex items-center justify-center hover:bg-red-600" style="cursor: pointer;">
                        <svg class="w-3 h-3" viewBox="0 0 12 12" fill="currentColor">
                            <path d="M10.707 1.293a1 1 0 0 0-1.414 0L6 4.586 2.707 1.293a1 1 0 0 0-1.414 1.414L4.586 6 1.293 9.293a1 1 0 1 0 1.414 1.414L6 7.414l3.293 3.293a1 1 0 0 0 1.414-1.414L7.414 6l3.293-3.293a1 1 0 0 0 0-1.414z"/>
                        </svg>
                    </button>
                </div>
            `;
        }
        reader.readAsDataURL(file);
    }
}

function removeThumbnail() {
    const preview = document.getElementById('thumbnailPreview');
    const input = document.getElementById('thumbnail');
    preview.innerHTML = '';
    input.value = '';
}

function toggleContentOptions() {
    const options = document.getElementById('contentOptions');
    options.style.display = options.style.display === 'none' ? 'flex' : 'none';
}

function addContentBlock(type) {
    // Hide options immediately to prevent double clicks
    const options = document.getElementById('contentOptions');
    options.style.display = 'none';
    
    // Uncheck all radio buttons
    const radios = document.querySelectorAll('input[name="content-type-selector"]');
    radios.forEach(radio => radio.checked = false);
    
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
            <div class="flex items-center justify-between w-full">
                <div class="flex items-center gap-2">
                    <button type="button" class="c8uzu drag-handle flex-shrink-0">
                        <span class="cn8jz">Drag</span>
                        <svg class="w-3 h-3 ca2tk cyq9w" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 1h12v2H0V1Zm0 4h12v2H0V5Zm0 4h12v2H0V9Z" fill-rule="evenodd"></path>
                        </svg>
                    </button>
                    <label class="flex items-center">
                        <span class="text-gray-800 dark:text-gray-100 c225f c1k3n c8bkw">Paragraf</span>
                    </label>
                </div>
                <button type="button" onclick="removeBlock(this)" class="casia cz0f0 cmpw7 cdqku flex-shrink-0" style="margin-left: auto;">
                    <svg class="cbm9w czr3n coqgc" width="16" height="16" viewBox="0 0 16 16">
                        <path d="M5 7h2v6H5V7zm4 0h2v6H9V7zm3-6v2h4v2h-1v10c0 .6-.4 1-1 1H2c-.6 0-1-.4-1-1V5H0V3h4V1c0-.6.4-1 1-1h6c.6 0 1 .4 1 1zM6 2v1h4V2H6zm7 3H3v9h10V5z"></path>
                    </svg>
                </button>
            </div>
            <div style="margin-top: 16px;">
                <input type="hidden" name="content[${blockId}][type]" value="paragraph">
                <div>
                    <textarea name="content[${blockId}][text]" class="caqf9 c6btv" rows="4" placeholder="Masukkan paragraf..." required></textarea>
                </div>
            </div>
        `;
    } else if (type === 'point') {
        content = `
            <div class="flex items-center justify-between w-full">
                <div class="flex items-center gap-2">
                    <button type="button" class="c8uzu drag-handle flex-shrink-0">
                        <span class="cn8jz">Drag</span>
                        <svg class="w-3 h-3 ca2tk cyq9w" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 1h12v2H0V1Zm0 4h12v2H0V5Zm0 4h12v2H0V9Z" fill-rule="evenodd"></path>
                        </svg>
                    </button>
                    <label class="flex items-center">
                        <span class="text-gray-800 dark:text-gray-100 c225f c1k3n c8bkw">Point</span>
                    </label>
                </div>
                <div class="flex items-center flex-shrink-0" style="margin-left: auto; gap: 20px;">
                    <button type="button" onclick="addPoint('${blockId}')" class="flex-shrink-0">
                        <svg class="w-3 h-3 cbm9w" viewBox="0 0 12 12">
                            <path d="M11 5H7V1a1 1 0 0 0-2 0v4H1a1 1 0 0 0 0 2h4v4a1 1 0 0 0 2 0V7h4a1 1 0 0 0 0-2Z"></path>
                        </svg>
                    </button>
                    <button type="button" onclick="removeBlock(this)" class="casia cz0f0 cmpw7 cdqku flex-shrink-0">
                        <svg class="cbm9w czr3n coqgc" width="16" height="16" viewBox="0 0 16 16">
                            <path d="M5 7h2v6H5V7zm4 0h2v6H9V7zm3-6v2h4v2h-1v10c0 .6-.4 1-1 1H2c-.6 0-1-.4-1-1V5H0V3h4V1c0-.6.4-1 1-1h6c.6 0 1 .4 1 1zM6 2v1h4V2H6zm7 3H3v9h10V5z"></path>
                        </svg>
                    </button>
                </div>
            </div>
            <div id="points_${blockId}" style="margin-top: 16px;">
                <input type="hidden" name="content[${blockId}][type]" value="point">
                <div class="flex items-center justify-between" style="margin-bottom: 16px;">
                    <input name="content[${blockId}][points][]" class="caqf9 c6btv" style="max-width: calc(100% - 80px); width: 100%; flex: 1 1 auto; min-width: 0;" type="text" placeholder="Point" required>
                    <button type="button" onclick="this.parentElement.remove()" class="casia cz0f0 cmpw7 cdqku flex-shrink-0" style="margin-left: 12px;">
                        <svg class="cbm9w czr3n coqgc" width="16" height="16" viewBox="0 0 16 16">
                            <path d="M5 7h2v6H5V7zm4 0h2v6H9V7zm3-6v2h4v2h-1v10c0 .6-.4 1-1 1H2c-.6 0-1-.4-1-1V5H0V3h4V1c0-.6.4-1 1-1h6c.6 0 1 .4 1 1zM6 2v1h4V2H6zm7 3H3v9h10V5z"></path>
                        </svg>
                    </button>
                </div>
            </div>
        `;
    } else if (type === 'photo') {
        content = `
            <div class="flex items-center justify-between w-full">
                <div class="flex items-center gap-2">
                    <button type="button" class="c8uzu drag-handle flex-shrink-0">
                        <span class="cn8jz">Drag</span>
                        <svg class="w-3 h-3 ca2tk cyq9w" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 1h12v2H0V1Zm0 4h12v2H0V5Zm0 4h12v2H0V9Z" fill-rule="evenodd"></path>
                        </svg>
                    </button>
                    <label class="flex items-center">
                        <span class="text-gray-800 dark:text-gray-100 c225f c1k3n c8bkw">Photo</span>
                    </label>
                </div>
                <button type="button" onclick="removeBlock(this)" class="casia cz0f0 cmpw7 cdqku flex-shrink-0" style="margin-left: auto;">
                    <svg class="cbm9w czr3n coqgc" width="16" height="16" viewBox="0 0 16 16">
                        <path d="M5 7h2v6H5V7zm4 0h2v6H9V7zm3-6v2h4v2h-1v10c0 .6-.4 1-1 1H2c-.6 0-1-.4-1-1V5H0V3h4V1c0-.6.4-1 1-1h6c.6 0 1 .4 1 1zM6 2v1h4V2H6zm7 3H3v9h10V5z"></path>
                    </svg>
                </button>
            </div>
            <div style="margin-top: 16px;">
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
    div.className = 'flex items-center justify-between';
    div.style.marginBottom = '16px';
    div.innerHTML = `
        <input name="content[${blockId}][points][]" class="caqf9 c6btv" style="max-width: calc(100% - 80px); width: 100%; flex: 1 1 auto; min-width: 0;" type="text" placeholder="Point" required>
        <button type="button" onclick="this.parentElement.remove()" class="casia cz0f0 cmpw7 cdqku flex-shrink-0" style="margin-left: 12px;">
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
            preview.innerHTML = `
                <div class="relative inline-block">
                    <img src="${e.target.result}" class="w-48 h-48 object-cover rounded">
                    <button type="button" onclick="removePhoto('${blockId}')" class="absolute -top-2 -right-2 bg-red-500 text-white rounded-full w-6 h-6 flex items-center justify-center hover:bg-red-600" style="cursor: pointer;">
                        <svg class="w-3 h-3" viewBox="0 0 12 12" fill="currentColor">
                            <path d="M10.707 1.293a1 1 0 0 0-1.414 0L6 4.586 2.707 1.293a1 1 0 0 0-1.414 1.414L4.586 6 1.293 9.293a1 1 0 1 0 1.414 1.414L6 7.414l3.293 3.293a1 1 0 0 0 1.414-1.414L7.414 6l3.293-3.293a1 1 0 0 0 0-1.414z"/>
                        </svg>
                    </button>
                </div>
            `;
        }
        reader.readAsDataURL(file);
    }
}

function removePhoto(blockId) {
    const preview = document.getElementById(`photoPreview_${blockId}`);
    const input = document.querySelector(`input[name="content[${blockId}][file]"]`);
    preview.innerHTML = '';
    if (input) {
        input.value = '';
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

// Initialize drag and drop for existing blocks
document.addEventListener('DOMContentLoaded', function() {
    const blocks = document.querySelectorAll('#contentBlocks .bg-white');
    blocks.forEach(block => {
        block.ondragstart = handleDragStart;
        block.ondragover = handleDragOver;
        block.ondrop = handleDrop;
        block.ondragend = handleDragEnd;
    });
});
</script>

@endsection
