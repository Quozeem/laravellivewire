
<div>
    
    <div class="col-md-6">

    <?php if(count($errors) > 0): ?>
        <div class="alert alert-danger">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Sorry!</strong> invalid input.<br><br>
            <ul style="list-style-type:none;">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>


    <?php if($openModal): ?>
        <?php echo $__env->make('livewire.update', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   
    <?php endif; ?>

   <?php if(Session::has('message')): ?>
    <?php echo e(Session::get('message')); ?>

    <?php endif; ?>
    <?php if($openModalcreate): ?>
        <?php echo $__env->make('livewire.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
    <button wire:click="create()" class="btn btn-sm btn-outline-danger py-0">Create New Account</button> | 
    <table class="table table-striped" style="margin-top:20px;">
        <tr>
            <td>NO</td>
            <td>NAME</td>
            <td>EMAIL</td>
            <td>ACTION</td>
        </tr>

        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($loop->index + 1); ?></td>
                <td><?php echo e($row->name); ?></td>
                <td><?php echo e($row->email); ?></td>
                <td>
                    <button wire:click="edit(<?php echo e($row->id); ?>)" class="btn btn-sm btn-outline-danger py-0">Edit</button> | 
                    <button wire:click="destroy(<?php echo e($row->id); ?>)" class="btn btn-sm btn-outline-danger py-0">Delete</button>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    </div>

</div> 
 <?php /**PATH C:\Users\DELL\Documents\laravel\Scratch card\resources\views/livewire/contact.blade.php ENDPATH**/ ?>