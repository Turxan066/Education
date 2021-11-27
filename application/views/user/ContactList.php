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
                                    <div class="card-header">Contact List
                                        <div class="btn-actions-pane-right">
                                            <div role="group" class="btn-group-sm btn-group">
                                                <a href="<?php echo base_url('Contact_Add'); ?>">
                                                <button class="btn btn-success">Add Contact</button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">#</th>
                                                    <th class="text-center">Name</th>
                                                    <th class="text-center">Email</th>
                                                    <th class="text-center">Subject</th>
                                                    <th class="text-center">Message</th>
                                                    <th class="text-center">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                           
                                            <?php 
                                            
                                            $say = 1; foreach($contactList as $contactListKey){  ?>

                                                <tr>
                                                    <td class="text-center text-muted"><?php echo $say++; ?></td>
                                                    <td class="text-center text-muted"><?php echo $contactListKey['c_name']; ?></td>
                                                    <td class="text-center text-muted"><?php echo $contactListKey['c_email']; ?></td>
                                                    <td class="text-center text-muted"><?php echo $contactListKey['c_subject']; ?></td>
                                                    <td class="text-center text-muted"><?php echo $contactListKey['c_message']; ?></td>
                                                        
                                                        

                                                        
                                                    
                                                        <td class="text-center">
                                                
                                                                <a style="text-decoration:none;" onclick="return confirm('Mesaji silmək istədiyinizə əminsiniz?')" href="<?php echo base_url('Contact_Delete/'.$contactListKey['c_id']); ?>">
                                                                        <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i class="pe-7s-trash btn-icon-wrapper"></i></button>  
                                                                </a>

                                                                <a style="text-decoration:none;" href="<?php echo base_url('Contact_Update/'.$contactListKey['c_id']); ?>">
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
                        
                 
                
<?php $this->load->view('admin/includes/footerStyle'); ?>     
                                           
                                           
                                                
                                           
                                           
                                           
                                           
                                           
                                           
                                           
                                            
                                                
                                                
                                                
                                                    
                                                