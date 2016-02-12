<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">TAMBAH ADMIN</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>


<?php
	echo form_open_multipart('admin/tambahadmin');
?>

			<div class="col-lg-6">
               <form role="form">
					<div class="form-group">
                  		<label>Username</label>
                        	<input type="text" class="form-control" placeholder="Masukkan Username" type="text" name="username">
                	</div>              
					<div class="form-group">
                  		<label>Password</label>
                        	<input type="password" class="form-control" placeholder="Masukkan Password" type="text" name="password" >
                	</div>
					<div class="form-group">
                  		<label>Nama Lengkap</label>
                        	<input type="text" class="form-control" placeholder="Masukkan Nama Lengkap" type="text" name="nama">
                	</div>
					<div class="form-group">
                  		<label>E-mail</label>
                        	<input type="text" class="form-control" placeholder="Masukkan E-mail" type="text" name="email">
                	</div>
           	<button type="submit" value="submit" class="btn btn-primary btn-lg">SUBMIT</button>
            </div>

            <div class="col-lg-6">              
					<div class="form-group">
                  		<label>Nomor Telepon</label>
                        	<input type="text" class="form-control" placeholder="Masukkan nomor Telepon" type="text" name="hp">
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
                                 <input type="radio" name="jk" id="L" value="P">Perempuan
                                </label>
                            </div>
                                           
                    </div>
                	<div class="form-group">
                        <label>Alamat</label>
                            <textarea class="form-control" rows="3" name="alamat"></textarea>
                    </div>

					
                </form>
            </div>

</div>