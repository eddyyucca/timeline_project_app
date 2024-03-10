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
								<li class="breadcrumb-item active">Form Input</li>
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

						<div class="card-body">
							<div class="row">
								<div class="col-md-12">
									<form action="<?= base_url('dashboard/proses_tambah_activity')  ?>" method="POST"
										enctype="multipart/form-data">
										<div class="form-group">
											<label>Tanggal</label>
											<div class="input-group date" id="reservationdate" data-target-input="nearest">
												<input type="text" name="tanggal" class="form-control datetimepicker-input"
													data-target="#reservationdate" />
												<div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
													<div class="input-group-text"><i class="fa fa-calendar"></i></div>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label>Start Time</label>
											<div class="input-group date" name="s_time" id="timepicker" data-target-input="nearest">
												<input type="text" name="s_time" class="form-control datetimepicker-input"
													data-target="#timepicker" />
												<div class="input-group-append" data-target="#timepicker" data-toggle="datetimepicker">
													<div class="input-group-text"><i class="far fa-clock"></i></div>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label>Category</label>
											<select class="form-control select2" name="category" style="width: 100%;">
												<option selected="selected">--Pilih Category--</option>
												<option value="FMS On Board">FMS On Board</option>
												<option value="FMS Network">FMS Network</option>
												<option value="Network Infrastructure">Network Infrastructure</option>
												<option value="Radio Communication">Radio Communication</option>
												<option value="IT Operation">Operation</option>
												<option value="IT Project & Improvment">Project & Improvment</option>
												<option value="Other">Other</option>
											</select>
										</div>

										<div class="form-group">
											<label>Detail</label>
											<div class="form-group">
												<textarea class="form-control" name="detail" id="exampleFormControlTextarea1"
													rows="3"></textarea>
											</div>
										</div>

										<div class="form-group">
											<label>Status</label>
											<select class="form-control select2" name="status" style="width: 100%;">
												<option selected="selected">--Pilih Status--</option>
												<option value="Open">Open</option>
												<option value="Close">Close</option>
												<option value="On Hold">On Hold</option>
												<option value="Cancel">Cancel</option>
												<option value="Reject">Reject</option>
											</select>
										</div>
										<div class="form-group">
											<label>Finish Time</label>
											<div class="input-group date" name="f_time" id="timepicker2" data-target-input="nearest">
												<input type="text" class="form-control datetimepicker-input" name="f_time"
													data-target="#timepicker2" />
												<div class="input-group-append" data-target="#timepicker2" data-toggle="datetimepicker">
													<div class="input-group-text"><i class="far fa-clock"></i></div>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label>PIC</label>
											<select class="form-control select2" name="pic" style="width: 100%;">
												<option selected="selected">--Pilih Status--</option>
												<?php foreach ($karyawan as $kar) { ?>
                                        <option value="<?= $kar->nama ?>"><?= $kar->nama ?> | <?= $kar->nik ?></option>
                                        <?php } ?>
											</select>
										</div>

										<div class="form-group">
											<label>Remark</label>
											<div class="form-group">
												<textarea class="form-control" name="remark" id="exampleFormControlTextarea1"
													rows="3"></textarea>
											</div>
										</div>
										<div class="form-group">
											<button class="btn btn-primary">Simpan</button>
										</div>
										</from>
								</div>
							</div>
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
