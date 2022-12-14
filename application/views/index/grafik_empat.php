<main class="co-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    </div>
    <div class="alert alert-danger">
    

<div id = "grafik4">

</div>

<script src="<?= base_url(); ?>public/lib/highchart/code/highcharts.js"></script>

<script>
    

    // Data retrieved from https://netmarketshare.com/
    // Build the chart
    Highcharts.chart('grafik4', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Grafik Pendaftar Berdasarkan Jalur Masuk'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.y}</b>'
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: false
                },
                showInLegend: true
            }
        },
        series: [{
            name: 'Pendaftar',
            colorByPoint: true,
            data: [
                <?php foreach($grafik as $s):?>
                    {
                        name: '<?= $s['nama_jalur']; ?>',
                        y: <?= $s['jumlah']; ?>
                    },
                    <?php endforeach?>
            ]
        }]
    });
</script>
    </div>
    
</main>

