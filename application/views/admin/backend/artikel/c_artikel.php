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
            <form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>Admin/Article/simpan_post/">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="form-row">
                            <!-- Material input -->
                            <label for="title">Title</label>
                            <input type="text" class="form-control" name="Title">

                            <label for="Desc">Artikel</label>
                            <textarea id="texteditor" class="texteditor" name="isi" style="height: 800px;"></textarea>

                            <label>Image</label>
                            <input type="file" class="form-control" id="userfile" name="userfile">

                            <label>Tanggal sekarang</label>
                            <input type="date" class="form-control" id="date" name="date">
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