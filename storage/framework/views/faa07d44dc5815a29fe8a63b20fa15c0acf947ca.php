
                <table class="table table-bordered" style="margin: 10px 0 10px 0;">
	                <tr>
                    <th>S/N</th>
	                    <th>Name</th>
	                    <th>Email</th>
                        <th>Title</th>
	                    <th>Description</th>
	                </tr>
	                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	                <tr>
                    <td>
	                        <?php echo e($loop->index +1); ?>

	                    </td>
	                    <td>
	                        <?php echo e($user->name); ?>

	                    </td>
	                    <td>
	                        <?php echo e($user->email); ?>

	                    </td>
                        <td>
	                        <?php echo e($user->title); ?>

	                    </td>
                        <td>
	                        <?php echo e($user->description); ?>

	                    </td>
	                </tr>
	                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	            </table>
                <?php echo e($users->links()); ?><?php /**PATH C:\Users\DELL\Documents\laravel\Scratch card\resources\views/livewire/tip.blade.php ENDPATH**/ ?>