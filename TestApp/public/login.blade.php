<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include 'nav.php' ?>
    <form method="POST" action="{{ route('resume') }}">
        @csrf
        
        <label for="name">Username:</label>
        <input type="text" name="name" required>

        <label for="password">Password:</label>
        <input type="text" name="password" required>

        <button type="submit">Login</button>
    <?php include 'footer.php' ?>
</body>
</html>