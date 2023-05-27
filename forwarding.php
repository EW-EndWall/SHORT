<?php

$url = (isset($_GET['url'])) ? $_GET['url'] : null;

if ($url) {
    // * check
    if (preg_match('/^[a-zA-Z0-9]+$/', $url)) {
        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://';
        $host = $protocol . $_SERVER['HTTP_HOST'] . "/api.php?url=";

        $response = json_decode(file_get_contents($host . $url));

        if ($response !== false) {
            // * done
            header("Location: " . $response);
            exit;
        } else {
            // * err
            echo 'Error.';
        }
    } else {
        // * Invalid URL format
        echo json_encode(['error' => 'Invalid URL format']);
    }
}
