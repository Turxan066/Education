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
                                    <div class="card-header">Update News
                                        <div class="btn-actions-pane-right">
                                            <div role="group" class="btn-group-sm btn-group">
                                                <a href="<?php echo base_url('Admin_Newslist'); ?>">
                                                <button class="btn btn-success">All News</button>
                                                </a>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div style="padding:20px;">
                                <form action="<?php echo base_url('Admin_updatePostAct/'.$singleNews['id']); ?>" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                                        <label for="title">Title</label>
                                        <input type="text"class="form-control" id="title" name="title" placeholder="Enter News Title"value="<?php echo $singleNews['title']; ?>">
                                         <br>
                                         <label for="description">Description</label>
                                        <textarea name="description" class="form-control editor" id="description" cols="30" rows="10"><?php echo $singleNews['description']; ?></textarea>
                                        <br>
                                        <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2S" style="display: inline-block; float:left;">
                                        <div class="row">
                                        <label for="date">Date</label>
                                        <input type="date" name="date" class="form-control" id="date"value="<?php echo $singleNews['date']; ?>">

                                        
                                            </div>
                                        </div>
                                                
                                                <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2"style="display: inline-block;float:left;">
                                                       
                                                        <label for="image">Status</label>
                                                        <select name="status" id="status" class="form-control">
                                                            <option <?php if($singleNews['status']== ""){echo "SELECTED";} ?> value="">-Select-</option>
                                                            <option <?php if($singleNews['status']== "Active"){echo "SELECTED";} ?> value="Active">Active</option>
                                                            <option <?php if($singleNews['status']== "Passive"){echo "SELECTED";} ?> value="Passive">Passive</option>
                                                        </select>
                                                    
                                                </div>

                                                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4"style="display: inline-block;float:left;">
                                                       
                                                    <div class="row">
                                                        <label for="teacher">Teacher</label>
                                                        <select name="teacher" id="teacher" class="form-control">

                                                            <option <?php if($singleNews['teacher']== ""){echo "SELECTED";} ?> value="">-Select-</option>
                                                            <?php foreach($allTeacher as $allTeacher_key){ ?>
                                                                <option <?php if($singleNews['teacher']== $allTeacher_key['teacher_list_id']){echo "SELECTED";} ?> value="<?php echo $allTeacher_key['teacher_list_id']; ?>"><?php echo $allTeacher_key['teacher_list_name']." ".$allTeacher_key['teacher_list_surname']." - ".$allTeacher_key['teacher_list_profession']; ?></option>
                                                                
                                                            <?php } ?>

                                                        </select>
                                                    </div>  
                                                        
                                                        

                                                
                                                    
                                                </div>

                                                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4"style="display: inline-block;float:left;">
                                                    
                                                        <label for="image">
                                                            <img width="70px" src="<?php echo base_url('assets/admin/assets/images/folder-icon.png') ?>" alt="">
                                                        </label>
                                                        <input type="file" name="user_file" class="form-control" id="image" style="display: none;">
                                                         <img style="width:150px;height:70px;object-fit:cover;margin-left:20px;" src="<?php echo base_url('upload/news/'.$singleNews['images']); ?>" alt="">
                                                  
                                                </div>

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
                </div>
                
<?php $this->load->view('admin/includes/footerStyle'); ?>