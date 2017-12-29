<?php $__env->startSection('title','| Edit Tag'); ?>

<?php $__env->startSection('content'); ?>

	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<h1>Edit the <strong><?php echo e($tag->name); ?></strong> Tag</h1>
			<?php echo e(Form::model($tag,['route'=>['tags.update',$tag->id],'method'=>'PUT'])); ?>

				<?php echo e(Form::label('name','Name:')); ?>

				<?php echo e(Form::text('name',null,['class'=>'form-control'])); ?>

				<?php echo e(Form::submit('Save Changes',['class'=>'btn btn-success btn-block','style'=>'margin-top:10px'])); ?>

			<?php echo e(Form::close()); ?>

		</div>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>