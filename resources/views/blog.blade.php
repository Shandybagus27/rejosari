@extends('layouts.app')

@section('contents')
    <div id="carouselExampleCaptions" class="carousel slide mb-6" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img width="1200" height="800" src="img/gumuk.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Gumuk Setri</h5>
                    {{-- <p>Some representative placeholder content for the first slide.</p> --}}
                </div>
            </div>
            <div class="carousel-item">
                <img width="1200" height="800" src="img/kambing.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Budidaya Ternak Kambing</h5>
                    {{-- <p>Some representative placeholder content for the second slide.</p> --}}
                </div>
            </div>
            <div class="carousel-item">
                <img width="1200" height="800" src="img/durian.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Budidaya Kebun Durian</h5>
                    {{-- <p>Some representative placeholder content for the third slide.</p> --}}
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <hr class="featurette-divider">

    <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
            <div class="col-lg-4">
                <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="img/gumuk.jpg"
                    aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect>
                <h2 class="fw-normal">Pertanian</h2>
                {{-- <p>Some representative placeholder content for the three columns of text below the carousel. This is the
                    first column.</p> --}}
                <p><a class="btn btn-secondary" href="pertanian">View details »</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="img/kambing.jpg"
                    aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect>
                <h2 class="fw-normal">Peternakan</h2>
                {{-- <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second
                    column.</p> --}}
                <p><a class="btn btn-secondary" href="peternakan">View details »</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="img/durian.jpg"
                    aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect>
                <h2 class="fw-normal">Alam</h2>
                {{-- <p>And lastly this, the third column of representative placeholder content.</p> --}}
                <p><a class="btn btn-secondary" href="alam">View details »</a></p>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
    </div>
    <div class="container overflow-hidden">
        <div class="row gx-5">
            <div class="col">
                <div id="text-4" class="widget_text widget clear">
                    <h3>Kontak</h3>
                    <div class="textwidget">
                        <p><strong>WA / Telp</strong></p>
                        {{-- <p>Tatak &nbsp; &nbsp;081328808520<br>
                        Ersyid &nbsp; 085799886714<br>
                        Rifa &nbsp; &nbsp; &nbsp; 082121291941<br>
                        Office &nbsp; 0293789675</p> --}}
                        <p><strong>Email</strong></p>
                        <p>rejosaribandongan@gmail.com<br>
                            {{-- reservation@rejosari.com</p> --}}
                    </div>
                </div>
            </div>
            <div class="col">
                <div id="text-3" class="widget_text widget clear">
                    <h3>ALAMAT</h3>
                    <div class="textwidget">
                        <p>Desa Rejosari,Kec. Bandongan, Kabupaten Magelang, Jawa Tengah
                            56151</p>
                        <p><strong>Map Lokasi<br>
                            </strong><br>
                            <iframe loading="lazy" style="border: 0;" tabindex="0"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7912.519711726117!2d110.20369609040705!3d-7.436472670297378!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a85b500364a7d%3A0xeb577cd2d5dbb6c!2sRejosari%2C%20Kec.%20Bandongan%2C%20Kabupaten%20Magelang%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1720019345265!5m2!1sid!2sid"
                                frameborder="0" allowfullscreen="" aria-hidden="false"></iframe>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
