<?php echo stylesheet_tag('style') ?>
<div id="nationality">
    <div class="outerbox">

        <div class="mainHeading"><h2 id="machineHeading"><?php echo "Add Machine Code"; ?></h2></div>
        <form name="frmMachine" id="frmMachine" method="post" action="<?php echo url_for('content/machine'); ?>" >

            <?php echo $form['_csrf_token']; ?>
            <?php echo $form->renderHiddenFields(); ?>

            <div class="newColumn">
                <?php echo $form['machineCode']->renderLabel('Machine Code'. ' <span class="required">*</span>'); ?>
                <?php echo $form['machineCode']->render(array("class" => "formInput", "maxlength" => 100)); ?>
                <div class="errorHolder"></div>
            </div>
            <br class="clear"/>
            <div class="formbuttons">
                <input type="submit" class="savebutton" name="btnSave" id="btnSave"
                       value="<?php echo "Save"; ?>"onmouseover="moverButton(this);" onmouseout="moutButton(this);"/>
                <input type="button" class="cancelbutton" name="btnCancel" id="btnCancel"
                       value="<?php echo "Cancel"; ?>"onmouseover="moverButton(this);" onmouseout="moutButton(this);"/>
            </div>

        </form>
    </div>
</div>
<div class="paddingLeftRequired"><?php echo 'Fields marked with an asterisk' ?> <span class="required">*</span> <?php echo 'are required.' ?></div>
<script type="text/javascript">
    var isSaved = '<?php echo $isSaved; ?>';

    if(isSaved == 'yes'){
        alert("Successfully Added");
    }
</script>

<style type="text/css">
    span.required {
        color: red;
    }
</style>