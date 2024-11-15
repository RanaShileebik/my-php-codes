<?php
// مثال 1: دالة بدون وسائط ولا تعيد قيمة
function f_echo() {
    // تطبع النص التالي داخل عنصر H1
    echo "<h1>PHP:hypertext processor</h1>";
}
// استدعاء الدالة لطباعة النص
f_echo();
?>

<?php
// مثال 2: دالة تأخذ وسيطًا وتطبع قيمته
$in = 'username1'; // تعريف متغير خارجي
function f_echo($in) {
    // تطبع قيمة الوسيط داخل عنصر H1
    echo "<h1>$in</h1>";
}
// استدعاء الدالة مع تمرير أنواع مختلفة من القيم
f_echo(10);          // تطبع 10
f_echo(12.332);      // تطبع 12.332
f_echo('username2'); // تطبع username2
f_echo(true);        // تطبع 1
?>

<?php
// مثال 3: دالة تعيد نتيجة عملية حسابية
function sum($var1, $var2) {
    // تجمع بين الوسيطين وتعيد الناتج
    return $var1 + $var2;
}
// استدعاء الدالة وطباعتها مباشرة
echo sum(10, 20); // تطبع 30
?>

<?php
// مثال 4: تمرير دالة كوسيط لدالة أخرى
function f_echo($in) {
    // تطبع الوسيط داخل عنصر H1
    echo "<h1>$in</h1>";
}
function sum($var1, $var2) {
    // تجمع بين الوسيطين وتعيد الناتج
    return $var1 + $var2;
}
// استدعاء الدالة sum وتمرير نتيجتها للدالة f_echo
f_echo(sum(10, 20)); // تطبع 30 داخل عنصر H1
?>

<?php
// مثال 5: دالة ذات قيمة افتراضية للوسيط
function f_echo($in = "text") {
    // تطبع الوسيط داخل عنصر H1
    echo "<h1>$in</h1>";
}
// استدعاء الدالة بدون تمرير أي وسيط (تستخدم القيمة الافتراضية)
f_echo();         // تطبع text
// استدعاء الدالة مع تمرير وسيط
f_echo("Hello");  // تطبع Hello
?>

<?php
// مثال 6: دالة تعيد أكثر من قيمة باستخدام مصفوفة
function math($x) {
    // تعيد مصفوفة تحتوي على مربع الرقم واللوغاريتم الطبيعي له
    return array($x * $x, log($x));
}
// استدعاء الدالة وطباعتها
print_r(math(23)); // تطبع [529, 3.13549421593]
?>

<?php
// مثال 7: تمرير الوسيط بالمرجعية
function sum(&$var1, $var2) {
    // تعديل قيمة الوسيط الأول مباشرة
    $var1 += $var2; // نفس التعبير: $var1 = $var1 + $var2;
}
$num1 = 10; // تعريف المتغير الأول
$num2 = 15; // تعريف المتغير الثاني
echo $num1; // تطبع 10 (القيمة الأصلية)
echo '<br>';
// استدعاء الدالة وتمرير المتغير الأول بالمرجعية
sum($num1, $num2);
echo $num1; // تطبع 25 (تم تعديل القيمة داخل الدالة)
?>