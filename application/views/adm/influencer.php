<!--BEGIN CONTENT-->
<div class="page-content">
    <div id="tab-general">
        <div class="row mbl">
          <!--div class="col-lg-12">
            <div class="col-md-12">
              <form action="/adm/search_keyword" id = "form_search" enctype="multipart/form-data" method="post" accept-charset="utf-8">
              <span class="input-group-addon" align="center"><i class="fa fa-home"></i>&nbsp;<a href="/adm/influencer">Home</a></span>
              <span class="input-group-addon"><i class="fa fa-search"></i>
              <input type="search"  class="form-horizontal" id="search" role="form" name="search"   style="padding-left:2px;padding-right:2px;padding-top:2px;padding-b:2px;">
              </span>
              <span class="input-group-addon"><button type="submit" content="search" value="subsearch" id="btn_subsearch" name="btn_subsearch">search</button></span>
              </form>
              <br/>
            </div>
          </div-->
          <div class="col-lg-12">
            <div class="col-md-12" align="center">
              <?php echo $this->session->flashdata('msg1'); ?> 
            </div>
          </div>
          <div class="col-lg-12">
            <div class="col-md-12" align="center"  >
              <div style="bposition: absolute;
                  right: 0px;
                  width: 350px;
                  border: 3px solid #C0C0C0;
                  padding: 10px;">
                <div align="left"><h><b>TIN Total  : </b><?php echo number_format($sumfollower['0']->total_influ)  ?>   person <?php  ?></h></div >
                <div align="left"><h><b>Instrgram Total  : </b><?php echo  number_format($sumfollower['0']->total_followed) ?> follower <?php  ?></h></div >
                <div align="left"><h><b>Facebook Total  : </b><?php echo  number_format($sumfollower['0']->total_follower_private) ?> follower <?php ?></h></div >
                <div align="left"><h><b>Official Fanpage Total  : </b><?php echo  number_format($sumfollower['0']->total_likes) ?> follower <?php ?></h></div >
              </div>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="col-md-12" align="center">
              <?php echo $pagination; ?>
            </div>
          </div>
          <div class="col-lg-12"><!--  table -->
            <div class="col-md-12">
              <!-- /////////////////begin new influencer table /////////////////////-->
              <div class="box text-shadow">
                <?php foreach ($customer as $data) { ?>
                <div class="table table-striped table-border" style="padding-left:15px;padding-right:15px; margin-bottom: 5px;">
                  <table class="table table-bordered" style="margin-bottom: 5px;">
                    <!--///////////////////////row /////////////////////////-->
                      <div class="row">
                        <tr >
                          <div class="col-xs-2 col-sm-2" align="right"><th style="width: 200px;">picture </th></div>
                          <div class="col-xs-4 col-sm-4" align="left">
                            <td style="width: 350px;">
                              <?php if($data->picture =="")
                                  {
                              ?>
                                    <img src = "<?php echo "/img/noimages.png"?> " width="120px;"  height="100px;">
                              <?php 
                                 }
                                 else
                                 {
                              ?>
                                    <img src = "<?php echo "/profile_images/".$data->picture; ?> " width="120px;"  height="100px;">
                              <?php }  
                              ?>
                            </td>
                          </div>
                          <div class="col-xs-2 col-sm-2" align="right"><th style="width: 200px;">nickname </th></div>
                          <div class="col-xs-4 col-sm-4" align="left"><td style="width: 350px;"><?php echo $data->name; ?></td> </div>
                        </tr>
                      </div>
                    <!--///////////////////////row /////////////////////////-->
                      <div class="row">
                        <tr>
                          <div class="col-xs-2 col-sm-2" align="right"><th >firstname :</th></div>
                          <div class="col-xs-4 col-sm-4" align="left"><td ><?php echo $data->firstname; ?></td></div>
                          <div class="col-xs-2 col-sm-2" align="right"><th >lastname </th></div>
                          <div class="col-xs-4 col-sm-4" align="left"><td ><?php echo $data->lastname; ?></td></div>
                        </tr>
                      </div>
                    <!--///////////////////////row /////////////////////////-->
                      <div class="row">
                        <tr>
                          <div class="col-xs-2 col-sm-2" align="right"><th >age </th></div>
                          <div class="col-xs-4 col-sm-4" align="left">
                            <td >  
                              <?php if($data->age=="0"){  echo ""; }
                                    else { echo $data->age; } 
                              ?>
                            </td>  
                          </div>
                          <div class="col-xs-2 col-sm-2" align="right"><th >e-mail </th></div>
                          <div class="col-xs-4 col-sm-4" align="left"><td ><?php echo $data->email; ?></td>
                        </tr>
                      </div>
                    <!--///////////////////////row /////////////////////////-->
                      <div class="row">
                        <tr>
                          <div class="col-xs-2 col-sm-2" align="right"><th >tel </th></div>
                          <div class="col-xs-4 col-sm-4" align="left">
                            <td>  
                              <?php if($data->contact==""){  echo ""; }
                                    else { echo $data->contact; } 
                              ?>
                            </td>  
                          </div>
                          <div class="col-xs-2 col-sm-2" align="right"> <th >sex </th></div>
                          <div class="col-xs-4 col-sm-4" align="left">
                            <td >
                              <?php if($data->sex=="f"){  echo "female"; }
                                    else if($data->sex=="m"){ echo "male";}
                                    else if($data->sex=="h"){ echo "hermaphrodite";}  
                                    else if($data->sex=="t"){ echo "tom";} 
                              ?>
                            </td>
                          </div>
                        </tr>
                      </div>
                    <!--///////////////////////row /////////////////////////-->
                      <div class="row">
                        <tr >
                          <div class="col-xs-2 col-sm-2" align="right"><th >birthday </th></div>
                          <div class="col-xs-4 col-sm-4" align="left">
                            <td>
                              <?php if($data->birthday=="0000-00-00"){echo ""; }
                                    else { echo $data->birthday; } 
                              ?>
                            </td>
                           </div>
                          <div class="col-xs-2 col-sm-2" align="right"><th >occupation </th></div>
                          <div class="col-xs-4 col-sm-4" align="left">
                            <td >  
                              <?php if($data->occupation=="0"){  echo ""; } 
                                    else {  $occ = decodeBinaryDigit($data->occupation);
                                      foreach ($occupations as $occupation) {
                                        if (in_array($occupation->id_occ,$occ)) {
                                           echo '<span class="badge badge-green">'.$occupation->type.'</span>  '; 
                                        }
                                      }
                                    } 
                              ?>
                            </td>
                          </div>
                        </tr>
                      </div>
                    <!--///////////////////////row /////////////////////////-->
                      <div class="row">
                        <tr >
                          <div class="col-xs-2 col-sm-2" align="right"><th >Personality</th> </div>
                          <div class="col-xs-4 col-sm-4" align="left">
                            <td>
                              <?php if($data->personality=="0"){ echo ""; } 
                                    else { $per = decodeBinaryDigit($data->personality);
                                      foreach ($personalitys as $personality) {
                                        if (in_array($personality->id_ps,$per)) {
                                          echo '<span class="badge badge-violet">'.$personality->type_ps.'</span> '; 
                                        }
                                      }   
                                    }
                              ?>
                              </td>
                          </div>
                          <div class="col-xs-2 col-sm-2" align="right"> <th >Facebook private follower</th></div>
                          <div class="col-xs-4 col-sm-4" align="left">
                            <td  > 
                              <?php if($data->follower_private==""){  echo "";  }
                                    else { echo number_format($data->follower_private); } 
                              ?>
                            </td>
                          </div>
                        </tr>
                      </div>
                    <!--///////////////////////row /////////////////////////-->
                      <div class="row">
                        <tr>
                          <div class="col-xs-2 col-sm-2" align="right"> <th >FB follower</th></div>
                          <div class="col-xs-4 col-sm-4" align="left">
                            <td  >
                              <?php if($data->likes=="0"){  echo "";  }
                                    else { echo  number_format($data->likes); } 
                              ?>
                            </td>
                          </div>
                          <div class="col-xs-2 col-sm-2" align="right"><th >IG follower</th></div>
                          <div class="col-xs-4 col-sm-4" align="left">
                            <td >   
                              <?php if($data->followed=="0"){ echo ""; }
                                    else { echo  number_format($data->followed); } 
                              ?>
                            </td>
                          </div>
                        </tr>
                      </div>
                    <!--///////////////////////row /////////////////////////-->
                      <div class="row">
                        <tr>
                          <div class="col-xs-2 col-sm-2" align="right"><th > likes average/picture fb </th></div>
                          <div class="col-xs-4 col-sm-4" align="left">
                            <td >
                              <?php if($data->avg==""){  echo ""; } 
                                    else {   echo  number_format($data->avg) ;} 
                              ?>
                            </td>
                          </div>
                          <div class="col-xs-2 col-sm-2" align="right"><th >likes average/picture ig </th></div>
                          <div class="col-xs-4 col-sm-4" align="left">
                            <?php if($data->avg_like=="0"){ echo "";  } 
                                  else {echo $data->avg_like;  } 
                            ?>
                          </div>
                        </tr>
                      </div>
                    <!--///////////////////////row /////////////////////////-->
                      <div class="row">
                        <tr>
                          <div class="col-xs-2 col-sm-2" align="right"> <th >pay </th></div>
                          <div class="col-xs-4 col-sm-4" align="left">
                            <td >
                              <?php if($data->pays=="0"){ echo ""; } 
                                    else { echo $data->pays; } 
                              ?>
                            </td>
                          </div>
                          <div class="col-xs-2 col-sm-2" align="right"><th >present location</th></div>
                          <div class="col-xs-4 col-sm-4" align="left">
                            <td ><?php echo $data->pre_locat; ?></td>
                          </div>
                        </tr>
                      </div>
                    <!--///////////////////////row /////////////////////////-->
                      <div class="row">  
                        <tr>
                          <div class="col-xs-2 col-sm-2" align="right"><th >address </th></div>
                          <div class="col-xs-4 col-sm-4" align="left"><td ><?php echo $data->address; ?></td> </div>
                          <div class="col-xs-2 col-sm-2" align="right"><th >id card</th></div>
                          <div class="col-xs-4 col-sm-4" align="left"><td ><?php echo $data->id_card; ?></td> </div>
                        </tr>
                      </div>
                    <!--///////////////////////row 1/////////////////////////-->
                      <div class="row">
                        <tr> 
                          <div class="col-xs-2 col-sm-2" align="right"><th >bank name </th> </div>
                          <div class="col-xs-4 col-sm-4" align="left">
                            <?php if($data->bank=="nobank"){ ?>
                                <td ><?php echo ""; ?></td>
                            <?php } else if($data->bank=="scb"){ ?>
                                <td ><?php echo "ธนาคารไทยพาณิชย์"; ?></td>
                            <?php } else if($data->bank=="ktb"){ ?>
                                <td ><?php echo "ธนาคารกรุงไทย"; ?></td>
                            <?php } else if($data->bank=="tmb"){ ?>
                                <td ><?php echo "ธนาคารทหารไทย"; ?></td>
                            <?php } else if($data->bank=="bangkokbank"){ ?>
                                <td ><?php echo "ธนาคารกรุงเทพ"; ?></td>
                            <?php } else if($data->bank=="krungsri"){ ?>
                                <td ><?php echo "ธนาคารกรุงศรีอยุธยา"; ?></td>
                            <?php } else if($data->bank=="kasikornbank"){ ?>
                                <td ><?php echo "ธนาคารกสิกรไทย"; ?></td>
                            <?php } else if($data->bank=="kiatnakin"){ ?>
                                <td ><?php echo "ธนาคารเกียรตินาคิน"; ?></td>
                            <?php } else if($data->bank=="cimbthai"){ ?>
                                <td ><?php echo "ธนาคารซีไอเอ็มบี ไทย"; ?></td>
                            <?php } else if($data->bank=="tisco"){ ?>
                                <td ><?php echo "ธนาคารทิสโก้"; ?></td>
                            <?php } else if($data->bank=="thanachartbank"){ ?>
                                <td ><?php echo "ธนาคารธนชาต"; ?></td>
                            <?php } else if($data->bank=="uob"){ ?>
                                <td ><?php echo "ธนาคารยูโอบี"; ?></td>
                            <?php } else if($data->bank=="lhbank"){ ?>
                                <td ><?php echo "ธนาคารแลนด์ แอนด์ เฮ้าส์"; ?></td>
                            <?php } else if($data->bank=="icbc"){ ?>
                                <td ><?php echo "ธนาคารไอซีบีซี"; ?></td>
                            <?php } ?>
                          </div>
                          <div class="col-xs-2 col-sm-2" align="right"><th >bank account</th></div>
                          <div class="col-xs-4 col-sm-4" align="left">
                             <td ><?php echo $data->bank_account; ?></td>
                          </div>
                        </tr>
                      </div>
                    <!--///////////////////////row ////////////////////////-->
                      <div class="row">
                        <tr>
                          <div class="col-xs-2 col-sm-2" align="right"><th >bank type </th></div>
                          <div class="col-xs-4 col-sm-4" align="left">
                            <?php if($data->bank_type=="no"){ ?>
                                <td ><?php echo ""; ?></td>
                            <?php } else if($data->bank_type=="savings"){ ?>
                                <td ><?php echo "เงินฝากออมทรัพย์"; ?></td>
                            <?php } else if($data->bank_type=="fixed_deposits"){ ?>
                                <td ><?php echo "เงินฝากประจำ"; ?></td>
                            <?php } else if($data->bank_type=="current_daily"){ ?>
                                <td ><?php echo "เงินฝากกระแสรายวัน"; ?></td>
                            <?php } else if($data->bank_type=="foreign_currency"){ ?>
                                <td ><?php echo "เงินฝากสกุลเงินตราต่างประเทศ"; ?></td>
                            <?php } ?>
                          </div>
                          <div class="col-xs-2 col-sm-2" align="right"><th >facebook </th> </div>
                          <div class="col-xs-4 col-sm-4" align="left">
                            <td ><?php echo $data->name_fb; ?></td>
                          </div>
                        </tr>
                      </div>
                    <!--///////////////////////row /////////////////////////-->
                      <div class="row">  
                        <tr>
                          <div class="col-xs-2 col-sm-2" align="right"><th >instagram</th></div>
                          <div class="col-xs-4 col-sm-4" align="left">
                            <td ><?php echo $data->usernameIG; ?></td>
                          </div>
                          <div class="col-xs-2 col-sm-2" align="right"><th >twitter</th></div>
                          <div class="col-xs-4 col-sm-4" align="left">
                             <td ><?php echo $data->twitter; ?></td>
                          </div>
                        </tr>
                      </div>
                    <!--///////////////////////row /////////////////////////-->
                      <div class="row">  
                        <tr>
                          <div class="col-xs-2 col-sm-2" align="right"><th >facebook id</th></div>
                          <div class="col-xs-4 col-sm-4" align="left">
                             <td colspan="3"><?php echo $data->fb_id; ?></td>
                          </div>
                        </tr>
                      </div> 
                    <!--///////////////////////row /////////////////////////-->
                      <div class="row">  
                        <tr>
                          <div class="col-xs-2 col-sm-2" align="right"><th >access token</th></div>
                          <div class="col-xs-4 col-sm-4" align="left">
                             <td colspan="3"><?php echo $data->token; ?></td>
                          </div>
                        </tr>
                      </div>
                    <!--///////////////////////row /////////////////////////-->
                      <div class="row">  
                        <tr>
                          <div class="col-xs-2 col-sm-2" align="right"><th >self introduction</th></div>
                          <div class="col-xs-4 col-sm-4" align="left">
                            <td ><?php echo $data->self_intro; ?></td>
                          </div>
                          <div class="col-xs-2 col-sm-2" align="right"><th >past accomplishments</th></div>
                          <div class="col-xs-4 col-sm-4" align="left">
                             <td ><?php echo $data->past_accom; ?></td>
                          </div>
                        </tr>
                      </div>
                    <!--///////////////////////row /////////////////////////-->
                      <div class="row">  
                        <tr>
                          <div class="col-xs-2 col-sm-2" align="right"><th >fb link</th></div>
                          <div class="col-xs-4 col-sm-4" align="left">
                             <td colspan="3"><a href="<?php echo $data->link_fb; ?>" target="_blank"><?php echo $data->link_fb; ?></td>
                          </div>
                        </tr>
                      </div>
                    <!--///////////////////////row /////////////////////////-->
                      <div class="row">  
                        <tr>
                          <div class="col-xs-2 col-sm-2" align="right"><th >ig link</th></div>
                          <div class="col-xs-4 col-sm-4" align="left">
                             <td colspan="3"><a href="<?php echo $data->link_ig; ?>" target="_blank"><?php echo $data->link_ig; ?></a></td>
                          </div>
                        </tr>
                      </div>
                    <!--///////////////////////row /////////////////////////-->
                      <div class="row">  
                        <tr>
                          <div class="col-xs-2 col-sm-2" align="right"><th >youtube link</th></div>
                          <div class="col-xs-4 col-sm-4" align="left">
                             <td colspan="3"><a href="<?php echo $data->link_youtube; ?>" target="_blank"><?php echo $data->link_youtube; ?></a></td>
                          </div>
                        </tr>
                      </div>
                    <!--///////////////////////row /////////////////////////-->
                      <div class="row">  
                        <tr>
                          <div class="col-xs-2 col-sm-2" align="right"><th>bloger links</th></div>
                          <div class="col-xs-4 col-sm-4" align="left">
                             <td colspan="3"><a href="<?php echo $data->link_blog; ?>" target="_blank" ><?php echo $data->link_blog; ?></a></td>
                          </div>
                        </tr>
                      </div>


                    <!--///////////////////////row /////////////////////////-->

                  </table>
                    <div class="row">  
                      <td style="padding: 5px 30px 5px 30px;">  
                        <p>&nbsp;&nbsp; &nbsp; 
                          <a class="jplist-reset-btn btn btn-default" href="/adm/links_keyword?links=<?php echo $data->id_influ; ?>" id="links" name="links" value="links"role="button">Profile</a>
                          <a class="jplist-reset-btn btn btn-default" href="/adm/updateinfluform?edit=<?php echo $data->id_influ; ?>" id="edit" name="edit" role="button">Edit</a>
                          <a href class="jplist-reset-btn btn btn-default"  data-toggle="modal" data-target="#deleted<?php echo $data->id_influ; ?>">Delete</a>
                        </p>
                      </td>
                    </div>
                </div>
                <?php } ?>
              </div>
              <!-- /////////////////end new influencer table /////////////////////-->
            </div>
          </div><!-- end table -->
          <div class="col-lg-12">
            <div class="col-md-12" align="center">
              <?php echo $pagination; ?><?php echo br(3) ?>
            </div>
          </div>


        </div>
    </div>
</div>
<!--END CONTENT-->

<!-- /////////////////begin jQuery delete  /////////////////////-->

<?php foreach ($customer as $data) { ?>
<div id="deleted<?php echo $data->id_influ; ?>" class="modal fade" role="dialog"  >
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

         <button type="button" class="btn btn-default" data-dismiss="modal" onclick="location.href='/adm/deleteinflu?delete=<?php echo $data->id_influ; ?>'">Yes</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="n">No</button> 
      </div>
    </div>

  </div>
</div>
<?php } ?>
<!-- /////////////////end jQuery delete  /////////////////////-->