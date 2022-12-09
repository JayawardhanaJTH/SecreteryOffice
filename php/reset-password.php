<script src="..\js\password-generator.js"></script>

<?php
session_start();

require_once(__DIR__ . '/../connection/connection.php');

if (isset($_POST['reset_btn'])) {
    $email = $_POST['email'];

    $Err = '';
    $errflag = false;

    if (empty($email)) {
        $Err = "Please input email";
        $errflag = true;
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $Err = "Invalid email format";
        $errflag = true;
    }

    $sanitized_email = mysqli_escape_string($conn, $email);
    $statement = mysqli_prepare($conn, "SELECT pid FROM people WHERE email = ?");

    mysqli_stmt_bind_param($statement, 's', $sanitized_email);
    mysqli_stmt_execute($statement);
    mysqli_stmt_bind_result($statement, $userId);
    mysqli_stmt_fetch($statement);

    if ($userId) {
?>
        <script>
            randomPassword(10);
        </script>
<?php
        $subject = "Reset Password";
        $headers = array(
            "From: secraterywththala@gmail.com",
            "Reply-To: replyto@example.com",
            "X-Mailer: PHP/" . PHP_VERSION
        );
        $headers = implode("\r\n", $headers);
        $password = $_COOKIE["reset_pass"];
        $emailBody = "Your password is rested! use this for login.\n\nPassword: " . $password;

        if (mail($sanitized_email, $subject, $emailBody, "From: secraterywththala@gmail.com")) {
            $_SESSION['reset_password_send'] = true;
            session_write_close();

            header("Location: ../login.php");
            exit();
        } else {
            $_SESSION['reset_password_send'] = false;
            session_write_close();

            header("Location: ../login.php");
            exit();
        }
    } else {
        $_SESSION['user_not_found'] = true;
        session_write_close();

        header("Location: ../forget-password.php");
        exit();
    }
}
?>