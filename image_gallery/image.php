<?php include "./inc/functions.inc.php" ?>
<?php include "./inc/images.inc.php" ?>

<?php include "./view/header.php" ?>

<?php $image = $_GET['image']; ?>

<?php if (!empty($_GET['image']) && !empty($imageTitle[$_GET['image']])): ?>
    <div class="text-content">
        <h2><?php echo e($imageTitle[$image]) ?></h2>
        <p><?php echo str_replace("\n", "<br />", e($imageDescription[$image])); ?></p>
    </div>
    <img style=" width: 100%;" src="./images/<?php echo rawurlencode($image); ?>" />

<?php else: ?>
    <div class="notice">
        This Image Could Not Found.
    </div>
<?php endif; ?>

<a class="button" href="gallery.php">Back To Gallery</a>

<br /><br /><br /><br />

<?php include "./view/footer.php" ?>