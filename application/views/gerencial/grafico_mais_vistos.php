
<script type="text/javascript">
    google.charts.load('current', {'packages': ['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

        var data = google.visualization.arrayToDataTable([
            <?php echo ''.$array.''; ?>
            
        ]);

        var options = {
            title: ''
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
    }
</script>

<section id="container" >
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-sm-12" >

                    <div class="panel panel-default">
                        <!-- Default panel contents -->
                        <div class="panel-heading"><h3> Gráfico Mais Vistos - Top 5 </h3></div>
                        <div class="panel-body">
                            <div class="col-lg-12 col-lg-offset-2">
                                <div id="piechart" style="width: 800px; height: 500px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
</section>
