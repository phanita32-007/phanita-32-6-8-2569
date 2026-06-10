<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ประวัติส่วนตัว</title>
</head>
<body>

<?php
$name = "ภณิตา พึ่งใจ";
$class = "มัธยมศึกษา ที่6";
$room = "8";
$number = "32";
$address = "11 สุขสวัสดิ์ 30 แยก 8-2 เขตราษฎร์บูรณะ กรุงเทพมหานคร";
$education = "จบการศึกษาระดับมัธยมศึกษาตอนต้นจากโรงเรียนบางปะกอกวิทยาคม";
?>

<h2>ประวัติส่วนตัว</h2>

<p>ชื่อ-สกุล : <?php echo $name; ?></p>
<p>เรียนอยู่ระดับชั้น : <?php echo $class; ?> ห้องเรียน : <?php echo $room; ?></p>
<p>เลขที่ : <?php echo $number; ?></p>
<p>ที่อยู่ : <?php echo $address; ?></p>
<p>ประวัติการศึกษา : <?php echo $education; ?></p>

</body>
</html>