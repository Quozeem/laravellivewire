<?php $__env->startSection('content'); ?>
    <div class="flex justify-center">
    <b>Search & Pagination with Livewire in Laravel 8</b>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('pagination')->html();
} elseif ($_instance->childHasBeenRendered('j0cpDNw')) {
    $componentId = $_instance->getRenderedChildComponentId('j0cpDNw');
    $componentTag = $_instance->getRenderedChildComponentTagName('j0cpDNw');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('j0cpDNw');
} else {
    $response = \Livewire\Livewire::mount('pagination');
    $html = $response->html();
    $_instance->logRenderedChild('j0cpDNw', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    </div>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DELL\Documents\laravel\Scratch card\resources\views/welcome.blade.php ENDPATH**/ ?>