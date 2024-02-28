<?php 
function flash($key, $message)
{
    // Start the session if it hasn't been started already
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    // Set the flash message in the session
    $_SESSION['flash'][$key] = $message;
}
function getFlash($key)
{
    // Start the session if it hasn't been started already
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    // Check if the flash message exists in the session
    if (isset($_SESSION['flash'][$key])) {
        // Get the flash message
        $message = $_SESSION['flash'][$key];

        // Clear the flash message from the session
        unset($_SESSION['flash'][$key]);
        if ($key === 'error') {
            // Return the flash message wrapped in a <p> tag with red color style
            echo  '<p style="color: red;">' . $message . '</p>';
        }else {

            // Return the flash message
            echo $message;
        }
    }

    // Return null if the flash message doesn't exist
    return null;
}
 