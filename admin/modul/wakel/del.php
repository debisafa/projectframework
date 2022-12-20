<?php 
$del = mysqli_query($con,"DELETE FROM tb_walidosen WHERE id_walidosen=$_GET[id]");
if ($del) {
		echo " <script>
		alert('Data telah dihapus !');
		window.location='?page=master&act=wakel';
		</script>";	
}

 ?>