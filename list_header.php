<li >
	<a href="?module=home"><i class="glyphicon glyphicon-home"></i>  Home</a>
</li>
<li>
	<a href="?module=dataanak"><i class="glyphicon glyphicon-user"></i> Balita</a>
</li>
<li>
	<a href="?module=penimbangan"><i class="glyphicon glyphicon-tasks"></i> Penimbangan</a>
</li>
<li class="dropdown">
	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-pushpin"></i> Imunisasi<span class="caret" style="margin-left: 5px;"></span></a>

    <ul class="dropdown-menu">
        <li>
            <a href="?module=imunisasi"> Lihat Data Imunisasi</a>
        </li>
        <li>
            <a href="?module=cekimunisasi"> Cek Imunisasi</a>
        </li>
    </ul>
</li>
<li class="dropdown">
	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-tint"></i>  Vitamin<span class="caret" style="margin-left: 5px;"></span></a>

    <ul class="dropdown-menu">
        <li>
            <a href="?module=vitamin"> Lihat Data Vitamin</a>
        </li>
        <li>
            <a href="?module=cekvitamin"> Cek Vitamin</a>
        </li>
    </ul>
</li>
<li>
	<a href="?module=datakematian"><i class="glyphicon glyphicon-file"></i> Kematian</a>
</li>
<li class="dropdown">
	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-print"></i> Laporan <span class="caret"></span></a>

	<ul class="dropdown-menu">
        <li>
        	<a href="laporan/databalita.php"  target="_blank">Laporan Data Balita </a>
        </li>
        <li class="dropdown-submenu">
        	<a href="#" class="test" tabindex="-1"></i> Laporan Data Penimbangan<span class="caret" id="caret"></span></a>
            <ul class="dropdown-menu">
                <li>
                    <form action="laporan/datapenimbangan.php" method="POST" target="_blank">
                            <div class="col-sm-12 marbotinput">
                                <input type="date" name="bulan" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-success tengahinsubmit">SUBMIT</button>
                    </form>
                </li>
            </ul>
        </li>
        <li>
        	<a href="?module=lapperbalita">Laporan Data Per Balita</a>
        </li>
        <li>
        	<a href="laporan/datakematian.php" target="_blank">Laporan Data Kematian</a>
        </li>
  	</ul>
</li>
<li>
    <a href="logout.php"><i class="glyphicon glyphicon-log-out"></i> Keluar</a>
</li>

