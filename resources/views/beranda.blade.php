<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Wonokitri | Beranda</title>
    
</head>
<body class="bg-gray-100">
    <nav class="bg-green-700 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <!-- Ganti judul dengan gambar -->
            <a href="#" class="text-white text-2xl font-semibold">
                <img src="wonokitri.png" alt="Wonokitri Logo" >
            </a>
            
            <ul class="flex justify-center space-x-4">
                <li><a href="#" class="text-white">Beranda</a></li>
                <li><a href="#" class="text-white">Informasi Paket</a></li>
                <li><a href="#" class="text-white">Kontak Kami</a></li>
                <li><a href="#" class="text-white">Pembatalan Tiket</a></li>
            </ul>
            
            <!-- Tambahkan Search Bar di sini -->
            <div class="relative">
                <input type="text" placeholder="Cari..." class="bg-gray-200 text-gray-700 rounded-full px-3 py-1 focus:outline-none focus:ring focus:ring-blue-300">
                <button class="absolute right-3 top-1/2 transform -translate-y-1/2 text-blue-500 hover:text-blue-700">
                    <!-- Tambahkan icon pencarian di sini, misalnya: -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m-5.2-9.601c-2.376-.83-5.144-.399-7.071 1.528-1.926 1.928-2.357 4.696-1.527 7.072a5.001 5.001 0 007.071 7.071c2.377.83-5.145.399-7.072-1.527-1.927-1.927-2.357-4.696-1.528-7.071a5.001 5.001 0 00-7.071-7.071z" />
                    </svg>
                </button>
            </div>
            <!-- Akhir Search Bar -->

            <select class="bg-green-700 px-3 py-1 focus:outline-none focus:ring focus:ring-green-700 text-white">
                <option value="en">EN</option>
                <option value="id">ID</option>
            </select>

        </div>
    </nav>

    <header class="bg-gray-200 py-10" style="background-image: url('bromo.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <a href="#" class="text-white text-2xl font-semibold">
        
    </a>
    <div class="container mx-auto flex justify-between items-center">
        <!-- Teks Header -->
        <div class="w-1/2 pr-15 pt-20">
            <h1 class="text-4xl font-semibold text-white">Desa Edelweis<br>Wonokitri</h1>
            <p class="mt-4 text-xl text-justify text-white">Desa Wisata Edelweiss Wonokitri merupakan satu-satunya desa wisata yang menyajikan bunga Edelweiss sebagai daya tarik utama, di mana bunga Edelweiss ini merupakan salah satu tanaman yang dilindungi oleh undang-undang.</p>
        </div>

        <!-- Gambar Card -->
        <div class="w-1/2 pl-20 pr-25">
    <div class="bg-white shadow-lg rounded-lg p-3 py-10">
        <div class="p-3 py-10">
            <h2 class="text-2xl font-semibold">Card Title</h2>
            <p class="mt-2 text-gray-600">Deskripsi singkat tentang card Anda.</p>

            

            <!-- Pilihan (Option) -->
            <label class="block mt-3 text-gray-700">Pilih Destinasi Wisata:</label>
            <select class="border border-gray-300 rounded-md mt-1" id="selectOption" style="direction: rtl;">
                <option value="beach">Pantai Tropis</option>
                <option value="mountain">Pendakian Gunung</option>
                <option value="city">Jelajah Kota Historis</option>
                <option value="wildlife">Penyelamatan Satwa Liar</option>
                <option value="culture">Wisata Budaya Tradisional</option>
            </select>

            <a href="#" class="mt-4 text-blue-500 hover:underline">Lihat Lebih Lanjut</a>
        </div>
    </div>
</div>


           
</div>
    
</header>




    <main class="container mx-auto py-8">
        <h2 class="text-2xl font-semibold mb-4">Apa yang bisa Anda nikmati di Wonokitri?</h2>
        <p class="text-lg">Wonokitri adalah tempat indah dengan pemandangan alam yang menakjubkan, hiking yang menantang, dan wisata kuliner yang lezat.</p>
    </main>

    <footer class="bg-green-700 text-white text-center py-4">
        <div class="container mx-auto">
            &copy; 2023 Wonokitri - Semua Hak Dilindungi
        </div>
    </footer>
</body>
</html>
