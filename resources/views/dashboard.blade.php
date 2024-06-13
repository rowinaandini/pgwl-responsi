<x-app-layout>
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="storage/images/tayo1.jpeg" class="d-block w-100" alt="Image">
                <div class="carousel-caption d-none d-md-block">
                    <h1>𝔾𝕖𝕠𝕋𝕒 : 𝕃𝕖𝕥𝕤 𝕊𝕥𝕣𝕠𝕝𝕝𝕚𝕟𝕘 𝕌𝔾𝕄 𝕎𝕚𝕥𝕙 𝕋𝕒𝕪𝕠𝕘𝕒𝕞𝕒</h1>
                    <p>- 𝙱𝚞𝚜 𝙻𝚒𝚜𝚝𝚛𝚒𝚔 𝚃𝚛𝚊𝚗𝚜 𝙶𝚊𝚍𝚓𝚊𝚑 𝙼𝚊𝚍𝚊 -</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="storage/images/tayo2.jpg" class="d-block w-100" alt="Image">
                <div class="carousel-caption d-none d-md-block">
                    <h3>𝔾𝕖𝕠𝕋𝕒 : 𝕃𝕖𝕥𝕤 𝕊𝕥𝕣𝕠𝕝𝕝𝕚𝕟𝕘 𝕌𝔾𝕄 𝕎𝕚𝕥𝕙 𝕋𝕒𝕪𝕠𝕘𝕒𝕞𝕒</h3>
                    <p>- 𝙱𝚞𝚜 𝙻𝚒𝚜𝚝𝚛𝚒𝚔 𝚃𝚛𝚊𝚗𝚜 𝙶𝚊𝚍𝚓𝚊𝚑 𝙼𝚊𝚍𝚊 -</p>
                </div>
            </div>
        </div>

        <!-- Left and right controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div></br>


    <h5 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight text-center">
        <i class="fa-solid fa-bus"></i> <!-- Menambahkan ikon bus -->
        {{ __('𝔾𝕖𝕠𝕋𝕒 : 𝕃𝕖𝕥𝕤 𝕊𝕥𝕣𝕠𝕝𝕝𝕚𝕟𝕘 𝕌𝔾𝕄 𝕎𝕚𝕥𝕙 𝕋𝕒𝕪𝕠𝕘𝕒𝕞𝕒') }}
    </h5>


    <!-- Konten Dashboard -->
    <!-- Custom container for blue background -->
    <div class="container py-12 custom-container">
        <div class="card shadow custom-card">
            <div class="card-header custom-card-header">
                <h3 class="card-title">Data</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="alert alert-primary" role="alert">
                            <h4><i class="fa-solid fa-location-dot"></i> Total Points</h4>
                            <p style="font-size: 32pt">{{ $total_points }}</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="alert alert-success" role="alert">
                            <h4><i class="fa-solid fa-route"></i> Total Polylines</h4>
                            <p style="font-size: 32pt"> {{ $total_polylines }}</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="alert alert-danger" role="alert">
                            <h4><i class="fa-solid fa-draw-polygon"></i> Total Polygons</h4>
                            <p style="font-size: 32pt">{{ $total_polygons }}</p>
                        </div>
                    </div>
                    <hr>
                    <p>Anda login sebagai <b>{{ Auth::user()->name }}</b> dengan email
                        <i>{{ Auth::user()->email }}</i>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container text-center custom-container">
        <div class="row">
            <div class="col-sm-4">
                <div class="card shadow custom-card">
                    <img src="storage/images/Rute_1A_update.jpg" class="card-img-top" alt="Image">
                    <div class="card-body">
                        <p class="card-text">Informasi Jalur dan Halte || Direktorat Asset UGM</p>
                        <div class="d-flex justify-content-center">
                            <a href="https://dppa.ugm.ac.id/bus-listrik-trans-gajah-mada-sebagai-alternatif-transportasi-masal-yang-ramah-lingkungan/"
                                class="btn btn-info btn-lg">Go to Website</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card shadow custom-card">
                    <img src="storage/images/berita2.png" class="card-img-top" alt="Image">
                    <div class="card-body">
                        <p class="card-text">Rilis Peluncuran Trans Gadjah Mada || Berita UGM</p>
                        <div class="d-flex justify-content-center">
                            <a href="https://ugm.ac.id/id/berita/22413-rektor-ugm-luncurkan-layanan-bus-trans-gadjah-mada/"
                                class="btn btn-info btn-lg">Go to Website</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card shadow custom-card">
                    <div class="card-body">
                        <p class="card-text">"Selamat datang di GeoTa, portal resmi untuk menjelajahi Universitas Gadjah
                            Mada dengan Tayogama! Nikmati pengalaman unik menjelajahi kampus hijau kita menggunakan bus
                            trans UGM yang ramah lingkungan. Di sini, Anda dapat menemukan informasi terbaru, jadwal
                            perjalanan, rute bus, dan berbagai cerita menarik dari perjalanan di dalam kampus. Mari
                            bersama-sama menjelajahi keindahan dan kekayaan UGM dengan nyaman dan menyenangkan bersama
                            GeoTa dan Tayogama!."</p>
                        <div class="d-flex justify-content-center">
                            <a href="https://www.youtube.com/watch?v=n-88YUNG0w0" class="btn btn-link btn-lg">About
                                Tayogama</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="container-fluid text-center">

    </footer>
</x-app-layout>
