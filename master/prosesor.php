<?php include 'theme/header.php'; ?>

     
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
           
            <li class="active" >
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
           
            <li>
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
             Processor
            
          </h1>
          <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Processor</a></li>
            <li class="active">List Processor</li>
            
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
             
            <!--edit-->
            <?php
            
                        $id=$_GET['id'];
                        $sql="SELECT  * FROM prosesor where id_prosesor='$id' ";
                        
                        if (!$result=  mysqli_query($config, $sql)){
                        die('Error:'.mysqli_error($config));
                        }  else {
                        if (mysqli_num_rows($result)> 0){
                        while ($row=  mysqli_fetch_assoc($result)){
                    ?>
            <div class="box">
            <div class="box-header with-border">
                  Edit Processor 
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
              </div> 
            </div> 
                <form action="aksi.php?sender=edit_prosesor" method="POST" enctype="multipart/form-data">
                  <div class="box-body">
                        <div class="row">
                <div class="col-md-12 form-group">
                    <label>ID</label>
                    <input readonly="" type="text" name="id_prosesor" value="<?php echo $row['id_prosesor'];?>" class="form-control" placeholder="Enter..." required="">
                    </div>  
                <div class="col-md-12 form-group">
                    <label>Nama</label>
                    <input type="text" name="nama_prosesor" value="<?php echo $row['nama_prosesor'];?>" class="form-control" placeholder="Enter..." required="">
                    </div>  
                <div class="col-md-12 form-group">
                    <label>Harga</label>
                    <input type="text" name="harga_prosesor" value="<?php echo $row['harga_prosesor'];?>" class="form-control" placeholder="Enter..." required="">
                    </div>  
                <div class="col-md-12 form-group">
                    <label>Brand</label>
                    <input type="text" name="brand_prosesor" value="<?php echo $row['brand_prosesor'];?>" class="form-control" placeholder="Enter..." required="">
                    </div> 
                <div class="col-md-12 form-group">
                    <label>Soket</label>
                    <input type="text" name="soket_prosesor" value="<?php echo $row['soket_prosesor'];?>" class="form-control" placeholder="Enter..." required="">
                    </div>  
                <div class="col-md-12 form-group">
                    <label>Gambar</label><br>
					<img src="images/prosesor/<?php echo $row['gambar_prosesor'];?>" height="100px">
                    <input type="file" name="gambar_prosesor">
					<i style="float: left;font-size: 11px;color: red">Abaikan jika tidak merubah gambar produk.</i>
                    </div>  
                
                 <div class="col-md-12 form-group"> 
                   <button type="submit" class="btn btn-primary btn-flat pull-right"><span class="fa fa-send"></span> Simpan</button>
                 </div>
                </div> 
                  </div></form>
              </div>
                   <?php                
                        }
                    }  else {
                    echo '';    
                    }
                    }?> 
          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title"> <a href="#" data-toggle="modal" data-target="#my-modal1" class="btn btn-info"><li class="fa fa-plus"></li> Tambah</a></h3>
              <div class="box-tools pull-right">
                 </div>
            </div>
            <div class="box-body">
                               <table id="example1" class="table table-striped dataTable no-footer">
                    <thead>
                      <tr> 
                        <th>#</th>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Brand</th>
                        <th>Soket</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                         
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                        $sql="SELECT  * FROM prosesor ORDER BY id_prosesor DESC";
                        $no=1;
                        if (!$result=  mysqli_query($config, $sql)){
                        die('Error:'.mysqli_error($config));
                        }  else {
                        if (mysqli_num_rows($result)> 0){
                        while ($row=  mysqli_fetch_assoc($result)){
                    ?>
                    
                        <tr>
                            <td><?php echo $no ;?></td>
                            <td><?php echo $row['id_prosesor'];?></td>
                            <td><?php echo $row['nama_prosesor'];?></td>
                            <td><?php echo "Rp " . number_format($row['harga_prosesor'], 2, ',', '.');?></td>
							<td><?php echo $row['brand_prosesor'];?></td>
							<td><?php echo $row['soket_prosesor'];?></td>
                            <td><img src="images/prosesor/<?php echo $row['gambar_prosesor'];?>" height="100px"></td>
                            <td>
                                <a href="<?php $_SERVER['SCRIPT_NAME'] ;?>?page=prosesor&id=<?php echo $row['id_prosesor'];?>" class="btn btn-info"><li class="fa fa-pencil"></li> Edit</a> 
                                <a href="aksi.php?sender=hapus_prosesor&id_prosesor=<?php echo $row['id_prosesor']; ?>" onclick="return confirm('Yakin Hapus Data?')" class="btn btn-danger"><li class="fa fa-trash-o"></li> Hapus</a> 
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
      
      
      
      <!-- Bootstrap Modal - To Add New Record -->
<!-- Modal -->
<form action="aksi.php?sender=prosesor" method="POST" enctype="multipart/form-data">
<div class="modal fade" id="my-modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
       
<div class="modal-content">
<div class="modal-header">

<h4 class="modal-title" id="myModalLabel">Tambah Processor</h4>
</div>
   
<div class="modal-body center"> 
 <!--Content-->
 
    <div class="form-group">
      <label>Nama</label>
      <input type="text" name="nama_prosesor" class="form-control" required="" placeholder="Enter ...">
    </div>
	<div class="form-group">
      <label>Harga</label>
      <input type="text" name="harga_prosesor" class="form-control" required="" placeholder="Enter ...">
    </div>
	<div class="form-group">
      <label>Brand</label>
      <input type="text" name="brand_prosesor" class="form-control" required="" placeholder="Enter ...">
    </div>
	<div class="form-group">
      <label>Soket</label>
      <input type="text" name="soket_prosesor" class="form-control" required="" placeholder="Enter ...">
    </div>
	<div class="form-group">
      <label>Gambar</label>
      <input type="file" name="gambar_prosesor" required="">
	  <i style="float: left;font-size: 11px;color: red">Ekstensi gambar yang boleh hanya jpg atau png.</i>
    </div>
	
 
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal"> Close</button>
<button type="submit" class="btn btn-info"> Simpan</button> 
  
</div>
   
</div>
</div>
</div>
</form>

      <!-- Content Wrapper. Contains page content -->
      
     
<?php include 'theme/footer.php'; ?>