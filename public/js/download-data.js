let separator = "\n";
let textInputs = ["cameraModel", "exposure", "iso", "aperture", "focus", "flash"];

function saveTextAsFile() {
    let textToSave = "";
    for (let a = 0; a < textInputs.length; a++) {
        textToSave += a < textInputs.length - 1 ? document.getElementById(textInputs[a]).value + separator : document.getElementById(textInputs[a]).value;
    }
    let textToSaveAsBlob = new Blob([textToSave], {
        type: "text/plain"
    });
    let textToSaveAsURL = window.URL.createObjectURL(textToSaveAsBlob);
    let fileNameToSaveAs = "exif-data";

    let downloadLink = document.createElement("a");
    downloadLink.download = fileNameToSaveAs;
    downloadLink.href = textToSaveAsURL;
    downloadLink.onclick = destroyClickedElement;
    downloadLink.style.display = "none";
    document.body.appendChild(downloadLink);

    downloadLink.click();
}

function destroyClickedElement(event) {
    document.body.removeChild(event.target);
}
