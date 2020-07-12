<?php if(\Route::currentRouteName() == 'userscreate'): ?>

    <meta name="_token" content="<?php echo e(csrf_token()); ?>" />
    <?php echo e(method_field('post')); ?>

    <?php echo Form::open(['autocomplete'=> 'off','method' => 'POST','route' => ['userstore'], 'id'=> 'form','role' => 'form', 'data-toggle' => 'validator', 'novalidate' => 'true', 'enctype' => 'multipart/form-data']); ?>

        <?php echo e(csrf_field()); ?>

<?php $title       = 'Submit' ;?>
<?php else: ?>
<?php echo Form::model($users, ['method' => 'POST','route' => ['updateusers', $users->id], 'id'=> 'formUpdate','role' => 'form', 'data-toggle' => 'validator', 'novalidate' => 'true', 'enctype' => 'multipart/form-data']); ?>

<?php $title       = 'Update' ;?>
<?php endif; ?>

<div class="has-feedback form-group<?php echo e($errors->has('name')?" is-invalid":""); ?> ">
    <label>Name:</label>
    <?php echo e(Form::text('name',$names, ['class' => 'form-control'])); ?>

    <span class="invalid-feedback error-name" role="alert"></span>
</div>
<div class="has-feedback form-group<?php echo e($errors->has('email')?" is-invalid":""); ?> ">
    <label>Email:</label>
    <?php echo e(Form::email('email',$email, ['class' => 'form-control'])); ?>

    <span class="invalid-feedback error-email" role="alert"></span>
</div>
<div class="has-feedback form-group<?php echo e($errors->has('password')?" is-invalid":""); ?> ">
    <label>Password:</label>
    <?php echo e(Form::input('password','password',$password, ['class' => 'form-control'])); ?>

    <span class="invalid-feedback error-password" role="alert"></span>
</div>
<div class="form-group">
    <button type="submit" class="btn btn-block btn-primary"><?php echo e($title); ?></button>
</div><?php /**PATH /var/www/html/crud-book/resources/views/users/form.blade.php ENDPATH**/ ?>