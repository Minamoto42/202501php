document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector("form");
    form.addEventListener("submit", function(event) {
        const usernameInput = document.getElementById("username").value.trim();
        const passwordInput = document.getElementById("password").value.trim();

        if (usernameInput === "") {
            event.preventDefault();
            alert("姓名不能为空！");
        } else if (passwordInput === "") {
            event.preventDefault();
            alert("密码不能为空！");
        }
    });
});
