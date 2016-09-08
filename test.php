<?php
    session_start();
?>

You can add a new page in DataBase here.

<form action="/pages/" method="post">
    <input type="text" name="url" placeholder="Page name is here">
    <input type="text" name="path" placeholder="Path to your page">
    <label for="role">Select role for your page</label>
    <select name="role" id="role">
        <option>admin</option>
        <option>editor</option>
        <option>user</option>
    </select>
    <button>Сохранить</button>
</form>
