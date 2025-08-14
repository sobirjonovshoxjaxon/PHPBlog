<?php
    $blog = 'index.php';
    require '../requires/header.php';
    require '../connect.php';

    $statement = $pdo->prepare("SELECT * FROM blogs");
    $statement->execute();
    $blogs = $statement->fetchAll();


?>          
                
                <div class="col-md-12">
                    <h1 class="page-head-line">Blog Table</h1>

                    <?php if(isset($_SESSION['blog-created'])): ?>
                        <div class="alert alert-success">
                            <?= $_SESSION['blog-created']; ?>
                        </div>
                        <?php unset($_SESSION['blog-created']); ?>
                    <?php endif; ?>
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

                                    <?php foreach($blogs as $blog): ?>
                                        <tr>
                                            <td><?= $blog['id']; ?></td>
                                            <td><?= $blog['title']; ?></td>
                                            <td>
                                                <img width="100px" src="<?= $blog['image']; ?>" alt="">
                                            </td>
                                            <td><?= $blog['description']; ?></td>
                                            <td><?= $blog['blog_type']; ?></td>
                                            <td><?= $blog['created_at']; ?></td>
                                            <td><?= $blog['updated_at']; ?></td>
                                            <td>
                                                <a href="show.php?id=<?= $blog['id']; ?>" class="btn btn-primary">Show</a>
                                            </td>
                                            <td>
                                                <a href="" class="btn btn-warning">Edit</a>
                                            </td>
                                            <td>
                                                <a href="" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
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