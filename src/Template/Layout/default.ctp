
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800|Sacramento" rel="stylesheet">

    <!-- Theme Style -->
    <?= $this->Html->css(array(
        'bootstrap',
        'animate', 
        'owl.carousel.min', 
        'font-awesome.min', 
        'ionicons.min',
        'style'
        )) ?>

    <?= $this->Html->script(
        array(
            'jquery-3.2.1.min'
            )
        ) 
    ?>
    <?= $this->Html->meta('icon') ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <?= $this->Flash->render() ?>
    <?= $this->element('header') ?>
    <?= $this->fetch('content') ?>
    <?= $this->element('footer') ?>
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>
    <?= $this->Html->script(
        array(
            'popper.min', 
            'bootstrap.min',
            'owl.carousel.min', 
            'jquery.waypoints.min', 
            'main'
            )
        ) 
    ?>
</body>
</html>
