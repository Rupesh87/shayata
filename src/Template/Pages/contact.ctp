<?php $this->set('title_for_layout', 'Contact'); ?>
<?php $this->set('title', 'Contact');?>
<?= $this->element('breadcrumb') ?>
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-4 order-2 sidebar">


                <div class="sidebar-box">
                    <h3 class="mb-4">Contact Details</h3>
                    <h5 class="text-uppercase mb-3 h6 text-black">Address</h5>
                    <p class="mb-5">Kathmandu, Nepal</p>

                    <h5 class="text-uppercase mb-3 h6 text-black">Email Us At</h5>
                    <p class="mb-5"><a href="mailto:nepal.sahayata@gmail.com">nepal.sahayata@gmail.com</a></p>

                    <h5 class="text-uppercase mb-3 h6 text-black">Call Us</h5>
                    <p>Phone: 01-0402030</p>
                </div>



            </div>
            <div class="col-md-8 order-1 main">
                <div class="row">

                    <div class="col-md-12">
                        <h2>Let's chat</h2>
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label for="name">Name</label>
                                    <input type="text" id="name" class="form-control ">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" id="phone" class="form-control ">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label for="email">Email</label>
                                    <input type="email" id="email" class="form-control ">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label for="message">Write Message</label>
                                    <textarea name="message" id="message" class="form-control " cols="30"
                                        rows="8"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="submit" value="Send Message" class="btn btn-primary">
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>
        <!-- END row -->
    </div>
</section>

<section class="section-subscribe bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="map"></div>
            </div>
        </div>
    </div>
</section>

<script>
    var map;
    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            center: { lat: -34.397, lng: 150.644 },
            zoom: 8
        });
    }
</script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBQOj4vhUqEAu-LaNiQ9s9Njr8GlI4fls8&callback=initMap"
    type="text/javascript"></script>
<style>
    #map {
        height: 350px;
        width: 100%;
        background-color: #CCC;
    }
</style>