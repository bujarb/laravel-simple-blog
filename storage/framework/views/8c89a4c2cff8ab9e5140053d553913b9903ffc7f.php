 

 <?php $__env->startSection('title',' | Home'); ?>

 <?php $__env->startSection('content'); ?>
 <div class="row">
        <div class="col-md-12">
          <div class="jumbotron">
            <h1>Welcome to my blog!</h1>
            <p class="lead">Thank you for visiting. This is my test website built with laravel. Please read my popular posts.</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Posts</a></p>
          </div>
        </div>
      </div><!-- End of .row -->

      <div class="row">
        <div class="col-md-8">
          <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="post">
              <h3><?php echo e($post->title); ?></h3>
              <p><?php echo e(substr(strip_tags($post->body),0,300)); ?><?php echo e(strlen(strip_tags($post->body))>300 ? "...": ""); ?></p>
              <a href="<?php echo e(url('blog/'.$post->slug)); ?>" class="btn btn-primary">Read more</a>
            </div>
            <hr />
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      <div class="col-md-3 col-md-offset-1">
    <h2>Sidebar</h2>
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>