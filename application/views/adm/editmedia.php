<!--BEGIN CONTENT-->
<div class="page-content">
    <div class="col-lg-12">
        <div class="panel panel-green">
            <div class="panel-heading">
                Edit Blog Detail
            </div>

            <div class="panel-body pan">
              <form method="POST" action="/adm/editm" enctype="multipart/form-data" accept-charset="utf-8" >
                <div class="form-body pal">
                  <div class="row">
                    <?php foreach ($media as $media)?>
                    <div class="col-md-12">
                      <div class="tab-content">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a data-toggle="tab" href="#title_english_tab">English</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#title_japanese_tab">Japanese</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#title_thai_tab">Thai</a>
                            </li>
                        </ul> 
                            
                            
                        <div id="title_english_tab" class="tab-pane fade in active">
                          <div class="form-group" style="margin-top: 10px;">
                            <label for="inputName" class="control-label">Title (English)</label>
                            <div class="input-icon right">
                                <i class="fa fa-user"></i>
                                <input id="inputName" type="text" name="title_english" value="<?php echo $media->title_english; ?>" placeholder="<?php echo $media->title_english; ?>" class="form-control">
                            </div><!--input-icon-->
                          </div><!--form-group-->
                          <div class="form-group" style="margin-top: 10px;">
                            <label for="inputName" class="control-label">Short Description (English)</label>
                            <div class="input-icon right">
                                <i class="fa fa-user"></i>
                                <input id="inputName" type="text" name="short_desc_english" value="<?php echo $media->short_desc_english; ?>" placeholder="<?php echo $media->short_desc_english; ?>" class="form-control">
                            </div><!--input-icon-->
                          </div><!--form-group-->
                          <div class="form-group" style="margin-top: 10px;">
                            <label for="inputMessage" class="control-label">Content (English)</label><textarea id="editor1" rows="10" name="content_english" class="form-control"><?php echo $media->content_english; ?></textarea>
                          </div><!--form-group-->
                        </div><!--title_english-->

                        <div id="title_japanese_tab" class="tab-pane fade">
                          <div class="form-group" style="margin-top: 10px;">
                            <label for="inputName" class="control-label">Title (Japanese)</label>
                            <div class="input-icon right">
                                <i class="fa fa-user"></i>
                                <input id="inputName" type="text" name="title_japanese" value="<?php echo $media->title_japanese; ?>" placeholder="<?php echo $media->title_japanese; ?>" class="form-control">
                            </div><!--input-icon-->
                          </div><!--form-group-->
                          <div class="form-group" style="margin-top: 10px;">
                            <label for="inputName" class="control-label">Short Description (Japanese)</label>
                            <div class="input-icon right">
                                <i class="fa fa-user"></i>
                                <input id="inputName" type="text" name="short_desc_japanese" value="<?php echo $media->short_desc_japanese; ?>" placeholder="<?php echo $media->short_desc_japanese; ?>" class="form-control">
                            </div><!--input-icon-->
                          </div><!--form-group-->
                          <div class="form-group" style="margin-top: 10px;">
                            <label for="inputMessage" class="control-label">Content (Japanese)</label><textarea id="editor2" rows="5" name="content_japanese" class="form-control"><?php echo $media->content_japanese; ?></textarea>
                          </div><!--form-group-->
                        </div><!--title_japanese-->

                        <div id="title_thai_tab" class="tab-pane fade">
                          <div class="form-group" style="margin-top: 10px;">
                            <label for="inputName" class="control-label">Title (Thai)</label>
                            <div class="input-icon right">
                                <i class="fa fa-user"></i>
                                <input id="inputName" type="text" name="title_thai" value="<?php echo $media->title_thai; ?>" placeholder="<?php echo $media->title_thai; ?>" class="form-control">
                            </div><!--input-icon-->
                          </div><!--form-group-->
                          <div class="form-group" style="margin-top: 10px;">
                            <label for="inputName" class="control-label">Short Description (Thai)</label>
                            <div class="input-icon right">
                                <i class="fa fa-user"></i>
                                <input id="inputName" type="text" name="short_desc_thai" value="<?php echo $media->short_desc_thai; ?>" placeholder="<?php echo $media->short_desc_thai; ?>" class="form-control">
                            </div><!--input-icon-->
                          </div><!--form-group-->
                          <div class="form-group" style="margin-top: 10px;">
                            <label for="inputMessage" class="control-label">Content (Thai)</label><textarea id="editor3" rows="5" name="content_thai" class="form-control"><?php echo $media->content_thai; ?></textarea>
                          </div><!--form-group-->
                        </div><!--title_thai-->

                      </div><!--tab-content-->
                    </div><!--col-md-12-->

                        
                <br>
                <div class="col-md-6">

                    <div class="form-group">
                        <label for="inputEmail" class="control-label">Category</label>
                            <select class="form-control" name="category_id" id="category_english">
                            <option value="0">Please select catetory</option>
                            <?php foreach ($category as $cate) { ?>
                            <option value="<?php echo $cate->id_cate; ?>" <?php if ($media->category_id == $cate->id_cate) echo "SELECTED" ?>><?php echo $cate->category_english; ?></option>
                            <?php } ?>
                        </select>
                                                        
                    </div>
                </div>
                <br>
                            <div class="col-md-6">
                                <div class="form-group">
                                   <label for="inputEmail" class="control-label">Publish Start</label>
                                   <div class="input-icon right">
                                        <i class="fa fa-calendar"></i>
                                        <input id="startdate" type="text" name="startdate" value="<?php echo $media->startdate; ?>" placeholder="" class="form-control cleditor">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputEmail" class="control-label">Publish end</label>
                                        <div class="input-icon right">
                                            <i class="fa fa-calendar"></i>
                                            <input id="enddate" type="text" name="enddate" value="<?php echo $media->enddate; ?>" placeholder="" class="form-control">
                                        </div>
                               </div>
                            </div>
                <div class="col-md-12">
                <p>SEO Example</p>
                <div>
                    <p style="font-size:18px;font-family:Arial;margin-bottom:0px;color:#1a0dab;" id="display-title"><?php echo $media->{'title_'.$title_lang};?></p>
                    <p style="font-size:14px;font-family:Arial;margin-bottom:0px;color:#006635;"id="display-slug">http://dtkwebsite.dev/blog/<?php echo $media->slug; ?></p>
                    <p style="font-size:14px;font-family:Arial;"id="display-meta"><?php echo $media->meta_description; ?></p>
                </div>
                </div>
                <div class="col-md-12">
                <div class="form-group">
                                <label class="control-label" for="slug">Slug</label>
                                <input type="text" name="slug" id="slug" class="form-control" value="<?php echo $media->slug; ?>">
                            </div>
                        </div>

                <br>
                <div class="col-md-12">
                <div class="form-group">
                                <label class="control-label" for="meta-des">Meta Description</label>
                                <input type="text" name="meta-des" id="meta-des" class="form-control" value="<?php echo $media->meta_description; ?>">
                            </div></div>
                <div class="col-md-12">
                <div class="form-group">
                                <label class="control-label" for="meta-des">Keyword</label>
                                <input type="text" name="keyword" id="keyword" class="form-control" value="<?php  echo $media->keyword; ?>">
                            </div></div><br>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="inputSubject" class="control-label">Tag</label>
                        <!--div class="input-icon right">
                            <i class="fa fa-tag"></i>
                            <input id="inputSubject" type="text" name="tag" placeholder="" value="<?php echo $media->tag; ?>" class="form-control">
                        </div-->
                        <select data-placeholder="Please type tag here not more than 255 characters" class="chosen-select" name="tag" multiple tabindex="4">
                            <option value=""></option>
                            <?php $dbtags = explode(',',$media->tag); ?>
                            <?php foreach ($tags as $tag) { ?>
                            <option value="<?php echo $tag->keyword; ?>" <?php if (in_array($tag->keyword,$dbtags)) echo "SELECTED"; ?> ><?php echo $tag->keyword; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <br><br>

                <div class="col-md-12">
                    <div class="form-group">
                            <?php if ($media->big_picture != "") { ?>
                                <img src="/assets/images/img_media/<?php echo $media->big_picture; ?>" class="img-responsive">
                            <?php } else { ?>
                                <img src="/assets/images/img_media/no_image.jpg" class="img-responsive">
                            <?php } ?>
                        <div>
                            <label for="inputSubject" class="control-label">Picture</label>
                            <input id="inputIncludeFile" type="file" name="userfile[]" placeholder="media image">
                        </div>
                    </div>
                </div>

            </div><!--row-->

                    

                    <div class="form-actions text-right pal">

                        <?php if ($media->is_publish) { ?>
                            <a href="/adm/publishedit/<?php echo $media->id; ?>"><button type="button" class="btn btn-warning">Unpublish</button></a>
                        <?php } else { ?>
                            <a href="/adm/publishedit/<?php echo $media->id; ?>"><button type="button" class="btn btn-info">Publish</button></a>
                        <?php } ?>
                    
                        <input type="hidden" name="id" value="<?php echo $media->id; ?>">

                        <a href="/blog/<?php echo $media->slug; ?>"><button type="button" class="btn btn-success">View</button></a>
                        <button type="submit" class="btn btn-primary">Save</button>
                        <button type="button" class="btn btn-danger" onclick="deletemedia(<?php echo $media->id; ?>)">Delete</button>
                    </div>

                  </div>
                </form>
            </div>
        </div><!-- panel -->

    </div><!-- col-lg-12 --> 

</div><!-- page content -->

<!-- END CONTENT -->

<script type="text/javascript">
    $('#inputName').keyup(function () {
      $('#display-title').text($(this).val());
    });
    $('#slug').keyup(function () {
        var str = "http://new.dtkad.com/blog/";
      $('#display-slug').text(str.concat($(this).val()));
    });
    $('#meta-des').keyup(function () {
      $('#display-meta').text($(this).val());
    });
</script>

<script>

function deletemedia(id) {
    location.href = "/adm/delmedia/" + id;
}
    

function viewmedia(id) {
    location.href = "/shop/c_media/review/" + id;
}

    // get sub category from main category from the dropdown button
    $(function() {

        $('#category').change(function() {


            //get main cate id
            var cate = $('#category').val();

            //console.log($('#category').val());
			             
            //retrive data and send to sub category dropdown
            $.post('/adm/getsubcate',{'cate':cate}, function(data) {
                //console.log(data);
                $('#subcategory').empty();

                $('#subcategory').html(data);

            });
        });

        $('#area').change(function() {

            //get main cate id
            var area = $('#area').val();

            //console.log(area);
			             
            //retrive data and send to sub category dropdown
            $.post('/adm/getstation',{'areaid':area}, function(data) {
                //console.log(data);
                $('#station').empty();

                $('#station').html(data);

            });

        });
    });
        

</script>
<script>
$(function() {
    $('.chosen-select').chosen({width: "80%"});
    $('.chosen-select-deselect').chosen({ allow_single_deselect: true });
});     
</script>
<script>

/**
 * Copyright (c) 2003-2016, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

/* exported initSample */

if ( CKEDITOR.env.ie && CKEDITOR.env.version < 9 )
	CKEDITOR.tools.enableHtml5Elements( document );

// The trick to keep the editor in the sample quite small
// unless user specified own height.
CKEDITOR.config.height = 500;
CKEDITOR.config.width = 'auto';

var initSample = ( function() {
	var wysiwygareaAvailable = isWysiwygareaAvailable(),
		isBBCodeBuiltIn = !!CKEDITOR.plugins.get( 'bbcode' );

	return function() {
		var editorElement = CKEDITOR.document.getById( 'editor1' );
        var editorElement = CKEDITOR.document.getById( 'editor2' );
        var editorElement = CKEDITOR.document.getById( 'editor3' );

		// :(((
		if ( isBBCodeBuiltIn ) {
			editorElement.setHtml(
				'Hello world!\n\n' +
				'I\'m an instance of [url=http://ckeditor.com]CKEditor[/url].'
			);
		}

		// Depending on the wysiwygare plugin availability initialize classic or inline editor.
		if ( wysiwygareaAvailable ) {
			CKEDITOR.replace( 'editor1', {filebrowserImageBrowseUrl : '<?php echo base_url('assets/filemanager/index.html');?>'} );
            CKEDITOR.replace( 'editor2', {filebrowserImageBrowseUrl : '<?php echo base_url('assets/filemanager/index.html');?>'}  );
            CKEDITOR.replace( 'editor3', {filebrowserImageBrowseUrl : '<?php echo base_url('assets/filemanager/index.html');?>'}  );
		} else {
			editorElement.setAttribute( 'contenteditable', 'true' );
			CKEDITOR.inline( 'editor1', {filebrowserImageBrowseUrl : '<?php echo base_url('assets/filemanager/index.html');?>'}  );
            CKEDITOR.inline( 'editor2', {filebrowserImageBrowseUrl : '<?php echo base_url('assets/filemanager/index.html');?>'}  );
            CKEDITOR.inline( 'editor3', {filebrowserImageBrowseUrl : '<?php echo base_url('assets/filemanager/index.html');?>'}  );

			// TODO we can consider displaying some info box that
			// without wysiwygarea the classic editor may not work.
		}
	};

	function isWysiwygareaAvailable() {
		// If in development mode, then the wysiwygarea must be available.
		// Split REV into two strings so builder does not replace it :D.
		if ( CKEDITOR.revision == ( '%RE' + 'V%' ) ) {
			return true;
		}

		return !!CKEDITOR.plugins.get( 'wysiwygarea' );
	}
} )();

initSample();

</script>
<script type="text/javascript">
$( function() {
    
    //$("#startdate").datepicker({ dateFormat: 'yy-mm-dd'});
    $("#startdate").datepick({dateFormat: 'yyyy-mm-dd'});

    //$("#enddate").datepicker({ dateFormat: 'yy-mm-dd' });
    $("#enddate").datepick({dateFormat: 'yyyy-mm-dd'});
} );

</script>
