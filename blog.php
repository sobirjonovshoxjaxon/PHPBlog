<?php 

    $title = 'Blog - KnightOne';
    $pageTitle = 'Blog';

    require 'connect.php';
    require 'includes/header.php';
    require 'includes/pageTitle.php';


    $statement = $pdo->prepare("SELECT * FROM blogs");
    $statement->execute();
    $blogs = $statement->fetchAll();

?>

   

    <!-- Blog Posts Section -->
    <section id="blog-posts" class="blog-posts section">

      <div class="container">
        <div class="row gy-4">


        <?php foreach($blogs as $blog): ?>

          <div class="col-lg-4">
            <article>

              <div class="post-img">
                <img width="100%" height="100%" src="adminpanel/blog/<?= $blog['image']; ?>" alt="" class="img-fluid">
              </div>

              <p class="post-category"><?= $blog['blog_type']; ?></p>

              <h2 class="title">
                <a href="blogDetail.php?id=<?= $blog['id']; ?>"><?= $blog['title']; ?></a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="assets/img/blog/blog-author.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">Maria Doe</p>
                  <p class="post-date">
                    <time datetime="2022-01-01"><?= date('M d, Y', strtotime($blog['updated_at'])); ?></time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

        <?php endforeach; ?>
   
        </div>
      </div>

    </section>
    <!-- /Blog Posts Section -->

<?php 

    require 'includes/footer.php';

?>