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
            <?php $id = $hasil->id_admin; echo form_open_multipart('Admin/Auth/edit/'.$id);?>
            <form method="post" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="form-row">
                            <!-- Grid column -->
                            <div class="col-md-6">
                                <!-- Material input -->
                                <div class="md-form form-group">
                                    <input type="text" class="form-control" name="id" value="<?php echo $hasil->id_admin ?>" disabled>
                                    <label for="id">Id Admin</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- Material input -->
                                <div class="md-form form-group">
                                    <input type="text" class="form-control" name="nama" value="<?php echo $hasil->name ?>">
                                    <label for="Nama">Nama</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- Material input -->
                                <div class="md-form form-group">
                                    <input type="email" class="form-control" name="email" value="<?php echo $hasil->email ?>">
                                    <label for="Email">Email</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- Material input -->
                                <div class="md-form form-group">
                                    <input type="password" class="form-control" name="pass" value="<?php echo $hasil->password ?>">
                                    <label for="pass">Password</label>
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