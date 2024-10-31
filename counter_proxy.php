<?php
// Easy Counter PHP Proxy Script using cURL

$ec_username = 'xiangyazi24'; // Replace with your username

// Initialize cURL session
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://www.easycounter.com/php.counter.php?username=" . urlencode($ec_username));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Optional: Disable SSL verification if needed

$response = curl_exec($ch);

if ($response === false) {
    // Fallback image in case of error
    echo '<img src="https://www.easycounter.com/images/error.png" alt="Error loading counter">';
} else {
    echo $response;
}

curl_close($ch);
?>

