<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		
@import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

* {
	box-sizing: border-box;
}

body {
	background: #f6f5f7;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	font-family: 'Montserrat', sans-serif;
	height: 100vh;
	margin: -20px 0 50px;
}

h1 {
	font-weight: bold;
	margin: 0;
}

h2 {
	text-align: center;
}

p {
	font-size: 14px;
	font-weight: 100;
	line-height: 20px;
	letter-spacing: 0.5px;
	margin: 20px 0 30px;
}

span {
	font-size: 12px;
}

a {
	color: #333;
	font-size: 14px;
	text-decoration: none;
	margin: 15px 0;
}

button {
	border-radius: 20px;
	border: 1px solid #FF4B2B;
	background-color: #FF4B2B;
	color: #FFFFFF;
	font-size: 12px;
	font-weight: bold;
	padding: 12px 45px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: transform 80ms ease-in;
}

button:active {
	transform: scale(0.95);
}

button:focus {
	outline: none;
}

button.ghost {
	background-color: transparent;
	border-color: #FFFFFF;
}

form {
	background-color: #FFFFFF;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 50px;
	height: 100%;
	text-align: center;
}

input {
	background-color: #eee;
	border: none;
	padding: 12px 15px;
	margin: 8px 0;
	width: 100%;
}

.container {
	background-color: #fff;
	border-radius: 10px;
  	box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
			0 10px 10px rgba(0,0,0,0.22);
	position: relative;
	overflow: hidden;
	width: 768px;
	max-width: 100%;
	min-height: 480px;
}

.form-container {
	position: absolute;
	top: 0;
	height: 100%;
	transition: all 0.6s ease-in-out;
}

.sign-in-container {
	left: 0;
	width: 50%;
	z-index: 2;
}

.container.right-panel-active .sign-in-container {
	transform: translateX(100%);
}

.sign-up-container {
	left: 0;
	width: 50%;
	opacity: 0;
	z-index: 1;
}

.container.right-panel-active .sign-up-container {
	transform: translateX(100%);
	opacity: 1;
	z-index: 5;
	animation: show 0.6s;
}

@keyframes show {
	0%, 49.99% {
		opacity: 0;
		z-index: 1;
	}
	
	50%, 100% {
		opacity: 1;
		z-index: 5;
	}
}

.overlay-container {
	position: absolute;
	top: 0;
	left: 50%;
	width: 50%;
	height: 100%;
	overflow: hidden;
	transition: transform 0.6s ease-in-out;
	z-index: 100;
}

.container.right-panel-active .overlay-container{
	transform: translateX(-100%);
}

.overlay {
	background: #FF416C;
	background: -webkit-linear-gradient(to right, #FF4B2B, #FF416C);
	background: linear-gradient(to right, #FF4B2B, #FF416C);
	background-repeat: no-repeat;
	background-size: cover;
	background-position: 0 0;
	color: #FFFFFF;
	position: relative;
	left: -100%;
	height: 100%;
	width: 200%;
  	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
}

.container.right-panel-active .overlay {
  	transform: translateX(50%);
}

.overlay-panel {
	position: absolute;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 40px;
	text-align: center;
	top: 0;
	height: 100%;
	width: 50%;
	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
}

.overlay-left {
	transform: translateX(-20%);
}

.container.right-panel-active .overlay-left {
	transform: translateX(0);
}

.overlay-right {
	right: 0;
	transform: translateX(0);
}

.container.right-panel-active .overlay-right {
	transform: translateX(20%);
}

.social-container {
	margin: 20px 0;
}

.social-container a {
	border: 1px solid #DDDDDD;
	border-radius: 50%;
	display: inline-flex;
	justify-content: center;
	align-items: center;
	margin: 0 5px;
	height: 40px;
	width: 40px;
}

footer {
    background-color: #222;
    color: #fff;
    font-size: 14px;
    bottom: 0;
    position: fixed;
    left: 0;
    right: 0;
    text-align: center;
    z-index: 999;
}

footer p {
    margin: 10px 0;
}

footer i {
    color: red;
}

footer a {
    color: #3c97bf;
    text-decoration: none;
}
	</style>
	<script type="text/javascript">
		const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});
	</script>
</head>
<body>

<div class="container" id="container">
	
	<div class="form-container sign-in-container">
		<form method="post" action="conn.php">
			<h1>Insert Records</h1>

			
			<br>
			<input type="text" name="name" placeholder="Name" >
			<input type="text" name="phone" placeholder="PhoneNumber" >
			<input type="text" name="address" placeholder="Address" >
			<input type="text" name="vehiclenumber" placeholder="Vehicle Number" >
			<input type="text" name="vehicleaddress" placeholder="Vehicle Address" >
			<br>
			<input type="submit" name="sub" value="submit" style="background: #FF4B2B">
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			
			<div class="overlay-panel overlay-right">
				<img src="data:image/png;base64,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">
				<h3>Vela Motor Crafts</h3>
				<h5>Customer Management</h5>
				
			</div>
		</div>
	</div>
</div>


</body>
</html>