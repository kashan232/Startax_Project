<script src="/user_panel_assets/dist/js/mainProper.js"></script>
<script src="/user_panel_assets/plugins/jquery/jquery.min.js"></script>
<script src="/user_panel_assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/user_panel_assets/plugins/datatables/jquery.dataTables.js"></script>
<script src="/user_panel_assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<script src="/user_panel_assets/dist/js/adminlte.min.js"></script>
<script src="/user_panel_assets/dist/js/demo.js"></script>
<script src="plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<script src="plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>

<script>
    $(function() {
        $("#example1").DataTable();
        $("#example2").DataTable({
            paging: true,
            lengthChange: false,
            searching: false,
            ordering: true,
            info: true,
            autoWidth: false,
        });
    });
</script>
</body>
</html>