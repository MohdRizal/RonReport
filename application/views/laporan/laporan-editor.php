    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Unduh Laporan
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url() ?>"><i class="fa fa-dashboard"></i> Beranda</a></li>
		<li class="active">Laporan Editor</li>
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
          <form action="" method="post" target="_blank">
			<!-- Date range -->
              <div class="form-group">
                <label>Date range:</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" name="tanggal" class="form-control pull-right" id="reservation">
                </div>
                <!-- /.input group -->
              </div>
			  <div class="form-group">
                <label>Pilihan laporan:</label>
                <select name="pilihan" class="form-control">
					<option value="1">Jumlah Saja</option>
					<option value="2">Jumlah dan Daftar Berita</option>
				</select>
                <!-- /.input group -->
              </div>
			  <button type="submit" class="btn btn-success" name="submit"><i class="fa fa-print"></i> Cetak</button>
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