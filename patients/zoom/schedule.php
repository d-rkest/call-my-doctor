<?php
require_once 'signature.php'; // get the generated signature

// Assuming the meeting ID is dynamically set (for example, based on the patient's consultation)
$meetingId = '123456789';  // Replace with the actual meeting ID (this can be dynamically set based on the scheduled meeting)
$role = 0;  // 0 for participant (you can set 1 for the host if needed)

// Assume we have a form to schedule the meeting
// Step 1: Doctor schedules a meeting (stored in DB or generated dynamically)
$meetingId = generateZoomMeeting(); // This is your logic to create a Zoom meeting
$meetingPassword = "securepassword"; // Example password, could be dynamic


// Generate the signature for joining the meeting
$signature = generateZoomSignature($meetingId, $role);

// Store meeting information in DB, then pass it to the patient
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoom Audio Call</title>
    <link rel="stylesheet" href="https://source.zoom.us/2.14.0/css/react-select.css">
    <link rel="stylesheet" href="https://source.zoom.us/2.14.0/css/bootstrap.css">
</head>
<body>
    <div id="zmmtg-root"></div>
    <div id="meetingSDKElement"></div>
    
    <form method="post" action="send_invite.php">
        <input type="text" name="patient_email" placeholder="Enter patient's email" required />
        <input type="text" name="patient_name" placeholder="Enter patient's name" required />
        <input type="hidden" name="meeting_id" value="<?php echo $meetingId; ?>" />
        <input type="hidden" name="meeting_password" value="<?php echo $meetingPassword; ?>" />
        <button type="submit">Send Invitation</button>
    </form>

    <script src="app.js">
    </script><script src="https://source.zoom.us/2.0.0/lib/vendor/react.min.js"></script>
    <script src="https://source.zoom.us/2.0.0/lib/vendor/react-dom.min.js"></script>
    <script src="https://source.zoom.us/2.0.0/zoom-us.min.js"></script>
    <script src="https://source.zoom.us/2.14.0/lib/vendor/react.min.js"></script>

<script src="https://source.zoom.us/2.14.0/lib/vendor/react-dom.min.js"></script>
<script src="https://source.zoom.us/2.14.0/lib/vendor/redux.min.js"></script>
<script src="https://source.zoom.us/2.14.0/lib/vendor/redux-thunk.min.js"></script>
<script src="https://source.zoom.us/2.14.0/zoom-meeting-2.14.0.min.js"></script>

</body>
</html>