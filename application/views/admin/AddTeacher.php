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
                                    <div class="card-header">Add Teacher
                                        <div class="btn-actions-pane-right">
                                            <div role="group" class="btn-group-sm btn-group">
                                                <a href="<?php echo base_url('teacher_list'); ?>">
                                                <button class="btn btn-success">All Teachers</button>
                                                </a>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div style="padding:20px;">

                                    <form action="<?php echo base_url('add_Teacher_action'); ?>" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                                                <label for="title">Name</label>
                                                <input type="text"class="form-control" id="title" name="name" placeholder="Teacher Name">
                                                <br>
                                                <label for="surname">Surname</label>
                                                <input type="text"class="form-control" id="surname" name="surname" placeholder="Teacher Surname">
                                                <br>
                                                <label for="profession">Profession</label>
                                                <input type="text"class="form-control" id="profession" name="profession" placeholder="Profession ">
                                                <br>
                                                <label for="fb">Facebook</label>
                                                <input type="text" class="form-control" id="fb" name="fb" placeholder="Facebook">

                                                <br>
                                                <label for="wp">WhatsApp</label>
                                                <input type="text" class="form-control" id="wp" name="wp" placeholder="WhatsApp">

                                                <br>
                                                <label for="ins">Instagram</label>
                                                <input type="text" class="form-control" id="ins" name="ins" placeholder="Instagram">
                                                <br>
                                                <label for="information">Information</label>
                                                <textarea name="description" class="form-control editor" id="information" cols="30" rows="10"></textarea>
                                                <br>
                                                <label for="image">Images</label>
                                                <br>
                                               
                                                
                                         <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4"style="display: inline-block;float:left;">
                                                    <div class="row">
                                                        <label for="image">
                                                            <img width="70px" src="<?php echo base_url('assets/admin/assets/images/folder-icon.png') ?>" alt="">
                                                        </label>
                                                        <input type="file" name="user_file" class="form-control" id="image" style="display: none;">
                                                    </div>
                                                </div>       
                                                
                                             <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-top: 20px; float:left">
                                                    
                                                    <div class="row">
                                                        <button type="submit" class="btn btn-success btn-block pull-left">Add</button>
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
                                            
                                            
                
