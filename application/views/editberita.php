<script type="text/javascript" src="<?php echo base_url("Asset/ckeditor/ckeditor.js")?>"></script>
<script>
$(document).ready(function() {
        $('#editor1');
        config.fillEmptyBlocks = false;	// Prevent filler nodes in all empty blocks.
    });


</script>
			<?php
               foreach($query as $row){
            ?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">EDIT BERITA</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
			<div class="col-lg-12">
               <form role="form" action="<?php echo "updateberita?id_berita=$row->id_berita"?>" method = "post" enctype="multipart/form-data?>">
					<div class="form-group">
                  		<label>Judul Berita</label>
                        	<input type="text" class="form-control" name="judul" value="<?php echo $row->judul?>"></input>
                	</div>
                	<div class="form-group"">
                		<label>Isi Berita</label>
                			<textarea class="ckeditor" id="editor1" cols="10" rows="40" name="berita"><?php echo $row->berita?></textarea>
                	</div>
                	 <?php }?>  
                	
					<button type="submit" value="submit" class="btn btn-primary btn-lg">SUBMIT</button>
                </form>
            </div>

</div>
</body>
