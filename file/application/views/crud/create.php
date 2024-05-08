<?php $this->load->view('includes/header'); ?>

    <div class="container" style="padding-top: 60px;">
        <div class="col-lg-8" style="margin: auto;">
            
            <div class="d-flex justify-content-between" style="margin-bottom: 30px;">
                <h4>Qeydlər Əlavə Edin</h4>
                <a class="btn btn-warning" href="<?php echo base_url("notes"); ?>"> <i class="fas fa-angle-left"></i>Geri</a>
            </div>

            <form method="post" action="<?php echo base_url('notes/data_crud'); ?>">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Ad</label>
                    <input type="etext" class="form-control" name="ad" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Yazıçı</label>
                    <input type="text" class="form-control" name="yazici" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Təsvir</label>
                    <input type="text" class="form-control" name="tesvir" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Tarix</label>
                    <input type="text" class="form-control" name="tarix" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary">Klik Et</button>
            </form>
        </div>
    </div>


    <?php $this->load->view('includes/footer'); ?>