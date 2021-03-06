<?php 
if(!isset($_POST['amount']))
{
    header('location:index.php');
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>NikeCryptoCheckout</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <link href="css/app.css" rel="stylesheet">
</head>
<body>
	<section id="checkout">
		<div class="container">
			<h1>NikeCrypto</h1>
		  <h2>Buy Shoes with Cryptos</h2>
<!-- 		  <h3>Balance: <span class="black"><span id="balance">(todo)</span> <?=$_POST['currency'];?></span></h3> -->
		  <h3>Grand Total: <span class="black">
			  $<?=$_POST['amount'];?> <?=$_POST['currency'];?> 
			  &nbsp;|&nbsp; 
			  <span><?=number_format((float)$_POST['amount']/450, 2, '.', '');?></span> ETH</span>
			</h3>
			<div id="amount" style="display:none"><?=(float)$_POST['amount']/450;?></div>
		  <button class="btn btn-primary" id="send" onclick="App.sendCoin()">Pay with Ethereum</button>
		  <p class="status"></p>
		  <p class="hint"><strong>Hint:</strong> open the browser developer console (inspect in chrome) to view any errors and warnings.</p>
		</div>
	</section>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  <script src="./app.js"></script>
</body>
</html>
