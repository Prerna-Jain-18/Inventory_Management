</div>
</div>
<!-- *************
************ Main container end *************
************* -->
</div>
<!-- Required jQuery first, then Bootstrap Bundle JS -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/modernizr.js"></script>
<script src="js/moment.js"></script>

<!-- *************
        ************ Vendor Js Files *************
************* -->

<!-- Megamenu JS -->
<script src="vendor/megamenu/js/megamenu.js"></script>
<script src="vendor/megamenu/js/custom.js"></script>

<!-- Slimscroll JS -->
<script src="vendor/slimscroll/slimscroll.min.js"></script>
<script src="vendor/slimscroll/custom-scrollbar.js"></script>
<!-- Data Tables -->
<script src="vendor/datatables/dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap.min.js"></script>

<!-- Date Range JS -->
<script src="vendor/daterange/daterange.js"></script>
<script src="vendor/daterange/custom-daterange.js"></script>

<!-- Custom Data tables -->
<script src="vendor/datatables/custom/custom-datatables.js"></script>
<script src="vendor/datatables/custom/fixedHeader.js"></script>

<!-- Search Filter JS -->
<script src="vendor/search-filter/search-filter.js"></script>
<script src="vendor/search-filter/custom-search-filter.js"></script>



<!-- Download / CSV / Copy / Print -->
<script src="vendor/datatables/buttons.min.js"></script>
<script src="vendor/datatables/jszip.min.js"></script>
<script src="vendor/datatables/pdfmake.min.js"></script>
<script src="vendor/datatables/vfs_fonts.js"></script>
<script src="vendor/datatables/html5.min.js"></script>
<script src="vendor/datatables/buttons.print.min.js"></script>


<!-- Apex Charts -->
<!--<script src="vendor/apex/apexcharts.min.js"></script>
<script src="vendor/apex/custom/home/salesGraph.js"></script>
<script src="vendor/apex/custom/home/ordersGraph.js"></script>
<script src="vendor/apex/custom/home/earningsGraph.js"></script>
<script src="vendor/apex/custom/home/visitorsGraph.js"></script>
<script src="vendor/apex/custom/home/customersGraph.js"></script>
<script src="vendor/apex/custom/home/sparkline.js"></script>-->

<!-- Circleful Charts -->
<!--<script src="vendor/circliful/circliful.min.js"></script>
<script src="vendor/circliful/circliful.custom.js"></script>-->


<!-- Input Mask JS -->
<script src="vendor/input-masks/cleave.min.js"></script>
<script src="vendor/input-masks/cleave-phone.js"></script>
<script src="vendor/input-masks/cleave-custom.js"></script>
<!-- Main Js Required -->
<script src="js/main.js"></script>


<script>
    var file_name = location.pathname.split('/').slice(-1)[0];
    $("a[href='" + file_name + "']").addClass("current-page");
    $("a[href='" + file_name + "']").parents(".tab-pane").addClass('show active');
    var tab_name = $("a[href='" + file_name + "']").parents(".tab-pane").attr('aria-labelledby');
    $('a#' + tab_name).addClass('active');

</script>
</body>

</html>