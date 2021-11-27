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
                                    <div class="card-header">Courses List
                                        <div class="btn-actions-pane-right">
                                            <div role="group" class="btn-group-sm btn-group">
                                                <a href="<?php echo base_url('Admin_Addnews'); ?>">
                                                <button class="btn btn-success">Add Courses</button>
                                                </a>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                            <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th class="text-center">Course Name</th>
                                                <th class="text-center">Course Teacher</th>
                                                <th class="text-center">Date</th>
                                                <th class="text-center">Images</th>
                                                
                                                <th class="text-center">Status</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            <?php 
                                            
                                            $say = 1; foreach($allNews as $allNewsKey){  ?>
                                    
                                            <tr>
                                            <td class="text-center text-muted"><?php echo $say++; ?></td>
                                            <td class="text-center"><?php echo $allNewsKey['title']; ?></td>
                                            <td class="text-center"><?php echo $allNewsKey['teacher_list_name']." ".$allNewsKey['teacher_list_surname']; ?></td>  
                                            <td class="text-center"><?php echo $allNewsKey['date']; ?></td>
                                                
                                                <td class="text-center">
                                                    <img src="<?php echo base_url('upload/news/'.$allNewsKey['images']);  ?> " width="50px;" height="50px;" alt="" style="object-fit:cover">
                                                    
                                                    
                                                </td>
                                               
                                                <td class="text-center" style="width: 150px;">
                                                    <?php if($allNewsKey['status']=='Active'){ ?>
                                                        <div class="badge badge-success">Active</div>
                                                    <?php } else if($allNewsKey['status']=='Passive'){ ?>
                                                        <div class="badge badge-danger">Passive</div>
                                                    <?php }else{
                                                        echo '-';
                                                    } ?>
                                                </td>
                                                <td class="text-center">

                                            <a style="text-decoration:none;" onclick="return confirm('Məlumatı silmək istədiyinizə əminsiniz?')" href="<?php echo base_url('Admin_deletePost/'.$allNewsKey['id']); ?>">
                                            
                                            <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i class="pe-7s-trash btn-icon-wrapper"> </i></button>

                                            </a>
                                            
                                            
                                                    
                                            <a style="text-decoration:none;" href="<?php echo base_url('Admin_postInfo/'.$allNewsKey['id']); ?>">
                                            <button class="btn-wide btn btn-info">Info</button>
                                            </a>
                                            
                                            
                                            
                                            <a style="text-decoration:none;" href="<?php echo base_url('Admin_updatePost/'.$allNewsKey['id']); ?>">
                                                    
                                                <button class="btn-wide btn btn-success">Update</button> 
                                            </a>
                                                          
                                                
                                                
                                                
                                                    
                                                        
                                               </td>
                                            </tr>



                                            <?php } ?>

                                        </tbody>
                                        
                                         </table>
                                           
                                            
                                                
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
<?php $this->load->view('admin/includes/footerStyle'); ?>     
                                                
                                                    
                                                