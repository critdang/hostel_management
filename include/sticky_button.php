<!-- Sticky button -->
<?php include('./models/ButtonIndexModel.php') ?>
<div class="sticky_btn">
    <a href="?manage=checkout">
        <i class="fas fa-shopping-cart"></i>
    </a>
    <span class="sticky_notice">
    <?php echo $num>0?$num:"" ?>

    </span>
</div>