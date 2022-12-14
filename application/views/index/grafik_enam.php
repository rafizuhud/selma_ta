<main class="co-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    </div>
    <div class="alert alert-danger">
     

<div id = "prodi6">

</div>

<script src="<?= base_url(); ?>public/lib/highchart/code/highcharts.js"></script>

<script>
    

    // Data retrieved from https://netmarketshare.com/
    // Build the chart
    Highcharts.chart('prodi6', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Grafik Pendaftar Berdasarkan Status Pembayaran'
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        categories: [
            'BCA',
            'BNI',
            'BRI',
            'MANDIRI'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Pendaftar berdasarkan Bank'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y} Pendaftar</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'LUNAS',
        data: [
                <?php for($x = 0 ; $x < 4 ; $x++ ){

                    echo $grafik[$x]['jumlah'];
                    echo ",";

                }

                ?>
                ]

    }, {
        name: 'BELUM LUNAS',
        data: [

            <?php for($x = 4 ; $x < 8 ; $x++ ){

                echo $grafik[$x]['jumlah'];
                echo ",";

}

?>

        ]

    }]
});
</script>
</main>

