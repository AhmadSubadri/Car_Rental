<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <span style="float:right">
                <a href="<?php echo site_url('administrator/admin/cretae')?>" style="background: blue;"
                    class="btn btn-warning" role="button" title="New Data">+ Data</i></a>
            </span>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr style="font-size: 13px; text-align: center;">
                            <th>id</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php function limit_words($string, $word_limit){ $words = explode(" ",$string);
                        return implode(" ",array_splice($words,0,$word_limit));
                    }
                    foreach ($hasil as $i) :
                        $id=$i['id_admin'];
                        $name=$i['name'];
                        $email=$i['email'];
                        $pass=$i['password'];
                        ?>
                        <tr style="font-size: 14px;">
                            <td><?php echo $id++; ?></td>
                            <td><?php echo $i['name']; ?></td>
                            <td><?php echo $i['email']; ?></td>
                            <td><?php echo $i['password']; ?></td>
                            <td>
                                <ul class="list-inline m-0">
                                    <li class="list-inline-item">
                                        <button class="btn btn-sm rounded-0" type="button" data-toggle="tooltip"
                                            data-placement="top" title="Edit"><i
                                                class="fa fa-edit"><?php echo anchor('Admin/Auth/edit/'.$i['id_admin'],'Edit'); ?></i></button>
                                    </li>
                                    <li class="list-inline-item">
                                        <button class="btn btn-sm rounded-0" type="button" data-toggle="tooltip"
                                            data-placement="top" title="Delete"><i
                                                class="fa fa-trash"><?php echo anchor('Admin/Auth/delete/'.$i['id_admin'],'Hapus'); ?></i></button>
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