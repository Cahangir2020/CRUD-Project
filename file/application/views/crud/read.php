<?php $this->load->view('includes/header'); ?>

    <div class="container" style="padding: 40px 0">
        
        <table class="table">
            <thead>
                <tr>
                <th >#</th>
                <th >Ad</th>
                <th >Yazıçı</th>
                <th >Təsvir</th>
                <th >Tarix</th>
                </tr>
            </thead>
            <tbody>

            <?php $i = 1; foreach ($data as $post) { ?>

              <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $post->ad; ?></td>
                <td><?php echo $post->yazici; ?></td>
                <td><?php echo $post->tesvir; ?></td>
                <td><?php echo $post->tarix; ?></td>

                <td>
                  <a href="<?= base_url('notes/add/' . $post->id) ?>" class="btn btn-primary"> <i class="fas fa-edit"></i> Əlavə Et </a>
                  <a href="<?= base_url('notes/edit/' . $post->id) ?>" class="btn btn-primary"> <i class="fas fa-edit"></i> Redaktə Et </a>
                  <a href="<?= base_url('notes/delete/' . $post->id) ?>" class="btn btn-danger" onclick="return confirm('Siz bu məlumatları silmək istəyirsiniz ?')"> <i class="fas fa-trash"></i> Sil </a>
                </td>
              

              </tr>

            <?php $i++; } ?>

          </tbody>
        </table>
    </div>


<?php $this->load->view('includes/footer'); ?>