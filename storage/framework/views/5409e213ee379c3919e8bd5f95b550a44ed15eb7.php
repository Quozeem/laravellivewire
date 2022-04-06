
<div>
    <div class="container">
	    <div class="row">
	        <div class="col-md-12">	  
           
          
               
	            <input type="text"  class="form-control" placeholder="Search" wire:model="searchTerm" />      
    <?php if(count($users) == null): ?>
              <?php echo $__env->make('livewire.text', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          <?php elseif($searchTerm != null): ?>
            <?php echo $__env->make('livewire.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
              <?php endif; ?>
             

	        </div>


	    </div>
	</div>
</div>
<?php /**PATH C:\Users\DELL\Documents\laravel\Scratch card\resources\views/livewire/pagination.blade.php ENDPATH**/ ?>