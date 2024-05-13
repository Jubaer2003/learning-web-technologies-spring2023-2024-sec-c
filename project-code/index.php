<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Marketplace</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="container">

    </div>

    <script>

        const isLoggedIn = localStorage.getItem('isLoggedIn');

        if (isLoggedIn) {

            window.location.href = 'home.php';
        } else {

            window.location.href = 'view/login.php';
        }
    </script>
</body>
</html>
