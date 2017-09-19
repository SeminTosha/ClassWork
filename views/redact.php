<h2>Отредактировать запись "<?=$update_info['title']?>"</h2>
<form action="models/editor.php" method="post">
    <p><input type="text" name="title" value="<?=$update_info['title']?>"></p>
    <p><textarea name="text"><?=$update_info['article']?></textarea></p>
    <input type="hidden" value="<?=$_GET['id']?>" name="id">
    <p> <input type="submit" value="сохранить изменения"></p>
</form>