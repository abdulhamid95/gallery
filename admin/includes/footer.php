  </div>
    <!-- /#wrapper -->
    <script src="js/dropzone.js"></script>
     <!-- Text Editor Textera     -->
  <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <!-- <script>tinymce.init({selector:'textarea'});</script> -->

</body>
<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Views',     <?php echo $session->count; ?>],
          ['Users',      <?php echo User::count_all(); ?>],
          ['Photos',  <?php echo Photo::count_all(); ?>],
          ['Comments', <?php echo Comment::count_all(); ?>],
          ['Sleep',    7]
        ]);

        var options = {
          title: 'My Daily Activities'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>

</html>
