let video = document.getElementById("video");
let model;

// declare the canvas variable and setting up the context 

let canvas = document.getElementById("canvas");
let ctx = canvas.getContext("2d");

const accessCamera = () => {
  navigator.mediaDevices
    .getUserMedia({
      video: { width: 100, height: 100 },
      audio: false,
    })
    .then((stream) => {
      video.srcObject = stream;
    });
};

const detectFaces = async () => {
  const prediction = await model.estimateFaces(video, false);

  // Using canvas to draw the video first
  ctx.drawImage(video, 0, 0, 100, 100);

  if(prediction['length'] >= 1) {

      prediction.forEach((predictions) => {
        
        ctx.beginPath();
        ctx.lineWidth = "1";
        ctx.strokeStyle = "yellow";
        ctx.rect(
          predictions.topLeft[0],
          predictions.topLeft[1],
          predictions.bottomRight[0] - predictions.topLeft[0],
          predictions.bottomRight[1] - predictions.topLeft[1]
        );
        
        ctx.stroke();

        document.getElementById("security-checkout").removeAttribute("disabled");

      });

  } else if(prediction['length'] == 0) {
      Swal.fire({
        position: 'center',
        icon: 'warning',
        title: 'Demi keamanan, tetaplah berada di depan halaman Checkout anda.',
        showConfirmButton: true
      });

      document.getElementById("security-checkout").setAttribute("disabled", "");
  }

};

accessCamera();
video.addEventListener("loadeddata", async () => {
  model = await blazeface.load();
  setInterval(detectFaces, 1);
});