<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $patientEmail = $_POST['patient_email'];
    $patientName = $_POST['patient_name'];
    $meetingId = $_POST['meeting_id'];
    $meetingPassword = $_POST['meeting_password'];
    
    $subject = "Your Telemedicine Consultation with Dr. X";
    $message = "Hello $patientName,\n\nYour telemedicine consultation is scheduled. Please join using the link below:\n\n";
    $message .= "Join Zoom Meeting: https://zoom.us/j/$meetingId?pwd=$meetingPassword\n\n";
    $message .= "Meeting ID: $meetingId\nPassword: $meetingPassword\n\nBest regards,\nTelemedicine App";
    
    // Send the email (make sure you configure your mail server)
    mail($patientEmail, $subject, $message);
    
    echo "Invitation sent successfully to $patientEmail!";
}
?>
