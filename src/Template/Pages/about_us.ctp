<?php $this->set('title_for_layout', 'About Us');?>
<?=$this->element('breadcrumb')?>

<section class="section">
    <div class="container">
        <div class="row">
            <!-- <div class="col-md-4 order-2 sidebar">


                <div class="sidebar-box">
                    <h3>About Us</h3>

                    <ul class="list-unstyled sidelink">
                        <li class="active">
                            <?php echo $this->Html->link(__('About Us', true), array('controller' => 'pages', 'action' => 'about_us'), array('class' => 'nav-link')); ?>
                        </li>
                        <li class="">

                            <?php echo $this->Html->link(__('Mission', true), array('controller' => 'pages', 'action' => 'mission'), array('class' => 'nav-link')); ?>
                        </li>
                        <li class="">
                            <?php echo $this->Html->link(__('Vision', true), array('controller' => 'pages', 'action' => 'vision'), array('class' => 'nav-link')); ?>
                        </li>
                        <li class="">
                            <?php echo $this->Html->link(__('Our Goal', true), array('controller' => 'pages', 'action' => 'our_goal'), array('class' => 'nav-link')); ?>
                        </li>
                    </ul>
                </div>



            </div>
            <div class="col-md-8 order-1 main mb-5">
                <div class="row">
                    <div class="col-md-12">
                    </div>
                </div>
            </div> -->
            <?=$this->element('about/about_us')?>
        </div>
        <!-- END row -->
    </div>
</section>
<style>
    p {
        text-align: justify;
    }
</style>