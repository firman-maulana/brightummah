@extends('layouts.main')
@section('content')

<!-- Hero Section -->
<section class="bg-gradient-to-br from-[#16a34a] to-[#15803d] py-16 text-white">
    <div class="max-w-[1200px] mx-auto px-8">
        <h1 class="text-[2.5rem] font-bold mb-3">Program {{ $jenjang->jenjang }}</h1>
        <p class="text-lg opacity-95">{{ $jenjang->nama_program }}</p>
    </div>
</section>

<section class="py-16 bg-white">
    <div class="max-w-[1200px] mx-auto px-8">
        <!-- Description -->
        <div class="mb-16">
            <h2 class="text-2xl font-bold text-[#1a1a1a] mb-4">Tentang Program</h2>
            <div class="prose max-w-none">
                <p class="text-[#737373] leading-relaxed mb-4">
                    Program {{ $jenjang->detailjenjang }} kami dirancang khusus untuk membangun fondasi pendidikan yang kuat dengan mengintegrasikan kurikulum nasional dan nilai-nilai Islam. Kami fokus pada pengembangan karakter, kemampuan akademik, dan keterampilan sosial siswa melalui metode pembelajaran yang interaktif dan menyenangkan.
                </p>
                <p class="text-[#737373] leading-relaxed">
                    {{ $jenjang->deskripsi }}
                </p>
            </div>
        </div>
    </div>
</section>

@endsection