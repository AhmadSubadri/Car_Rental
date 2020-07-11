<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <strong><?php echo $title; ?></strong>
            <span style="float:right">
                <a href="<?php echo site_url('adminstrator/mobil/create')?>" style="background: blue;"
                    class="btn btn-warning" role="button" title="New Data">+ Data</i></a>
            </span>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr style="font-size: 13px; text-align: center;">
                            <!-- <th>No</th> -->
                            <th>Merk</th>
                            <th>Tahun</th>
                            <th>Seat</th>
                            <th>12 jam + Driver dalam kota</th>
                            <th>12 jam + Driver luar kota</th>
                            <th>1 Hari lepas kunci</th>
                            <th>7 Hari lepas kunci</th>
                            <th>1 Bulan lepas kunci</th>
                            <th>Deskripsi</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no = 1;
                            foreach($hasil as $list){
								$foto = 'default.jpg';
                                if ($list['foto'] !='') {
									$foto = $list['foto'];
								}
                        ?>
                        <tr style="font-size: 14px;">
                            <!-- <td>1</td> -->
                            <td><?php echo $list['Merk'];?></td>
                            <td><?php echo $list['Tahun'];?></td>
                            <td><?php echo $list['Seat'];?></td>
                            <td><?php echo $list['tarif1'];?></td>
                            <td><?php echo $list['tarif2'];?></td>
                            <td><?php echo $list['tarif3'];?></td>
                            <td><?php echo $list['tarif4'];?></td>
                            <td><?php echo $list['tarif5'];?></td>
                            <td><div style="width: 100px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><?php echo $list['Deskripsi'];?></div></td>
                            <td><img style="height: 100px; width:80px" src="<?php echo base_url()?>./upload/mobil/<?php echo $foto ?>"></td>
                            <td>
                                <ul class="list-inline m-0">
                                    <li class="list-inline-item">
                                        <button class="btn btn-sm rounded-0" type="button"
                                            data-toggle="tooltip" data-placement="top" title="Edit"><i
                                                class="fa fa-edit"><?php echo anchor('Admin/Mobil/update/'.$list['id_mobil'],'Edit'); ?></i></button>
                                    </li>
                                    <li class="list-inline-item">
                                        <button class="btn btn-sm rounded-0" type="button"
                                            data-toggle="tooltip" data-placement="top" title="Delete"><i
                                                class="fa fa-trash"><?php echo anchor('Admin/Mobil/delete/'.$list['id_mobil'],'Hapus'); ?></i></button>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        <?php }
                          ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
</div>