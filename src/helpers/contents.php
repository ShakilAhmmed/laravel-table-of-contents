<?php

function getContentsHTMLTemplate($contents, $listType = 'ul')
{
    echo "<$listType>";
    foreach ($contents as $header) {
        echo '<li><a href="#">' . $header['header'] . '</a></li>';
        if (isset($header['children'])) {
            getContentsHTMLTemplate($header['children'], $listType);
        }
    }
    echo "</$listType>";
}
