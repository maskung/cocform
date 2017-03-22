
                            <div class="page-content">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="panel panel-blue">
                                        	<div class="panel-heading">
						                        My Profile
						                    </div>
                                            <div class="panel-body pan">
                                                <form method="POST" action="/adm/editprofile" enctype="multipart/form-data" accept-charset="utf-8" >
                                                    	<?php $form_attrib = array('class' => 'form-horizontal', 'id' => 'form_members', 'role' => 'form');
                                                        echo form_open('adm/editprofile',$form_attrib);
                                                        foreach($act_user as $attr): 
                                                             ?>
                                                        <div class="col-md-12">
                                                            <br>
                                                            <p>Username</p>
                                                            <?php $data = array( 
                                                                        'class' => 'form-control',
                                                                        'name' => 'username', 
                                                                        'id' => 'username',  
                                                                        'value' =>  $attr->admin_name                                          
                                                                    ); 
                                                                echo form_input($data); 
                                                                ?>
                                                            <br>
                                                        </div>
                                                        
                                                        <div class="col-md-12">
                                                        	<p>Password</p>
                                                            <?php $data = array( 
                                                                        'class' => 'form-control',
                                                                        'name' => 'password', 
                                                                        'id' => 'password'                                        
                                                                    ); 
                                                                echo form_password($data); 
                                                                ?>
                                                        	<br>
                                                        </div>
                                                        <div class="col-md-12">
                                                        	<p>Re-Type Password</p>
                                                            <?php $data = array( 
                                                                        'class' => 'form-control',
                                                                        'name' => 'repassword', 
                                                                        'id' => 'repassword'                                        
                                                                    ); 
                                                                echo form_password($data); 
                                                                ?>
                                                        	<br>
                                                        </div>
                                                        <div class="col-md-12">
                                                        	<p>Position</p>
                                                            <?php $data = array( 
                                                                        'class' => 'form-control',
                                                                        'name' => 'position', 
                                                                        'id' => 'position',  
                                                                        'value' =>  $attr->position                                          
                                                                    ); 
                                                                echo form_input($data); 
                                                                ?>
                                                        	<br>
                                                        </div>
                                                        <div class="col-md-12">
                                                        
                                                                <?php if ($attr->picture != "") { ?>
                                                                    <img src="/assets/images/img_profile/<?php echo $attr->picture; ?>" class="img-responsive">
                                                                <?php } else { ?>
                                                                    <img src="/assets/images/img_profile/no_img.png" class="img-responsive">
                                                                <?php } ?>
                                                            <div>
                                                                <label for="inputSubject" class="control-label">Picture</label>
                                                                <input id="inputIncludeFile" type="file" name="userfile[]" placeholder="media image"><br>
                                                            </div>
                                                        </div>
                                                        
                                                    <?php endforeach; ?>
                                                            <div class="col-md-2">
                                                                <?php 
                                                                $data = array(
                                                                    'class' => 'btn btn-green',
                                                                    'name' => 'btn_editpro5',
                                                                    'id' => 'btn_editpro5',
                                                                    'value' => 'editpro5',
                                                                    'type' => 'submit',
                                                                    'content' => 'Submit'
                                                                    );
                                                                    echo form_button($data);
                                                            ?>
                                                            </div>
                                                       
                                                            <a href="profile" class="btn btn-red">Cancel</a>
                                                            <?php
                                                        $string = "</div></div>";

                                                        echo form_close($string);
                                                    ?>
                                                    </form>
                                                    </div>
                                            	</div>
                                           	</div>
                                        </div>
                                    </div>