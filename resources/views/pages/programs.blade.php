@extends('layouts.main')
@section('content')

<section class="bg-white py-20">
    <div class="max-w-[1200px] mx-auto px-8">
        <div class="text-center mb-12">
            <h2 class="text-[2.5rem] font-bold text-[#1a1a1a] mb-4 tracking-[-0.5px]">Pilih Jenjang Pendidikan</h2>
            <p class="text-[1.1rem] text-[#737373] max-w-[600px] mx-auto">Program pembelajaran terstruktur untuk setiap jenjang pendidikan</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-12">
            @foreach($jenjangs as $jenjang)
            <div class="bg-white border border-[#e5e5e5] rounded-xl overflow-hidden hover:border-[#16a34a]">
                <div class="bg-gradient-to-br from-[#16a34a] to-[#15803d] py-12 px-8 text-center text-white">
                    <div class="text-[3rem] font-bold mb-2">{{ $jenjang->jenjang }}</div>
                    <div class="text-[0.9rem] opacity-90 font-medium">{{ $jenjang->detailjenjang }}</div>
                </div>
                <div class="p-8">
                    <h3 class="text-[1.15rem] font-semibold text-[#1a1a1a] mb-[0.8rem]">{{ $jenjang->kelas }}</h3>
                    <p class="text-[#737373] text-[0.95rem] mb-6 leading-[1.7]">{{ $jenjang->deskripsi }}</p>
                    <a href="{{ route('programs.show', $jenjang->id) }}" class="inline-flex items-center gap-2 py-[0.7rem] px-6 border-[1.5px] border-[#e5e5e5] rounded-md bg-white text-[#16a34a] font-semibold text-[0.9rem] no-underline hover:border-[#16a34a] hover:bg-[#f0fdf4] transition-all duration-200">
                        Lihat Program →
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection