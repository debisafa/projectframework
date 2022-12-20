<?php 
$del = mysqli_query($con,"DELETE FROM tb_ajar WHERE id_ajar='$_GET[id]' ");
if ($del) {
		echo " <script>
		window.location='?page=jadwal';
		</script>";	
}
?>