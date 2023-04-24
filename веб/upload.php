<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("upload");
?>

<form action="action.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <button type="submit">Отправить</button>
</form>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>