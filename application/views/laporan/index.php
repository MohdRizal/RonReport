<section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
<!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?= number_format($total_berita['total']) ?></h3>

              <p>Total Berita</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?= number_format($total_berita_bulan['total']) ?></h3>

              <p>Total Berita Bulan Ini</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3 id="hit"><?= number_format($total_hit['total']) ?></h3>

              <p>Total Hit</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3 id="hit_bulanan"><?= number_format($total_hit_bulan['total']) ?></h3>

              <p>Total Hit Berita Bulan Ini</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row banner -->
	  
	  <!-- TABLE: ARTIKEL PALING HIT -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">5 Artikel RiauOnline paling hit</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>Judul</th>
					<th>Waktu Tayang</th>
                    <th>Total Hit</th>
                  </tr>
                  </thead>
                  <tbody>
					<?php $no = 1; foreach($artikel_hit as $a): ?>
					<tr>
						<td><?= $no ?></td>
						<td><a href="https://riauonline.co.id/<?= $a['alias'] ?>" target="_blank"><?= $a['title'] ?></a></td>
						<td><?= tanggal_waktu($a['publish_date']) ?></td>
						<td><?= number_format($a['total_hit']) ?></td>
					</tr>
					<?php $no++; endforeach; ?>
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box artikel paling hit-->
		  
	  <!-- TABLE: ARTIKEL PALING HIT -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">5 Artikel RiauOnline bulan <?= bulan(date('m')) ?> paling hit</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>Judul</th>
					<th>Waktu Tayang</th>
                    <th>Total Hit</th>
                  </tr>
                  </thead>
                  <tbody>
					<?php $no = 1; foreach($artikel_hit_bulan as $a): ?>
					<tr>
						<td><?= $no ?></td>
						<td><a href="https://riauonline.co.id/<?= $a['alias'] ?>" target="_blank"><?= $a['title'] ?></a></td>
						<td><?= tanggal_waktu($a['publish_date']) ?></td>
						<td><?= number_format($a['total_hit']) ?></td>
					</tr>
					<?php $no++; endforeach; ?>
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box artikel paling hit-->

	  </section>