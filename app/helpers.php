<?php

namespace App;

/**
 * Dumps a variable in the php stdout
 * @param $data
 * @param bool $onlyLogged
 * @return null
 */
function dump($data, $onlyLogged = true)
{
    echo '<pre style="white-space: pre-wrap;">' . htmlspecialchars(@var_export($data, true)) . '</pre>';
    return $data;
}

/**
 * Dumps an variable in the console
 * @param $data
 * @param bool $onlyLogged
 * @return null
 */
function console($data, $onlyLogged = true)
{
     echo '<script>console.log(' . json_encode($data) . ');</script>';
     return $data;
}
