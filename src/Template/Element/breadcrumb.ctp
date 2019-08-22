<section class="home-slider inner-page owl-carousel">
    <div class="slider-item " style="background-image: url('<?php echo $this->request->webroot . 'img/office.jpg'; ?>');">

        <div class="container">
            <div class="row slider-text align-items-center">
                <div class="col-md-9 col-sm-12 element-animate">
                    <h1><?php echo $title_for_layout; ?></h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-custom">
                            <li class="breadcrumb-item">
                                <?php echo $this->Html->link(__('Home', true), array('controller' => 'pages', 'action' => 'home'), array( 'style'=>"color:black!important"));?>
                            </li>
                            <?php if(isset($sub_title_for_layout) && isset($controller)) { ?>
                                <li class="breadcrumb-item"><?php echo $this->Html->link(__($title_for_layout, true), array('controller' => $controller));?></li>
                                <li class="breadcrumb-item active" aria-current="page"><?php echo $sub_title_for_layout; ?></li>
                            <?php } else { ?>
                                    <li class="breadcrumb-item active" aria-current="page"><?php echo $title_for_layout; ?></li>
                            <?php } ?>
                         </ol>
                    </nav>
                </div>
            </div>
        </div>

    </div>
</section>