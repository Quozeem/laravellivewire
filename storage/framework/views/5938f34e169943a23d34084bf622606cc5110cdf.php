

<?php $__env->startSection('content'); ?>
    <div class="flex justify-center">
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('contact')->html();
} elseif ($_instance->childHasBeenRendered('BnlaUco')) {
    $componentId = $_instance->getRenderedChildComponentId('BnlaUco');
    $componentTag = $_instance->getRenderedChildComponentTagName('BnlaUco');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('BnlaUco');
} else {
    $response = \Livewire\Livewire::mount('contact');
    $html = $response->html();
    $_instance->logRenderedChild('BnlaUco', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    </div>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DELL\Documents\laravel\Scratch card\resources\views/contants.blade.php ENDPATH**/ ?>