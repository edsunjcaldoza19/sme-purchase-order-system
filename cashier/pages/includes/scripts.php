    <!-- Custom Java Script for Pages(including Main JS for all pages) -->
    <script src="../../assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="../../assets/js/pages/dashboard.js"></script>
    <script src="../../assets/js/main.js"></script>
    <!-- Choices JS for Customized Select Form Classes -->
    <script src="../../assets/vendors/choices.js/choices.min.js"></script>
    <!-- Sweet Alert -->
    <script src="../../assets/vendors/sweetalert2/sweetalert2.all.min.js"></script>
    <script src="../../assets/js/extensions/sweetalert2.js"></script>
    <!-- DataTable JS -->
    <script src="../../assets/vendors/simple-datatables/simple-datatables.js"></script>
    <!-- Jquery -->
    <script src="../../assets/vendors//jquery/jquery.min.js"></script>
    <!-- Toastify -->
    <script src="../../assets/vendors/toastify/toastify.js"></script>
    <!-- File Pond -->
    <script src="../../assets/vendors/filepond/filepond.js"></script>
    <script src="../../assets/vendors/jquery-print/jQuery.print.js"></script>
    <!-- Chart JS -->
    <script src="../../assets/vendors/chartjs/Chart.min.js"></script>

    <!-- Print PDF -->
	<script>
		$(function(){
			$('#print').on('click', function() {
                $.print(".print_div");
            });
		});
	</script>

    <!-- Datatables -->
    <script>
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>
    <!-- Loader -->
    <script>
        /* Show Realtime Date and Time */
        $(document).ready(function () {
        	showDateTime();
    	});
        function showDateTime(){

            var dt = new Date();

            document.getElementById("datetime").innerHTML = (("0"+(dt.getMonth()+1)).slice(-2)) + "/" + (("0"+dt.getDate()).slice(-2)) + "/" + (dt.getFullYear()) + " | " + (("0" + dt.getHours()).slice(-2)) + ":" + (("0" + dt.getMinutes()).slice(-2)) + ":" + (("0" + dt.getSeconds()).slice(-2));

            setTimeout("showDateTime()", 1000);

        }
        /** Pre Loader */
        setTimeout(function(){
            $('.loader_bg').fadeToggle();
        }, 1500);
    </script>