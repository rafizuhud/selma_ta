<main class="co-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    </div>
    <div class="alert alert-danger">
   

<div id = "grafik5">

</div>

<script src="<?= base_url(); ?>public/lib/highchart/code/highcharts.js"></script>

<script>

<?php
        $total = 0;
        for ($i = 0; $i < count($grafik); $i++){
        
            $total = $total + (int)$grafik[$i]['jumlah'];
        }
    ?>
    

    // Data retrieved from https://gs.statcounter.com/browser-market-share#monthly-202201-202201-bar

// Create the chart
Highcharts.chart('grafik5', {
    chart: {
        type: 'column'
    },
    title: {
        align: 'center',
        text: 'Grafik Total Pendapatan Masing - Masing Bank '
    },
    subtitle: {
        align: 'center',
        text: 'Jumlah Pendapatan <?= $total ?> '
    },
    accessibility: {
        announceNewData: {
            enabled: true
        }
    },
    xAxis: {
        type: 'category'
    },
    yAxis: {
        title: {
            text: 'Total Pendapatan (RP)'
        }

    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y}'
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b> of total<br/>'
    },

    series: [
        {
            name: "Nama Bank",
            colorByPoint: true,
            data: [
                <?php foreach($grafik as $s):?>
                    {
                        name: '<?= $s['nama_bank']; ?>',
                        y: <?= $s['jumlah']; ?>
                    },
                    <?php endforeach?>
            ]
        }
    ]
});
</script>
    
</main>

