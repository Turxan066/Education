<?php $this->load->view('user/includes/headerStyle'); ?>
  <?php $this->load->view('user/includes/navbar'); ?>
    <!-- END nav -->
    
    <div class="hero-wrap hero-wrap-2" style="background-image: url(<?php echo base_url('assets/user/'); ?>images/graduate.jpg); background-attachment:fixed;">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo base_url('index'); ?>"><?php echo $this->lang->line('Home'); ?></a></span>
            <a href="<?php echo base_url('course'); ?>">
            <span><?php echo $this->lang->line('Course'); ?></span>
            </a>
          </p>
            <h1 class="mb-3 bread"><?php echo $this->lang->line('Courses'); ?></h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row">
                <?php foreach ($courses as $item){ ?>
                    <div class="col-md-3 d-flex ftco-animate">
                        <div class="course align-self-stretch" style="width: 100%;">
                            <a href="<?php echo base_url('single/'.$item['id']); ?>" class="img" style="background-image: url(<?php echo base_url('upload/news/'.$item['images']); ?>)"></a>
                            <div class="text p-4">
                                <p class="category"><span><?php echo $item['date'] ?></span>
<!--                                    <span class="price">$250</span>-->
                                </p>
                                <h3 class="mb-3"><?php echo $item['title']; ?></h3>

<!--                                --><?php //if(strlen($item['description']) < 120 ){ ?>
<!--                                    <p>--><?php //echo $item['description']; ?><!--</p>-->
<!--                                --><?php //}else{ ?>
<!--                                    <p>--><?php //echo substr($item['description'], 0, 120)."..."; ?><!--</p>-->
<!--                                --><?php //} ?>

                                <p><a href="<?php echo base_url('single/'.$item['id']); ?>" class="btn btn-primary btn-md"><?php echo $this->lang->line('Enroll now!'); ?></a></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>


<!--    		<div class="row mt-5">-->
<!--          <div class="col text-center">-->
<!--            <div class="block-27">-->
<!--              <ul>-->
<!--                <li><a href="#">&lt;</a></li>-->
<!--                <li class="active"><span>1</span></li>-->
<!--                <li><a href="#">2</a></li>-->
<!--                <li><a href="#">3</a></li>-->
<!--                <li><a href="#">4</a></li>-->
<!--                <li><a href="#">5</a></li>-->
<!--                <li><a href="#">&gt;</a></li>-->
<!--              </ul>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
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

    
  

  <!-- loader -->
  <?php $this->load->view('user/includes/footer'); ?>
<?php $this->load->view('user/includes/footerStyle'); ?>