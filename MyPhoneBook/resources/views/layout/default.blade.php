<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <style>
    body {
    background-color: #000;
    text-align: center;
  }
h3 {
  color : grey;
}
/* form {
    text-align:  center;
    background-color: #15172b;
    border-radius: 20px;
    box-sizing: border-box;
    height: 100%;
    padding: 20px;
    width: 450px;
    align-items: center;
    display: inline-block;
    
} */
div {
  font-size: 20px;
  color: grey;
}
h1 {
  color: grey;
  text-decoration: underline;
}
input {
    background-color: #303245;
    border-radius: 12px;
    border: 0;
    box-sizing: border-box;
    color: #eee;
    font-size: 18px;
    height: 50px;
    outline: 0;
    padding: 4px 20px 0;
    width: 100%;
}
input[type="file"] {
    color: red;
}
label {
  color: grey;
  font-size: 20px;
}
.test{
  text-align:  center;
    background-color: #15172b;
    border-radius: 20px;
    box-sizing: border-box;
    height: 100%;
    padding: 20px;
    width: 450px;
    align-items: center;
    display: inline-block;
    
}
option {
  background-color: #303245;
    border-radius: 12px;
    border: 0;
    box-sizing: border-box;
    color: #eee;
    font-size: 18px;
    height: 50px;
    outline: 0;
    padding: 4px 20px 0;
    width: 100%;
}

select {
  background-color: #303245;
    border-radius: 12px;
    border: 0;
    box-sizing: border-box;
    color: white;
    font-size: 18px;
    height: 50px;
    outline: 0;
    padding: 4px 20px 0;
    width: 100%;
}
.menu
{
  margin-right:80px;
}
button {
  background-color: #08d;
    border-radius: 12px;
    border: 0;
    box-sizing: border-box;
    color: #eee;
    cursor: pointer;
    font-size: 18px;
    height: 50px;
    margin-top: 38px;
    outline: 0;
    text-align: center;
    width: 100%;
}



  </style>
<div>
  <a class="menu" href="http://127.0.0.1:8000/">Menu principal</a>
  <a href="http://127.0.0.1:8000/welcome" class="log out icon"> Login</a></div>
</head>
<body>
<html>
    <body>
        <h1>Projet Etna</h1>
        <main>
          @yield('main')
        </main>
    </body>
</html>
</body>
</html>