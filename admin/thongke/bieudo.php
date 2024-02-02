    <article>
            <div class="headline">
                <h2>BIỂU ĐỒ THỐNG KÊ HÀNG HÓA</h2>
            </div>

            <div id="piechart"></div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Danh mục', 'Số lượng sản phẩm'],
  <?php
        $tongdm = count($tksp);
        $i = 1;
        foreach($tksp as $tk){
            extract($tk);
            if($i==$tongdm) $dauphay=""; else $dauphay=",";
            echo "['".$tk['tendm']."', ".$tk['countsp']."]".$dauphay;
            $i+=1;
        }

    ?>
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Thống kê sản phẩm theo danh mục', 'width':750, 'height':500};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>




            <div>
                <a href="index.php?act=thongke"><input type="button" class="btn" style="margin-left:45%;" value="Bảng thống kê"></a>

            </div>
    </article>
</div>





