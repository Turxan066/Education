<?php $this->load->view('admin/includes/headerStyle'); ?>
<?php $this->load->view('admin/includes/navbar'); ?>
<?php $this->load->view('admin/includes/LeftMenu'); ?>    
<?php $this->load->view('admin/includes/Pagename'); ?>            
         <?php if($this->session->flashdata('success')){ ?>
            <div class="alert alert-success alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <?php echo $this->session->flashdata('success'); ?>
            </div>
         <?php } ?>
         
                        <div class="row">
                            <div class="col-md-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-header">Teacher Information
                                        <div class="btn-actions-pane-right">
                                            <div role="group" class="btn-group-sm btn-group">
                                                <a href="<?php echo base_url('teacher_list'); ?>">
                                                <button class="btn btn-success">Back</button>
                                                </a>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive" style="padding:20px;">

                                    <p>
                                        <b>Name:</b> <?php echo  $singleTeacher['teacher_list_name']; ?>
                                        
                                        </p>
                                        <hr>
                                        <p>
                                        <b>Surname:</b> <?php echo  $singleTeacher['teacher_list_surname']; ?>
                                        
                                        </p>
                                        <hr>
                                        <p>
                                        <b>Profession</b> <?php echo $singleTeacher['teacher_list_profession']; ?>
                                        
                                        </p>
                                        <hr>

                                        <p>
                                        <b>Information:</b> <?php echo $singleTeacher['teacher_list_info']; ?>
                                        
                                        </p>
                                        <hr>
          

                                        <p>
                                        <b>Img: </b><br><img width="300px;"height="300px;"  src="<?php echo base_url('upload/teacher/'.$singleTeacher['teacher_list_img']); ?>" alt="">
                                        
                                        </p>
                                        <hr>

                                    
                                        
                                           
                                            
                                                
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
<?php $this->load->view('admin/includes/footerStyle'); ?>     
                                                
                                                    
                                                