<?php
session_start();
require 'MultiLang.php';

$ml = new MultiLang();

$languages = [
    'am' => ['name' => 'Հայերեն', 'flag' => 'am-flag.png'],
    'ru' => ['name' => 'Русский', 'flag' => 'ru-flag.png'],
    'en' => ['name' => 'English', 'flag' => 'en-flag.png']
];

$selectedLang = strtolower($ml->language());
$selected[$selectedLang] = $languages[$selectedLang];

$remainLang = array_diff_key($languages, $selected);