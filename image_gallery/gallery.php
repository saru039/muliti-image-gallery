<?php
include './inc/functions.inc.php';
include './inc/images.inc.php';

?>

<?php include './view/header.php'; ?>

<?php foreach ($imageTitle as $src => $title): ?>
    <div class="gallery-container">
        <a href="image.php?<?php echo http_build_query(['image' => $src]) ?>" class="gallery-item">
            <h3><?php echo e($title); ?></h3>
            <img src="./images/<?php echo rawurlencode($src); ?>" alt="<?php echo e($title); ?>">
        </a>
    </div>
<?php endforeach; ?>


<?php include './view/footer.php'; ?>