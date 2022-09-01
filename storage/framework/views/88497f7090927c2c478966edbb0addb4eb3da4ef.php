

<?php $__env->startSection('title', 'Giriş Yap'); ?>

<?php $__env->startSection('form'); ?>
    <form action="<?php echo e(route('login.post')); ?>" method="post">
        <?php echo csrf_field(); ?>

        <div class="<?php echo e($errors->all() ? 'group alert' : 'group'); ?>">
            <input type="mail" name="email" class="dynPut" required>
            <label for="mail">E-Posta</label>
        </div>

        <div class="<?php echo e($errors->all() ? 'group alert' : 'group'); ?>">
            <input type="password" name="password" class="dynPut" required>
            <label for="mail">Parola</label>
        </div>

        <div class="group">
            <button class="submit-btn">
                GİRİŞ YAP
            </button>
        </div>
    </form>
    <div class="footer">
        Hesabın yok mu? <a href="#">Erişim İste</a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.mini', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\x\Desktop\Folders\AkilliPhone\akillipanel\resources\views/auth/login.blade.php ENDPATH**/ ?>