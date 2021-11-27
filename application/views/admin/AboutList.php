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
                                    <div class="card-header">About List
                                        <div class="btn-actions-pane-right">
                                            <div role="group" class="btn-group-sm btn-group">
                                                <a href="<?php echo base_url('add_About');  ?>">
                                                <button class="btn btn-success">Add About</button>
                                                </a>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                            <thead>
                                            <tr>
                                                    <th class="text-center">Title</th>
                                                    
                                                    <th class="text-center">Images</th>
                                                    <th class="text-center">Actions</th>
                                            </tr>   

                                            </thead>
                                            <tbody>

                                                <?php foreach($about  as $aboutKey){ ?>
                                                    <tr>
                                                        <td class="text-center "><?php echo $aboutKey['about_title'];?></td>
                                                        

                                                        <td class="text-center">
                                                            <?php if($aboutKey['about_img']){ ?>
                                                                <img style="width:150px;height:70px;object-fit:cover;margin-left:20px;" src="<?php echo base_url('upload/about/'.$aboutKey['about_img']); ?>" alt="">
                                                            <?php } ?>
                                                        </td>
                                                                        
                                                                            
                                                        <td class="text-center" style="width:200px;">

                                                            <a style="text-decoration:none;" onclick="return confirm('Məlumatı silmək istədiyinizə əminsiniz?')" href="<?php echo base_url('AboutDelete/'.$aboutKey['about_id']);  ?>">
                                                                                
                                                                <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i class="pe-7s-trash btn-icon-wrapper"> </i></button>

                                                            </a>

                                                            <a style="text-decoration:none;" href="<?php echo base_url('AboutUpdate/'.$aboutKey['about_id']); ?>">
                                                                <button class="btn-wide btn btn-success">Update</button>                         
                                                            </a>
                                                            <a style="text-decoration:none;" href="<?php echo base_url('About_Info/'.$aboutKey['about_id']); ?>">
                                                    
                                                    <button class="btn-wide btn btn-info">Info</button> 
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
                                                
                                                    
                                                