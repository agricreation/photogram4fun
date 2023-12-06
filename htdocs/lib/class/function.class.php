<?php


class functions {
    public static function redirect($page) {
        echo '<script>window.location.href = "/' . $page . '";</script>';
    }
}
