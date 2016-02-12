<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">UPDATE ADMIN</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>


<?php
	
    foreach ($query as $row) {

?>

			<div class="col-lg-6">
               <form role="form" action="<?php echo "updateadmin"?>" method="get">
					<div class="form-group">
                  		<label>Username</label>
                        	<input type="text" class="form-control" placeholder="Masukkan Username" type="text" 
                          name="username" value="<?php echo $row->username ;?>">
                	</div>              
					<div class="form-group">
                  		<label>Password</label>
                        	<input type="password" class="form-control" placeholder="Masukkan Password" type="text" 
                          name="pass" value="<?php echo $row->pass ;?>">
                	</div>
					<div class="form-group">
                  		<label>Nama Lengkap</label>
                        	<input type="text" class="form-control" placeholder="Masukkan Nama Lengkap" type="text" 
                          name="nama" value="<?php echo $row->nama ;?>">
                	</div>
					<div class="form-group">
                  		<label>E-mail</label>
                        	<input type="text" class="form-control" placeholder="Masukkan E-mail" type="text" 
                          name="email" value="<?php echo $row->email ;?>">
                	</div>
           	
            </div>

            <div class="col-lg-6">              
					<div class="form-group">
                  		<label>Nomor Telepon</label>
                        	<input type="text" class="form-control" placeholder="Masukkan nomor Telepon" type="text" 
                          name="hp" value="<?php echo $row->hp ;?>">
                	</div>
                	<div class="form-group">
                        <label>Jenis Kelamin</label>
                            <div class="radio">
                                <label>
                                 <input type="radio" name="jk" id="L" value="L" checked>Laki-Laki
                                </label>
                            </div>
                    		<div class="radio">
                        		<label>
                                 <input type="radio" name="jk" id="L" value="P" >Perempuan
                                </label>
                            </div>
                                           
                    </div>
                	<div class="form-group">
                        <label>Alamat</label>
                            <textarea class="form-control" rows="3" name="alamat" 
                            ><?php echo $row->alamat ;?></textarea>
                    </div>

					         <button type="submit" value="submit" class="btn btn-primary btn-lg">SUBMIT</button>
                </form>
            </div>
    <?php } ?>
</div>