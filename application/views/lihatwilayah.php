
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">MONITORING DATA TABEL</h1>
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
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>WILAYAH</th>
                                            <th>SUHU</th>
                                            <th>CURAH HUJAN</th>
                                            <th>KELEMBABAN</th>
                                            <th>WAKTU</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                <?php
                                    foreach($query as $row)
                                    {

                                    ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $row->ID; ?></td>
                                            <td><?php echo $row->WILAYAH;?></td>
                                            <td><?php echo $row->SUHU;?></td>
                                            <td><?php echo $row->CURAH_HUJAN;?></td>
                                            <td class="center"><?php echo $row->KELEMBABAN;?></td>
                                            <td class="center"><?php echo $row->DATE_TIME;?></td>
                                        </tr>
                                      
                                <?php }?>                                  
                                    </tbody>
                                    
                                </table>
                                <center>
                                	<a href="<?php echo "pdf?wilayah=$wilayah&dari=$dari&ke=$ke"?>"class="btn btn-link" target="_blank">
										<span class="glyphicon glyphicon-pencil">PDF</span>
									</a>
									<a href="<?php echo "xls?wilayah=$wilayah&dari=$dari&ke=$ke"?>"class="btn btn-link" target="_blank">
										<span class="glyphicon glyphicon-pencil">Excel</span>
									</a>
                            	</center>
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

</div>
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
    	
$(function () {
    var chart;
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: 'tampil-grafik1', //letakan grafik di div id container
				//Type grafik, anda bisa ganti menjadi area,bar,column dan bar
                type: 'line'
            },
            title: {
                text: 'Grafik Kecepatan Angin',
                x: -20 //center
            },
            xAxis: { //X axis menampilkan data bulan 
                categories: [
                	<?php foreach ($query as $row) { ?>
                		'<?php echo $row->JAM; ?>' ,
                	<?php } ?>
                ],
                labels: {
	                rotation: -45,
	                style: {
	                    fontSize: '10px'
	                }
          		},
            },
            scrollbar: {
	            	enabled:true
				
	    	},
	    	rangeSelector: {
            	selected: 1
        	},
            
            yAxis: {
                title: {  //label yAxis
                    text: 'Total'
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#808080' //warna dari grafik line
                }]
            },
        	//series adalah data yang akan dibuatkan grafiknya,
		
            series: [
	            {name:'Kecepatan Angin', data:[<?php foreach($query as $row){ echo $row->KECEPATAN_ANGIN; echo ','; } ?>]}
	            
                
            
            ]
            
        });
    });
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: 'tampil-grafik2', //letakan grafik di div id container
				//Type grafik, anda bisa ganti menjadi area,bar,column dan bar
                type: 'line'
            },
            title: {
                text: 'Grafik Kelembaban',
                x: -20 //center
            },
            xAxis: { //X axis menampilkan data bulan 
                categories: [
                	<?php foreach ($query as $row) { ?>
                		'<?php echo $row->DATE_TIME; ?>' ,
                	<?php } ?>
                ]
            },
            yAxis: {
                title: {  //label yAxis
                    text: 'Total'
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#0a03fc' //warna dari grafik line
                }]
            },
        	//series adalah data yang akan dibuatkan grafiknya,
		
            series: [
	            
	            {name:'Kelembaban', data:[<?php foreach($query as $row){ echo $row->KELEMBABAN; echo ','; } ?>]}
            ]
        });
    });
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: 'tampil-grafik3', //letakan grafik di div id container
				//Type grafik, anda bisa ganti menjadi area,bar,column dan bar
                type: 'line'
            },
            title: {
                text: 'Grafik Suhu',
                x: -20 //center
            },
            xAxis: { //X axis menampilkan data bulan 
                categories: [
                	<?php foreach ($query as $row) { ?>
                		'<?php echo $row->DATE_TIME; ?>' ,
                	<?php } ?>
                ]
            },
            yAxis: {
                title: {  //label yAxis
                    text: 'Total'
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#fe1401' //warna dari grafik line
                }]
            },
        	//series adalah data yang akan dibuatkan grafiknya,
		
            series: [
	            
	            {name:'Suhu', data:[<?php foreach($query as $row){ echo $row->SUHU; echo ','; } ?>]}
                
            
            ]
        });
    });
    
});</script>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">MONITORING DATA GRAPH</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>


			<div class="panel-body">
				<div id="tampil-grafik1"  auto"></div>
			</div>
			
			<div id="tampil-grafik2"  auto"></div>
			<div id="tampil-grafik3" auto"></div>

</div>