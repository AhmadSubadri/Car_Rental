<div data-aos="zoom-in" class="services-section"
    style="background-image: url('<?php echo base_url()?>assets/images/bg_2.jpg'); width: 100%; height: 150px;">
    <div class="overlay"></div>
    <div class="container">
    </div>
</div>
<section class="ftco-section">
<?php foreach ($hasil as $key => $pricing) {?>
    <div class="container px-4">
        <?php echo $pricing['detail'];?>
    </div>
<?php } ?>
</section>