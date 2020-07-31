<div class="hero-wrap" data-aos="zoom-in"
    style="background-image: url('<?php echo base_url()?>assets/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text justify-content-start align-items-center">
            <div class="col-lg-6 col-md-6 ftco-animate d-flex align-items-end">
                <div class="text">
                    <h1 class="mb-4">Now <span>It's easy for you</span> <span>rent a car</span></h1>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- choose car now -->
<section class="ftco-section">
    <div class="container-fluid px-4">
        <div class="row justify-content-center">
            <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                <span class="subheading">What we offer</span>
                <h2 class="mb-2">Choose Your Car</h2>
            </div>
        </div>
        <div class="row">
            <?php foreach ($mobil as $key => $car) {?>
            <div class="col-md-3">
                <div class="car-wrap ftco-animate">
                    <div class="img d-flex align-items-end"
                        style="background-image: url('<?php echo base_url()?>./upload/mobil/<?php echo $car['foto'];?>">
                        <div class="price-wrap d-flex">
                            <span class="rate"><?php echo $car['tarif3'];?></span>
                            <p class="from-day">
                                <span>From</span>
                                <span>/ Full day</span>
                            </p>
                        </div>
                    </div>
                    <div class="text p-4 text-center">
                        <h2 class="mb-0"><a href="#"><?php echo $car['Merk'];?></a></h2>
                        <span>RENTALMOBIL</span>
                        <p class="d-flex mb-0 d-block"><a
                                href="https://api.whatsapp.com/send?phone=+6281381945880&text=Hallo mas mau tanya-tanya untuk pesan rental mobil <?php echo $car['Merk']; ?>"
                                class="btn btn-warning btn-outline-black mr-1">Book now</a>
                        <button type="button" class="btn btn-default btn-outline-black ml-1"><?php echo anchor('Users/Produk_detail/get/'.$car['id_mobil'],'Detail');?></button>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>

<!-- service -->
<section class="ftco-section services-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                <span class="subheading">Our Services</span>
                <h2 class="mb-2">Our Services</h2>
            </div>
        </div>
        <div class="row d-flex">
        <?php foreach ($hasil as $key => $serv) {?>
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services">
                    <div class="media-body py-md-4">
                        <div class="d-flex mb-3 align-items-center">
                            <div class="icon"><span class="flaticon-placeholder"></span></div>
                            <h3 class="heading mb-0 pl-3"><?php echo $serv['Title'];?></h3>
                        </div>
                        <p><?php echo $serv['Desc'];?></p>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>

<section class="ftco-section testimony-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                <span class="subheading">Our Services</span>
                <h2 class="mb-2">Frequently Asked Questions</h2>
            </div>
        </div>
        <div class="accordion ftco-animate" id="accordionExample">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne"
                            aria-expanded="true" aria-controls="collapseOne">
                            MENGAPA RENTALMOBIL MENJADI PILIHAN RENTAL MOBIL DI JAKARTA ?
                        </button>
                    </h2>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                    data-parent="#accordionExample">
                    <div class="card-body">
                        Kami memiliki banyak armada sebagai pilihan kebutuhan transportasi anda meliputi New Xenia,
                        New Avanza, Innova, Luxury, Elf, dan kebutuhan mobil mewah seperti Mercy S240, Mercy S260,
                        Mercy S500, Toyota Camry, Toyota Fortuner, Toyota Alphard / Vellfire dengan harga sewa
                        mobil yang sangat kompetitif.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                            data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            APAKAH BISA MENYEWAKAN KENDARAAN DENGAN SISTEM LEPAS KUNCI ATAU HARUS MENGGUNAKAN JASA
                            DRIVER ?
                        </button>
                    </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        Pada prinsipnya fokus layanan kami adalah pelayanan sewa mobil plus driver. Namun tidak
                        menutup kemungkinan untuk lepas kunci, selama sudah ada approval dari team verifikasi data.
                        Data yang dikirimkan akan diproses oleh team yang salah satunya adalah survei rumah atau
                        tempat kerja.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                            data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            PAKET APA YANG DITAWARKAN OLEH RENTALMOBIL?
                        </button>
                    </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                        Kami menyediakan beberapa paket sewa mobil berdasarkan kebutuhan waktu dan keperluan
                        transportasi pelanggan. Apakah Anda ingin sewa secara per 12 jam, per day, mingguan atau
                        bulanan.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingFour">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                            data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            BAGAIMANA CARA PEMESANAN MOBIL DI RENTALMOBIL ?
                        </button>
                    </h2>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                    <div class="card-body">
                        Untuk pemesanan sangatlah mudah, Anda cukup klik tombol whatsapp yang tersedia dan infokan
                        kebutuhan mobil yang Anda inginkan.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingFive">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                            data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            METODE PEMBAYARAN APA YANG TERSEDIA ?
                        </button>
                    </h2>
                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                    <div class="card-body">
                        Untuk pembayaran, kami menyediakan beberapa metode pembayaran yang dapat dipilih sesuai
                        dengan keinginan dan kenyaman pelanggan. Diantaranya pembayaran dengan sistem transfer
                        maupun tunai.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>