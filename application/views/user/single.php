<?php $this->load->view('user/includes/headerStyle'); ?>
  <?php $this->load->view('user/includes/navbar'); ?>
    <!-- END nav -->
    
    <div class="hero-wrap hero-wrap-2" style="background-image: url(<?php echo base_url('assets/user/'); ?>/bg_2.jpg); background-attachment:fixed;">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo base_url('index'); ?>"><?php echo $this->lang->line('Home'); ?></a></span> <span class="mr-2"><a href="<?php echo base_url('course'); ?>"><?php echo $this->lang->line('Course Details'); ?></a></span></p>
            <h1 class="mb-3 bread"><?php echo $this->lang->line('Course Details'); ?></h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-8 ftco-animate" style="padding-top: 20px;">
              <p>
                  <img src="<?php echo base_url('upload/news/'.$course_single['images']); ?>" alt="" class="img-fluid">
              </p>
              <div class="tag-widget post-tag-container mb-5 mt-5">
                  <div class="tagcloud">
                      <a href="#" class="tag-cloud-link">Muellim: <?php echo $course_single['teacher_list_name']." ".$course_single['teacher_list_surname'];  ?></a>
                      <a href="#" class="tag-cloud-link"><?php echo $course_single['date'];  ?></a>
                  </div>
              </div>
              <h2 class="mb-3"><?php echo $course_single['title']; ?></h2>
              <p><?php echo $course_single['description'];  ?></p>


            





          </div> <!-- .col-md-8 -->
          <div class="col-md-4 sidebar ftco-animate">

            <div class="sidebar-box ftco-animate">
              <h3>Diger kurslar</h3>
                <?php foreach ($courses as $item) { ?>
                    <div class="block-21 mb-4 d-flex">
                        <a href="<?php echo base_url('single/'.$item['id']); ?>" class="blog-img mr-4" style="background-image: url(<?php echo base_url('upload/news/'.$item['images']); ?>);"></a>
                        <div class="text">
                            <h3 style="margin-bottom: 0px;" class="heading"><a href="#"><?php echo $item['title']; ?></a></h3>
                            <?php if(strlen($item['description']) < 50 ){ ?>
                                <span><?php echo $item['description']; ?></span>
                            <?php }else{ ?>
                                <span><?php echo substr($item['description'], 0, 60)."..."; ?></span>
                            <?php } ?>
<!--                            <div class="meta">-->
<!--                                <div><a href="#"><span class="icon-calendar"></span> --><?php //echo $item['date']; ?><!--</a></div>-->
<!---->
<!--                            </div>-->
                        </div>
                    </div>
                <?php } ?>


            </div>




          </div>

        </div>
      </div>
    </section> <!-- .section -->
		


    <?php $this->load->view('user/includes/footer'); ?>
<?php $this->load->view('user/includes/footerStyle'); ?>