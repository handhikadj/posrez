<?php 
$syarat=$_GET['id'] ?? '' ;
$tampil2=mysqli_query($db, "SELECT *  FROM anak WHERE id_anak='$syarat'");
$row2=mysqli_fetch_array($tampil2);
?>
<h4 style="text-align: center;">CEK VITAMIN</h4><hr><br>
<div class="col-md-6 col-sm-offset-0 ">
	<form class="form-horizontal" method="post" action="content/aksi_penimbangan.php?module=cekvitamin&act=input">

		<div class="form-group">
			<label for="inputPassword3" class="col-sm-4 control-label">NIB</label>
			<div class="col-sm-8">
				<input type="text" class="form-control"   name='id_anak' id="id_anaktimbang" value="<?php echo $syarat;?>" >
			</div>
		</div>
		<div class="form-group">
			<label for="inputPassword3" class="col-sm-4 control-label">Nama</label>
			<div class="col-sm-8">

				<input type="text" disabled class="form-control"  name='nama_anak' id="nama_anak" value="<?php echo $row2['nama_anak'];?>">
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-9 col-sm-10">
				<input type="submit" class="btn btn-success" value="Cek Anak">
			</div>

		</div>
	</form>
</div>

<div class="col-md-12">
	<h1><?php echo $row2['id_anak'] ." - " .$row2['nama_anak']; ?></h1>
	<div class="table-responsive">
		<table class="table table-bordered" id="table_vitamin">
			<thead>
				<tr>
					<th>Kode Timbang</th>
					<th>Tanggal Timbang</th>
					<th>Usia Anak</th>
					<th>Jenis Vitamin</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$tampil=mysqli_query($db, "SELECT id_penimbangan, 
					DATE_FORMAT(tanggal_timbang, '%d-%m-%Y') as tanggal, 
					usia, 
					jenis_vitamin,
					usia_wajib FROM penimbangan JOIN vitamin ON penimbangan.id_imunisasi=vitamin.id_vitamin WHERE id_anak='$syarat'");
				while($row=mysqli_fetch_array($tampil)){
					?>
					<tr>
						<td><?php echo $row['id_penimbangan'];?></td>
						<td><?php echo $row['tanggal'];?></td>
						<td><?php echo $row['usia'];?></td>
						<td><?php echo $row['jenis_vitamin'];?></td>
					</tr>
				<?php } ?>

			</tbody>
		</table>
	</div>
	<br>
</div>