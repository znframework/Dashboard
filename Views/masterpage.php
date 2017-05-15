
<script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.2.6/ace.js" type="text/javascript" charset="utf-8"></script>

<div id="wrapper"><?php

Import::view('top.wizard');

?>
<div id="page-wrapper">
<div class="container-fluid">


<?php

Import::view(suffix($page, '.wizard'), $pdata ?? NULL);

?>

<?php if( $success = redirectData('success') ):
redirectDeleteData('success'); ?>
<div class="row">
    <div class="col-lg-12">
        <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <i class="fa fa-info-circle"></i> <?php echo $success; ?>
        </div>
    </div>
</div>
<?php endif; ?>

<?php if( $error ?? NULL ): ?>
<div class="row">
    <div class="col-lg-12">
        <div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <i class="fa fa-info-circle"></i> <?php echo  $error; ?>
        </div>
    </div>
</div>
<?php endif; ?>


</div>
</div>

<div class="container-fluid">
  <p class="text-muted text-right" style="margin-top:12px">ZN Framework Dashboard, Copyright © 2017 ZN Framework, All Rights Reserved</p>
</div>

</div>



<script>


function deleteProcess(link)
{
    if( confirm('<?php echo LANG['areYouSure']; ?>') )
    {
        window.location =  '<?php echo siteUrl(); ?>' + link;
    }
}
</script>
