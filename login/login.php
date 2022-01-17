<?php
	session_start();

include '../koneksi.php';
 
if(!empty($_POST)){
     
    $username = mysqli_real_escape_string($config, $_POST['username']);
    $password = mysqli_real_escape_string($config, $_POST['password']);
 
    $sql = "select * from user where username='".$username."' and password='".$password."'";
	
	if (!$result=  mysqli_query($config, $sql)){
                        die('Error:'.mysqli_error($config));
                        }  else {
                        if (mysqli_num_rows($result)> 0){
                        while ($row=  mysqli_fetch_assoc($result)){
						
							$_SESSION['id_user']=$row['id_user'];
							$_SESSION['type']=$row['type'];
							$_SESSION['first_name']=$row['first_name'];
							
							echo "<script>alert('Berhasil Sign In');
							window.location.href='../'</script>";
						}
                    }  else {
                    echo "<script>alert('Username/Password Salah');
					window.location.href=''</script>"; 
                    }
                    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>PHK | Sign In</title>
</head>

<body>
    <div class="container-fuild">
        <div class="container-xxl my-5">
            <div class="row">
                <div class="col-6 mx-5">
                    <div>
                        <img src="comp3.jpg" alt="">
                    </div>
                </div>
                <div class="col-4 mx-2 my-5 card shadow border border-0">
                    <h2 class="text-center mt-4">SIGN IN</h2>
                    <p class="text-center">Welcome to PHK</p>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="mb-3 px-5">
                            <label for="exampleInputEmail1" class="form-label">Email Address</label>
                            <input type="email" name="username" class="form-control" id="exampleInputEmail1">
                        </div>
                        <div class="mb-3 px-5">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                        </div>
						<p class="text-center">Belum terdaftar? <a href="#"style="text-decoration: none">Buat Akun</a></p>
                        <div class="d-grid gap-1 mx-auto px-5">
						<div class="row">
						<div class="d-grid gap-1 col-sm-6">
                            <a href="../" class="btn btn-secondary">Kembali</a>
						</div>
						<div class="d-grid gap-1 col-sm-6">
                            <button type="submit" class="btn btn-primary">Masuk</button>
						</div>
						</div>
                        </div><br>

                    </form>
                </div>
            </div>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>