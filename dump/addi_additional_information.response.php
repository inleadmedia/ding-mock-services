<?php
preg_match('~<ns1:faust>([0-9]+)</ns1:faust>~', $request, $reg);
$faust_number = $reg[1];
$template = file_get_contents(preg_replace('/\.php$/', '', __FILE__));
print str_replace('27409733', $faust_number, $template);
