<?php 
if (empty($_GET['act'])) : ?>

	<div class="col-md-12">

		<h4 style="text-align: center;">BALITA</h4><hr> 

		<?php if (!empty($_SESSION["nama_admin"])) : ?>
			<a href="?module=dataanak&act=tambah" class="btn btn-success ">Tambah</a>
			<br><br>
		<?php endif ?>

		<div class="table-responsive">
			<table class="table table-bordered" id="table_anak">
				<thead>
					<tr>
						<th>NIB</th>
						<th>Nama</th>
						<th>Tanggal Lahir</th>
						<th>JK</th>
						<th>Nama Ayah</th>
						<th>Nama Ibu</th>
						<th>Alamat</th>
						<th>Panjang Badan</th>
						<th>Berat Lahir</th>
						<th>Lingkar Kepala</th>
						<?php if (!empty($_SESSION["nama_admin"])): ?>
							<th width="140">Aksi</th>
						<?php endif ?>
					</tr>
				</thead>
				<tbody>
					<?php 
					$tampil=mysqli_query($db, "SELECT a.id_anak, 
						a.nama_anak, 
						DATE_FORMAT(a.tanggal_lahir, '%d-%m-%Y') as tanggal, a.jenis_kelamin, a.nama_ibu, a.nama_ayah,
						a.alamat,
						a.panjang_badan,
						a.berat_lahir,
						a.lingkar_kepala,
						b.stat
						FROM anak a
						LEFT JOIN kematian b ON a.id_anak=b.id_anak");
					while($row=mysqli_fetch_array($tampil)) {
						?>
						<?php if ($row['stat'] == 1): ?>
						<tr 
						data-toggle="tooltip"
						data-placement="top"
						title="Anak ini sudah meninggal"
						style="background: rgba(0,0,0,0.3);">
							<td><?php echo $row['id_anak'];?></td>
							<td><?php echo $row['nama_anak'];?></td>
							<td><?php echo $row['tanggal'];?></td>
							<td><?php echo $row['jenis_kelamin'];?></td>
							<td><?php echo $row['nama_ayah'];?></td>
							<td><?php echo $row['nama_ibu'];?></td>
							<td><?php echo $row['alamat'];?></td>
							<td><?php echo $row['panjang_badan'];?></td>
							<td><?php echo $row['berat_lahir'];?></td>
							<td><?php echo $row['lingkar_kepala'];?></td>
							<?php if (!empty($_SESSION["nama_admin"])): ?>
								<td>
									<a href="?module=dataanak&act=edit&id=<?php echo $row['id_anak'];?>" class="btn btn-default">Edit</a> 
									<a href="content/aksi_anak.php?module=anak&act=hapus&id=<?php echo $row['id_anak'];?>" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')"  class="btn btn-danger">Hapus</a>
								</td>
							<?php endif ?>
						</tr>
						<?php else: ?>
							<tr>
							<td><?php echo $row['id_anak'];?></td>
							<td><?php echo $row['nama_anak'];?></td>
							<td><?php echo $row['tanggal'];?></td>
							<td><?php echo $row['jenis_kelamin'];?></td>
							<td><?php echo $row['nama_ayah'];?></td>
							<td><?php echo $row['nama_ibu'];?></td>
							<td><?php echo $row['alamat'];?></td>
							<td><?php echo $row['panjang_badan'];?></td>
							<td><?php echo $row['berat_lahir'];?></td>
							<td><?php echo $row['lingkar_kepala'];?></td>
							<?php if (!empty($_SESSION["nama_admin"])): ?>
								<td><a href="?module=dataanak&act=edit&id=<?php echo $row['id_anak'];?>" class="btn btn-default">Edit</a> <a href="content/aksi_anak.php?module=anak&act=hapus&id=<?php echo $row['id_anak'];?>" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')"  class="btn btn-danger">Hapus</a></td>
							<?php endif ?>
						</tr>
						<?php endif ?>
					<?php } ?>

				</tbody>
			</table>
		</div>
		<br>
	</div>

<?php elseif ($_GET['act']=='tambah') : 

	$query = "SELECT 
	max(id_anak) as maxID 
	FROM anak";
	$hasil = mysqli_query($db, $query);
	$data = @mysqli_fetch_array($hasil);
	$idMax = $data['maxID'];

	$noUrut = (int) substr($idMax, 1, 9);
	$noUrut++;
	$char = "B";
	$newID = $char.sprintf("%04s", $noUrut); 

	?>

	<h4 style="text-align: center;">INPUT DATA BALITA</h4><hr><br>
	<div class="col-md-6 col-sm-offset-2 ">
		<form class="form-horizontal" method="post" action="content/aksi_anak.php?module=anak&act=input">
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-4 control-label">NIB</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" name="id_anak" value="<?php echo "$newID";?>" disabled>
					<input type="hidden" class="form-control" name="id_anak" value="<?php echo "$newID";?>">
				</div>
			</div>
			<div class="form-group">
				<label for="inputPassword3" class="col-sm-4 control-label">Nama</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" name='nama_anak'>
				</div>
			</div>
			<div class="form-group">
				<label for="inputPassword3" class="col-sm-4 control-label">Tanggal Lahir</label>
				<div class="col-sm-8">
					<input type="date" class="form-control" name='tanggal_lahir'>
				</div>
			</div>
			<div class="form-group">
				<label for="inputPassword3" class="col-sm-4 control-label">Jenis Kelamin</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" name='jenis_kelamin'>
				</div>
			</div>
			<div class="form-group">
				<label for="inputPassword3" class="col-sm-4 control-label">Nama Ibu</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" name='nama_ibu'>
				</div>
			</div>
			<div class="form-group">
				<label for="inputPassword3" class="col-sm-4 control-label">Nama Ayah</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" name='nama_ayah'>
				</div>
			</div>
			<div class="form-group">
				<label for="inputPassword3" class="col-sm-4 control-label">Alamat</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" name='alamat'>
				</div>
			</div>
			<div class="form-group">
				<label for="inputPassword3" class="col-sm-4 control-label">Panjang Badan</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" name='panjang_badan'>
				</div>
			</div>
			<div class="form-group">
				<label for="inputPassword3" class="col-sm-4 control-label">Berat Lahir</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" name='berat_lahir'>
				</div>
			</div>
			<div class="form-group">
				<label for="inputPassword3" class="col-sm-4 control-label">Lingkar Kepala</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" name='lingkar_kepala'>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-4 col-sm-10">
					<input type="submit" class="btn btn-success" value="Simpan"> <input type="reset" class="btn btn-danger" value="Reset">
				</div>

			</div>
		</form>
	</div>

<?php elseif ($_GET['act']=='edit') :
	$syarat= $_GET['id'] ?? '' ;
	$data = "SELECT * FROM anak WHERE id_anak='$syarat'";
	$hasil  = mysqli_query($db, $data);
	$row  = mysqli_fetch_array($hasil);
	?>

	<h4 style="text-align: center;">EDIT DATA</h4><hr><br>
	<div class="col-md-6 col-sm-offset-2 ">
		<form class="form-horizontal" method="post" action="content/aksi_anak.php?module=anak&act=edit">
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-4 control-label">NIB</label>
				<div class="col-sm-8">
					<input type="text" class="form-control"  value="<?php echo $row['id_anak'];?>" name='id_anak' disabled>
					<input type="hidden" class="form-control"  value="<?php echo $row['id_anak'];?>" name="id_anak" >

				</div>
			</div>
			<div class="form-group">
				<label for="inputPassword3" class="col-sm-4 control-label">Nama</label>
				<div class="col-sm-8">
					<input type="text" class="form-control"  value="<?php echo $row['nama_anak'];?>" name='nama_anak'>
				</div>
			</div>
			<div class="form-group">
				<label for="inputPassword3" class="col-sm-4 control-label">Tanggal Lahir</label>
				<div class="col-sm-8">
					<input type="date" class="form-control"  value="<?php echo $row['tanggal_lahir'];?>" name='tanggal_lahir'>
				</div>
			</div>
			<div class="form-group">
				<label for="inputPassword3" class="col-sm-4 control-label">Jenis Kelamin</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" value="<?php echo $row['jenis_kelamin'];?>" name='jenis_kelamin'>
				</div>
			</div>
			<div class="form-group">
				<label for="inputPassword3" class="col-sm-4 control-label">Nama Ibu</label>
				<div class="col-sm-8">
					<input type="text" class="form-control"  value="<?php echo $row['nama_ibu'];?>" name='nama_ibu'>
				</div>
			</div>
			<div class="form-group">
				<label for="inputPassword3" class="col-sm-4 control-label">Nama Ayah</label>
				<div class="col-sm-8">
					<input type="text" class="form-control"  value="<?php echo $row['nama_ayah'];?>" name='nama_ayah'>
				</div>
			</div>
			<div class="form-group">
				<label for="inputPassword3" class="col-sm-4 control-label">Alamat</label>
				<div class="col-sm-8">
					<input type="text" class="form-control"   value="<?php echo $row['alamat'];?>" name='alamat'>
				</div>
			</div>
			<div class="form-group">
				<label for="inputPassword3" class="col-sm-4 control-label">Panjang Badan</label>
				<div class="col-sm-8">
					<input type="text" class="form-control"    value="<?php echo $row['panjang_badan'];?>" name='panjang_badan'>
				</div>
			</div>
			<div class="form-group">
				<label for="inputPassword3" class="col-sm-4 control-label">Berat Lahir</label>
				<div class="col-sm-8">
					<input type="text" class="form-control"   value="<?php echo $row['berat_lahir'];?>" name='berat_lahir'>
				</div>
			</div>
			<div class="form-group">
				<label for="inputPassword3" class="col-sm-4 control-label">Lingkar Kepala</label>
				<div class="col-sm-8">
					<input type="text" class="form-control"   value="<?php echo $row['lingkar_kepala'];?>" name='lingkar_kepala'>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-4 col-sm-10">
					<input type="submit" class="btn btn-success" value="Simpan"> <input type="reset" class="btn btn-danger" value="Reset">
				</div>

			</div>
		</form>
	</div>

<?php endif ?>
