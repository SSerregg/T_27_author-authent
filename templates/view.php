<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <header>
        <h1></h1>
        
        <form action="models/registration.php" method="post" class="btn btn-primary">

        <input name="username" type="text" placeholder="имя">
        <input name="password" type="password" placeholder="Пароль">
        <br>
        <input name="reg" type="submit" value="Зарегистрироваться" >
       
        <input name="aut" type="submit" value="Авторизироваться" >
        <br>
        <input name="VK" id="ml" type="checkbox">
  <label for="ml">Авторизован черек ВК</label>
    </form>
    <br>
    <?php include_once 'userName.php';?>
    

    <form action="" method="get" class="btn btn-primary">


        <input name="submit" type="submit" value="Деавторизироваться" >
    </form>
</header>
<section>
  <br>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</section>
  </body>
</html>