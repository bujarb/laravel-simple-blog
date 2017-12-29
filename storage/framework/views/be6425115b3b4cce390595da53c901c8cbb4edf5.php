<?php $__env->startSection('title','| User'); ?>

<?php $__env->startSection('content'); ?>
	<div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <img src="http://placehold.it/380x500" alt="" class="img-rounded img-responsive" />
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <h4><?php echo e($user->name); ?></h4>
                        <small><cite title="San Francisco, USA"><?php echo e($user->address); ?> <i class="glyphicon glyphicon-map-marker">
                        </i></cite></small>
                        <p>
                            <i class="glyphicon glyphicon-envelope"></i><?php echo e($user->email); ?>

                            <br />
                            <i class="glyphicon glyphicon-globe"></i><a href="http://www.jquery2dotnet.com">www.jquery2dotnet.com</a>
                            <br />
                            <i class="glyphicon glyphicon-gift"></i>June 02, 1988
                            <br />
                            Role:<?php echo e($user->role_id); ?></p></p>
                        <!-- Split button -->
                        <a href="<?php echo e(route('user.edit',$user->id)); ?>" class="btn btn-primary">Update</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>