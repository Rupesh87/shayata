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
                    <?= $this->Html->image('prabin.jpg', array( 'alt'=>"Image Placeholder" , 'class'=>"img-fluid", 'style' => 'width: 200px;')); ?>
                    </div>
                    <div class="col-md-8 body_text">
                        <p>Mr. Prabin Shakya is one of the member of Sahayata Nepal. Mr. Shakya  is founder president of Microbiological Research Organization (MiRON).  He has completed Master in two subjects viz. microbiology and sociology. He has just completed M. Phil. from Tribhuvan University.  He started his career in development sector as regional team member of Pragya india. After that he worked as district coordinator for Shindhupalchowk District in joint venture project of MDI-Nepal and WFP.  Currently, he is working as CEO of MLRC Pvt. Ltd. 
                        </p>
                    </div>
                </div>
            </div>

        </div>
        <!-- END row -->
    </div>
</section>