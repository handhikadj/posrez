<style>
.header {border-bottom:solid 1px #666; height:85px; width:100%; margin:auto; margin-bottom:20px;}
.header img { overflow:hidden;width:50px!important;height:30px!important; float:left; margin-left:20px;margin-right:-30px; margin-top:10px;}
img.img2 {margin-left:650px; margin-top:-75px}
.header h3{font-family:Times, serif;font-size:30px; line-height:30px; text-align:center; margin-left:20px; margin-top:20px;  text-transform:uppercase}
.header p {text-align:center;  margin-left:-60px;padding:1px!important; }
.header span {padding-top:10px;}
.ttd2{
    float:left;
    margin-left:550px;
    margin-top:-90px;
}
h4{
    text-align:center;
}
#table-a

{ 
    font-size: 12px;
    width: 10%;
    text-align: center;
    border-collapse: collapse;
    margin: 10px auto;
    border:1px;

}
#table-a th
{ font-size: 12px;
    font-weight: normal;
    padding: 5px;
    border:1px;

    color: #000;
}
#table-a td,#table-a td 
{ padding: 8px;
    border:1px;
    font-size: 10px;
    color: #000;
    text-align:left;
}
#bod{
    width:750px;

}
</style>

<h4>DATA KEMATIAN<br> POSYANDU BUNGUR 1 DESA MANGUNJAYA</h4><br>

<table id="table-a">
    <thead>
        <tr><th width="80">No.Kematian</th>
            <th width="250" >Nama</th>
            <th width="100">Tanggal Kematian</th>
            <th width="200">Keterangan</th>
        </tr>
    </thead>
    <tbody>
     <?php

     $sql = mysqli_query($db, "SELECT kematian.id_kematian,
       anak.nama_anak, 
       DATE_FORMAT(kematian.tanggal_kematian, '%d-%m-%Y') as tanggal,
       kematian.keterangan FROM kematian JOIN anak ON kematian.id_anak=anak.id_anak ") or die (mysqli_error());
     
     while ($datapost=mysqli_fetch_array($sql)) {
        $idkematian = strip_tags($datapost['id_kematian']);
        $namaanak = strip_tags($datapost['nama_anak']);
        $tanggal = strip_tags($datapost['tanggal']);
        $keterangan = strip_tags($datapost['keterangan']);
        ?>
        <tr>
            <td><?php echo $idkematian;?></td>
            <td><?php echo $namaanak;?></td>
            <td><?php echo $tanggal;?></td>
            <td><?php echo $keterangan;?></td>            
        </tr>
        <?php }?>
    </tbody>
</table>
<br>		



