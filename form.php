<?php include_once 'include/header.php'; ?>

<?php

	$judul='';
	$tgl='';
	$blog='';

	if(isset($_GET['aksi'])){

		if (isset($_GET['id'])){
			$id = $_GET['id'];
		}

		$aksi = $_GET['aksi'];

		if ($aksi == 'delete') {
			$sql = "DELETE FROM post WHERE id = $id";
			$query = mysqli_query($koneksi,$sql);
			header('location: blog.php');
		} elseif ($aksi == 'edit'){
			$sql = "SELECT * FROM post WHERE id *$id";
			$query = mysqli_query($koneksi,$sql);
			while ($result = mysqli_fetch_assoc($query)){
				$judul = $result['judul'];
				$tgl = $result['tgl'];
				$blog = $result['post'];
			}
	}

if(isset($_POST['submit'])){
		$judul = $_POST['judul'];
		$tgl = $_POST['tgl'];
		$blog = $_POST['blog'];
		$author =$_SESSION['username'];

		if($aksi == 'tambah'){
			$tgl = date('d-m-y');
			$sql = "INSERT INTO post(judul,tgl,post,author)
					VALUES('$judul','$tgl','$blog','$author')";
		}elseif($aksi == 'edit'){
			$sql = "UPDATE post SET judul='$judul', tgl='$tgl', post='$blog'
					WHERE id = $id";	
		}

		mysqli_query($koneksi,$sql);
		header('location:blog.php');
		}

}



?>

<div class="blog">
	<form method="post" class="form">
		<label>judul</label>
		<input type="text" name="judul" value="<?= $judul ?>">
		<label> Tanggal</label>
		<input type="text" name="tgl" value="<?= $tgl ?>">
		<label>Blog</label>
		<textarea name="blog"><?= $blog ?></textarea>
		<input type="submit" name="submit" value="submit">
	</form>
</div>

<?php include_once 'include/futer.php'; ?>