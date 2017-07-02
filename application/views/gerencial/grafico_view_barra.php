
 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
   <script type="text/javascript">
     google.charts.load('current', {packages: ['corechart','bar']});     
   </script>

<script language="JavaScript">
function drawChart() {
   // Define the chart to be drawn.
   var data = google.visualization.arrayToDataTable([
      ['Mês', 'Açucar União', 'Leite Mimosa', 'Massa Parati', 'Leite Condensado Moça', ' Quero Ervilha'],
            ['Julho',  900, 789, 1020, 659, 352]
      ]);

   var options = {
      title: 'Produtos',
      bars: 'horizontal'	  
   };  

   // Instantiate and draw the chart.
   var chart = new google.charts.Bar(document.getElementById('containerr'));
   chart.draw(data, options);
}
google.charts.setOnLoadCallback(drawChart);
</script>


<section id="container" >
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-sm-12" >

                    <div class="panel panel-default">
                        <!-- Default panel contents -->
                        <div class="panel-heading"><h3> Gráfico de vizualisação dos anúncios - Top 5 </h3></div>
                        <div class="panel-body">
                            <div class="col-lg-10 col-lg-offset-2">
                                <div id="containerr" style="width: 800px; height: 500px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
</section>