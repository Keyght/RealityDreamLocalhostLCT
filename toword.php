<?php
// function download($var)
// {
// // Имя скачиваемого файла
// $file = $var;

// // Контент-тип означающий скачивание
// header("Content-Type: application/octet-stream");

// // Размер в байтах
// header("Accept-Ranges: bytes");

// // Размер файла
// header("Content-Length: ".filesize($file));

// // Расположение скачиваемого файла
// header("Content-Disposition: attachment; filename=".$file);

// // Прочитать файл
// readfile($file);
// }
// TODO: слеть возможным брать из баззы данных

require_once('vendor/autoload.php'); // ставится ТОЛЬКО через Composer!
$_doc = new \PhpOffice\PhpWord\TemplateProcessor('animals.docx');
for ($i=0; $i < 5; $i++) { 
	echo "\t";
}
$_doc->setValue("п/п", "1");
$_doc->setValue("карточка_учета_животного_№", "1665з-20");
$_doc->setValue("вид", "собака");
$_doc->setValue("возраст,_год", "2016");
$_doc->setValue("вес,_кг", "25");
$_doc->setValue("кличка", "Варя 2");
$_doc->setValue("пол", "женский");
$_doc->setValue("порода", "метис");
$_doc->setValue("окрас", "черный");
$_doc->setValue("шерсть", "короткая");
$_doc->setValue("уши", "полустоячие");
$_doc->setValue("хвост", "обычный");
$_doc->setValue("размер", "средний");
$_doc->setValue("особые_приметы", "___________________________");
$_doc->setValue("Вольер_№", "1");
$_doc->setValue("идентификационная_метка", "643094100731522");
$_doc->setValue("дата_стерилизации", "стерилизована ранее");
$_doc->setValue("ф.и.о._ветеринарного_врача", "Врач 1");
$_doc->setValue("Социализировано_(данет)", "да");
$_doc->setValue("заказ-наряд_/_акт_о_поступлении_животного_№", "128(1)");
$_doc->setValue("заказ-наряд_дата/_акт_о_поступлении_животного", "7/29/2020");
$_doc->setValue("административный_округ", "СЗАО");
$_doc->setValue("акт_отлова_№", "128(1)");
$_doc->setValue("адрес_места_отлова", "Пятницкое ш., 37");
$_doc->setValue("юридическое_лицо", "___________________________");
$_doc->setValue("адрес", "___________________________");
$_doc->setValue("телефон", "___________________________");
$_doc->setValue("ф.и.о._опекунов", "___________________________");
$_doc->setValue("адрес2", "___________________________");
$_doc->setValue("телефон2", "___________________________");
$_doc->setValue("физическое_лицо_ф.и.о.", "___________________________");
$_doc->setValue("паспорт_РФ_серия_номер", "___________________________");
$_doc->setValue("выдан", "___________________________");
$_doc->setValue("дата_выдачи", "___________________________");
$_doc->setValue("адрес_регистрации", "___________________________");
$_doc->setValue("телефон3", "___________________________");
$_doc->setValue("дата_поступления_в_приют", "7/29/2020");
$_doc->setValue("акт_№", "128(1)");
$_doc->setValue("дата_выбытия_из_приюта", "___________________________");
$_doc->setValue("причина_выбытия", "___________________________");
$_doc->setValue("акт/договор_№", "___________________________");
$_doc->setValue("адрес_приюта", "г.Москва, Зеленоград, Фирсановское ш., вл.5А");
$_doc->setValue("эксплуатирующая_организация", "ГБУ \"Доринвест\"___________________________");
$_doc->setValue("ф.и.о._руководителя_приюта", "Игнатов А.В.");
$_doc->setValue("ф.и.о._сотрудника_по_уходу_за_животным", "Работник 1 ");
$_doc->setValue("дата", "7/29/2020");
$_doc->setValue("название_препарата", "Азинокс ");
$_doc->setValue("доза", "2.5");
$_doc->setValue("дата2", "13.08.2020 01.09.2020");
$_doc->setValue("вид_вакцины", "Бешенство Мультикан-6 ");
$_doc->setValue("№_серии", "");
$_doc->setValue("дата_осмотра", "7/29/2020");
$_doc->setValue("анамнез", "удовлетворительно");
// вывод непосредственно в браузер
/*
header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
header('Content-Disposition: attachment;filename="dogovor.docx"');
header('Cache-Control: max-age=0');
$_doc->saveAs('php://output');
*/
$_doc->saveAs('Карточка животного.docx');
// download('Карточка животного.docx');
// die;
