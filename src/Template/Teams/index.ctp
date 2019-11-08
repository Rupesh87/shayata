<?php $this->set('title_for_layout', 'Our Team Members'); ?>
<?php $this->set('title', 'Our Team Members');?>
<?= $this->element('breadcrumb') ?>   
    <section class="section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-12">
            <div class="media d-block media-custom text-left">
                <?php 
                   echo  $this->Html->link($this->Html->image('shekhar.jpg', array( 'alt'=>"Image Placeholder" , 'class'=>"img-fluid")),
                        ["controller"=>"teams", "action"=>"view", 'shekhar'],
                        [ "escape"=>false]
                    );  
                ?>
              <div class="media-body">
                <h3 class="mt-0 text-black">
                    <?php echo $this->Html->link('Mr. Shekhar Karki',
                            ["controller"=>"teams", "action"=>"view", 'shekhar'],
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
                   echo  $this->Html->link($this->Html->image('prabin.jpg', array( 'alt'=>"Image Placeholder" , 'class'=>"img-fluid")),
                        ["controller"=>"teams", "action"=>"view", 'prabin'],
                        [ "escape"=>false]
                    );  
                ?>
              <div class="media-body">
                <h3 class="mt-0 text-black">
                    <?php echo $this->Html->link('Mr. Prabin Shakya',
                            ["controller"=>"teams", "action"=>"view", 'prabin'],
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
                   echo  $this->Html->link($this->Html->image('umesh.jpg', array( 'alt'=>"Image Placeholder" , 'class'=>"img-fluid")),
                        ["controller"=>"teams", "action"=>"view", 'umesh'],
                        [ "escape"=>false]
                    );  
                ?>
              <div class="media-body">
                <h3 class="mt-0 text-black">
                    <?php echo $this->Html->link('Mr. Umesh Kaji Manandhar ',
                            ["controller"=>"teams", "action"=>"view", 'umesh'],
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
    

    