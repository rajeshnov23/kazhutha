<?php if(validation_errors()) { ?>
<div class="alert alert-danger alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <?php echo validation_errors(); ?>
</div>
<?php } ?>

<?php if($this->session->flashdata('success')) { ?>
<div class="alert alert-success alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <?php echo $this->session->flashdata('success'); ?>
</div>
<?php } ?>

<?php if($this->session->flashdata('danger')) { ?>
<div class="alert alert-danger alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <?php echo $this->session->flashdata('danger'); ?>
</div>
<?php } ?>