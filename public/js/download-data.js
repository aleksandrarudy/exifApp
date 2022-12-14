let separator = "\n";
let names = ["camera model: ", "exposure 1/x = ", "iso: ", "aperture f/", "focal length [mm]: ", "flash: "];
let textInputs = ["cameraModel", "exposure", "iso", "aperture", "focus", "flash"];

function saveTextAsFile() {
    let textToSave = "";
    for (let a = 0; a < textInputs.length; a++) {
        textToSave += a < textInputs.length - 1 ?
            names[a] + document.getElementById(textInputs[a]).value + separator :
            names[a] + document.getElementById(textInputs[a]).value;
    }
    let textToSaveAsBlob = new Blob([textToSave], {
        type: "text/plain"
    });
    let textToSaveAsURL = window.URL.createObjectURL(textToSaveAsBlob);
    let fileNameToSaveAs = "exif-data";

    let downloadLink = document.createElement("a");
    downloadLink.download = fileNameToSaveAs;
    downloadLink.href = textToSaveAsURL;
    downloadLink.style.display = "none";
    document.body.appendChild(downloadLink);
    downloadLink.click();

    downloadLink.onclick = destroyClickedElement;
}

function destroyClickedElement(event) {
    document.body.removeChild(event.target);
}
