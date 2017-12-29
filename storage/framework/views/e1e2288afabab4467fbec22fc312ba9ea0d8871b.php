<?php $__env->startSection('title',"| $post->title"); ?>

<?php $__env->startSection('stylesheet'); ?>
	<style type="text/css">
		.abc{
			margin-top:50px;
		}

		.button-margin{
			margin-top: 5px;
		}

	</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
	
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1><?php echo e($post->title); ?></h1>
			<p><?php echo $post->body; ?></p>
			<hr>
			<p>Posted in: <?php echo e($post->category->name); ?></p>
		</div>
	</div>

	<div class="row">
		<div id="comment-form" class="col-md-8 col-md-offset-2 abc">
			<?php echo e(Form::open()); ?>

				<div class="row">
					<div class="col-md-6">
						<?php echo e(Form::label('name','Name:')); ?>

						<?php echo e(Form::text('name',null,['class'=>'form-control'])); ?>

					</div>
					<div class="col-md-6">
						<?php echo e(Form::label('email','Email:')); ?>

						<?php echo e(Form::text('email',null,['class'=>'form-control'])); ?>

					</div>
					<div class="col-md-12">
						<?php echo e(Form::label('comment','Comment:')); ?>

						<?php echo e(Form::textarea('comment',null,['class'=>'form-control','rows'=>'5'])); ?>


						<?php echo e(Form::submit('Add Comment',['class'=>'btn btn-success btn-block button-margin'])); ?>

					</div>
				</div>
			<?php echo e(Form::close()); ?>

		</div>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>