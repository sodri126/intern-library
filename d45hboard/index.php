<?php
include "../php/connection/connection.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <!-- App title -->
        <title>International Library & Lounge </title>

        <!-- date range picker -->
        <link href="../plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

        <!-- DataTables -->
        <link href="../plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <link href="../plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../plugins/datatables/dataTables.colVis.css" rel="stylesheet" type="text/css"/>
        <link href="../plugins/datatables/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../plugins/datatables/fixedColumns.dataTables.min.css" rel="stylesheet" type="text/css"/>


        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="../plugins/switchery/switchery.min.css">

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="assets/js/modernizr.min.js"></script>

    </head>


    <body class="fixed-left">

        <!-- Loader -->
        <div id="preloader">
            <div id="status">
                <div class="spinner">
                  <div class="spinner-wrapper">
                    <div class="rotator">
                      <div class="inner-spin"></div>
                      <div class="inner-spin"></div>
                    </div>
                  </div>
                </div>
            </div>
        </div>

        <!-- Begin page -->
        <div id="wrapper">

        <?php include "layouts/header.php" ?>
            

            <?php include "layouts/menubar.php" ?>
           



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                <?php

                if(empty($_GET['page'])){

                    if ($_GET['page'] == '' || $_GET['page'] == 'home'){

                        $page = $_GET['page'];

                        include 'pages/home.php';

                        // if ($page == 'master') {
                        //     // include 'pages/home.php';
                        //     echo "Testing";
                        // }

                    } 

                    
                } else {

                    $page = $_GET['page'];

                    // if($page == 'data-book') {
                    //     include 'pages/data-book.php';
                    // } else if($page == 'purchase') {
                    //     include 'pages/data-book.php';
                    // }
                    if($page == "$page") {
                        include "pages/$page.php";
                    } 
                }
                    

                ?>
                        


                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    2018 © <a href="#">International Library & Lounge.</a> 
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->



        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="../plugins/switchery/switchery.min.js"></script>

        <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="../plugins/datatables/dataTables.bootstrap.js"></script>

        <script src="../plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="../plugins/datatables/buttons.bootstrap.min.js"></script>
        <script src="../plugins/datatables/jszip.min.js"></script>
        <script src="../plugins/datatables/pdfmake.min.js"></script>
        <script src="../plugins/datatables/vfs_fonts.js"></script>
        <script src="../plugins/datatables/buttons.html5.min.js"></script>
        <script src="../plugins/datatables/buttons.print.min.js"></script>
        <script src="../plugins/datatables/dataTables.fixedHeader.min.js"></script>
        <script src="../plugins/datatables/dataTables.keyTable.min.js"></script>
        <script src="../plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="../plugins/datatables/responsive.bootstrap.min.js"></script>
        <script src="../plugins/datatables/dataTables.scroller.min.js"></script>
        <script src="../plugins/datatables/dataTables.colVis.js"></script>
        <script src="../plugins/datatables/dataTables.fixedColumns.min.js"></script>

        <!-- init -->
        <script src="assets/pages/jquery.datatables.init.js"></script>

        <!-- Counter js  -->
        <script src="../plugins/waypoints/jquery.waypoints.min.js"></script>
        <script src="../plugins/counterup/jquery.counterup.min.js"></script>

        <!-- Flot chart js -->
        <script src="../plugins/flot-chart/jquery.flot.min.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.time.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.tooltip.min.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.resize.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.pie.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.selection.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.crosshair.js"></script>

        <script src="../plugins/moment/moment.js"></script>
        <script src="../plugins/bootstrap-daterangepicker/daterangepicker.js"></script>


        <!-- Dashboard init -->
        <script src="assets/pages/jquery.dashboard_2.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <script>
            $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
            $('#reportrange').daterangepicker({
                format: 'MM/DD/YYYY',
                startDate: moment().subtract(29, 'days'),
                endDate: moment(),
                minDate: '01/01/2012',
                maxDate: '12/31/2016',
                dateLimit: {
                    days: 60
                },
                showDropdowns: true,
                showWeekNumbers: true,
                timePicker: false,
                timePickerIncrement: 1,
                timePicker12Hour: true,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                opens: 'left',
                drops: 'down',
                buttonClasses: ['btn', 'btn-sm'],
                applyClass: 'btn-success',
                cancelClass: 'btn-default',
                separator: ' to ',
                locale: {
                    applyLabel: 'Submit',
                    cancelLabel: 'Cancel',
                    fromLabel: 'From',
                    toLabel: 'To',
                    customRangeLabel: 'Custom',
                    daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                    monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    firstDay: 1
                }
            }, function (start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            });
            $(document).ready(function () {
                //$('table').dataTable();
                $("#tablelend").DataTable();
                $('#datatable-keytable').DataTable({keys: true});
                $('#datatable-responsive').DataTable();
                $('#datatable-colvid').DataTable({
                    "dom": 'C<"clear">lfrtip',
                    "colVis": {
                        "buttonText": "Change columns"
                    }
                });
                $('#datatable-scroller').DataTable({
                    ajax: "../plugins/datatables/json/scroller-demo.json",
                    deferRender: true,
                    scrollY: 380,
                    scrollCollapse: true,
                    scroller: true
                });
                var table = $('#datatable-fixed-header').DataTable({fixedHeader: true});
                var table = $('#datatable-fixed-col').DataTable({
                    scrollY: "300px",
                    scrollX: true,
                    scrollCollapse: true,
                    paging: false,
                    fixedColumns: {
                        leftColumns: 1,
                        rightColumns: 1
                    }
                });
            });
            TableManageButtons.init();
        </script>

        <?php
            if ($_GET['page'] == "purchase") {
        ?>
        <script type="text/javascript">
        $(document).ready(function() {
            var dataRow = [];
            Array.prototype.sum = function (prop) {
                var total = 0
                for ( var i = 0, _len = this.length; i < _len; i++ ) {
                    total += this[i][prop]
                }
                return total
            };
            var buttonAction = '<a class="btn btn-warning waves-effect waves-light btn-sm">Edit</a>&nbsp;<a class="btn btn-danger waves-effect waves-light btn-sm delete-row">Delete</a>';
            $("input[name=radio_type]").change(function() {
                var valRadio = $("input[name=radio_type]:checked").val();
                if (valRadio == "loan") {
                    $("#form-book").append('<div class="form-group"> <label class="col-md-2 control-label">Due date</label><div class="col-md-10"><select class="form-control" name="due_date" required><option value="1">One day</option> <option value="2">Two day</option><option value="3">Three day</option></select></div></div>');
                } else {
                    $("#form-book .form-group").last().remove();
                }
            });

            $(document).on("click", ".delete-row" ,function() {
                var rowId = $(this).parent().parent().attr("data-id");
                console.log(rowId);
                //deleteRow(rowId);
                $(this).parent().parent().remove();
            });

            // function deleteRow(var rowId) {
            //     for(int i = 0; i < dataRow.length; i++) {
            //         if (dataRow[rowId].productId == rowId) {
            //             delete dataRow[rowId];
            //             $("#total-price").text("Total Price: Rp. "+dataRow.sum("subPrice"));
            //         }
            //     }
            // }
            $("#addpurchase").click(function() {
                if ($("#book").hasClass("active")) {
                    var bookId = $("#book_id").val();
                    var valRadio = $("input[name=radio_type]:checked").val();
                    var valDueDate = valRadio == "loan" ? $("#due_date option:selected").text() +"|"+ $("#due_date").val():"-";
                    $.ajax({
                        url:"response/choose_book.php",
                        type:"GET",
                        dataType:"json",
                        data: {"id": bookId},
                        success: function(result) {
                            var price = valRadio == "loan" ? 5000 : result.price;
                            var quantityBook = $("#quantity_book").val();
                            var subPriceBook = valRadio == "loan" ? valDueDate.split("|")[1] * price:quantityBook * result.price;
                            data = {
                                productId: bookId,
                                productName: result.b_name,
                                quantity: quantityBook,
                                price: result.price,
                                subPrice: subPriceBook,
                                typeTransaction: valRadio,
                                dueDate: valDueDate,
                                action: buttonAction
                            };
                            dataRow.push(data);
                            var htmlTr = '<tr data-id="'+data.productId+'"><td>'+ data.productId +'</td><td>'+ data.productName  +'</td><td>'+ data.quantity +'</td><td>'+ price +'</td><td>'+ data.subPrice +'</td><td>'+ data.typeTransaction.charAt(0).toUpperCase() + data.typeTransaction.slice(1) +'</td><td>'+ data.dueDate.split("|")[0] +'</td><td>'+ data.action+'</td></tr>';
                            $("#table-transaction tbody").append(htmlTr);  
                            $("#total-price").text("Total Price: Rp. "+dataRow.sum("subPrice"));
                        }
                    });
                } else {
                    var bevId = $("#bev_id").val();
                    $.ajax({
                        url:"response/choose_beverage.php",
                        type:"GET",
                        dataType:"json",
                        data: {"id": bevId},
                        success: function(result) {
                            var quantityBev = $("#quantity_bev").val();
                            var subPriceBev = quantityBev * result.price;
                            data = {
                                productId: bevId,
                                productName: result.bev_name,
                                quantity: quantityBev,
                                price: result.price,
                                subPrice: quantityBev * result.price,
                                typeTransaction: 'Buy',
                                dueDate: '-',
                                action: buttonAction
                            };
                            dataRow.push(data);
                            var htmlTr = '<tr><td>'+ data.productId +'</td><td>'+ data.productName  +'</td><td>'+ data.quantity +'</td><td>'+ data.price +'</td><td>'+ data.subPrice +'</td><td>'+ data.typeTransaction+'</td><td>'+ data.dueDate +'</td><td>'+ data.action+'</td></tr>';
                            $("#table-transaction tbody").append(htmlTr);
                            $("#total-price").text("Total Price: Rp. "+dataRow.sum("subPrice"));
                        }
                    });
                }
            });

            $("#submit_purchase").click(function() {
                var trxTransaction = $("#trx_text").text();
                var userId = $("#member").val() == "none" ? null:$("#member").val();

                $.ajax({
                        url:"process/purchase-process.php",
                        type:"POST",
                        dataType:"json",
                        data: {
                            transactionHeader: trxTransaction,
                            userId: userId,
                            transactionDetail: dataRow
                        },
                        success: function(result) {
                        }
                    });
            });
            
        });
        </script>
        <script src="../plugins/select2/js/select2.min.js"></script>
        <script src="../plugins/bootstrap-select/js/bootstrap-select.min.js"></script>
        <script src="../plugins/multiselect/js/jquery.multi-select.js"></script>
        <script src="../plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js"></script>
        <script src="../plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js"></script>
        <script src="../plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
        <script src="assets/pages/jquery.form-advanced.init.js"></script>
        <?php
            } else if($_GET['page'] == "lend-book") {
        ?>
        <script type="text/javascript">
            $(document).ready(function() {
                
            });
        </script>
        <?php
            }
        ?>

    </body>
</html>