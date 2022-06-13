var image = document.querySelector("#image");
var uploadImage = document.querySelector("#uploadImage");
uploadImage.onchange = (e) => {
    let file = e.target.files[0];
    const url = URL.createObjectURL(file);
    image.setAttribute("src", url);
};
