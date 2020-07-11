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
            <?php $id = $hasil->id_pric; echo form_open_multipart('Admin/Pricing/edit/'.$id);?>
            <form method="post" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="form-row">
                            <!-- Material input -->
                            <input type="text" class="form-control" name="id" value="<?php echo $hasil->id_pric ?>"
                                disabled>
                            <label for="id">Id Pricing</label>

                            <label for="Desc">Artikel</label>
                            <textarea id="texteditor" class="texteditor" name="isi"
                                style="height: 800px;"><?php echo $hasil->detail ?></textarea>
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