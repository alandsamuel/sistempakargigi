 <div id="tf-admin">
     <div class="container">
<div class="section-title">
</div>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-9">
    <h1 style="color:black;">Welcome Admin!</h1>
        <br>

    <div class="panel panel-default trans">
  <div class="panel-body">
      <a href="<?php echo URL; ?>index.php/admin/page/lihatgejala" class="btn btn-default btn-sm"><b>Hapus Gejala</b></a> 
  <a href="<?php echo URL; ?>index.php/admin/page/lihatpenyakit" class="btn btn-default btn-sm"><b>Hapus Penyakit</b></a>
  <a href="<?php echo URL; ?>index.php/admin/page/tambahgejala" class="btn btn-default btn-sm"><b>Tambah Gejala</b></a>
<a href="<?php echo URL; ?>index.php/admin/page/tambahpenyakit" class="btn btn-default btn-sm"><b>Tambah Penyakit</b></a>
<a href="<?php echo URL; ?>index.php/admin/page/lihatsaran" class="btn btn-default btn-sm"><b>Hapus Saran</b></a>
<a href="<?php echo URL; ?>index.php/admin/page/lihatmember" class="btn btn-default btn-sm"><b>Hapus User</b></a>
   
    <?php

    $page = $_GET['page'];
    
    switch($page){
            
        case 'lihatgejala': ?>

  <!-- Start Gejala -->      
  <table style="width:100%;border:1px black solid" class="wow fadeIn" data-wow-delay="0.2s">
  <tr style="border:1px solid black;">
      <th style="text-align:center;">No</th>
      <th style="text-align:center;">Nama Gejala</th>
      <th style="text-align:center;">Edit</th>
  </tr>
  <?php 
  $no = 0;
  foreach($gejala as $g){ $no++;?>
  <tr>
      <td><?php echo $no;?></td>
      <td style="text-align:left; padding-left:10px"><?php echo $g->gejala; ?></td>
     <td><?php echo anchor('admin/hapus/gejalapenyakit/'.$g->id_gejala,'Hapus');?></td>
  </tr>
  <?php } ?>
  </table>
  <!-- End Gejala -->
      
  <!-- Start Penyakit -->
  <?php break; 
        case 'lihatpenyakit' : ?>
  <table style="width:100%;border:1px black solid" class="wow fadeIn" data-wow-delay="0.2s">
  <tr style="border:1px solid black;">
      <th style="text-align:center;">No</th>
      <th style="text-align:center;">Nama Penyakit</th>
      <th style="text-align:center;">Edit</th>
  </tr>
  <?php 
  $no = 0;
  foreach($penyakit as $p){ $no++;?>
  <tr>
      <td><?php echo $no;?></td>
      <td style="text-align:left; padding-left:10px"><?php echo $p->namapenyakit; ?></td>
    <td><?php echo anchor('admin/hapus/penyakit/'.$p->id_penyakit,'Hapus');?></td>
  </tr>
  <?php } ?>
  </table>
  <!-- End Penyakit -->

<!-- Start Saran -->
<?php break; 
case 'lihatsaran' : ?>
<table style="width:100%;border:1px black solid" class="wow fadeIn" data-wow-delay="0.2s">
  <tr style="border:1px solid black;">
      <th style="text-align:center;">No</th>
      <th style="text-align:center;">Nama</th>
      <th style="text-align:center;">E-mail</th>
      <th style="text-align:center;">Saran</th>
      <th style="text-align:center;">Edit</th>
  </tr>
     <?php 
  $no = 0;
  foreach($saran as $s){ $no++;?>
  <tr>
<td><?php echo $no;?></td>
<td style="text-align:left; padding-left:10px"><?php echo $s->nama; ?></td>
<td style="text-align:left; padding-left:10px"><?php echo $s->email; ?></td>
<td style="text-align:left; padding-left:10px"><?php echo $s->kritik; ?></td>
<td><?php echo anchor('admin/hapus/saran/'.$s->id_saran,'Hapus');?></td>
  </tr>
  <?php } ?>
  </table>
      

      <!-- Start Member -->
<?php break; 
case 'lihatmember' : ?>
<table style="margin:20px auto; size=100%;" border="1" class="wow fadeIn" data-wow-delay="0.2s">
  <tr style="border:1px solid black;">
      <th width="50px" style="text-align:center;">No</th>
      <th style="text-align:center;">Username</th>
      <th width="180px" style="text-align:center;">Nama</th>
      <th style="text-align:center;">E-mail</th>
      <th width="100px" style="text-align:center;">Tanggal Lahir</th>
      <th width="150px" style="text-align:center;">Jenis Kelamin</th>
      <th style="text-align:center;">Level</th>
      <th style="text-align:center;" colspan="2">aksi</th>
  </tr>
     <?php 
  $no = 0;
  foreach($user as $u){ $no++;?>
  <tr>
<td><?php echo $no;?></td>
<td style="text-align:left; padding:4px"><?php echo $u->username; ?></td>
<td style="text-align:left; padding:4px"><?php echo $u->nama; ?></td>
<td style="text-align:left; padding:4px"><?php echo $u->email; ?></td>
<td style="text-align:left; padding:4px"><?php echo $u->tanggal_lahir; ?></td>
<td style="text-align:center; padding:4px"><?php echo $u->jenis_kelamin; ?></td>
<td style="text-align:left; padding:4px"><?php echo $u->level; ?></td>
<td><?php echo anchor('admin/update/user/id_user/'.$u->id_user,'Edit');?></td>
      <td><?php echo anchor('admin/hapus/user/'.$u->id_user,'Hapus');?></td>

  </tr>
  <?php } ?>
  </table>
    
      
  <?php break; 
        case 'tambahgejala' : ?>
  <?php //if($this->uri->segment(4)==0) { echo 'Data Berhasil Di Masukkan'; } else { echo 'Error';} ?>
  <form method="post" action="<?php echo URL; ?>index.php/Process/inputgejala" style="text-align:left;">
      <label for="namagejala">Nama Gejala :</label>
      <input type="" name="namagejala" size="45"/>
      <br><br>
      <label for="penyakit">Dari Penyakit :</label>
      <select name="penyakit">
        <?php foreach($penyakit as $p) { ?>
          <option value="<?php echo $p->id_penyakit;?>"><?php echo $p->namapenyakit;?></option>
        <?php } ?>
      </select>
      <br><br>
      <label for="cfpakar">Nilai CF Pakar :</label>
      <input name="cf_pakar" type="number" size="5" step="0.01"/>
      <br><br>
      <input type="submit" value="submit"/>
  </form>
    
  <?php break; 
        case 'tambahpenyakit' : ?>
  <?php //if($this->uri->segment(4)==0) { echo 'Data Berhasil Di Masukkan'; } else { echo 'Error';} ?>     
  <form method="post" action="<?php echo URL; ?>index.php/Process/inputpenyakit" style="text-align:left;">
      <label for="namapenyakit">Nama Penyakit :</label>
      <input type="text" name="namapenyakit" size="45"/>
      <br><br>
      <input type="submit" value="submit"/>
  </form>
  <?php break;
        default: ?>
      
  <?php } ?>
  </div>
    
</div>
        <div class="col-md-2"></div>
    </div>
    </div>
</div>
     </div>
