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

function get_img($image) {
    $path = "img/".$image.".";
    if(file_exists($path."jpg")) {
        $path = $path."jpg";
        return $path;
    }
    else {
        $path = $path."png";
        return $path;
    }
}

/* Redirect to a different page */
function redirect_to($location) {
    header("Location: " . $location);
    exit;
}

/*
* Database connection functions
* CRUD & confermation
*/

// Confirm query has brought back result
function confirm_query($result_set) {
    global $db;

    if (!$result_set) {
        die("Database query failed: " . mysqli_error($db));
    }
}

// Query database
function db_query($query) {
    global $db;

    $result = mysqli_query($db, $query);
    confirm_query($result);
    return $result;
}

?>
