<div class="karies">
<article>
<?php foreach($info as $i){ ?>
    <!--judul -->
    <br>
    <h1><?php echo $i->judul; ?></h1>
    <br>
    <hr>
    <br>
    <h3><?php echo $i->apaitu; ?></h3>
    <!-- isi -->
    <div class='info'>
        <h5><?php echo nl2br($i->teori); ?></h5>
        <br>
        
        <h5><?php echo $i->penyebab; ?></h5>
        </div></div>
    
<?php } ?>
    
    <center>
<?php 
//cek yang tersedia gambar atau ylink    
if($i->ylink != NULL)
{ ?>
<iframe width="300" height="180" src="https://www.youtube.com/embed/<?php echo $i->ylink; ?>?ecver=1" frameborder="0" allowfullscreen>
</iframe>
<? php 
} 
    else
{ ?>

<?php }
if($i->img != NULL)
{ ?>
<br><img src='<?php echo IMG.$i->img; ?>' width="300" height="180"/>
<? php 
} 
    else
{ ?>

<?php } ?>   
<br>
<br>
        <hr>
 </center>
</article>
</div>