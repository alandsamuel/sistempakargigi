<div id="tf-contact">
        <div class="container">
            <div class="section-title">
                <h4 style="color:rgb(47, 147, 123);">Kirimkan kritik dan saran anda disini, terima kasih.</h4>
                <p></p>
                <hr>
            </div>

            <div class="space"></div>

            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <form id="contact" method="post" action="<?php echo URL;?>index.php\home\kritiksaran">
                      <div class="form-group">
                        <input type="text" class="form-control"  name="nama" placeholder="Masukkan Nama Anda" value="<?php echo $this->session->userdata('nama'); ?>">
                        </div>
                        
                      <div class="form-group">
                        <input type="email" name="email" class="form-control"  placeholder="Masukkan Email Anda">
                      </div>
                        
                      <div class="form-group">
                        <textarea class="form-control" name="kritiksaran" rows="4" placeholder="Masukkan Kritik dan Saran"></textarea>
                      </div>
                        
                        <?php 
                        if ($notif==0){ echo '<p style="color:green;">Masukkan Data-data anda!</p>'; 
                        } else if($notif==1){
                        echo '<p style="color:green;">Data Berhasil Di Masukkan</p>';} else {
                        echo '<p style="color:red;">Data Gagal Di Masukkan</p>';} ?>
                      <button type="submit" class="btn btn-primary my-btn dark">Submit</button><br>
                        
                        <p style="color:green;"> Kontak yang bisa dihubungi; <br>
                        <i class="fa fa-phone" aria-hidden="true" ></i> : 087747442279<br>
                            <i class="fa fa-envelope" aria-hidden="true"></i> : fanidyac@yahoo.co.id</p>
                    </form>
                </div>
            </div>
        </div>
</div>
