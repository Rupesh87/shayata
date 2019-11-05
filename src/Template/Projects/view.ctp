<?php $this->set('title_for_layout', 'Our Projects'); ?>
<?php $this->set('title', 'Our Projects');?>
<?php $this->set('controller', 'projects'); ?>
<?php $this->set('sub_title_for_layout', $name); ?>
<?= $this->element('breadcrumb') ?>
<?php if ($name == 'vocation_training') { ?>
   <?= $this->element('project/vocation_training'); ?>
<?php } elseif ($name == 'drinking_water') { ?>
    <?= $this->element('project/drinking_water'); ?>
<?php } elseif ($name == 'waste_management') { ?>
    <?= $this->element('project/waste_management'); ?>
<?php } ?>
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
