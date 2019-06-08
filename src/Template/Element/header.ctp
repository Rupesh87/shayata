<header role="banner">
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <a href="#"><span class="fa fa-twitter"></span></a>
                    <a href="#"><span class="fa fa-facebook"></span></a>
                    <a href="#"><span class="fa fa-instagram"></span></a>
                    <a href="#"><span class="fa fa-linkedin"></span></a>
                </div>
                <div class="col-6 text-right d-sm-flex d-flex">
                    <d class="ml-auto">
                        <a href="#" class="btn">Sponsor</a>
                        <a href="#" class="cta-btn">Login</a>
                    </d>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="index.html">Adopted</a>
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
                        <a class="nav-link dropdown-toggle" href="services.html" id="dropdown04" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Adoption</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                            <a class="dropdown-item" href="adoption.html">Adoption</a>
                            <a class="dropdown-item" href="adoption.html">Waiting Children</a>
                            <a class="dropdown-item" href="adoption-how-to.html">How to Adopt</a>
                        </div>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="news.html">Success Stories</a>
                    </li>
                    <li class="nav-item">
                        <?php echo $this->Html->link(__('About Us', true), array('controller' => 'pages', 'action' => 'about_us'), array('class' => 'nav-link'));?>
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
    $(document).ready(function(){
        var url = window.location.href;
        var url = url.replace('http://localhost','');
        $('a[href="'+url+'"]').addClass('active');
    });
</script>