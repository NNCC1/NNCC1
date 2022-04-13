<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
</head>
<style type="text/css">
	*{
		font-family: 'Open Sans', sans-serif;
	}
</style>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-dark p-4">
		<a class="navbar-brand text-white" href="#"><small>HELLO</small></a>
		<div class="containter-fluid flex-grow-1 text-right">
			
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class = "navbar-nav ms-auto mb-2 text-info">
					<li class="nav-item "><a class="nav-link text-white" href="#">Giới Thiệu</a></li>
					<li class = "nav-item"><a class = "nav-link text-white" href="{{route('signout')}}">Đăng Xuất</a></li>
				</ul>
			</div>	
		</div>
		
	</nav>
</body>
</html>