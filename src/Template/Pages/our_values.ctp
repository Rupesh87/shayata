<?php $this->set('title_for_layout', 'Our Values'); ?>
<?= $this->element('breadcrumb') ?>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-4 order-2 sidebar">


                <div class="sidebar-box">
                    <h3>About Us</h3>

                    <ul class="list-unstyled sidelink">
                        <li class="">
                            <?php echo $this->Html->link(__('History', true), array('controller' => 'pages', 'action' => 'about_us'), array('class' => 'nav-link'));?>
                        </li>
                        <li class="">

                            <?php echo $this->Html->link(__('Mission', true), array('controller' => 'pages', 'action' => 'mission'), array('class' => 'nav-link'));?>
                        </li>
                        <li class="">
                            <?php echo $this->Html->link(__('Vision', true), array('controller' => 'pages', 'action' => 'vision'), array('class' => 'nav-link'));?>
                        </li>
                        <li class="active">
                            <?php echo $this->Html->link(__('Our Values', true), array('controller' => 'pages', 'action' => 'our_values'), array('class' => 'nav-link'));?>
                        </li>
                    </ul>
                </div>



            </div>
            <div class="col-md-8 order-1 main mb-5">
                <div class="row">
                    <div class="col-md-12">
                        <?=$this->element('about/our_values') ?>
                    </div>
                </div>
            </div>

        </div>
        <!-- END row -->
    </div>
</section>