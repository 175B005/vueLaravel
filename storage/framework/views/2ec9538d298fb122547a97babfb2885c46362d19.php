<?php $__env->startSection('content'); ?>

<html>
<head>
    <meta charset="utf-8">
    <title>多:多</title>
</head>
<body>

    <form method="post">
        <?php echo e(csrf_field()); ?>

        <input style="width:400px; height:100px" name="contents">
	<input style="width:300px; height:30px" name="writelineTags"
		placeholder="「,」で区切って、タグ付けする(上限5コ)">
    <input type="hidden" value=<?= $userId; ?> name="user_id">
        <button>投稿</button>
    </form>
    <h1>ーーーあなたのツイート一覧ーーー</h1>

      <?php $__currentLoopData = $twiiteList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $twiite): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div style="border: 1px solid #000; display: block; width: 400px; margin-top: 2px">
        <p style="display: inline-block"><?php echo e($twiite->contents); ?></p>
      </div>
      <?php $first = true; ?>
        <?php $__currentLoopData = $twiite->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href="twiite?tag=<?php echo e($tag); ?> " style="
          <?php echo !empty($_GET['tag']) & $first ?
           'color: red' : 'color: inherit'
          ?>
        ">
         <?php $first = false; ?>
          <p style="display: inline-block; margin-left: 10px; border: 1px solid #5fa; max-width: 200px"><?php echo e($tag); ?></p>
        </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>
</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>