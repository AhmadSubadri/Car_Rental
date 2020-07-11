<div data-aos="zoom-in" class="services-section"
    style="background-image: url('<?php echo base_url()?>assets/images/bg_2.jpg'); width: 100%; height: 150px;">
    <div class="overlay"></div>
    <div class="container">
    </div>
</div>

<div class="container contact-form">
    <form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>Admin/Contact/simpan_post/">
        <h3>Send us a message as a testimonial</h3>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" name="txtName" class="form-control" placeholder="Your Name *" value="" required/>
                </div>
                <div class="form-group">
                    <input type="email" name="txtEmail" class="form-control" placeholder="Your Email *" value="" required/>
                </div>
                <div class="form-group">
                    <input type="text" name="txtPhone" class="form-control" placeholder="Your Phone Number *"
                        value="" required/>
                </div>
                <div class="form-group">
                    <input type="submit" name="btnSubmit" class="btnContact" value="Send Message" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <textarea name="txtMsg" class="form-control" placeholder="Your Message *"
                        style="width: 100%; height: 150px;" required></textarea>
                </div>
            </div>
        </div>
    </form>
    <?php form_close() ?>
</div>

<style>
    .contact-form{
    background: #fff;
    margin-top: 10%;
    margin-bottom: 5%;
    width: 70%;
}
.contact-form .form-control{
    border-radius:1rem;
}
.contact-image{
    text-align: center;
}
.contact-image img{
    border-radius: 6rem;
    width: 11%;
    margin-top: -3%;
    transform: rotate(29deg);
}
.contact-form form{
    padding: 14%;
}
.contact-form form .row{
    margin-bottom: -7%;
}
.contact-form h3{
    margin-bottom: 8%;
    margin-top: -10%;
    text-align: center;
    color: #0062cc;
}
.contact-form .btnContact {
    width: 50%;
    border: none;
    border-radius: 1rem;
    padding: 1.5%;
    background: #dc3545;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
}
.btnContactSubmit
{
    width: 50%;
    border-radius: 1rem;
    padding: 1.5%;
    color: #fff;
    background-color: #0062cc;
    border: none;
    cursor: pointer;
}
</style>