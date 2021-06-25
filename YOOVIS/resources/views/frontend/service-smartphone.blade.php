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
                                <img src="https://s3-ap-southeast-1.amazonaws.com/apic-asset/services-banner/image_589317d392f01.png"
                                    data-path="https://s3-ap-southeast-1.amazonaws.com/apic-asset/services-banner/image_589317d392f01.png"
                                    onError="this.onerror=null;this.src='http://via.placeholder.com/500x350'"
                                    class="d-none d-sm-block w-100" alt=AC Cleaning>
                            </div>
                            <div class="carousel-item  ">
                                <img src="https://s3-ap-southeast-1.amazonaws.com/apic-asset/services-banner/image_589317e146275.png"
                                    data-path="https://s3-ap-southeast-1.amazonaws.com/apic-asset/services-banner/image_589317e146275.png"
                                    onError="this.onerror=null;this.src='http://via.placeholder.com/500x350'"
                                    class="d-none d-sm-block w-100" alt=AC Cleaning Test>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="card mt-4">
                    <div class="card-body">
                        <div class="title">Butuh bantuan untuk pesan?</div>
                        <ul class="question_help_list">
                            <li>Contact 021-80625200 / support@seekmi.com </li>
                            <li> (Weekday 8am-7pm, Weekend/Holiday 8am-6pm)</li>

                        </ul>
                    </div>
                </div>
                <div class="card mt-4 mb-4">
                    <div class="card-body">
                        <div class="title">Nilai lebih jasa kami</div>
                        <ul class="question_help_list">
                            <p>&nbsp;</p>
                            <p><strong>Layanan Jasa AC Terbaik di Jabodetabek</strong></p>
                            <ul>
                                <li>Teknisi berpengalaman dan profesional.</li>
                                <li>Peralatan teknisi lengkap.</li>
                                <li>Hanya untuk jenis AC split.</li>
                                <li>Garansi 30 hari untuk Reparasi AC, 14 hari untuk Bongkar Pasang AC, dan 7 hari untuk
                                    Cuci AC.</li>
                                <li>Garansi HANYA berlaku untuk pemesanan melalui website atau aplikasi Seekmi.</li>
                                <li>Asuransi gratis tersedia untuk pembayaran non-tunai.</li>
                            </ul>
                            <p>&nbsp;</p>
                            <p><strong>Jenis Layanan</strong></p>
                            <ul>
                                <li><strong>Cuci AC</strong><br />Bersihkan kumparan AC, saringan, saluran, hingga
                                    drainase poma AC. <strong>Pengisian freon akan dikenakan biaya tambahan tergantung
                                        jenis freon.</strong></li>
                                <li><strong>Bongkar Pasang AC</strong><br />Pemasangan AC baru atau pemindahan AC ke
                                    tempat lain</li>
                                <li><strong>Reparasi AC</strong><br />Perbaikan masalah AC berkaitan dengan freon,
                                    saluran, sensor, termostat, drainase, modul elektronik dan remote AC</li>
                            </ul>
                            <p>&nbsp;</p>
                            <p><strong>Nilai Lebih Seekmi</strong></p>
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
                            <p>Harap tidak memberikan izin jika teknisi hendak membawa AC ke luar tempat Anda tinggal,
                                dengan alasan apapun.&nbsp;</p>
                            <p>Harap hubungi Customer Service Seekmi untuk mengetahui biaya untuk
                                pergantian&nbsp;komponen&nbsp;AC.&nbsp;</p>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="box" data-aos="zoom-in-right" data-aos-delay="200">
            <section id="team" class="team section-bg">
                <div class="ttl">
                    <h3> Seekmi - Penyedia Jasa Yang Lengkap <br />
                        Dari Jasa Laundry Sampai Dengan Servis AC<h3>
                </div>
                <div class="box">
                    <br />
                    <b>Servis rumah dan kantor no. 1 di JABODETABEK</b><br />
                    Kami mengerti betapa frustrasinya mencari teknisi yang dekat anda, yang bisa datang ke
                    rumah sesuai
                    jadwal
                    sibuk anda. Perkenalkan Seekmi, penyedia jasa untuk rumah dan kantor.
                    Layanan yang kami menawarkan adalah: Servis AC/Reparasi AC, Cleaning, Laundry, Tukang
                    Harian, dan
                    Ledeng
                    serta perbaikan elektronik.
                    Tersedia di seluruh Jakarta dan sekitarnya. Kami akan mencari teknisi terdekat dengan
                    perjanjian jam
                    yang
                    anda pilih dan jasa yang diinginkan.
                    Dari servis atau reparasi AC untuk mengatasi kamar yang panas, ke cleaning servis yang
                    bisa
                    membersihkan
                    rumah anda seperti baru lagi.
                    Laundry perkilo yang bisa mengatasi semua noda dan merapikan penampilanmu dengan
                    keharuman segar.
                    Renovasi
                    rumah? Atau perbaikan pintu rumah?
                    Seekmi bisa menyediakan teknisi yang dapat mewujudkan impian rumahmu. Pipa rusak atau
                    keran bocor?
                    Seekmi
                    akan mengirim teknisi ke rumah anda. Kulkas
                    rusak atau microwave mati? Teknisi perbaikan elektronik kami akan datang untuk mengatasi
                    ketidaknyamanan
                    anda. Jadi, anda bisa bersantai sambil Teknisi Seekmi
                    bisa memberbaiki semua kesusahan anda. Anda punya masalah? Seekmi bisa perbaiki! Pesan
                    sekarang!
                </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    @endsection
