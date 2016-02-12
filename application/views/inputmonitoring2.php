<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">MONITORING DATA GRAPH</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

<?php
	echo form_open_multipart('admin/proseslihat2');
?>
			<div class="col-lg-6">
               <form role="form">
					<div class="form-group">
                  		<label>Wilayah</label>
                        	<input type="text" class="form-control" placeholder="Masukkan Wilayah" name="wilayah">
                	</div>              
					<div class="form-group">
                  		<label>Tanggal Mulai</label>
                        	<input type="text" class="form-control" placeholder="Masukkan Tanggal Mulai" id="datepicker" name="dari">
                	</div>
					<div class="form-group">
                  		<label>Tanggal Selesai</label>
                        	<input type="text" class="form-control" placeholder="Masukkan Tanggal Selesai" id="datepicker2" name="ke">
                	</div>
					<button type="submit" value="submit" class="btn btn-primary btn-lg">SUBMIT</button>
                </form>
      </div>


</div>
</div>