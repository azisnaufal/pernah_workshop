<?php
    include __DIR__ . '/../view/template/header.php';
?>
<div>
<h3 class="mt-5 ml-3 col-centered">Fotografi</h1>
        <div class="row col-centered">
            <?php
              foreach($fotografi as $key=>$fotografis) :
            ?>
            <div class="card ml-4 mt-2" style="width: 19rem; border: 1px solid #bdbdbd; ">
              <img class="card-img-top" id="card-img" src="<?php echo htmlspecialchars($fotografis['foto_headline']);?>" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"><?php echo htmlspecialchars($fotografis['judul']);?></h5>
                <a href="berita/<?php echo $fotografis['id']?>" class="btn btn-danger float-right mt-3">Baca Berita</a>
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
    