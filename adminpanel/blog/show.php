<?php 
    require '../connect.php';
    require '../requires/header.php';

    $id = $_GET['id'];

    $statement = $pdo->prepare("SELECT * FROM blogs WHERE id = ?");
    $statement->execute([$id]);
    $statement->fetch();
?>



                <div class="col-md-12">
                    <h1 class="page-head-line">SHOW BLOG PAGE</h1>
                </div>


<?php 
    require '../requires/footer.php';
?>