<body class="hold-transition sidebar-mini layout-fixed">
	<div class="wrapper">

		<!-- Preloader -->
		<div class="preloader flex-column justify-content-center align-items-center">
			<img class="animation__shake" src="<?= base_url('assets/') ?>dist/img/AdminLTELogo.png" alt="AdminLTELogo"
				height="60" width="60">
		</div>

		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-white navbar-light">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a href="<?= base_url('dashboard') ?>" class="nav-link">Home</a>
				</li>
			</ul>
		</nav>
		<!-- /.navbar -->
		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<div class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
						</div><!-- /.col -->
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="<?= base_url('Dashboard') ?>">Home</a></li>
								<li class="breadcrumb-item active">Laporan Activity</li>
							</ol>
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.container-fluid -->
			</div>
			<!-- /.content-header -->

			<!-- Main content -->
			<section class="content">
				<div class="container-fluid">

					<div class="card card-default">
						<div class="card-header">
							<h3 class="card-title">Input Activity</h3>
							<div class="card-tools">
								<button type="button" class="btn btn-tool" data-card-widget="collapse">
									<i class="fas fa-minus"></i>
								</button>
								<button type="button" class="btn btn-tool" data-card-widget="remove">
									<i class="fas fa-times"></i>
								</button>
							</div>
						</div>
						<div class="box">
							<div class="card-body">
								<a href="<?= base_url('laporan/download_excel') ?>" class="btn btn-primary">Download Excel</a>
								<a href="<?= base_url('laporan/download_excel') ?>" class="btn btn-primary">Activity Sub-Section</a>
								<hr>
								<table id="example1" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>No</th>
											<th>Date</th>
											<th>Start Time</th>
											<th>Category</th>
											<th>Task Detail</th>
											<th>Status</th>
											<th>Finish Time</th>
											<th>Duration</th>
											<th>PIC</th>
											<th>Remark</th>
										</tr>
									</thead>
									<tbody>
										<?php
                        $nomor = 1;
                        foreach ($data as $x) { ?>
										<tr>
											<td><?= $nomor++; ?></td>
											<td><?= $x->tanggal; ?></td>
											<td><?= $x->s_time; ?></td>
											<td><?= $x->category; ?></td>
											<td><?= $x->detail; ?></td>
											<td><?= $x->status; ?></td>
											<td><?= $x->f_time; ?></td>
											<td><?= $x->durasi; ?></td>
											<td><?= $x->pic; ?></td>
											<td><?= $x->remark; ?></td>
										</tr>
										<?php   } ?>
									<tfoot>
										<tr>
											<th>No</th>
											<th>Date</th>
											<th>Start Time</th>
											<th>Category</th>
											<th>Task Detail</th>
											<th>Status</th>
											<th>Finish Time</th>
											<th>Duration</th>
											<th>PIC</th>
											<th>Remark</th>
										</tr>
									</tfoot>
									</tbody>
								</table>
							</div>
						</div>
						<!-- /.Left col -->
						<!-- right col (We are only adding the ID to make the widgets sortable)-->
						<section class="col-lg-5 connectedSortable">
							<!-- solid sales graph -->
							<!-- /.card -->
						</section>
						<!-- right col -->
					</div>
					<!-- /.row (main row) -->
				</div><!-- /.container-fluid -->
			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->
