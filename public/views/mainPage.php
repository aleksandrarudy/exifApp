<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/public/css/styleMainPage.css">
    <script src="https://kit.fontawesome.com/c7d1b0ffc1.js" crossorigin="anonymous"></script>
    <title>EXIF app | Generate exif file from image</title>
    <script type="text/javascript" src="./public/js/preview.js" defer></script>
    <script type="text/javascript" src="./public/js/jquery-3.6.1.js"></script>
    <script type="text/javascript" src="./public/js/jquery.exif.js"></script>

</head>
<body>
    <div class = "dashboard-container">
        <div class="title">
            <p>EXIF DATA EXTRACTOR<p/>
        </div>
        <form id="myform">
            <div class="content">
                <div class="image-upload">
                    <div class="image-placeholder" id="image-placeholder">

                    </div>
                    <div class="image-upload-button">
                        <input type="file" name="file" id="file" class="image-upload-input" accept="image/jpg, image/png, image/jpeg, image/NEF">
                        <label for="file">+ CHOOSE FILE FROM YOUR COMPUTER</label>
                    </div>

                </div>
                <script type="text/javascript" src="./public/js/download-data.js" ></script>

                    <div class="exif-container">
                        <div class="exifdata-placeholder">
                            <div class="image-data">
                                <label for="cameraModel">camera model</label></br>
                                <input type="text" name="cameraModel" id="cameraModel" placeholder="ex. Canon r6"/> </br>

                                <label for="exposure">exposure</label></br>
                                <input type="text" name="exposure" id="exposure" placeholder="ex. 1/200"/></br>

                                <label for="iso">ISO</label></br>
                                <input type="text" name="iso" id="iso" placeholder="ex. 200" /> </br>

                                <label for="aperture">aperture</label></br>
                                <input type="text" name="aperture" id="aperture" placeholder="ex. f/1.8" /> </br>

                                <label for="focus">focus length</label></br>
                                <input type="text" name="focus" id="focus" placeholder="ex. 35mm"/> </br>

                                <label for="flash">flash</label></br>
                                <input type="text" name="flash" id="flash" placeholder="ex. Flash fired"/> </br>

                            </div>
                        </div>
                        <div class="exifdata-download-button">
                            <button class="download-btn" onclick="saveTextAsFile()">DOWNLOAD FILE</button>
                        </div>
                    </div>
            </div>
        </form>
    </div>
    <script>

        let someCallback = function(exifObject) {
            document.getElementById('cameraModel').value = exifObject.Model
            document.getElementById('aperture').value = exifObject.FNumber
            document.getElementById('iso').value = exifObject.ISOSpeedRatings
            document.getElementById('exposure').value = exifObject.ExposureTime
            document.getElementById('focus').value = exifObject.FocalLength
            document.getElementById('flash').value = exifObject.Flash

        }

        try {
            document.getElementById('file').onchange = function() {
                $(this).fileExif(someCallback);
            };
        }
        catch (e) {
            alert(e);
        }

    </script>
</body>
</html>