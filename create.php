<h2><?php echo $title ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('news/create') ?>

    <label for="title">Title</label>
    <input type="input" name="title" value="Sample" /><br />

    <label for="text">Text</label>
    <textarea name="text"></textarea><br />

    

<?php echo form_close(); ?>
<a href="/ci30/news/">Home</a>