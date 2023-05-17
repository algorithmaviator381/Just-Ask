document.addEventListener("DOMContentLoaded", () => {
    const userVideo = document.getElementById("userVideo");

    // Code to access the user's webcam video stream
    navigator.mediaDevices.getUserMedia({ video: true })
        .then((stream) => {
            userVideo.srcObject = stream;
        })
        .catch((error) => {
            console.log("Error accessing webcam:", error);
        });
});
