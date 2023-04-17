<!DOCTYPE html>
<html>
<head>
	<title>Puzzle 5 | Escape Room</title>
	<link rel="stylesheet" type="text/css" href="scenario.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="All_images/wave.png">
	<div class="container">
		<div class="img">
		</div>
        <div>
        <h2 style="font-size:3.0rem;position:relative;top:80px;right:250px;">Puzzle 5 : Scary Game&nbsp;&nbsp;<img src="All_images\solution.png" height="40" width="40"> </h2>
        <h2 style="font-size:1.5rem;position:relative;top:180px;right:180px;color:#303E30;">Someone's waiting for you.....</h2>
        </div>
        <div>
        <a href="ghost.php"><img src="All_images\right-arrow.png" height="55px" width="55px" style="position:relative;left:600px;top:20px;"></a>
        </div>
    <script type="text/javascript">
        const inputs = document.querySelectorAll(".input");


function addcl(){
	let parent = this.parentNode.parentNode;
	parent.classList.add("focus");
}

function remcl(){
	let parent = this.parentNode.parentNode;
	if(this.value == ""){
		parent.classList.remove("focus");
	}
}


inputs.forEach(input => {
	input.addEventListener("focus", addcl);
	input.addEventListener("blur", remcl);
});
    </script>
</body>
</html>