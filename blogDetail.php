<?php 

    $title = 'Blog Detail - KnightOne';
    $pageTitle = 'Blog Detail';

    require 'connect.php';
    require 'includes/header.php';
    require 'includes/pageTitle.php';

    $id = $_GET['id'];

    $statement = $pdo->prepare("SELECT * FROM blogs WHERE id = ?");
    $statement->execute([$id]);
    $blog = $statement->fetch();

?>

    <div class="container">
      <div class="row">

        <div class="col-lg-8">

          <!-- Blog Details Section -->
          <section id="blog-details" class="blog-details section">
            <div class="container">

              <article class="article">

                <div class="post-img">
                  <img width="100%" height="100%" src="adminpanel/blog/<?= $blog['image']; ?>" alt="" class="img-fluid">
                </div>

                <h2 class="title"><?= $blog['title']; ?></h2>

                <div class="meta-top">
                  <ul>
                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html">John Doe</a></li>
                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="2020-01-01"><?= date('M d, Y', strtotime($blog['updated_at'])); ?></time></a></li>
                  </ul>
                </div><!-- End meta top -->

                <div class="content">
                  <p>
                    <?= $blog['description']; ?>
                  </p>


                </div><!-- End post content -->

              

              </article>

            </div>
          </section><!-- /Blog Details Section -->

        

         

        </div>

      </div>
    </div>

<?php 
    require 'includes/footer.php';
?>