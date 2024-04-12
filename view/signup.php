<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up to the Service</title>

    <link rel="stylesheet" href="../css/signup.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="image-container"></div>
    <div id="form-container">
        <div class="logo">
            <img src="../images/lg.png" alt="">
        </div>
        <form id="signup-form">
            <div class="mb-3">
                <label for="schoolName" class="form-label">School Name</label>
                <input type="text" class="form-control form-line" id="schoolName" name="name" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control form-line" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" required>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control form-line" id="username" name="username" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control form-line" id="exampleInputPassword1" name="password" required>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control form-line" id="address" name="address">
            </div>
            <div class="mb-3">
                <label for="city" class="form-label">City</label>
                <input type="text" class="form-control form-line" id="city" name="city">
            </div>
            <div class="mb-3">
                <label for="country" class="form-label">Country</label>
                <input type="text" class="form-control form-line" id="country" name="country">
            </div>
            <button type="button" onclick="submitForm()" class="btn btn-primary">Submit</button>
        </form>            
    </div>

    <!-- Include jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        function submitForm() {
            // Serialize the form data
            var formData = $('#signup-form').serialize();

            // Send a POST request to the API endpoint
            $.ajax({
                url: '../actions/process_signup.php', // Corrected API endpoint path
                type: 'POST',
                data: formData,
                success: function(response) {
                    // Handle successful response
                    window.location.href = '../view/add_and_view_events.php';
                },
                error: function(xhr, status, error) {
                    // Handle error response
                    console.error(xhr.responseText);
                    alert('An error occurred. Please try again.');
                }
            });
        }
    </script>
</body>
</html>
