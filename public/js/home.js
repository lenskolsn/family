var avatar_user = document.querySelector("#avatar_user");
var uploadAvatar = document.querySelector("#uploadAvatar");
uploadAvatar.onchange = (e) => {
    let file = e.target.files[0];
    const url = URL.createObjectURL(file);
    avatar_user.setAttribute("src", url);
};
