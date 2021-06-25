@extends('frontend/layouts.template')

@section('content')

<section id="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mt-5">
                <div class="col-12">
                    <div class="service">
                        <div class="title">
                            <img src="{{ asset('frontend/assets/img/smartphone.svg')}}">
                            Service Handphone
                        </div>
                    </div>
                    <br>
                    <div class="card question_left mb-5">
                        <div class="card-body">
                            <fieldset>
                                <div class="service">
                                    <div class="col-lg-12 col-md-12" data-aos="fade-up" data-aos-delay="300">
                                        <form action="forms/contact.php" method="post" role="form"
                                            class="php-email-form">
                                            <div class="form-group">
                                                <input type="text" name="name" class="form-control" id="name"
                                                    placeholder="Your Name" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="email" id="email"
                                                    placeholder="Your Email" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="subject" id="subject"
                                                    placeholder="Subject" required>
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control" name="message" rows="5"
                                                    placeholder="Message" required></textarea>
                                            </div>

                                            <div class="form-group " id="data-0">
                                                <label id="question-5696">Merk AC Anda</label>
                                                <div class="row mb-3 p-2">
                                                    <div class="my-3">
                                                        <div class="loading">Loading</div>
                                                        <div class="error-message"></div>
                                                        <div class="sent-message">Your message has been sent. Thank you!
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-check-label">
                                                            <label class="names">
                                                                <input type="checkbox">
                                                                LG
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-check-label">
                                                            <label class="names">
                                                                <input type="checkbox">
                                                                Panasonic

                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-check-label">
                                                            <label class="names">
                                                                <input type="checkbox">
                                                                Samsung
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-check-label">
                                                            <label class="names">
                                                                <input type="checkbox">
                                                                Sharp

                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-check-label">
                                                            <label class="names">
                                                                <input type="checkbox">
                                                                Daikin
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-check-label">
                                                            <label class="names">
                                                                <input type="checkbox">
                                                                Lainnya
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="title"> Info Cuci AC dan Bangunan </div>
                                                    <div class="p-2">
                                                        <div class="service-desc-box">
                                                            <span class="service-desc-box-text">
                                                            </span>
                                                        </div>
                                                        <div class="text-center"><button type="submit">Send
                                                                Message</button></div>
                                        </form>
                            </fieldset>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card mt-4 mt-sm-0 d-none d-sm-block">
                    <div id="banner" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">

                            <div class="carousel-item active ">
                                <img src="{{ asset('frontend/assets/img/servis hp.png')}}"
                                    class="d-none d-sm-block w-100" alt=AC Cleaning>
                            </div>
                            

                        </div>
                    </div>
                </div>
                <div class="card mt-4">
                    <div class="card-body">
                        <div class="title">Butuh bantuan untuk pesan?</div>
                        <ul class="question_help_list">
                            <li>Contact 0822-8888-0101 / yoovis@gmail.com </li>
                            <li> (Jam Kerja : Senin - Jumat : 08:00 - 19:00 WIB </li>
                            <li> Sabtu - Minggu Hari Libur : 09:00 - 18:00 WIB)</li>

                        </ul>
                    </div>
                </div>
                <div class="card mt-4 mb-4">
                    <div class="card-body">
                        <div class="title">Nilai lebih jasa kami</div>
                        <ul class="question_help_list">
                            <p>&nbsp;</p>
                            <p><strong>Layanan Jasa Service Gadget</strong></p>
                            <ul>
                                <li>Teknisi berpengalaman dan profesional.</li>
                                <li>Peralatan teknisi lengkap.</li>
                                <li>Garansi 30 hari untuk Perbaikan Smartphone</li>
                                <li>Garansi HANYA berlaku untuk pemesanan melalui website atau aplikasi YooVis.</li>
                            </ul>
                            <p>&nbsp;</p>
                            <p><strong>Nilai Lebih YooVis</strong></p>
                            <ul>
                                <li>Kami hanya memilih teknisi yang paling memenuhi syarat untuk memastikan kualitas
                                    layanan yang sangat baik. Tingkat kepuasan Anda adalah prioritas utama kami</li>
                                <li>Bebas repot, ditangani oleh layanan pelanggan profesional dan ramah kami tersedia 7
                                    hari seminggu</li>
                            </ul>
                            <p>&nbsp;</p>
                            <p><strong>Pemberitahuan</strong><br />Pesanan Anda akan dibatalkan secara otomatis dalam
                                waktu 24 jam jika layanan pelanggan kami tidak dapat menghubungi Anda melalui telepon
                                untuk keperluan verifikasi dan penjadwalan.</p>
                            <p>Harap hubungi Customer Service Seekmi untuk mengetahui biaya untuk
                                pergantian&nbsp;komponen&nbsp;AC.&nbsp;</p>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
    </div>
    </div>
    @endsection
