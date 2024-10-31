<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Телефонная книга</title>
</head>
<body>
<p><a><?php echo e($contact->lastname); ?> <?php echo e($contact->firstname); ?> <?php echo e($contact->middlename); ?></a></p>
<p>Номер телефона: <?php echo e($phones->phone); ?></p>
<form action="<?php echo e(route('phone_store', $contact->id)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <label for="phone">Добавить номер телефона</label>
    <input type="text" name="phone" id="phone" required min="11" placeholder="89999999999">
    <button type="submit">Сохранить номер телефона</button>
</form>

<?php if(session()): ?>
    <div class="alert alert_success">
        <p><?php echo e(session('success')); ?></p>
    </div>
<?php endif; ?>
</body>
</html>
<?php /**PATH C:\OSPanel\domains\test3b\resources\views/contact.blade.php ENDPATH**/ ?>