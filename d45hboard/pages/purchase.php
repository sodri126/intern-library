<div class="row">
        <div class="col-xs-12">
            <div class="page-title-box">
                <h4 class="page-title"> Purchase </h4>
                <ol class="breadcrumb p-0 m-0">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li class="active">
                        Purchase
                    </li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- end row -->


    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <h4 class="header-title m-t-0 m-b-30">Purchase</h4>
                <div class="tab-content">
                    <div class="row clearfix">
                        <div class="col-md-12">
                            <?php
                            $rs = $conn->query("SELECT COUNT(`transaction_header_id`) as `total_header` FROM `transaction_header`");
                            $data = $rs->fetch_assoc();
                            $prefix_transaction_id = sprintf("TRX/%s/%07s", date("dmy"),++$data['total_header']);
                            ?>
                            <p>
                                <strong>Transaction ID:</strong> <span id="trx_text"><?php echo $prefix_transaction_id ?></span>
                            </p>
                            <p>
                                <strong>Transaction date:</strong> <?php echo date('d/M/Y') ?>
                            </p>
                            <?php 
                            $rs = $conn->query("SELECT `user_id`, `f_name`, `l_name` FROM `profile` WHERE user_type = 'member'");
                            ?>
                            <p>
                                <strong>Member: </strong>
                                <select id="member" name="member">
                                    <option selected disabled value="none">-- No member --</option>
                                    <?php
                                        while($row = $rs->fetch_assoc()) {
                                    ?>
                                    <option value="<?php echo $row['user_id'] ?>"><?php echo $row['f_name']." ".$row['l_name'] ?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </p>  
                            <p>
                                <strong>Employee:</strong> Admin
                            </p>  
                        </div>                   
                    </div>

                    <div class="row clearfix">
                        <div class="col-md-12">
                            <button type="button" class="btn btn-primary waves-effect waves-light m-b-30 pull-right" data-toggle="modal" data-target="#addPurchase">Add new purchasement</button>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-striped m-b-0" id="table-transaction">
                            <thead>
                                <tr>
                                    <th>Product ID</th>
                                    <th>Product Name</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Sub price</th>
                                    <th>Type Transaction</th>
                                    <th>Due Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th colspan="8">
                                        <p class="text-right" style="font-size: 16px;" id="total-price">
                                            Total Price: Rp. 0
                                        </p>
                                    </th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>

                    <div class="row clearfix">
                        <div class="col-md-12">
                        <button type="button" class="btn btn-primary waves-effect waves-light m-b-30 pull-right" id="submit_purchase">Submit</button>&nbsp;
                        <button type="button" class="btn waves-effect waves-light m-b-30 pull-right" id="submit_purchase" style="margin-right:10px;">Print</button>
                        </div>
                    </div>

                    <div class="modal fade" id="addPurchase" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add new purchase</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    <ul class="nav nav-tabs tabs-bordered nav-justified">
                                        <li class="active">
                                            <a href="#book" data-toggle="tab" aria-expanded="false">
                                                <span class="visible-xs"><i class="fa fa-user"></i></span>
                                                <span class="hidden-xs">Book</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="#beverage" data-toggle="tab" aria-expanded="true">
                                                <span class="visible-xs"><i class="fa fa-home"></i></span>
                                                <span class="hidden-xs">Beverage</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="book">
                                            <form class="form-horizontal" id="form-book">
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Book ID</label>
                                                    <div class="col-md-10">
                                                        <select class="form-control" name="book_id" id="book_id" required>
                                                            <option selected disabled>--Select Book Name --</option>
                                                            <?php
                                                            $rs = $conn->query("SELECT `book_id`, `b_name`, `stock`, `price` FROM `book` WHERE stock > 1");
                                                            foreach($rs as $bev) {
                                                            ?>
                                                            <option value="<?php echo $bev['book_id']; ?>"><?php echo $bev['b_name']; ?></option>
                                                            <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Quantity</label>
                                                    <div class="col-md-10">
                                                        <div class="input-group bootstrap-touchspin">
                                                            <span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span>
                                                            <input class="vertical-spin form-control" type="text" value="1" name="vertical-spin" style="display: block;" id="quantity_book">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Transaction Type</label>
                                                    <div class="col-md-10">
                                                        <div class="radio">
                                                            <input type="radio" name="radio_type" id="radio_loan" value="loan" checked="">
                                                            <label for="radio_loan">
                                                                Loan
                                                            </label>
                                                        </div>
                                                        <div class="radio">
                                                            <input type="radio" name="radio_type" id="radio_buy" value="buy">
                                                            <label for="radio_loan">
                                                                Buy
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Due date</label>
                                                    <div class="col-md-10">
                                                        <select class="form-control" id="due_date" name="due_date" required>
                                                            <option value="1">One day</option>
                                                            <option value="2">Two day</option>
                                                            <option value="3">Three day</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </form>  
                                        </div>
                                        <div class="tab-pane" id="beverage">
                                            <form class="form-horizontal">
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Beverage ID</label>
                                                    <div class="col-md-10">
                                                        <select class="form-control" required name="bev_id" id="bev_id">
                                                            <option selected disabled>--Select Beverage Name --</option>
                                                            <?php
                                                            $rs = $conn->query("SELECT `bev_id`, `bev_name`, `quantity`, `price` FROM `beverage` WHERE exp_date > NOW() AND quantity > 0");
                                                            foreach($rs as $bev) {
                                                            ?>
                                                            <option value="<?php echo $bev['bev_id']; ?>"><?php echo $bev['bev_name']; ?></option>
                                                            <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Quantity</label>
                                                    <div class="col-md-10">
                                                        <div class="input-group bootstrap-touchspin">
                                                            <span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span>
                                                            <input name="quantity_bev" id="quantity_bev" class="vertical-spin form-control" type="text" value="1" name="vertical-spin" style="display: block;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>  
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" id="addpurchase">Add to purchase</button>
                                </div>
                            </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>