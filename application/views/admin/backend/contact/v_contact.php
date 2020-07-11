<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr style="font-size: 13px; text-align: center;">
                            <th>id</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php function limit_words($string, $word_limit){ $words = explode(" ",$string);
                        return implode(" ",array_splice($words,0,$word_limit));
                    }
                    foreach ($hasil as $i) :
                        $id=$i['id_mess'];
                        $nama=$i['Nama'];
                        $email=$i['Email'];
                        $telp=$i['Telp'];
                        $isi=$i['Pesan'];
                        ?>
                        <tr style="font-size: 14px;">
                            <td><?php echo $id++; ?></td>
                            <td><?php echo $i['Nama']; ?></td>
                            <td><?php echo $i['Email']; ?></td>
                            <td><?php echo $i['Telp']; ?></td>
                            <td><?php echo $i['Pesan']; ?></td>
                            <td>
                                <ul class="list-inline m-0">
                                    <li class="list-inline-item">
                                        <button class="btn btn-sm rounded-0" type="button" data-toggle="tooltip"
                                            data-placement="top" title="Delete"><i
                                                class="fa fa-trash"><?php echo anchor('Admin/Contact/delete/'.$i['id_mess'],'Hapus'); ?></i></button>
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