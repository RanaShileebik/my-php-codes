// استخدام echo
<?php
echo "PHP course";
echo "<h2>PHP course</h2>";
echo "Text 1" . " and " . "Text 2";  // الربط باستخدام النقطة
?>

// استخدام print
<?php
print "PHP course";
print "<h2>PHP course</h2>";
print "Text 1" . " and " . "Text 2";  // الربط باستخدام النقطة
?>

// العمليات المنطقية
<?php
echo "AND && <br>------------<br>true and true = "; 
if(true and true) echo "true<br>"; 
else echo "false<br>";
echo "true and false = "; 
if(true and false) echo "true<br>"; 
else echo "false<br>";
echo "false and false = "; 
if(false and false) echo "true<br>"; 
else echo "false<br>";

echo "<br>OR | | <br>------------<br>true or true = ";
if(true or true) echo "true<br>"; 
else echo "false<br>";

echo "<br>XOR<br>------------<br>true xor true = ";
if(true xor true) echo "true<br>"; 
else echo "false<br>";

echo "<br>!<br>------------<br>!true = "; 
if(!true) echo "true<br>";
else echo "false<br>";
?>
  
// عمليات المقارنة
<?php
if('' == 0) echo "'' == 0 yes<br>";
else echo "'' == 0 no<br>";

if(0 == false) echo "0 == false yes<br>";
else echo "0 == false no<br>";

if('' == false) echo "'' == false yes<br>";
else echo "'' == false no<br>";

if(-10 == true) echo "-10 == true yes<br>";
else echo "-10 == true no<br>";
?>

// استخدام العمليات المقارنة 
<?php
if('' === 0) echo "'' === 0 yes<br>";
else echo "'' === 0 no<br>";
if(0 === false) echo "0 === false yes<br>";
else echo "0 === false no<br>";
?>
<?php
// استخدام == للمقارنة (المقارنة بالقيم فقط)
if('' == false)
    echo "'' == false yes<br>";  // ستكون النتيجة نعم لأن القيمة الفارغة تُعتبر كـ false في المقارنة
else
    echo "'' == false no<br>";

if(-10 == true)
    echo "-10 == true yes<br>";  // ستكون النتيجة نعم لأن -10 تُعتبر قيمة صحيحة في المقارنة مع true
else
    echo "-10 == true no<br>";

// استخدام === للمقارنة (المقارنة بالقيم والنوع معًا)
if('' === 0)
    echo "'' == 0 yes<br>";
else
    echo "'' == 0 no<br>";

if(0 === false)
    echo "0 == false yes<br>";
else
    echo "0 == false no<br>";

if('' === false)
    echo "'' == false yes<br>";
else
    echo "'' == false no<br>";

if(-10 === true)
    echo "-10 == true yes<br>";
else
    echo "-10 == true no<br>";

// استخدام switch case لاختيار رابط بناءً على قيمة المتغير $id
$id = 250;
switch($id)
{
    case 100:
        echo "<h3><a href='page1.php'> go page1 </a></h3>"; break;
    case 200:
        echo "<h3><a href='page3.php'> go page3 </a></h3>"; break;
    case 300:
        echo "<h3><a href='page4.php'> go page4 </a></h3>"; break;
    default:
        echo "<h3><a href='index.php'> go home </a></h3>";
}
?>
