<!-- content-wrapper ends
<!-- partial:partials/_footer.html -->
<footer class="footer fixed-bottom">
    <div class="d-sm-flex justify-content-center justify-content-sm-between">
    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © Balai Penelitian Agroklimat dan Hidrologi 2022 </span>
    </div>
</footer>
<!-- partial -->
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<link rel="stylesheet" href="https://unpkg.com/@tabler/icons@latest/iconfont/tabler-icons.min.css">
<!-- plugins:js -->
<script src="<?php echo base_url() ?>assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="<?php echo base_url() ?>assets/vendors/chart.js/Chart.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/datatables.net/jquery.dataTables.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
<script src="<?php echo base_url() ?>assets/js/dataTables.select.min.js"></script>

<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="<?php echo base_url() ?>assets/js/off-canvas.js"></script>
<script src="<?php echo base_url() ?>assets/js/hoverable-collapse.js"></script>
<script src="<?php echo base_url() ?>assets/js/template.js"></script>
<script src="<?php echo base_url() ?>assets/js/settings.js"></script>
<script src="<?php echo base_url() ?>assets/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="<?php echo base_url() ?>assets/js/dashboard.js"></script>
<script src="<?php echo base_url() ?>assets/js/Chart.roundedBarCharts.js"></script>
<!-- End custom js for this page-->
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.3.1.js'?>"></script>
<!-- MDBootstrap Datatables  -->
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/addons/datatables.min.js"></script>
<!-- SweetAlert -->
<script src="<?php echo base_url() ?>assets/js/sweet-alert/sweetalert2.all.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/myscript.js"></script>
<!-- Datepicker -->
<script src="<?= base_url(); ?>assets/vendors/daterangepicker/moment.min.js"></script>
<script src="<?= base_url(); ?>assets/vendors/daterangepicker/daterangepicker.min.js"></script>

<script src="<?= base_url(); ?>assets/vendors/datatables/responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url(); ?>assets/vendors/datatables/responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url(); ?>assets/vendors/gijgo/js/gijgo.min.js"></script>

<script src="<?= base_url(); ?>assets/vendors/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url(); ?>assets/vendors/datatables/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url(); ?>assets/vendors/datatables/buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url(); ?>assets/vendors/datatables/buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url(); ?>assets/vendors/datatables/jszip/jszip.min.js"></script>
<script src="<?= base_url(); ?>assets/vendors/datatables/pdfmake/pdfmake.min.js"></script>
<script src="<?= base_url(); ?>assets/vendors/datatables/pdfmake/vfs_fonts.js"></script>
<script src="<?= base_url(); ?>assets/vendors/datatables/buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url(); ?>assets/vendors/datatables/buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url(); ?>assets/vendors/datatables/buttons/js/buttons.colVis.min.js"></script>
<script src="<?= base_url(); ?>assets/vendors/datatables/responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url(); ?>assets/vendors/datatables/responsive/js/responsive.bootstrap4.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
            var table = $('#dataTable').DataTable({
                buttons: ['copy', 'csv', 'print', 'excel', 'pdf'],
                dom: "<'row px-2 px-md-2 pt-2'<'col-md-3'l><'col-md-5 text-center mt-2'B><'col-md-4'f>>" +
                    "<'row'<'col-md-12'tr>>" +
                    "<'row px-2 px-md-4 py-3'<'col-md-5'i><'col-md-7'p>>",
                lengthMenu: [
                    [25, 50, 100, -1],
                    [25, 50, 100, "All"]
                ],
                columnDefs: [{
                    targets: -1,
                    orderable: false,
                    searchable: false
                }]
            });

            table.buttons().container().appendTo('#dataTable_wrapper .col-md-5:eq(0)');
        });
</script>

</body>

</html> -->