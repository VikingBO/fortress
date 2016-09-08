<?php
    session_start();

    //TODO Определние роли пользователя, выдача страниц в зависимости от роли пользователя

    //TODO записать все данные в базу данных. Учёт страниц ведется через БД. Добавить страницу можно на странице /test/
    //plugins
    include ($_SERVER['DOCUMENT_ROOT'].'/core/modules/notification.php');
    include ($_SERVER['DOCUMENT_ROOT'].'/core/functions/functions.php');

    //TODO ПРидумать интуитивно понятное подключение шаблонов
    //template
    include ($_SERVER['DOCUMENT_ROOT'].'/templates/fortress/common/header.php');
?>
    <div class="wrap">
        <div class="page-area">

        <?php
            //core
            require ($_SERVER['DOCUMENT_ROOT'].'/core/system/index.php');

            //uri
            require ($_SERVER['DOCUMENT_ROOT'].'/core/modules/url.php');
        ?>

        </div>
    </div>

<?php
    //TODO ПРидумать интуитивно понятное подключение шаблонов
    //template
    include ($_SERVER['DOCUMENT_ROOT'].'/templates/fortress/common/footer.php');
?>
