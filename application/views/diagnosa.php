    <div id="tf-diagnosa">
        <div class="container">
            <div class="section-title">
            </div>

            <div class="space"></div>

            <div class="row">
                <div class="col-md-5 col-md-offset-4">
                    <form id="contact" method="post" action="<?php echo URL;?>index.php\Process\hitung">
                    <table style="width:100%">
                        <tr>
                            <h4 style="color:rgb(47, 147, 123);">Hai , <u><?php echo $this->session->userdata('nama'); ?></u></h4>
                            <!-- for testing purpose only -->
                            <!-- <h4>id , <u><?php echo $this->session->userdata('id'); ?></u></h4> -->
                            <!-- for testing purpose only -->
                            <h4 style="color:rgb(47, 147, 123);">Centang gejala yang sedang anda alami</h4>
                            <hr>
                            <table style="margin:20px auto; size=100%;" border="1">
                        <tr style="border:1px solid black;">
                            <th style="text-align:center;padding:10px;">No</th>
                            <th style="text-align:center;padding:10px;">Nama Gejala</th>
                            <th style="text-align:center;padding:10px;">Checklist</th>
                        </tr>
                    
                        <?php
                        $no = 0;
                        foreach($gejala as  $q) {
                        $no++;?>
                      <div class="form-group">
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td style="text-align:left"><?php echo $q->gejala;?></td>
                            <td><input type="checkbox" name="gejala[]" value="<?php echo $no;?>"?></td>
                        </tr>
                      </div>
                        <?php } ?>
                    </table>
                        <hr>
                        <button type="submit" class="btn btn-primary my-btn dark">Periksa</button><br>
                        
                    </form>
                                
                    
                    <br>
                    
            </div>
        </div>
            <div class="space"></div>
                <div class="row">
                <div class="col-md-7 col-md-offset-3">
  
                    <form id="contact" method="post" action="">
                   <table style="margin:20px auto; size=100%;" border="1">
                        <tr style="border:1px solid black;">
                            <h4 style="color:rgb(47, 147, 123);">Riwayat Hasil Diagnosa</h4>
                            <hr>
                            <th style="text-align:center;padding:10px;">No</th>
                            <th style="text-align:center;padding:10px;">Nama</th>
                            <th style="text-align:center;padding:10px;">Tanggal Diagnosa</th>
                            <th style="text-align:center;padding:10px;">Penyakit</th>
                            <th style="text-align:center;padding:10px;">Nilai CF</th>
                        </tr>
                <?php
                       $no = 0;
                       foreach($riwayat as $r){ $no++;
                       $cf = $r->nilaicf*100;?>
                       <tr>
                       <td><?php echo $no;?></td>
                        <td style="text-align; padding-left:10px"><?php echo $r->nama; ?></td>
                        <td style="text-align; padding-left:10px"><?php echo $r->tanggal; ?></td>
                        <td style="text-align; padding-left:10px"><?php echo $r->penyakit; ?></td> 
                        <td style="text-align; padding-left:10px"><?php echo $cf.'%'; ?></td>
                        </tr>
                       <?php } ?>
                        </table>
                        <?php 
                    echo $this->pagination->create_links();
                    ?>
                    </form>
                    
                    <br>    <br>
                        </div>
                    </div>
</div>
    </div>
        
</div>

                