<!--BEGIN CONTENT-->
<div class="page-content">
           <div class="col-lg-12">
                <div class="panel panel-green">
                    <div class="panel-heading">
                        Add customer Logo and Title
                    </div>
                    <div class="panel-body pan">
                        <form method="POST" action="/adm/addcustomerlogoprocess" enctype="multipart/form-data" accept-charset="utf-8" >
                            <div class="form-body pal">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="inputName" class="control-label"> Title</label>
                                        <div class="input-icon right">
                                            <i class="fa fa-tag"></i>
                                            <input id="inputName" type="text" name="title" placeholder="Please type title here not more than 255 characters" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputSubject" class="control-label">Logo</label>
                                <div class="input-icon right">
                                    <input id="inputIncludeFile" type="file" name="userfile[]" placeholder="media image">
                                </div>
                            </div>

                            <div class="form-actions text-right pal">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                 </div><!-- panel -->

             </div><!-- col-lg-12 -->

	</div><!-- page content -->

<!-- END CONTENT -->
