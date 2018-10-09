<!DOCTYPE html>
<html lang="en">

<head>
	<style>
		.button {
			background-color: #4CAF50;
			border: none;
			color: white;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			margin: 4px 2px;
			cursor: pointer;
		}

		p.groove {
			border-width: 5px;
			border-style: groove;
		}

		#main {
			width: 70px;
			height: 300px;
			border: 1px groove #c3c3c3;
			display: -webkit-flex;
			display: flex;
			-webkit-flex-wrap: wrap;
			flex-wrap: wrap;
			-webkit-align-content: center;
			align-content: center;
		}

		.myDIV {
			width: 100px;
			height: 100px;
			background: red;
			-webkit-animation: mymove 1s infinite;
			/* Chrome, Safari, Opera */
			animation: mymove 5s infinite;
		}

		/* Chrome, Safari, Opera */
		@-webkit-keyframes mymove {
			from {
				background-color: red;
			}

			to {
				background-color: blue;
			}
		}

		/* Standard syntax */
		@keyframes mymove {
			from {
				background-color: red;
			}

			to {
				background-color: blue;
			}
		}

	</style>
</head>

<body>
	<p align="CENTER">
		<form id="insert">
			<div class="main">
				<CENTER>
					<h1>ADMIN</h1>
					<h2>Status Machine</h2>
					<img src="./publish/img/marker.png" alt="" height="200" width="200">
				</CENTER>
				<p>
					<h3>สถานะตู้ยา </h3>
					<hr>
					สถานะตู้ยาหมายเลข 1 <p align="right"><button class="myDIV">กำลังใช้งาน </button></p><br><br><br>
					<hr>
					สถานะตู้ยาหมายเลข 2 <p align="right"><button class="myDIV">เสีย </button></p><br><br><br>
					<hr>
					สถานะตู้ยาหมายเลข 3 <p align="right"><button class="myDIV">เสีย </button></p><br><br><br>
					<hr>
				</p>
			</div>
		</form>
		<center> <button class="button">OK</button> </center>

</body>

</html>
