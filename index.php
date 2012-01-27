<!DOCTYPE HTML>
<html>


<head>
	<meta charset="utf-8">
	<title>Ontario Shoppers' Calculator</title>
    <link href="css/calculator.css" rel="stylesheet">    
</head>

<body>
    <div class = Calculator>	
	<form action="index.php" method="post">
    <h1>Calculate prices, with Ontario HST added</h1>
		<label for="number1">Number 1</label>
		<input id="number1" name="number1">

		<label for="action">Calculation</label>
		<select id="action" name="action">
			<option value="+">+</option>
			<option value="-">-</option>
			<option value="*">*</option>
			<option value="/">÷</option>
		</select>
    
  		<label for="number2">Number 2</label>
		<input id="number2" name="number2">   

		<button type="submit">Calculate</button>

	<?php $subtotal = '0'; ?>

	<?php if (!empty($_POST['number1']) && !empty($_POST['number2'])): ?>
	
    	<?php if ($_POST['action'] == '+'):?>
		<?php $subtotal = number_format ($_POST['number1'] + $_POST['number2'], 2)?>

    	<?php elseif ($_POST['action'] == '-'):?>
		<?php $subtotal = number_format ($_POST['number1'] - $_POST['number2'], 2) ?>

    	<?php elseif ($_POST['action'] == '*'):?>
		<?php $subtotal = number_format ($_POST['number1'] * $_POST['number2'], 2) ?>
		
    	<?php elseif ($_POST['action'] == '/'):?>
		<?php $subtotal = number_format ($_POST['number1'] / $_POST['number2'], 2) ?>
		
		<?php endif; ?>
        
	<?php endif; ?>
        <p>Subtotal: $<?php echo $subtotal; ?></p>
		<p> HST: $<?php echo $subtotal * 0.13; ?></p>
        <p>Total (tax included): $<?php echo $subtotal * 1.13; ?></p>
        
	</form>
</body>
</html>











