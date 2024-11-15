<?php
// هذا تعليق من سطر واحد
echo "Hello World!"; // طباعة "Hello World" على الشاشة

# هذا تعليق آخر من سطر واحد
echo "Hello World!"; # طباعة "Hello World" على الشاشة

/* هذا تعليق متعدد الأسطر
   يمكننا كتابة عدة أسطر هنا */
echo "Hello World!"; // طباعة "Hello World" على الشاشة

$color = "red"; // تعيين قيمة "red" إلى المتغير $color
echo "My car is " . $color . "<br>"; // طباعة "My car is red"
?>

<?php
$var1 = 12; // تعيين قيمة 12 إلى المتغير $var1
$var2; // المتغير $var2 لم يتم تعيين قيمة له بعد

if (isset($var1)) { // التحقق إذا كان المتغير $var1 موجودًا
    echo '<br>$var1 is set'; // طباعة أن المتغير $var1 موجود
}

if (isset($var2)) { // التحقق إذا كان المتغير $var2 موجودًا
    echo '<br>$var2 is set'; // هذا السطر لن يتم تنفيذه لأن المتغير $var2 غير موجود
}

if (isset($var3)) { // التحقق إذا كان المتغير $var3 موجودًا
    echo '<br>$var3 is set'; // هذا السطر لن يتم تنفيذه لأن المتغير $var3 غير موجود
}
?>

<?php
$txt = "مرحبا"; // تعيين قيمة "مرحبا" إلى المتغير $txt
echo $txt; // طباعة "مرحبا"

$txt1 = "مرحبا"; // تعيين قيمة "مرحبا" إلى المتغير $txt1
$txt2 = "PHP كورس"; // تعيين قيمة "PHP كورس" إلى المتغير $txt2
echo $txt1 . " " . $txt2; // طباعة "مرحبا PHP كورس"

echo "Welcome to" . " " . "PHP course"; // طباعة "Welcome to PHP course"
?>

<?php
// استخدام دالة strlen لتحديد طول النص
echo strlen("Hello world!"); // ستطبع 12 لأن طول النص "Hello world!" هو 12

// استخدام دالة strpos للبحث عن كلمة داخل نص
echo strpos("Hello world!","world"); // ستطبع 6 لأن "world" يبدأ من الموضع 6

// استخدام دالة str_replace لاستبدال نص داخل النص
$myString = "It was the best of times, it was the worst of times,"; 
echo str_replace("times", "bananas", $myString); // ستطبع "It was the best of bananas, it was the worst of bananas,"
?>

<?php
// استخدام دالة strtolower لجعل النص بأحرف صغيرة
echo strtolower("HELLO WORLD!"); // ستطبع "hello world!"

// استخدام دالة strtoupper لجعل النص بأحرف كبيرة
echo strtoupper("hello world!"); // ستطبع "HELLO WORLD!"

// استخدام دالة ucfirst لجعل أول حرف من النص كبير
echo ucfirst("hello world!"); // ستطبع "Hello world!"

// استخدام دالة lcfirst لجعل أول حرف من النص صغير
echo lcfirst("Hello World!"); // ستطبع "hello World!"

// استخدام دالة ucwords لجعل أول حرف من كل كلمة كبير
echo ucwords("hello world!"); // ستطبع "Hello World!"
?>

<?php
// استخدام العوامل الحسابية
$a = 5;
$b = 3;
echo $a + $b; // ستطبع 8 (جمع)
echo $a - $b; // ستطبع 2 (طرح)
echo $a * $b; // ستطبع 15 (ضرب)
echo $a / $b; // ستطبع 1.66666666667 (قسمة)

// استخدام العوامل المعينة
$c = 10;
$c += 5; // إضافة 5 إلى $c (الآن c = 15)
echo $c; // ستطبع 15

// استخدام عوامل الزيادة والنقصان
$a = 5;
echo $a++; // ستطبع 5 (الزيادة بعد الطباعة)
echo ++$a; // ستطبع 7 (الزيادة قبل الطباعة)
?>
<?php
// مثال على عمليات الزيادة والنقصان (Increment & Decrement)
echo "<h3>Postincrement</h3>"; 
$a = 5; 
echo "Should be 5: " . $a++ . "<br />"; // طباعة قيمة $a ثم زيادتها بعد الطباعة
echo "Should be 6: " . $a . "<br />"; // طباعة القيمة الجديدة بعد الزيادة

echo "<h3>Preincrement</h3>";
$a = 5;
echo "Should be 6: " . ++$a . "<br />"; // زيادة $a أولًا ثم طباعة القيمة الجديدة
echo "Should be 6: " . $a . "<br />"; // طباعة القيمة بعد الزيادة

echo "<h3>Postdecrement</h3>";
$a = 5; 
echo "Should be 5: " . $a-- . "<br />"; // طباعة قيمة $a ثم نقصانها بعد الطباعة
echo "Should be 4: " . $a . "<br />"; // طباعة القيمة الجديدة بعد النقصان

echo "<h3>Predecrement</h3>"; 
$a = 5; 
echo "Should be 4: " . --$a . "<br />"; // نقصان $a أولًا ثم طباعة القيمة الجديدة
echo "Should be 4: " . $a . "<br />";

// مثال على استخدام رموز المقارنة (Comparison Operators)
echo "<h3>Comparison Operators</h3>";
$x = 5;
$y = 6;
if ($x == $y) {
    echo "x is equal to y<br>";
} else {
    echo "x is not equal to y<br>";
}

// مثال على استخدام الرموز المنطقية (Logical Operators)
echo "<h3>Logical Operators</h3>";
if ($x == 5 && $y == 6) {
    echo "Both conditions are true<br>";
}

if ($x == 5 || $y == 5) {
    echo "At least one condition is true<br>";
}

if (!($x == 5)) {
    echo "Condition is false<br>";
}

// مثال على تعريف الثوابت (Constants)
echo "<h3>PHP Constants</h3>";
define("AAA", "user1"); // تعريف ثابت باستخدام define
define("BBB", "user2"); // تعريف ثابت آخر
echo "AAA: " . AAA . "<br>"; // طباعة قيمة ثابت AAA
echo "BBB: " . BBB . "<br>"; // طباعة قيمة ثابت BBB

// تعريف ثابت باستخدام const
const أحمد = "user1";
echo "أحمد: " . أحمد . "<br>"; // طباعة قيمة ثابت أحمد
?>
