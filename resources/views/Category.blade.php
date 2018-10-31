<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>


</header>
<body>
    {{$categorys=App\Category::all()}}

    @foreach ($categorys as $category)
        <p>This is user {{ $category->id }}</p>
    @endforeach
</body>



</html>