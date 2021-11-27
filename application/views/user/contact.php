<?php $this->load->view('user/includes/headerStyle'); ?>
  <?php $this->load->view('user/includes/navbar'); ?>
    <!-- END nav -->
    
    <div class="hero-wrap hero-wrap-2" style="background-image: url(<?php echo base_url('assets/user/'); ?>images/bg_2.jpg); background-attachment:fixed;">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo base_url('index'); ?>"><?php echo $this->lang->line('Home'); ?></a></span> <span><a href="<?php echo base_url('contact'); ?>"><?php echo $this->lang->line('Contact'); ?></a></span></p>
            <h1 class="mb-3 bread"><?php echo $this->lang->line('Contact Us'); ?></h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section contact-section ftco-degree-bg">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h4"><?php echo $this->lang->line('Contact Information'); ?></h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3">
            <p><span><?php echo $this->lang->line('Address:'); ?></span> Sebail ray.Badamdar qesebesi,Tofik Memmedov 14 Baku</p>
          </div>
          <div class="col-md-3">
            <p><span><?php echo $this->lang->line('Phone:'); ?></span> <a href="">(012) 502 02 64</a>
          </p>
          </div>
          <div class="col-md-3">
            <p><span><?php echo $this->lang->line('Email:'); ?></span> <a href="mailto:info@yoursite.com">babayeva0814@rambler.ru</a></p>
          </div>
          <div class="col-md-3">
            <p><span><?php echo $this->lang->line('Wepsite:'); ?></span> <a href="#">Baki tedris Merkezi.com</a></p>
          </div>
        </div>
        <div class="row block-9">
        
        

          <div class="col-md-6 pr-md-5">
          	<h4 class="mb-4"><?php echo $this->lang->line('Do you have any questions?'); ?></h4>
            <?php if($this->session->flashdata('success')){ ?>
          <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <?php echo $this->session->flashdata('success'); ?>
          </div>
        <?php } ?>
            <?php if($this->session->flashdata('error')){ ?>
          <div class="alert alert-danger alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <?php echo $this->session->flashdata('error'); ?>
          </div>
        <?php } ?>
            <form action="<?php echo base_url('Contact_AddAct'); ?>" method="POST">
            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="<?php echo $this->lang->line('Your Name'); ?>" name="name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="<?php echo $this->lang->line('Your Email'); ?>" name="email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="<?php echo $this->lang->line('Subject'); ?>" name="subject">
              </div>
              <div class="form-group">
                <textarea cols="30" rows="7" class="form-control" placeholder="<?php echo $this->lang->line('Message'); ?>" name="message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="<?php echo $this->lang->line('Send Message'); ?>" class="btn btn-primary py-3 px-5">
              </div>
              
            </form>
          
          </div>

          <div class="col-md-6" >
          <div class="map">
            <div style="height: 300px; width: 100%;">
                <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6078.73526600192!2d49.848567!3d40.378544!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x53a5c1e7cc11c36f!2zQXrJmXJiYXljYW4gRMO2dmzJmXQgTmVmdCB2yZkgU8mZbmF5ZSBVbml2ZXJzaXRldGk!5e0!3m2!1sen!2sus!4v1566812188664!5m2!1sen!2sus" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe> -->

                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3041.1148092538338!2d49.806831015393634!3d40.33979907937409!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40307e92f0b29f39%3A0xc7c88a7bdf70cee2!2sBaki%20Tedris%20Merkezi%20Kurs!5e0!3m2!1saz!2s!4v1633245922738!5m2!1saz!2s" width="600" height="450" style="border:0px;" allowfullscreen="" loading="lazy"></iframe>

            </div>

        </div>
          </div>
        </div>
      </div>
    </section>
		
<!--		<section class="ftco-section-parallax">-->
<!--      <div class="parallax-img d-flex align-items-center">-->
<!--        <div class="container">-->
<!--          <div class="row d-flex justify-content-center">-->
<!--            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">-->
<!--              <h2>Subcribe to our Newsletter</h2>-->
<!--              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>-->
<!--              <div class="row d-flex justify-content-center mt-5">-->
<!--                <div class="col-md-8">-->
<!--                  <form action="#" class="subscribe-form">-->
<!--                    <div class="form-group d-flex">-->
<!--                      <input type="text" class="form-control" placeholder="Enter email address">-->
<!--                      <input type="submit" value="Subscribe" class="submit px-3">-->
<!--                    </div>-->
<!--                  </form>-->
<!--                </div>-->
<!--              </div>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->
<!--    </section>-->

   
    
  

  <!-- loader -->
  <?php $this->load->view('user/includes/footer'); ?>
<?php $this->load->view('user/includes/footerStyle'); ?>