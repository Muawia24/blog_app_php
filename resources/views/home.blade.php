<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    @auth
    <p>Welcome, {{ auth()->user()->name }}</p>
    <form action="/logout" method="POST">
        @csrf
        <button>Logout</button >
    </form>

    <div style="border: 1px solid black; padding: 20px; margin: 20px;">
        <h2>Create New Post</h2>
        <form action="/create-post" method="POST">
            @csrf
            <input name="title" type="text" placeholder="title">
            <textarea name="body" placeholder="body"></textarea>
            <button>Submit Post</button>
        </form>
    </div>
    <div style="border: 1px solid black; padding: 20px; margin: 20px;">
        <h2>All Posts</h2>
        @foreach($posts as $post)
            <div style="border: 1px solid gray; margin: 10px; padding: 10px;">
                <h3>{{ $post->title }}</h3>
                <p>{{ $post->body }}</p>
                
            </div>
        @endforeach
    </div>

    @else
    <div style="border: 1px solid black; padding: 20px; margin: 20px;">
        <h2>Register</h2>
        <form action="/register" method="POST">
            @csrf
            <input name="name" type="text" placeholder="name">
            <input name="email" type="email" placeholder="email">
            <input name="password" type="password" placeholder="password">
            <button>Register</button>
        </form>
    </div>
    <div style="border: 1px solid black; padding: 20px; margin: 20px;">
        <h2>Login</h2>
        <form action="/login" method="POST">
            @csrf
            <input name="loginname" type="text" placeholder="name">
            <input name="loginpassword" type="password" placeholder="password">
            <button>Log In</button>
        </form>
    </div>
    @endauth
    
</body>
</html>