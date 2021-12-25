<?php

function getContentsHTMLTemplate($contents)
{
    echo '<ul>';
    foreach ($contents as $header) {
        echo '<li><a href="#">' . $header['header'] . '</a></li>';
        if (isset($header['children'])) {
            getContentsHTMLTemplate($header['children']);
        }
    }
    echo '</ul>';
}