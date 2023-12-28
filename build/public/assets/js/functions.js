function authLogin() {
    $.ajax({
        url: "/api/auth/index.php",
        data: {
            username: $("#usernameInput").val(),
            password: $("#passwordInput").val()
        },
        success: function(response) {
            console.log(response);
            if(response['user_token']) {
                window.location.href = "/gateway?user_token=" + response['user_token'];
            }
        }
    })
}