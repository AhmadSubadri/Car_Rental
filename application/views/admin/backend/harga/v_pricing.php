<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <span style="float:right">
                <a href="<?php echo site_url('administrator/harga/create')?>" style="background: blue;"
                    class="btn btn-warning" role="button" title="New Data">+ Data</i></a>
            </span>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr style="font-size: 13px; text-align: center;">
                            <th>id</th>
                            <th>Detail</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php function limit_words($string, $word_limit){ $words = explode(" ",$string);
                        return implode(" ",array_splice($words,0,$word_limit));
                    }
                    foreach ($hasil as $i) :
                        $id=$i['id_pric'];
                        $isi=$i['detail'];
                        ?>
                        <tr style="font-size: 14px;">
                            <td><?php echo $id++; ?></td>
                            <td><?php echo $i['detail'];?></td>
                            <td>
                                <ul class="list-inline m-0">
                                    <li class="list-inline-item">
                                        <button class="btn btn-sm rounded-0" type="button" data-toggle="tooltip"
                                            data-placement="top" title="Edit"><i
                                                class="fa fa-edit"><?php echo anchor('Admin/Pricing/edit/'.$i['id_pric'],'Edit'); ?></i></button>
                                    </li>
                                    <li class="list-inline-item">
                                        <button class="btn btn-sm rounded-0" type="button" data-toggle="tooltip"
                                            data-placement="top" title="Delete"><i
                                                class="fa fa-trash"><?php echo anchor('Admin/Pricing/delete/'.$i['id_pric'],'Hapus'); ?></i></button>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
</div>