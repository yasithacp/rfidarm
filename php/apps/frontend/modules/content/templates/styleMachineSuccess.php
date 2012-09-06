<?php echo stylesheet_tag('style') ?>
<div id="nationality">
    <div class="outerbox">

        <div class="mainHeading"><h2 id="styleMachineHeading"><?php echo "Add Frequency"; ?></h2></div>
        <form name="frmMachine" id="frmMachine" method="post" action="<?php echo url_for('content/styleMachine'); ?>" >

            <?php echo $form['_csrf_token']; ?>
            <?php echo $form->renderHiddenFields(); ?>
            <table>
            <tr>
                <td><?php echo $form['machineCode']->renderLabel('Machine Code'. ' <span class="required">*</span>'); ?></td>
                <td><?php echo $form['machineCode']->render(array("class" => "formInput")); ?></td>
            </tr>
            <tr>
                <td><?php echo $form['styleCode']->renderLabel('Style Code'. ' <span class="required">*</span>'); ?></td>
                <td><?php echo $form['styleCode']->render(array("class" => "formInput")); ?></td>
            </tr>
            <tr>
                <td><?php echo $form['frequency']->renderLabel('Frequency'. ' <span class="required">*</span>'); ?></td>
                <td><?php echo $form['frequency']->render(array("class" => "formInput")); ?></td>
            </tr>
            </table>
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

    .formInput{
        width: 120px;
    }

    #machine_frequency{
        width: 110px;
        background-color: #FFFFFF;
        border: 1px solid #888888;
        font-size: 11px;
        padding-left: 4px;
        padding-right: 4px;
    }
    span.required {
        color: red;
    }
</style>