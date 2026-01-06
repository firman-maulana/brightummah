@extends('layouts.main') 
@section('content')

<section class="py-20 text-center">
    <div class="max-w-[1200px] mx-auto px-8">
        <h1 class="text-[3.5rem] font-bold text-[#1a1a1a] mb-6 tracking-[-1px] leading-[1.2]">
            Platform Belajar<br>
            <span class="text-[#16a34a]">Islami Modern</span>
        </h1>
        <p class="text-[1.15rem] text-[#737373] max-w-[650px] mx-auto mb-10 font-normal">
            Membangun generasi cerdas dan berakhlakul karimah melalui pendidikan berkualitas berbasis nilai-nilai Islam dan teknologi terkini
        </p>
        <a href="/programs" class="inline-block py-4 px-10 bg-[#16a34a] border-none rounded-lg text-white text-base font-semibold cursor-pointer hover:bg-[#15803d] hover:shadow-[0_4px_12px_rgba(22,163,74,0.2)] hover:-translate-y-[1px] transition-all duration-200 shadow-[0_1px_3px_rgba(0,0,0,0.1)]">
            Mulai Belajar Sekarang
        </a>
        
        <div class="flex flex-col md:flex-row justify-center gap-16 mt-16">
            <div class="text-center">
                <div class="text-[2.5rem] font-bold text-[#16a34a] counter" data-target="5000">0</div>
                <div class="text-[#737373] text-[0.95rem] mt-[0.3rem]">Siswa Aktif</div>
            </div>
            <div class="text-center">
                <div class="text-[2.5rem] font-bold text-[#16a34a] counter" data-target="150">0</div>
                <div class="text-[#737373] text-[0.95rem] mt-[0.3rem]">Pengajar Profesional</div>
            </div>
            <div class="text-center">
                <div class="text-[2.5rem] font-bold text-[#16a34a] counter" data-target="98">0</div>
                <div class="text-[#737373] text-[0.95rem] mt-[0.3rem]">Kepuasan Orang Tua</div>
            </div>
        </div>
    </div>
</section>

<section class="py-20">
    <div class="max-w-[1200px] mx-auto px-8">
        <div class="text-center mb-12">
            <h2 class="text-[2.5rem] font-bold text-[#1a1a1a] mb-4 tracking-[-0.5px]">Nilai-Nilai Kami</h2>
            <p class="text-[1.1rem] text-[#737373] max-w-[600px] mx-auto">
                Landasan kuat dalam membangun karakter Islami melalui pendidikan berkualitas
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-12">
            <div class="bg-white p-10 rounded-xl border border-[#e5e5e5] hover:border-[#16a34a] hover:shadow-[0_4px_12px_rgba(0,0,0,0.05)] hover:-translate-y-[2px] transition-all duration-200">
                <div class="w-14 h-14 bg-[#f0fdf4] rounded-[10px] flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-[#16a34a]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-[#1a1a1a] mb-[0.8rem]">Akhlakul Karimah</h3>
                <p class="text-[#737373] text-[0.95rem] leading-[1.7]">
                    Menanamkan nilai akhlak mulia dalam setiap pembelajaran sebagai fondasi karakter
                </p>
            </div>
            <div class="bg-white p-10 rounded-xl border border-[#e5e5e5] hover:border-[#16a34a] hover:shadow-[0_4px_12px_rgba(0,0,0,0.05)] hover:-translate-y-[2px] transition-all duration-200">
                <div class="w-14 h-14 bg-[#f0fdf4] rounded-[10px] flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-[#16a34a]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-[#1a1a1a] mb-[0.8rem]">Ilmu Berkualitas</h3>
                <p class="text-[#737373] text-[0.95rem] leading-[1.7]">
                    Kurikulum terintegrasi yang menggabungkan ilmu umum dengan nilai-nilai Islam
                </p>
            </div>
            <div class="bg-white p-10 rounded-xl border border-[#e5e5e5] hover:border-[#16a34a] hover:shadow-[0_4px_12px_rgba(0,0,0,0.05)] hover:-translate-y-[2px] transition-all duration-200">
                <div class="w-14 h-14 bg-[#f0fdf4] rounded-[10px] flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-[#16a34a]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-[#1a1a1a] mb-[0.8rem]">Prestasi Gemilang</h3>
                <p class="text-[#737373] text-[0.95rem] leading-[1.7]">
                    Mendorong siswa meraih prestasi akademik dan non-akademik secara optimal
                </p>
            </div>
        </div>
    </div>
</section>

<section class="py-20">
    <div class="max-w-[1200px] mx-auto px-8">
        <div class="text-center mb-12">
            <h2 class="text-[2.5rem] font-bold text-[#1a1a1a] mb-4 tracking-[-0.5px]">Keunggulan Platform</h2>
            <p class="text-[1.1rem] text-[#737373] max-w-[600px] mx-auto">
                Teknologi modern untuk pembelajaran yang efektif dan bermakna
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-12">
            <div class="text-center p-8">
                <div class="w-16 h-16 bg-[#f0fdf4] rounded-xl flex items-center justify-center mx-auto mb-6">
                    <svg class="w-9 h-9 text-[#16a34a]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                </div>
                <h3 class="text-[1.15rem] font-semibold text-[#1a1a1a] mb-[0.8rem]">Materi Terstruktur</h3>
                <p class="text-[#737373] text-[0.95rem] leading-[1.7]">
                    Kurikulum lengkap sesuai standar nasional dengan integrasi nilai Islam
                </p>
            </div>
            <div class="text-center p-8">
                <div class="w-16 h-16 bg-[#f0fdf4] rounded-xl flex items-center justify-center mx-auto mb-6">
                    <svg class="w-9 h-9 text-[#16a34a]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="text-[1.15rem] font-semibold text-[#1a1a1a] mb-[0.8rem]">Pembelajaran Digital</h3>
                <p class="text-[#737373] text-[0.95rem] leading-[1.7]">
                    Platform interaktif dengan teknologi terkini untuk pengalaman belajar optimal
                </p>
            </div>
            <div class="text-center p-8">
                <div class="w-16 h-16 bg-[#f0fdf4] rounded-xl flex items-center justify-center mx-auto mb-6">
                    <svg class="w-9 h-9 text-[#16a34a]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-[1.15rem] font-semibold text-[#1a1a1a] mb-[0.8rem]">Pendampingan Ahli</h3>
                <p class="text-[#737373] text-[0.95rem] leading-[1.7]">
                    Bimbingan langsung dari ustadz dan guru berpengalaman
                </p>
            </div>
        </div>
    </div>
</section>

<section class="bg-gradient-to-br from-[#16a34a] to-[#15803d] py-16 text-center text-white">
    <div class="max-w-[1200px] mx-auto px-8">
        <h2 class="text-[2.5rem] font-bold mb-4">Siap Memulai Perjalanan Belajar?</h2>
        <p class="text-[1.1rem] mb-8 opacity-95">
            Bergabunglah dengan ribuan siswa yang telah merasakan manfaatnya
        </p>
        <button class="py-4 px-10 bg-white border-none rounded-lg text-[#16a34a] text-base font-semibold cursor-pointer hover:shadow-lg transition-all duration-200">
            Daftar Sekarang
        </button>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const counters = document.querySelectorAll('.counter');
    const speed = 200;
    
    const animateCounter = (counter) => {
        const target = +counter.getAttribute('data-target');
        const increment = target / speed;
        
        const updateCount = () => {
            const count = +counter.innerText;
            
            if (count < target) {
                counter.innerText = Math.ceil(count + increment);
                setTimeout(updateCount, 1);
            } else {
                if (target === 5000 || target === 150) {
                    counter.innerText = target + '+';
                } else if (target === 98) {
                    counter.innerText = target + '%';
                } else {
                    counter.innerText = target;
                }
            }
        };
        
        updateCount();
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounter(entry.target);
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });
    
    counters.forEach(counter => {
        observer.observe(counter);
    });
});
</script>

@endsection