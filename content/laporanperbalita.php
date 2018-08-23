<?php 

$syarat= isset($_GET['id']) ? $_GET['id'] : '' ;
  $tampil2=mysqli_query($db, "SELECT *  FROM anak WHERE id_anak='$syarat'");
        $row2=mysqli_fetch_array($tampil2);
        
?>
<h4 style="text-align: center;">LAPORAN PENIMBANGAN PER BALITA</h4><hr><br>
<div class="col-md-6 col-sm-offset-0 ">
<form class="form-horizontal" method="post" action="laporan/dataperbalita.php" target="_blank">
  
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-4 control-label">NIB</label>
    <div class="col-sm-8">
      <input type="text" class="form-control"   name='id' id="id_anaktimbang" >
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
    <div class="col-sm-offset-4 col-sm-10">
      <input type="submit" class="btn btn-warning" value="Cetak">
    </div>
 
  </div>
</form>
</div>
