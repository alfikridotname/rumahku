<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Datatables -->
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.1.6/css/fixedHeader.dataTables.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
    <title>Data Siswa</title>
  </head>
  <body>
    <div class="container-fluid">
    	<br>
    	<div class="row">
    		<div class="col-md-3">
		    	<div class="card">
				  <div class="card-header">
				    Data Siswa
				  </div>
				  <div class="card-body">
				    <form action="<?php echo base_url('welcome/simpan') ?>" method="POST">
				    	<div class="form-group">
				    		<label for="nis">NIS</label>
				    		<input type="text" id="nis" name="nis" class="form-control">
				    	</div>
				    	<div class="form-group">
				    		<label for="nama">NAMA</label>
				    		<input type="text" id="nama" name="nama" class="form-control">
				    	</div>
				    	<div class="form-group">
				    		<label for="tanggal_masuk">Tanggal Masuk</label>
				    		<input type="date" id="tanggal_masuk" name="tanggal_masuk" class="form-control">
				    	</div>
				    	<div class="form-group">
				    		<label for="jenis_kelamin">Jenis Kelamin</label>
				    		<select name="jenis_kelamin" id="jenis_kelamin" name="jenis_kelamin" class="form-control">
				    			<option value="L">Laki-Laki</option>
				    			<option value="P">Perempuan</option>
				    		</select>
				    	</div>
				    	<div class="form-group">
				    		<label for="tempat_lahir">Tempat Lahir</label>
				    		<input type="text" id="tempat_lahir" name="tempat_lahir" class="form-control">
				    	</div>
				    	<div class="form-group">
				    		<label for="tanggal_lahir">Tanggal Lahir</label>
				    		<input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control">
				    	</div>
				    	<div class="form-group">
				    		<label for="alamat">Alamat</label>
				    		<input type="text" id="alamat" name="alamat" class="form-control">
				    	</div>
				    	<div class="form-group">
				    		<label for="nik_ayah">NIK Ayah</label>
				    		<input type="text" id="nik_ayah" name="nik_ayah" class="form-control">
				    	</div>
				    	<div class="form-group">
				    		<label for="nama_ayah">Nama Ayah</label>
				    		<input type="text" id="nama_ayah" name="nama_ayah" class="form-control">
				    	</div>
				    	<div class="form-group">
				    		<label for="tempat_lahir_ayah">Tempat Lahir</label>
				    		<input type="text" id="tempat_lahir_ayah" name="tempat_lahir_ayah" class="form-control">
				    	</div>
				    	<div class="form-group">
				    		<label for="tanggal_lahir_ayah">Tanggal Lahir</label>
				    		<input type="date" id="tanggal_lahir_ayah" name="tanggal_lahir_ayah" class="form-control">
				    	</div>
				    	<div class="form-group">
				    		<label for="pekerjaan_ayah">Pekerjaan</label>
				    		<input type="text" id="pekerjaan_ayah" name="pekerjaan_ayah" class="form-control">
				    	</div>
				    	<div class="form-group">
				    		<label for="nik_ibu">NIK ibu</label>
				    		<input type="text" id="nik_ibu" name="nik_ibu" class="form-control">
				    	</div>
				    	<div class="form-group">
				    		<label for="nama_ibu">Nama Ibu</label>
				    		<input type="text" id="nama_ibu" name="nama_ibu" class="form-control">
				    	</div>
				    	<div class="form-group">
				    		<label for="tempat_lahir_ibu">Tempat Lahir</label>
				    		<input type="text" id="tempat_lahir_ibu" name="tempat_lahir_ibu" class="form-control">
				    	</div>
				    	<div class="form-group">
				    		<label for="tanggal_lahir_ibu">Tanggal Lahir</label>
				    		<input type="date" id="tanggal_lahir_ibu" name="tanggal_lahir_ibu" class="form-control">
				    	</div>
				    	<div class="form-group">
				    		<label for="pekerjaan_ibu">Pekerjaan</label>
				    		<input type="text" id="pekerjaan_ibu" name="pekerjaan_ibu" class="form-control">
				    	</div>
				    	<div class="form-group">
				    		<label for="status">Status</label>
				    		<select name="status" id="status" name="status" class="form-control">
				    			<option value="1">Aktif</option>
				    			<option value="0">Tidak Aktif</option>
				    		</select>
				    	</div>

				    	<button type="submit" id="btnSimpan" class="btn btn-primary">Simpan</button>
				    </form>
				  </div>
				</div>
			</div>

			<div class="col-md-9">
				<table id="example" class="display responsive nowrap" style="width:100%">
			        <thead>
			            <tr>
			                <th>NIS</th>
			                <th>NAMA</th>
			                <th>Tanggal Masuk</th>
			                <th>Jenis Kelamin</th>
			                <th>Tempat Lahir</th>
			                <th>Tanggal Lahir</th>
			                <th>Alamat</th>
			            </tr>
			        </thead>
			        <tbody>
						<?php foreach ($siswa as $key => $value): ?>
			            <tr>
			                <td><?php echo $value->nis; ?></td>
			                <td><?php echo $value->nama; ?></td>
			                <td><?php echo $value->tgl_masuk; ?></td>
			                <td><?php echo $value->jenis_kelamin; ?></td>
			                <td><?php echo $value->tempat_lahir; ?></td>
			                <td><?php echo $value->tgl_lahir; ?></td>
			                <td><?php echo $value->alamat; ?></td>
			            </tr>
			        	<?php endforeach; ?>
			        </tbody>
			    </table>
			</div>
		</div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.1.6/js/dataTables.fixedHeader.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script>
    	$(document).ready(function() {
		    $('#example').DataTable( {
			    fixedHeader: true,
			    responsive: true
			});
		});
    </script>
  </body>
</html>