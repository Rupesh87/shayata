<?php $this->set('title_for_layout', 'Our Projects'); ?>
<?php $this->set('title', 'Our Projects');?>

<?= $this->element('breadcrumb') ?>   
    <section class="section bg-light">
      <div class="container">
          <div class="row element-animate pb-0">
            <div class="major-caousel js-carousel-1 owl-carousel">
                <div>
                    <div class="media d-block media-custom text-left">
                    <?php 
                        echo  $this->Html->link($this->Html->image('vocation_training.jpg', array( 'alt'=>"Image Placeholder" , 'class'=>"img-fluid", 'style'=>"max-height:358px")),
                                ["controller"=>"projects", "action"=>"view", 'vocation_training'],
                                [ "escape"=>false]
                            );  
                        ?>
                        <div class="media-body">
                            <h3 class="mt-0 text-black">
                            <?php echo $this->Html->link('Vocational Training ',
                                    ["controller"=>"projects", "action"=>"view", 'vocation_training'],
                                    ["class"=>"text-black",
                                        "escape"=>false]
                                    );
                            ?> 
                            </h3>
                        </div>
                    </div>
                </div>
                <div>
                   <div class="media d-block media-custom text-left">
                    <?php 
                        echo  $this->Html->link($this->Html->image('drinking_water.jpg', array( 'alt'=>"Image Placeholder" , 'class'=>"img-fluid", 'style'=>"max-height:358px")),
                                ["controller"=>"projects", "action"=>"view", 'drinking_water'],
                                [ "escape"=>false]
                            );  
                        ?>
                        <div class="media-body">
                            <h3 class="mt-0 text-black">
                            <?php echo $this->Html->link('WASH Program',
                                    ["controller"=>"projects", "action"=>"view", 'drinking_water'],
                                    ["class"=>"text-black",
                                        "escape"=>false]
                                    );
                            ?> 
                            </h3>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="media d-block media-custom text-left">
                    <?php 
                        echo  $this->Html->link($this->Html->image('dustbin.jpg', array( 'alt'=>"Image Placeholder" , 'class'=>"img-fluid" , 'style'=>"max-height:358px")),
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
                <div>
                    <div class="media d-block media-custom text-left">
                    <?php 
                        echo  $this->Html->link($this->Html->image('livelehood_support.jpg', array( 'alt'=>"Image Placeholder" , 'class'=>"img-fluid", 'style'=>"max-height:358px")),
                                ["controller"=>"projects", "action"=>"view", 'livelihood_support'],
                                [ "escape"=>false]
                            );  
                        ?>
                        <div class="media-body">
                            <h3 class="mt-0 text-black">
                            <?php echo $this->Html->link('Livelihood Support Program',
                                ["controller"=>"projects", "action"=>"view", 'livelihood_support'],
                                ["class"=>"text-black",
                                    "escape"=>false]
                                );
                            ?>
                            </h3>
                        </div>
                    </div>
                </div>
                <!-- <div>
                   <div class="media d-block media-custom text-left">
                    <?php 
                        echo  $this->Html->link($this->Html->image('demo.jpg', array( 'alt'=>"Image Placeholder" , 'class'=>"img-fluid")),
                                ["controller"=>"teams", "action"=>"view", 1],
                                [ "escape"=>false]
                            );  
                        ?>
                        <div class="media-body">
                            <h3 class="mt-0 text-black">
                            <?php echo $this->Html->link('HELLO, '.
                                $this->Html->tag("span", " 14 yrs. old", 
                                    array("class" => "age")),
                                    ["controller"=>"teams", "action"=>"view"],
                                    ["class"=>"text-black",
                                        "escape"=>false]
                                    );
                            ?> 
                            </h3>
                        </div>
                    </div>
                </div>
                <div> -->
                   <!--  <div class="media d-block media-custom text-left">
                    <?php 
                        echo  $this->Html->link($this->Html->image('demo.jpg', array( 'alt'=>"Image Placeholder" , 'class'=>"img-fluid")),
                                ["controller"=>"teams", "action"=>"view", 1],
                                [ "escape"=>false]
                            );  
                        ?>
                        <div class="media-body">
                            <h3 class="mt-0 text-black">
                            <?php echo $this->Html->link('HELLO, '.
                                $this->Html->tag("span", " 14 yrs. old", 
                                    array("class" => "age")),
                                    ["controller"=>"teams", "action"=>"view"],
                                    ["class"=>"text-black",
                                        "escape"=>false]
                                    );
                            ?> 
                            </h3>
                        </div>
                    </div> -->
                </div>
            </div>
            <!-- END slider -->
        </div>
        <!-- END row -->
      </div>
    </section>
    

    