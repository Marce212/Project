<!-- html/inicioesion.php -->


<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<meta charset="utf-8" />
		<link type="text/css" rel="stylesheet" href="\proyecto\static\css\formingreso.css" />
		<style>

h2   {color:black}
p    {color:black}

body, html {
    height: 100%;
    background-repeat: no-repeat;
    /*background-image: linear-gradient(135deg, rgba(31,123,229,1) 0%, rgba(58,139,232,1) 47%, rgba(70,153,234,1) 92%, rgba(72,156,234,1) 100%);*/
    /*background-image: url("http://p1.pichost.me/640/54/1777799.jpg"); */
    background-size: 100% 100%;
    background: #f919;
}

.center {
    margin: auto;
    width: 50%;
    border: 3px solid green;
    padding: 10px;
}

.card-container.card {
    width: 350px;
    padding: 40px 40px;
}

.btn {
    font-weight: 700;
    height: 36px;
    -moz-user-select: none;
    -webkit-user-select: none;
    user-select: none;
    cursor: default;
}

/*
 * Card component
 */
.card {
    background-color: #F7F7F7;
    /* just in case there no content*/
    padding: 20px 25px 30px;
    margin: 0 auto 25px;
    margin-top: 50px;
    /* shadows and rounded borders */
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
}

.profile-img-card {
    width: 96px;
    height: 96px;
    margin: 0 auto 10px;
    display: block;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    border-radius: 50%;
}

/*
 * Form styles
 */
.profile-name-card {
    font-size: 16px;
    font-weight: bold;
    text-align: center;
    margin: 10px 0 0;
    min-height: 1em;
}

.reauth-email {
    display: block;
    color: #404040;
    line-height: 2;
    margin-bottom: 10px;
    font-size: 14px;
    text-align: center;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

.form-signin #inputEmail,
.form-signin #inputPassword {
    direction: ltr;
    height: 44px;
    font-size: 16px;
}

.form-signin input[type=email],
.form-signin input[type=password],
.form-signin input[type=text],
.form-signin button {
    width: 100%;
    display: block;
    margin-bottom: 10px;
    z-index: 1;
    position: relative;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

.form-signin .form-control:focus {
    border-color: rgb(104, 145, 162);
    outline: 0;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
}

.btn.btn-signin {
    /*background-color: #4d90fe; */
    /*background-color: rgb(104, 145, 162);
    / background-color: linear-gradient(rgb(104, 145, 162), rgb(12, 97, 33));*/
    padding: 0px;
    font-weight: 700;
    font-size: 14px;
    height: 36px;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    border-radius: 3px;
    border: none;
    -o-transition: all 0.218s;
    -moz-transition: all 0.218s;
    -webkit-transition: all 0.218s;
    transition: all 0.218s;
}


.forgot-password {
    color: rgb(104, 145, 162);
}

.forgot-password:hover,
.forgot-password:active,
.forgot-password:focus{
    color: rgb(12, 97, 33);
}
		</style>		
	</head>
	
	<body>

		<form action="sesion" method="post">
		    <div class="container">
			<h2>Bienvenido <small> ingrese sus datos</small></h2>
			<div class="rec"> 
			<form action="sesion" method="post" onsubmit="return validacion()">
				<div class="group">      
					<input type="text" name="usuario" id="usuario" required /><div id="error_mail"></div>
					<span class="highlight"></span>
					<span class="bar"></span>
					<label>Usuario <br></label> 
                    <br>
				</div>
      
				<div class="group">      
					<input type="password" name="clave" id="pass" required/><div id="error_pass"></div>
					<span class="highlight"></span>
					<span class="bar"></span>
                    
					<label>Clave <br></label>
				</div>
                <br>
				<input type="submit" class="button buttonBlue" value="Ingresar">
			</form>
			<p class="footer">
				Para cancelar pulse <a href="Home" target="_blank">aqui</a>
			</p>
			</div>
         </form>           
        </div>
	</body>
</html>