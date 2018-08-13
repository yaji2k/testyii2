<?php $this->title = 'Список пользователей'; ?>
<ul>
<?php foreach ($users as $value) : ?>
    <li><a href="<?= $value->profile_name ?>"><?= $value->name ?></a></li>
<?php endforeach; ?>
</ul>