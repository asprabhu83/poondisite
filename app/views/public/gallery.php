<?php
defined('BASEPATH') or exit('No direct script access allowed');
init_public_head();
?>
<div class="section-height-800 breadcrumb-modern context-dark text-center">
    <div class="shell section-bottom-30">
        <div class="veil reveal-md-block">
            <h1 class="text-bold">Gallery</h1>
        </div>
        <ul class="list-inline list-inline-with-arrows p">
            <ul class="list-inline list-inline-with-arrows p">
                <li><a href="<?php echo base_url()?>" class="text-white">Home </a></li>
                <li>Gallery</li>
            </ul>
        </ul>
    </div>
</div>
<section class="section-90 section-md-top-120 section-md-bottom-111">
    <div class="shell-fluid">
    <h2>GALLERY</h2>
        <div class="isotope-wrap offset-top-30">
            <div class="row justify-content-md-center">
                <div class="carousel slide article-slide" id="vpCarousel" data-interval="2000" data-ride="carousel">
                <div class="carousel-inner cont-slider">
                    <?php foreach ($galleries as $gallery) { ?>
                        <div class="item <?php echo $gallery['style']?>">
                            <img src="<?php echo $gallery['image'] ?>">
                        </div>
                    <?php } ?>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#vpCarousel" role="button" data-slide="prev">
                        <i class="fa fa-chevron-left"></i><span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#vpCarousel" role="button" data-slide="next">
                        <i class="fa fa-chevron-right"></i><span class="sr-only">Next</span>
                    </a>

                </div>
            </div>
            </div>
        </div>
    </div>
</section>
<?php
init_public_tail();
?>