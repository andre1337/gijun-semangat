<style>
* {
  box-sizing: border-box;
}

#myVideo {
  position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: -100;
}

.responsive{
  position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}
.content {
  position: fixed;
  bottom: 0;
  background: rgba(0, 0, 0, 0.5);
  color: #f1f1f1;
  width: 100%;
  padding: 20px;
}

</style>
</head>

<video autoplay muted loop id="myVideo" class="responsive">
  <source src="video/g2.mp4" type="video/mp4">
</video>
    
<div class="slider-area">
    <div class="slider-wrapper owl-carousel">

        <div class="slider-item text-center home-one-slider-otem slider-item-four">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="slider-content-area">
                            <div class="slide-text">
                                <h1 class="homepage-three-title font">Welcome  <span style="color: red;"><?php echo $_SESSION['username']; ?></span> to <span style="color: red;">PT. Sebastian Jaya Metal</span></h1>
                                <h2>PT. Sebastian Jaya Metal adalah perusahaan yang memproduksi <br> komponen kendaraan bermotor roda dua & empat. </h2>
                                <div class="slider-content-btn">
                                    <a class="btn11" href="index.php?halaman=About">Baca Lebih Lanjut<div class="transition"></div></a>
                                    <a class="btn11" href="index.php?halaman=Contact">Kontak<div class="transition"></div></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-item text-center home-one-slider-otem slider-item-four slider-bg-two">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="slider-content-area">
                            <div class="slide-text">
                                <h1 class="homepage-three-title font">Welcome  <span style="color: blue;"><?php echo $_SESSION['username']; ?></span> to <span style="color: blue;">PT. Sebastian Jaya Metal</span></h1>
                                <h2>PT. Sebastian Jaya Metal adalah perusahaan yang memproduksi <br> komponen kendaraan bermotor roda dua & empat. </h2>
                                <div class="slider-content-btn">
                                    <a class="btn11" href="index.php?halaman=About">Baca Lebih Lanjut<div class="transition"></div></a>
                                    <a class="btn11" href="index.php?halaman=Contact">Kontak<div class="transition"></div></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>