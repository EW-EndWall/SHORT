<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['url'])) {
        $getUrl = $_GET['url'];
        if (preg_match('/^[a-zA-Z0-9]+$/', $getUrl)) {
            // * get data
            $url = getData($getUrl);
            echo json_encode($url);
        } else {
            // * Invalid URL format
            echo json_encode(['error' => 'Invalid URL format']);
        }
    } else {
        // * Incorrect data
        echo json_encode(['error' => 'Incorrect data']);
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $jsonData = file_get_contents('php://input');
    $data = json_decode($jsonData, true);

    if ($data !== null && isset($data['url'])) {
        $postUrl = filter_var($data['url'], FILTER_VALIDATE_URL);
        if ($postUrl !== false) {
            $short_url = substr(md5($postUrl), 0, 10);
            $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://';
            // * add data db
            addData($postUrl, $short_url);

            echo json_encode($protocol . $_SERVER['HTTP_HOST'] . "/f/" . $short_url);
        } else {
            // * URL invalid
            echo json_encode(['error' => 'Invalid URL']);
        }
    } else {
        // * Incorrect data
        echo json_encode(['error' => 'Incorrect data']);
    }
}

function getData($short_url)
{
    include './db.php';
    // * get data
    try {
        $data = $db->prepare("select url from urls where short_url=:short_url");
        $data->execute(
            array(
                'short_url' => $short_url,
            )
        );
        $count = $data->rowCount();
        if ($count == 1) {
            $result = $data->fetch(PDO::FETCH_ASSOC);
            return $result["url"];
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

function addData($postUrl, $short_url)
{
    include './db.php';
    $url = getData($short_url);
    // * check url
    if (!$url) {
        //* add data
        try {
            $stmt = $db->prepare("INSERT INTO urls (url, short_url) VALUES (:url, :short_url)");
            $stmt->execute([
                'url' => $postUrl,
                'short_url' => $short_url,
            ]);
        } catch (PDOException $e) {
            echo json_encode(['error' => $sql . "<br>" . $e->getMessage()]);
        }
        $db = null;
    }
}
