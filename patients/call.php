<?php 
  require_once 'inc/header.php';
  require_once '../Controllers/patientCtrl.php';

#My variables
$name = "George";

require_once '../vendor/autoload.php';  // Include the JWT library
require_once './zoom/signature.php';

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

    <div class="pagetitle">
      <h1>Call</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item"><a href="call-a-doctor.php">Call a doctor</a></li>
          <li class="breadcrumb-item active">Call</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">

      <?php
        if (isset($_GET['doctor_id'])) {
          $doctor = $user->get_appointment_doc($_GET['doctor_id']);
        }
      ?>
      
      <div class="row">

        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
              <h2>Calling Dr. <?=$name;?><h1>
            </div>
          </div>
        </div>

      </div>

    </section>
<?php require_once 'inc/footer.php'; ?>