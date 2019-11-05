<?php $this->set('title_for_layout', 'Our Projects'); ?>
<?php $this->set('title', 'Our Projects');?>

<?= $this->element('breadcrumb') ?>   
    <section class="section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-12">
            <div class="media d-block media-custom text-left">
                <?php 
                   echo  $this->Html->link($this->Html->image('vocation_training.jpg', array( 'alt'=>"Image Placeholder" , 'class'=>"img-fluid")),
                        ["controller"=>"projects", "action"=>"view", 'vocation_training'],
                        [ "escape"=>false]
                    );  
                ?>
              <div class="media-body">
                <h3 class="mt-0 text-black">
                    <?php echo $this->Html->link('Vocational Training, ',
                            ["controller"=>"projects", "action"=>"view", 'vocation_training'],
                            ["class"=>"text-black",
                                "escape"=>false]
                            );
                    ?> 
                </h3>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-12">
            <div class="media d-block media-custom text-left">
                <?php 
                   echo  $this->Html->link($this->Html->image('drinking_water.jpg', array( 'alt'=>"Image Placeholder" , 'class'=>"img-fluid")),
                        ["controller"=>"projects", "action"=>"view", 'drinking_water'],
                        [ "escape"=>false]
                    );  
                ?>
              <div class="media-body">
                <h3 class="mt-0 text-black">
                    <?php echo $this->Html->link('Drinking Water Supply, ',
                            ["controller"=>"projects", "action"=>"view", 'drinking_water'],
                            ["class"=>"text-black",
                                "escape"=>false]
                            );
                    ?> 
                </h3>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-12">
            <div class="media d-block media-custom text-left">
                <?php 
                   echo  $this->Html->link($this->Html->image('dustbin.jpg', array( 'alt'=>"Image Placeholder" , 'class'=>"img-fluid")),
                        ["controller"=>"projects", "action"=>"view", 'waste_management'],
                        [ "escape"=>false]
                    );  
                ?>
              <div class="media-body">
                <h3 class="mt-0 text-black">
                    <?php echo $this->Html->link('Solid Waste Management',
                            ["controller"=>"projects", "action"=>"view", 'waste_management'],
                            ["class"=>"text-black",
                                "escape"=>false]
                            );
                    ?> 
                </h3>
              </div>
            </div>
          </div>
        </div>
        <!-- END row -->
      </div>
    </section>
    

    