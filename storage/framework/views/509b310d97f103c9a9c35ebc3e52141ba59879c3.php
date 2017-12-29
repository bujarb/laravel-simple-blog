<?php $__env->startSection('title','| View Post'); ?>

<?php $__env->startSection('stylesheet'); ?>
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
		<h1>Edit Post</h1>
		<hr />
		<?php echo Form::model($post,['route' => ['posts.update',$post->id],'method'=>'PUT']); ?>

		<div class="col-md-8">

			<?php echo e(Form::label('title','Title:')); ?>

			<?php echo e(Form::text('title',null,['class'=>'form-control input-lg'])); ?>


			<?php echo e(Form::label('category','Category:')); ?>

			<?php echo e(Form::select('category_id',$categories,null,['class'=>'form-control'])); ?>


			<?php echo e(Form::label('tags','Select Tag:')); ?>

			<?php echo e(Form::select('tags[]',$tags,null,['class'=>'js-example-basic-multiple form-control','multiple'=>'multiple'])); ?>


			<?php echo e(Form::label('slug','Slug:')); ?>

			<?php echo e(Form::text('slug',null,['class'=>'form-control input-lg'])); ?>


			<?php echo e(Form::label('body','Body:',array('class'=>'form-space'))); ?>

			<?php echo e(Form::textarea('body',null,['class'=>'form-control'])); ?>


		</div>
		<div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">
					<dt>Create At:</dt>
					<dd><?php echo e(date('M j , Y h:ia',strtotime($post->created_at))); ?></dd>
				</dl>

				<dl class="dl-horizontal">
					<dt>Last Updated:</dt>
					<dd><?php echo e(date('M j , Y h:ia',strtotime($post->updated_at))); ?></dd>
				</dl>
				<hr />

				<div class="row">
					<div class="col-sm-6">

						<a href="<?php echo e(action('PostController@show', ['id' => $post->id])); ?>" class="btn btn-danger btn-block">Cancel</a>
					</div>
					<div class="col-sm-6">
					<?php echo e(Form::submit('Save Changes',['class'=>'btn btn-success btn-block'])); ?>

					</div>
				</div>
			</div>
		</div>
		<?php echo Form::close(); ?>

	</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
	<?php echo Html::script('js/select2.min.js'); ?>

	<?php echo Html::script('js/select2.min.js'); ?>


	<script type="text/javascript">
		$(".js-example-basic-multiple").select2();

		$(".js-example-basic-multiple").select2().val(<?php echo json_encode($post->tags()->pluck('tag_id')); ?>).trigger('change');
	</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>