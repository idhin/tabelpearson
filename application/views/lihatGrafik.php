<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Data Responden</title>
<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
        <link href="<?= base_url(); ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?= base_url(); ?>assets/plugins/font-awesome/css/all.min.css" rel="stylesheet">
        <link href="<?= base_url(); ?>assets/plugins/waves/waves.min.css" rel="stylesheet">
        <link href="<?= base_url(); ?>assets/plugins/nvd3/nv.d3.min.css" rel="stylesheet">

        <link href="<?= base_url(); ?>assets/css/alpha.min.css" rel="stylesheet">
        <link href="<?= base_url(); ?>assets/css/custom.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript">

$(function () {
	$('#container').highcharts({
		chart: {
			plotBackgroundColor: null,
			plotBorderWidth: null,
			plotShadow: false
		},
		title: {
			text: 'Data Responden'
		},
		tooltip: {
			pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
		},
		plotOptions: {
			pie: {
				allowPointSelect: true,
				cursor: 'pointer',
				dataLabels: {
					enabled: true,
					format: '<b>{point.name}</b>: {point.percentage:.1f} %',
					style: {
						color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
					}
				}
			}
		},
		series: [{
			type: 'pie',
			name: 'Persentase Jawaban',
			data: [
					<?php 
					// data yang diambil dari database
					if(count($graph)>0)
					{
					   foreach ($graph as $data) {
					   echo "['" .$data->jawaban . "'," . $data->nilai ."],\n";
					   }
					}
					?>
			]
		}]
	});
});
 
</script>
</head>

<div class="page-content">

<div class="container-fluid">

<!-- Awal Isi -->
<div class="card">
                                <div class="card-body">
<div id="container"></div>
 
                            <!-- Akhir Isi -->
</div>
</div>


</div>
</div>
    </div>
</div>

</div>