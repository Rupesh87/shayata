<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-3 order-2 sidebar">

                <div class="sidebar-box">
                    <h3>Categories</h3>
                    <ul class="list-unstyled categories">
                        <li>
                            <?php echo $this->Html->link('Our Team Members', array('controller' => 'teams'), array('escape' => false, 'class' => '')); ?>
                        </li>
                        <li>
                            <?php echo $this->Html->link('Projects', array('controller' => 'teams'), array('escape' => false, 'class' => '')); ?>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9 order-1 main">
                <div class="row">
                    <div class="col-md-4 mb-5">
                    <?= $this->Html->image('shekhar.jpg', array( 'alt'=>"Image Placeholder" , 'class'=>"img-fluid", 'style' => 'width: 200px;')); ?>
                    </div>
                    <div class="col-md-8 body_text">
                        <p>Shekhar Karki  one of the team member of Sahayata Nepal. He did Diploma in Electrical engineering (three years) from CTEVT, Balaju and was GOLD MEDALIST of his batch. After his engineering grab the industry experience of 10 years. After this, Mr. Karki thought of getting into education field to help people from his village and did his master in English from Central Campus, Tribhuvan University and master in Sociology from Saraswoti Multiple Campus, Kathmandu. He is a social motivator and Entertained National Leadership on Leo Organization. He is also founding president of Lions Club at Khanikhola and Now Advisor of The Lions District 325 B1 Nepal. Mr. Karki currently is self-employed as an education and tourism entrepreneur.
                        </p>
                    </div>
                </div>
            </div>

        </div>
        <!-- END row -->
    </div>
</section>