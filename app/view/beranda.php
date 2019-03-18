<?php
    include __DIR__ . '/../view/template/header.php';
?>
        <div style="width: 100%;">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          </ol>
          
          <div class="carousel-inner">
            <?php
              foreach($carousel as $key=>$carousels) :
            ?>
            
              <div class="carousel-item <?= $key == 1 ? 'active' : ''?>">
                
                  <img class="d-block w-100" style="height: 550px" src="<?php echo htmlspecialchars($carousels['foto_headline']);?>" alt="First slide">
                  <a  href="berita/<?php echo $carousels['id']?>">
                <div style="background: rgba(0, 0, 0, 0.5);" class="carousel-caption d-none d-md-block">
                  <h1 class="text-capitalize"><?php echo htmlspecialchars($carousels['judul']);?></h1>
                  <h5 class="text-capitalize"><?php echo htmlspecialchars($carousels['tanggal_artikel']);?></h5>                    
                </div>
              </div>
            </a>
            <?php
              endforeach;
            ?>
          </div>
          
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
    
        </div>

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

                <h3 class="mt-5 ml-3 col-centered">Hardware</h1>
        <div class="row col-centered">
        <?php
              foreach($hardwares as $key=>$hardware) :
            ?>
            <div class="card ml-4 mt-2" style="width: 19rem; border: 1px solid #bdbdbd; ">
              <img class="card-img-top" id="card-img" src="<?php echo htmlspecialchars($hardware['foto_headline']);?>" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"><?php echo htmlspecialchars($hardware['judul']);?></h5>
                <a href="berita/<?php echo $hardwares[$key]['id']?>" class="btn btn-danger float-right mt-3">Baca Berita</a>
              </div>
            </div>
            <?php
              endforeach;
            ?>
        </div>

                <h3 class="mt-5 ml-3 col-centered">Software</h1>
        <div class="row col-centered">
            <?php
              foreach($softwares as $key=>$software) :
            ?>
            <div class="card ml-4 mt-2" style="width: 19rem; border: 1px solid #bdbdbd; ">
              <img class="card-img-top" id="card-img" src="<?php echo htmlspecialchars($software['foto_headline']);?>" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"><?php echo htmlspecialchars($software['judul']);?></h5>
                <a href="berita/<?php echo $software['id']?>" class="btn btn-danger float-right mt-3">Baca Berita</a>
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
    