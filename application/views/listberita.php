<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">LIST BERITA</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

<!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Tabel  
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>JUDUL</th>
                                            <th>BERITA</th>
                                            <th>TANGGAL</th>
                                            <th>OPERASI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                <?php
                                    foreach($query as $row)
                                    {

                                    ?>
                                        <tr class="odd gradeX">
                                            <td><a href="<?php echo "bacaberita?id=$row->id_berita "?>"><?php echo substr($row->judul,0,30); ?></a></td>
                                            <td><?php echo substr($row->berita,0,30);?></td>
                                            <td><?php echo $row->tanggal;?></td>
                                            <td>                                           	
                                            	<a href="<?php echo "editberita?id=$row->id_berita"?>"class="btn btn-link" ">
											      	<span class="glyphicon glyphicon-pencil"></span>
											    </a>
											   
											  	<a href="<?php echo "deleteberita?id=$row->id_berita"?>"class="btn btn-link" onclick="return delete_confirm()">
											      <span class="glyphicon glyphicon-remove-circle"></span>
											   	</a>
											</td>
                                            
                                        </tr>
                                     <script type="text/javascript">
                                     	function delete_confirm() {
										    var msg = confirm('Anda Ingin Menghapus Berita yang Dipilih?');
										    if(msg == false) {
										        return false;
										    }
										}
                                     </script>   
                                      
                                <?php }?>                                  
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
</div>
</body>
<!-- jQuery Version 1.11.0 -->
    <script src="<?php echo base_url();?>Asset/js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>Asset/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url();?>Asset/js/plugins/metisMenu/metisMenu.min.js"></script>
    
 <!-- DataTables JavaScript -->
    <script src="<?php echo base_url();?>Asset/js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url();?>Asset/js/plugins/dataTables/dataTables.bootstrap.js"></script>
<script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });	
</script>