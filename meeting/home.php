<!DOCTYPE html>
<html>
<head>
    <title>Telemedicine Video Call</title>
    <script src="https://source.zoom.us/videosdk/1.8.5/lib.js"></script>
</head>
<body>
    <h1>Telemedicine Video Call</h1>
    <div id="video-container"></div>

    <script>
        const client = ZoomMtgEmbedded.createClient();
        const sdkKey = "YOUR_ZOOM_SDK_KEY";
        const zoomToken = "TOKEN_GENERATED_FROM_PHP";

        const meetingConfig = {
            meetingNumber: "YOUR_MEETING_ID",
            userName: "Doctor or Patient Name",
            sdkKey: sdkKey,
            signature: zoomToken,
            passWord: "optional_meeting_password",
        };

        client.init({
            debug: true,
            zoomAppRoot: document.getElementById('video-container'),
            language: 'en-US',
        });

        client.join({
            meetingNumber: meetingConfig.meetingNumber,
            userName: meetingConfig.userName,
            signature: meetingConfig.signature,
            sdkKey: meetingConfig.sdkKey,
            passWord: meetingConfig.passWord,
        });
    </script>
</body>
</html>
