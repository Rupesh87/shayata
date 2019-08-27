<header role="banner">
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <a href="#"><span class="fa fa-twitter"></span></a>
                    <a href="#"><span class="fa fa-facebook"></span></a>
                    <a href="#"><span class="fa fa-instagram"></span></a>
                    <a href="#"><span class="fa fa-linkedin"></span></a>
                </div>
                <div class="col-8 text-right d-sm-flex d-flex">
                    <d class="ml-auto">
                        <?php 
                            echo $this->Html->link($this->Html->tag('i', '',array('class' => 'fa fa-phone') ) . __(' 01-0402030'), 
                                array( 'action' => 'contact'), 
                                array('class' => 'text-white', 'escape' => false));
                            echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-envelope') ) . __('  nepal.sahayata@gmail.com'), 
                                array( 'action' => 'contact'), 
                                array('class' => 'text-white', 'escape' => false));
                           
                        ?>
                    </d>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <?php echo $this->Html->link(__('SHAYATA NEPAL', true), array('controller' => 'pages', 'action' => 'index'), array('class' => 'navbar-brand'));?>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05"
                aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample05">
                <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
                    <li class="nav-item">
                        <?php echo $this->Html->link(__('Home', true), array('controller' => 'pages', 'action' => 'home'), array('class' => 'nav-link'));?>
                    </li>
                    <li class="nav-item dropdown">
                        <!-- <a class="nav-link dropdown-toggle" href="services.html" id="dropdown04" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Adoption</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                            <a class="dropdown-item" href="adoption.html">Adoption</a>
                            <a class="dropdown-item" href="adoption.html">Waiting Children</a>
                            <a class="dropdown-item" href="adoption-how-to.html">How to Adopt</a>
                        </div>

                    </li> -->
                    <li class="nav-item">
                        <?php echo $this->Html->link(__('About Us', true), array('controller' => 'pages', 'action' => 'about'), array('class' => 'nav-link'));?>
                    </li>
                    <li class="nav-item">
                    <?php echo $this->Html->link(__('Our Team', true), array('controller' => 'teams', 'action' => 'index'), array('class' => 'nav-link'));?>
                    </li>
                    <li class="nav-item">
                    <?php echo $this->Html->link(__('Programs', true), array('controller' => 'projects', 'action' => 'index'), array('class' => 'nav-link'));?>
                    </li>
                    <li class="nav-item">
                        <?php echo $this->Html->link(__('Contact', true), array('controller' => 'pages', 'action' => 'contact'), array('class' => 'nav-link'));?>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
</header>
<script>
    $(document).ready(function () {
        var url = window.location.href;
        var url = url.replace('http://localhost', '');
        $('a[href="' + url + '"]').addClass('active');
    });
</script>