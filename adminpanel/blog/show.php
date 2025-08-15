<?php 
    $logout = '../logout.php';
    require '../connect.php';
    require '../requires/header.php';

    $id = $_GET['id'];

    $statement = $pdo->prepare("SELECT * FROM blogs WHERE id = ?");
    $statement->execute([$id]);
    $blog = $statement->fetch();
?>



                <div class="col-md-12">
                    <h1 class="page-head-line">SHOW BLOG PAGE</h1>
                </div>

                <div class="container">
                    <p><b>Title: </b><?= $blog['title']; ?></p>
                    <p><b>Image: </b><img width="300px" src="<?= $blog['image']; ?>" alt=""></p>
                    <p><b>Type: </b><?= $blog['blog_type']; ?></p>
                    <p><b>Description: </b><?= $blog['description']; ?></p>
                    <p><b>Created_at: </b><?= date('d.m.Y', strtotime($blog['created_at'])); ?></p>
                    <p><b>Updated_at: </b><?= date('d.m.Y', strtotime($blog['updated_at'])); ?></p>

                    <a href="index.php" class="btn" style="background-color: black; color: white;">Back</a>
                </div>

               




<?php 
    require '../requires/footer.php';
?>