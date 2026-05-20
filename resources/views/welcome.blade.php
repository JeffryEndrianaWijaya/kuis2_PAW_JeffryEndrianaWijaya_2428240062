<x-layout>

    {{-- HERO --}}
    <section class="py-5" style="background-color: #f8fafc;">

        <div class="container">

            <div class="row align-items-center min-vh-75">

                {{-- TEXT --}}
                <div class="col-lg-6">

                    <span class="small fw-medium px-3 py-2 rounded-pill d-inline-block mb-3"
                          style="
                            background-color: #e2e8f0;
                            color: #475569;
                          ">
                        Sistem Informasi Akademik
                    </span>

                    <h1 class="fw-bold display-4 mb-4"
                        style="color:#0f172a; line-height:1.2;">
                        Kelola Data Fakultas
                        Dengan Lebih Sederhana
                    </h1>

                    <p class="lead mb-4"
                       style="color:#64748b; max-width:520px;">
                        Platform modern untuk mengelola data fakultas,
                        program studi, dan administrasi akademik
                        secara efisien.
                    </p>

                    <div class="d-flex flex-wrap gap-3">

                        <a href="/fakultas"
                           class="btn px-4 py-2 rounded-3"
                           style="
                                background-color:#0f172a;
                                color:white;
                           ">
                            Lihat Data
                        </a>

                        <a href="/fakultas/create"
                           class="btn px-4 py-2 rounded-3 border"
                           style="
                                border-color:#cbd5e1;
                                color:#334155;
                           ">
                            Tambah Fakultas
                        </a>

                    </div>

                </div>

                {{-- IMAGE --}}
                <div class="col-lg-6 text-center mt-5 mt-lg-0">

                    <img
                        src="https://cdn-icons-png.flaticon.com/512/3135/3135755.png"
                        class="img-fluid opacity-75"
                        style="max-height: 340px;"
                        alt="Academic"
                    >

                </div>

            </div>

        </div>

    </section>


    {{-- FEATURES --}}
    <section class="py-5">

        <div class="container">

            <div class="text-center mb-5">

                <h2 class="fw-bold mb-2"
                    style="color:#0f172a;">
                    Fitur Utama
                </h2>

                <p style="color:#64748b;">
                    Dirancang untuk administrasi akademik modern
                </p>

            </div>

            <div class="row g-4">

                {{-- ITEM --}}
                <div class="col-md-4">

                    <div class="card border-0 rounded-4 h-100"
                         style="
                            background-color:#ffffff;
                            box-shadow: 0 1px 3px rgba(0,0,0,0.05);
                         ">

                        <div class="card-body p-4">

                            <div class="mb-3"
                                 style="font-size:28px;">
                                ⚡
                            </div>

                            <h5 class="fw-semibold mb-2"
                                style="color:#0f172a;">
                                Cepat
                            </h5>

                            <p class="mb-0"
                               style="color:#64748b;">
                                Pengelolaan data lebih efisien dan responsif.
                            </p>

                        </div>

                    </div>

                </div>

                {{-- ITEM --}}
                <div class="col-md-4">

                    <div class="card border-0 rounded-4 h-100"
                         style="
                            background-color:#ffffff;
                            box-shadow: 0 1px 3px rgba(0,0,0,0.05);
                         ">

                        <div class="card-body p-4">

                            <div class="mb-3"
                                 style="font-size:28px;">
                                🔒
                            </div>

                            <h5 class="fw-semibold mb-2"
                                style="color:#0f172a;">
                                Aman
                            </h5>

                            <p class="mb-0"
                               style="color:#64748b;">
                                Sistem dibangun menggunakan Laravel modern.
                            </p>

                        </div>

                    </div>

                </div>

                {{-- ITEM --}}
                <div class="col-md-4">

                    <div class="card border-0 rounded-4 h-100"
                         style="
                            background-color:#ffffff;
                            box-shadow: 0 1px 3px rgba(0,0,0,0.05);
                         ">

                        <div class="card-body p-4">

                            <div class="mb-3"
                                 style="font-size:28px;">
                                📊
                            </div>

                            <h5 class="fw-semibold mb-2"
                                style="color:#0f172a;">
                                Sederhana
                            </h5>

                            <p class="mb-0"
                               style="color:#64748b;">
                                Tampilan minimalis dan mudah digunakan.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- STATISTICS --}}
    <section class="py-5"
             style="background-color:#f8fafc;">

        <div class="container">

            <div class="row text-center g-4">

                <div class="col-6 col-md-3">

                    <h2 class="fw-bold mb-1"
                        style="color:#0f172a;">
                        20+
                    </h2>

                    <p style="color:#64748b;">
                        Fakultas
                    </p>

                </div>

                <div class="col-6 col-md-3">

                    <h2 class="fw-bold mb-1"
                        style="color:#0f172a;">
                        100+
                    </h2>

                    <p style="color:#64748b;">
                        Staff
                    </p>

                </div>

                <div class="col-6 col-md-3">

                    <h2 class="fw-bold mb-1"
                        style="color:#0f172a;">
                        5000+
                    </h2>

                    <p style="color:#64748b;">
                        Mahasiswa
                    </p>

                </div>

                <div class="col-6 col-md-3">

                    <h2 class="fw-bold mb-1"
                        style="color:#0f172a;">
                        24/7
                    </h2>

                    <p style="color:#64748b;">
                        Online
                    </p>

                </div>

            </div>

        </div>

    </section>


    {{-- CTA --}}
    <section class="py-5">

        <div class="container">

            <div class="text-center rounded-4 p-5"
                 style="
                    background-color:#0f172a;
                    color:white;
                 ">

                <h2 class="fw-bold mb-3">
                    Mulai Kelola Data Akademik
                </h2>

                <p class="mb-4 text-light">
                    Sistem sederhana untuk administrasi kampus modern
                </p>

                <a href="/fakultas/create"
                   class="btn px-4 py-2 rounded-3"
                   style="
                        background-color:white;
                        color:#0f172a;
                   ">
                    Mulai Sekarang
                </a>

            </div>

        </div>

    </section>


    {{-- FOOTER --}}
    <footer class="py-4 border-top">

        <div class="container">

            <div class="d-flex flex-column flex-md-row
                        justify-content-between align-items-center">

                <div>

                    <h6 class="fw-semibold mb-1"
                        style="color:#0f172a;">
                        Sistem Informasi Fakultas
                    </h6>

                    <small style="color:#64748b;">
                        Laravel Academic System
                    </small>

                </div>

                <small class="mt-3 mt-md-0"
                       style="color:#94a3b8;">
                    © {{ date('Y') }} All Rights Reserved
                </small>

            </div>

        </div>

    </footer>

</x-layout>