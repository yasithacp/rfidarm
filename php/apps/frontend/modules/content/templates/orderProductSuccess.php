<?php echo stylesheet_tag('style') ?>

<div id="resultDiv">
    <div class="outerbox">
        <div class="mainHeading"><h2 id="resultHeading"><?php echo 'Product List' ?></h2></div>
        <table width="100%" cellspacing="0" cellpadding="0" class="data-table" id="tblStockItems">
            <thead>
            <tr>
                <td class="number"><?php echo "Product"; ?></td>
                <td><?php echo "Max Amount"; ?></td>
                <?php foreach($components as $component) { ?>
                    <td><?php echo $component->name; ?></td>
                <?php } ?>
                <td></td>
            </tr>
            </thead>
            <tbody>
            <?php
            if(!empty($products)) {
                $row = 0;
                $i =1;
                foreach ($products as $product)
                {
                    $cssClass = ($row%2) ? 'even' : 'odd';
                    ?>
                <tr id=<?php echo $product->product_id; ?> class="trHover<?php echo " ".$cssClass;?>">
                    <td class="number"><?php echo $product; ?></td>
                    <td><?php echo "3"; ?></td>
                    <?php foreach($components as $component) { ?>
                        <td><?php echo "0"; ?></td>
                    <?php } ?>
                    <td><input id=<?php echo $product->product_id; ?> type="submit" value="Purchase" /></td>
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
        padding-left: 5px;
    }

</style>