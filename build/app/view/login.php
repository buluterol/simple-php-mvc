<?php include_once 'header.php'; ?>
<div class="login-box">
    <div class="container thin-container">
        <div class="mb-3">
            <label for="usernameInput" class="form-label">Kullanıcı Adı</label>
            <input type="text" class="form-control" name="username" id="usernameInput">
        </div>
        <div class="mb-3">
            <label for="passwordInput" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="passwordInput">
        </div>
        <div class="mb-3">
            <input type="submit" class="form-control btn btn-primary" name="submit" onclick="authLogin()" value="Giriş Yap">
        </div>
    </div>
</div>
<script>
    $("nav").remove();
</script>
<?php include_once 'footer.php'; ?>