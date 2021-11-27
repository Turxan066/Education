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

         <?php if($this->session->flashdata('err')){ ?>
            <div class="alert alert-danger alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <?php echo $this->session->flashdata('err'); ?>
            </div>
         <?php } ?>
         
                        <div class="row">
                            <div class="col-md-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-header">Admin List
                                        <div class="btn-actions-pane-right">
                                            <div role="group" class="btn-group-sm btn-group">
                                                <a href="<?php echo base_url('Add_Admin'); ?>">
                                                <button class="btn btn-success">Add Admin</button>
                                                </a>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                            <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th class="text-center">Username</th>
                                                <th class="text-center">Name/Surname</th>
                                                <th class="text-center">Img</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            <?php $say = 1; foreach($getAdmins as $getAdminsKey){ ?>

                                                <tr>
                                                    <td class="text-center text-muted"><?php echo $say++; ?></td>
                                                    <td class="text-center"><?php echo $getAdminsKey['a_username']; ?></td>
                                                    <td class="text-center"><?php echo $getAdminsKey['a_name']; ?></td>
                                                    
                                                    
                                                    
                                                    <td class="text-center">
                                                        <?php if($getAdminsKey['a_img']){ ?>
                                                            <img src="<?php echo base_url('upload/admin/'.$getAdminsKey['a_img']); ?>" width="50px;" height="50px;" alt="" style="object-fit:cover">
                                                        <?php }else{ ?>
                                                            <img src="<?php echo base_url('assets/admin/assets/images/No-image-available.png'); ?>" width="50px;" height="50px;" alt="" style="object-fit:cover">
                                                        <?php } ?>
                                                        
                                                        
                                                        
                                                    </td>
                                                
                                                    
                                                    <td class="text-center">

                                                        <a style="text-decoration:none;" onclick="return confirm('Məlumatı silmək istədiyinizə əminsiniz?')" href="<?php echo base_url('Admin_delete/'.$getAdminsKey['a_id']); ?>">
                                                
                                                            <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i class="pe-7s-trash btn-icon-wrapper"> </i></button>

                                                        </a>
                                                
                                                
                                                        
                                                        
                                                
                                                
                                                
                                                        <a style="text-decoration:none;" href="<?php echo base_url('Admin_Update/'.$getAdminsKey['a_id']); ?>">     
                                                            <button class="btn-wide btn btn-success">Update</button> 
                                                        </a>   
                                                            
                                                    </td>
                                                </tr>

                                            <?php } ?>
                                    
                                            



                                            
                                           
                                            
                                                
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
<?php $this->load->view('admin/includes/footerStyle'); ?>     
                                                
                                                    
                                                