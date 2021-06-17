<?php $__env->startSection('content'); ?>


<div class="containerss">
    <div>
        <div class="signin-signup">
            

            <form action="<?php echo e(route('login')); ?>" method="POST" class="sign-in-form">
                <?php echo csrf_field(); ?>
                <h2 class="title">Login</h2> <br>
                <?php if($errors): ?>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="alert alert-danger alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong><?php echo e($error); ?></strong>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
                <?php if($message = Session::get('error')): ?>
                <div class="alert alert-danger alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong><?php echo e($message); ?></strong>
                </div>
                <?php endif; ?>
                <?php if($message = Session::get('success')): ?>
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong><?php echo e($message); ?></strong>
                </div>
                <?php endif; ?>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input id="username" type="username" <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="username"
                        value="<?php echo e(old('username')); ?>" required autocomplete="username" autofocus
                        placeholder="Username/Email">
                    <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input id="password" type="password" <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password"
                        required autocomplete="current-password" placeholder="Password" />

                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                        <?php echo e(old('remember') ? 'checked' : ''); ?>>

                    <label class="form-check-label" for="remember">
                        <?php echo e(__('Remember Me')); ?>

                    </label>
                </div>
                <button type="submit" class="btn btn-primary">
                    <?php echo e(__('Login')); ?>

                </button>
                <div>
                    <?php if(Route::has('password.request')): ?>
                    <a class="forgot" href="<?php echo e(route('password.request')); ?>">
                        <?php echo e(__('Forgot Your Password?')); ?>

                    </a>
                    <?php endif; ?>
                </div>

                <p class="social-text">Or Sign in with social platforms</p>
                <div class="social-media">
                    <a href="#" class="social-icon">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </form>
            <?php echo $__env->make('auth.register', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>

    <div class="panels-containerss">
        <div class="panel left-panel">
            <div class="content">
                <h3>New here ?</h3>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
                    ex ratione. Aliquid!
                </p>
                <button class="btn transparent" id="sign-up-btn">
                    Register
                </button>
            </div>
            <img src="<?php echo e(asset('frontend_login/img/log.svg')); ?>" class="image" alt="" />
        </div>
        <div class="panel right-panel">
            <div class="content">
                <h3>One of us ?</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
                    laboriosam ad deleniti.
                </p>
                <button class="btn transparent" id="sign-in-btn">
                    Login
                </button>
            </div>
            <img src="<?php echo e(asset('frontend_login/img/register.svg')); ?>" class="image" alt="" />
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('form_login.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\E41191224_Ferry Septian Ferdiyanto\B_KELOMPOK_2_Website\YOOVIS\resources\views/auth/login.blade.php ENDPATH**/ ?>