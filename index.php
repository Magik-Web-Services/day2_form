<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Day 2</title>
</head>

<body>
<?php
    include_once 'dbConnect.php';
?>
    <section class="iframe-containter">
        <h1>Html Day 2</h1>

        <h2>iFrame</h2>
        <!-- Map -->
        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6879.330920922577!2d76.92764284083816!3d30.44558414889585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fba3a37b0a617%3A0x93d31319ded886bb!2sJatwar%2C%20Haryana%20134201!5e0!3m2!1sen!2sin!4v1682575566826!5m2!1sen!2sin" style="border:0;" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        <!-- Yt Video -->
        <iframe src="https://www.youtube.com/embed/Y_r-51IzfGk" title="YouTube video player" frameborder="0" class="video" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </section>

    <section class="form-container">
        <h2>Form</h2>
        <form method="post" action="">
            <!-- Heading -->
            <h3>Sign Up</h3>
            <!-- UserName -->
            <label class="subtitle" for="UserName"> Username:</label>
            <input id="UserName" required class="data" type="text" name="UserName" name="Username">
            <!-- Email -->
            <label class="subtitle" for="Email"> Email:</label>
            <input id="Email" required class="data" name="Email" type="email" name="Email">
            <!-- Password -->
            <label class="subtitle" for="password"> Password:</label>
            <input id="Password" required class="data" name="Password" type="password" name="password">
            <!-- Comform Password -->
            <label class="subtitle" for="Comform-Password"> Password Again:</label>
            <input id="CPassword" required class="data" name="CPassword" type="password" name="Comform-Password">
            <!-- TOS -->
            <input class="Tos-checkbox" id="checkbox" required type="checkbox" name="TermsOfServiices">
            <p class="Tos-para">I agree with the <a href="#"> terms of services</a></p>
            <!-- Button -->
            <input id="btn" type="submit" name="Register" value="Register">
            <!-- Login -->
            <p class="logIn">Already a member <a href="#">Log in</ab>
            </p>
        </form>
        <?php
        // Insert data
        if (isset($_POST['Register'])) {
            $UserName = $_POST['UserName'];
            $Email = $_POST['Email'];
            $Password = $_POST['Password'];
            $CPassword = $_POST['CPassword'];

            $sql = "INSERT INTO `day2_form` (`UserName`, `Email`, `Password`, `CPassword`) VALUES ('$UserName', '$Email', '$Password', '$CPassword')";
            if ($_POST['Password'] === $_POST['CPassword']) {
                $form = mysqli_query($conn, $sql);

                if (!$form) {
                    echo '<script>alert("Form not Submit")</script>';
                } else {
                    echo '<script>alert("Your Form is Submit")</script>';
                }
            }
        }
        ?>
    </section>
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
    <script src="script.js"></script>
</body>

</html>
