<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true && isset($_SESSION['role'])) {

    if ($_SESSION['role'] == 'admin') {
        header("Location: ../admin/");
        exit;
    } else {
        header("Location: ../");
        exit;
    }
}

include '../config.php';
$query = new Database();

if (isset($_COOKIE['username']) && isset($_COOKIE['session_token'])) {

    if (session_id() !== $_COOKIE['session_token']) {
        session_write_close();
        session_id($_COOKIE['session_token']);
        session_start();
    }

    $result = $query->select('users', 'id, role', "username = ?", [$_COOKIE['username']], 's');

    if (!empty($result)) {
        $user = $result[0];

        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $_COOKIE['username'];
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['role'] = $user['role'];

        if ($user['role'] == 'admin') {
            header("Location: ../admin/");
            exit;
        } else {
            header("Location: ../");
            exit;
        }
    }
}

if (isset($_POST['submit'])) {
    
    $username = strtolower($_POST['username']);
    $password = $query->hashPassword($_POST['password']);
    $result = $query->select('users', '*', "username = ? AND password = ?", [$username, $password], 'ss');
    if (!empty($result)) {
        $user = $result[0];

        $_SESSION['loggedin'] = true;
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['role'] = $user['role'];

        setcookie('username', $username, time() + (86400 * 30), "/", "", true, true);
        setcookie('session_token', session_id(), time() + (86400 * 30), "/", "", true, true);

        $redirectPath = '../';
        if ($user['role'] == 'admin') {
            $redirectPath = '../admin/';
        }
        ?>

<script>
window.onload = function() {
    Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: 'Login successful',
        showConfirmButton: false,
        timer: 1500
    }).then(() => {
        window.location.href = '<?= $redirectPath; ?>';
    });
};
</script>
<?php
    } else {
        ?>
<script>
window.onload = function() {
    Swal.fire({
        position: 'top-end',
        icon: 'error',
        title: 'Incorrect information',
        text: 'Login or password is incorrect',
        showConfirmButton: true
    });
};
</script>
<?php
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../favicon.ico">
    <title>Login</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/logins/login-4/assets/css/login-4.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
</head>

<body>
    <!-- Login 4 - Bootstrap Brain Component -->
    <section class="p-3 p-md-4 p-xl-5">
        <div class="container">
            <div class="card border-light-subtle shadow-sm">
                <div class="row g-0">
                    <div class="col-12 col-md-6">
                        <img class="img-fluid rounded-start w-100 h-100 object-fit-cover" loading="lazy"
                            src="https://plus.unsplash.com/premium_photo-1661757359890-bbbe1d9198a7?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTV8fG1hbmFnZW1lbnQlMjB0ZWFtfGVufDB8fDB8fHww"
                            alt="BootstrapBrain Logo">
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="card-body p-3 p-md-4 p-xl-5">
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-5">
                                        <h3>Log in</h3>
                                    </div>
                                </div>
                            </div>
                            <form method="post" action="">
                                <div class="row gy-3 gy-md-4 overflow-hidden">
                                    <div class="col-12">
                                        <label for="username" class="form-label">username <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="username" id="username" required
                                            maxlength="30">
                                    </div>
                                    <div class="col-12">
                                        <label for="password" class="form-label">Password <span
                                                class="text-danger">*</span></label>

                                        <div class="input-group">
                                            <input type="password" class="form-control" name="password" id="password"
                                                required maxlength="25">
                                            <div class="input-group-prepend password-toggle " type="button"
                                                id="toggle-password">
                                                <span class="input-group-text" id="inputGroupPrepend2">
                                                    <i class="bi bi-eye-slash" id="togglePasswordIcon"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button class="btn bsb-btn-xl btn-primary" type="submit" name="submit"
                                                id="submit">Login</button>
                                        </div>
                                    </div>
                                </div>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="../js/sweetalert2.js"></script>
    <script>
    const usernameField = document.getElementById('username');
    const usernameError = document.getElementById('username-error');
    const submitButton = document.getElementById('submit');

    function validateForm() {
        const username = usernameField.value;
        const usernamePattern = /^[a-zA-Z0-9_]+$/;
        if (!usernamePattern.test(username)) {
            usernameError.textContent = "Username can only contain letters, numbers, and underscores!";
            submitButton.disabled = true;
        } else {
            usernameError.textContent = "";
            submitButton.disabled = false;
        }
    }

    usernameField.addEventListener('input', validateForm);

    document.getElementById('toggle-password').addEventListener('click', function() {
        const passwordField = document.getElementById('password');
        const toggleIcon = document.getElementById('togglePasswordIcon');

        if (passwordField.type === 'password') {
            passwordField.type = 'text';
            toggleIcon.classList.remove('bi-eye-slash');
            toggleIcon.classList.add('bi-eye-fill');
        } else {
            passwordField.type = 'password';
            toggleIcon.classList.remove('bi-eye-fill');
            toggleIcon.classList.add('bi-eye-slash');
        }
    });
    </script>

</body>

</html>