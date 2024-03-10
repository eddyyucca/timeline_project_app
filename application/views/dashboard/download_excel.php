<?php
header("Content-type: application/vnd-ms-excel");
$date = date('d-m-Y');
header("Content-Disposition: attachment; filename=Data Activity $date.xls");
?>

<body class="hold-transition sidebar-mini layout-fixed">
	<div class="wrapper">
		<section class="content">
			<div class="container-fluid">
				<div class="card card-default">
					<div class="box">
						<div class="card-body">
							<table border="1">
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
