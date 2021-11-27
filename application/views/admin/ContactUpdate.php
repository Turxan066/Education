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
                                    <div class="card-header">Update Contact
                                        <div class="btn-actions-pane-right">
                                            <div role="group" class="btn-group-sm btn-group">
                                                <a href="<?php echo base_url('Contact_List'); ?>">
                                                <button class="btn btn-success">All Contact list</button>
                                                </a>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div style="padding:20px;">
                                    <form action="<?php echo base_url('Contact_UpdateAct/'.$contactList['c_id']); ?>" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                                            <label for="name">Name</label>
                                            <input type="text"class="form-control"  name="name" placeholder="Name"value="<?php echo $contactList['c_name']; ?>">
                                            <br>    
                                            <label for="surname">Surname</label>
                                            <input type="email"class="form-control"name="email"value="<?php echo $contactList['c_email']; ?>">
                                            <br>
                                            <label for="Subject">Subject</label>
                                            <input type="text"class="form-control"name="subject"value="<?php echo $contactList['c_subject']; ?>">
                                            <br>
                                            <label for="Message">Message</label>
                                            <textarea name="message" class="form-control editor" cols=5" rows="5"><?php echo $contactList['c_message'];?></textarea>
                                            <br>


                                            
                                        
                                           
                                               

                                                

                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-top: 20px; float:left">
                                                    
                                                    <div class="row">
                                                        
                                                        <button type="submit" class="btn btn-success btn-block">Update</button>
                                                    </div>
                                                </div>
                                            
                                            </div>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                        
                  
                
<?php $this->load->view('admin/includes/footerStyle'); ?>