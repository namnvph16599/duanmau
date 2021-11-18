
  <div id="piechart"></div>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
  // Load google charts
  google.charts.load('current', {
    'packages': ['corechart']
  });
  google.charts.setOnLoadCallback(drawChart);

  // Draw the chart and set the chart values
  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ['Loại', 'Số lượng'],
      <?php
      foreach ($items as $item) {
        echo "['$item[ten_loai]', $item[so_luong]],";
      }
      ?>
    ]);

    // Optional; add a title and set the width and height of the chart
    var options = {
      'title': 'Biểu đồ hàng hóa',
      is30: true
    };

    // Display the chart inside the <div> element with id="piechart"
    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
    chart.draw(data, options);
  }
</script>

<button class="btn btn-default"><a href="index.php">Xem chi tiết</a></button>
