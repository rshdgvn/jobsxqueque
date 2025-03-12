<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create Page</h1>

    <form action="{{ route('store') }}" method="POST">
        @csrf

        <label for="name">Name:</label>
        <input type="text" name="name" id="name"><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email"><br>

        <label for="message">Message:</label><br>
        <textarea name="message" id="message" cols="30" rows="10" placeholder="Add your message here..."></textarea><br>

        <button type="submit">Done</button>
    </form>
</body>
</html>