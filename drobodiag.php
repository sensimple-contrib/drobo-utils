
<? //https://drobocommunity.m-ize.com/t/the-php-for-decoding-drobo-diagnostics/247/14
php $fp = fopen("$argv[1]", r); while(!feof($fp)) { $array = str_split(fgets($fp)); foreach($array as $char) { echo chr(ord($char) ^ 0xC3); } } ?>
