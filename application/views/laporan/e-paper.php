    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Upload e-Paper
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url() ?>"><i class="fa fa-dashboard"></i> Beranda</a></li>
		<li class="active">e-paper</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <?php
if(isset($_SESSION['flash']))
{
    $type = $this->session->flashdata('flash');
    $bg = '';
    $msg = '';

    switch($type){
        case "hapus":
            $bg = "bg-red";
            $msg = "Data berhasil dihapus";
            break;
        case "input":
            $bg = "bg-green";
            $msg = "Data berhasil ditambah";
            break;
        case "edit":
            $bg = "bg-green";
            $msg = "Data berhasil diedit";
            break;
        case "gagal":
            $bg = "bg-red";
            $msg = "Data gagal ditambah";
            break;
    }
    ?>
    <div class="alert <?= $bg ?> alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?= $msg ?>
    </div>
    <?php
}
?>

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Unggah e-Paper disini</h3>
        </div>
        <div class="box-body">
          <form action="" method="post" enctype="multipart/form-data">
			<!-- Date range -->
              <div class="form-group">
                <label>Masukkan Foto</label>

                <div class="input-group">
                  <input type="file" name="foto" class="form-control pull-right" required>
                </div>
                <!-- /.input group -->
              </div>
              <div class="form-group">
                <label>Link Berita</label>

                <div class="input-group">
                  <input type="text" name="link" class="form-control pull-right" required>
                </div>
                <!-- /.input group -->
              </div>
			  <button type="submit" class="btn btn-success" name="submit"><i class="fa fa-print"></i> Simpan</button>
              <!-- /.form group -->
			</form>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
			
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->