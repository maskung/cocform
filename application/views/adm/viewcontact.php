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
                                                                <li><span data-path=".date" data-order="asc" data-type="datetime">Date asc</span></li>
                                                                <li><span data-path=".date" data-order="desc" data-type="datetime">Date desc</span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="text-filter-box">
                                                            <div class="input-group"><span class="input-group-addon"><i class="fa fa-search"></i></span><input data-path=".title" type="text" value="" placeholder="Filter by Keyword" data-control-type="textbox" data-control-name="title-filter" data-control-action="filter" class="form-control"/></div>
                                                        </div>
                                                        <div data-type="Page {current} of {pages}" data-control-type="pagination-info" data-control-name="paging" data-control-action="paging" class="jplist-label btn btn-default"></div>
                                                        <div data-control-type="pagination" data-control-name="paging" data-control-action="paging" class="jplist-pagination"></div>
                                                        <a href="/adm/exportToExcel" class="btn btn-green jplist-label">Export</a>
                                                    </div>
                                                    <div class="box text-shadow">
                                                        <table class="demo-tbl"><!--<item>1</item>-->
                                                            
                                                            <?php foreach($inform as $inf) { ?>
                                                            <!--<item><?php echo $med->id; ?></item>-->
                                                            <tr class="tbl-item"><!--<img/>-->
                                                                <!--<data></data>-->
                                                                <td class="td-block"><p class="date"><?php echo $inf->sent; ?></p>

                                                                    <a href="viewonecontact/<?php echo $inf->id; ?>"><p class="title" style="color:green;"><?php echo $inf->title; ?></p>

                                                                    <p class="desc"></p>

                                                            <td>            
                                                            <!--a href="/adm/editmedia/<?php echo $inf->id; ?>"><button type="button" class="btn btn-primary">edit</button></a-->
                                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target=".delcoupon<?php echo $inf->id; ?>">delete</button> 

                                                            </td>
                                                            </tr>

                                                            <?php } ?>
                                                            
                                                        </table>
                                                    </div>

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
                                                                <li><span data-path=".date" data-order="asc" data-type="datetime">Date asc</span></li>
                                                                <li><span data-path=".date" data-order="desc" data-type="datetime">Date desc</span></li>
                                                            </ul>
                                                        </div>
                                                        <div data-type="{start} - {end} of {all}" data-control-type="pagination-info" data-control-name="paging" data-control-action="paging" class="jplist-label btn btn-default"></div>
                                                        <div data-control-type="pagination" data-control-name="paging" data-control-action="paging" data-control-animate-to-top="true" class="jplist-pagination"></div>
                                                        <a href="/adm/exportToExcel" class="btn btn-green jplist-label">Export</a>

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

<?php foreach($inform as $inf) { ?>

<div class="modal fade delcoupon<?php echo $inf->id; ?>" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Delete Contact</h4>
      </div>
      <div class="modal-body">
        <p>If you sure to delete "<?php echo $inf->title; ?>" please click Confirm button</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        <a href="/adm/delcontact/<?php echo $inf->id; ?>"><button type="button" class="btn btn-danger">Confirm</button></a>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<?php } ?>
