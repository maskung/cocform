                            
                            <div class="page-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel">
                            <div class="panel-body">
                                <div id="grid-layout-table-1" class="box jplist">
                                    <div class="jplist-ios-button"><i class="fa fa-sort"></i>jPList Actions</div>
                                    <div class="jplist-panel box panel-top">
                                        <button type="button" data-control-type="reset" data-control-name="reset" data-control-action="reset" class="jplist-reset-btn btn btn-default">Reset<i class="fa fa-share mls"></i></button>
                                        <div data-control-type="drop-down" data-control-name="paging" data-control-action="paging" class="jplist-drop-down form-control">
                                            <ul class="dropdown-menu">
                                                <li><span data-number="3"> 3 per page</span></li>
                                                <li><span data-number="5"> 5 per page</span></li>
                                                <li><span data-number="10" data-default="true"> 10 per page</span></li>
                                                <li><span data-number="all"> view all</span></li>
                                            </ul>
                                        </div>
                                        <div data-control-type="drop-down" data-control-name="sort" data-control-action="sort" data-datetime-format="{month}/{day}/{year}" class="jplist-drop-down form-control">
                                            <ul class="dropdown-menu">
                                                <li><span data-path="default">Sort by</span></li>
                                                <li><span data-path=".title" data-order="asc" data-type="text">Title A-Z</span></li>
                                                <li><span data-path=".title" data-order="desc" data-type="text">Title Z-A</span></li>
                                                <li><span data-path=".date" data-order="desc" data-type="datetime" data-default="true">Date content</span></li>
                                            </ul>
                                        </div>
                                        <div class="text-filter-box">
                                            <div class="input-group"><span class="input-group-addon"><i class="fa fa-search"></i></span><input data-path=".title" type="text" value="" placeholder="Filter by Title" data-control-type="textbox" data-control-name="title-filter" data-control-action="filter" class="form-control"/></div>
                                        </div>
                                        <div class="text-filter-box">
                                            <div class="input-group"><span class="input-group-addon"><i class="fa fa-search"></i></span><input data-path=".desc" type="text" value="" placeholder="Filter by Content" data-control-type="textbox" data-control-name="desc-filter" data-control-action="filter" class="form-control"/></div>
                                        </div>
                                        <div data-type="Page {current} of {pages}" data-control-type="pagination-info" data-control-name="paging" data-control-action="paging" class="jplist-label btn btn-default"></div>
                                        <div data-control-type="pagination" data-control-name="paging" data-control-action="paging" class="jplist-pagination"></div>
                                    </div>
                                    <div class="box text-shadow">
                                        <table class="demo-tbl"><!--<item>1</item>-->
                                            
                                            <?php foreach($media as $med) { ?>
                                            <!--<item><?php echo $med->id; ?></item>-->
                                            <tr class="tbl-item"><!--<img/>-->
                                            <td class="img" style="width: 220px;"><a href="/adm/editmedia/<?php echo $med->id; ?>">
                                                
                                                    <?php if ($med->big_picture != "") { ?>
                                                    <img src="/assets/images/img_media/<?php echo $med->big_picture; ?>" alt="" title="" style="width: 120px; height: 90px;" /></a>&nbsp;
                                                    <?php } else { ?>
                                                    <img src="/assets/images/img_media/no_image.jpg" alt="" title="" style="width: 120px; height: 90px;" /></a>&nbsp;
                                                    <?php } ?>
                                                    <?php if ($med->is_ads) { ?>
                                                    <i class="icon fa fa-money" style="font-size: 40px; color: #999999"></i></td>
                                                    <?php } ?>
                                                <!--<data></data>-->
                                                <td class="td-block" ><p class="date"><?php echo $med->created; ?></p>

                                                    <p class="title"><?php echo $med->{'title_'.$this->session->userdata('language')}; ?></p>

                                                    <p class="desc"><?php echo mb_substr(($med->{'short_desc_'.$this->session->userdata('language')}),0,110)."..."; ?></p>

                                                    <p class="like"><?php echo $med->likes_total; ?> Likes</p>

                                                    <p class="date" style="float: left;">Published Date &nbsp : &nbsp<?php echo date('m/d/Y',strtotime($med->startdate)); ?> - <?php echo date('m/d/Y',strtotime($med->enddate)); ?></p>
                                                </td>
                                            <td style="width: 220px;">            
                                               <a href="/blog/<?php echo $med->slug; ?>"><button type="button" class="btn btn-success">view</button></a>

                                               <a href="/adm/editmedia/<?php echo $med->id; ?>"><button type="button" class="btn btn-primary">edit</button></a>
                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target=".delcoupon<?php echo $med->id; ?>">delete</button> 
                                                <br>
                                                <br>
                                               <?php if ($med->is_publish) { ?>
                                                    <a href="/adm/publishmedia/<?php echo $med->id; ?>"><button type="button" class="btn btn-warning">Unpublish</button></a>
                                                <?php } else { ?>
                                                    <a href="/adm/publishmedia/<?php echo $med->id; ?>"><button type="button" class="btn btn-info">Publish</button></a>
                                                <?php } ?>

                                            </td>
                                            </tr>

                                            <?php } ?>
                                            
                                        </table>
                                    </div>
                                    <div class="box jplist-no-results text-shadow align-center"><p>No results found</p></div>
                                    <div class="jplist-ios-button"><i class="fa fa-sort"></i>jPList Actions</div>
                                    <div class="jplist-panel box panel-bottom">
                                        <div data-control-type="drop-down" data-control-name="paging" data-control-action="paging" data-control-animate-to-top="true" class="jplist-drop-down form-control">
                                            <ul class="dropdown-menu">
                                                <li><span data-number="3"> 3 per page</span></li>
                                                <li><span data-number="5"> 5 per page</span></li>
                                                <li><span data-number="10" data-default="true"> 10 per page</span></li>
                                                <li><span data-number="all"> view all</span></li>
                                            </ul>
                                        </div>
                                        <div data-control-type="drop-down" data-control-name="sort" data-control-action="sort" data-control-animate-to-top="true" data-datetime-format="{month}/{day}/{year}" class="jplist-drop-down form-control">
                                            <ul class="dropdown-menu">
                                                <li><span data-path="default">Sort by</span></li>
                                                <li><span data-path=".title" data-order="asc" data-type="text">Title A-Z</span></li>
                                                <li><span data-path=".title" data-order="desc" data-type="text">Title Z-A</span></li>
                                                <li><span data-path=".date" data-order="desc" data-type="datetime" data-default="true">Date content</span></li>
                                            </ul>
                                        </div>
                                        <div data-type="{start} - {end} of {all}" data-control-type="pagination-info" data-control-name="paging" data-control-action="paging" class="jplist-label btn btn-default"></div>
                                        <div data-control-type="pagination" data-control-name="paging" data-control-action="paging" data-control-animate-to-top="true" class="jplist-pagination"></div>
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
                </div>
                <!--END CONTENT-->

<?php foreach($media as $med) { ?>

<div class="modal fade delcoupon<?php echo $med->id; ?>" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Delete Blog</h4>
      </div>
      <div class="modal-body">
        <p>If you sure to delete <font style="font-weight:bold;">"</style><?php echo $med->{'title_'.$this->session->userdata('language')}; ?>"</font> please click Confrm button</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        <a href="/adm/delmedia/<?php echo $med->id; ?>"><button type="button" class="btn btn-danger">Confirm</button></a>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<?php } ?>
