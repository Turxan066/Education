<?php $this->load->view('admin/includes/headerStyle'); ?>
<?php $this->load->view('admin/includes/navbar'); ?>
<?php $this->load->view('admin/includes/LeftMenu'); ?>    
<?php $this->load->view('admin/includes/Pagename'); ?>   

<?php if($this->session->flashdata('error')){ ?>
            <div class="alert alert-danger alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <?php echo $this->session->flashdata('error'); ?>
            </div>
         <?php } ?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-header">Add Contact
                                        <div class="btn-actions-pane-right">
                                            <div role="group" class="btn-group-sm btn-group">
                                                <a href="<?php echo base_url('Contact_List'); ?>">
                                                <button class="btn btn-success">All Contact</button>
                                                </a>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div style="padding:20px;">

                                    <form action="<?php echo base_url('Contact_AddAct'); ?>" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                                                <label for="title">Name</label>
                                                <input type="text"class="form-control"name="name">
                                                <br>
                                                <label for="email">Email</label>
                                                <input type="email"class="form-control"name="email">
                                                <br>
                                                <label for="subject">Subject</label>
                                                <input type="text"class="form-control"name="subject">
                                                
                                                <br>
                                                <label for="message">Message</label>
                                                <textarea name="message" id="" cols="1" rows="6" class="form-control"name="message"></textarea>
                                                <br>
                                                
                                               
                                                
                                                        
                                                
                                             <!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-top: 1px; float:left"> -->
                                                    
                                                    <div class="row">
                                                        <button type="submit" class="btn btn-info btn-block pull-left">Add</button>
                                                    </div>
                                                </div>   

                                             </div>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>  

   <?php $this->load->view('admin/includes/footerStyle'); ?>                                             
                                            
                                            
                
