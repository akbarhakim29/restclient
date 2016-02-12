			<?php
               foreach($query as $row){
            ?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><?php echo $row->judul ?></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
			<div class="col-lg-12">
               <P class="lead"><?php echo $row->berita?></P>
            </div>
			<?php }?>
</div>
</body>
