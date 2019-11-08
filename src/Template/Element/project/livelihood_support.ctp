<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 order-1 main">
                <div class="row">
                    <div class="col-md-5 mb-5">
                        <?= $this->Html->image('livelehood_support.jpg', array( 'alt'=>"livelihood_support" , 'class'=>"img-fluid dynImage")); ?>
                    </div>
                    <div class="col-md-7">
                        <b>Livelihood Support Program</b>
<div id="accordion">
    <div class="card mb-2">
    <h5 class="mb-0">
        <a href="#" class="btn btn-link button" data-imagename="livelehood_support" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
       Income Generation Package Distribution
        <span class="icon ion-chevron-down"></span>
        </a>
    </h5>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
        <div class="card-body">
        The economic systems of Dhading District was destructed immensely by the earthquake, 2015. So, Sahayata Nepal feel that there should be some initiative from government and non-government sectors.  Intially, Sahayata Nepal have distributed beehives to must affected 7 villagers of Gajuri Area.  After that Poultry rearing units which include 20 chickens of the age 8 weeks, feeds for 1 month, feeding pots were distributed to 30 beneficiaries belonging to Pani tanki, Phalatae, Dandawari, Kumal Gaon, Nayabari and Ambagari village of Dhading District. After supports  of the income generation package, there is frequent visit by the vet doctors to observe the progress of the beneficiaries for establishing small scale business. 
        </div>
    </div>
    </div>
    <div class="card mb-2">
    <h5 class="mb-0">
        <a href="#" class="btn btn-link collapsed button" data-imagename="fodder_farm" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Establishment of Fodder Farm
        <span class="icon ion-chevron-down"></span>
        </a>
    </h5>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
        <div class="card-body">
        The farmers of Dhading District are very much interested to establish the business of livestock rearing. However, they are facing the problem regarding the fodder farm due to effect of climate change. So, Sahayata Nepal have established 10 fodder farms in different locations of Dhading District. Shayata Nepal has expected that with the establishment of fodder farms, the farmers engaged in the livestock rearing will able to get the nutritious forage for their livestocks around the year. 
        </div>
    </div>
    </div>

    </div>

</div>

</div>
                </div>
            </div>

        </div>
        <!-- END row -->
    </div>
</section>
<style>
.body_text p {
    font-size: 16px;
    line-height: 22px;
    letter-spacing: .54px;
    font-family: CaeciliaLTPro-45Light;
    margin-bottom: 15px;
    text-align: justify;
}
</style>
<script>
    $( document ).ready(function() {
        $('.button').click(function(e) {
            var imgName = $(this).attr("data-imagename");
            // console.log( $(this).val( $(this).attr("imagename") ));

            $('.dynImage').attr('src', '/img/'+imgName+'.jpg');
        })
        // console.log( "ready!" );
    });
</script>
