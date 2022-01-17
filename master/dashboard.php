<?php
	include 'theme/header.php'; 
	include '../koneksi.php';
	$result1 = mysqli_query($config, "SELECT * from casing");
	$data1 = mysqli_num_rows($result1);
	$result2 = mysqli_query($config, "SELECT * from gpu");
	$data2 = mysqli_num_rows($result2);
	$result3 = mysqli_query($config, "SELECT * from motherboard");
	$data3 = mysqli_num_rows($result3);
	$result4 = mysqli_query($config, "SELECT * from penyimpanan");
	$data4 = mysqli_num_rows($result4);
	$result5 = mysqli_query($config, "SELECT * from prosesor");
	$data5 = mysqli_num_rows($result5);
	$result6 = mysqli_query($config, "SELECT * from psu");
	$data6 = mysqli_num_rows($result6);
	$result7 = mysqli_query($config, "SELECT * from ram");
	$data7 = mysqli_num_rows($result7);
	$result8 = mysqli_query($config, "SELECT * from paket");
	$data8 = mysqli_num_rows($result8);
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
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-blue">
                <div class="inner">
                  <h3><?php echo $data1; ?></h3>
                  <p>Casing</p>
                </div>
                <div class="icon">
                  <i class="ion ion-cube"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3><?php echo $data2; ?></h3>
                  <p>GPU</p>
                </div>
                <div class="icon">
                  <i class="ion ion-monitor"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3><?php echo $data3; ?></h3>
                  <p>Motherboard</p>
                </div>
                <div class="icon">
                  <i class="ion ion-clipboard"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3><?php echo $data4; ?></h3>
                  <p>Penyimpanan</p>
                </div>
                <div class="icon">
                  <i class="ion ion-speedometer"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
          </div><!-- /.row -->
		  <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3><?php echo $data5; ?></h3>
                  <p>Processor</p>
                </div>
                <div class="icon">
                  <i class="ion ion-load-d"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-orange">
                <div class="inner">
                  <h3><?php echo $data6; ?></h3>
                  <p>PSU</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-purple">
                <div class="inner">
                  <h3><?php echo $data7; ?></h3>
                  <p>RAM</p>
                </div>
                <div class="icon">
                  <i class="ion ion-easel"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-lime">
                <div class="inner">
                  <h3><?php echo $data8; ?></h3>
                  <p>Paket</p>
                </div>
                <div class="icon">
                  <i class="ion ion-laptop"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
          </div><!-- /.row -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
     
<?php include 'theme/footer.php'; ?>