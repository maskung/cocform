                        <?php foreach ($inform as $key) { ?>
                            <div class="page-content">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="panel panel-blue">
                                        	<div class="panel-heading">
						                      <h3>Contact Information</h3>
						                    </div>
                                            <div class="panel-body pan">
                                                <div class="col-md-12">
                                                    <p style="font-size:18px;margin-top:10px;:">Title : <?php echo $key->title; ?></p>
                                                </div>
                                                <div class="col-md-12">
                                                    <p style="font-size:18px;margin-top:10px;:">Name : <?php echo $key->name; ?></p>
                                                </div>
                                                <div class="col-md-12">
                                                    <p style="font-size:18px;margin-top:10px;:">Company : <?php echo $key->company; ?></p>
                                                </div>
                                                <div class="col-md-12">
                                                    <p style="font-size:18px;margin-top:10px;:">Email : <?php echo $key->email; ?></p>
                                                </div>
                                                <div class="col-md-12">
                                                    <p style="font-size:18px;margin-top:10px;:">What services are you looking to engage?: 
                                                        <?php echo $key->services; ?></p>
                                                </div>
                                                <div class="col-md-12">
                                                    <p style="font-size:18px;margin-top:10px;:">Budget Range: 
                                                        <?php echo $key->budget; ?></p>
                                                </div>
                                                <div class="col-md-12">
                                                    <p style="font-size:18px;margin-top:10px;:">How soon we get start?: 
                                                        <?php echo $key->getstart; ?></p>
                                                </div>
                                                <div class="col-md-12">
                                                    <p style="font-size:18px;margin-top:10px;:">Did we miss anything?:
                                                        <?php echo $key->didwemiss; ?></p>
                                                </div>
                                                    </div>
                                            	</div>
                                           	</div>
                                        </div>
                                    </div>
                        <?php } ?>