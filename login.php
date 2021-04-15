<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>

* {
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body {
    background: url(https://i.ibb.co/xqpypMx/back.png);
    background-size: 100%;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background-repeat: no-repeat;
    background-position: center;
    position: relative;
}
.title {
    color: #fff;
    font-size: 32px;
    font-weight: 600;
    text-align: center;
    margin-bottom: 15px;
    animation-name: onloadAnim;
    animation-duration: 1s;
}
.formDiv {
    position: absolute;
    top: 100px;
}
.formDiv a {
    display: block;
    width: 100%;
    text-align: center;
    color: #ffa467;
    margin-top: 8px;
    text-decoration: none;
    letter-spacing: 1px;
    transition: 0.3s;
    animation-name: onloadAnim;
    animation-duration: 1s;
}
.formDiv a:hover {
    color: #fff;
}
.input-group {
    max-width: 350px;
    width: 100%;
    background: #f0f0f0;
    margin: 10px 0;
    height: 50px;
    border-radius: 50px;
    display: grid;
    grid-template-columns: 15% 85%;
    padding: 0 0.4rem;
    position: relative;
    animation-name: onloadAnim;
    animation-duration: 1s;
}
.input-group i {
    text-align: center;
    line-height: 50px;
    color: #acacac;
    transition: 0.5s;
    font-size: 15px;
}
.input-group input {
    background: none;
    outline: none;
    border: none;
    line-height: 1;
    font-weight: 500;
    font-size: 14px;
    color: #333;
    transition: 0.3s;
}
.btn {
    width: 100%;
    height: 45px;
    max-width: 350px;
    background: #fff;
    border: 2px solid #fff;
    border-radius: 25px;
    color: #f26200;
    cursor: pointer;
    font-weight: 500;
    transition: 0.3s;
    margin-top: 10px;
    animation-name: onloadAnim;
    animation-duration: 1s;
}
.btn i {
    font-size: 12px;
    margin-left: 4px;
}
.btn:hover {
    background: none;
    color: #fff;
}

@keyframes onloadAnim {
    from {
        transform: translateY(-88%);
    }
    to {
        transform: translateY(0);
    }
}



@media only screen and (max-width: 990px) {
    body {
        background-size: 130%;
    }
}
@media only screen and (max-width: 740px) {
    body {
        background-size: 175%;
    }
}
@media only screen and (max-width: 555px) {
    body {
        background-size: 245%;
    }
}
@media only screen and (max-width: 420px) {
    body {
        background-size: 265%;
    }
}
@media only screen and (max-width: 380px) {
    body {
        background-size: 320%;
    }
}
</style>
</head>


<body>

  <div class="formDiv">
        <h1 class="title">Sign In</h1>

        <form action="validation.php" method="post">
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Username" name="user" class="form-control" required><br>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Password" name="password" class="form-control" required><br>
            </div>
            <button type="submit" class="btn" value="login">Log In</button>
           
            
        </form>
    </div>

<script src="https://kit.fontawesome.com/4077c6ef6a.js" crossorigin="anonymous"></script>
</body>
</html>