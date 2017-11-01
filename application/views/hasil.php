<div class="row">
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Hasil Pengecekan! </h3>
    </div>
  <div class="panel-body">
<p style="color:black;">
<?php if(count($hasil)>0) { ?>
    
<?php foreach($hasil as $d) { ?>
    <hr>
    <br>
    <center>
    <h2 style="color:black;">Hasil Dari User : <?php echo $d->nama; ?></h2>
    </center>
    <br>
    <hr>
    <br>
    <ul>
        <h4 style="color:black;">Nama : <?php echo $d->nama; ?></h4>
        <h4 style="color:black;">Jenis Kelamin : <?php echo $this->session->userdata('jkel'); ?></h4>
         <h4 style="color:black;">Tanggal Lahir : <?php echo $this->session->userdata('lahir'); ?></h4>
        <h4 style="color:black;">Penyakit : <?php echo $d->penyakit;?> </h4>
        <h4 style="color:black;">Pilihan Gejala : <?php echo $d->pil;?></h4>
        <h4 style="color:black;">Nilai CF : <?php echo $d-> nilaicf;?> || <?php echo $d->nilaicf*100;?>% </h4>
    </ul>
      
<?php } ?>

<?php } else { echo 'Maaf Data Yang Dicari Tidak Ada !'; } ?>
        <hr>
       
                  </div>
        </div>
</div>
    </div>
    <center> 
    <a href="<?php echo URL;?>/index.php/home/diagnosa/" style="color:white;"><span class="fa fa-backward" aria-label="Kembali"></span> | <b>Kembali</b><br></a><a href="<?php echo URL.'index.php/topdf/download/riwayat/id_riwayat/'.$d->id_riwayat;?>"> <button class="btn btn-default">Download</button> </a> 
    </center>
    <br>
    </div>
                
