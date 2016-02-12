<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">LIST ADMIN</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

 <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Admin  
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            
                                            <th>USERNAME</th>
                                            <th>PASSWORD</th>
                                            <th>NAMA</th>
                                            <th>EMAIL</th>
                                            <th>NO.TELP</th>
                                            <th>JENIS KELAMIN</th>
                                            <th>ALAMAT</th>
                                            <th>EDIT</th>
                                            <th>DELETE</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                <?php
                                    foreach($query as $row)
                                    {

                                    ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $row->username; ?></td>
                                            <td><?php echo $row->pass;?></td>
                                            <td><?php echo $row->nama;?></td>
                                            <td><?php echo $row->email;?></td>
                                            <td><?php echo $row->hp;?></td>
                                            <td><?php echo $row->jk;?></td>
                                            <td><?php echo $row->alamat;?></td>
                                            <td><a href="<?php echo "ambiladmin?username=$row->username"; ?>">edit</a></td>
                                            <td><a href="<?php echo "deleteadmin?username=$row->username"; ?>">delete</a></td>
                                        </tr>
                                      
                                <?php }?>                                  
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                            
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
</div>