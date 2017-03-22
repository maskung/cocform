<!--BEGIN CONTENT-->
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
                  <div class="col-md-12"><h2>Profile: <?php echo $results->username; ?></h2>
                      <div class="row mtl">
                          <div class="col-md-3">
                              <div class="form-group">
                                  <div class="text-center mbl">
                                   <?php if($results->image=="")
                                        {
                                    ?>
                                          <img src = "<?php echo "/img/female.jpg"?> " alt="" class="img-responsive">
                                    <?php 
                                       }
                                       else
                                       {
                                    ?>
                                          <img src = "<?php echo "/img_user/".$results->image; ?> " alt="" class="img-responsive">
                                    <?php }  
                                    ?>
                                   
                                  </div>

                              </div>
                              <table class="table table-striped table-hover">
                                  <tbody>
                                  <tr>
                                      <td>Name</td>
                                      <td><?php echo $results->fname; ?>&nbsp; <?php echo $results->lname; ?></td>
                                  </tr>
                                  <tr>
                                      <td>Age</td>
                                      <td>
                                        <?php if($results->birthday=="0000-00-00"){  echo "-"; }
                                              else { echo date_diff(date_create($results->birthday), date_create('today'))->y; } 
                                        ?>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>Baby</td>
                                      <td>
                                        <?php 

                                        ?>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>Area</td>
                                      <td>
                                        <?php 

                                        ?>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>Premium</td>
                                      <td>
                                        <?php 

                                        ?>
                                      </td>
                                  </tr>
                                  
                                  </tbody>
                              </table>
                          </div>
                          <div class="col-md-9">
                              <ul class="nav nav-tabs">
                                  <li class="active">
                                    <a class="jplist-reset-btn btn btn-default" href="/adm/updateinfluform?edit=<?php echo $results->id_user; ?>" id="edit" name="edit" role="button" >
                                      Edit Profile</a>
                                  </li>
                                  <li class="active"><a href class="jplist-reset-btn btn btn-default"  data-toggle="modal" data-target="#deleted<?php echo $results->id_user; ?>">Delete Profile</a></li>
                              </ul>
                              <div id="generalTabContent" class="tab-content">
                                  <div id="tab-edit" class="tab-pane fade in active">
                                      <form action="#" class="form-horizontal">
                                        <h3>Contact&nbsp;<i class="fa fa-phone" width=" 50px" height= "30px;"></i></h3>
                                          <div class="form-group"><td><label class="col-sm-3 control-label">Tel <i class="fa fa-mobile"></i> :</label>
                                              
                                              <div class="col-sm-9 controls" style="padding-top:8px;">
                                                  <div class="row">
                                                      <div class="col-xs-9" style="padding-top:2px;">
                                                        <?php if($results->address==""){  echo ""; }
                                                              else { echo $results->address; } 
                                                        ?>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          
                                          <div class="form-group"><td><label class="col-sm-3 control-label">E-mail <i class="fa fa-envelope-o"></i> :</label>
                                              
                                              <div class="col-sm-9 controls" style="padding-top:8px;">
                                                  <div class="row">
                                                      <div class="col-xs-9">
                                                        <?php echo $results->email; ?>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          
                                          <div class="form-group"><td><label class="col-sm-3 control-label">Address :</label>
                                              
                                              <div class="col-sm-9 controls" style="padding-top:8px;">
                                                  <div class="row">
                                                      <div class="col-xs-9">
                                                        <?php echo $results->address; ?>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                        <hr/>
                                        <h3> Social &nbsp;<i class="fa fa-globe"></i></h3>
                                          <div class="form-group"><label class="col-sm-3 control-label">Official Fanpage Name <i class="fa fa-facebook-square"></i> :</label>

                                              <div class="col-sm-9 controls" style="padding-top:8px;">
                                                  <div class="row">
                                                      <div class="col-xs-9">
                                                        <?php echo "-"; ?>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="form-group"><label class="col-sm-3 control-label">Instagram <i class="fa fa-instagram"></i> :</label>

                                              <div class="col-sm-9 controls" style="padding-top:8px;">
                                                  <div class="row">
                                                      <div class="col-xs-9">
                                                        <?php echo "-"; ?>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="form-group"><label class="col-sm-3 control-label">Twitter <i class="fa fa-twitter-square"></i> :</label>

                                              <div class="col-sm-9 controls" style="padding-top:8px;">
                                                  <div class="row">
                                                      <div class="col-xs-9">
                                                       <?php echo "-" ?>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="form-group"><label class="col-sm-3 control-label">Facebook Link :</label>

                                              <div class="col-sm-9 controls" style="padding-top:8px;">
                                                  <div class="row">
                                                      <div class="col-xs-9">
                                                       <a href="" target="_blank"><?php echo "-" ?></a>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="form-group"><label class="col-sm-3 control-label" >Instrgram Link :</label>

                                              <div class="col-sm-9 controls" style="padding-top:8px;">
                                                  <div class="row">
                                                      <div class="col-xs-9">
                                                       <a href="" target="_blank"><?php echo "-" ?></a>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="form-group"><label class="col-sm-3 control-label">Youtube Link <i class="fa fa-youtube-play"></i> :</label>

                                              <div class="col-sm-9 controls" style="padding-top:8px;">
                                                  <div class="row">
                                                      <div class="col-xs-9">
                                                       <a href="" target="_blank"><?php echo ""; ?> </a>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <hr/>
                                          <h3> About&nbsp;<i class="fa fa-paper-plane"></i></h3>
                                          <div class="form-group"><td><label class="col-sm-3 control-label">Sex :</label>
                                                
                                                <div class="col-sm-9 controls" style="padding-top:8px;">
                                                    <div class="row">
                                                        <div class="col-xs-9">
                                                            <?php 
                                                                  if($results->sex=="1") {  
                                                                      echo "female"; 
                                                                  } else { 
                                                                      echo "male";
                                                                  }
                                                            ?>
                                                          
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group"><td><label class="col-sm-3 control-label">ID Card <i class="fa fa-credit-card"></i> :</label>
                                                
                                                <div class="col-sm-9 controls" style="padding-top:8px;">
                                                    <div class="row">
                                                        <div class="col-xs-9">
                                                          <?php echo ""; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group"><td><label class="col-sm-3 control-label">Birthday <i class="fa fa-birthday-cake"></i> :</label>
                                                
                                                <div class="col-sm-9 controls" style="padding-top:8px;">
                                                    <div class="row">
                                                        <div class="col-xs-9">
                                                          <?php if($results->birthday=="0000-00-00"){echo "-"; }
                                                                  else { 
                                                                      //echo $results->birthday; 
                                                                      echo date( 'd/m/Y', strtotime($results->birthday));
                                                                  } 
                                                          ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                          <hr/>

                                          <!--button type="submit" class="btn btn-green btn-block">Finish</button-->
                                      </form>
                                  </div>
                                  
                              </div>
                          </div>
                      </div>
                  </div>
              </div>   
            </div>
 
        </div>
    </div>
</div>
<!-- /////////////////begin jQuery delete  /////////////////////-->

<?php foreach ($results as $data) { ?>
<div id="deleted<?php echo $results->id_user; ?>" class="modal fade" role="dialog"  >
  <div class="modal-dialog ">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Delete Influenter</h4>
      </div>
      <div class="modal-body">
        <p>Do you want to delete profile influencer?.</p>
      </div>
      <div class="modal-footer">

         <button type="button" class="btn btn-default" data-dismiss="modal" onclick="location.href='/adm/deleteinflu?delete=<?php echo $results->id_user; ?>' ">Yes</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="n">No</button> 
      </div>
    </div>

  </div>
</div>
<?php } ?>
<!-- /////////////////end jQuery delete  /////////////////////-->
<!--END CONTENT-->
