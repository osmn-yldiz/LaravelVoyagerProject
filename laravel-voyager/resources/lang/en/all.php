<?php

use App\Ceviriler;

$langs = Ceviriler::all();
$langs = $langs->translate('en');

$output = array();

foreach ($langs as $lang) {
    $output[$lang->key] = $lang->text;
}
return $output;
?>
