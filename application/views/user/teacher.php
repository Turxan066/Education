<?php $this->load->view('user/includes/headerStyle'); ?>
  <?php $this->load->view('user/includes/navbar'); ?>
    <!-- END nav -->
    
    <div class="hero-wrap hero-wrap-2" style="background-image: url(<?php echo base_url('assets/user/'); ?>images/bg_2.jpg); background-attachment:fixed;">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo base_url('index'); ?>"><?php echo $this->lang->line('Home'); ?></a></span> <span><a href="<?php echo base_url('teacher') ?>"><?php echo $this->lang->line('Teacher Details') ?></a></span></p>
            <h1 class="mb-3 bread"><?php echo $this->lang->line('Teacher'); ?></h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section bg-light">
      <div class="container">
      	<div class="row justify-content-center pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4"><p><a href="<?php echo base_url('Our Experience Advisor'); ?>" class="nav-link"><?php echo $this->lang->line('Our Experience Advisor'); ?></a></p></h2>
          </div>
        </div>
        <div class="row">

            <?php foreach ($teacher as $item){ ?>
                <div class="col-lg-4 mb-sm-4 ftco-animate">
                    <div class="staff" style="padding: 20px 25px; height: 190px;display: flex; align-items: center;">
                        <div class="d-flex">
                            <div class="img" style="background-image: url(<?php echo base_url('upload/teacher/'.$item['teacher_list_img']); ?>);"></div>
                            <div class="info ml-4">
                                <h3><a href="<?php echo base_url('t_single/'.$item['teacher_list_id']); ?>"><?php echo $item['teacher_list_name']." ".$item['teacher_list_surname']; ?></a></h3>
                                <span class="position"><?php echo $item['teacher_list_profession']; ?></span>
                                <p class="ftco-social d-flex">
                                    <?php if($item['t_fb']){ ?>
                                        <a target="_blank" href="<?php echo $item['t_fb']; ?>" class="d-flex justify-content-center align-items-center"><span class="icon-facebook"></span></a>
                                    <?php } ?>

                                    <?php if($item['t_wp']){ ?>
                                        <a target="_blank" href="<?php echo $item['t_wp']; ?>" class="d-flex justify-content-center align-items-center"><span class="icon-whatsapp"></span></a>
                                    <?php } ?>

                                    <?php if($item['t_ins']){ ?>
                                        <a target="_blank" href="<?php echo $item['t_ins']; ?>" class="d-flex justify-content-center align-items-center"><span class="icon-instagram"></span></a>
                                    <?php } ?>



                                </p>
                            </div>
                        </div>
<!--                        <div class="text">-->
<!--                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>-->
<!--                        </div>-->

                    </div>
                </div>
            <?php } ?>







        </div>
      </div>
    </section>
		
<!--		<section class="ftco-section-parallax">-->
<!--      <div class="parallax-img d-flex align-items-center">-->
<!--        <div class="container">-->
<!--          <div class="row d-flex justify-content-center">-->
<!--            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">-->
<!--              <h2>--><?php //echo $this->lang->line('Subcribe to our Newsletter'); ?><!--</h2>-->
<!--              <p>--><?php //echo $this->lang->line('Don’t you pretend like you changed. Everybody knows that a leopard can’t change its spots.'); ?><!--</p>-->
<!--              <div class="row d-flex justify-content-center mt-5">-->
<!--                <div class="col-md-8">-->
<!--                  <form action="#" class="subscribe-form">-->
<!--                    <div class="form-group d-flex">-->
<!--                      <input type="text" class="form-control" placeholder="--><?php //echo $this->lang->line('Enter email address'); ?><!--">-->
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

	<?php $this->load->view('user/includes/footer'); ?>
<?php $this->load->view('user/includes/footerStyle'); ?>