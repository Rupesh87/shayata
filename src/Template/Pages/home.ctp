<?php $this->set('title_for_layout', 'Shayata Nepal');?>
<?php $this->set('title', 'Shayata Nepal');?>
<section class="home-slider owl-carousel">
    <div class="slider-item "
        style="background-image: url('<?php echo $this->request->getAttribute("webroot") . 'img/slider/slider2.jpg'; ?>');">
        <div class="container">
            <div class="row slider-text align-items-center">
                <div class="col-md-6 col-sm-12 element-animate">
                    <!-- <span class="child-name cursive">Celine Richardson, 14 yrs. old</span> -->
                    <h1>OUR MISSION</h1>
                    <p>
                        To ensure healthy, educated and affluent life
                        in clean environment by means of awareness, advocacy and
                        social empowerment for the social transformation.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="slider-item"
        style="background-image: url('<?php echo $this->request->getAttribute("webroot") . 'img/slider/slider1.jpg'; ?>');">
        <div class="container">
            <div class="row slider-text align-items-center">
                <div class="col-md-6 col-sm-12 element-animate">
                    <!-- <span class="child-name cursive">Mark Rodriguez, 12 yrs. old</span> -->
                    <h1>OUR VISION</h1>
                    <p>
                        Sahayata Nepal envision, the healthy life in clean
                        environment with educated and affluent society.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="slider-item"
        style="background-image: url('<?php echo $this->request->getAttribute("webroot") . 'img/slider/slider3.jpg'; ?>');">
        <div class="container">
            <div class="row slider-text align-items-center">
                <div class="col-md-6 col-sm-12 element-animate">
                    <!-- <span class="child-name cursive">Mark Rodriguez, 12 yrs. old</span> -->
                    <h1>OUR GOAL</h1>
                    <p>
                        To ensure life with health, education and livelihood
                        opportunities of socially oppressed community by
                        facilitating them in the mainstream of development with
                        clean environment.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section bg-light pb-0">
    <div class="container">
        <div class="row justify-content-center mb-3 element-animate">
            <div class="col-md-8 text-center">
                <h2 class="text-uppercase heading mb-4">
                    Few words from Executive Director
                </h2>
            </div>
        </div>
        <div class="row element-animate">
            <div class="col-md-3 col-sm-3">
                <?= $this->Html->image('executive_director1.jpg', array( 'alt'=>"Image Placeholder" , 'class'=>"img-fluid")); ?>
            </div>
            <div class="col-lg-9">
                <div class="about_content">
                    <div class="about_text">
                        <p style="text-align: justify;">
                            Respectable donor and national and international
                            communities, greeting to you from the Sahayata Nepal
                            and from the local community of Dhading District.
                            This district comprises diversified climate,
                            vegetation, flora and fauna. Beside this, from
                            immemorial time has been inhabited by people
                            belonging to different caste of Indo-Aryan and
                            Mongoloid culture. Although, Dhading District is
                            located closer to capital city, Kathmandu, it is one
                            of the under developed district of Nepal. It stands
                            41st rank in Human Development Index (HDI) among 75
                            districts of Nepal. Many parts of it are still inaccessible to road. Beside this, in the WASH sector also, there are many things to be improved as there is huge proportion of the population not having clean...
                        </p>
                    </div>
                    <div class="button about_button">
                        <?php echo $this->Html->link('Read more', array('controller' => 'pages', 'action' => 'few_words_from_director'), array('escape' => false,  'class' => "btn btn-primary", 'style' => 'margin-top:-7px'));  ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section border-t pb-0">
    <div class="container">
        <div class="row justify-content-center mb-3 element-animate">
            <div class="col-md-8 text-center">
                <h2 class="text-uppercase heading mb-4">OUR TEAM MEMBERS</h2>
            </div>
        </div>

        <div class="row no-gutters">
            <div class="col-md-4 element-animate">
                <?php echo $this->Html->link(
                    $this->Html->tag("h3", 'Mr. Shekhar Karki',  array("class" => "")).
                    $this->Html->tag("span", "",  array("class" => "ion-plus icon")).
                    $this->Html->image('shekhar.jpg', array( 'alt'=>"Image Placeholder" , 'class'=>"img-fluid")),
                    ["controller"=>"teams", "action"=>"view", 'shekhar'],
                    ["class"=>"link-thumbnail",
                        "escape"=>false]
                    );
                ?>
            </div>
            <div class="col-md-4 element-animate">
                <?php echo $this->Html->link(
                    $this->Html->tag("h3", 'Mr. Prabin Shakya',  array("class" => "")).
                    $this->Html->tag("span", "",  array("class" => "ion-plus icon")).
                    $this->Html->image('prabin.jpg', array( 'alt'=>"Image Placeholder" , 'class'=>"img-fluid")),
                    ["controller"=>"teams", "action"=>"view", 'prabin'],
                    ["class"=>"link-thumbnail",
                        "escape"=>false]
                    );
                ?>
            </div>
            <div class="col-md-4 element-animate">
                <?php echo $this->Html->link(
                    $this->Html->tag("h3", 'Mr. Umesh Kaji Manandhar',  array("class" => "")).
                    $this->Html->tag("span", "",  array("class" => "ion-plus icon")).
                    $this->Html->image('umesh.jpg', array( 'alt'=>"Image Placeholder" , 'class'=>"img-fluid")),
                    ["controller"=>"teams", "action"=>"view", 'umesh'],
                    ["class"=>"link-thumbnail",
                        "escape"=>false]
                    );
                ?>
            </div>
        </div>
    </div>
</section>
<section class="section bg-light pb-5 pt-4">
    <div class="container">
        <div class="row justify-content-center element-animate">
            <div class="col-md-8 text-center">
                <h2 class="text-uppercase heading mb-2">OUR PROGRAMS</h2>
            </div>
        </div>
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
    </div>
</section>

<style>
    .service-box h4 i {
        color: #dd3e3e;
        margin-right: 10px;
    }

    service-box .s-readmore {
        color: #b7b7b7;
        font-size: 17px;
    }

    .service-box .s-readmore i {
        color: #dd3e3e;
    }

    .s-readmore {
        text-decoration: none !important;
    }
</style>