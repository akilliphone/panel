<?php $__env->startSection('title', 'Kullanıcı Tipi Ekle - Akıllıphone'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Yeni Kullanıcı Tipi Ekle</h1>
    <form action="<?php echo e(route('panel.users.types.create')); ?>" method="POST" class="mt-3">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="code" class="form-label">Kullanıcı tipi kodu</label>
            <input type="text" class="form-control" placeholder="example" name="code">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Kullanıcı tipi adı</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="mb-3">
            <p>Kullanıcı tipi durumu</p>
            <label class="switch">
                <input type="checkbox" name="status" checked>
                <span class="slider round"></span>
            </label>
        </div>
        <button type="submit" class="btn btn-primary">Kullanıcı tipi ekle</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\x\Desktop\Folders\AkilliPhone\akillipanel\resources\views/dashboard/users/type/create.blade.php ENDPATH**/ ?>