<?php

use App\Ceviriler;

$langs = Ceviriler::all();
$langs = $langs->translate('tr');

$output = array();

foreach ($langs as $lang) {
    $output[$lang->key] = $lang->text;
}
return $output;
?>
