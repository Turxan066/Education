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
                                    <div class="card-header">Info News
                                        <div class="btn-actions-pane-right">
                                            <div role="group" class="btn-group-sm btn-group">
                                                <a href="<?php echo base_url('Admin_Newslist'); ?>">
                                                <button class="btn btn-success">Back</button>
                                                </a>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive" style="padding:20px;">
                                        <p>
                                            <b>Status:</b> <?php echo  $singleNews['status']; ?>
                                        
                                        </p>
                                        <hr>
                                        <p>
                                            <b>Date:</b> <?php echo  $singleNews['date']; ?>
                                        </p>
                                        <hr>

                                        <p>
                                            <b>Teacher:</b> <?php echo  $singleNews['teacher_list_name']." ".$singleNews['teacher_list_surname']; ?>
                                        </p>
                                        <hr>
                                        <p>
                                            <b>Title:</b> <?php echo $singleNews['title']; ?>
                                        
                                        </p>
                                        <hr>

                                        <p>
                                            <b>Description:</b> <?php echo $singleNews['description']; ?>
                                        
                                        </p>
                                        <hr>
          

                                        <p>
                                        <b>Img: </b><br><img width="600px;"  src="<?php echo base_url('upload/news/'.$singleNews['images']); ?>" alt="">
                                        
                                        </p>
                                        <hr>

                                        

                                            
                                           
                                            
                                                
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
<?php $this->load->view('admin/includes/footerStyle'); ?>     
                                                
                                                    
                                                