<?php
	include 'theme/header.php';
	$idUser = $_SESSION['id_user'];
?>

     
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
           
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li>
              <a href="index.php">
                 <i class="fa fa-home"></i> <span>Dashboard</span>
              </a>
            </li> 
            <li>
              <a href="<?php $_SERVER['SCRIPT_NAME'];?>?page=casing">
                <i class="fa fa-cube"></i> <span>Casing</span>  
              </a>
            </li> 
            
            <li>
              <a href="<?php $_SERVER['SCRIPT_NAME'];?>?page=gpu">
                <i class="fa fa-television"></i> <span>GPU</span>  
              </a>
            </li>
           
            <li>
              <a href="<?php $_SERVER['SCRIPT_NAME'];?>?page=mobo">
                <i class="fa fa-server"></i> <span>Motherboard</span>  
              </a>
            </li>
           
            <li>
              <a href="<?php $_SERVER['SCRIPT_NAME'];?>?page=penyimpanan">
                <i class="fa fa-hdd-o"></i> <span>Penyimpanan</span>  
              </a>
            </li>
           
            <li>
              <a href="<?php $_SERVER['SCRIPT_NAME'];?>?page=prosesor">
                <i class="fa fa-building-o"></i> <span>Processor</span>  
              </a>
            </li>
           
            <li>
              <a href="<?php $_SERVER['SCRIPT_NAME'];?>?page=psu">
                <i class="fa fa-plug"></i> <span>PSU</span>  
              </a>
            </li>
           
            <li>
              <a href="<?php $_SERVER['SCRIPT_NAME'];?>?page=ram">
                <i class="fa fa-keyboard-o"></i> <span>RAM</span>  
              </a>
            </li>
           
            <li class="active" >
              <a href="<?php $_SERVER['SCRIPT_NAME'];?>?page=paket">
                <i class="fa fa-laptop"></i> <span>Paket</span>  
              </a>
            </li>
			
			<li>
              <a href="<?php $_SERVER['SCRIPT_NAME'];?>?page=user">
                <i class="fa fa-user"></i> <span>User</span>  
              </a>
            </li>
           
           </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
      
       <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
             Paket
            
          </h1>
          <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Paket</a></li>
            <li class="active">List Paket</li>
            
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
             
            <!--edit-->
            <?php
            
                        $id=$_GET['id'];
                        $sql="SELECT  * FROM paket where id_paket='$id' ";
                        
                        if (!$result=  mysqli_query($config, $sql)){
                        die('Error:'.mysqli_error($config));
                        }  else {
                        if (mysqli_num_rows($result)> 0){
                        while ($row=  mysqli_fetch_assoc($result)){
						$idPaket = $row['id_paket'];
						$namaPaket = $row['nama_paket'];
						$idProsesor = $row['id_prosesor'];
						$idMotherboard = $row['id_motherboard'];
						$idRAM = $row['id_ram'];
						$idPenyimpanan = $row['id_penyimpanan'];
						$idGPU = $row['id_gpu'];
						$idPSU = $row['id_psu'];
						$idCasing = $row['id_casing'];
						$jumProsesor = $row['qty_prosesor'];
						$jumMotherboard = $row['qty_motherboard'];
						$jumRAM = $row['qty_ram'];
						$jumPenyimpanan = $row['qty_penyimpanan'];
						$jumGPU = $row['qty_gpu'];
						$jumPSU = $row['qty_psu'];
						$jumCasing = $row['qty_casing'];
                    ?>
            <div class="box">
            <div class="box-header with-border">
                  <?php echo $namaPaket; ?> 
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
              </div> 
            </div>
                  <div class="box-body">
                        <!--Processor-->
	<div class="form-group">
	<input name="id_paket" type="hidden" value="<?php echo $idPaket; ?>">
	<div class="row">
	<div class="col-sm-8">
	<label>&nbsp;Processor : </label>
	</div>
	<div class="col-sm-2">
	<label>&nbsp;Quantity : </label>
	</div>
	<div class="col-sm-2">
	<label>&nbsp;Harga : </label>
	</div>
	</div>
	<div class="row">
	<div class="col-sm-8">
    <div class=" selectem ">
	<span class="selectem_label">
	<?php
                        $sql="SELECT  * FROM prosesor WHERE id_prosesor = '$idProsesor'";
                        if (!$result=  mysqli_query($config, $sql)){
                        die('Error:'.mysqli_error($config));
                        }  else {
                        if (mysqli_num_rows($result)> 0){
                        while ($row=  mysqli_fetch_assoc($result)){
						echo $row['nama_prosesor'];
						$hargaProsesor = $row['harga_prosesor'];
						$totProsesor = $jumProsesor*$hargaProsesor;
						}
                    }  else {
                    echo 'Choose Processor';    
                    }
                    }
                    ?>
	</span>
      <div class="selectem_dropdown">
        <input class="selectem-value" name="prosesor" type="hidden" value="<?php echo $idProsesor; ?>">
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
	<input type="text" name="jumlah_prosesor" class="form-control" placeholder="Jumlah" value="<?php echo $jumProsesor; ?>">
	</div>
	<div class="col-sm-2">
	<input type="text" name="harga_prosesor" class="form-control" placeholder="Harga" value="<?php echo "Rp " . number_format($totProsesor, 2, ',', '.'); ?>" readonly="readonly">
	</div>
	</div>
	</div>
	
	<!--Motherboard-->
	<div class="form-group">
	<label>&nbsp;Motherboard : </label>
	<div class="row">
	<div class="col-sm-8">
    <div class=" selectem ">
	<span class="selectem_label">
	<?php
                        $sql="SELECT  * FROM motherboard WHERE id_motherboard = '$idMotherboard'";
                        if (!$result=  mysqli_query($config, $sql)){
                        die('Error:'.mysqli_error($config));
                        }  else {
                        if (mysqli_num_rows($result)> 0){
                        while ($row=  mysqli_fetch_assoc($result)){
						echo $row['nama_motherboard'];
						$hargaMotherboard = $row['harga_motherboard'];
						$totMotherboard = $jumMotherboard*$hargaMotherboard;
						}
                    }  else {
                    echo 'Choose Motherboard';    
                    }
                    }
                    ?>
	</span>
      <div class="selectem_dropdown">
        <input class="selectem-value" name="motherboard" type="hidden"  value="<?php echo $idMotherboard; ?>">
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
	<input type="text" name="jumlah_motherboard" class="form-control" placeholder="Jumlah" value="<?php echo $jumMotherboard; ?>">
	</div>
	<div class="col-sm-2">
	<input type="text" name="harga_motherboard" class="form-control" placeholder="Harga" value="<?php echo "Rp " . number_format($totMotherboard, 2, ',', '.'); ?>" readonly="readonly">
	</div>
	</div>
	</div>

	<!--RAM-->
	<div class="form-group">
	<label>&nbsp;RAM : </label>
	<div class="row">
	<div class="col-sm-8">
    <div class=" selectem ">
	<span class="selectem_label">
	<?php
                        $sql="SELECT  * FROM ram WHERE id_ram = '$idRAM'";
                        if (!$result=  mysqli_query($config, $sql)){
                        die('Error:'.mysqli_error($config));
                        }  else {
                        if (mysqli_num_rows($result)> 0){
                        while ($row=  mysqli_fetch_assoc($result)){
						echo $row['nama_ram'];
						$hargaRAM = $row['harga_ram'];
						$totRAM = $jumRAM*$hargaRAM;
						}
                    }  else {
                    echo 'Choose RAM';    
                    }
                    }
                    ?>
	</span>
      <div class="selectem_dropdown">
        <input class="selectem-value" name="ram" type="hidden" value="<?php echo $idRAM; ?>">
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
	<input type="text" name="jumlah_ram" class="form-control" placeholder="Jumlah" value="<?php echo $jumRAM; ?>">
	</div>
	<div class="col-sm-2">
	<input type="text" name="harga_ram" class="form-control" placeholder="Harga" value="<?php echo "Rp " . number_format($totRAM, 2, ',', '.'); ?>" readonly="readonly">
	</div>
	</div>
	</div>
	
	<!--Penyimpanan-->
	<div class="form-group">
	<label>&nbsp;Penyimpanan : </label>
	<div class="row">
	<div class="col-sm-8">
    <div class=" selectem ">
	<span class="selectem_label">
	<?php
                        $sql="SELECT  * FROM penyimpanan WHERE id_penyimpanan = '$idPenyimpanan'";
                        if (!$result=  mysqli_query($config, $sql)){
                        die('Error:'.mysqli_error($config));
                        }  else {
                        if (mysqli_num_rows($result)> 0){
                        while ($row=  mysqli_fetch_assoc($result)){
						echo $row['nama_penyimpanan'];
						$hargaPenyimpanan = $row['harga_penyimpanan'];
						$totPenyimpanan = $jumPenyimpanan*$hargaPenyimpanan;
						}
                    }  else {
                    echo 'Choose Penyimpanan';    
                    }
                    }
                    ?>
	</span>
      <div class="selectem_dropdown">
        <input class="selectem-value" name="penyimpanan" type="hidden" value="<?php echo $idPenyimpanan; ?>">
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
	<input type="text" name="jumlah_penyimpanan" class="form-control" placeholder="Jumlah" value="<?php echo $jumPenyimpanan; ?>">
	</div>
	<div class="col-sm-2">
	<input type="text" name="harga_penyimpanan" class="form-control" placeholder="Harga" value="<?php echo "Rp " . number_format($totPenyimpanan, 2, ',', '.'); ?>" readonly="readonly">
	</div>
	</div>
	</div
	
	<!--GPU-->
	<div class="form-group">
	<label>&nbsp;GPU : </label>
	<div class="row">
	<div class="col-sm-8">
    <div class=" selectem ">
	<span class="selectem_label">
	<?php
                        $sql="SELECT  * FROM gpu WHERE id_gpu = '$idGPU'";
                        if (!$result=  mysqli_query($config, $sql)){
                        die('Error:'.mysqli_error($config));
                        }  else {
                        if (mysqli_num_rows($result)> 0){
                        while ($row=  mysqli_fetch_assoc($result)){
						echo $row['nama_gpu'];
						$hargaGPU = $row['harga_gpu'];
						$totGPU = $jumGPU*$hargaGPU;
						}
                    }  else {
                    echo 'Choose GPU';    
                    }
                    }
                    ?>
	</span>
      <div class="selectem_dropdown">
        <input class="selectem-value" name="gpu" type="hidden" value="<?php echo $idGPU; ?>">
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
	<input type="text" name="jumlah_gpu" class="form-control" placeholder="Jumlah" value="<?php echo $jumGPU; ?>">
	</div>
	<div class="col-sm-2">
	<input type="text" name="harga_gpu" class="form-control" placeholder="Harga" value="<?php echo "Rp " . number_format($totGPU, 2, ',', '.'); ?>" readonly="readonly">
	</div>
	</div>
	</div>
	
	<!--PSU-->
	<div class="form-group">
	<label>&nbsp;PSU : </label>
	<div class="row">
	<div class="col-sm-8">
    <div class=" selectem ">
	<span class="selectem_label">
	<?php
                        $sql="SELECT  * FROM psu WHERE id_psu = '$idPSU'";
                        if (!$result=  mysqli_query($config, $sql)){
                        die('Error:'.mysqli_error($config));
                        }  else {
                        if (mysqli_num_rows($result)> 0){
                        while ($row=  mysqli_fetch_assoc($result)){
						echo $row['nama_psu'];
						$hargaPSU = $row['harga_psu'];
						$totPSU = $jumPSU*$hargaPSU;
						}
                    }  else {
                    echo 'Choose PSU';    
                    }
                    }
                    ?>
	</span>
      <div class="selectem_dropdown">
        <input class="selectem-value" name="psu" type="hidden" value="<?php echo $idPSU; ?>">
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
	<input type="text" name="jumlah_psu" class="form-control" placeholder="Jumlah" value="<?php echo $jumPSU; ?>">
	</div>
	<div class="col-sm-2">
	<input type="text" name="harga_psu" class="form-control" placeholder="Harga" value="<?php echo "Rp " . number_format($totPSU, 2, ',', '.'); ?>" readonly="readonly">
	</div>
	</div>
	</div>

	<!--Casing-->
	<div class="form-group">
	<label>&nbsp;Casing : </label>
	<div class="row">
	<div class="col-sm-8">
    <div class=" selectem ">
	<span class="selectem_label">
	<?php
                        $sql="SELECT  * FROM casing WHERE id_casing = '$idCasing'";
                        if (!$result=  mysqli_query($config, $sql)){
                        die('Error:'.mysqli_error($config));
                        }  else {
                        if (mysqli_num_rows($result)> 0){
                        while ($row=  mysqli_fetch_assoc($result)){
						echo $row['nama_casing'];
						$hargaCasing = $row['harga_casing'];
						$totCasing = $jumCasing*$hargaCasing;
						}
                    }  else {
                    echo 'Choose Casing';    
                    }
                    }
                    ?>
	</span>
      <div class="selectem_dropdown">
        <input class="selectem-value" name="casing" type="hidden" value="<?php echo $idCasing; ?>">
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
	<input type="text" name="jumlah_casing" class="form-control" placeholder="Jumlah" value="<?php echo $jumCasing; ?>">
	</div>
	<div class="col-sm-2">
	<input type="text" name="harga_casing" class="form-control" placeholder="Harga" value="<?php echo "Rp " . number_format($totCasing, 2, ',', '.'); ?>" readonly="readonly">
	</div>
	</div>
	</div>
	<div class="form-group">
	<div class="row">
	<div class="col-sm-8">
	</div>
	<div class="col-sm-2">
	<h4>&nbsp;Total Harga : </h4>
	</div>
	<div class="col-sm-2">
	<input type="text" name="total_harga" class="form-control" placeholder="Total Harga" value="<?php $totalHarga=$totCasing+$totGPU+$totMotherboard+$totPSU+$totPenyimpanan+$totRAM+$totProsesor; echo "Rp " . number_format($totalHarga, 2, ',', '.'); ?>" readonly="readonly">
	</div>
	</div>
	</div>
	<div class="modal-footer">
	<button type="button" class="btn btn-default" data-widget="remove"> Close</button>
	<a href="aksi.php?sender=hapus_paket&id_paket=<?php echo $idPaket; ?>" onclick="return confirm('Yakin Hapus Data?')" class="btn btn-danger"><li class="fa fa-trash-o"></li> Hapus</a>
	</div>
                  </div>
              </div>
                   <?php                
                        }
                    }  else {
                    echo '';    
                    }
                    }?> 
          <!-- Default box -->
          <div class="box">
            <div class="box-body">
                               <table id="example1" class="table table-striped dataTable no-footer">
                    <thead>
                      <tr> 
                        <th>#</th>
                        <th>ID Paket</th>
                        <th>Nama Paket</th>
                        <th>Waktu</th>
                        <th>ID User</th>
                        <th>Aksi</th>
                         
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                        $sql="SELECT  * FROM paket ORDER BY id_paket DESC";
                        $no=1;
                        if (!$result=  mysqli_query($config, $sql)){
                        die('Error:'.mysqli_error($config));
                        }  else {
                        if (mysqli_num_rows($result)> 0){
                        while ($row=  mysqli_fetch_assoc($result)){
                    ?>
                    
                        <tr>
                            <td><?php echo $no ;?></td>
                            <td><?php echo $row['id_paket'];?></td>
                            <td><?php echo $row['nama_paket'];?></td>
                            <td><?php echo $row['tanggal'];?></td>
                            <td><?php echo $row['id_user'];?></td>
                            <td>
                                <a href="<?php $_SERVER['SCRIPT_NAME'] ;?>?page=paket&id=<?php echo $row['id_paket'];?>" class="btn btn-info"><li class="fa fa-eye"></li> View</a> 
                                <a href="aksi.php?sender=hapus_paket&id_paket=<?php echo $row['id_paket']; ?>" onclick="return confirm('Yakin Hapus Data?')" class="btn btn-danger"><li class="fa fa-trash-o"></li> Hapus</a> 
                             </td>
                        </tr> 
                            <?php    
                    $no++;                    
                        }
                    }  else {
                    echo '';    
                    }
                    }?>
                    </tbody>
                   
                     
                  </table>
            </div><!-- /.box-body -->
             
          </div><!-- /.box --> 
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->    
<?php include 'theme/footer.php'; ?>