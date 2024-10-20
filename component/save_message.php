<?php
include 'connect.php';  // Make sure connect.php exists and is properly set up

// Set the content type to application/json
header('Content-Type: application/json');

// Get the raw POST data
$rawData = file_get_contents("php://input");
$data = json_decode($rawData, true);  // Decode the incoming JSON

// Check if all required fields are present
if (isset($data['name'], $data['email'], $data['businessName'], $data['website'], $data['productServices'], $data['marketingStrategy'], $data['challenges'], $data['learning'], $data['businessDuration'], $data['digitalMarketingInterest'], $data['feedback']) && $conn) {

    // Sanitize the data (basic sanitization, improve as per your needs)
    $name = htmlspecialchars($data['name']);
    $email = filter_var($data['email'], FILTER_SANITIZE_EMAIL);
    $phone = htmlspecialchars($data['phone']);  // Optional
    $businessName = htmlspecialchars($data['businessName']);
    $website = htmlspecialchars($data['website']);
    $productServices = htmlspecialchars($data['productServices']);
    $marketingStrategy = htmlspecialchars($data['marketingStrategy']);
    $challenges = htmlspecialchars($data['challenges']);
    $learning = htmlspecialchars($data['learning']);
    $businessDuration = htmlspecialchars($data['businessDuration']);
    $digitalMarketingInterest = htmlspecialchars($data['digitalMarketingInterest']);
    $feedback = htmlspecialchars($data['feedback']);

    // Insert data into the database
    $sql = "INSERT INTO workshopresponses (name, email, phone_number, website_or_social_handle, product_or_service, marketing_startergy, challenges, expection, business_duration, explore_service, provide_feedback) 
            VALUES ('$name', '$email', '$phone', '$website', '$productServices', '$marketingStrategy', '$challenges', '$learning', '$businessDuration', '$digitalMarketingInterest', '$feedback')";

    // Execute the query
    if (mysqli_query($conn, $sql)) {
        echo json_encode([
            'success' => true,
            'message' => 'Form data successfully saved'
        ]);
    } else {
        echo json_encode([
            'success' => false,
            'error' => 'Error inserting data: ' . mysqli_error($conn)
        ]);
    }

} else {
    // Send error response if any required field is missing
    echo json_encode([
        'success' => false,
        'error' => 'Required fields are missing or database connection failed'
    ]);
}
?>
