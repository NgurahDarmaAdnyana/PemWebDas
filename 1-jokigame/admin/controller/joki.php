<?php
$con->auth();
$conn=$con-> koneksi();
switch(@$_GET['page']){
	case'add':
		$sql="select*from tb_daftar_pegawai";
		$jasa=$conn->query($sql);
		$content="views/joki/tambah.php";
		include_once 'views/template.php';
	break;
	
	case'save':
		if($_SERVER['REQUEST_METHOD']=="POST"){
			if(empty($_POST['id'])){
                $err['id']="Id wajib diisi";
            }
			if(empty($_POST['nama'])){
                $err['nama']="Nama wajib diisi";
            }
			if(empty($_POST['jasa'])){
                $err['jasa']="Jasa wajib diisi";
            }
				//validasi photo
			if(!empty($_FILES['fileToUpload']['name'])){
				$target_dir = "../media/";
				$photo=$_FILES["fileToUpload"]["name"];
				$target_file = $target_dir . $photo;
				$uploadOk = 1;
				$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

				// Check if image file is a actual image or fake image


				// Check if file already exists
				if (file_exists($target_file)) {
					$err['fileToUpload']= "Sorry, file already exists.";
				  $uploadOk = 0;
				}

				// Check file size
				if ($_FILES["fileToUpload"]["size"] > 1048576) {
					$err['fileToUpload']= "Sorry, your file is too large.";
				  $uploadOk = 0;
				}

				// Allow certain file formats
				if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
				&& $imageFileType != "gif" ) {
					$err['fileToUpload']= "Sorry, only JPG, JPEG, PNG & GIF are allowed.";
				  $uploadOk = 0;
				}

				// Check if $uploadOk is set to 0 by an error
				if ($uploadOk == 1) {
				  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
					$_POST['img']=$photo;
					if(isset($_POST['photo_old']) && $_POST['photo_old']!=''){
						unlink($target_dir.$_POST['photo_old']);
					}
				  }
					else{
						$err['fileToUpload']= "Sorry, There was an error uploading file.";
					}
				}
				}
		if(!isset($err)){
				$id=$_SESSION['login']['id'];
					
					if(isset($_POST["edit"])){

					// update user data
					if(isset($_POST['img'])){
						$sql = "UPDATE tb_daftar_pegawai SET nama='$_POST[nama]', jasa='$_POST[jasa]', photo='$_POST[img]' WHERE md5(id)='$_POST[id]'";
					}else{
						$sql = "UPDATE tb_daftar_pegawai SET nama='$_POST[nama]', jasa='$_POST[jasa]' WHERE md5(id)='$_POST[id]'";
					}
					
					}else{
						//save 
						$sql ="INSERT INTO tb_daftar_pegawai (id,nama,jasa,photo) VALUES('$_POST[id]','$_POST[nama]','$_POST[jasa]', '$_POST[img]')";
					}
					if($conn->query($sql)==TRUE){
						header('Location:'.$con->site_url().'/admin/index.php?mod=joki');
					}else{
					$err['msg']="Error: " . $sql . "<br>" . $conn->error;
					}
		}
		}else{
			$err['msg']="tidak diijinkan";
		}
		if(isset($err)){
			$sql="select*from tb_daftar_pegawai";
			$jasa=$conn->query($sql);
			$content="views/joki/tambah.php";
			include_once 'views/template.php';
		}
		break;
		
		case'edit':
			$sql="select*from tb_daftar_pegawai where md5(id)='$_GET[id]'";
			$jasa=$conn->query($sql);
			$_POST=$jasa->fetch_assoc();
			
			$content="views/joki/tambah.php";
			include_once 'views/template.php';
		break;
			
		case'delete':
			$sql="delete from tb_daftar_pegawai where md5(id)='$_GET[id]'";
			$jasa=$conn->query($sql);
			header('Location:'.$con->site_url().'/admin/index.php?mod=joki');
		break;
	default:
		$daftar_pegawai="select * from tb_daftar_pegawai";
		$daftar_pegawai=$conn->query($daftar_pegawai);
		$conn->close();
		$content="views/joki/tampil.php";
		include_once 'views/template.php';

}
?>	