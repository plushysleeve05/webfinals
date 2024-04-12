<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login to the Service</title>

    <link rel="stylesheet" href="../css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <div class="image-container"></div>
    <div id="form-container" style="padding-top: 200px;">
        <div class="logo">
            <img src="../images/lg.png" alt="">
        </div>
        <form id="login-form">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control form-line" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" required>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control form-line" id="exampleInputPassword1" name="password" required>
            </div>
            <button type="button" onclick="submitForm()" class="btn btn-primary">Login</button>
            <br><br>
            <a href="signup.php">No Account?, Sign up!</a>
        </form>            
    </div>

    <!-- Include jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        function submitForm() {
            // Serialize the form data
            var formData = $('#login-form').serialize();

            // Send a POST request to the API endpoint
            $.ajax({
                url: '../actions/process-login.php', // Corrected API endpoint path
                type: 'POST',
                data: formData,
                success: function(response) {
                    // Handle successful response
                    window.location.href = '../view/add_and_view_events.php';
                },
                error: function(xhr, status, error) {
                    // Handle error response
                    console.error(xhr.responseText);
                    alert('Invalid email or password. Please try again.');
                }
            });
        }
    </script>
</body>
</html>
