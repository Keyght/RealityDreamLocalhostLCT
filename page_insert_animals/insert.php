<meta charset="UTF-8">
<?php
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "animals");
$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

if ($conn->connect_error) {
    printf("Соединение не удалось: %s\n", $conn->connect_error);
	exit();
}
$a1 = $_POST['a1'];
$a2 = $_POST['a2'];
$a3 = $_POST['a3'];
$a4 = $_POST['a4'];
$a5 = $_POST['a5'];
$a6 = $_POST['a6'];
$a7 = $_POST['a7'];
$a8 = $_POST['a8'];
$a9 = $_POST['a9'];
$a10 = $_POST['a10'];
$a11 = $_POST['a11'];
$a12 = $_POST['a12'];
$a13 = $_POST['a13'];
$a14 = $_POST['a14'];
$a15 = $_POST['a15'];
$a16 = $_POST['a16'];
$a17 = $_POST['a17'];
$a18 = $_POST['a18'];
$a19 = $_POST['a19'];
$a20 = $_POST['a20'];
$a21 = $_POST['a21'];
$a22 = $_POST['a22'];
$a23 = $_POST['a23'];
$a24 = $_POST['a24'];
$a25 = $_POST['a25'];
$a26 = $_POST['a26'];
$a27 = $_POST['a27'];
$a28 = $_POST['a28'];
$a29 = $_POST['a29'];
$a30 = $_POST['a30'];
$a31 = $_POST['a31'];
$a32 = $_POST['a32'];
$a33 = $_POST['a33'];
$a34 = $_POST['a34'];
$a35 = $_POST['a35'];
$a36 = $_POST['a36'];
$a37 = $_POST['a37'];
$a38 = $_POST['a38'];
$a39 = $_POST['a39'];
$a40 = $_POST['a40'];
$a41 = $_POST['a41'];
$a42 = $_POST['a42'];
$a43 = $_POST['a43'];
$a44 = $_POST['a44'];
$a45 = $_POST['a45'];
$a46 = $_POST['a46'];
$a47 = $_POST['a47'];
$a48 = $_POST['a48'];
$a49 = $_POST['a49'];
$a50 = $_POST['a50'];
$a51 = $_POST['a51'];
$a52 = $_POST['a52'];
$a53 = $_POST['a53'];
$a54 = $_POST['a54'];
$a55 = $_POST['a55'];

	$sql = "INSERT INTO `TABLE 1`(`п/п`, `карточка учета животного №`, `вид`, `возраст, год`, `вес, кг`, `кличка`, 
	`пол`, `порода`, `окрас`, `шерсть`, `уши`, `хвост`, `размер`, `особые приметы`, `Вольер №`,
	`идентификационная метка`, `дата стерилизации`, `ф.и.о. ветеринарного врача`, `Социализировано (да/нет)`, 
	`заказ-наряд / акт о поступлении животного №`, `заказ-наряд дата/ акт о поступлении животного, дата`, 
	`административный округ`, `акт отлова №`, `адрес места отлова`, `юридическое лицо`, `адрес`, `телефон`,
	`ф.и.о. опекунов`, `адрес2`, `телефон2`, `физическое лицо ф.и.о.`, `паспорт РФ серия номер`, `выдан`, 
	`дата выдачи`, `адрес регистрации`, `телефон3`, `дата поступления в приют`, `акт №`, 
	`дата выбытия из приюта`, `причина выбытия`, `акт/договор №`, `адрес приюта`, `эксплуатирующая организация`,
	`ф.и.о. руководителя приюта`, `ф.и.о. сотрудника по уходу за животным`, `№ п/п 2`, `дата`, 
	`название препарата`, `доза`, `№ п/п`, `дата2`, `вид вакцины`, `№ серии`, `дата осмотра`, `анамнез`)
	VALUES ('$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$a11',
	'$a12','$a13','$a14','$a15','$a16','$a17','$a18','$a19','$a20','$a21','$a22','$a23','$a24','$a25','$a26',
	'$a27','$a28','$a28','$a29','$a30','$a31','$a32','$a33','$a34','$a35','$a36','$a37','$a38','$a39','$a40',
	'$a41','$a42','$a43','$a44','$a45','$a46','$a47','$a48','$a49','$a50','$a51','$a52','$a53','$a54')";
	if (mysqli_query($conn, $sql)) {
	      //echo "New record created successfully";
		  include('C:\OpenServer\domains\localhost\page_insert_animals\page_after_insert.html');
	} else {
	      echo "Ошибка при подключении к бд";
		  printf(mysqli_error($conn));
	}
	mysqli_close($conn);






?>