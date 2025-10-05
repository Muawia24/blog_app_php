<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="border: 1px solid black; padding: 20px; margin: 20px;">
        <h2>Register</h2>
        <form action="/register" method="POST">
            @csrf
            <input type="text" placeholder="name">
            <input type="email" placeholder="email">
            <input type="password" placeholder="password">
            <button type="submit">Register</button>
    </div>
    
</body>
</html>