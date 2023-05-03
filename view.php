<?php


//INSERT INTO `complexes`(`id`, `title`, `description`, `type`, `studio`, `oneroom`, `tworoom`, `threeroom`, `fourroom`, `adress`, `mincost`, `maxcost`, `image_name`) VALUES (NULL,'Title','Description','Кваритры',true,true,true,true,true,'Елените, Болгария',105000,205000,'test')

include 'src/vendor/database.php';
$items;

$id = $_GET['id'];


$title;
$description;
$image_name;
$adress;
$mincost;
$maxcost;
$isStudio;
$isOneRoom;
$isTwoRoom;
$isThreeRoom;
$isFourRoom;
$type;

if ($id > 0 && $id != '') {
    $db->connect($host, $user, $pwd, $db_name);
    $items = $db->query("SELECT * FROM `complexes` WHERE `id`=$id");

    while($row = $items->fetch_array()) {
        $title = $row['title'];
        $description = $row['description'];
        $image_name = $row['image_name'];
        $adress = $row['adress'];
        $mincost = $row['mincost'];
        $maxcost = $row['maxcost'];
        $isStudio = $row['studio'];
        $isOneRoom = $row['oneroom'];
        $isTwoRoom = $row['tworoom'];
        $isThreeRoom = $row['threeroom'];
        $isFourRoom = $row['fourroom'];
        $type = $row['type'];
    }
} else {
    $title = "Объект не найден";
    $description = "Возможно, произошла проблема! Проверьте, пожалуйста, правильность ссылки";
    $image_name = "error.png";
    $adress = "";
    $mincost = 0;
    $maxcost = 0;
    $isStudio = false;
    $isOneRoom = false;
    $isTwoRoom = false;
    $isThreeRoom = false;
    $isFourRoom = false;
    $type = "Error";
}
include 'src/components/TheHeader.php';
?>

<div class="image">
    <img class="<?php if($image_name=="error.png") { echo "error"; } ?>" src="src/images/photo_<?= $image_name ?>" alt="">
</div>

<div class="view">
    <div class="view-container">
        <div class="left">
            <div class="title"><?= $title ?></div>
            <div class="rating">5.0</div>
            <div class="viewappart">Просмотр апартаментов: <span>С агентом</span></div>
            <div class="buttons">
                <button class="buttons-button">Забронировать просмотр</button>
                <button class="buttons-button outline">Отправить сообщение</button>
            </div>
            <div class="info">
                <span class="phone">+380678459123</span>
                <span class="worktime">График работы: 9:00 - 18:00 пн - пт</span>
            </div>
            <div class="description">
                <span><?= $title ?></span>
                <p><?= $description ?></p>
            </div>
        </div>
    </div>
</div>

<?php 
include 'src/components/TheFooter.php';
?>
