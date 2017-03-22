                            <div class="page-content">

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="panel">
                                            <div class="panel-body">
                                                <div class="col-md-12" style="margin-bottom:10px;">
                                                    <button type="button" class="btn btn-blue" data-toggle="modal" data-target=".delcoupon">Add New Slide</button>
                                                </div>

                                                <?php $i = 1;
                                                     foreach ($slide as $key) { 
                                                        $inputid = "inputIncludeFile".$i;
                                                        $imgid = "blah".$i;?>
                                                        <div class="col-md-4">
                                                <form method="post" action="/adm/editSlideImg/<?php echo $key->id; ?>" enctype="multipart/form-data">
                                                    <div class="form-group">
                                                        <label for="inputSubject" class="control-label">Picture <?php echo $i; ?></label>
                                                            <input id="<?php echo $inputid; ?>" type="file" name="userfile[]" placeholder="media image" >
                                                            <label><input class="form-control" type="text" placeholder="Insert link here" value="<?php echo $key->link; ?>"name="link"></label><br>
                                                            <label><img class="img-responsive" id="<?php echo $imgid; ?>" src="/assets/images/img_slide/<?php echo $key->picture; ?>" alt="Example Image" ></label>
                                                            <label><button type="button" class="btn btn-danger" data-toggle="modal" data-target=".delslide<?php echo $key->id ?>">Delete</button></label>
                                                            <label><input name="submit" type="submit" class="btn btn-green" value="Save" align="right"></label>
                                                    </div>
                                                </form>
                                                </div>
                                                <?php $i++; } ?>
                                
											</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                <!--END CONTENT-->
<div class="modal fade delcoupon" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Add New Picture</h4>
      </div>
      <div class="modal-body">
        <form method="post" action="/adm/addSlideImg/" enctype="multipart/form-data">
        <div class="form-group">
            <label for="inputSubject" class="control-label">Picture</label>
            <input id="inputFile" type="file" name="userfile[]" placeholder="media image">
            <label><input class="form-control" type="text" placeholder="Insert link here" name="link"></label><br>
            <label><img id="blah" src="/assets/images/sample.jpg" alt="Example Image" width="250" height="200"></label>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <input name="submit" type="submit" class="btn btn-primary" value="Add">
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<?php foreach ($slide as $key) { ?>
<div class="modal fade delslide<?php echo $key->id; ?>" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Delete Slide</h4>
      </div>
      <div class="modal-body">
        <p>If you sure to delete this slide please click Confirm button</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        <a href="/adm/delSlide/<?php echo $key->id; ?>"><button type="button" class="btn btn-danger">Confirm</button></a>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php } ?>

<script type="text/javascript">
    function readURL(input,order) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            if (order == 1) {
                $('#blah1').attr('src', e.target.result);
            }
            else if (order == 2) {
                $('#blah2').attr('src', e.target.result);
            }
            else if (order == 3) {
                $('#blah3').attr('src', e.target.result);
            }
            else if (order == 4) {
                $('#blah4').attr('src', e.target.result);
            }
            else if (order == 5) {
                $('#blah5').attr('src', e.target.result);
            }
            else if (order == 6) {
                $('#blah6').attr('src', e.target.result);
            }
            else if (order == 7) {
                $('#blah7').attr('src', e.target.result);
            }
            else if (order == 8) {
                $('#blah8').attr('src', e.target.result);
            }
            else {
                $('#blah').attr('src', e.target.result);
            }
        }

        reader.readAsDataURL(input.files[0]);
    }
}
$("#inputFile").change(function(){
    readURL(this,0);
});
$("#inputIncludeFile1").change(function(){
    readURL(this,1);
});
$("#inputIncludeFile2").change(function(){
    readURL(this,2);
});
$("#inputIncludeFile3").change(function(){
    readURL(this,3);
});
$("#inputIncludeFile4").change(function(){
    readURL(this,4);
});
$("#inputIncludeFile5").change(function(){
    readURL(this,5);
});
$("#inputIncludeFile6").change(function(){
    readURL(this,6);
});
$("#inputIncludeFile7").change(function(){
    readURL(this,7);
});
$("#inputIncludeFile8").change(function(){
    readURL(this,8);
});
</script>