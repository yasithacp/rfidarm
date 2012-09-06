<?php echo stylesheet_tag('style') ?>

<div id="resultDiv">
    <div class="outerbox">
        <div class="mainHeading"><h2 id="resultHeading"><?php echo 'Result Set' ?></h2></div>
        <table width="100%" cellspacing="0" cellpadding="0" class="data-table" id="tblStockItems">
            <thead>
            <tr>
                <td class="number"><?php echo "#No"; ?></td>
                <td><?php echo "Style Code"; ?></td>
            </tr>
            </thead>
            <tbody>
            <?php
            if(!empty($results)) {
            $row = 0;
            $i =1;
            foreach ($results as $result)
            {
                $cssClass = ($row%2) ? 'even' : 'odd';
                ?>
            <tr class="trHover<?php echo " ".$cssClass;?>">
                <td class="number"><?php echo $i; ?></td>
                <td><?php echo $result; ?></td>
            </tr>
                <?php   $row++; $i++;
            }
            }
            ?>
            </tbody>
        </table>
    </div>
</div>

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

    ul, li {
        list-style-type: none;
    }

    .number{
        width: 100px;
    }

</style>