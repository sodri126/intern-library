<div class="row">
        <div class="col-xs-12">
            <div class="page-title-box">
                <h4 class="page-title">Lend Book </h4>
                <ol class="breadcrumb p-0 m-0">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li class="active">
                        Lend Book
                    </li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- end row -->
    <?php
    if (isset($_SESSION['error_code'])) {
        if ($_SESSION['error_code'] == "success") {
        ?>
        <div class="alert alert-success alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <strong>Well done!</strong> You successfully return book
            message.
        </div>
        <?php
        } else {
        ?>
        <div class="alert alert-danger alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <strong>Failed!</strong> You are not successfully return book
            again.
        </div>
        <?php
        }
        unset($_SESSION['error_code']);
    }
    ?>
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box table-responsive">
                <h4 class="m-t-0 header-title"><b>Data Lend Book</b></h4>
                <br>
                <table class="table table-striped table-colored table-info" id="tablelend">
                    <thead>
                    <tr>
                        <th>Transaction ID</th>
                        <th>Full Name</th>
                        <th>Transaction Date</th>
                        <th>Action</th>
                    </tr>
                    </thead>


                    <tbody>
                    <?php
                    $rs = $conn->query("SELECT `a`.*,`b`.`transaction_detail_id`, `d`.`f_name`, `d`.`l_name`, `c`.`transaction_loan_status` FROM `transaction_header` `a` INNER JOIN `transaction_detail` `b` ON `a`.`transaction_header_id` = `b`.`transaction_header_id` INNER JOIN `transaction_loan` `c` ON `b`.`transaction_detail_id` = `c`.`transaction_detail_id` INNER JOIN `profile` `d` ON `d`.`user_id` = `a`.`user_id`");
                    foreach($rs as $data):
                    ?>
                        <tr>
                            <td><?php echo $data['transaction_header_id']; ?></td>
                            <td><?php echo $data['f_name']." ".$data['l_name']; ?></td>
                            <td><?php echo $data['transaction_date']; ?></td>
                            <td>
                                <?php
                                    if ($data['transaction_loan_status'] == 'loan') {
                                ?>
                                    <a class="btn btn-primary waves-effect waves-light btn-sm" data-toggle="modal" data-target=".viewDetailModal">View Detail</a>
                                    <!-- viewDetailModal Modal -->

                                    <div class="modal fade viewDetailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">View detail lend book</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="table-responsive">
                                                    <table class="table table-striped m-b-0">
                                                        <thead>
                                                            <tr>
                                                                <th>Book ID</th>
                                                                <th>Book Name</th>
                                                                <th>Due Date</th>
                                                                <th>Price</th>
                                                                <th>Sub price</th>
                                                                <th>Status book</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                                $rs_table = $conn->query("SELECT `c`.`book_id`, `c`.`b_name`, `b`.`transaction_loan_due_date`, `b`.`transaction_loan_status`,`b`.`transaction_loan_id`  FROM `transaction_detail` `a` INNER JOIN `transaction_loan` `b` ON `a`.`transaction_detail_id` = `b`.`transaction_detail_id` INNER JOIN book `c` ON `a`.`book_id` = `c`.`book_id` WHERE `a`.`transaction_detail_id` =".$data['transaction_detail_id']."");
                                                                $sumPrice = 0;
                                                                foreach($rs_table as $dt):
                                                                $sumPrice += ($dt['transaction_loan_due_date'] * 5000);
                                                            ?>
                                                            <tr>
                                                                <td><?php echo $dt['book_id']; ?></td>
                                                                <td><?php echo $dt['b_name']; ?></td>
                                                                <td><?php echo $dt['transaction_loan_due_date'] ?></td>
                                                                <td>Rp. 5.000,-</td>
                                                                <td><?php echo $dt['transaction_loan_due_date'] * 5000; ?></td>
                                                                <td><?php echo $dt['transaction_loan_status']; ?></td>
                                                            </tr>
                                                            <?php
                                                                endforeach;
                                                            ?>
                                                            
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <th colspan="8">
                                                                    <p class="text-right" style="font-size: 16px;" id="total-price">
                                                                        Total Price: Rp. <?php echo $sumPrice; ?>
                                                                    </p>
                                                                </th>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <form action="process/lend-process.php" method="POST">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary" name="transaction_loan_id" value="<?php echo $dt['transaction_loan_id'] ?>">Return back book</button>
                                                </form>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                <?php
                                    } else {
                                ?>
                                <a class="btn btn-primary waves-effect waves-light btn-sm">Returned </a>
                                <?php
                                    }
                                ?>

                                <!-- viewDetailModal Modal -->

                                <div class="modal fade viewDetailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">View detail lend book</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="table-responsive">
                                                <table class="table table-striped m-b-0">
                                                    <thead>
                                                        <tr>
                                                            <th>Book ID</th>
                                                            <th>Book Name</th>
                                                            <th>Due Date</th>
                                                            <th>Price</th>
                                                            <th>Sub price</th>
                                                            <th>Status book</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $rs_table = $conn->query("SELECT `c`.`book_id`, `c`.`b_name`, `b`.`transaction_loan_due_date`, `b`.`transaction_loan_status`,`b`.`transaction_loan_id`  FROM `transaction_detail` `a` INNER JOIN `transaction_loan` `b` ON `a`.`transaction_detail_id` = `b`.`transaction_detail_id` INNER JOIN book `c` ON `a`.`book_id` = `c`.`book_id` WHERE `a`.`transaction_detail_id` =".$data['transaction_detail_id']."");
                                                            $sumPrice = 0;
                                                            foreach($rs_table as $dt):
                                                            $sumPrice += ($dt['transaction_loan_due_date'] * 5000);
                                                        ?>
                                                        <tr>
                                                            <td><?php echo $dt['book_id']; ?></td>
                                                            <td><?php echo $dt['b_name']; ?></td>
                                                            <td><?php echo $dt['transaction_loan_due_date'] ?></td>
                                                            <td>Rp. 5.000,-</td>
                                                            <td><?php echo $dt['transaction_loan_due_date'] * 5000; ?></td>
                                                            <td><?php echo $dt['transaction_loan_status']; ?></td>
                                                        </tr>
                                                        <?php
                                                            endforeach;
                                                        ?>
                                                        
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th colspan="8">
                                                                <p class="text-right" style="font-size: 16px;" id="total-price">
                                                                    Total Price: Rp. <?php echo $sumPrice; ?>
                                                                </p>
                                                            </th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <form action="process/lend-process.php" method="POST">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary" name="transaction_loan_id" value="<?php echo $dt['transaction_loan_id'] ?>">Return back book</button>
                                            </form>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php
                    endforeach;?>
                    
                    </tbody>
                </table>
            </div>
        </div>
    </div>