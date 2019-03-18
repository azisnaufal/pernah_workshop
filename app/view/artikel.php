<?php
    include __DIR__ . '/../view/template/header.php';

?>

    <div class="container mt-3">
        <div class="row ">
            <div class="col-md-12" id="con-acara">
                <div class="col-md-8 col-centered mt-2" style="border: 1px solid #bdbdbd;">
                    <h1 class="mt-4 text-md-left ml-2" id="con-judul"><?php echo $artikel['judul']?></h1>
                    <p class="mt-3 text-md-left ml-2 text-primary" style="font-size: 16px;"><?php echo $artikel['nama']?> <br> <?php echo $artikel['tanggal_artikel']?></p>

                    <?php echo $artikel['isi_artikel']?>
                </div>
            </div>
        </div>
    </div>

    <!--  -->
</div>


    <!-- End Script Home -->

     <!-- Start Footer -->
    <footer class="mt-5">
            <div class="p-5" style="background-color: #333; color: #fff;">
                <div class="container">
                    
                <div class="row">
                    <div class="col-md-6">
                        <h1>Aztec</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent</p>
                    </div>
                    <div class="col-md-3 mt-5">
                        <div style="font-size: .95em;">
                            <p>Jl. Kliningan No. 6 <br>
                            Kota Bandung, Jawa Barat, Indonesia</p>
                        </div>  
                    </div>
                </div>
                </div>
            </div>
            
    </footer>
    <!-- End Footer -->
    <!-- End Content -->

    <!-- Start JS -->

    <script src="<?php echo $_SERVER['SERVER_NAME'];?>../../../../assets/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo $_SERVER['SERVER_NAME'];?>../../../../assets/js/popper.min.js"></script>
    <script src="<?php echo $_SERVER['SERVER_NAME'];?>../../../../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo $_SERVER['SERVER_NAME'];?>../../../../assets/plugins/fontawesome/js/fontawesome-all.min.js"></script>
    <script src="<?php echo $_SERVER['SERVER_NAME'];?>../../../../assets/plugins/nice-select/js/jquery.js"></script>
    <script src="<?php echo $_SERVER['SERVER_NAME'];?>../../../../assets/plugins/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="<?php echo $_SERVER['SERVER_NAME'];?>../../../../assets/plugins/nice-select/js/fastclick.js"></script>
    <script src="<?php echo $_SERVER['SERVER_NAME'];?>../../../../assets/plugins/nice-select/js/prism.js"></script>
    <script src="<?php echo $_SERVER['SERVER_NAME'];?>../../../../assets/plugins/slick/slick.min.js"></script>


    <script type="text/javascript">
        $('select').niceSelect();

        $('.btn-close').click(function () {
            $('.navbar-search').css('margin-top', '-60px');
        });

        $('.btn-search').click(function () {
            $('.navbar-search').css('margin-top', 0);
            $('.input-search').focus();
        });


        $(document).ready(function(){
            $(".regular").slick({
                infinite: false,
                slidesToScroll: 1,
                variableWidth: true,
                centerMode: true,
                infinite: true
            }); 
          });
    </script>

    <!-- End JS -->

</body>

</html>