@php
    $title = 'Bright Ummah Academy - Create Article';
@endphp
@extends('admin.layouts.secondsidebar')
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
                                            <label class="block text-sm c1k3n cu6vl dark:text-gray-400" for="title">Judul</label>
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
                                            <label class="block text-sm c1k3n cu6vl dark:text-gray-400" for="thumbnail">Thumbnail</label>
                                            <input id="thumbnail" name="thumbnail" class="caqf9 c6btv" type="file" accept="image/*" required onchange="previewThumbnail(event)">
                                            <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">JPG, PNG, JPEG. Maksimal 10 MB.</p>
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
                                            <label class="block text-sm c1k3n cu6vl dark:text-gray-400" for="hashtag">Hastag</label>
                                            <input id="hashtagInput" class="caqf9 c6btv mb-2" type="text" placeholder="Type hashtag and press Enter...">
                                            <div id="hashtagsDisplay" class="flex flex-wrap gap-2 mt-2"></div>
                                            <div id="hashtagsContainer" style="display: none;"></div>
                                        </div>
                                        <!-- End -->
                                    </div>
    
    
                            </div>

                            <!-- Group 1 -->
                            <div style="margin-top: 48px;">
                                <div class="cweej" id="contentBlocks">
    
                                    <!-- Content blocks will be added here dynamically -->

                                </div>
                                
                                <!-- Add Content Button (moved here) -->
                                <div style="margin-top: 48px;">
                                    <div class="flex flex-col" style="gap: 24px;">
                                        <button type="button" onclick="toggleContentOptions()" class="flex justify-center items-center rounded-full bg-white border border-gray-200 text-violet-500 dark:text-white cc0oq cghq3 cspbm c2vpa cxxol c5vqk c8bkw cex0k c6oul w-fit">
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
                                                    <span class="text-sm c8bkw dark:text-gray-400">Paragraf</span>
                                                </label>
                                                <!-- End -->
                                            </div>
                                    
                                            <div>
                                                <!-- Start -->
                                                <label class="flex items-center cursor-pointer">
                                                    <input type="radio" name="content-type-selector" class="cgd3c" onclick="addContentBlock('point')">
                                                    <span class="text-sm c8bkw dark:text-gray-400">Point</span>
                                                </label>
                                                <!-- End -->
                                            </div>
                                            <div>
                                                <!-- Start -->
                                                <label class="flex items-center cursor-pointer">
                                                    <input type="radio" name="content-type-selector" class="cgd3c" onclick="addContentBlock('photo')">
                                                    <span class="text-sm c8bkw dark:text-gray-400">Photo</span>
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
                                        <button type="submit" id="submitBtn" class="btn bg-gray-900 cpqp6 cv9uq c14v6 cha85 cbnll cqvjc cdj8c cg0jr ch8z9 cat76 cilvw cyn7a c6btv">Save</button>   
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
let hashtags = [];

// Hashtag functionality
document.addEventListener('DOMContentLoaded', function() {
    const hashtagInput = document.getElementById('hashtagInput');
    
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
    
    // Validate form after hashtag changes
    if (typeof validateForm === 'function') {
        validateForm();
    }
}

function removeHashtag(index) {
    hashtags.splice(index, 1);
    renderHashtags();
}

function previewThumbnail(event) {
    const preview = document.getElementById('thumbnailPreview');
    const input = document.getElementById('thumbnail');
    const file = event.target.files[0];
    
    if (!file) return;
    
    if (file.size > 10 * 1024 * 1024) {
        alert('Ukuran gambar maksimal 10 MB');
        input.value = '';
        return;
    }
    
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            preview.innerHTML = `
                <div style="position: relative; display: inline-block;">
                    <img src="${e.target.result}" class="rounded-lg shadow-md" style="max-width:300px; max-height:200px; object-fit: cover; display: block;">
                    <button type="button" onclick="removeThumbnail()" class="text-white rounded-full shadow-lg transition-colors" style="position: absolute; top: 8px; right: 8px; padding: 4px; z-index: 10; display: flex; align-items: center; justify-content: center; background-color: #ef4444 !important; border-radius: 50% !important; border: none; cursor: pointer; width: 24px; height: 24px;" onmouseover="this.style.backgroundColor='#dc2626'" onmouseout="this.style.backgroundColor='#ef4444'" title="Remove image">
                        <svg class="h-3 w-3" width="12" height="12" viewBox="0 0 16 16" fill="currentColor" style="color: white;">
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                        </svg>
                    </button>
                </div>
                <small class="text-muted dark:text-gray-400 block mt-2">
                    JPG, PNG, JPEG. Maksimal 10 MB.
                </small>
            `;
            input.classList.add('hidden');
            const hint = input.nextElementSibling;
            if (hint && hint.tagName === 'P') {
                hint.classList.add('hidden');
            }
        }
        reader.readAsDataURL(file);
    }
}

function removeThumbnail() {
    const preview = document.getElementById('thumbnailPreview');
    const input = document.getElementById('thumbnail');
    preview.innerHTML = '';
    input.value = '';
    input.classList.remove('hidden');
    const hint = input.nextElementSibling;
    if (hint && hint.tagName === 'P') {
        hint.classList.remove('hidden');
    }
    validateForm();
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
    div.className = 'bg-white c2vpa c1hly c5vqk clxb7 border border-gray-200 cghq3';
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
                    <button type="button" onclick="addPoint('${blockId}')" class="flex-shrink-0 dark:text-white">
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
                <input type="file" name="content[${blockId}][file]" id="photoInput_${blockId}" class="caqf9 c6btv" accept="image/*" onchange="previewPhoto(event, '${blockId}')">
                <p id="photoHint_${blockId}" class="text-xs text-gray-500 dark:text-gray-400 mt-1">JPG, PNG, JPEG. Maksimal 10 MB.</p>
                <div id="photoPreview_${blockId}" class="mt-2"></div>
            </div>
        `;
    }

    div.innerHTML = content;
    container.appendChild(div);
    
    // Validate form after adding content block
    validateForm();
}

function removeBlock(btn) {
    btn.closest('.bg-white').remove();
    validateForm();
}

function addPoint(blockId) {
    const container = document.getElementById(`points_${blockId}`);
    const div = document.createElement('div');
    div.className = 'flex items-center justify-between';
    div.style.marginBottom = '16px';
    div.innerHTML = `
        <input name="content[${blockId}][points][]" class="caqf9 c6btv" style="max-width: calc(100% - 80px); width: 100%; flex: 1 1 auto; min-width: 0;" type="text" placeholder="Point" required>
        <button type="button" onclick="this.parentElement.remove(); validateForm();" class="casia cz0f0 cmpw7 cdqku flex-shrink-0" style="margin-left: 12px;">
            <svg class="cbm9w czr3n coqgc" width="16" height="16" viewBox="0 0 16 16">
                <path d="M5 7h2v6H5V7zm4 0h2v6H9V7zm3-6v2h4v2h-1v10c0 .6-.4 1-1 1H2c-.6 0-1-.4-1-1V5H0V3h4V1c0-.6.4-1 1-1h6c.6 0 1 .4 1 1zM6 2v1h4V2H6zm7 3H3v9h10V5z"></path>
            </svg>
        </button>
    `;
    container.appendChild(div);
    
    // Add input event listener to the new point input
    const newInput = div.querySelector('input');
    newInput.addEventListener('input', validateForm);
}

function previewPhoto(event, blockId) {
    const preview = document.getElementById(`photoPreview_${blockId}`);
    const input = event.target;
    const hint = document.getElementById(`photoHint_${blockId}`);
    const file = event.target.files[0];
    
    if (!file) return;
    
    if (file.size > 10 * 1024 * 1024) {
        alert('Ukuran gambar maksimal 10 MB');
        input.value = '';
        return;
    }
    
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            preview.innerHTML = `
                <div style="position: relative; display: inline-block;">
                    <img src="${e.target.result}" class="rounded-lg shadow-md" style="max-width:300px; max-height:200px; object-fit: cover; display: block;">
                    <button type="button" onclick="removePhoto('${blockId}')" class="text-white rounded-full shadow-lg transition-colors" style="position: absolute; top: 8px; right: 8px; padding: 4px; z-index: 10; display: flex; align-items: center; justify-content: center; background-color: #ef4444 !important; border-radius: 50% !important; border: none; cursor: pointer; width: 24px; height: 24px;" onmouseover="this.style.backgroundColor='#dc2626'" onmouseout="this.style.backgroundColor='#ef4444'" title="Remove image">
                        <svg class="h-3 w-3" width="12" height="12" viewBox="0 0 16 16" fill="currentColor" style="color: white;">
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                        </svg>
                    </button>
                </div>
                <small class="text-muted dark:text-gray-400 block mt-2">
                    JPG, PNG, JPEG. Maksimal 10 MB.
                </small>
            `;
            input.classList.add('hidden');
            if (hint) {
                hint.classList.add('hidden');
            }
        }
        reader.readAsDataURL(file);
    }
}

function removePhoto(blockId) {
    const preview = document.getElementById(`photoPreview_${blockId}`);
    const input = document.getElementById(`photoInput_${blockId}`);
    const hint = document.getElementById(`photoHint_${blockId}`);
    preview.innerHTML = '';
    if (input) {
        input.value = '';
        input.classList.remove('hidden');
    }
    if (hint) {
        hint.classList.remove('hidden');
    }
    validateForm();
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

// Form validation for submit button
function validateForm() {
    const title = document.getElementById('title').value.trim();
    const thumbnailInput = document.getElementById('thumbnail');
    const thumbnailPreview = document.getElementById('thumbnailPreview');
    const hasThumbnail = thumbnailInput.files.length > 0 || thumbnailPreview.innerHTML.trim() !== '';
    const hasHashtags = hashtags.length > 0;
    const submitBtn = document.getElementById('submitBtn');
    
    // Check if ALL content blocks are filled
    const contentBlocks = document.querySelectorAll('#contentBlocks > div');
    let allContentValid = true;
    let hasAtLeastOneBlock = contentBlocks.length > 0;
    
    contentBlocks.forEach(block => {
        const type = block.querySelector('input[type="hidden"][name*="[type]"]')?.value;
        
        if (type === 'paragraph') {
            const textarea = block.querySelector('textarea');
            if (!textarea || textarea.value.trim() === '') {
                allContentValid = false;
            }
        } else if (type === 'point') {
            const pointInputs = block.querySelectorAll('input[name*="[points]"]');
            let hasEmptyPoint = false;
            pointInputs.forEach(input => {
                if (input.value.trim() === '') {
                    hasEmptyPoint = true;
                }
            });
            if (hasEmptyPoint || pointInputs.length === 0) {
                allContentValid = false;
            }
        } else if (type === 'photo') {
            const fileInput = block.querySelector('input[type="file"]');
            const photoPreview = block.querySelector('[id^="photoPreview_"]');
            if ((!fileInput || fileInput.files.length === 0) && (!photoPreview || photoPreview.innerHTML.trim() === '')) {
                allContentValid = false;
            }
        }
    });
    
    // Enable button only if all conditions are met
    if (title && hasThumbnail && hasHashtags && hasAtLeastOneBlock && allContentValid) {
        submitBtn.disabled = false;
        submitBtn.classList.remove('opacity-50', 'cursor-not-allowed');
    } else {
        submitBtn.disabled = true;
        submitBtn.classList.add('opacity-50', 'cursor-not-allowed');
    }
}

// Add event listeners for form validation
document.addEventListener('DOMContentLoaded', function() {
    const titleInput = document.getElementById('title');
    const thumbnailInput = document.getElementById('thumbnail');
    
    // Initial validation
    validateForm();
    
    // Validate on input change
    titleInput.addEventListener('input', validateForm);
    thumbnailInput.addEventListener('change', validateForm);
    
    // Observe changes in content blocks
    const contentBlocks = document.getElementById('contentBlocks');
    const observer = new MutationObserver(validateForm);
    observer.observe(contentBlocks, { childList: true, subtree: true, characterData: true });
    
    // Add input event listeners to existing and future content blocks
    contentBlocks.addEventListener('input', validateForm);
    contentBlocks.addEventListener('change', validateForm);
});
</script>

<style>
    .dark button[onclick*="addPoint"] svg,
    .dark button[onclick*="toggleContentOptions"] svg {
        fill: white !important;
    }
</style>

@endsection
