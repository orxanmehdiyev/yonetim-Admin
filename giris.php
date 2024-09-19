<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Yönetim Paneli</title>
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1>Yönetim Paneli</h1>
      </div>
      <div class="login-box">
        <form class="login-form" action="index.php" method="POST">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>Yönetici Girişi</h3>
          <div class="form-group">
            <label class="control-label">E-posta</label>
            <input class="form-control" type="text" placeholder="E-posta" autofocus>
          </div>
          <div class="form-group">
            <label class="control-label">Şifre</label>
            <input class="form-control" type="password" placeholder="Şifre">
          </div>

          <div class="form-group btn-container">
            <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>Giriş Yap</button>
          </div>
        </form>

      </div>
    </section>

  </body>
</html>