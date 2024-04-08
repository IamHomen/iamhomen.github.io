<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
$url = "https://consumet-api3128.up.railway.app/meta/anilist/info/$id?provider=gogoanime";

// Fetch API data
$response = file_get_contents($url);

// Check if the response is valid JSON
$json = json_decode($response, true);

// If the response is valid JSON, echo it
if ($json !== null) {
    echo json_encode($json, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
} else {
    // If the response is not valid JSON, echo an error message
    echo json_encode(array("error" => "Unable to fetch API data."), JSON_PRETTY_PRINT);
}
}
?>
