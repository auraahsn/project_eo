<?php

function hitungData($table)
{
    $db = \Config\Database::connect();
    return $db->table($table)->countAllResults();
}
