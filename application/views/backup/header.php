<!DOCTYPE html>

<head>
<title>$title</title>
<link rel="stylesheet" href="<?php echo URL.'assets/css/bootstrap.css'; ?>" />
<link rel="stylesheet" href="<?php echo URL.'assets/css/style.css'; ?>" />
<link rel="stylesheet" href="<?php echo URL.'assets/css/font-awesome.min.css'; ?>" />
<script type="text/javascript" src="<?php echo URL.'assets/js/jQuery.js'; ?>"></script>
<script type="text/javascript" src="<?php echo URL.'assets/js/bootstrap.js'; ?>"></script>

<script>

document.getElementById("penyakit").addEventListener('click', showmodals);
    
function modals(){
    $('#myModal').modal('toggle');
}
    
</script>
</head>

<body>
<div id="gambarAtas">
<nav class="navbar navbar-left menuhome">
  <br> &nbsp; &nbsp;<a href="<?php echo URL.'index.php/home/'; ?>"><i class="fa fa-home fa-fw" aria-hidden="true" style="font-size:35px;color:white;"></i></a> </nav>
    <nav class="navbar navbar-right menuatas">
  <ul class="nav navbar-nav">
    <li><a href="<?php echo URL.'index.php/home/informasi'; ?>"  >Informasi</a></li>
<?php 
$login = $this->session->userdata('login');

switch($login){ 
    case '1': ?>
    <li><a href="<?php echo URL.'index.php/home/gejala'; ?>" >Diagnosa</a></li>
    <li><a href="#">Tentang</a></li>
    <li><a href="<?php echo URL.'index.php/home/kritik'; ?>">Kontak</a></li>
    <li><a href="<?php echo URL.'index.php/Auth/logout'; ?>">Log Out</a></li>

    
<?php break; 
default :?>
    <li><a href="<?php echo URL.'index.php/home/login'; ?>" >Diagnosa</a></li>
    <li><a href="#">Tentang</a></li>
    <li><a href="<?php echo URL.'index.php/home/kritik'; ?>">Kontak</a></li>

<?php } ?>
      
  </ul>
  <p class="navbar-text"></p>
</nav>
    </div>
</body>
    <p style="clear:both;"></p>
    