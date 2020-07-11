<div data-aos="zoom-in" class="services-section"
    style="background-image: url('<?php echo base_url()?>assets/images/bg_2.jpg'); width: 100%; height: 150px;">
    <div class="overlay"></div>
    <div class="container">
    </div>
</div>

<!-- Services -->
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

<!-- Work Flow -->
<section class="ftco-section services-section img"
    style="background-image: url('<?php echo base_url()?>assets/images/bg_2.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                <span class="subheading">Work flow</span>
                <h2 class="mb-3">How it works</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services services-2">
                    <div class="media-body py-md-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center"><span
                                class="flaticon-route"></span></div>
                        <h3>Pilih Wisata Anda</h3>
                        <p>Pilih lokasi wisata anda kemudian pilih mobil kesukaan anda</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services services-2">
                    <div class="media-body py-md-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center"><span
                                class="flaticon-select"></span></div>
                        <h3>Pilih Mobil Anda</h3>
                        <p>Pilih mobil selera anda, dan nikmati perjalanan anda</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services services-2">
                    <div class="media-body py-md-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center"><span
                                class="flaticon-rent"></span></div>
                        <h3>Pilih Paket Anda</h3>
                        <p>Pilih Paket sesuai selera anda, dan nikmati perjalanan anda</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services services-2">
                    <div class="media-body py-md-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center"><span
                                class="flaticon-review"></span></div>
                        <h3>Enjoy The Ride</h3>
                        <p>Selalu nikmati perjalanan tanpa memikirkan kerusakan kendaraan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonial -->
<section class="ftco-section testimony-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading">Testimonial</span>
                <h2 class="mb-3">Happy Clients</h2>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="col-md-12">
            <?php foreach ($testi as $key => $test) {?>
                <div class="carousel-testimony owl-carousel ftco-owl">
                    <!-- <div class="item"> -->
                        <div class="testimony-wrap text-center py-4 pb-5">
                            <div class="text pt-4">
                                <p class="mb-4"><?php echo $test['Pesan'];?></p>
                                <p class="name"><?php echo $test['Nama'];?></p>
                                <!-- <span class="position">Marketing Manager</span> -->
                            </div>
                        </div>
                    <!-- </div> -->
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>