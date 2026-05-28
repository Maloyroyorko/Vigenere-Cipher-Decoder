<?php

//$cipher="GXWVUU{ZMKZXXTX_LV_YCBZXKNA}";
//$key="CTF";
$cipher="GXWVUU{ZMKZXXTX_LV_YCBZXKNA}";
$key="CTF";
$chars=str_split($cipher);
$key_length=strlen($key);
$flag="";
$flag1="";

$ki=0;
for($k=0;$k<count($chars);$k++){
$char=$chars[$k];
$shifting_base=ctype_upper($key[$k%$key_length]) ? 65 : 97;
$shifting= ord($key[$k%$key_length])-$shifting_base;
$shifting_base1=ctype_upper($key[$ki%$key_length]) ? 65 : 97;
$shifting1= ord($key[$ki%$key_length])-$shifting_base1;
if(ctype_alpha($char)){
$base=ctype_upper($char) ? 65 : 97;
$pp=chr(((ord($char)- $base -$shifting + 26)%26)+$base);
$pp1=chr(((ord($char)- $base -$shifting1 + 26)%26)+$base);

$flag .= $pp;
$flag1 .= $pp1;
$ki++;
}else{
$flag .= $char;
$flag1 .= $char;

}
}


echo "Without Skipping Special Characters:".$flag."<br>";
echo "Skipping Special Characters:".$flag1;


?>
