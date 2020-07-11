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
            <?php $id = $hasil->id_layanan; echo form_open_multipart('Admin/Layanan/edit/'.$id);?>
            <form method="post" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="form-row">
                            <!-- Grid column -->
                            <div class="col-md-6">
                                <!-- Material input -->
                                <div class="md-form form-group">
                                    <input type="text" class="form-control" name="id" value="<?php echo $hasil->id_layanan ?>" disabled>
                                    <label for="id">Id Layanan</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- Material input -->
                                <div class="md-form form-group">
                                    <input type="text" class="form-control" name="Title" value="<?php echo $hasil->Title ?>">
                                    <label for="Title">Title</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="md-form form-group">
                                    <textarea class="form-control" name="Desc" rows="3"
                                        placeholder="Deskripsi"><?php echo $hasil->Desc ?></textarea>
                                    <label for="Desc">Deskripsi</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-primary" value="Upload" />
                    </div>
                </div>
            </form>
            <?php form_close() ?>
        </div>
    </div>