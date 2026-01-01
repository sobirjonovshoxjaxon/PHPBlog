<?php
    $logout = '../logout.php';  
    $blog = 'index.php';
    require '../requires/header.php';
    require '../connect.php';

    $statement = $pdo->prepare("SELECT * FROM blogs");
    $statement->execute();
    $blogs = $statement->fetchAll();


    //Delete Code 
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['DELETE'])){

        $id = $_POST['blog_id'];

        $statement = $pdo->prepare("SELECT image FROM blogs WHERE id = ?");
        $statement->execute([$id]);
        $post = $statement->fetch();

        if($post){

            $image = $post['image'];

            if(file_exists($image)){
                unlink($image);
            }

            $statement = $pdo->prepare("DELETE FROM blogs WHERE id = ?");
            $statement->execute([$id]);


            $_SESSION['blog-deleted'] = 'Blog deleted successfully';
          
        }else{

            $_SESSION['blog-deleted'] = 'Blog not found';
        }

        header('location: index.php');
        exit;

        ob_end_flush();
    }


?>          
                
                <div class="col-md-12">
                    <h1 class="page-head-line">Blog Table</h1>

                    <?php if(isset($_SESSION['blog-created'])): ?>
                        <div class="alert alert-success">
                            <?= $_SESSION['blog-created']; ?>
                        </div>
                        <?php unset($_SESSION['blog-created']); ?>
                    <?php endif; ?>


                    <?php if(isset($_SESSION['blog-updated'])): ?>
                        <div class="alert alert-warning">
                            <?= $_SESSION['blog-updated']; ?>
                            <?php unset($_SESSION['blog-updated']); ?>
                        </div>
                    <?php endif; ?>


                    <?php if(isset($_SESSION['blog-deleted'])): ?>
                        <div class="alert alert-danger">
                            <?= $_SESSION['blog-deleted']; ?>
                            <?php unset($_SESSION['blog-deleted']); ?>
                        </div>
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
                                                <img width="300" src="<?= $blog['image']; ?>" alt="">
                                            </td>
                                            <td><?= substr($blog['description'],0,50) . "..."; ?></td>
                                            <td><?= $blog['blog_type']; ?></td>
                                            <td><?= $blog['created_at']; ?></td>
                                            <td><?= $blog['updated_at']; ?></td>
                                            <td>
                                                <a href="show.php?id=<?= $blog['id']; ?>" class="btn btn-primary">Show</a>
                                            </td>
                                            <td>
                                                <a href="edit.php?id=<?= $blog['id']; ?>" class="btn btn-warning">Edit</a>
                                            </td>
                                            <td>
                                                <form action="" method="POST">

                                                    <input type="hidden" name="DELETE">
                                                    <input type="hidden" name="blog_id" value="<?= $blog['id']; ?>">

                                                    <input type="submit" value="Delete" class="btn btn-danger">
                                                </form>
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