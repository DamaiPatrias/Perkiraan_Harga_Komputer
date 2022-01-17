<?php
include 'koneksi.php';
//Start Aksi Casing
$g=$_GET['sender'];

//CASING
if($g=='casing')
{
	$nama_casing = $_POST['nama_casing'];
	$harga_casing = $_POST['harga_casing'];
	$ukuran_casing = $_POST['ukuran_casing'];
	$gambar_casing = $_FILES['gambar_casing']['name'];
	if($gambar_casing != "") {
		$ekstensi_diperbolehkan = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
  $x = explode('.', $gambar_casing); //memisahkan nama file dengan ekstensi yang diupload
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['gambar_casing']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_gambar_baru = $angka_acak.'-'.$gambar_casing;
  $folder = "images/casing/";
  if(!is_dir($folder)){
       mkdir($folder, 0755, true);
     }
  //menggabungkan angka acak dengan nama file sebenarnya
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
                move_uploaded_file($file_tmp, $folder.$nama_gambar_baru); //memindah file gambar ke folder gambar
                  // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
                  $query = "INSERT INTO casing (nama_casing, harga_casing, ukuran_casing, gambar_casing) VALUES ('$nama_casing','$harga_casing','$ukuran_casing','$nama_gambar_baru')";
                  $result = mysqli_query($config, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($config).
                           " - ".mysqli_error($config));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');
					window.location.href='index.php?page=casing'</script>";
                  }

            } else {     
             //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');	window.location.href='index.php?page=casing'</script>";
            }
}
}

else 
    if($g=='edit_casing')
    {
	$id_casing = $_POST['id_casing'];
	$nama_casing = $_POST['nama_casing'];
	$harga_casing = $_POST['harga_casing'];
	$ukuran_casing = $_POST['ukuran_casing'];
	$gambar_casing = $_FILES['gambar_casing']['name'];
	if($gambar_casing != "") {
		$ekstensi_diperbolehkan = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
  $x = explode('.', $gambar_casing); //memisahkan nama file dengan ekstensi yang diupload
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['gambar_casing']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_gambar_baru = $angka_acak.'-'.$gambar_casing;
  $folder = "images/casing/";
  if(!is_dir($folder)){
       mkdir($folder, 0755, true);
     }
  //menggabungkan angka acak dengan nama file sebenarnya
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
                move_uploaded_file($file_tmp, $folder.$nama_gambar_baru); //memindah file gambar ke folder gambar
                  // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
                  $query = "UPDATE casing SET nama_casing='$nama_casing',
            harga_casing='$harga_casing',
            ukuran_casing='$ukuran_casing',
                gambar_casing='$nama_gambar_baru' WHERE id_casing='$id_casing'";
                  $result = mysqli_query($config, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($config).
                           " - ".mysqli_error($config));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil diedit.');
					window.location.href='index.php?page=casing'</script>";
                  }

            } else {     
             //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');	window.location.href='index.php?page=casing'</script>";
            }
} else {
	$query = "UPDATE casing SET nama_casing='$nama_casing',
            harga_casing='$harga_casing',
            ukuran_casing='$ukuran_casing' WHERE id_casing='$id_casing'";
                  $result = mysqli_query($config, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($config).
                           " - ".mysqli_error($config));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil diedit.');
					window.location.href='index.php?page=casing'</script>";
                  }
		}

    } 
else 
    if($g=='hapus_casing')
    {
		$id_casing = $_GET['id_casing'];
		$data=mysqli_fetch_array(mysqli_query($config,"SELECT gambar_casing FROM casing WHERE id_casing = '$id_casing'"));
        $hasil=mysqli_query($config,"DELETE FROM casing where id_casing='$id_casing'");
		if(!$hasil){
			die ("Gagal menghapus data: ".mysqli_errno($config).
       " - ".mysqli_error($config));
			}else{
			unlink("images/casing/".$data['gambar_casing']);
         echo '<script LANGUAGE="JavaScript">
            alert("Casing dengan Id :('.$_GET['id_casing'].') Berhasil Terhapus")
            window.location.href="index.php?page=casing";
            </script>';
			}
    }
	
//GPU
else
	if($g=='gpu')
{
	$nama_gpu = $_POST['nama_gpu'];
	$harga_gpu = $_POST['harga_gpu'];
	$brand_gpu = $_POST['brand_gpu'];
	$gambar_gpu = $_FILES['gambar_gpu']['name'];
	if($gambar_gpu != "") {
		$ekstensi_diperbolehkan = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
  $x = explode('.', $gambar_gpu); //memisahkan nama file dengan ekstensi yang diupload
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['gambar_gpu']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_gambar_baru = $angka_acak.'-'.$gambar_gpu;
  $folder = "images/gpu/";
  if(!is_dir($folder)){
       mkdir($folder, 0755, true);
     }
  //menggabungkan angka acak dengan nama file sebenarnya
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
                move_uploaded_file($file_tmp, $folder.$nama_gambar_baru); //memindah file gambar ke folder gambar
                  // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
                  $query = "INSERT INTO gpu (nama_gpu, harga_gpu, brand_gpu, gambar_gpu) VALUES ('$nama_gpu','$harga_gpu','$brand_gpu','$nama_gambar_baru')";
                  $result = mysqli_query($config, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($config).
                           " - ".mysqli_error($config));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');
					window.location.href='index.php?page=gpu'</script>";
                  }

            } else {     
             //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');	window.location.href='index.php?page=gpu'</script>";
            }
}
}

else 
    if($g=='edit_gpu')
    {
	$id_gpu = $_POST['id_gpu'];
	$nama_gpu = $_POST['nama_gpu'];
	$harga_gpu = $_POST['harga_gpu'];
	$brand_gpu = $_POST['brand_gpu'];
	$gambar_gpu = $_FILES['gambar_gpu']['name'];
	if($gambar_gpu != "") {
		$ekstensi_diperbolehkan = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
  $x = explode('.', $gambar_gpu); //memisahkan nama file dengan ekstensi yang diupload
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['gambar_gpu']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_gambar_baru = $angka_acak.'-'.$gambar_gpu;
  $folder = "images/gpu/";
  if(!is_dir($folder)){
       mkdir($folder, 0755, true);
     }
  //menggabungkan angka acak dengan nama file sebenarnya
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
                move_uploaded_file($file_tmp, $folder.$nama_gambar_baru); //memindah file gambar ke folder gambar
                  // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
                  $query = "UPDATE gpu SET nama_gpu='$nama_gpu',
            harga_gpu='$harga_gpu',
            brand_gpu='$brand_gpu',
                gambar_gpu='$nama_gambar_baru' WHERE id_gpu='$id_gpu'";
                  $result = mysqli_query($config, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($config).
                           " - ".mysqli_error($config));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil diedit.');
					window.location.href='index.php?page=gpu'</script>";
                  }

            } else {     
             //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');	window.location.href='index.php?page=gpu'</script>";
            }
} else {
	$query = "UPDATE gpu SET nama_gpu='$nama_gpu',
            harga_gpu='$harga_gpu',
            brand_gpu='$brand_gpu' WHERE id_gpu='$id_gpu'";
                  $result = mysqli_query($config, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($config).
                           " - ".mysqli_error($config));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil diedit.');
					window.location.href='index.php?page=gpu'</script>";
                  }
		}

    } 
else 
    if($g=='hapus_gpu')
    {
		$id_gpu = $_GET['id_gpu'];
		$data=mysqli_fetch_array(mysqli_query($config,"SELECT gambar_gpu FROM gpu WHERE id_gpu = '$id_gpu'"));
        $hasil=mysqli_query($config,"DELETE FROM gpu where id_gpu='$id_gpu'");
		if(!$hasil){
			die ("Gagal menghapus data: ".mysqli_errno($config).
       " - ".mysqli_error($config));
			}else{
			unlink("images/gpu/".$data['gambar_gpu']);
         echo '<script LANGUAGE="JavaScript">
            alert("GPU dengan Id :('.$_GET['id_gpu'].') Berhasil Terhapus")
            window.location.href="index.php?page=gpu";
            </script>';
			}
    }

//MOTHERBOARD
else
	if($g=='mobo')
{
	$nama_motherboard = $_POST['nama_motherboard'];
	$harga_motherboard = $_POST['harga_motherboard'];
	$brand_motherboard = $_POST['brand_motherboard'];
	$soket_motherboard = $_POST['soket_motherboard'];
	$ukuran_motherboard = $_POST['ukuran_motherboard'];
	$gambar_motherboard = $_FILES['gambar_motherboard']['name'];
	if($gambar_motherboard != "") {
		$ekstensi_diperbolehkan = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
  $x = explode('.', $gambar_motherboard); //memisahkan nama file dengan ekstensi yang diupload
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['gambar_motherboard']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_gambar_baru = $angka_acak.'-'.$gambar_motherboard;
  $folder = "images/mobo/";
  if(!is_dir($folder)){
       mkdir($folder, 0755, true);
     }
  //menggabungkan angka acak dengan nama file sebenarnya
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
                move_uploaded_file($file_tmp, $folder.$nama_gambar_baru); //memindah file gambar ke folder gambar
                  // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
                  $query = "INSERT INTO motherboard (nama_motherboard, harga_motherboard, brand_motherboard, soket_motherboard, ukuran_motherboard, gambar_motherboard) VALUES ('$nama_motherboard','$harga_motherboard','$brand_motherboard','$soket_motherboard','$ukuran_motherboard','$nama_gambar_baru')";
                  $result = mysqli_query($config, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($config).
                           " - ".mysqli_error($config));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');
					window.location.href='index.php?page=mobo'</script>";
                  }

            } else {     
             //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');	window.location.href='index.php?page=mobo'</script>";
            }
}
}

else 
    if($g=='edit_motherboard')
    {
	$id_motherboard = $_POST['id_motherboard'];
	$nama_motherboard = $_POST['nama_motherboard'];
	$harga_motherboard = $_POST['harga_motherboard'];
	$brand_motherboard = $_POST['brand_motherboard'];
	$soket_motherboard = $_POST['soket_motherboard'];
	$ukuran_motherboard = $_POST['ukuran_motherboard'];
	$gambar_motherboard = $_FILES['gambar_motherboard']['name'];
	if($gambar_motherboard != "") {
		$ekstensi_diperbolehkan = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
  $x = explode('.', $gambar_motherboard); //memisahkan nama file dengan ekstensi yang diupload
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['gambar_motherboard']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_gambar_baru = $angka_acak.'-'.$gambar_motherboard;
  $folder = "images/mobo/";
  if(!is_dir($folder)){
       mkdir($folder, 0755, true);
     }
  //menggabungkan angka acak dengan nama file sebenarnya
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
                move_uploaded_file($file_tmp, $folder.$nama_gambar_baru); //memindah file gambar ke folder gambar
                  // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
                  $query = "UPDATE motherboard SET nama_motherboard='$nama_motherboard',
            harga_motherboard='$harga_motherboard',
            brand_motherboard='$brand_motherboard', soket_motherboard='$soket_motherboard', ukuran_motherboard='$ukuran_motherboard',
                gambar_motherboard='$nama_gambar_baru' WHERE id_motherboard='$id_motherboard'";
                  $result = mysqli_query($config, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($config).
                           " - ".mysqli_error($config));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil diedit.');
					window.location.href='index.php?page=mobo'</script>";
                  }

            } else {     
             //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');	window.location.href='index.php?page=mobo'</script>";
            }
} else {
	$query = "UPDATE motherboard SET nama_motherboard='$nama_motherboard',
            harga_motherboard='$harga_motherboard',
            brand_motherboard='$brand_motherboard', soket_motherboard='$soket_motherboard', ukuran_motherboard='$ukuran_motherboard' WHERE id_motherboard='$id_motherboard'";
                  $result = mysqli_query($config, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($config).
                           " - ".mysqli_error($config));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil diedit.');
					window.location.href='index.php?page=mobo'</script>";
                  }
		}

    } 
else 
    if($g=='hapus_motherboard')
    {
		$id_motherboard = $_GET['id_motherboard'];
		$data=mysqli_fetch_array(mysqli_query($config,"SELECT gambar_motherboard FROM motherboard WHERE id_motherboard = '$id_motherboard'"));
        $hasil=mysqli_query($config,"DELETE FROM motherboard where id_motherboard='$id_motherboard'");
		if(!$hasil){
			die ("Gagal menghapus data: ".mysqli_errno($config).
       " - ".mysqli_error($config));
			}else{
			unlink("images/motherboard/".$data['gambar_motherboard']);
         echo '<script LANGUAGE="JavaScript">
            alert("Motherboard dengan Id :('.$_GET['id_motherboard'].') Berhasil Terhapus")
            window.location.href="index.php?page=mobo";
            </script>';
			}
    }

//PENYIMPANAN
else
	if($g=='penyimpanan')
{
	$nama_penyimpanan = $_POST['nama_penyimpanan'];
	$harga_penyimpanan = $_POST['harga_penyimpanan'];
	$brand_penyimpanan = $_POST['brand_penyimpanan'];
	$jenis_penyimpanan = $_POST['jenis_penyimpanan'];
	$kapasitas_penyimpanan = $_POST['kapasitas_penyimpanan'];
	$gambar_penyimpanan = $_FILES['gambar_penyimpanan']['name'];
	if($gambar_penyimpanan != "") {
		$ekstensi_diperbolehkan = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
  $x = explode('.', $gambar_penyimpanan); //memisahkan nama file dengan ekstensi yang diupload
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['gambar_penyimpanan']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_gambar_baru = $angka_acak.'-'.$gambar_penyimpanan;
  $folder = "images/penyimpanan/";
  if(!is_dir($folder)){
       mkdir($folder, 0755, true);
     }
  //menggabungkan angka acak dengan nama file sebenarnya
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
                move_uploaded_file($file_tmp, $folder.$nama_gambar_baru); //memindah file gambar ke folder gambar
                  // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
                  $query = "INSERT INTO penyimpanan (nama_penyimpanan, harga_penyimpanan, brand_penyimpanan, jenis_penyimpanan, kapasitas_penyimpanan, gambar_penyimpanan) VALUES ('$nama_penyimpanan','$harga_penyimpanan','$brand_penyimpanan','$jenis_penyimpanan','$kapasitas_penyimpanan','$nama_gambar_baru')";
                  $result = mysqli_query($config, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($config).
                           " - ".mysqli_error($config));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');
					window.location.href='index.php?page=penyimpanan'</script>";
                  }

            } else {     
             //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');	window.location.href='index.php?page=penyimpanan'</script>";
            }
}
}

else 
    if($g=='edit_penyimpanan')
    {
	$id_penyimpanan = $_POST['id_penyimpanan'];
	$nama_penyimpanan = $_POST['nama_penyimpanan'];
	$harga_penyimpanan = $_POST['harga_penyimpanan'];
	$brand_penyimpanan = $_POST['brand_penyimpanan'];
	$jenis_penyimpanan = $_POST['jenis_penyimpanan'];
	$kapasitas_penyimpanan = $_POST['kapasitas_penyimpanan'];
	$gambar_penyimpanan = $_FILES['gambar_penyimpanan']['name'];
	if($gambar_penyimpanan != "") {
		$ekstensi_diperbolehkan = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
  $x = explode('.', $gambar_penyimpanan); //memisahkan nama file dengan ekstensi yang diupload
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['gambar_penyimpanan']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_gambar_baru = $angka_acak.'-'.$gambar_penyimpanan;
  $folder = "images/penyimpanan/";
  if(!is_dir($folder)){
       mkdir($folder, 0755, true);
     }
  //menggabungkan angka acak dengan nama file sebenarnya
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
                move_uploaded_file($file_tmp, $folder.$nama_gambar_baru); //memindah file gambar ke folder gambar
                  // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
                  $query = "UPDATE penyimpanan SET nama_penyimpanan='$nama_penyimpanan',
            harga_penyimpanan='$harga_penyimpanan',
            brand_penyimpanan='$brand_penyimpanan', jenis_penyimpanan='$jenis_penyimpanan', kapasitas_penyimpanan='$kapasitas_penyimpanan',
                gambar_penyimpanan='$nama_gambar_baru' WHERE id_penyimpanan='$id_penyimpanan'";
                  $result = mysqli_query($config, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($config).
                           " - ".mysqli_error($config));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil diedit.');
					window.location.href='index.php?page=penyimpanan'</script>";
                  }

            } else {     
             //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');	window.location.href='index.php?page=penyimpanan'</script>";
            }
} else {
	$query = "UPDATE penyimpanan SET nama_penyimpanan='$nama_penyimpanan',
            harga_penyimpanan='$harga_penyimpanan',
            brand_penyimpanan='$brand_penyimpanan', jenis_penyimpanan='$jenis_penyimpanan', kapasitas_penyimpanan='$kapasitas_penyimpanan' WHERE id_penyimpanan='$id_penyimpanan'";
                  $result = mysqli_query($config, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($config).
                           " - ".mysqli_error($config));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil diedit.');
					window.location.href='index.php?page=penyimpanan'</script>";
                  }
		}

    } 
else 
    if($g=='hapus_penyimpanan')
    {
		$id_penyimpanan = $_GET['id_penyimpanan'];
		$data=mysqli_fetch_array(mysqli_query($config,"SELECT gambar_penyimpanan FROM penyimpanan WHERE id_penyimpanan = '$id_penyimpanan'"));
        $hasil=mysqli_query($config,"DELETE FROM penyimpanan where id_penyimpanan='$id_penyimpanan'");
		if(!$hasil){
			die ("Gagal menghapus data: ".mysqli_errno($config).
       " - ".mysqli_error($config));
			}else{
			unlink("images/penyimpanan/".$data['gambar_penyimpanan']);
         echo '<script LANGUAGE="JavaScript">
            alert("Penyimpanan dengan Id :('.$_GET['id_penyimpanan'].') Berhasil Terhapus")
            window.location.href="index.php?page=penyimpanan";
            </script>';
			}
    }

//PROSESOR
else
	if($g=='prosesor')
{
	$nama_prosesor = $_POST['nama_prosesor'];
	$harga_prosesor = $_POST['harga_prosesor'];
	$brand_prosesor = $_POST['brand_prosesor'];
	$soket_prosesor = $_POST['soket_prosesor'];
	$gambar_prosesor = $_FILES['gambar_prosesor']['name'];
	if($gambar_prosesor != "") {
		$ekstensi_diperbolehkan = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
  $x = explode('.', $gambar_prosesor); //memisahkan nama file dengan ekstensi yang diupload
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['gambar_prosesor']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_gambar_baru = $angka_acak.'-'.$gambar_prosesor;
  $folder = "images/prosesor/";
  if(!is_dir($folder)){
       mkdir($folder, 0755, true);
     }
  //menggabungkan angka acak dengan nama file sebenarnya
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
                move_uploaded_file($file_tmp, $folder.$nama_gambar_baru); //memindah file gambar ke folder gambar
                  // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
                  $query = "INSERT INTO prosesor (nama_prosesor, harga_prosesor, brand_prosesor, soket_prosesor, gambar_prosesor) VALUES ('$nama_prosesor','$harga_prosesor','$brand_prosesor','$soket_prosesor','$nama_gambar_baru')";
                  $result = mysqli_query($config, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($config).
                           " - ".mysqli_error($config));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');
					window.location.href='index.php?page=prosesor'</script>";
                  }

            } else {     
             //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');	window.location.href='index.php?page=prosesor'</script>";
            }
}
}

else 
    if($g=='edit_prosesor')
    {
	$id_prosesor = $_POST['id_prosesor'];
	$nama_prosesor = $_POST['nama_prosesor'];
	$harga_prosesor = $_POST['harga_prosesor'];
	$brand_prosesor = $_POST['brand_prosesor'];
	$soket_prosesor = $_POST['soket_prosesor'];
	$gambar_prosesor = $_FILES['gambar_prosesor']['name'];
	if($gambar_prosesor != "") {
		$ekstensi_diperbolehkan = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
  $x = explode('.', $gambar_prosesor); //memisahkan nama file dengan ekstensi yang diupload
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['gambar_prosesor']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_gambar_baru = $angka_acak.'-'.$gambar_prosesor;
  $folder = "images/prosesor/";
  if(!is_dir($folder)){
       mkdir($folder, 0755, true);
     }
  //menggabungkan angka acak dengan nama file sebenarnya
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
                move_uploaded_file($file_tmp, $folder.$nama_gambar_baru); //memindah file gambar ke folder gambar
                  // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
                  $query = "UPDATE prosesor SET nama_prosesor='$nama_prosesor',
            harga_prosesor='$harga_prosesor',
            brand_prosesor='$brand_prosesor', soket_prosesor='$soket_prosesor', 
                gambar_prosesor='$nama_gambar_baru' WHERE id_prosesor='$id_prosesor'";
                  $result = mysqli_query($config, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($config).
                           " - ".mysqli_error($config));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil diedit.');
					window.location.href='index.php?page=prosesor'</script>";
                  }

            } else {     
             //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');	window.location.href='index.php?page=prosesor'</script>";
            }
} else {
	$query = "UPDATE prosesor SET nama_prosesor='$nama_prosesor',
            harga_prosesor='$harga_prosesor',
            brand_prosesor='$brand_prosesor', soket_prosesor='$soket_prosesor' WHERE id_prosesor='$id_prosesor'";
                  $result = mysqli_query($config, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($config).
                           " - ".mysqli_error($config));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil diedit.');
					window.location.href='index.php?page=prosesor'</script>";
                  }
		}

    } 
else 
    if($g=='hapus_prosesor')
    {
		$id_prosesor = $_GET['id_prosesor'];
		$data=mysqli_fetch_array(mysqli_query($config,"SELECT gambar_prosesor FROM prosesor WHERE id_prosesor = '$id_prosesor'"));
        $hasil=mysqli_query($config,"DELETE FROM prosesor where id_prosesor='$id_prosesor'");
		if(!$hasil){
			die ("Gagal menghapus data: ".mysqli_errno($config).
       " - ".mysqli_error($config));
			}else{
			unlink("images/prosesor/".$data['gambar_prosesor']);
         echo '<script LANGUAGE="JavaScript">
            alert("prosesor dengan Id :('.$_GET['id_prosesor'].') Berhasil Terhapus")
            window.location.href="index.php?page=prosesor";
            </script>';
			}
    }

//PSU
if($g=='psu')
{
	$nama_psu = $_POST['nama_psu'];
	$harga_psu = $_POST['harga_psu'];
	$ukuran_psu = $_POST['ukuran_psu'];
	$gambar_psu = $_FILES['gambar_psu']['name'];
	if($gambar_psu != "") {
		$ekstensi_diperbolehkan = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
  $x = explode('.', $gambar_psu); //memisahkan nama file dengan ekstensi yang diupload
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['gambar_psu']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_gambar_baru = $angka_acak.'-'.$gambar_psu;
  $folder = "images/psu/";
  if(!is_dir($folder)){
       mkdir($folder, 0755, true);
     }
  //menggabungkan angka acak dengan nama file sebenarnya
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
                move_uploaded_file($file_tmp, $folder.$nama_gambar_baru); //memindah file gambar ke folder gambar
                  // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
                  $query = "INSERT INTO psu (nama_psu, harga_psu, ukuran_psu, gambar_psu) VALUES ('$nama_psu','$harga_psu','$ukuran_psu','$nama_gambar_baru')";
                  $result = mysqli_query($config, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($config).
                           " - ".mysqli_error($config));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');
					window.location.href='index.php?page=psu'</script>";
                  }

            } else {     
             //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');	window.location.href='index.php?page=psu'</script>";
            }
}
}

else 
    if($g=='edit_psu')
    {
	$id_psu = $_POST['id_psu'];
	$nama_psu = $_POST['nama_psu'];
	$harga_psu = $_POST['harga_psu'];
	$ukuran_psu = $_POST['ukuran_psu'];
	$gambar_psu = $_FILES['gambar_psu']['name'];
	if($gambar_psu != "") {
		$ekstensi_diperbolehkan = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
  $x = explode('.', $gambar_psu); //memisahkan nama file dengan ekstensi yang diupload
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['gambar_psu']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_gambar_baru = $angka_acak.'-'.$gambar_psu;
  $folder = "images/psu/";
  if(!is_dir($folder)){
       mkdir($folder, 0755, true);
     }
  //menggabungkan angka acak dengan nama file sebenarnya
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
                move_uploaded_file($file_tmp, $folder.$nama_gambar_baru); //memindah file gambar ke folder gambar
                  // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
                  $query = "UPDATE psu SET nama_psu='$nama_psu',
            harga_psu='$harga_psu',
            ukuran_psu='$ukuran_psu',
                gambar_psu='$nama_gambar_baru' WHERE id_psu='$id_psu'";
                  $result = mysqli_query($config, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($config).
                           " - ".mysqli_error($config));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil diedit.');
					window.location.href='index.php?page=psu'</script>";
                  }

            } else {     
             //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');	window.location.href='index.php?page=psu'</script>";
            }
} else {
	$query = "UPDATE psu SET nama_psu='$nama_psu',
            harga_psu='$harga_psu',
            ukuran_psu='$ukuran_psu' WHERE id_psu='$id_psu'";
                  $result = mysqli_query($config, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($config).
                           " - ".mysqli_error($config));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil diedit.');
					window.location.href='index.php?page=psu'</script>";
                  }
		}

    } 
else 
    if($g=='hapus_psu')
    {
		$id_psu = $_GET['id_psu'];
		$data=mysqli_fetch_array(mysqli_query($config,"SELECT gambar_psu FROM psu WHERE id_psu = '$id_psu'"));
        $hasil=mysqli_query($config,"DELETE FROM psu where id_psu='$id_psu'");
		if(!$hasil){
			die ("Gagal menghapus data: ".mysqli_errno($config).
       " - ".mysqli_error($config));
			}else{
			unlink("images/psu/".$data['gambar_psu']);
         echo '<script LANGUAGE="JavaScript">
            alert("PSU dengan Id :('.$_GET['id_psu'].') Berhasil Terhapus")
            window.location.href="index.php?page=psu";
            </script>';
			}
    }
	
//RAM
if($g=='ram')
{
	$nama_ram = $_POST['nama_ram'];
	$harga_ram = $_POST['harga_ram'];
	$gambar_ram = $_FILES['gambar_ram']['name'];
	if($gambar_ram != "") {
		$ekstensi_diperbolehkan = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
  $x = explode('.', $gambar_ram); //memisahkan nama file dengan ekstensi yang diupload
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['gambar_ram']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_gambar_baru = $angka_acak.'-'.$gambar_ram;
  $folder = "images/ram/";
  if(!is_dir($folder)){
       mkdir($folder, 0755, true);
     }
  //menggabungkan angka acak dengan nama file sebenarnya
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
                move_uploaded_file($file_tmp, $folder.$nama_gambar_baru); //memindah file gambar ke folder gambar
                  // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
                  $query = "INSERT INTO ram (nama_ram, harga_ram, gambar_ram) VALUES ('$nama_ram','$harga_ram','$nama_gambar_baru')";
                  $result = mysqli_query($config, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($config).
                           " - ".mysqli_error($config));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');
					window.location.href='index.php?page=ram'</script>";
                  }

            } else {     
             //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');	window.location.href='index.php?page=ram'</script>";
            }
}
}

else 
    if($g=='edit_ram')
    {
	$id_ram = $_POST['id_ram'];
	$nama_ram = $_POST['nama_ram'];
	$harga_ram = $_POST['harga_ram'];
	$gambar_ram = $_FILES['gambar_ram']['name'];
	if($gambar_ram != "") {
		$ekstensi_diperbolehkan = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
  $x = explode('.', $gambar_ram); //memisahkan nama file dengan ekstensi yang diupload
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['gambar_ram']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_gambar_baru = $angka_acak.'-'.$gambar_ram;
  $folder = "images/ram/";
  if(!is_dir($folder)){
       mkdir($folder, 0755, true);
     }
  //menggabungkan angka acak dengan nama file sebenarnya
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
                move_uploaded_file($file_tmp, $folder.$nama_gambar_baru); //memindah file gambar ke folder gambar
                  // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
                  $query = "UPDATE ram SET nama_ram='$nama_ram',
            harga_ram='$harga_ram',
                gambar_ram='$nama_gambar_baru' WHERE id_ram='$id_ram'";
                  $result = mysqli_query($config, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($config).
                           " - ".mysqli_error($config));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil diedit.');
					window.location.href='index.php?page=ram'</script>";
                  }

            } else {     
             //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');	window.location.href='index.php?page=ram'</script>";
            }
} else {
	$query = "UPDATE ram SET nama_ram='$nama_ram',
            harga_ram='$harga_ram' WHERE id_ram='$id_ram'";
                  $result = mysqli_query($config, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($config).
                           " - ".mysqli_error($config));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil diedit.');
					window.location.href='index.php?page=ram'</script>";
                  }
		}

    } 
else 
    if($g=='hapus_ram')
    {
		$id_ram = $_GET['id_ram'];
		$data=mysqli_fetch_array(mysqli_query($config,"SELECT gambar_ram FROM ram WHERE id_ram = '$id_ram'"));
        $hasil=mysqli_query($config,"DELETE FROM ram where id_ram='$id_ram'");
		if(!$hasil){
			die ("Gagal menghapus data: ".mysqli_errno($config).
       " - ".mysqli_error($config));
			}else{
			unlink("images/ram/".$data['gambar_ram']);
         echo '<script LANGUAGE="JavaScript">
            alert("RAM dengan Id :('.$_GET['id_ram'].') Berhasil Terhapus")
            window.location.href="index.php?page=ram";
            </script>';
			}
    }
	
//User
if($g=='user')
{
	$username = $_POST['username'];
	$password = $_POST['password'];
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$type = $_POST['type'];
                  $query = "INSERT INTO user (username, password, first_name, last_name, type) VALUES ('$username','$password','$first_name','$last_name','$type')";
                  $result = mysqli_query($config, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($config).
                           " - ".mysqli_error($config));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');
					window.location.href='index.php?page=user'</script>";
                  }
            }
else 
    if($g=='edit_user')
    {
	$id_user = $_POST['id_user'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$type = $_POST['type'];
	$query = "UPDATE user SET username='$username', password='$password', first_name='$first_name', last_name='$last_name', type='$type' WHERE id_user='$id_user'";
                  $result = mysqli_query($config, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($config).
                           " - ".mysqli_error($config));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil diedit.');
					window.location.href='index.php?page=user'</script>";
                  }
		}

else 
    if($g=='hapus_user')
    {
		$id_user = $_GET['id_user'];
        $hasil=mysqli_query($config,"DELETE FROM user where id_user='$id_user'");
		if(!$hasil){
			die ("Gagal menghapus data: ".mysqli_errno($config).
       " - ".mysqli_error($config));
			}else{
         echo '<script LANGUAGE="JavaScript">
            alert("user dengan Id :('.$_GET['id_user'].') Berhasil Terhapus")
            window.location.href="index.php?page=user";
            </script>';
			}
    }
	
//Paket
if($g=='paket')
{
	$namaPaket = $_POST['nama_paket'];
	$tanggal = date("Y-m-d h:i:s");
	$idUser = $_POST['id_user'];
	$idProsesor = $_POST['prosesor'];
	$idMotherboard = $_POST['motherboard'];
	$idRAM = $_POST['ram'];
	$idPenyimpanan = $_POST['penyimpanan'];
	$idGPU = $_POST['gpu'];
	$idPSU = $_POST['psu'];
	$idCasing = $_POST['casing'];
	if($_POST['jumlah_prosesor'] != ""){
	$jumProsesor = $_POST['jumlah_prosesor'];
	}else{
	$jumProsesor = 1;
	}
	if($_POST['jumlah_motherboard'] != ""){
	$jumMotherboard = $_POST['jumlah_motherboard'];
	}else{
	$jumMotherboard = 1;
	}
	if($_POST['jumlah_ram'] != ""){
	$jumRAM = $_POST['jumlah_ram'];
	}else{
	$jumRAM = 1;
	}
	if($_POST['jumlah_penyimpanan'] != ""){
	$jumPenyimpanan = $_POST['jumlah_penyimpanan'];
	}else{
	$jumPenyimpanan = 1;
	}
	if($_POST['jumlah_gpu'] != ""){
	$jumGPU = $_POST['jumlah_gpu'];
	}else{
	$jumGPU = 1;
	}
	if($_POST['jumlah_psu'] != ""){
	$jumPSU = $_POST['jumlah_psu'];
	}else{
	$jumPSU = 1;
	}
	if($_POST['jumlah_casing'] != ""){
	$jumCasing = $_POST['jumlah_casing'];
	}else{
	$jumCasing = 1;
	}
                  $query = "INSERT INTO paket (nama_paket, id_casing, qty_casing, id_gpu, qty_gpu, id_motherboard, qty_motherboard, id_penyimpanan, qty_penyimpanan, id_prosesor, qty_prosesor, id_psu, qty_psu, id_ram, qty_ram, id_user, tanggal) VALUES ('$namaPaket','$idCasing','$jumCasing','$idGPU','$jumGPU','$idMotherboard','$jumMotherboard','$idPenyimpanan','$jumPenyimpanan','$idProsesor','$jumProsesor','$idPSU','$jumPSU','$idRAM','$jumRAM','$idUser','$tanggal')";
                  $result = mysqli_query($config, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($config).
                           " - ".mysqli_error($config));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');
					window.location.href='index.php?page=paket'</script>";
                  }
}
else 
    if($g=='edit_paket')
    {
	$idPaket = $_POST['id_paket'];
	$tanggal = date("Y-m-d h:i:s");
	$idProsesor = $_POST['prosesor'];
	$idMotherboard = $_POST['motherboard'];
	$idRAM = $_POST['ram'];
	$idPenyimpanan = $_POST['penyimpanan'];
	$idGPU = $_POST['gpu'];
	$idPSU = $_POST['psu'];
	$idCasing = $_POST['casing'];
	$jumProsesor = $_POST['jumlah_prosesor'];
	$jumMotherboard = $_POST['jumlah_motherboard'];
	$jumRAM = $_POST['jumlah_ram'];
	$jumPenyimpanan = $_POST['jumlah_penyimpanan'];
	$jumGPU = $_POST['jumlah_gpu'];
	$jumPSU = $_POST['jumlah_psu'];
	$jumCasing = $_POST['jumlah_casing'];
	$query = "UPDATE paket SET id_casing='$idCasing', qty_casing='$jumCasing', id_gpu='$idGPU', qty_gpu='$jumGPU', id_motherboard='$idMotherboard', qty_motherboard='$jumMotherboard', id_penyimpanan='$idPenyimpanan', qty_penyimpanan='$jumPenyimpanan', id_prosesor='$idProsesor', qty_prosesor='$jumProsesor', id_psu='$idPSU', qty_psu='$jumPSU', id_ram='$idRAM', qty_ram='$jumRAM', tanggal='$tanggal' WHERE id_paket='$idPaket'";
                  $result = mysqli_query($config, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($config).
                           " - ".mysqli_error($config));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil diedit.');
					window.location.href='index.php?page=paket'</script>";
                  }
		}

else 
    if($g=='hapus_paket')
    {
		$id_paket = $_GET['id_paket'];
        $hasil=mysqli_query($config,"DELETE FROM paket where id_paket='$id_paket'");
		if(!$hasil){
			die ("Gagal menghapus data: ".mysqli_errno($config).
       " - ".mysqli_error($config));
			}else{
         echo '<script LANGUAGE="JavaScript">
            alert("paket dengan Id :('.$_GET['id_paket'].') Berhasil Terhapus")
            window.location.href="index.php?page=paket";
            </script>';
			}
    }
?>
