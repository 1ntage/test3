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
    <h1>Ваши контакты</h1>
    <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <p><a href="<?php echo e(route('contact_show', $contact->id)); ?>"><?php echo e($contact->lastname); ?> <?php echo e($contact->firstname); ?> <?php echo e($contact->middlename); ?></a></p>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <form action="<?php echo e(route('contacts_store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <label for="lastname">Фамилия</label>
        <input type="text" name="lastname" id="lastname" required>
        <label for="firstname">Имя</label>
        <input type="text" name="firstname" id="firstname" required>
        <label for="middlename">Отчество</label>
        <input type="text" name="middlename" id="middlename" required>
        <button type="submit">Сохранить контакт</button>
    </form>

<?php if(session()): ?>
    <div class="alert alert_success">
        <p><?php echo e(session('success')); ?></p>
    </div>
<?php endif; ?>
</body>
</html>
<?php /**PATH C:\OSPanel\domains\test3b\resources\views/contacts.blade.php ENDPATH**/ ?>