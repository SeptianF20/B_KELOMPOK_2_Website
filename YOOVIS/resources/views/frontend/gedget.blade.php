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
                        <form role="form" class="registration-form" id="form"
                            action="https://seekmi.com/rumah/cuci-ac/checkout" method="POST">
                            <div class="card-body">
                                <div v-show="step1" class="step-1">
                                    <div class="col-sm col">
                                        <div class="step1 rounded-circle mx-auto steps">1</div>
                                    </div>
                                    <div class="col-sm col text-center">
                                        <div class="stepchild1 rounded-circle circ steps steps_disabled"></div>
                                        <div class="stepchild1 rounded-circle circ steps steps_disabled"></div>
                                        <div class="stepchild1 rounded-circle circ steps steps_disabled"></div>
                                    </div>
                                    <div class="col-sm col">
                                        <div class="step2 rounded-circle mx-auto steps steps_disabled">2</div>
                                    </div>
                                    <div class="col-sm col text-center">
                                        <div class="stepchild2 rounded-circle circ steps steps_disabled"></div>
                                        <div class="stepchild2 rounded-circle circ steps steps_disabled"></div>
                                        <div class="stepchild2 rounded-circle circ steps steps_disabled"></div>
                                    </div>
                                    <div class="col-sm col">
                                        <div class="step3 rounded-circle steps mx-auto steps_disabled">3</div>
                                    </div>
                                </div>
                                <fieldset>
                                    <div class="p-2">
                                        <div class="title">Jenis Jasa</div>
                                        <div class="form-check px-2">
                                            <label class="form-check-label font-weight-normal">
                                                <input class="form-check-input ac-type" type="radio" name="ac-service"
                                                    id="ac-cleaning" value="ac-cleaning" checked
                                                    onclick="changeService(553)" required> Cuci AC
                                            </label>
                                        </div>
                                        <div class="form-check px-2">
                                            <label class="form-check-label font-weight-normal">
                                                <input class="form-check-input ac-type" type="radio" name="ac-service"
                                                    id="ac-installation" value="ac-installation"
                                                    onclick="changeService(552)" required> Bongkar Pasang AC
                                            </label>
                                        </div>
                                        <div class="form-check px-2">
                                            <label class="form-check-label font-weight-normal">
                                                <input class="form-check-input ac-type" type="radio" name="ac-service"
                                                    id="ac-repair" value="ac-repair" onclick="changeService(551)"
                                                    required> Reparasi AC
                                            </label>
                                        </div>
                                    </div>
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
        <div class="container">
            <div class="box" data-aos="zoom-in-right" data-aos-delay="200">
                <section id="team" class="team section-bg">
                    <div class="container">
                        <div class="ttl">
                           <h3> Seekmi - Penyedia Jasa Yang Lengkap <br/>
                            Dari Jasa Laundry Sampai Dengan Servis AC<h3>
                        </div>
                            <div class="box">
                                <br/>
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
