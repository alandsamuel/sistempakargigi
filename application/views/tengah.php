<?php 
$level = $this->session->userdata('level');

switch($level){

case 'admin' :?>
<div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default">
    <div class="panel-body">

        <a href="index/t_penyakit"><button>Tambah Penyakit</button></a>
        <a href="index/t_gejala"><button>Tambah Gejala</button></a>

<hr>
        <?php 
        $page = $this->uri->segment('3');
        
        switch($page){
        
        case 't_penyakit':
        ?>
        <form method="post" action="<?php echo URL.'index.php/proses/tambah'; ?>">
        <center>
        <div class="kotakadmin">
            <table style="width:100%;text-align:center;">
            <tr>
               <td>Nama Penyakit</td>
               <td> : </td>
               <td><input type="text" name="nama" size="25" placeholder="Masukkan Nama Penyakit"/></td>
            </tr>
            </table>
            <br>
            <input type="text" name="table" value="penyakit" HIDDEN/>
            <input type="submit" value="submit"/>
            <br>
        </div>
        </center>
        </form>
        <?php
        break;
        
                      
        default:?>
        
        
        
        <?php } ?>
    
</div>
</div>

</div>

<?php break;
        
default:?>

<div class="tengahberanda"> 
    <!--<h1><blink><marquee direction="right"> </marquee></blink></h1>-->
<!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" 
    img src="<?php echo base_url(); ?>assets/img/logoinfo.png" height="10px" width="300px"/> 
          <div class="container">
            <div class="carousel-caption">
              <h4>INFORMASI</h4>
              <h5>Menyediakan Informasi Tentang Gigi</h5>
              <p><a class="btn btn-lg btn-primary tombol" href="<?php echo URL.'index.php/home/informasi'; ?>" role="button">Baca</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="first-slide" 
    img src="<?php echo base_url(); ?>assets/img/stes.png" height="10px" width="300px" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h4>DIAGNOSA</h4>
              <h5>Melakukan pemeriksaan awal penyakit gigi</h5>
              <p><a class="btn btn-lg btn-primary tombol" href="<?php echo URL.'index.php/home/login'; ?>" role="button">Periksa</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="first-slide" 
    img src="<?php echo base_url(); ?>assets/img/pesan.png" height="10px" width="300px"/> 
          <div class="container">
            <div class="carousel-caption">
              <h4>Kontak</h4>
              <p>Kirimkan saran dan kritik anda</p>
              <p><a class="btn btn-lg btn-primary tombol" href="<?php echo URL.'index.php/home/kritik'; ?>"role="button">kirim</a></p>
            </div>
          </div>
        </div>
      </div>
    </div><!-- /.carousel -->
</div>

<?php } ?>