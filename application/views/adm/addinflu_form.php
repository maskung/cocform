<!--BEGIN CONTENT-->
<?php   $form_attrib = array('class' => 'form-horizontal', 'id' => 'form_members', 'role' => 'form' ,'method'=>'post');
    echo form_open_multipart('/adm/addinflu',$form_attrib); 
?>
<div class="page-content">
    <div id="tab-general">
        <div class="row mbl">
            <div class="col-lg-12">
                <div class="col-md-12" align="center">
                    <?php echo $this->session->flashdata('msg1'); ?> 
                </div>
            </div>
            <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-6"> <!-- left add panel -->
                    <div class="panel panel-green"><!-- panel-green -->
                        <div class="panel-heading"> Contacts Form</div>
                            <div class="panel-body pan">
                                <div class="form-body pal">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group" style="padding-left:5px;padding-right:5px; margin-bottom: 5px;">
                                                <label for="inputName" class="control-label">
                                                    Nickname<span style="color:red;" >*</span>
                                                </label>
                                                <div class="input-icon right">
                                                    <i class="fa fa-user"></i>
                                                    <?php $data = array( 
                                                        'class' => 'form-control',
                                                        'name' => 'name', 
                                                        'id' => 'name', 
                                                        'placeholder' =>'Nickname', 
                                                        'value' =>  set_value('name') 
                                                                    
                                                    ); 
                                                    echo form_input($data); 
                                                    
                                                    ?>
                                                    <?php echo form_error("name", "<font color='error'>","</font>"); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group" style="padding-left:5px;padding-right:5px; margin-bottom: 5px;">
                                                <label for="inputFile" class="control-label">
                                                    Picture</label>
                                                    <?php 
                                                        $data = array( 
                                                            'name' => 'picture', 
                                                            'id' => 'picture', 
                                                            'accept'=>'image/x-png;image/gif;image/jpeg',
                                                            'value' => set_value('picture')
                                                        ); 
                                                            echo form_upload($data); 
                                                    ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group" style="padding-left:5px;padding-right:5px; margin-bottom:5px;">
                                                <label for="inputName" class="control-label">
                                                    First Name<span style="color:red;" >*</span>
                                                </label>
                                                <div class="input-icon right">
                                                    <i class="fa fa-user"></i>
                                                    <?php 
                                                        $data = array( 
                                                            'class' => 'form-control',
                                                            'name' => 'firstname', 
                                                            'id' => 'firstname', 
                                                            'placeholder' =>'First tame', 
                                                            'value' => set_value('firstname')
                                                                        
                                                        ); 
                                                        echo form_input($data); 
                                                    ?>
                                                    <?php echo form_error("firstname", "<font color='error'>","</font>"); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group" style="padding-left:5px;padding-right:5px; margin-bottom: 5px;">
                                                <label for="inputName" class="control-label">
                                                    Last Name<span style="color:red;" >*</span>
                                                </label>
                                                <div class="input-icon right">
                                                    <i class="fa fa-user"></i>
                                                    <?php 
                                                        $data = array( 
                                                            'class' => 'form-control',
                                                            'name' => 'lastname', 
                                                            'id' => 'lastname', 
                                                            'placeholder' =>'Last name', 
                                                            'value' => set_value('lastname')
                                                        ); 
                                                        echo form_input($data); 
                                                    ?>
                                                    <?php echo form_error("lastname", "<font color='error'>","</font>"); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group" style="padding-left:5px;padding-right:5px;">
                                                <label for="inputName" class="control-label">
                                                    Gender<span style="color:red;" >*</span>
                                                </label>
                                                <div class="input-icon right">
                                                    
                                                    <div class="radio-inline">
                                                        Male
                                                        <?php 
                                                            $data = array(
                                                                'name'        => 'sex',
                                                                'id'          => 'male',
                                                                'value'       => 'm',
                                                                'checked'     => set_value('sex'),
                                                                'style'       => 'margin:10px',
                                                            );
                                                            echo form_radio($data);
                                                        ?>
                                                        
                                                    </div>
                                                    <div class="radio-inline">
                                                         Female
                                                        <?php 
                                                            $data = array(
                                                                'name'        => 'sex',
                                                                'id'          => 'female',
                                                                'value'       => 'f',
                                                                'checked'     => set_value('sex'),
                                                                'style'       => 'margin:10px',
                                                            );
                                                            echo form_radio($data);

                                                        ?>

                                                    </div>
                                                    <div class="radio-inline">
                                                         Hermaphrodite
                                                        <?php 
                                                            $data = array(
                                                                'name'        => 'sex',
                                                                'id'          => 'hermaphrodite',
                                                                'value'       => 'h',
                                                                'checked'     => set_value('sex'),
                                                                'style'       => 'margin:10px',
                                                            );
                                                            echo form_radio($data);

                                                        ?>


                                                    </div>
                                                    <div class="radio-inline">
                                                         Tom
                                                        <?php 
                                                            $data = array(
                                                                'name'        => 'sex',
                                                                'id'          => 'tom',
                                                                'value'       => 't',
                                                                'checked'     => set_value('sex'),
                                                                'style'       => 'margin:10px',
                                                            );
                                                            echo form_radio($data);

                                                        ?>
                                                    </div> 
                                                </div><?php echo form_error("sex", "<font color='error'>","</font>"); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group" style="padding-left:5px;padding-right:5px; margin-bottom:5px;">
                                                <label for="inputEmail" class="control-label">
                                                    E-mail</label>
                                                <div class="input-icon right">
                                                    <i class="fa fa-envelope"></i>
                                                    <?php 
                                                        $data = array( 
                                                            'class' => 'form-control',
                                                            'name' => 'email', 
                                                            'id' => 'email', 
                                                            'placeholder' =>'email', 
                                                            'value' => set_value('email')
                                                        ); 
                                                        echo form_input($data); 
                                                    ?>
                                                    <?php echo form_error("email", "<font color='error'>","</font>"); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group" style="padding-left:5px;padding-right:5px; margin-bottom: 5px;">
                                                <label for="inputName" class="control-label">Age</label>
                                                <div class="input-icon right">
                                                    <?php 
                                                        $data = array( 
                                                            'class' => 'form-control',
                                                            'name' => 'age', 
                                                            'id' => 'age', 
                                                            'placeholder' =>'Age', 
                                                            'value' => set_value('age')
                                                        ); 
                                                        echo form_input($data); 
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group" style="padding-left:5px;padding-right:5px; margin-bottom: 5px;">
                                                <label for="inputName" class="control-label">Tel</label>
                                                <div class="input-icon right">
                                                    <i class="fa fa-mobile"></i> 
                                                    <?php 
                                                        $data = array( 
                                                            'class' => 'form-control',
                                                            'name' => 'contact', 
                                                            'id' => 'contact', 
                                                            'placeholder' =>'contact', 
                                                            'value' => set_value('contact')
                                                        ); 
                                                        echo form_input($data); 
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group" style="padding-left:5px;padding-right:5px; margin-bottom: 5px;">
                                                <label for="inputName" class="control-label"> Pays</label>
                                                <div class="input-icon right">
                                                    <i class="fa fa-money"></i>
                                                    <?php 
                                                        $data = array( 
                                                            'class' => 'form-control',
                                                            'name' => 'pays', 
                                                            'id' => 'pays', 
                                                            'rows'        => '8',
                                                            'placeholder' =>'pays', 
                                                            'value' => set_value('pays')
                                                        ); 
                                                            echo form_textarea($data); 
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group" style="padding-left:5px;padding-right:5px; margin-bottom: 5px;">
                                                <label for="inputName" class="control-label"> Address</label>
                                                <div class="input-icon right">
                                                    <?php 
                                                        $data = array( 
                                                            'class' => 'form-control',
                                                            'name' => 'address', 
                                                            'rows'        => '8',
                                                            'id' => 'address', 
                                                            'placeholder' =>'Address', 
                                                            'value' => set_value('address')
                                                        ); 
                                                            echo form_textarea($data); 
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group mbn text-right pal" style=" padding-top:5px; padding-bottom:25px; margin-bottom:5px;">                          
                                            <button type="submit" class="btn btn-primary">
                                                Send message</button>
                                        </div>
                                    </div>
                                </div>                               
                            </div>
                        
                    </div><!--end panel-green -->
                    <div class="panel panel-yellow"><!-- panel-yellow -->
                        <div class="panel-heading"> About form</div>
                            <div class="panel-body pan">
                                <div class="form-body pal">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group" style="padding-left:25px;padding-right:25px; margin-bottom:5px;">
                                                <label for="inputEmail" class="control-label">
                                                    Date of Birth</label>
                                                <div class="input-icon right">
                                                    <i class="icon-gift"></i>
                                                    <?php
                                                        $date = array(
                                                            'type' => 'date',
                                                            'id' => 'birthday',
                                                            'name' => 'birthday',
                                                            'class' => 'form-control',
                                                            'placeholder' => 'dd/mm/yyyy',
                                                            'value' => set_value('birthday'),
                                                            
                                                            );
                                                        echo form_input($date);
                                                    ?>
                                                                        </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group" style="padding-left:25px;padding-right:25px; margin-bottom:5px;">
                                                <label for="inputName" class="control-label">Present location</label>
                                                <div class="input-icon right">
                                                    <i class="fa fa-street-view"></i>
                                                    <?php 
                                                        $data = array( 
                                                            'class' => 'form-control',
                                                            'name' => 'pre_locat', 
                                                            'id' => 'pre_locat', 
                                                            'placeholder' =>'pre_locat', 
                                                            'value' => set_value('pre_locat')
                                                        ); 
                                                        echo form_input($data); 
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group" style="padding-left:25px;padding-right:25px; margin-bottom:5px;">
                                                <label for="inputEmail" class="control-label">
                                                    ID Card</label>
                                                <div class="input-icon right">
                                                    <i class="fa fa-credit-card"></i>
                                                    <?php 
                                                        $data = array( 
                                                            'class' => 'form-control',
                                                            'name' => 'id_card', 
                                                            'id' => 'id_card', 
                                                            'placeholder' =>'ID Card', 
                                                            'value' => set_value('id_card')
                                                        ); 
                                                            echo form_input($data); 
                                                    ?><?php echo form_error("id_card", "<font color='error'>","</font>") ?>  
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group" style="padding-left:25px;padding-right:25px; margin-bottom:5px;">
                                                <label for="inputName" class="control-label">Bank Account</label>
                                                <div class="input-icon right">
                                                    <?php 
                                                        $data = array( 
                                                            'class' => 'form-control',
                                                            'name' => 'bank_account', 
                                                            'id' => 'bank_account', 
                                                            'placeholder' =>'bank account', 
                                                            'value' => set_value('bank_account')
                                                        ); 
                                                            echo form_input($data); 
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group" style="padding-left:25px;padding-right:25px; margin-bottom:5px;">
                                                <label for="inputEmail" class="control-label">
                                                    Bank</label>
                                                <div class="input-icon right">
                                                    <?php 
                                                        $options = array( 
                                                            'nobank' => 'ธนาคาร',
                                                            'scb' => 'ธนาคารไทยพาณิชย์',
                                                            'ktb' => 'ธนาคารกรุงไทย',
                                                            'tmb' => 'ธนาคารทหารไทย',
                                                            'bangkokbank' => 'ธนาคารกรุงเทพ',
                                                            'krungsri' =>'ธนาคารกรุงศรีอยุธยา',
                                                            'kasikornbank' => 'ธนาคารกสิกรไทย',
                                                            'kiatnakin' => 'ธนาคารเกียรตินาคิน',
                                                            'cimbthai' => 'ธนาคารซีไอเอ็มบี ไทย',
                                                            'tisco' => 'ธนาคารทิสโก้',
                                                            'thanachartbank' =>'ธนาคารธนชาต',
                                                            'uob' => 'ธนาคารยูโอบี ',
                                                            'lhbank' => 'ธนาคารแลนด์ แอนด์ เฮ้าส์',
                                                            'icbc' => 'ธนาคารไอซีบีซี',
                                                        ); 
                                                        $bank = array('nobabk', 'ktb');

                                                        echo form_dropdown('bank', $options, '$bank');
                                                    ?>  
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group" style="padding-left:25px;padding-right:25px; margin-bottom:5px;">
                                                <label for="inputName" class="control-label">Bank Type</label>
                                                <div class="input-icon right">
                                                    <?php 
                                                        $options = array( 
                                                            'no' => 'ประเภทเงินฝาก',
                                                            'savings' => 'เงินฝากออมทรัพย์',
                                                            'fixed_deposits' => 'เงินฝากประจำ',
                                                            'current_daily' => 'เงินฝากกระแสรายวัน',
                                                            'foreign_currency' => 'เงินฝากสกุลเงินตราต่างประเทศ',
                                                    
                                                        ); 
                                                        $bank_type = array('no', 'savings');

                                                        echo form_dropdown('bank_type', $options, '$bank_type');
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group" style="padding-left:25px;padding-right:25px; margin-bottom:5px;">
                                                <label for="inputEmail" class="control-label">
                                                    Past Accomplishments</label>
                                                    <div class="input-icon right">
                                                    <?php 
                                                        $data = array( 
                                                            'class' => 'form-control',
                                                            'name' => 'past_accom', 
                                                            'id' => 'past_accom', 
                                                            'rows'        => '8',
                                                            'placeholder' =>'past accomplishments', 
                                                            'value' => set_value('past_accom')
                                                        ); 
                                                            echo form_textarea($data); 
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group" style="padding-left:25px;padding-right:25px; margin-bottom:5px;">
                                                <label for="inputName" class="control-label">Self Introduction</label>
                                                <div class="input-icon right">
                                                    <?php 
                                                        $data = array( 
                                                            'class' => 'form-control',
                                                            'name' => 'self_intro', 
                                                            'id' => 'self_intro', 
                                                            'rows'        => '8',
                                                            'placeholder' =>'self introduction', 
                                                            'value' => set_value('self_intro')
                                                        ); 
                                                            echo form_textarea($data); 
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group" style="padding-left:25px;padding-right:25px; margin-bottom:5px;">
                                                <label for="inputEmail" class="control-label">
                                                    Occupation</label>
                                                <div class="input-icon right">
                                                    <?php foreach($occupations as $occupation) { ?>
                                                        <div class="row" >
                                                            <div class="col-xs-8 col-sm-8" align="left">
                                                              <div class="checkbox-inline " align="left">
                                                                
                                                                <?php 
                                                                  $data = array(
                                                                    'name'        => 'occupation[]',
                                                                    'id'          => $occupation->type,
                                                                    'value'       => $occupation->id_occ,
                                                                    'checked'     => set_value('occupation')
                                                                  );
                                                                  echo form_checkbox($data).": ".$occupation->type;
                                                                ?>
                                                             
                                                              </div> 
                                                            </div>
                                                        </div>  
                                                    <?php } ?> 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group" style="padding-left:25px;padding-right:25px; margin-bottom:5px;">
                                                <label for="inputName" class="control-label">Personality</label>
                                                <div class="input-icon right">
                                                     <?php foreach($personalitys as $personality) { ?>
                                                        <div class="row" >
                                                            <div class="col-xs-8 col-sm-8" align="left">
                                                              <div class="checkbox-inline " align="left">
                                                                
                                                                <?php 
                                                                  $data = array(
                                                                    'name'        => 'personality[]',
                                                                    'id'          => $personality->type_ps,
                                                                    'value'       => $personality->id_ps,
                                                                    'checked'     => set_value('personality')
                                                                  );
                                                                  echo form_checkbox($data).": ".$personality->type_ps;
                                                                ?>
                                                             
                                                              </div> 
                                                            </div>
                                                        </div>  
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--div class="row"-->
                                        <div class="form-group mbn text-right pal" style=" padding-top:5px; padding-bottom:25px; margin-bottom:5px;">                          
                                            <button type="submit" class="btn btn-primary">
                                                Send message</button>
                                        </div>
                                    <!--/div-->
                                </div>
                            </div>
                    </div><!--end panel-yellow -->
                </div><!-- end left add panel-->
                <div class="col-lg-6"> <!-- right add panel -->
                    <div class="panel panel-orange"><!-- panel-orange -->
                        <div class="panel-heading"> Social   form</div>
                            <div class="panel-body pan">
                                <div class="form-body pal">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group" style="padding-left:25px;padding-right:25px; margin-bottom:5px;">
                                                <label for="inputEmail" class="control-label">
                                                    Likes/FB</label>
                                                <div class="input-icon right">
                                                    <?php 
                                                        $data = array( 
                                                            'class' => 'form-control',
                                                            'name' => 'likes', 
                                                            'id' => 'likes', 
                                                            'placeholder' =>'likes', 
                                                            'value' => set_value('likes')
                                                        ); 
                                                        echo form_input($data); 
                                                    ?>
                                                    <div style="color: red;">no comma(,) example: 1000</div>  
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group" style="padding-left:25px;padding-right:25px; margin-bottom:5px;">
                                                <label for="inputName" class="control-label"> Follower/IG</label>
                                                <div class="input-icon right">
                                                    <?php 
                                                        $data = array( 
                                                            'class' => 'form-control',
                                                            'name' => 'followed', 
                                                            'id' => 'followed', 
                                                            'placeholder' =>'followed', 
                                                            'value' => set_value('followed')
                                                        ); 
                                                        echo form_input($data); 
                                                    ?>
                                                    <div style="color: red;" align="left">no comma(,) example: 1000</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group" style="padding-left:25px;padding-right:25px; margin-bottom:5px;">
                                                <label for="inputName" class="control-label">Facebook private follower</label>
                                                <div class="input-icon right">
                                                    <i class="fa fa-facebook"></i>
                                                    <?php 
                                                        $data = array( 
                                                            'class' => 'form-control',
                                                            'name' => 'follower_private', 
                                                            'id' => 'follower_private', 
                                                            'placeholder' =>'follower', 
                                                            'value' => set_value('follower_private')
                                                        ); 
                                                            echo form_input($data); 
                                                    ?>
                                                    <div style="color: red;" align="left">no comma(,) example: 1000</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group" style="padding-left:25px;padding-right:25px; margin-bottom:5px;">
                                                <label for="inputEmail" class="control-label">
                                                   Twitter</label>
                                                <div class="input-icon right">
                                                    <i class="fa fa-twitter"></i>
                                                    <?php 
                                                        $data = array( 
                                                            'class' => 'form-control',
                                                            'name' => 'twitter', 
                                                            'id' => 'twitter', 
                                                            'placeholder' =>'twitter', 
                                                            'value' => set_value('twitter')
                                                        ); 
                                                            echo form_input($data); 
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group" style="padding-left:25px;padding-right:25px; margin-bottom:5px;">
                                                <label for="inputName" class="control-label">Facebook official fanpage </label>
                                                <div class="input-icon right">
                                                    <i class="fa fa-facebook-official"></i>
                                                    <?php 
                                                        $data = array( 
                                                            'class' => 'form-control',
                                                            'name' => 'name_fb', 
                                                            'id' => 'name_fb', 
                                                            'placeholder' =>'fanpage', 
                                                            'value' => set_value('name_fb')
                                                        ); 
                                                            echo form_input($data); 
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group" style="padding-left:25px;padding-right:5px; margin-bottom:5px;">
                                                <label for="inputEmail" class="control-label">
                                                   Facebook official fanpage ID</label>
                                                <div class="input-icon right">
                                                    <?php 
                                                        $data = array( 
                                                            'class' => 'form-control',
                                                            'name' => 'fb_id', 
                                                            'id' => 'fb_id', 
                                                            'placeholder' =>'fanpage ID', 
                                                            'value' => set_value('fb_id')
                                                        ); 
                                                            echo form_input($data); 
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputEmail" class="control-label"></label>
                                            <div class="form-group" style="padding-left:px;padding-right:25px; padding-top:5px;  margin-bottom:1px;">
                                                <div class="input-icon right">
                                                    <a target="_blank" href="http://findmyfbid.com/"><button type="button" class="btn btn-primary">Find Fanpage ID</button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group" style="padding-left:25px;padding-right:25px; margin-bottom:5px;">
                                                <label for="inputName" class="control-label">Instagram</label>
                                                <div class="input-icon right">
                                                    <i class="fa fa-instagram"></i>
                                                    <?php 
                                                        $data = array( 
                                                            'class' => 'form-control',
                                                            'name' => 'usernameIG', 
                                                            'id' => 'usernameIG', 
                                                            'placeholder' =>'usernameIG', 
                                                            'value' => set_value('usernameIG')
                                                        ); 
                                                            echo form_input($data); 
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group" style="padding-left:25px;padding-right:25px; margin-bottom:5px;">
                                                <label for="inputEmail" class="control-label">
                                                   Access Token IG</label>
                                                <div class="input-icon right">
                                                    <?php 
                                                        $data = array( 
                                                            'class' => 'form-control',
                                                            'name' => 'token', 
                                                            'id' => 'token', 
                                                            'placeholder' =>'token', 
                                                            'value' => set_value('token')
                                                        ); 
                                                            echo form_input($data); 
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group" style="padding-left:25px;padding-right:25px; margin-bottom:5px;">
                                                <label for="inputName" class="control-label">Facebook link</label>
                                                <div class="input-icon right">
                                                    <?php 
                                                        $data = array( 
                                                            'class' => 'form-control',
                                                            'name' => 'link_fb', 
                                                            'id' => 'link_fb', 
                                                            'placeholder' =>'facebook', 
                                                            'value' => set_value('link_fb')
                                                        ); 
                                                            echo form_input($data); 
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group" style="padding-left:25px;padding-right:25px; margin-bottom:5px;">
                                                <label for="inputName" class="control-label">Instagram link</label>
                                                <div class="input-icon right">
                                                    <?php 
                                                        $data = array( 
                                                            'class' => 'form-control',
                                                            'name' => 'link_ig', 
                                                            'id' => 'link_ig', 
                                                            'placeholder' =>'instagram', 
                                                            'value' => set_value('link_ig')
                                                        ); 
                                                            echo form_input($data); 
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group" style="padding-left:25px;padding-right:25px; margin-bottom:5px;">
                                                <label for="inputName" class="control-label">Youtube link</label>
                                                <div class="input-icon right">
                                                    <i class="fa fa-youtube-play"></i>
                                                    <?php 
                                                        $data = array( 
                                                            'class' => 'form-control',
                                                            'name' => 'link_youtube', 
                                                            'id' => 'link_youtube', 
                                                            'placeholder' =>'youtube', 
                                                            'value' => set_value('link_youtube')
                                                        ); 
                                                            echo form_input($data); 
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group" style="padding-left:25px;padding-right:25px; margin-bottom:5px;">
                                                <label for="inputName" class="control-label">Bloger link</label>
                                                <div class="input-icon right">
                                                    <?php 
                                                        $data = array( 
                                                            'class' => 'form-control',
                                                            'name' => 'link_blog', 
                                                            'id' => 'link_blog', 
                                                            'placeholder' =>'bloger', 
                                                            'value' => set_value('link_blog')
                                                        ); 
                                                            echo form_input($data); 
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--div class="row"-->
                                        <div class="form-group mbn text-right pal" style=" padding-top:5px; padding-bottom:25px; margin-bottom:5px;">                          
                                            <button type="submit" class="btn btn-primary">
                                                Send message</button>
                                        </div>
                                    <!--/div-->
                                </div>
                            </div>
                    </div><!-- end panel-orange -->
                </div><!--end right add panel -->
            </div>
            </div>
        <div>
    </div>
</div>
<?php
    $string = "</div></div>";

    echo form_close($string);
?>
<?php echo br(2); ?>
<!--END CONTENT-->  