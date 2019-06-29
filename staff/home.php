        <!-- /. NAV SIDE  -->
        <div id="content-wrapper">

          <div class="container-fluid">

            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
              <li class="breadcrumb-item">Home</li>
              <li class="breadcrumb-item active">Home <?php echo $level ?></li>
            </ol>
            <div class="row">
              <!-- Welcome -->
              <div class="col-lg-12">
              <div class="alert alert-info">        
                <i class="fa fa-folder-open"></i><b>&nbsp;Hello ! </b>Welcome Back <b><?php include ('status.php');?></b>
              </div>
              <div class="alert alert-danger">
                <p align="center">
                    <?php
                    date_default_timezone_set('Asia/Jakarta');
                    echo "<b>Login hari ini: </b>" . date('l')."<br>";
                    echo date("d-M-Y | H:i:s");
                    ?>
                </p>
              </div>
              </div>
              <!--end  Welcome -->
            </div>
          </div>
     </div>              
    