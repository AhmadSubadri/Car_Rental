<div data-aos="zoom-in" class="services-section"
    style="background-image: url('<?php echo base_url()?>assets/images/bg_2.jpg'); width: 100%; height: 150px;">
    <div class="overlay"></div>
    <div class="container">
    </div>
</div>

<section class="ftco-section">
    <div class="container px-4">
        <?php function limit_words($string, $word_limit){ $words = explode(" ",$string);
        return implode(" ",array_splice($words,10,$word_limit)); } foreach ($hasil as $i) :
        $id = $i['id_artikel'];
        $judul=$i['Title'];
        $isi=$i['Deskripsi'];
        $image=$i['foto'];
        $tgl=$i['tgl'];
        ?>
        <div class="row">
            <div class="col-sm-4">
                <img src="<?php echo base_url()?>./upload/artikel/<?php echo $i['foto']; ?>" style="max-width: 100%;">
            </div>
            <div class="col-sm-8">
            <p class="blockquote-footer">Update <?php echo $i['tgl'];?></p>
            <a href="<?php echo base_url()?>Users/Produk_detail/get_arikel/<?php echo $i['id_artikel']?>"><h2><?php echo $i['Title']?></h2></a>
            <?php echo limit_words($isi,30);?><a href="<?php echo base_url()?>Users/Produk_detail/get_arikel/<?php echo $i['id_artikel']?>" > <abbr title="Read More"> Read More</abbr></a>
            </div>
        </div><hr>
        <?php endforeach;?>
    </div>
</section>