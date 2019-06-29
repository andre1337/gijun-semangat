<nav class="navbar navbar-expand-sm bg-dark navbar-dark" style="height:70px;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse">
    <div class="social-box">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="https://id-id.facebook.com/PTSJM/" target="_blank" style="color: white; font-size: 20px;"><i class="fa fa-facebook-square" title="facebook"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://www.instagram.com/ptsebastianjayametal/" target="_blank" style="color: white; font-size: 20px;"><i class="fa fa-instagram" aria-hidden="true" title="instagram"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://id.linkedin.com/company/pt-sebastian-jaya-metal" target="_blank" style="color: white; font-size: 20px;"><i class="fa fa-linkedin-square" aria-hidden="true" title="linedin"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://twitter.com/sjm_jb" target="_blank" style="color: white; font-size: 20px;"><i class="fa fa-twitter-square" aria-hidden="true" title="twitter"></i></a>
      </li>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <li class="nav-item">
        <?php
        if(!isset($_SESSION['id']))
          { ?>
        <a class="nav-link" href="http://www.gmail.com" title="email" target="_blank" style="color: white; font-size: 17px;"><i class="fa fa-envelope-o" aria-hidden="true"></i> info@sebastianjayametal.com</a>
        <?php }
          else { ?>
        <a class="nav-link" href="http://www.gmail.com" title="email" target="_blank" style="color: white; font-size: 17px;"><i class="fa fa-envelope-o" aria-hidden="true"></i> itjb.sjm@gmail.com</a>
        <?php } ?>
      </li>
      <li class="nav-item">
        <?php
        if(!isset($_SESSION['id']))
          { ?>
        <a class="nav-link" href="#" style="color: white; font-size: 17px;"><i class="fa fa-phone" aria-hidden="true"></i> (021) 8984 3516</a>
        <?php }
          else { ?>
        <a class="nav-link" href="#" style="color: white; font-size: 17px;"><i class="fa fa-phone" aria-hidden="true"> IT</i> (085) 6711 5593 </a>
        <?php } ?>
      </li>    
    </ul>
  </div>
  </div>  
</nav>

<nav class="navbar navbar-expand-sm" style="height:100px; color: white;">
  <a href="index.php?halaman=Trouble" class="button button1" title="Kembali">Kembali</a>
  <a class="navbar-nav ml-auto" href="index.php"><img src="images/logos/logo.png" alt="image"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</nav>