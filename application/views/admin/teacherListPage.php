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
                                    <div class="card-header">Teacher List
                                        <div class="btn-actions-pane-right">
                                            <div role="group" class="btn-group-sm btn-group">
                                                <a href="<?php echo base_url('add_Teacher'); ?>">
                                                <button class="btn btn-success">Add TeacherList</button>
                                                </a>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                            <thead>
                                         <tr>
                                                <th class="text-center">#</th>
                                                <th>Name</th>
                                                <th class="text-center">Surname</th>
                                                 <th class="text-center">Fb</th>
                                                <th class="text-center">Wp</th>
                                                <th class="text-center">Instagram</th>
                                                <th class="text-center">Images</th>
                                                <th class="text-center">Info</th>


                                                
                                        </tr>
                                            </thead>
                                            <tbody>

                                            <?php 
                                            
                                            $say = 1; foreach($teacherList as $teacherListKey){  ?>
                                    
                                            <tr>
                                                <td class="text-center text-muted"><?php echo $say++; ?></td>
                                                <td class="text-center"><?php echo $teacherListKey['teacher_list_name']; ?></td>
                                                <td class="text-center"><?php echo $teacherListKey['teacher_list_surname']; ?></td>
                                                <td class="text-center"><?php echo $teacherListKey['t_fb']; ?></td>
                                                <td class="text-center"><?php echo $teacherListKey['t_wp']; ?></td>
                                                <td class="text-center"><?php echo $teacherListKey['t_ins']; ?></td>
                                                <td class="text-center">
                                                    <img src="<?php echo base_url('upload/teacher/'.$teacherListKey['teacher_list_img']);  ?> " width="50px;" height="50px;" alt="" style="object-fit:cover">
                                                </td>
                                                <td class="text-center">
                                                    <a style="text-decoration:none;" onclick="return confirm('Məlumatı silmək istədiyinizə əminsiniz?')" href="<?php echo base_url('teacher_listDelete/'.$teacherListKey['teacher_list_id']); ?>">
                                                        <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i class="pe-7s-trash btn-icon-wrapper"> </i></button>
                                                    </a>

                                                    <a style="text-decoration:none;" href="<?php echo base_url('teacher_update/'.$teacherListKey['teacher_list_id']); ?>">
                                                        <button class="btn-wide btn btn-success">Update</button>
                                                    </a>

                                                    <a style="text-decoration:none;" href="<?php echo base_url('teacher_info/'.$teacherListKey['teacher_list_id']); ?>">
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
                                                
                                                    
                                                