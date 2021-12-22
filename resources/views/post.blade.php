<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ Route('post.update') }}" method="post">
        @csrf
        Author<input type="text" name="author" /><br>
        Title en<input type="text" name="en[title]" /><br>
        Title ar<input type="text" name="ar[title]" /><br>
        Content en<input type="text" name="en[content]" /><br>
        Content ar<input type="text" name="ar[content]" /><br>
        <button type="submit">Save</button>
    </form>
</body>
</html>