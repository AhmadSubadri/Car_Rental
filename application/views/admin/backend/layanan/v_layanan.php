<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <strong><?php echo $title; ?></strong>
            <span style="float:right">
                <a href="<?php echo site_url('administrator/services/create')?>" style="background: blue;"
                    class="btn btn-warning" role="button" title="New Data">+ Data</i></a>
            </span>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr style="font-size: 13px; text-align: center;">
                            <th>No</th>
                            <th>Title</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; foreach($hasil as $list){?>
                        <tr style="font-size: 14px;">
                            <td><?php echo $no++;?></td>
                            <td><?php echo $list['Title'];?></td>
                            <td><?php echo $list['Desc'];?></td>
                            <!-- <td><div style="width: 100px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><?php echo $list['Desc'];?></div></td> -->
                            <td>
                                <ul class="list-inline m-0">
                                    <li class="list-inline-item">
                                        <button class="btn btn-sm rounded-0" type="button"
                                            data-toggle="tooltip" data-placement="top" title="Edit"><i
                                                class="fa fa-edit"><?php echo anchor('Admin/Layanan/edit/'.$list['id_layanan'],'Edit'); ?></i></button>
                                    </li>
                                    <li class="list-inline-item">
                                        <button class="btn btn-sm rounded-0" type="button"
                                            data-toggle="tooltip" data-placement="top" title="Delete"><i
                                                class="fa fa-trash"><?php echo anchor('Admin/Layanan/delete/'.$list['id_layanan'],'Hapus'); ?></i></button>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
</div>