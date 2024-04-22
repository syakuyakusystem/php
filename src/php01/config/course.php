<?php

$fullname = htmlspecialchars($_POST['fuullname'], ENT_QUOTES);

$set = htmlspecialchars($_POST['fset'], ENT_QUOTES);

$number = htmlspecialchars($_POST['number'], ENT_QUOTES);

print "私の名前は、" . $fullname . "<br />";
print "ご希望の商品は、" . $set . "<br />";
print "ご注文数は、" . $number;