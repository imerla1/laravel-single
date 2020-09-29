<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="{{ route('testpost') }}" method="POST">
		@csrf
		<input type="text" name="name"><button>subbmit</button>
	</form>
</body>
</html>