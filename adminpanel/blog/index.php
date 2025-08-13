<?php
    $blog = 'index.php';
    require '../requires/header.php';
?>          
                
                <div class="col-md-12">
                    <h1 class="page-head-line">Blog Table</h1>
                </div>
                <div class="col-md-12 col-sm-12 col-lg-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="create.php" class="btn btn-success">Create</a>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>T/R</th>
                                            <th>Title</th>
                                            <th>Image</th>
                                            <th>Description</th>
                                            <th>Type Blog</th>
                                            <th>Created_at</th>
                                            <th>Updated_at</th>
                                            <th colspan="3">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Title</td>
                                            <td>Image</td>
                                            <td>Description</td>
                                            <td>Type Blog</td>
                                            <td>13.08.2025</td>
                                            <td>13.08.2025</td>
                                            <td>
                                                <a href="" class="btn btn-primary">Show</a>
                                            </td>
                                            <td>
                                                <a href="" class="btn btn-warning">Edit</a>
                                            </td>
                                            <td>
                                                <a href="" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                </div>

<?php 
    require '../requires/footer.php';
?>