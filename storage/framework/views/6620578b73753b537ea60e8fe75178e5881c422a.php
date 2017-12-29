<?php $__env->startSection('title',' | Create New Post'); ?>
<?php $__env->startSection('stylesheet'); ?>
	<?php echo Html::style('css/parsley.css'); ?>

	<?php echo Html::style('css/select2.min.css'); ?>

	<script src="//cloud.tinymce.com/stable/tinymce.min.js"></script>

  	<script>
  		tinymce.init({
  			selector:'textarea',
  			plugins: "link",
  			menubar:false
  		});
  	</script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Create New Post</h1>
			<hr />
			<?php echo Form::open(array('route'=>'posts.store','files'=>true)); ?>

			    <?php echo e(Form::label('title','Title:')); ?>

			    <?php echo e(Form::text('title',null,array('class'=>'form-control'))); ?>


			    <?php echo e(Form::label('slug','Post Slug:')); ?>

			    <?php echo e(Form::text('slug',null,array('class'=>'form-control'))); ?>


			    <?php echo e(Form::label('category','Select Category:')); ?>

			    <select class="form-control" name="category">
			    	<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			    		<option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
			    	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			    </select>

				<?php echo e(Form::label('tags','Select Tag:')); ?>

			    <select class="form-control js-example-basic-multiple" name="tags[]" multiple="multiple">
			    	<?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			    		<option value='<?php echo e($tag->id); ?>'><?php echo e($tag->name); ?></option>
			    	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			    </select>

					<?php echo e(Form::label('img','Upload featured image:')); ?>

					<?php echo e(Form::file('img');); ?>


			    <?php echo e(Form::label('body','Post Body:')); ?>

			    <?php echo e(Form::textarea('body',null,array('class'=>'form-control'))); ?>


			    <?php echo e(Form::submit('Create Post',array('class'=>'btn btn-success btn-lg btn-block','style'=>'margin-top:20px;'))); ?>

			<?php echo Form::close(); ?>

		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
	<?php echo Html::script('js/parsley.min.js'); ?>

	<?php echo Html::script('js/select2.min.js'); ?>


	<script type="text/javascript">
		$(".js-example-basic-multiple").select2();
	</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>