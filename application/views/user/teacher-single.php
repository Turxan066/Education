<?php $this->load->view('user/includes/headerStyle'); ?>
  <?php $this->load->view('user/includes/navbar'); ?>
    <!-- END nav -->
    
    <div class="hero-wrap hero-wrap-2" style="background-image: url(<?php echo base_url('assets/user/'); ?>images/bg_2.jpg); background-attachment:fixed;">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo base_url('index'); ?>">Home</a></span> <span class="mr-2"></span> <span><?php echo $this->lang->line('Teacher Details'); ?></span></p>
            <h1 class="mb-3 bread"><?php echo $this->lang->line('Teacher Details'); ?></h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
        	<div class="col-md-10">
        		<div class="row">
        			<div class="col-md-12 mb-5">
        				<div class="teacher-details d-md-flex">
        					<div  class="img ftco-animate" style="background-size: contain; background-position: top; background-image: url(<?php echo base_url('upload/teacher/'.$t_single['teacher_list_img']); ?>);"></div>
        					<div class="text ftco-animate">
        						<h3><?php echo $t_single['teacher_list_name']." ".$t_single['teacher_list_surname']; ?></h3>
	        					<span class="position"><?php echo $t_single['teacher_list_profession']; ?></span>
	        					<p><?php echo $t_single['teacher_list_info']; ?></p>
                                <div class="mt-4">
                                    <?php if($t_single['t_fb'] || $t_single['t_wp'] || $t_single['t_ins']){ ?>
                                        <h4><?php echo $this->lang->line('Social Media'); ?></h4>
                                    <?php } ?>

		        					<p class="ftco-social d-flex">
                                        <?php if($t_single['t_fb']){ ?>
                                            <a target="_blank" href="<?php echo $t_single['t_fb']; ?>" class="d-flex justify-content-center align-items-center"><span class="icon-facebook"></span></a>
                                        <?php } ?>

                                        <?php if($t_single['t_wp']){ ?>
                                            <a target="_blank" href="<?php echo $t_single['t_wp']; ?>" class="d-flex justify-content-center align-items-center"><span class="icon-whatsapp"></span></a>
                                        <?php } ?>

                                        <?php if($t_single['t_ins']){ ?>
                                            <a target="_blank" href="<?php echo $t_single['t_ins']; ?>" class="d-flex justify-content-center align-items-center"><span class="icon-instagram"></span></a>
                                        <?php } ?>
                                    </p>
			                    </div>
        					</div>
        				</div>
        			</div>

        		</div>
        	</div>
        </div>
      </div>
    </section>
		


    <?php $this->load->view('user/includes/footer'); ?>
<?php $this->load->view('user/includes/footerStyle'); ?>