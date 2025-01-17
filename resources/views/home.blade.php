@include("layouts.header")
 <!-- Navigation -->
 <nav class="bg-black text-white">
        <div class="container mx-auto flex justify-end items-center py-4 px-6">
            <ul class="flex space-x-8 text-lg font-bold">
                <li><a class="hover:text-yellow-500 active" href="/">HOME</a></li>
                <li><a class="hover:text-yellow-500" href="/umkm">UMKM</a></li>
                <li><a class="hover:text-yellow-500" href="/kuliner">KULINER</a></li>
                <li><a class="hover:text-yellow-500" href="/batik">BATIK</a></li>
            </ul>
        </div>
    </nav>
    <!-- Navigation end -->

    <!-- Hero Section -->
    <section class="relative">
        <img alt="Tari Barong Saat Acara Peringatan Hari Ibu" class="w-full h-auto" height="600" src="https://upload.wikimedia.org/wikipedia/commons/2/22/Tari_Barong_Saat_Acara_Peringatan_Hari_Ibu.jpg" width="1920"/>
        <div class="absolute inset-0 flex flex-col justify-center items-center text-center text-white">
            <h1 class="text-4xl font-bold">Selamat Datang di</h1>
            <h2 class="text-5xl font-bold text-yellow-500">SIPAPO</h2>
            <p class="mt-4 text-2xl">SIPAPO Sipaling Ponorogo. Sipapo adalah sebuah platform yang menyediakan informasi seputar UMKM, kuliner, dan batik di Ponorogo.</p>
            <button id="selengkapnyaButton" class="mt-6 bg-yellow-500 text-black py-2 px-4 rounded">SELENGKAPNYA</button>
        </div>
    </section>
    <!-- Hero Section end -->

    <!-- Main Content -->
    <main id="mainContent" class="container mx-auto py-16 px-6">
        <h2 class="text-4xl font-bold">SIPAPO <span class="text-yellow-500">Sipaling Ponorogo</span></h2>
        <p class="mt-4 text-2xl">SIPAPO, singkatan dari Sipaling Ponorogo, adalah sebuah platform inovatif yang menghadirkan informasi lengkap tentang UMKM, kuliner, dan batik khas Ponorogo. Dibuat oleh mahasiswa Teknik Informatika Universitas Muhammadiyah Ponorogo, platform ini menjadi wujud nyata dukungan kami terhadap UMKM lokal sekaligus bentuk pengabdian kepada masyarakat.</p>
        <div class="mt-8 flex flex-col md:flex-row">
            <div class="md:w-1/2 space-y-6">
                <div class="flex items-start">
                    <i class="fas fa-question text-2xl text-yellow-500"></i>
                    <div class="ml-4">
                        <h3 class="text-2xl font-bold">Tujuan kami</h3>
                        <p class="text-2xl">Mempromosikan UMKM: Membantu UMKM lokal, khususnya di bidang kuliner dan batik, untuk lebih dikenal masyarakat luas.</p>
                        <p class="text-2xl">Mudah Diakses: Memudahkan Anda menemukan informasi terkait UMKM, kuliner, dan batik di Ponorogo.</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <i class="fas fa-history text-2xl text-yellow-500"></i>
                    <div class="ml-4">
                        <h3 class="text-2xl font-bold">Dibuat sejak Desember 2024</h3>
                        <p class="text-2xl">Website ini, dibuat mulai Desember 2024 sebagai platform informasi dan promosi UMKM.</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <i class="fas fa-star text-2xl text-yellow-500"></i>
                    <div class="ml-4">
                        <h3 class="text-2xl font-bold">Fitur Andalan Kami</h3>
                        <ul class="list-disc ml-6 text-2xl">
                            <li>Informasi UMKM: Temukan beragam UMKM unggulan di Ponorogo, mulai dari produk kreatif hingga inovasi lokal.</li>
                            <li>Kuliner Khas Ponorogo: Jelajahi berbagai hidangan khas Ponorogo yang menggugah selera.</li>
                            <li>Batik Ponorogo: Kenali kekayaan batik khas daerah yang penuh makna dan keindahan.</li>
                        </ul>
                        <p class="mt-4 text-2xl">Melalui SIPAPO, kami ingin menjadi jembatan penghubung antara Anda dan kekayaan budaya serta potensi lokal Ponorogo. Mari dukung UMKM dan jadikan Ponorogo semakin dikenal!</p>
                    </div>
                </div>
            </div>
            <div class="md:w-1/2 mt-8 md:mt-0 flex justify-center">
                <img alt="Peta Ponorogo yang menunjukkan lokasi geografis dan batas wilayah" class="h-96" height="400" src="https://upload.wikimedia.org/wikipedia/commons/c/cc/Ponorogo_map.png" width="400"/>
            </div>
        </div>
    </main>
    <!-- Main Content end -->
    @include("layouts.footer")