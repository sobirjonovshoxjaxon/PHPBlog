<?php 
    require '../requires/header.php';
?>
                <div class="col-md-12">
                    <h1 class="page-head-line">EDIT BLOG PAGE</h1>
                </div>

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="panel panel-info">
                                            <div class="panel-heading">
                                                <a href="index.php" class="btn" style="background-color: black; color: white;">Back</a>
                                            </div>
                                            <div class="panel-body">
                                                <form role="form" method="POST">

                                                            <div class="form-group">
                                                                <label>Title</label>
                                                                <input class="form-control" type="text" name="title">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Image</label>
                                                                <input class="form-control" type="file" name="image">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Blog type</label>
                                                                <input class="form-control" type="text" name="blog_type">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Description</label>
                                                                <textarea class="form-control" rows="3" name="description"></textarea>
                                                            </div>
                                                    
                                                    
                                                            <button type="submit" class="btn btn-success">Create</button>
                                                            <button type="reset" class="btn btn-warning">Reset</button>

                                                        </form>
                                                </div>
                                </div>
                            </div>


<?php 
    require '../requires/footer.php';
?>