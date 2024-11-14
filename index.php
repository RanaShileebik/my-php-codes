<?php
// جمل الطباعة
echo "Hello World!";

// المتغيرات (الحاويات) في PHP
$txt = "Hello world"; // تعريف متغير
$color = "blue"; // متغير آخر
echo $txt . " My favorite color is " . $color;

// العمليات الحسابية
$a = 5;
$b = 10;
echo $a + $b; // جمع
echo $a - $b; // طرح
echo $a * $b; // ضرب
echo $a / $b; // قسمة
echo $a % $b; // باقي القسمة

// العمليات المنطقية
$x = 5;
$y = 10;
if ($x == $y) {
    echo "x و y متساويان";
} else {
    echo "x و y ليسا متساويين";
}

// الجمل الشرطية
if ($x < $y) {
    echo "x أصغر من y";
} elseif ($x > $y) {
    echo "x أكبر من y";
} else {
    echo "x يساوي y";
}

// التعابير الشرطية باستخدام العمليات المنطقية
if ($x == 5 && $y == 10) {
    echo "كل الشروط صحيحة";
}

// الحلقات
// حلقة for
for ($i = 0; $i < 5; $i++) {
    echo "العدد هو " . $i;
}

// حلقة while
$i = 0;
while ($i < 5) {
    echo "العدد هو " . $i;
    $i++;
}

// المصفوفات
$colors = array("أحمر", "أزرق", "أخضر");
echo $colors[0]; // طباعة أول عنصر في المصفوفة

// الدوال
function greet($name) {
    echo "مرحباً " . $name;
}
greet("رنا");

// التعامل مع النصوص
$txt1 = "مرحباً";
$txt2 = " بالعالم";
echo $txt1 . $txt2; // ربط النصوص

// استخدام الدوال الخاصة بالنصوص
$myString = "مرحباً في عالم البرمجة!";
echo strlen($myString); // طول السلسلة
echo strpos($myString, "عالم"); // البحث عن النص "عالم"
echo str_replace("عالم", "الإنترنت", $myString); // استبدال "عالم" بـ "الإنترنت"

// التعامل مع الحروف
echo strtolower($myString); // تحويل النص إلى حروف صغيرة
echo strtoupper($myString); // تحويل النص إلى حروف كبيرة
echo ucfirst($myString); // تحويل أول حرف إلى كبير
echo lcfirst($myString); // تحويل أول حرف إلى صغير
echo ucwords($myString); // تحويل أول حرف من كل كلمة إلى كبير

// الثوابت
define("PI", 3.14159);
echo PI; // طباعة ثابت

// استخدام دالة defined للتحقق من وجود الثابت
if (defined("PI")) {
    echo "الثابت PI موجود";
}
?>

