<?php $__env->startSection('content'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <meta
          name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <meta name="description" content="" />
        <meta name="author" content="" />

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">

        




        <!-- Stylesheets -->
        <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/font-awesome.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('fonts/iconic/css/material-design-iconic-font.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('vendor/animate/animate.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('vendor/css-hamburgers/hamburgers.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('vendor/animsition/css/animsition.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('vendor/select2/select2.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('vendor/daterangepicker/daterangepicker.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/util.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/main.css')); ?>">

</head>
<body> 


<div class="limiter">
        <div class="container-login100" >
          <div class="wrap-login100">
            <form  action="<?php echo e(route('login')); ?>"  method="POST" class="login100-form validate-form" >
              <?php echo csrf_field(); ?>
              
              
              <span class="login100-form-title p-b-34 p-t-27">
              <?php echo e(__('Welcome Back!')); ?>

              </span>

    
              <div class="wrap-input100 validate-input" data-validate = "Enter email">
                <input id="email" value="<?php echo e(old('email')); ?>" class="input100 <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" placeholder="Enter Email" type="email"   required autocomplete="email"  autofocus>
                <span class="focus-input100" data-placeholder="&#xf207;"></span>
                <?php $__errorArgs = ['email'];
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


    
              <div class="wrap-input100 validate-input" data-validate="Enter password">
                <input id="password" value="<?php echo e(old('password')); ?>"  class="input100 <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" type="password"  placeholder="Password" required autocomplete="current-password">
                <span class="focus-input100" data-placeholder="&#xf191;"></span>

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


    
              <div class="contact100-form-checkbox">
                <input class="input-checkbox100" id="remember" type="checkbox" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                <label class="label-checkbox100" for="remember">
                  <?php echo e(__ ('Remember Me')); ?>

                </label>
              </div>
    
              <div class="container-login100-form-btn">
                <button type="submit" class="login100-form-btn" >
                  <?php echo e(__('Login')); ?>

                </button>
              </div>
    

            <?php if(Route::has('password.request')): ?>
              <div class="text-center p-t-90">
                <a class="txt1" href="<?php echo e(route('password.request')); ?>">
                  <?php echo e(__ ('Forgot Your Password')); ?>

                </a>
            <?php endif; ?>
              </div>



            </form>
          </div>
        </div>
      </div>
      
    
      <div id="dropDownSelect1"></div>


      <!-- important -->
      <script src="<?php echo e(asset('vendor/jquery/jquery-3.2.1.min.js')); ?>" type="text/javascript" ></script>
      <script src="<?php echo e(asset('vendor/animsition/js/animsition.min.js')); ?>" type="text/javascript" ></script>
      <script src="<?php echo e(asset('vendor/bootstrap/js/popper.js')); ?>" type="text/javascript" ></script>
      <script src="<?php echo e(asset('vendor/bootstrap/js/bootstrap.min.js')); ?>" type="text/javascript" ></script>
      <script src="<?php echo e(asset('vendor/select2/select2.min.js')); ?>" type="text/javascript" ></script>
      <script src="<?php echo e(asset('vendor/daterangepicker/moment.min.js')); ?>" type="text/javascript" ></script>
      <script src="<?php echo e(asset('vendor/daterangepicker/daterangepicker.js')); ?>" type="text/javascript" ></script>
      <script src="<?php echo e(asset('vendor/countdowntime/countdowntime.js')); ?>" type="text/javascript" ></script>
      <script src="<?php echo e(asset('vendor/daterangepicker/daterangepicker.js')); ?>" type="text/javascript" ></script>
      <script src="<?php echo e(asset('js/main.js')); ?>" type="text/javascript" ></script>




</body>
</html>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mikael/Documents/GitHub/budget-better/BudgetBetter/resources/views/auth/login.blade.php ENDPATH**/ ?>