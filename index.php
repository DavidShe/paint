<!DOCTYPE html>
<html>
	<head>
		<title>Paint</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="css/bootstrap.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="start" title="Accueil" href="index.php" />
		<link rel="icon" type="image/png" href="favicon.ico" />
		<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
		<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/js.js"></script>
		<!--[if lt IE 9]>
			
		<![endif]-->
	</head>
	<body>
		<div class="container-fluid">
			<div class="panel row-fluid">
				<div class="span2 btn-group form-search">
					<input type="color" id="color" class="btn btn-inverse btn-large input-mini btnFixedHeight" onchange="changeColor()" value="#3a7bf0" />
					<input type="number" id="thickness" class="btn btn-inverse btn-large input-mini btnFixedHeight" value="20" onchange="changeThickness()" />
				</div>

				<div id="tools" class="span8 btn-group" data-toggle="buttons-radio">
					<input type="button" class="btn btn-inverse btn-large active" value="Stylo" data-tool="pen" />
					<input type="button" class="btn btn-inverse btn-large" value="Texte" data-tool="text" />
					<input type="button" class="btn btn-inverse btn-large" value="Ligne" data-tool="line" />
					<input type="button" class="btn btn-inverse btn-large" value="Cercle" data-tool="circle" />
					<input type="button" class="btn btn-inverse btn-large" value="Rectangle" data-tool="rectangle" />
					<input type="button" class="btn btn-inverse btn-large" value="Pot de peinture" data-tool="pot" />
					<input type="button" class="btn btn-inverse btn-large" value="Gomme" data-tool="rubber" />
					<input type="button" class="btn btn-inverse btn-large" value="Copier" data-tool="copy" />
				</div>

				<div class="span2">
					<input type="button" class="btn btn-inverse btn-large" onclick="paint.exportCanvas()" value="Exporter" />
				</div>

				<div class="row-fluid textContent form-search">
					<input type="text" id="text" />
					<select id="font" class="btn btnFixedHeight" onchange="changeFont()">
						<option value="Arial">Arial</option>
						<option value="Georgia">Georgia</option>
						<option value="Helvetica" selected>Helvetica</option>
						<option value="Times New Roman">Times New Roman</option>
					</select>
				</div>
			</div>

			<div class="row-fluid" style="height: 100%;">
				<div class="span10">
					<canvas id="paint">Votre navigateur ne supporte pas les canvas !</canvas>
				</div>

				<div class="span2 layers"></div>
			</div>
		</div>
	</body>
</html>