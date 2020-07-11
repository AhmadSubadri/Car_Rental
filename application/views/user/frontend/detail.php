<div data-aos="zoom-in" class="services-section"
    style="background-image: url('<?php echo base_url()?>assets/images/bg_2.jpg'); width: 100%; height: 150px;">
    <div class="overlay"></div>
    <div class="container">
    </div>
</div>

<section class="ftco-section">
    <div class="container px-4">
        <?php $id = $hasil->id_mobil;?>
        <div class="row">
            <div class="col-sm-4">
                <img src="<?php echo base_url()?>./upload/mobil/<?php echo $hasil->foto ?>" style="max-width: 100%;">
            </div>
            <div class="col-sm-8">
                <h2><?php echo $hasil->Merk ;?></h2>
                <p><?php echo $hasil->Deskripsi ?></p>
            </div>
            <div class="table-responsive table-bordered text-center">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Durasi</th>
                            <th scope="col">Jenis Paket</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Ahksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>12 Jam</th>
                            <td>Dengan Pengemudi Dalam Kota</td>
                            <td>Rp. <?php echo $hasil->tarif1 ?></td>
                            <td><a href="https://api.whatsapp.com/send?phone=+6281381945880&text=Hallo mas mau tanya-tanya untuk pesan rental mobil <?php echo $hasil->Merk; ?>"
                                    class="btn btn-warning btn-outline-black mr-1">Book now</a></td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <th>12 Jam</th>
                            <td>Dengan Pengemudi Luar Kota</td>
                            <td>Rp. <?php echo $hasil->tarif2 ?></td>
                            <td><a href="https://api.whatsapp.com/send?phone=+6281381945880&text=Hallo mas mau tanya-tanya untuk pesan rental mobil <?php echo $hasil->Merk; ?>"
                                    class="btn btn-warning btn-outline-black mr-1">Book now</a></td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <th>1 Hari</th>
                            <td>Sewa lepas kunci</td>
                            <td>Rp. <?php echo $hasil->tarif3 ?></td>
                            <td><a href="https://api.whatsapp.com/send?phone=+6281381945880&text=Hallo mas mau tanya-tanya untuk pesan rental mobil <?php echo $hasil->Merk; ?>"
                                    class="btn btn-warning btn-outline-black mr-1">Book now</a></td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <th>7 Hari</th>
                            <td>Sewa lepas kunci</td>
                            <td>Rp. <?php echo $hasil->tarif4 ?></td>
                            <td><a href="https://api.whatsapp.com/send?phone=+6281381945880&text=Hallo mas mau tanya-tanya untuk pesan rental mobil <?php echo $hasil->Merk; ?>"
                                    class="btn btn-warning btn-outline-black mr-1">Book now</a></td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <th>1 Bulan</th>
                            <td>Sewa lepas kunci</td>
                            <td>Rp. <?php echo $hasil->tarif5 ?></td>
                            <td><a href="https://api.whatsapp.com/send?phone=+6281381945880&text=Hallo mas mau tanya-tanya untuk pesan rental mobil <?php echo $hasil->Merk; ?>"
                                    class="btn btn-warning btn-outline-black mr-1">Book now</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-8">
                <p><b>Rental Mobil <?php echo $hasil->Merk ;?> Jakarta Selatan, Rental Mobil <?php echo $hasil->Merk ;?>
                        Jakarta Utara, Rental Mobil <?php echo $hasil->Merk ;?> Jakarta Timur, Rental Mobil <?php echo $hasil->Merk ;?>
                        Jakarta Pusat, Rental mobil <?php echo $hasil->Merk ;?> Jakarta Barat</b> – Bagi anda yang sedang liburan di Jakarta
                    atau untuk keperluan bisnis, tentunya memerlukan kendaraan untuk sarana transportasi
                    liburan/bisnis. Kami menyediakan jasa layanan sewa <?php echo $hasil->Merk ;?> dengan driver.
                    Permintaan rent car <?php echo $hasil->Merk ;?> di Jakarta tetap laris. Karena pelanggan yang
                    memilih menggunakan rental
                    mobil <?php echo $hasil->Merk ;?> jakarta timur menginginkan, kenyamanan saat berada di dalam
                    kendaraan. <?php echo $hasil->Merk ;?>
                    yang kami sewakan, semua dalam kondisi prima karena kami selalu melakukan
                    perawatan secara rutin terhadap semua unit kami. Meliputi penggantian suku
                    cadang dan service yang dilakukan secara berkala. Hingga menjamin kenyamanan
                    dan kepuasan semua pelanggan yang menggunakan jasa penyewaan mobil <?php echo $hasil->Merk ;?>
                    jakarta Selatan yang kami sediakan ini.</p>

            </div>
            <div class="col-sm-4">
                <img src="<?php echo base_url()?>./upload/mobil/<?php echo $hasil->foto ?>" style="max-width: 100%;">
            </div>
            <h3><b>Layanan Rental mobil <?php echo $hasil->Merk ;?> jakarta</b></h3>
            <p>Rental mobil <?php echo $hasil->Merk ;?> Jakarta ini memiliki kapasitas penumpang maksimum
                <?php echo $hasil->Seat ;?> orang belum
                termasuk supir dengan ruang yang luas sehingga anda dapat menikmati perjalanan
                liburan anda tanpa perlu berdesak-desakan di dalam cabin mobil. <?php echo $hasil->Merk ;?> didukung
                dengan ruang bagasi yang luas, sangatlah cocok bagi anda yang membawa bagasi dalam
                jumlah banyak jadi dapat dikatakan <?php echo $hasil->Merk ;?> adalah kendaraan keluarga paling
                ideal di Indonesia.
        </div>
    </div>
</section>