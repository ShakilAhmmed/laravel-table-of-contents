<?php

if (!function_exists('getContentsHTMLTemplate')) {
    function getContentsHTMLTemplate($contents)
    {
        echo '<ul>';
        foreach ($contents as $header) {
            echo '<li><a href="#">' . $header['header'] . '</a></li>';
            if (isset($header['childs'])) {
                getContentsHTMLTemplate($header['childs']);
            }
        }
        echo '</ul>';
    }
}