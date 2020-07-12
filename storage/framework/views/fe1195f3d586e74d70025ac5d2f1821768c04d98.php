<?php if(\Route::currentRouteName() == 'create'): ?>

    <meta name="_token" content="<?php echo e(csrf_token()); ?>" />
    <?php echo e(method_field('post')); ?>

    <?php echo Form::open(['autocomplete'=> 'off','method' => 'POST','route' => ['storebooks'], 'id'=> 'form','role' => 'form', 'data-toggle' => 'validator', 'novalidate' => 'true', 'enctype' => 'multipart/form-data']); ?>

        <?php echo e(csrf_field()); ?>

<?php $title       = 'Submit' ;?>
<?php else: ?>
<?php echo Form::model($books, ['method' => 'POST','route' => ['updatebooks', $books->id], 'id'=> 'formUpdate','role' => 'form', 'data-toggle' => 'validator', 'novalidate' => 'true', 'enctype' => 'multipart/form-data']); ?>

<?php $title       = 'Update' ;?>
<?php endif; ?>
<div class="has-feedback form-group<?php echo e($errors->has('book_title')?" is-invalid":""); ?> ">
    <label>Code Books:</label>
    <?php echo e(Form::text('code_book',$code, ['class' => 'form-control', 'readonly' => 'readonly'])); ?>

    <span class="invalid-feedback error-code_book" role="alert"></span>
</div>
<div class="has-feedback form-group<?php echo e($errors->has('book_title')?" is-invalid":""); ?> ">
    <label>Book Title:</label>
    <?php echo Form::text('book_title', null, array('required' => 'required', 'autofocus' => 'autofocus','placeholder' => 'Book Title','class' => 'form-control')); ?>

    <span class="invalid-feedback error-book_title" role="alert"></span>
</div>
<div class="has-feedback form-group<?php echo e($errors->has('book_publication')?" is-invalid":""); ?>">
    <label>Publication Year :</label>
    <?php echo Form::selectRange('book_publication', 2000, 2015, $book_publication,array('required','class'=>'form-control')); ?>

    </select>
    <span class="invalid-feedback error-book_publication" role="alert"></span>
</div>
<div class="has-feedback form-group<?php echo e($errors->has('book_author')?" is-invalid":""); ?>">
    <label>Book Author</label>
    <?php echo Form::select('book_author', array('Ismail' => 'Ismail','Yusuf' => 'Yusuf','Rusli' => 'Rusli'), $book_author,array('required','class'=>'form-control')); ?>

    <span class="invalid-feedback error-book_author" role="alert"></span>
</div>
<div class="has-feedback form-group<?php echo e($errors->has('stock')?" is-invalid":""); ?>">
    <label>Stock</label>
    <?php echo Form::selectRange('stock', 1, 100, $stock,array('required','class'=>'form-control')); ?>

    <span class="invalid-feedback error-stock" role="alert"></span>
</div>
<div class="form-group">
    <button type="submit" class="btn btn-block btn-primary"><?php echo e($title); ?></button>
</div>
<?php echo Form::close(); ?>

<?php $__env->startPush('stylesheets'); ?>
<link rel="stylesheet" href="<?php echo e(asset('AdminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')); ?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js">
<?php $__env->stopPush(); ?>
<?php $__env->startPush('scripts'); ?>
<script src="<?php echo e(asset('AdminLTE/plugins/jquery/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('AdminLTE/plugins/moment/moment.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/transition.js')); ?>"></script>
<script src="<?php echo e(asset('js/collapse.js')); ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
<script src="<?php echo e(asset('AdminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')); ?>"></script>
<script src="<?php echo e(asset('AdminLTE/plugins/bootstrap-switch/js/bootstrap-switch.min.js')); ?>"></script>
<script type="text/javascript">
$('#reservationdate').datetimepicker({
    icons: {
                    time: "fa fa-clock-o",
                    date: "fa fa-calendar",
                    up: "fa fa-arrow-up",
                    down: "fa fa-arrow-down"
                }
            });
</script>
<?php $__env->stopPush(); ?><?php /**PATH /var/www/html/crud-book/resources/views/books/form.blade.php ENDPATH**/ ?>