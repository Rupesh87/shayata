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
                    <?= $this->Html->image('umesh.jpg', array( 'alt'=>"Image Placeholder" , 'class'=>"img-fluid", 'style' => 'width: 200px;')); ?>
                    </div>
                    <div class="col-md-8 body_text">
                        <p>Mr. Umesh Kaji Manandhar, lecturer by profession has joined Sahayata Nepal from 2014.  He is actively involving in the public relation and fund raising sector of the organization. After completing Master in Microbiology, he parallelly engaged in both education field and social work field. He is lecturer of many colleges like Bhaktapur Homeopathic Clinic and Medical College, KIST college (B.Sc  and M.Sc Microbiology), Hope international college (Baclelar in public health and Nursing ), Pinnacle College (B.Sc. Microbiology) etc. Similarly, for contributing in social sectors, he has actively involved in various social organizations. Beside being member of Sahayata Nepal, he is the vice-president of Microbiological Research Organization (MiRON). Member of executive committee of  Bhaktapur District Manandhar Youth Assiociation. In addition to these involvements, he is currently working as Chief Lab incharge in MiRON Laboratary and research Center. </p>
                    </div>
                </div>
            </div>

        </div>
        <!-- END row -->
    </div>
</section>