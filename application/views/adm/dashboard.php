                <!--BEGIN CONTENT-->
                <div class="page-content">
                    <div id="tab-general">
                        <div id="sum_box" class="row mbl">
                            <div class="col-sm-6 col-md-3">
                                <div class="panel visit db mbm">
                                    <div class="panel-body">
                                        <p class="icon">
                                            <i class="icon fa fa-group"></i>
                                        </p>
                                        <h4 class="value">
                                        <span><?php echo $inf_amount->allmember; ?></span><span>p.</span></h4>
                                        <p class="description">
                                            all member</p>
                                        <div class="progress progress-sm mbn">
                                        <div role="progressbar" aria-valuenow="<?php echo percentage($inf_amount->allmember,500) ?>" aria-valuemin="0" aria-valuemax="100"
                                            style="width: <?php echo percentage($inf_amount->allmember,500) ?>%;" class="progress-bar progress-bar-warning">
                                                <span class="sr-only"><?php echo percentage($inf_amount->allmember,500) ?>% Complete (success)</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                <!--END CONTENT-->

