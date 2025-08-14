<?php 
    require '../connect.php';
    require '../requires/header.php';

    $id = $_GET['id'];

    $statement = $pdo->prepare("SELECT * FROM blogs WHERE id = ?");
    $statement->execute([$id]);
    $blog = $statement->fetch();


    //Update Blog code start 
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['PUT'])){

        $id = $_POST['blog_id'];
        $title = $_POST['title'];
        $image = $_FILES['image'];
        $blog_type = $_POST['blog_type'];
        $description = $_POST['description'];

        $statement = $pdo->prepare("UPDATE blogs SET VALUES title = :title, image = :image, blog_type = :blog_type, description = :description WHERE id = :id");
        $statement->execute([


        ]);


        $_SESSION['blog-updated'] = 'Blog updated successfully';
        header('location: index.php');
    }
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
                                                <form role="form" method="POST" enctype="multipart/form-data">

                                                            <input type="hidden" name="PUT">
                                                            <input type="hidden" name="blog_id" value="<?= $blog['id']; ?>">

                                                            <div class="form-group">
                                                                <label>Title</label>
                                                                <input class="form-control" type="text" value="<?= $blog['title']; ?>" name="title">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Image</label>
                                                                <input class="form-control" type="file" name="image">
                                                                <img width="100px" src="<?= $blog['image']; ?>" alt="">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Blog type</label>
                                                                <input class="form-control" type="text" name="blog_type" value="<?= $blog['blog_type']; ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Description</label>
                                                                <textarea class="form-control" rows="3" name="description"><?= $blog['description']; ?></textarea>
                                                            </div>
                                                    
                                                    
                                                            <button type="submit" class="btn btn-warning">Edit</button>
                                                            <button type="reset" class="btn btn-warning">Reset</button>

                                                        </form>
                                                </div>
                                </div>
                            </div>


<?php 
    require '../requires/footer.php';
?>