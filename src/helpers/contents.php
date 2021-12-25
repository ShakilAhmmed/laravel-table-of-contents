<?php

if (!function_exists('getContentsHTMLTemplate')) {
    function getContentsHTMLTemplate($contents): string
    {

        $contentsAsHTML = '';
        $contentsAsHTML .= '<ul>';
        foreach ($contents as $header) {
            if (isset($header['header'])) {
                $contentsAsHTML .= '<li><a href="#">' . $header['header'] . '</a></li>';
            }
            if (isset($header['childs'])) {
                getContentsHTMLTemplate($header['childs']);
            }
        }
        $contentsAsHTML .= '</ul>';

        return $contentsAsHTML;
    }
}