<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Index</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <h1>Bienvenido</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio maiores nihil obcaecati at et necessitatibus vero repudiandae sunt debitis quos?</p>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                <div class="input-group mb-3">
                  <input type="text" name="nombre" class="form-control" placeholder="Nombre" aria-label="Username" aria-describedby="basic-addon1" required>
                </div>
                <select name="option" class="custom-select" id="inputGroupSelect01" required>
                    <option value=""></option>
                    <option value="1">Gamer1</option>
                    <option value="2">Gamer2</option>
                    <option value="3">Gamer3</option>
                  </select>
                  <input class="my-4 btn btn-primary" type="submit" value="Enviar datos">
            </form>
        </div>
        <?php if($enviado):?>
            <p>Tu nombre es <?php echo $enviado['nombre'];?> y eres el Gamer<?php echo $enviado['option'];?></p>
        <?php endif;?>
    </div>
</body>
</html>