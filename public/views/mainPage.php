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
    <script type="text/javascript" src="./public/js/jquery-1.7.1.js"></script>
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
                        <input type="file" name="file" id="file" class="image-upload-input">
                        <label for="file">+ CHOOSE FILE FROM YOUR COMPUTER</label>
                    </div>

                </div>
                <div class="exif-container">
                    <div class="exifdata-placeholder">
                        <div class="image-data">
                            <label for="cameraModel">camera model</label></br>
                            <input type="text" name="cameraModel" id="cameraModel" /> </br>

                            <label for="exposure">exposure</label></br>
                            <input type="text" name="exposure" id="exposure" /> </br>

                            <label for="iso">ISO</label></br>
                            <input type="text" name="iso" id="iso" /> </br>

                            <label for="aperture">aperture</label></br>
                            <input type="text" name="aperture" id="aperture" /> </br>

                            <label for="focus">focus length</label></br>
                            <input type="text" name="focus" id="focus" /> </br>

                            <label for="flash">flash</label></br>
                            <input type="text" name="flash" id="flash" /> </br>

                        </div>
                    </div>
                    <div class="exifdata-download-button">

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


            // Uncomment the line below to examine the
            // EXIF object in console to read other values
            //console.log(exifObject);

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