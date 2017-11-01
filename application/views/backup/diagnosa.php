<div class="col-md-10 col-md-offset-1">

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Tabel Gejala</h3>
  </div>
    <div id="content">
  <div class="panel-body">
      <div class="well">
        coba userdata :<br>
        <?php 
        echo 'nama :',$this->session->userdata('nama');
        echo '<br> email :',$this->session->userdata('email');
        echo '<br> level :',$this->session->userdata('level');
        echo '<br> is_loggedin :',$this->session->userdata('login');
        ?>
        
      </div>
    <center>
<form method="post" action="terima">
<table border="1px" style="width:100%;">
<tr>
    <th rowspan="2">No</th>
    <th rowspan="2">Nama Gejala</th>
    <th colspan="5" style="border-right:2px solid black;">Checklist</th>
</tr>
<tr>
    <th style="width:98px">Sangat Yakin</th>
    <th style="width:98px">Yakin</th>
    <th style="width:98px">Cukup Yakin</th>
    <th style="width:98px">Sedikit Yakin</th>
</tr>
<?php
        $no = 0;
        foreach($gejala as $g){ 
        $no++;
?>
    
<tr>
    <td><?php echo $no; ?></td>
    <td><?php echo $g->gejala; ?></td>
    <td style="text-align:center;"><input type="checkbox" name="ssy<?php echo $no;?>" value="1"?></td>
    <td  style="text-align:center;"><input type="checkbox" name="y<?php echo $no;?>" value="0.8"?></td>
    <td  style="text-align:center;"><input type="checkbox" name="cy<?php echo $no;?>" value="0.6"?></td>
    <td  style="text-align:center;"><input type="checkbox" name="sy<?php echo $no;?>" value="0.4"?></td>
    
    </tr>
<?php } ?>
        

</table>
</form>
  </div>
</div>
    </center>
    </div>

    
    