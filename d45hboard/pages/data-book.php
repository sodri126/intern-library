<div class="row">
        <div class="col-xs-12">
            <div class="page-title-box">
                <h4 class="page-title">Data Book </h4>
                <ol class="breadcrumb p-0 m-0">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li class="active">
                        Data Book
                    </li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- end row -->


    <div class="row">
        <div class="col-sm-12">
            <div class="card-box table-responsive">
                <h4 class="m-t-0 header-title"><b>Master Data Book</b></h4>
                <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#addBookModal">Add Book</button><br>

                <!-- addBookModal Modal -->

                <div class="modal fade" id="addBookModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add new book</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Name</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Pages</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="number" min="1" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">ISBN</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Language</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Author</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Publisher</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Rating</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="number" min="1" max="10" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Synopsis</label>
                                    <div class="col-md-10">
                                        <textarea class="form-control" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Prequel</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="number" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Sequel</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="number" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Stock</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="number" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Price</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Picture</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="file" placeholder="placeholder">  
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

                <!-- <p class="text-muted font-13 m-b-30">
                    DataTables has most features enabled by default, so all you need to do to use it with
                    your own tables is to call the construction function: <code>$().DataTable();</code>.
                </p> -->
                <br>
                <table id="datatable" class="table table-striped table-colored table-info">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Thumbnail</th>
                        <th>Title</th>
                        <th>Stock</th>
                        <th>Category</th>
                        <th>Availability</th>
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
                        <td>352</td>
                        <td>
                            <span class="badge badge-primary">Comedy</span>
                            <span class="badge badge-light">Action</span>
                        </td>
                        <td>
                            <p class="text-success"><strong>In Stock</strong></p>
                        </td>
                        <td>
                            <a class="btn btn-primary waves-effect waves-light btn-sm" data-toggle="modal" data-target="#viewDetailModal">View Detail</a>
                            <a class="btn btn-warning waves-effect waves-light btn-sm" data-toggle="modal" data-target="#editBookModal">Edit</a>
                            <a class="btn btn-danger waves-effect waves-light btn-sm" data-toggle="modal" data-target="#deleteBookModal">Delete</a>

                            <!-- viewDetailModal Modal -->

                            <div class="modal fade" id="viewDetailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">View Detail book</h5>
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

                                <!-- editBookModal Modal -->

                                <div class="modal fade" id="editBookModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit book : Out of the Box</h5>
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

                                    <!-- deleteBookModal Modal -->

                                <div class="modal fade" id="deleteBookModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Delete book : Testing</h5>
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