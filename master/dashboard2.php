<?php
	if($_SESSION['type']==1){
	include 'theme/header3.php';
	}else{
	include 'theme/header2.php';
	}
	$idUser = $_SESSION['id_user'];
?>

     
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
       
         
          <!-- sidebar menu: : style can be found in sidebar.less -->
           <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active">
                <a href="<?php $_SERVER['SCRIPT_NAME'];?>index.php">  
                 <i class="fa fa-home"></i> <span>Dashboard</span>
              </a>
            </li>
			<?php if($_SESSION['type']==1){ ?>
			<li>
              <a href="<?php $_SERVER['SCRIPT_NAME'];?>?page=paket">
                <i class="fa fa-history"></i> <span>History</span>  
              </a>
            </li>
			<?php } ?>
           </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div style="background-color:White;padding:10px;">
		  <?php if($_SESSION['type']==1){ ?>
		  <form action="aksi.php?sender=paket" method="POST" enctype="multipart/form-data">
		  <?php } else { ?>
		  <form action="<?php $_SERVER['SCRIPT_NAME'];?>?page=view" method="POST" enctype="multipart/form-data">
		  <?php } ?>
		  <div class="modal-header">

<h4 class="modal-title" id="myModalLabel">Perkiraan Harga Komputer</h4>
</div>
	<?php if($_SESSION['type']==1){ ?>
	<div class="form-group">
      <label>Nama Paket</label>
      <input type="text" name="nama_paket" class="form-control" required="" placeholder="Enter ...">
	  <input type="hidden" name="id_user" class="form-control" value="<?php echo $idUser; ?>">
    </div>
	<?php } ?>
	<!--Processor-->
	<div class="form-group">
	<div class="row">
	<div class="col-sm-10">
	<label>&nbsp;Processor : </label>
	</div>
	<div class="col-sm-2">
	<label>&nbsp;Quantity : </label>
	</div>
	</div>
	<div class="row">
	<div class="col-sm-10">
    <div class=" selectem "> <span class="selectem_label">Choose Processor</span>
      <div class="selectem_dropdown">
        <input class="selectem-value" name="prosesor" type="hidden">
        <input class="selectem-input" name="filter" type="text" autocomplete="off" data-filter="" placeholder="Search">
		<div style='overflow:auto; width:ancho;height:300px;'>
        <ul class="selectem-items">
		<?php
                        $sql="SELECT  * FROM prosesor";
                        if (!$result=  mysqli_query($config, $sql)){
                        die('Error:'.mysqli_error($config));
                        }  else {
                        if (mysqli_num_rows($result)> 0){
                        while ($row=  mysqli_fetch_assoc($result)){
                    ?>
          <li data-val="<?php echo $row['id_prosesor'];?>">
            <div class="item-avatar"> <img src="images/prosesor/<?php echo $row['gambar_prosesor'];?>" alt="Processor"> </div>
            <div> <span class="item-label"><?php echo $row['nama_prosesor'];?></span> <span class="pull-right"> <span class="label label-default"><?php echo $row['brand_prosesor'];?></span> <span class="label label-default"><?php echo $row['soket_prosesor'];?></span> <span class="label label-default"><?php echo "Rp " . number_format($row['harga_prosesor'], 2, ',', '.');?></span> </span> </div>
          </li>
		  <?php                       
                        }
                    }  else {
                    echo '';    
                    }
                    }?>
        </ul>
      </div>
      </div>
    </div>
	</div>
	<div class="col-sm-2">
	<input type="text" name="jumlah_prosesor" class="form-control" placeholder="1">
	</div>
	</div>
	</div>
	
	<!--Motherboard-->
	<div class="form-group">
	<label>&nbsp;Motherboard : </label>
	<div class="row">
	<div class="col-sm-10">
    <div class=" selectem "> <span class="selectem_label">Choose Motherboard</span>
      <div class="selectem_dropdown">
        <input class="selectem-value" name="motherboard" type="hidden">
        <input class="selectem-input" name="filter" type="text" autocomplete="off" data-filter="" placeholder="Search">
		<div style='overflow:auto; width:ancho;height:300px;'>
        <ul class="selectem-items">
		<?php
                        $sql="SELECT  * FROM motherboard";
                        if (!$result=  mysqli_query($config, $sql)){
                        die('Error:'.mysqli_error($config));
                        }  else {
                        if (mysqli_num_rows($result)> 0){
                        while ($row=  mysqli_fetch_assoc($result)){
                    ?>
          <li data-val="<?php echo $row['id_motherboard'];?>">
            <div class="item-avatar"> <img src="images/mobo/<?php echo $row['gambar_motherboard'];?>" alt="Motherboard"> </div>
            <div> <span class="item-label"><?php echo $row['nama_motherboard'];?></span> <span class="pull-right"> <span class="label label-default"><?php echo $row['brand_motherboard'];?></span> <span class="label label-default"><?php echo $row['soket_motherboard'];?></span> <span class="label label-default"><?php echo "Rp " . number_format($row['harga_motherboard'], 2, ',', '.');?></span> </span> </div>
          </li>
		  <?php                       
                        }
                    }  else {
                    echo '';    
                    }
                    }?>
        </ul>
      </div>
      </div>
    </div>
	</div>
	<div class="col-sm-2">
	<input type="text" name="jumlah_motherboard" class="form-control" placeholder="1">
	</div>
	</div>
	</div>

	<!--RAM-->
	<div class="form-group">
	<label>&nbsp;RAM : </label>
	<div class="row">
	<div class="col-sm-10">
    <div class=" selectem "> <span class="selectem_label">Choose RAM</span>
      <div class="selectem_dropdown">
        <input class="selectem-value" name="ram" type="hidden">
        <input class="selectem-input" name="filter" type="text" autocomplete="off" data-filter="" placeholder="Search">
		<div style='overflow:auto; width:ancho;height:300px;'>
        <ul class="selectem-items">
		<?php
                        $sql="SELECT  * FROM ram";
                        if (!$result=  mysqli_query($config, $sql)){
                        die('Error:'.mysqli_error($config));
                        }  else {
                        if (mysqli_num_rows($result)> 0){
                        while ($row=  mysqli_fetch_assoc($result)){
                    ?>
          <li data-val="<?php echo $row['id_ram'];?>">
            <div class="item-avatar"> <img src="images/ram/<?php echo $row['gambar_ram'];?>" alt="RAM"> </div>
            <div> <span class="item-label"><?php echo $row['nama_ram'];?></span> <span class="pull-right"> <span class="label label-default"><?php echo "Rp " . number_format($row['harga_ram'], 2, ',', '.');?></span> </span> </div>
          </li>
		  <?php                       
                        }
                    }  else {
                    echo '';    
                    }
                    }?>
        </ul>
      </div>
      </div>
    </div>
	</div>
	<div class="col-sm-2">
	<input type="text" name="jumlah_ram" class="form-control" placeholder="1">
	</div>
	</div>
	</div>
	
	<!--Penyimpanan-->
	<div class="form-group">
	<label>&nbsp;Penyimpanan : </label>
	<div class="row">
	<div class="col-sm-10">
    <div class=" selectem "> <span class="selectem_label">Choose Penyimpanan</span>
      <div class="selectem_dropdown">
        <input class="selectem-value" name="penyimpanan" type="hidden">
        <input class="selectem-input" name="filter" type="text" autocomplete="off" data-filter="" placeholder="Search">
		<div style='overflow:auto; width:ancho;height:300px;'>
        <ul class="selectem-items">
		<?php
                        $sql="SELECT  * FROM penyimpanan";
                        if (!$result=  mysqli_query($config, $sql)){
                        die('Error:'.mysqli_error($config));
                        }  else {
                        if (mysqli_num_rows($result)> 0){
                        while ($row=  mysqli_fetch_assoc($result)){
                    ?>
          <li data-val="<?php echo $row['id_penyimpanan'];?>">
            <div class="item-avatar"> <img src="images/penyimpanan/<?php echo $row['gambar_penyimpanan'];?>" alt="Penyimpanan"> </div>
            <div> <span class="item-label"><?php echo $row['nama_penyimpanan'];?></span> <span class="pull-right"> <span class="label label-default"><?php echo $row['jenis_penyimpanan'];?></span>  <span class="label label-default"><?php echo $row['brand_penyimpanan'];?></span> <span class="label label-default"><?php echo $row['soket_penyimpanan'];?></span> <span class="label label-default"><?php echo "Rp " . number_format($row['harga_penyimpanan'], 2, ',', '.');?></span> </span> </div>
          </li>
		  <?php                       
                        }
                    }  else {
                    echo '';    
                    }
                    }?>
        </ul>
      </div>
      </div>
    </div>
	</div>
	<div class="col-sm-2">
	<input type="text" name="jumlah_penyimpanan" class="form-control" placeholder="1">
	</div>
	</div>
	</div>
	
	<!--GPU-->
	<div class="form-group">
	<label>&nbsp;GPU : </label>
	<div class="row">
	<div class="col-sm-10">
    <div class=" selectem "> <span class="selectem_label">Choose GPU</span>
      <div class="selectem_dropdown">
        <input class="selectem-value" name="gpu" type="hidden">
        <input class="selectem-input" name="filter" type="text" autocomplete="off" data-filter="" placeholder="Search">
		<div style='overflow:auto; width:ancho;height:300px;'>
        <ul class="selectem-items">
		<?php
                        $sql="SELECT  * FROM gpu";
                        if (!$result=  mysqli_query($config, $sql)){
                        die('Error:'.mysqli_error($config));
                        }  else {
                        if (mysqli_num_rows($result)> 0){
                        while ($row=  mysqli_fetch_assoc($result)){
                    ?>
          <li data-val="<?php echo $row['id_gpu'];?>">
            <div class="item-avatar"> <img src="images/gpu/<?php echo $row['gambar_gpu'];?>" alt="GPU"> </div>
            <div> <span class="item-label"><?php echo $row['nama_gpu'];?></span> <span class="pull-right"> <span class="label label-default"><?php echo $row['brand_gpu'];?></span> <span class="label label-default"><?php echo "Rp " . number_format($row['harga_gpu'], 2, ',', '.');?></span> </span> </div>
          </li>
		  <?php                       
                        }
                    }  else {
                    echo '';    
                    }
                    }?>
        </ul>
      </div>
      </div>
    </div>
	</div>
	<div class="col-sm-2">
	<input type="text" name="jumlah_gpu" class="form-control" placeholder="1">
	</div>
	</div>
	</div>
	
	<!--PSU-->
	<div class="form-group">
	<label>&nbsp;PSU : </label>
	<div class="row">
	<div class="col-sm-10">
    <div class=" selectem "> <span class="selectem_label">Choose PSU</span>
      <div class="selectem_dropdown">
        <input class="selectem-value" name="psu" type="hidden">
        <input class="selectem-input" name="filter" type="text" autocomplete="off" data-filter="" placeholder="Search">
		<div style='overflow:auto; width:ancho;height:300px;'>
        <ul class="selectem-items">
		<?php
                        $sql="SELECT  * FROM psu";
                        if (!$result=  mysqli_query($config, $sql)){
                        die('Error:'.mysqli_error($config));
                        }  else {
                        if (mysqli_num_rows($result)> 0){
                        while ($row=  mysqli_fetch_assoc($result)){
                    ?>
          <li data-val="<?php echo $row['id_psu'];?>">
            <div class="item-avatar"> <img src="images/psu/<?php echo $row['gambar_psu'];?>" alt="PSU"> </div>
            <div> <span class="item-label"><?php echo $row['nama_psu'];?></span> <span class="pull-right"> <span class="label label-default"><?php echo $row['ukuran_psu'];?></span> <span class="label label-default"><?php echo "Rp " . number_format($row['harga_psu'], 2, ',', '.');?></span> </span> </div>
          </li>
		  <?php                       
                        }
                    }  else {
                    echo '';    
                    }
                    }?>
        </ul>
      </div>
      </div>
    </div>
	</div>
	<div class="col-sm-2">
	<input type="text" name="jumlah_psu" class="form-control" placeholder="1">
	</div>
	</div>
	</div>

	<!--Casing-->
	<div class="form-group">
	<label>&nbsp;Casing : </label>
	<div class="row">
	<div class="col-sm-10">
    <div class=" selectem "> <span class="selectem_label">Choose Casing</span>
      <div class="selectem_dropdown">
        <input class="selectem-value" name="casing" type="hidden">
        <input class="selectem-input" name="filter" type="text" autocomplete="off" data-filter="" placeholder="Search">
		<div style='overflow:auto; width:ancho;height:300px;'>
        <ul class="selectem-items">
		<?php
                        $sql="SELECT  * FROM casing";
                        if (!$result=  mysqli_query($config, $sql)){
                        die('Error:'.mysqli_error($config));
                        }  else {
                        if (mysqli_num_rows($result)> 0){
                        while ($row=  mysqli_fetch_assoc($result)){
                    ?>
          <li data-val="<?php echo $row['id_casing'];?>">
            <div class="item-avatar"> <img src="images/casing/<?php echo $row['gambar_casing'];?>" alt="Casing"> </div>
            <div> <span class="item-label"><?php echo $row['nama_casing'];?></span> <span class="pull-right"> <span class="label label-default"><?php echo $row['ukuran_casing'];?></span> <span class="label label-default"><?php echo "Rp " . number_format($row['harga_casing'], 2, ',', '.');?></span> </span> </div>
          </li>
		  <?php                       
                        }
                    }  else {
                    echo '';    
                    }
                    }?>
        </ul>
      </div>
      </div>
    </div>
	</div>
	<div class="col-sm-2">
	<input type="text" name="jumlah_casing" class="form-control" placeholder="1">
	</div>
	</div>
	</div>
	<div class="modal-footer">
	<button type="submit" class="btn btn-info"> Lihat Harga</button>
	</div>
	</form>
  </div>
</div>


        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
     
<?php include 'theme/footer.php'; ?>