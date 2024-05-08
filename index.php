<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Generator</title>
    <link rel="stylesheet" href="style.css" type="style\css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
            .border{
                border-color:red;
                border:1px solid 4px;
            }
            #inputText{
                width: 100%;
                padding-bottom: 50%;
                margin-bottom: -28px;
            }
            .btn{
                background: red;
                color: white;
                font-size: 25px;
                width: 100%;
                padding: 15px;
                font-weight: bolder;
            }
            .btn:hover{
                color: white;
            }
            span{
                color: #4444;
              font-size: 25px;
            }
            .btns{
                padding: 10px;
                font-family: serif;
                font-weight: bolder;
            }
            .down{
                margin-left: -232px;
                margin-top: 43px;
                width: 162%;
            }
            .imagebox{
                margin: auto;
            }
            h1{
                margin: auto;
            }
            #imagebox{
                margin-left: 35%;
                margin-top: 25%;
            }

            img{
                width: 200px;
                height: 200px;
            }
        </style>
</head>
<body>
    <div class="container">
        <div class="row pt-5 mt-5">
            <div class="col-lg-6 border">
                <h3 class="pb-2 pt-3">Generate QR Code</h3>
                <span>Input Data</span>
                <input type="text" id="inputText">
                <div class="btns">
                    <button class="btn btn" id="qr_code" onclick="generteQR()">Create QR CODE</button>
                </div>
            </div>
            <div class="col-lg-6 border">
            <div id="imagebox">
            <img src="" alt="" id="qr_image">
            <div class="btns down pt-4">
                <button class="btn btn" id="download" onclick="downloadQR()"><i class="fa-solid fa-download"></i> Download</button>
        </div>
    </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
    var inputText = document.getElementById('inputText');
    var qr_image = document.getElementById('qr_image');
    var imagebox = document.getElementById('imagebox');
    var downloadBtn = document.getElementById('download');

    function generteQR(){
        qr_image.src ="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=" + inputText.value;
    }


    function downloadQR() {
            var link = document.createElement('a');
            link.download = 'qr_image.png'; 
            link.href = qr_image.src; 
            document.body.appendChild(link);
            link.click(); 
            document.body.removeChild(link); 
        }
</script>
</body>
</html>
