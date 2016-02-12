<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">MONITORING DATA TABEL</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>


<?php
	echo form_open_multipart('proseslihat');
?>
			<div class="col-lg-6">
               <form role="form">
					<div class="form-group">
                  		<label>Wilayah</label>
                        	<input type="text" class="form-control" placeholder="Masukkan Wilayah" name="wilayah">
                	</div>              
					<div class="form-group">
                  		<label>Tanggal Mulai</label>
                        	<input type="text" class="form-control" placeholder="Masukkan Tanggal Mulai" id="date_timepicker_start" name="dari" >
                	</div>
					<div class="form-group">
                  		<label>Tanggal Selesai</label>
                        	<input type="text" class="form-control" placeholder="Masukkan Tanggal Selesai" id="date_timepicker_end" name="ke" >
                	</div>
					<button type="submit" value="submit" class="btn btn-primary btn-lg">SUBMIT</button>
                </form>
            </div>


</div>
</body>
<script type="text/javascript">


					jQuery(document).ready(function(){
					 jQuery('#date_timepicker_start').datetimepicker({
					  onShow:function( ct ){
					   this.setOptions({
					    maxDate:jQuery('#date_timepicker_end').val()?jQuery('#date_timepicker_end').val():false
					   })
					  }
					  
					 });
					 jQuery('#date_timepicker_end').datetimepicker({
					  onShow:function( ct ){
					   this.setOptions({
					    //minDate:jQuery('#date_timepicker_start').val()?jQuery('#date_timepicker_start').val():false
					   })
					  }
					 
					 });
					});

</script>
