<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{BASE_URL}">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles/styles.css?v=<?php echo time();?>">
    <title>Montagne</title>
</head>
<body>


<div class="header">
<h1 class="title-text">Montagne tienda de ropa</h1>


{if !isset($smarty.session.IS_LOGGED)}

  <li class="nav-item">
    <a class="btn btn-light" class="login-logout-btn" href="login"> Login <i class="fa-solid fa-right-to-bracket"></i></a>
  </li>

{else} 
  {$smarty.session.USER_EMAIL}
  <li class="nav-item">
    <a class="btn btn-danger" class="login-logout-btn" href="logout"> Logout <i class="fa-solid fa-right-from-bracket"></i></a>
  </li>
{/if}
</div>


