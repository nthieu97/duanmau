<?php
  require_once'../libs/thongke.php';
  $chart = count_product_cate();
  $comm = pro_comment_max();
?>
</div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?=ROOT?>admin/logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>
  <!-- san pham co nhieu comment nhat -->
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Tên sản phẩm', 'Số lượt comment'],
          <?php
            foreach ($comm as $com){
              echo "['$com[tensanpham]',  '$com[socomment]']";
            };
          ?>

          ]);

        var options = {
          title: 'Lengths of dinosaurs, in meters',
          legend: { position: 'none' },
        };

        var chart = new google.visualization.Histogram(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
  <!-- GOogle_chart_js -->
        <script type="text/javascript">
          google.charts.load("current", {packages:["corechart"]});
          google.charts.setOnLoadCallback(drawChart);
          function drawChart() {
            var data = google.visualization.arrayToDataTable([
              ['Loại', 'Số Lượng'],
                <?php
                foreach ($chart as $c){
                    echo "['$c[name]',     $c[soluong]],";
                }
                ?>
            ]);

            var options = {
              title: 'TỶ LỆ HÀNG HÓA',
              is3D: true,
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
            chart.draw(data, options);
          }
        </script>

  <!-- Bootstrap core JavaScript-->
  <script src="resource/vendor/jquery/jquery.min.js"></script>
  <script src="resource/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="resource/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="resource/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="resource/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="resource/js/demo/chart-area-demo.js"></script>
  <script src="resource/js/demo/chart-pie-demo.js"></script>
  
  <!-- Page level plugins -->
  <script src="resource/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="resource/vendor/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Page level custom scripts -->
<script src="resource/js/demo/datatables-demo.js"></script>

</body>

</html>