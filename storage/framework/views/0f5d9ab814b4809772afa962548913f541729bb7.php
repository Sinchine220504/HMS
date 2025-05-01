

<?php $__env->startSection('content'); ?>
<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('contactus')->html();
} elseif ($_instance->childHasBeenRendered('VxVYKB2')) {
    $componentId = $_instance->getRenderedChildComponentId('VxVYKB2');
    $componentTag = $_instance->getRenderedChildComponentTagName('VxVYKB2');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('VxVYKB2');
} else {
    $response = \Livewire\Livewire::mount('contactus');
    $html = $response->html();
    $_instance->logRenderedChild('VxVYKB2', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\SINCHINE DAS\OneDrive\Desktop\first\hospitalMS\resources\views/contact.blade.php ENDPATH**/ ?>