<?php 
$syarat=$_GET['id'] ?? '' ;
$tampil2=mysqli_query($db, "SELECT *  FROM anak WHERE id_anak='$syarat'");
$row2=mysqli_fetch_array($tampil2);
?>
<h4 style="text-align: center;">DATA PENIMBANGAN PER BALITA</h4><hr><br>
<div class="col-md-6 col-sm-offset-0 ">
    <form class="form-horizontal" method="post" action="content/aksi_penimbangan.php?module=lihatnilai&act=input">

        <div class="form-group">
            <label for="inputPassword3" class="col-sm-4 control-label">NIB</label>
            <div class="col-sm-8">
                <input type="text" class="form-control"  name='id_anak' id="id_anaktimbang" value="<?php echo $syarat;?>" >
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-4 control-label">Nama</label>
            <div class="col-sm-8">

                <input type="text" disabled class="form-control"  name='nama_anak' id="nama_anak" value="<?php echo $row2['nama_anak'];?>">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-4 control-label">Tanggal Lahir</label>
            <div class="col-sm-8">
                <input type="date" disabled class="form-control"  name='tanggal_lahir'id="tanggal_lahir" value="<?php echo $row2['tanggal_lahir'];?>">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-4 control-label">Jenis Kelamin</label>
            <div class="col-sm-8">
                <input type="text" disabled="" class="form-control"  name='tanggal_timbang' id="jenis_kelamin" value="<?php echo $row2['jenis_kelamin'];?>">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-9 col-sm-10">
                <input type="submit" class="btn btn-success" value="Lihat Data">
            </div>

        </div>
    </form>
</div>

<div class="col-md-12">
    <div class="table-responsive">
        <table class="table table-bordered" id="table_perbalita">
            <thead>
                <tr>
                    <th>Kode Timbang</th>
                    <th>Tanggal Timbang</th>
                    <th>Usia Anak</th>
                    <th>Berat Badan</th>
                    <th>Lingkar Perut</th>
                    <th>Jenis Imunisasi</th>
                    <th>Jenis Vitamin</th>
                    <th>Saran</th>
                    <?php if (!empty($_SESSION['nama_admin'])): ?>
                    <th width="170">Aksi</th>
                    <?php endif ?>
                </tr>
            </thead>
            <tbody>
                <?php 
                $tampil=mysqli_query($db, "SELECT id_penimbangan, 
                    DATE_FORMAT(tanggal_timbang, '%d-%m-%Y') as tanggal, 
                    usia, 
                    berat_badan,
                    lingkar_perut,
                    id_imunisasi,
                    id_vitamin,
                    saran FROM penimbangan WHERE id_anak='$syarat'");
                while($row=mysqli_fetch_array($tampil)){
                    ?>
                    <tr>
                        <td><?php echo $row['id_penimbangan'];?></td>
                        <td><?php echo $row['tanggal'];?></td>
                        <td><?php echo $row['usia'];?></td>
                        <td><?php echo $row['berat_badan'];?></td>
                        <td><?php echo $row['lingkar_perut'];?></td>
                        <td><?php echo $row['id_imunisasi'];?></td>
                        <td><?php echo $row['id_vitamin'];?></td>
                        <td><?php echo $row['saran'];?></td>
                        <?php if (!empty($_SESSION['nama_admin'])): ?>
                        <td>
                            <a href="?module=penimbangan&act=edit&id=<?php echo $row['id_penimbangan'];?>" class="btn btn-default">Perbarui</a> 
                            <a href="content/aksi_penimbangan.php?module=timbang&act=hapus&id=<?php echo $row['id_penimbangan'];?>" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')"  class="btn btn-danger">Hapus</a>
                        </td>
                        <?php endif ?>
                    </tr>
                <?php } ?>

            </tbody>
        </table>
    </div>
    <br>
</div>