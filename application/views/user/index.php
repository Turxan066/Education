
    
    <?php $this->load->view('user/includes/headerStyle'); ?>
    <?php $this->load->view('user/includes/navbar'); ?>
  
    <!-- END nav -->
    
    <div class="hero-wrap" style="background-image: url(<?php echo base_url('assets/user/'); ?>images/bg_1.jpg); background-attachment:scroll;">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true" style="height: 600px!important;">
          <div class="col-md-8 ftco-animate text-center">
          
            <h1 class="mb-4"><?php echo $this->lang->line('welcome_message'); ?></h1>
            <p><a href="http://localhost/genius/contact" class="btn btn-primary px-4 py-3"><?php echo $this->lang->line('apply now'); ?></a> <a href="http://localhost/genius/course" class="btn btn-secondary px-4 py-3"><?php echo $this->lang->line('view courses'); ?></a></p>
          </div>
        </div>
      </div>
    </div>

    

    <section class="ftco-section">
    	<div class="container">
    		<div class="row">
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services p-3 py-4 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center mb-3"><span class="flaticon-exam"></span></div>
              <div class="media-body px-3">
                <h3 class="heading"><?php echo $this->lang->line('Admission'); ?></h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services p-3 py-4 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center mb-3"><span class="flaticon-blackboard"></span></div>
              <div class="media-body px-3">
                <h3 class="heading"><?php echo $this->lang->line('Notice Board') ?></h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services p-3 py-4 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center mb-3"><span class="flaticon-books"></span></div>
              <div class="media-body px-3">
                <h3 class="heading"><?php echo $this->lang->line('Our Library'); ?></h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>    
          </div>
        </div>
    	</div>
    </section>


    <section class="ftco-section-3 img" style="background-image: url(<?php echo base_url('assets/user/'); ?>images/bg_3.jpg);">
    	<div class="overlay"></div>
    	<div class="container">
    		<div class="row d-md-flex justify-content-center">
    			<div class="col-md-9 about-video text-center">
    				<h2 class="ftco-animate"><?php echo $this->lang->line('Baku Education Center'); ?></h2>
    				<div class="video d-flex justify-content-center">
    					<a href="<?php echo $video['s_video']; ?>" class="button popup-vimeo d-flex justify-content-center align-items-center"><span class="ion-ios-play"></span></a>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
    <section class="ftco-counter bg-light" id="section-counter">
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-md-10">
		    		<div class="row">
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="10300">0</strong>
		                <span><?php echo $this->lang->line('Satisfied Students'); ?></span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="7896">0</strong>
		                <span><?php echo $this->lang->line('Courses Completed'); ?></span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="400">0</strong>
		                <span><?php echo $this->lang->line('Expert Advisors'); ?></span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="200">0</strong>
		                <span><?php echo $this->lang->line('Schools'); ?></span>
		              </div>
		            </div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section bg-light">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
              <a href="<?php echo base_url('teacher'); ?>">
                  <h2 class="mb-4"><?php echo $this->lang->line('Our Experience Advisor '); ?></h2>
              </a>
          </div>
        </div>
        <div class="row">
            <?php foreach ($allTeacher as $item) { ?>
                <div class="col-lg-4 mb-sm-4 ftco-animate">
                    <div class="staff" style="height: 180px;">
                        <div class="d-flex mb-4">
                            <div class="img" style="background-image: url(<?php echo base_url('upload/teacher/'.$item['teacher_list_img']); ?>);"></div>
                            <div class="info ml-4">
                                <h3 style="font-size: 18px"><a href="teacher-single.html"><?php echo $item['teacher_list_name']." ".$item['teacher_list_surname']; ?></a></h3>
                                <span class="position"><?php echo $item['teacher_list_profession']; ?></span>
                                <p class="ftco-social d-flex">
                                    <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-twitter"></span></a>
                                    <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-facebook"></span></a>
                                    <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-instagram"></span></a>
                                    
                                    
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



    

    <section class="ftco-freeTrial">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12">
    				<div class="d-flex align-items-center">
			    		<div class="free-trial ftco-animate">
			    			<h3><?php echo $this->lang->line('Try our free trial course'); ?></h3>
			    			<p><?php echo $this->lang->line('Yesterday I was clever, so I wanted to change the world. Today I am wise, so I am changing myself.'); ?></p>
			    		</div>
			    		<div class="btn-join ftco-animate">
			    			<p><a href="<?php echo base_url('contact'); ?>" class="btn btn-primary py-3 px-4"><?php echo $this->lang->line('Join now!'); ?></a></p>
			    		</div>
			    	</div>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
              <a href="<?php echo base_url('course'); ?>">
                  <h2 class="mb-4"><?php echo $this->lang->line('Our Courses'); ?></h2>
              </a>
          </div>
        </div>
    		<div class="row">

        <?php foreach($courses as $value){ ?>
          <div class="col-md-3 d-flex ftco-animate">
    				<div class="course align-self-stretch" style="width:100%;">
    					<a href="#" class="img" style="background-image: url(<?php echo base_url('upload/news/'.$value['images']); ?>)"></a>
    					<div class="text p-4">
    						<p class="category"><span><?php echo $value['date']; ?></span></p>
    						<h3 class="mb-3"><a href="#"><?php echo $value['title']; ?></a></h3>
    						<!-- <p><?php echo $value['description']; ?></p> -->
    						
                <p class="category"><span>Muellim: <?php echo $value['teacher_list_name']." ".$value['teacher_list_surname']; ?></span></p>
                <p><a href="http://localhost/genius/contact" class="btn btn-primary"><?php echo $this->lang->line('Enroll now!'); ?></a></p>
    					</div>
    				</div>
    			</div>
        <?php } ?>
    			
    			
    			
    		</div>
<!--    		<div class="row justify-content-center mt-5">-->
<!--        	    <div class="col-md-10 ftco-animate">-->
<!--        		    <p><strong>When she reached</strong> the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>-->
<!--        		    <p><span>Just Browsing?</span><a href="course.html"> View All Courses</a></p>-->
<!--        	    </div>-->
<!--            </div>-->
    	</div>
    </section>

    

    
		
<!--		<section class="ftco-section-parallax">-->
<!--      <div class="parallax-img d-flex align-items-center">-->
<!--        <div class="container">-->
<!--          <div class="row d-flex justify-content-center">-->
<!--            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">-->
<!--              <h2>--><?php //echo $this->lang->line('Subcribe to our Newsletter'); ?><!--</h2>-->
<!--              <p>--><?php //echo $this->lang->line('When in Rome, do as the Romans.'); ?><!--</p>-->
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