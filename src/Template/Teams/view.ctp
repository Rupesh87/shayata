<?php $this->set('title_for_layout', 'Team Member'); ?>
<?php $this->set('title', 'Our Team Members');?>
<?php $this->set('controller', 'teams'); ?>
<?php $this->set('sub_title_for_layout', $name); ?>
<?= $this->element('breadcrumb') ?>
<?php if ($name == 'prabin') { ?>
   <?= $this->element('team/prabin'); ?>
<?php } elseif ($name == 'shekhar') { ?>
    <?= $this->element('team/shekhar'); ?>
<?php } elseif ($name == 'shekhar') { ?>
    <?= $this->element('team/shekhar'); ?>
<?php } elseif ($name == 'umesh') { ?>
    <?= $this->element('team/umesh'); ?>
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