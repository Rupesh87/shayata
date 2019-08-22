<?php $this->set('title_for_layout', 'Our Projects'); ?>
<?= $this->element('breadcrumb') ?>
<!-- <section class="section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">

                <?php echo $this->Html->link(
                    $this->Html->tag("h3", '<span class="date">January 31, 2018</span> Being loved has taught me how to love',  array("class" => "")).
                    $this->Html->tag("span", "",  array("class" => "ion-plus icon")).
                    $this->Html->image('demo.jpg', array( 'alt'=>"Image Placeholder" , 'class'=>"img-fluid")),
                    ["controller"=>"projects", "action"=>"view"],
                    ["class"=>"link-thumbnail",
                        "escape"=>false]
                    );
                ?>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                 <?php echo $this->Html->link(
                    $this->Html->tag("h3", '<span class="date">January 31, 2018</span> Being loved has taught me how to love',  array("class" => "")).
                    $this->Html->tag("span", "",  array("class" => "ion-plus icon")).
                    $this->Html->image('demo.jpg', array( 'alt'=>"Image Placeholder" , 'class'=>"img-fluid")),
                    ["controller"=>"projects", "action"=>"view"],
                    ["class"=>"link-thumbnail",
                        "escape"=>false]
                    );
                ?>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                 <?php echo $this->Html->link(
                    $this->Html->tag("h3", '<span class="date">January 31, 2018</span> Being loved has taught me how to love',  array("class" => "")).
                    $this->Html->tag("span", "",  array("class" => "ion-plus icon")).
                    $this->Html->image('demo.jpg', array( 'alt'=>"Image Placeholder" , 'class'=>"img-fluid")),
                    ["controller"=>"projects", "action"=>"view"],
                    ["class"=>"link-thumbnail",
                        "escape"=>false]
                    );
                ?>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                 <?php echo $this->Html->link(
                    $this->Html->tag("h3", '<span class="date">January 31, 2018</span> Being loved has taught me how to love',  array("class" => "")).
                    $this->Html->tag("span", "",  array("class" => "ion-plus icon")).
                    $this->Html->image('demo.jpg', array( 'alt'=>"Image Placeholder" , 'class'=>"img-fluid")),
                    ["controller"=>"projects", "action"=>"view"],
                    ["class"=>"link-thumbnail",
                        "escape"=>false]
                    );
                ?>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                 <?php echo $this->Html->link(
                    $this->Html->tag("h3", '<span class="date">January 31, 2018</span> Being loved has taught me how to love',  array("class" => "")).
                    $this->Html->tag("span", "",  array("class" => "ion-plus icon")).
                    $this->Html->image('demo.jpg', array( 'alt'=>"Image Placeholder" , 'class'=>"img-fluid")),
                    ["controller"=>"projects", "action"=>"view"],
                    ["class"=>"link-thumbnail",
                        "escape"=>false]
                    );
                ?>
            </div>

            <div class="col-lg-4 col-md-6 col-12">
                 <?php echo $this->Html->link(
                    $this->Html->tag("h3", '<span class="date">January 31, 2018</span> Being loved has taught me how to love',  array("class" => "")).
                    $this->Html->tag("span", "",  array("class" => "ion-plus icon")).
                    $this->Html->image('demo.jpg', array( 'alt'=>"Image Placeholder" , 'class'=>"img-fluid")),
                    ["controller"=>"projects", "action"=>"view"],
                    ["class"=>"link-thumbnail",
                        "escape"=>false]
                    );
                ?>
            </div>

        </div>
        <!-- END row -->
    </div>
</section> -->
<section class="section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-12">
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
          <div class="col-lg-4 col-md-6 col-12">
            <div class="media d-block media-custom text-left">
            <?php 
                   echo  $this->Html->link($this->Html->image('demo.jpg', array( 'alt'=>"Image Placeholder" , 'class'=>"img-fluid")),
                        ["controller"=>"teams", "action"=>"view", 2],
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
          <div class="col-lg-4 col-md-6 col-12">
            <div class="media d-block media-custom text-left">
              <a href="" ><img src="https://picsum.photos/id/1043/504/570" alt="Image Placeholder" class="img-fluid"></a>
              <div class="media-body">

                <h3 class="mt-0 text-black">
                    <?php echo $this->Html->link('HELLO, '.
                        $this->Html->tag("span", " 14 yrs. old", 
                            array("class" => "age")),
                            ["controller"=>"teams", "action"=>"view", 3],
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
              <a href="adoption-single.html"><img src="https://picsum.photos/id/1045/503/590" alt="Image Placeholder" class="img-fluid"></a>
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
          <div class="col-lg-4 col-md-6 col-12">
            <div class="media d-block media-custom text-left">
              <a href="adoption-single.html"><img src="https://picsum.photos/id/1045/505/509" alt="Image Placeholder" class="img-fluid"></a>
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

          <div class="col-lg-4 col-md-6 col-12">
            <div class="media d-block media-custom text-left">
              <a href="adoption-single.html"><img src="https://picsum.photos/id/1045/500/503" alt="Image Placeholder" class="img-fluid"></a>
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
          <div class="col-lg-4 col-md-6 col-12">
            <div class="media d-block media-custom text-left">
              <a href="adoption-single.html"><img src="https://picsum.photos/id/1045/500/520" alt="Image Placeholder" class="img-fluid"></a>
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
          <div class="col-lg-4 col-md-6 col-12">
            <div class="media d-block media-custom text-left">
              <a href="adoption-single.html"><img src="https://picsum.photos/id/1045/500/540" alt="Image Placeholder" class="img-fluid"></a>
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
          <div class="col-lg-4 col-md-6 col-12">
            <div class="media d-block media-custom text-left">
              <a href="adoption-single.html"><img src="https://picsum.photos/id/1045/500/501" alt="Image Placeholder" class="img-fluid"></a>
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
          <div class="col-lg-4 col-md-6 col-12">
            <div class="media d-block media-custom text-left">
              <a href="adoption-single.html"><img src="https://picsum.photos/id/1045/500/502" alt="Image Placeholder" class="img-fluid"></a>
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
          <div class="col-lg-4 col-md-6 col-12">
            <div class="media d-block media-custom text-left">
              <a href="adoption-single.html"><img src="https://picsum.photos/id/1045/500/501" alt="Image Placeholder" class="img-fluid"></a>
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
          <div class="col-lg-4 col-md-6 col-12">
            <div class="media d-block media-custom text-left">
              <a href="adoption-single.html"><img src="https://picsum.photos/id/1045/500/510" alt="Image Placeholder" class="img-fluid"></a>
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
          
        </div>
        <!-- END row -->
      </div>
    </section>