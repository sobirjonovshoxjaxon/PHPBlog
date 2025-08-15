<?php 
    $logout = '../logout.php';
    require '../connect.php';
    require '../requires/header.php';


    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $title = $_POST['title'];
        $image = $_FILES['image'];
        $blog_type = $_POST['blog_type'];
        $description = $_POST['description'];


        // Faylni yuklash jarayoni 
        $imagePath = 'uploads/'.basename(rand().$image['name']);

        if(move_uploaded_file($image['tmp_name'],$imagePath)){

            $statement = $pdo->prepare("INSERT INTO blogs(title,image,blog_type,description) VALUES (:title,:image,:blog_type,:description)");
            $statement->execute([

                'title' => $_POST['title'],
                'image' => $imagePath,
                'blog_type' => $_POST['blog_type'],
                'description' => $_POST['description']
            ]);
            
            $_SESSION['blog-created'] = 'Blog created successfully';
            header('location: index.php');
        }

       

    }
?>
                <div class="col-md-12">
                    <h1 class="page-head-line">CREATE BLOG PAGE</h1>
                </div>

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="panel panel-info">
                                            <div class="panel-heading">
                                                <a href="index.php" class="btn" style="background-color: black; color: white;">Back</a>
                                            </div>
                                            <div class="panel-body">
                                                <form role="form" method="POST" enctype="multipart/form-data">

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