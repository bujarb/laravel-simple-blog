<?php $__env->startSection('title','|'); ?>

<?php $__env->startSection('content'); ?>
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<form action="<?php echo e(route('user.update',$user->id)); ?>">
				<label>Username</label>
				<input type="text" name="name" value="<?php echo e($user->name); ?>" class="form-control">
				<label>Email:</label>
				<input type="text" name="username" value="<?php echo e($user->email); ?>" readonly="" class="form-control">
				<label>Address:</label>
				<input type="text" name="address" value="<?php echo e($user->address); ?>" readonly="" class="form-control">
				<button class="btn btn-block btn-primary btn-lg btn-h1-spacing">Update</button>
			</form>
				<a href="<?php echo e(route('user.show',$user->id)); ?>" class="btn btn-danger btn-lg btn-block btn-h1-spacing"> Cancel</a>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>