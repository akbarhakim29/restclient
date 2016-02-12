 <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Kolom Berita
                </h1>
            </div>
            <?php
                foreach($query1 as $row1)
               {
            ?>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i><?php echo $row1->judul;?> </h4>
                    </div>
                    <div class="panel-body">
                        <p><?php echo substr($row1->berita,0,140);?></p>
                        <a href="" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            
            <?php
        }
        ?>
<!-- Portfolio Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Status Data Pantau</h2>

            </div>
            
            <div class="col-md-4 col-sm-6">
                <h3> Status hari ini</h3>
			        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>MAX/MIN</th>
                                            <th>WILAYAH</th>
	                                        <th>SUHU</th>
                                            <th>KELEMBABAN</th>
                                            <th>KECEPATAN ANGIN</th>
                                            
                                            
                                        </tr>
                                   </thead>
                                    <tbody>
                                <?php
                                    foreach($query as $row)
                                        
                                    {

                                    ?>
                                        <tr class="odd gradeX">
                                           	    <td class="center">MAX</td>
                                            	<td class="center"><?php echo $row->WILAYAH;?></td>
                                                <td class="center"><?php echo $row->maxsuhu;?></td>
                                                <td class="center"><?php echo $row->maxkelembaban;?></td>
                                                <td class="center"><?php echo $row->maxkecepatan_angin;?></td>
                                            
                                        </tr>
                                        <tr class="odd gradeX">
                                                <td class="center">MIN</td>
                                                <td class="center"><?php echo $row->WILAYAH;?></td>
                                                <td class="center"><?php echo $row->minsuhu;?></td>
                                                <td class="center"><?php echo $row->minkelembaban;?></td>
                                                <td class="center"><?php echo $row->minkecepatan_angin;?></td>
                                            
                                        </tr>
                                      
                                <?php }?>                                  
                                    </tbody>
                                     </thead>
                                
			      </table>
            </div>
           
           
           
            
        </div>
        <!-- /.row -->

        
        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; PKL 2015</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="Asset/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="Asset/js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>