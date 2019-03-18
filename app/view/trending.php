<?php
    include __DIR__ . '/../view/template/header.php';
?>
        <div class="container-fluid mt-5">
            <h3 class="mt-5 ml-3 col-centered">Trending</h1>
        <div class="row col-centered">
            <?php
              foreach($carousel as $key=>$carousels) :
            ?>
            <div class="card ml-4 mt-2" style="width: 19rem; border: 1px solid #bdbdbd; ">
              <img class="card-img-top" id="card-img" src="<?php echo htmlspecialchars($carousels['foto_headline']);?>" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"><?php echo htmlspecialchars($carousels['judul']);?></h5>
                <a href="berita/<?php echo $carousels['id']?>" class="btn btn-danger float-right mt-3">Baca Berita</a>
              </div>
            </div>
            <?php
              endforeach;
            ?>
        </div>

    </div>

<?php
    include __DIR__ . '/../view/template/footer.php';
?>
    