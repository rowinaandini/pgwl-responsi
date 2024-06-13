<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!-- Custom styles for this template -->
<link href="css/style.css" rel="stylesheet" />
<!-- responsive style -->
<link href="css/responsive.css" rel="stylesheet" />
<link href="lib/animate/animate.min.css" rel="stylesheet">


<style>
    *.info {
        padding: 6px 8px;
        font: 14px/16px Arial, Helvetica, sans-serif;
        background: black;
        background: #F7F7F7;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        border-radius: 5px;
        text-align: center;
    }

    .info h2 {
        margin: 0 0 5px;
        color: #F7F7F7;
    }

    .text-over {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        color: #F7F7F7;
        font-size: 60px;
        font-family: 'Poppins';
    }

    .text-over-kecil {
        position: absolute;
        top: 57%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        color: #F7F7F7;
        font-size: 30px;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }

    .text-card {
        text-align: center;
        color: white;
        font-size: 18px;
        font-family: 'segoe-ui';
    }

    .text-card2 {
        text-align: center;
        color: black;
        font-size: 20px;
        font-family: 'segoe-ui';
    }

    .text-paragraf {
        text-align: center;
        color: black;
        font-size: 15px;
        font-family: 'Garamond';
    }

    .text-judul {
        text-align: center;
        color: black;
        font-size: 25px;
        font-family: 'Georgia';
    }

    .card-style {
        border-style: solid;
        border-color: #F7F7F7;
        background-color: #F7F7F7;
        border-radius: 18px;
        margin-right: 20px;
        border-width: 5px;
    }

    .bg-blue {
        background-color: #929AAB;
        border-radius: 35px;
    }

    .bg-brown2 {
        background-color: #F7F7F7;
    }

    .feature_section {
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
    }

    .feature_section .feature_container {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
    }

    .feature_section .feature_container .box {
        -webkit-box-flex: 1;
        -ms-flex: 1;
        flex: 1;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        text-align: center;
        margin: 0 10px;
        padding: 45px 15px;
        background-color: #ffffff;
        color: #929AAB;
        -webkit-transition: all 0.3s;
        transition: all 0.3s;
        -webkit-box-shadow: 0 0 15px 0 rgba(0, 0, 0, 0.2);
        box-shadow: 0 0 15px 0 rgba(0, 0, 0, 0.2);
    }

    .feature_section .feature_container .box .img-box svg {
        width: 100%;
        height: auto;
        max-height: 100%;
        fill: #929AAB;
        -webkit-transition: all 0.3s;
        transition: all 0.3s;
    }

    .feature_section .feature_container .box .name {
        margin-top: 20px;
        text-transform: uppercase;
        font-family: 'Merriweather Sans', sans-serif;
        margin-bottom: 0;
    }

    .feature_section .feature_container .box:hover,
    .feature_section .feature_container .box.active {
        background-color: #929AAB;
        color: #ffffff;
    }

    .feature_section .feature_container .box:hover .img-box svg,
    .feature_section .feature_container .box.active .img-box svg {
        fill: #ffffff;
    }

    .feature_section .feature_container .box:hover .img-box svg path,
    .feature_section .feature_container .box.active .img-box svg path {
        fill: #ffffff;
    }

</style>
</head>

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
                <img src="storage/images/tayo111.png" class="d-block w-100" alt="Image">
                <div class="carousel-caption d-none d-md-block">
                    {{-- <h4>𝔾𝕖𝕠𝕋𝕒 : 𝕃𝕖𝕥𝕤 𝕊𝕥𝕣𝕠𝕝𝕝𝕚𝕟𝕘 𝕌𝔾𝕄 𝕎𝕚𝕥𝕙 𝕋𝕒𝕪𝕠𝕘𝕒𝕞𝕒</h4>
                    <p>- 𝙱𝚞𝚜 𝙻𝚒𝚜𝚝𝚛𝚒𝚔 𝚃𝚛𝚊𝚗𝚜 𝙶𝚊𝚍𝚓𝚊𝚑 𝙼𝚊𝚍𝚊 -</p> --}}
                </div>
            </div>

            <div class="carousel-item">
                <img src="storage/images/tayo222.jpg" class="d-block w-100" alt="Image">
                <div class="carousel-caption d-none d-md-block">
                    {{-- <h3>𝔾𝕖𝕠𝕋𝕒 : 𝕃𝕖𝕥𝕤 𝕊𝕥𝕣𝕠𝕝𝕝𝕚𝕟𝕘 𝕌𝔾𝕄 𝕎𝕚𝕥𝕙 𝕋𝕒𝕪𝕠𝕘𝕒𝕞𝕒</h3>
                    <p>- 𝙱𝚞𝚜 𝙻𝚒𝚜𝚝𝚛𝚒𝚔 𝚃𝚛𝚊𝚗𝚜 𝙶𝚊𝚍𝚓𝚊𝚑 𝙼𝚊𝚍𝚊 -</p> --}}
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
    </div>

    <!-- Feature Section -->
    <section class="feature_section">
        <div class="container">
            <div class="feature_container">
                <div class="box">
                    <h4><i class="fa-solid fa-map-location-dot" style="font-size: 100px;"></i></h4>
                    <h5 class="name">
                        Total Titik Pemberhentian Bus
                    </h5>
                    <p style="font-size: 32pt">{{ $total_points }}</p>
                </div>
                <div class="box active">
                    <h4><i class="fa-solid fa-route" style="font-size: 100px;"></i></h4>
                    <h5 class="name">
                        Total Jalur Rute Bus
                    </h5>
                    <p style="font-size: 32pt">{{ $total_polylines }}</p>
                </div>
                <div class="box">
                    <h4><i class="fa-solid fa-chart-area" style="font-size: 100px;"></i></h4>
                    <h5 class="name">
                        Area Yang Dilalui
                    </h5>
                    <p style="font-size: 30px;">{{ $total_polygons }}</p>
                </div>
            </div>
        </div>
    </section>

    <div class="container-xxl courses ">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s"
                style="max-width: 500px; color: black;">
                <h1 class="display-6 bg-brown" style="text-shadow: 0 0 3px white">Sekilas Info</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-12">
                    <div class="courses-item d-flex flex-column bg-brown2 overflow-hidden h-100"
                        style=" border-radius: 35px;">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-brown text-black fs-5 py-1 px-4 mb-4"></div>
                            <h5 class="mb-3"><b>Informasi Jalur dan Halte</b></h5>
                            <p>Sebagai langkah awal UGM melalui Direktorat Aset Akan mengoperasikan 2 jalur bus listrik
                                dengan dukungan masing masing jalur 1 buah armada, estimasi 1 (satu) kali putaran kurang
                                lebih 1 jam. </p>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="storage/images/Rute_1A_update.jpg" alt="">
                            <div class="courses-overlay">
                                <a class="btn  border-2" style="background-color: #F2EFEA;"
                                    href="https://dppa.ugm.ac.id/bus-listrik-trans-gajah-mada-sebagai-alternatif-transportasi-masal-yang-ramah-lingkungan/">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="courses-item d-flex flex-column bg-brown2 overflow-hidden h-100"
                        style=" border-radius: 35px;">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-brown text-black fs-5 py-1 px-4 mb-4"></div>
                            <h5 class="mb-3"><b>Rilis Peluncuran Trans Gadjah Mada </b></h5>
                            <p>Rektor UGM, Prof. Ir. Panut Mulyono, M.Eng., D.Eng., meluncurkan dua bus listrik sebagai
                                transportasi ramah lingkungan internal kampus, Jumat (1/4) di Balairung Kampus UGM.</p>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="storage/images/berita2.png" alt="">
                            <div class="courses-overlay">
                                <a class="btn  border-2" style="background-color: #F2EFEA;"
                                    href="https://ugm.ac.id/id/berita/22413-rektor-ugm-luncurkan-layanan-bus-trans-gadjah-mada/">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="courses-item d-flex flex-column bg-brown2 overflow-hidden h-100"
                        style=" border-radius: 35px;">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-brown text-black fs-5 py-1 px-4 mb-4"></div>
                            <h5 class="mb-3"><b>Sedikit Tentang 𝔾𝕖𝕠𝕋𝕒</b></h5>
                            <p>Selamat datang di GeoTa, portal untuk menjelajahi Universitas Gadjah Mada dengan Tayogama!
                                Nikmati pengalaman unik menjelajahi kampus biru kita menggunakan bus trans UGM yang ramah
                                lingkungan. Di sini, Anda dapat menemukan informasi, jadwal perjalanan, rute bus, dan berbagai
                                cerita menarik dari perjalanan di dalam kampus. Mari bersama-sama menjelajahi keindahan dan
                                kekayaan UGM dengan nyaman dan menyenangkan bersama GeoTa dan Tayogama!</p>
                        </div>
                        <div class="position-relative mt-auto">
                            <div class="courses-overlay">
                                <a class="btn  border-2" style="background-color: #F2EFEA;"
                                    href="https://www.youtube.com/watch?v=n-88YUNG0w0">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div></br>

    <footer class="container-fluid text-center">
        <p>Rowina Andini - 22/492503/SV/20523</p>
    </footer>

</x-app-layout>
