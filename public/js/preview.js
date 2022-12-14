const chooseFile = document.getElementById("file");
const imgPreview = document.getElementById("image-placeholder");

chooseFile.addEventListener("change", function () {
    getImgData();
});

function getImgData() {
    const files = chooseFile.files[0];
    if (files) {
        const fileReader = new FileReader();
        fileReader.readAsDataURL(files);
        fileReader.addEventListener("load", function () {
            imgPreview.style.display = "flex";
            imgPreview.innerHTML = '<img src="' + this.result + '" />';
        });
    }
}

