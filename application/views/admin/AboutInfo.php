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
                                    <div class="card-header">About Information
                                        <div class="btn-actions-pane-right">
                                            <div role="group" class="btn-group-sm btn-group">
                                                <a href="<?php echo base_url('about_List'); ?>">
                                                <button class="btn btn-success">Back</button>
                                                </a>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive" style="padding:20px;">

                                    <p>
                                        <b>Title:</b> <?php echo  $about['about_title']; ?>
                                        
                                        </p>
                                        <hr>
                                        <p>
                                        <b>Description:</b> <?php echo  $about['about_description']; ?>
                                        
                                        </p>
                                        <hr>

                                        <hr>
                                      <p>
                                        <b>Images: </b><br><img width="50%;"  src="<?php echo base_url('upload/about/'.$about['about_img']); ?>" alt="">
                                        
                                        </p>
                                        <hr>

                                    
                                        
                                           
                                            
                                                
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
<?php $this->load->view('admin/includes/footerStyle'); ?>     
                                                
                                                    
                                                