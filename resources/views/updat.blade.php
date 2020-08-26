<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
  <form action="update" method="post" enctype="multipart/form-data">
{{csrf_field()}}   

 name<input type="text" name="name">
 email<input type="text" name="email">
 password<input type="text" name="password">

    <input type="submit" name="submit">
</form>
</body>
</html>