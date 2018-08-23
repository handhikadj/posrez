<?php 
	if (empty($_SESSION['nama_admin'])) "<script>window.location.href = 'index.php'</script>";
?>
<div class="row">
<div class="col-md-12">
			<article >
				<p >Selamat datang, 
					<strong>
						<?php echo !empty($_SESSION['nama_admin']) ? $_SESSION['nama_admin'] : 'Di Website Posyandu Bungur 1' ; ?>
					</strong>
				</p>
			</article>

			
		</div>
</div>