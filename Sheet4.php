<?php
//=======================
// حلقات الدوران: for
//=======================

// مثال 1: تكرار أوامر 5 مرات باستخدام for
// حلقة for تكرر الكود من 1 إلى 5
for ($i = 1; $i <= 5; $i++) {
    echo "الرقم هو: " . $i . "<br />";
}

// مثال 2: العد التنازلي باستخدام for
// حلقة for تعمل على العد التنازلي من 10 إلى 6
for ($i = 10; $i > 5; $i--) {
    echo "الرقم هو: " . $i . "<br />";
}

// استخدام كلمة continue لتخطي الدورة الحالية
// إذا كانت قيمة المتغير i تساوي 5، يتم تخطي الدورة الحالية من خلال continue
for ($i = 0; $i < 10; $i++) {
    if ($i == 5) continue; // إذا كان i = 5، ننتقل إلى الدورة التالية
    echo "<h3>$i = $i</h3>";
}

// استخدام كلمة break لإنهاء الحلقة
// إذا كانت قيمة المتغير i تساوي 5، يتم إنهاء الحلقة بواسطة break
for ($i = 0; $i < 10; $i++) {
    if ($i == 5) break; // إذا كان i = 5، تتوقف الحلقة تماماً
    echo "<h3>$i = $i</h3>";
}

//=======================
// حلقات الدوران: while
//=======================

// مثال: التكرار حتى يتحقق شرط معين
// تستمر الحلقة while حتى يصل المتغير $count إلى 10
$count = 1;
while ($count <= 10) {
    echo "<h3>Hi</h3>";
    $count++; // زيادة المتغير $count في كل مرة
}

// مثال: استخدام break لإنهاء while
// تستمر الحلقة إلى الأبد حتى تتحقق شرط التوقف داخلها
$count = 1;
while (true) {
    echo "<h3>YES</h3>";
    if ($count++ == 20) break; // بعد 20 مرة، يتم إنهاء الحلقة
}

//=======================
// حلقات الدوران: do...while
//=======================

// مثال: تنفيذ الأمر لمرة واحدة على الأقل
// تأكد من أن الكود سيتم تنفيذه على الأقل مرة واحدة قبل التحقق من الشرط
$count = 0;
do {
    echo "<h3>Count = " . ++$count . "</h3>";
} while ($count < 10); // الشرط يتم التحقق منه بعد تنفيذ الكود مرة واحدة على الأقل

//=======================
// الحلقات التكرارية المتداخلة
//=======================

// مثال 1: إنشاء مثلث باستخدام الحلقات المتداخلة
// حلقة خارجية تتحكم في الصفوف وحلقة داخلية تتحكم في عدد الأعمدة في كل صف
for ($i = 1; $i < 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br />";
}

// مثال 2: إنشاء مثلث مقلوب
// في هذا المثال، العدد يبدأ من أكبر قيمة في الصف الأول ويتناقص في الصفوف التالية
for ($i = 1; $i < 5; $i++) {
    for ($j = $i; $j < 5; $j++) {
        echo "* ";
    }
    echo "<br />";
}

// مثال 3: إنشاء هرم باستخدام الحلقات المتداخلة
// في هذا المثال، يتم إضافة المسافات أولاً ثم النجوم لإنشاء شكل هرم
for ($i = 0; $i < 5; $i++) {
    // طباعة الفراغات
    for ($j = 0; $j < 5 - $i - 1; $j++) {
        echo "&nbsp;&nbsp;"; // استخدام &nbsp; لإضافة مسافات فارغة
    }
    // طباعة النجوم
    for ($k = 0; $k < 2 * $i + 1; $k++) {
        echo "*";
    }
    echo "<br />";
}

// مثال 4: حلقات متداخلة باستخدام while
// حلقة while متداخلة داخل حلقة while أخرى
$a = 3;
while ($a <= 4) {
    echo "This is example $a <br>";
    ++$a;
    $b = 4;
    while ($b <= 5) {
        echo "Value $b <br>";
        ++$b;
    }
}

//=======================
// المصفوفات
//=======================

// إنشاء مصفوفة رقمية
$myBooks = array("كتاب البرمجة", "كتاب الحاسوب", "قصص المغامرات");
echo "يعتبر " . $myBooks[0] . " من أفضل الكتب العلمية مثل " . $myBooks[1] . "<br>";

// إنشاء مصفوفة مترابطة
$ages = array("Peter" => 32, "Quagmire" => 30, "Joe" => 34);
echo "Peter is " . $ages['Peter'] . " years old.<br>";

// إنشاء مصفوفة متعددة الأبعاد
$families = array(
    "Griffin" => array("Peter", "Lois", "Megan"),
    "Quagmire" => array("Glenn"),
    "Brown" => array("Cleveland", "Loretta", "Junior")
);
echo "Is " . $families['Griffin'][2] . " a part of the Griffin family?<br>";
?>
<?php
// 1. مثال حلقة foreach للتكرار على عناصر المصفوفة
$myArr = array('name' => 'username 1', 'city' => 'luxor', 'phone' => 125668522);

// التكرار على المصفوفة وعرض القيم فقط
foreach($myArr as $value) {
    echo "<h3>$value</h3>";
}

// التكرار على المصفوفة وعرض المفتاح والقيمة
foreach($myArr as $key => $value) {
    echo "<h3>$key : $value</h3>";
}
?>

<?php
// 2. دالة count لمعرفة عدد عناصر المصفوفة
$myArr = array(10, 12.16, true, "username", 'password');
for($i = 0; $i < count($myArr); $i++) {
    echo "<h3>{$myArr[$i]}</h3>";
}
?>

<?php
// 3. دالة var_dump للطباعة التفصيلية للمصفوفة
$myArr = array('name' => 'username 1', 'city' => 'luxor', 'phone' => 125668522);
echo var_dump($myArr) . "<br />";
?>

<?php
// 4. دالة explode لتقسيم النص إلى مصفوفة
$string = 'this is a string';
$array = explode(' ', $string);
print_r($array); // تطبع المصفوفة الناتجة
?>

<?php
// 5. دالة implode لتحويل المصفوفة إلى نص
$array = array(10, 12.16, true, "username", 'password');
$string = implode(' -- ', $array);
echo $string; // تطبع النص الناتج
?>

<?php
// 6. دالة is_array للتحقق إذا كان المتغير مصفوفة
$array = array(10, 12.16, true, "username", 'password');
echo is_array($array); // تطبع 1 إذا كانت مصفوفة، ولا شيء إذا لم تكن
?>

<?php
// 7. دالة array_push لإضافة عناصر إلى المصفوفة
$array = array('sy', 'eg', 'lb');
$array[] = 'sa'; // إضافة عنصر باستخدام القوسين
echo '<br> the array after adding sa is: <br>';
print_r($array);
?>

<?php
// 8. دالة in_array للبحث عن قيمة في المصفوفة
$array = array('sy', 'eg', 'lb', 'sa');
if(in_array('sa', $array)) {
    echo 'sa is found in $array array <br>';
} else {
    echo 'sa is NOT found in $array array <br>';
}
?>

<?php
// 9. دالة array_reverse لقلب المصفوفة
$array = array('1', '2', '3', '4');
$new_array = array_reverse($array);
print_r($new_array); // تطبع المصفوفة بعد عكس ترتيب العناصر
?>

<?php
// 10. دالة array_unique لإزالة العناصر المكررة من المصفوفة
$array = array('sy', 'eg', 'lb', 'sy', 'lb', 'sa');
$new_array = array_unique($array);
echo 'the first array is: ';
print_r($array);
echo '<br> the "unique" one: ';
print_r($new_array);
?>

<?php
// 11. دالة sort لترتيب عناصر المصفوفة
$array = array(123, 1, 12, 'name' => 'sy', 'eg');
print_r($array);
sort($array); // ترتيب المصفوفة
echo '<br>';
print_r($array);
?>

<?php
// 12. دالة asort لترتيب المصفوفة مع الحفاظ على المفاتيح
$array = array(123, 1, 12, 'name' => 'sy', 'eg');
print_r($array);
asort($array); // ترتيب المصفوفة مع الحفاظ على المفاتيح
echo '<br>';
print_r($array);
?>

