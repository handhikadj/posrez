<?php 
if (empty($_GET['act'])) : ?>

	<div class="col-md-12">

		<h4 style="text-align: center;">KEMATIAN</h4><hr> 
		<?php if (!empty($_SESSION['nama_admin'])): ?>
			<a href="?module=datakematian&act=tambah" class="btn btn-success ">Tambah</a><br><br>
		<?php endif ?>
		<div class="table-responsive">
			<table class="table table-bordered" id="table_kematian">
				<thead>
					<tr>

						<th>No.Kematian</th>
						<th>Nama</th>
						<th>Tanggal Kematian</th>
						<th>Keterangan</th>
						<?php if (!empty($_SESSION['nama_admin'])): ?>
							<th width="140">Aksi</th>
						<?php endif ?>
					</tr>
				</thead>
				<tbody>
					<?php 
					$tampil=mysqli_query($db, "SELECT id_kematian, 
						nama_anak, 
						DATE_FORMAT(tanggal_kematian, '%d-%m-%Y') as tanggal, 
						keterangan  FROM kematian JOIN anak ON kematian.id_anak=anak.id_anak");
					while($row=mysqli_fetch_array($tampil)){
						?>
						<tr>
							<td><?php echo $row['id_kematian'];?></td>
							<td><?php echo $row['nama_anak'];?></td>
							<td><?php echo $row['tanggal'];?></td>
							<td><?php echo $row['keterangan'];?></td>
							<?php if (!empty($_SESSION['nama_admin'])): ?>
							<td>
								<a href="content/aksi_kematian.php?module=anak&act=hapus&id=<?php echo $row['id_kematian'];?>" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')"  class="btn btn-danger">Hapus</a>
							</td>
							<?php endif ?>
						</tr>
					<?php } ?>

				</tbody>
			</table>
			</div>
		<br>
	</div>

	<?php elseif ($_GET['act']=='tambah') : 
	$query = "SELECT 
	max(id_kematian) as maxID 
	FROM kematian";
	$hasil = mysqli_query($db, $query);
	$data = @mysqli_fetch_array($hasil);
	$idMax = $data['maxID'];

	$noUrut = (int) substr($idMax, 1, 9);
	$noUrut++;
	$char = "K";
	$newID = $char.sprintf("%04s", $noUrut); 
	?>
		<h4 style="text-align: center;">INPUT DATA KEMATIAN</h4><hr><br>
		<div class="col-md-6 col-sm-offset-2 ">
			<form class="form-horizontal" method="post" action="content/aksi_kematian.php?module=anak&act=input">
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-4 control-label">No.Kematian</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="id_kematian" value="<?php echo "$newID";?>" disabled>
						<input type="hidden" class="form-control" name="id_kematian" value="<?php echo "$newID";?>">

					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-4 control-label">NIB</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="id_anak" id="id_anaktimbang2">

					</div>
				</div>
				<div class="form-group">
					<label for="inputPassword3" class="col-sm-4 control-label">Nama</label>
					<div class="col-sm-8">

						<input type="text" class="form-control" id="nama_anak" disabled >
					</div>
				</div>
				<div class="form-group">
					<label for="inputPassword3" class="col-sm-4 control-label">Tanggal Kematian</label>
					<div class="col-sm-8">
						<input type="date" class="form-control"   name='tanggal_kematian'>
					</div>
				</div>
				<div class="form-group">
					<label for="inputPassword3" class="col-sm-4 control-label">Keterangan</label>
					<div class="col-sm-8">
						<input type="text" class="form-control"  name='keterangan'>
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-offset-4 col-sm-10">
						<input type="submit" class="btn btn-success" value="Simpan" id="submit_penimbangan">
						<input type="reset" class="btn btn-danger" value="Reset">
					</div>

				</div>
			</form>
		</div>

	<?php elseif ($_GET['act']=='edit') :
		$syarat=$_GET['id'];
		$data = "SELECT * FROM kematian WHERE id_kematian='$syarat'";
		$hasil  = mysqli_query($db, $data);
		$row  = mysqli_fetch_array($hasil);
		?>

		<h4 style="text-align: center;">EDIT DATA</h4><hr><br>
		<div class="col-md-6 col-sm-offset-2 ">
			<form class="form-horizontal" method="post" action="content/aksi_kematian.php?module=anak&act=edit">
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-4 control-label">No.Kematian</label>
					<div class="col-sm-8">
						<input type="text" class="form-control"  name="id_kematian" value="<?php echo $row['id_kematian'];?>" disabled>

					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-4 control-label">NIB</label>
					<div class="col-sm-8">
						<input type="text" class="form-control"  name='id_anak' value="<?php echo $row['id_anak'];?>"disabled>

					</div>
				</div>
				<?php $tampil2=mysqli_query($db, "SELECT *  FROM anak WHERE id_anak='$row[id_anak]'");
				$row2=mysqli_fetch_array($tampil2);?>
				<div class="form-group">
					<label for="inputPassword3" class="col-sm-4 control-label">Nama</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" id="nama_anak" value="<?php echo $row2['nama_anak'];?>" disabled >
					</div>
				</div>
				<div class="form-group">
					<label for="inputPassword3" class="col-sm-4 control-label">Tanggal Lahir</label>
					<div class="col-sm-8">
						<input type="date" class="form-control"   name='tanggal_kematian' value="<?php echo $row['tanggal_kematian'];?>">
					</div>
				</div>
				<div class="form-group">
					<label for="inputPassword3" class="col-sm-4 control-label">Keterangan</label>
					<div class="col-sm-8">
						<input type="text" class="form-control"  name='keterangan' value="<?php echo $row['keterangan'];?>">
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
