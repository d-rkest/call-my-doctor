<?php
#My variables
$name = "George";
require_once 'signature.php';

// Step 1: Get meeting details (can be fetched from DB if stored)
$meetingId = $_GET['meeting_id']; // Meeting ID passed in the URL
$meetingPassword = $_GET['meeting_password']; // Meeting password

// Step 2: Generate the signature for the meeting (using the PHP function)
$signature = generateZoomSignature($meetingId, 0); // 0 for participant, 1 for host

?>

<!-- Include the Zoom Web SDK -->
<script src="https://source.zoom.us/2.0.0/zoom-us.min.js"></script>

<script>
    // Getting the signature and meeting details from PHP
    var signature = "<?php echo $signature; ?>";
    var meetingNumber = "<?php echo $meetingId; ?>";
    var meetingPassword = "<?php echo $meetingPassword; ?>";

    ZoomMtg.preLoadWasm();
    ZoomMtg.prepareJssdk();

    ZoomMtg.init({
        leaveUrl: 'https://callmydo.ng/patients/zoom/leave',  // URL when meeting ends
        isSupportAV: true,  // Enable audio/video
        success: function() {
            ZoomMtg.join({
                meetingNumber: meetingNumber, 
                userName: "<?= $name; ?>",  // Replace with dynamic patient name
                signature: signature, 
                apiKey: '1uT431XRRyOLdHbTtb3Ow',
                userEmail: 'darkest.mobile@gmail.com',  // Replace with dynamic email
                passWord: meetingPassword,  // If required
                success: function(res) {
                    console.log('Join meeting success', res);
                },
                error: function(err) {
                    console.log('Error joining meeting', err);
                }
            });
        },
        error: function(error) {
            console.log(error);
        }
    });
</script>
