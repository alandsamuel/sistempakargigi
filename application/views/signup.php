 <div id="tf-login">
     <div class="container">
<div class="section-title">
</div>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4 kotak"><br><br><br>
    <form action="<?php echo URL.'index.php/auth/daftar';?>" method="post">
    <fieldset>
    <legend>Sign Up</legend>
        <input type="text" name="level" value="user" HIDDEN>
        Nama &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:
        <input type="text" name="nama" placeholder="nama"><br>
        <br>
        E-mail &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :
        <input type="text" name="email" placeholder="e-mail"><br><br>
        Username &nbsp; &nbsp; :
        <input type="text" name="username" placeholder="username"><br><br>
        Password &nbsp; &nbsp; &nbsp;:
        <input type="password" name="password" placeholder="password"><br><br>
        Tanggal lahir :
        <input type="date" name="tanggal_lahir"><br><br>

            Jenis Kelamin :
  <input type="radio" name="gender" value="pria" checked> Male
  <input type="radio" name="gender" value="wanita"> Female &nbsp;

        <br>
        <br>
        <?php 
            $notif = '';
            
            if($notif==NULL){
                echo '';
            } else {
                echo $notif;
            }
        ?>
        <center><input type="submit" value="Daftar">
        </fieldset>
        <br></center>
        </form></div>
        <div class="col-md-4"></div>
</div>
         </div>
     </div>
</div>