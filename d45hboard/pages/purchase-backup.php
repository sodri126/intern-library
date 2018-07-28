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
                <h4 class="header-title m-t-0 m-b-30">Data Purchase</h4>

                <ul class="nav nav-tabs tabs-bordered nav-justified">
                    <li class="active">
                        <a href="#book" data-toggle="tab" aria-expanded="true">
                            <span class="visible-xs"><i class="fa fa-home"></i></span>
                            <span class="hidden-xs">Book</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="#drink" data-toggle="tab" aria-expanded="false">
                            <span class="visible-xs"><i class="fa fa-user"></i></span>
                            <span class="hidden-xs">Drink</span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="book">
                        <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#addPurchase">Add new purchasement</button><br>


                        <!-- addBookModal Modal -->

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
                                    <form class="form-horizontal">
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">User ID</label>
                                            <div class="col-md-10">
                                                <select class="form-control" required>
                                                    <option selected disabled>--Select User Name --</option>
                                                    <option value="">Abay</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Book ID</label>
                                            <div class="col-md-10">
                                                <select class="form-control" required>
                                                    <option selected disabled>--Select Book Name --</option>
                                                    <option value="">Abay</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                    </form>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                            </div>
                        </div>

                        <br>
                        <h3 class="header-title m-t-30 m-b-20">Purchasment History</h3>
                        <table id="datatable" class="table table-striped table-colored table-info">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Thumbnail</th>
                                <th>Title</th>
                                <th>Purchased by</th>
                                <th>Purchase Date</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    <img class="img-responsive" style="width:60px;" src="https://99designs-blog.imgix.net/wp-content/uploads/2017/12/attachment_83090027.jpg?auto=format&q=60&fit=max&w=930">
                                </td>
                                <td>Out of the box</td>
                                <td>Abay</td>
                                <td>15 Agustus 2018</td>
                                <td>
                                    <a class="btn btn-danger waves-effect waves-light btn-sm" data-toggle="modal" data-target="#deletePurchase">Delete</a>

                                        <div class="modal fade" id="deletePurchase" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Delete purchasement : Testing</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    </div>
                                                    <div class="modal-body">
                                                    ...
                                                    </div>
                                                    <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>


                                </td>
                            </tr>
                            
                            
                            </tbody>
                        </table>

                    </div>
                    <div class="tab-pane" id="drink">
                        <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#addPurchaseDrink">Add new purchasement</button><br>


                        <!-- addBookModal Modal -->

                        <div class="modal fade" id="addPurchaseDrink" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add new purchase</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    <form class="form-horizontal">
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">User ID</label>
                                            <div class="col-md-10">
                                                <select class="form-control" required>
                                                    <option selected disabled>--Select User Name --</option>
                                                    <option value="">Abay</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Book ID</label>
                                            <div class="col-md-10">
                                                <select class="form-control" required>
                                                    <option selected disabled>--Select Book Name --</option>
                                                    <option value="">Abay</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                    </form>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                            </div>
                        </div>

                        <br>
                        <h3 class="header-title m-t-30 m-b-20">Purchasement History</h3>
                        <table id="datatable" class="table table-striped table-colored table-info">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Thumbnail</th>
                                <th>Title</th>
                                <th>Purchased by</th>
                                <th>Purchase Date</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    <img class="img-responsive" style="width:60px;" src="https://99designs-blog.imgix.net/wp-content/uploads/2017/12/attachment_83090027.jpg?auto=format&q=60&fit=max&w=930">
                                </td>
                                <td>Out of the box</td>
                                <td>Abay</td>
                                <td>15 Agustus 2018</td>
                                <td>
                                    <a class="btn btn-danger waves-effect waves-light btn-sm" data-toggle="modal" data-target="#deletePurchaseDrink">Delete</a>

                                        <div class="modal fade" id="deletePurchaseDrink" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Delete purchasement : Testing</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    </div>
                                                    <div class="modal-body">
                                                    ...
                                                    </div>
                                                    <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>


                                </td>
                            </tr>
                            
                            
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>