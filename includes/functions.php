<?php
/**
 * Render Template
 *
 * @param array $data
 */
function render($template, $data = array()) {
    $path = "../views/".$template.".php";
    if (file_exists($path)) {
        foreach ($data as $key => &$value) {
            $value = htmlspecialchars($value);
        }
        extract($data);
        require($path);
    }
}

function get_array_values($array) {
    $words = "";
    foreach ($array as $key => $value) {
        $words .= htmlspecialchars($value).", ";
    }
    return $words;
}

function render_url($page, $data = array()) {
    $url = '?page='.htmlspecialchars($page);
    foreach ($data as $key => $value) {
        $url .= '&'.rawurlencode(htmlspecialchars($key)).'='.urlencode(htmlspecialchars($value));
    }
    return $url;
}

function get_img($path) {
    if(file_exists("img/{$path}.jpg")) {
        $path = "img/{$path}.jpg";
        return $path;
    }
    else {
        $path = "img/{$path}.png";
        return $path;
    }
}

/* Redirect to a different page */
function redirect_to($location) {
    header("Location: " . $location);
    exit;
}
?>
