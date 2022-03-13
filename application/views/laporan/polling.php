    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Polling RiauOnline
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url() ?>"><i class="fa fa-dashboard"></i> Beranda</a></li>
		<li class="active">Polling</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Pilih tanggal dan klik cetak</h3>
        </div>
        <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                  <th>No</th>
                  <th>Pertanyaan</th>
                  <th>Tanggal Tayang</th>
                  <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
              <?php $no = 1; foreach($polling as $p): ?>
                <tr>
                  <td><?= $no ?></td>
                  <td><?= $p['judul']  ?></td>
                  <td><?= $p['mulai'] ?> s/d <?= $p['akhir'] ?></td>
                  <td>
                  
                  </td>
                </tr>
              <?php $no++; endforeach; ?>
            </tfoot>
        </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
			
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->

    <!-- /.content -->
<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Tambah Polling</h4>
      </div>
      <form class="form-horizontal" action="<?= base_url('polling/tambah') ?>" method="post" enctype="multipart/form-data">
      <div class="modal-body">
        <div class="form-group">
            <label for="judul" class="col-sm-10">Pertanyaan</label>

            <div class="col-sm-12">
            <textarea name="judul" id="judul" class="form-control" cols="30" rows="10" required></textarea>
            </div>
        </div>
        <!-- Date and time range -->
        <div class="form-group">
          <label>Waktu Polling</label>

          <div class="input-group">
            <div class="input-group-addon">
              <i class="fa fa-clock-o"></i>
            </div>
            <input type="text" class="form-control pull-right" id="reservationtime">
          </div>
          <!-- /.input group -->
        </div>
        <!-- /.form group -->

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal" aria-label="Close">Batal</button>
        <button type="submit" class="btn btn-info pull-right">Simpan</button>
      </div>
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->