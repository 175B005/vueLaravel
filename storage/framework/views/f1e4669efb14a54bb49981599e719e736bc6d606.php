<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>他:他</title>
</head>
<body>
    <form method="post">
        <?php echo e(csrf_field()); ?>

        <input style="width:400px; height:160px" name="contents">
	<input style="width:300px; height:30px" name="writelineTags"
		placeholder="「,」で区切って、タグ付けする(上限5コ)">
        <button>投稿</button>
    </form>
    <?php $__currentLoopData = $twiite; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tw): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <p><?php echo e($tw->contents); ?></p>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>
</html>
