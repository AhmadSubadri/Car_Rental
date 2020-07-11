    <!-- Modal input new data -->
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <?php if ($this->session->flashdata('success')) {?>
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <?php echo $this->session->flashdata('success'); ?>
            </div>
            <?php  } ?>
            <!-- validation message to display after form is submitted -->
            <?php echo validation_errors('<div class="alert alert-danger alert-dismissible" role="alert">
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                     <span aria-hidden="true">&times;</span></button>','</div>');
             ?>
            <!-- Modal content-->
            <?php $id = $hasil->id_mobil; echo form_open_multipart('Admin/Mobil/update/'.$id);?>
            <form method="post" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="form-row">
                            <!-- Grid column -->
                            <div class="col-md-6">
                                <!-- Material input -->
                                <div class="md-form form-group">
                                    <input type="text" class="form-control" name="id" value="<?php echo $hasil->id_mobil ?>" disabled>
                                    <label for="id">Id Mobil</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- Material input -->
                                <div class="md-form form-group">
                                    <input type="text" class="form-control" name="Merk" value="<?php echo $hasil->Merk ?>">
                                    <label for="Merk">Merk</label>
                                </div>
                            </div>
                            <!-- Grid column -->
                            <div class="col-md-6">
                                <div class="md-form form-group">
                                    <input type="year" class="form-control" name="Tahun" value="<?php echo $hasil->Tahun ?>">
                                    <label for="tahun">Tahun</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="md-form form-group">
                                    <input type="number" class="form-control" name="Seat" value="<?php echo $hasil->Seat ?>">
                                    <label for="seat">Seat</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="md-form form-group">
                                    <input type="text" class="form-control" name="Tarifone" value="<?php echo $hasil->tarif1 ?>">
                                    <label for="tarifone">Harga/12 jam + Driver dalam kota</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="md-form form-group">
                                    <input type="text" class="form-control" name="Tariftwo" value="<?php echo $hasil->tarif2 ?>">
                                    <label for="tariftwo">Harga/12 jam + Driver luar kota</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="md-form form-group">
                                    <input type="text" class="form-control" name="Tarifthree" value="<?php echo $hasil->tarif3 ?>">
                                    <label for="tarifthree">Harga/1 Hari Lepas kunci</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="md-form form-group">
                                    <input type="text" class="form-control" name="Tariffour" value="<?php echo $hasil->tarif4 ?>">
                                    <label for="tariffour">Harga/7 Hari Lepas kunci</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="md-form form-group">
                                    <input type="text" class="form-control" name="Tariffive" value="<?php echo $hasil->tarif5 ?>">
                                    <label for="tariffive">Harga/1 Bulan Lepas Kunci</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="md-form form-group">
                                    <textarea class="form-control" name="Desc" rows="3"
                                        placeholder="Deskripsi"><?php echo $hasil->Deskripsi ?></textarea>
                                    <label for="Desc">Deskripsi</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="md-form form-group">
                                    <label>Image</label>
                                    <input type="file" class="form-control" id="userfile" name="userfile">
                                    <img src="<?php echo base_url()?>./upload/mobil/<?php echo $hasil->foto ?>" width="100" alt="" name="userfile">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-primary" value="Upload" />
                    </div>
                </div>
            </form>
        </div>
    </div>