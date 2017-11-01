 <?php foreach($edit as $e){ ?>

<div id="tf-login">
     <div class="container">
<div class="section-title">
</div>
<div class="row">
    <div class="col-md-4 col-md-offset-4 kotak"><br><br><br>
    <form action="<?php echo URL.'index.php/admin/terimaupdate/user/'.$e->id_user;?>" method="post">
    <fieldset>
    <legend>Edit Data User</legend>
        Nama &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:
        <input type="text" name="nama" placeholder="nama" value="<?php echo $e->nama; ?>"><br>
        <br>
        E-mail &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :
        <input type="text" name="email" placeholder="e-mail" value="<?php echo $e->email; ?>"><br><br>
        Username &nbsp; &nbsp; :
        <input type="text" name="username" placeholder="username" value="<?php echo $e->username; ?>"><br><br>
        Password &nbsp; &nbsp; &nbsp;:
        <input type="password" name="password" placeholder="password" value="<?php echo $e->password; ?>"><br><br>
        Tanggal lahir :
        <input type="date" name="tanggal_lahir" value="<?php echo $e->tanggal_lahir; ?>"><br><br>

            Jenis Kelamin :
        <?php if($e->jenis_kelamin=='pria') { ?>
      <input type="radio" name="jenis_kelamin" value="pria" checked> Pria
      <input type="radio" name="jenis_kelamin" value="wanita"> Wanita &nbsp;
        <?php } else { ?>
        <input type="radio" name="jenis_kelamin" value="pria" checked> Pria
        <input type="radio" name="jenis_kelamin" value="wanita"> Wanita &nbsp;
        <?php } ?>
        <br><br>
        Level :
        <?php if($e->level=='admin'){ ?>
        <select name="level">
        <option value="admin" SELECTED>Admin</option>
        <option value="user">User</option>
        </select>
        <?php } else { ?>
        <select name="level">
        <option value="admin">Admin</option>
        <option value="user" SELECTED>User</option>
        </select>
        <?php } ?>
        

        <br>
        <br>
        
        <center><input type="submit" value="Edit">
        </fieldset>
        <br></center>
        </form></div>
        
</div>
         </div>
     </div>
</div>

<?php } ?>