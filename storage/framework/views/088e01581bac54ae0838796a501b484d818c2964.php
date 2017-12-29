<?php $__env->startSection('title','| All posts'); ?>

<?php $__env->startSection('content'); ?>
	<div class="row">
		<div class="col-md-10">
			<h1>All Posts</h1>
		</div>
		<div class="col-md-2">
			<a href="<?php echo e(route('posts.create')); ?>" class="btn btn-lg btn-block btn-primary btn-h1-spacing">Create New <span class="glyphicon glyphicon-plus"></span></a>
		</div>
		<hr />
	</div>

	<div class="row">
		<div class="col-md-12">
			<table class="table">
				<thead>
					<th>#</th>
					<th>Title</th>
					<th>Body</th>
					<th>Created At</th>
					<th></th>
				</thead>
				<tbody>
					<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<th><?php echo e($post->id); ?></th>
							<td><?php echo e($post->title); ?></td>
							<td><?php echo e(str_limit($post->body,50)); ?></td>
							<td><?php echo e(date('M j, Y',strtotime($post->created_at))); ?></td>
							<td>
								<a href="<?php echo e(route('posts.show',$post->id)); ?>" class="btn btn-default">View</a> 
								<a href="<?php echo e(route('posts.edit',$post->id)); ?>" class="btn btn-default">Edit</a> 
							</td>
						</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tbody>
			</table>
			<div class="text-center">
				<?php echo $posts->links(); ?>

			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>