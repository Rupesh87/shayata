<section class="home-slider inner-page owl-carousel">
    <div class="slider-item " style="background-image: url('img/slider-2.jpg');">

        <div class="container">
            <div class="row slider-text align-items-center">
                <div class="col-md-7 col-sm-12 element-animate">
                    <h1><?php echo $title_for_layout; ?></h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-custom">
                            <li class="breadcrumb-item">
                                <?php echo $this->Html->link(__('Home', true), array('controller' => 'pages', 'action' => 'home'));?>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page"><?php echo $title_for_layout; ?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

    </div>
</section>