<?php
    include ('header.php'); 
	
	// function creation
	function create_radio($value) {
		$name = "filing_status";
		// Start the element:
		echo '<input type="radio" name="filing_status" value="' . $value . '"';
		
		// Check for stickiness:
		if (isset($_POST[$name]) && ($_POST[$name] == $value)) {
			echo ' checked="checked"';
		}
		
		// Complete the element:
		echo " /> $value ";
	}
	
	// The following function will calculate the taxes.
	// This function will take two parameters: The filing status and taxable Income.
	// It will then use a switch statement to check different possible cases and apply
	// the required logic to obtain the outcome.
	
	function calculate_taxes($taxableIncome, $filingStatus ) {
	
		if ($filingStatus == "Single" ){
			
			switch (true) {

				case ($taxableIncome >= 0 && $taxableIncome < 9726):
					$taxableExtraIncome = 0;
					$taxRate = "10% of Initial Income";
					$minimalAmount = "<i>Not Applicable</i>";
					$taxDeduction = $taxableIncome * .10;
					$finalIncome = $taxableIncome - $taxDeduction;
					return array ($filingStatus,
								  $taxRate,
								  $minimalAmount,
								  number_format($taxableIncome, 2),
								  number_format($taxableExtraIncome, 2), 
								  number_format($taxDeduction, 2), 
								  number_format($finalIncome, 2));
				break;

				case ($taxableIncome > 9725 && $taxableIncome <= 37650):
					$taxableExtraIncome = $taxableIncome - 9275;
					$taxRate = "$927.50 plus 15% of the amount over $9,275";
					$minimalAmount = 9275;					
					$taxDeduction = ($taxableExtraIncome * 0.15) + 927.50;
					$finalIncome = $taxableIncome - $taxDeduction;
					return array ($filingStatus,
								  $taxRate,
								  number_format($minimalAmount, 2),
								  number_format($taxableIncome, 2),
								  number_format($taxableExtraIncome, 2), 
								  number_format($taxDeduction, 2), 
								  number_format($finalIncome, 2));		
				break;

				case ($taxableIncome > 37650 && $taxableIncome <= 91150):
					$taxableExtraIncome = $taxableIncome - 37650;
					$taxRate = "$5,183.75 plus 25% of the amount over $37,650";
					$minimalAmount = 37650;
					$taxDeduction = ($taxableExtraIncome * 0.25) + 5183.75;
					$finalIncome = $taxableIncome - $taxDeduction;
					return array ($filingStatus,
								  $taxRate,
								  number_format($minimalAmount, 2),
								  number_format($taxableIncome, 2),
								  number_format($taxableExtraIncome, 2), 
								  number_format($taxDeduction, 2), 
								  number_format($finalIncome, 2));		
				break;
				
				case ($taxableIncome > 91150 && $taxableIncome <= 190150):
					$taxableExtraIncome = $taxableIncome - 91150;
					$taxRate = "$18,558.75 plus 28% of the amount over $91,150";
					$minimalAmount = 91150;
					$taxDeduction = ($taxableExtraIncome * 0.28) + 18558.75;
					$finalIncome = $taxableIncome - $taxDeduction;
					return array ($filingStatus,
								  $taxRate,
								  number_format($minimalAmount, 2),
								  number_format($taxableIncome, 2),
								  number_format($taxableExtraIncome, 2), 
								  number_format($taxDeduction, 2), 
								  number_format($finalIncome, 2));
				break;
				
				case ($taxableIncome > 190150 && $taxableIncome <= 413350):
					$taxableExtraIncome = $taxableIncome - 190150;
					$taxRate = "$46,278.75 plus 33% of the amount over $190,150";
					$minimalAmount = 190150;
					$taxDeduction = ($taxableExtraIncome * 0.33) + 46278.75;
					$finalIncome = $taxableIncome - $taxDeduction;
					return array ($filingStatus,
								  $taxRate,
								  number_format($minimalAmount, 2),
								  number_format($taxableIncome, 2),
								  number_format($taxableExtraIncome, 2), 
								  number_format($taxDeduction, 2), 
								  number_format($finalIncome, 2));		
				break;
				
				case ($taxableIncome > 413350 && $taxableIncome <= 415050):
					$taxableExtraIncome = $taxableIncome - 413350;
					$taxRate = "$119,934.75 plus 35% of the amount over $413,350";
					$minimalAmount = 413350;
					$taxDeduction = ($taxableExtraIncome * 0.35) + 119934.75;
					$finalIncome = $taxableIncome - $taxDeduction;
					return array ($filingStatus,
								  $taxRate,
								  number_format($minimalAmount, 2),
								  number_format($taxableIncome, 2),
								  number_format($taxableExtraIncome, 2), 
								  number_format($taxDeduction, 2), 
								  number_format($finalIncome, 2));	
				break;
				
				case ($taxableIncome > 415050):
					$taxableExtraIncome = $taxableIncome - 415050;
					$taxRate = "$120,529.75 plus 39.6% of the amount over $415,050";
					$minimalAmount = 415050;
					$taxDeduction = ($taxableExtraIncome * 0.396) + 120529.75;
					$finalIncome = $taxableIncome - $taxDeduction;
					return array ($filingStatus,
								  $taxRate,
								  number_format($minimalAmount, 2),
								  number_format($taxableIncome, 2),
								  number_format($taxableExtraIncome, 2), 
								  number_format($taxDeduction, 2), 
								  number_format($finalIncome, 2));		
				break;
			}

		} else {
			
			switch (true) {
					
				case ($taxableIncome >= 0 && $taxableIncome < 18451):
					$taxDeduction = $taxableIncome * .10;
					$taxRate = "10% of Initial Income";
					$minimalAmount = "<i>Not Applicable</i>";
					$finalIncome = $taxableIncome - $taxDeduction;
					$taxableExtraIncome = 0;
					return array ($filingStatus,
								  $taxRate,
								  $minimalAmount,
								  number_format($taxableIncome, 2),
								  number_format($taxableExtraIncome, 2), 
								  number_format($taxDeduction, 2), 
								  number_format($finalIncome, 2));
				break;

				case ($taxableIncome > 18450 && $taxableIncome <= 74900):
					$taxableExtraIncome = $taxableIncome - 18450;
					$taxRate = "$1,845.00 plus 15% of the amount over $18,450";
					$minimalAmount = 18450;
					$taxDeduction = ($taxableExtraIncome * 0.15) + 1845;
					$finalIncome = $taxableIncome - $taxDeduction;
					return array ($filingStatus,
								  $taxRate,
								  number_format($minimalAmount, 2),
								  number_format($taxableIncome, 2),
								  number_format($taxableExtraIncome, 2), 
								  number_format($taxDeduction, 2), 
								  number_format($finalIncome, 2));
				break;

				case ($taxableIncome > 74900 && $taxableIncome <= 151200):
					$taxableExtraIncome = $taxableIncome - 74900;
					$taxRate = "$10,312.50 plus 25% of the amount over $74,900";
					$minimalAmount = 74900;
					$taxDeduction = ($taxableExtraIncome * 0.25) + 10312.50;
					$finalIncome = $taxableIncome - $taxDeduction;
					return array ($filingStatus,
								  $taxRate,
								  number_format($minimalAmount, 2),
								  number_format($taxableIncome, 2),
								  number_format($taxableExtraIncome, 2), 
								  number_format($taxDeduction, 2), 
								  number_format($finalIncome, 2));				
				break;
				
				case ($taxableIncome > 151200 && $taxableIncome <= 230450):
					$taxableExtraIncome = $taxableIncome - 151200;
					$taxRate = "$29,387.50 plus 28% of the amount over $151,200";
					$minimalAmount = 151200;
					$taxDeduction = ($taxableExtraIncome * 0.28) + 29387.50;
					$finalIncome = $taxableIncome - $taxDeduction;
					return array ($filingStatus,
								  $taxRate,
								  number_format($minimalAmount, 2),
								  number_format($taxableIncome, 2),
								  number_format($taxableExtraIncome, 2), 
								  number_format($taxDeduction, 2), 
								  number_format($finalIncome, 2));	
				break;
				
				case ($taxableIncome > 230450 && $taxableIncome <= 411500):
					$taxableExtraIncome = $taxableIncome - 230450;
					$taxRate = "$51,577.50 plus 33% of the amount over $230,450";
					$minimalAmount = 230450;
					$taxDeduction = ($taxableExtraIncome * 0.33) + 51577.50;
					$finalIncome = $taxableIncome - $taxDeduction;
					return array ($filingStatus,
								  $taxRate,
								  number_format($minimalAmount, 2),
								  number_format($taxableIncome, 2),
								  number_format($taxableExtraIncome, 2), 
								  number_format($taxDeduction, 2), 
								  number_format($finalIncome, 2));			
				break;
				
				case ($taxableIncome > 411500 && $taxableIncome <= 464850):
					$taxableExtraIncome = $taxableIncome - 411500;
					$taxRate = "$111,324.00 plus 35% of the amount over $411,500";
					$minimalAmount = 411500;
					$taxDeduction = ($taxableExtraIncome * 0.35) + 111324;
					$finalIncome = $taxableIncome - $taxDeduction;
					return array ($filingStatus,
								  $taxRate,
								  number_format($minimalAmount, 2),
								  number_format($taxableIncome, 2),
								  number_format($taxableExtraIncome, 2), 
								  number_format($taxDeduction, 2), 
								  number_format($finalIncome, 2));		
				break;
				
				case ($taxableIncome > 464850):
					$taxableExtraIncome = $taxableIncome - 464850;
					$taxRate = "$129,996.50 plus 39.6% of the amount over $464,850";
					$minimalAmount = 464850;
					$taxDeduction = ($taxableExtraIncome * 0.396) + 129996.50;
					$finalIncome = $taxableIncome - $taxDeduction;
					return array ($filingStatus,
								  $taxRate,
								  number_format($minimalAmount, 2),
								  number_format($taxableIncome, 2),
								  number_format($taxableExtraIncome, 2), 
								  number_format($taxDeduction, 2), 
								  number_format($finalIncome, 2));					
				break;
			}	
		}		
	}
	
	// Check form submission
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {

		if (is_numeric($_POST['taxable_income'])) {
			// Calculate the results:
			$results = calculate_taxes($_POST['taxable_income'], $_POST['filing_status']);
		
			// Print the results:
			echo 
				'<h1>Total Results:</h1>
				 <p><b>Filing status</b>: ' . strtoupper($results[0]) .' </p>' .
			    '<p><b>Tax Rate</b>: <i>' . $results[1] .'</i> </p>' .
				'<p><b>Initial Annual Income Amount</b>: $' . $results[3] .' </p>' .
				'<p><b>Amount Over $' . $results[2] . ' to use in calculating total deductions</b>:  $' . $results[4] .' </p>' .
				'<p><b>Total Tax Deductions Amount After Calculations</b>: $' . $results[5] .' </p>' .
				'<p><b>Final Amount After Deductions</b>: $' . $results[6] .' </p>';	
		} else { 
			// Invalid submitted values.
			echo 
				'<h1>Error!</h1>
				 <p class="error">Please enter a valid income amount</p>';
		}
	}
?>
<body>
	<h1>Tax Calculator</h1>
		<form action="calculator.php" method="post">
			<p>
				Annual Income: <input type="number" name="taxable_income" value="<?php if (isset($_POST['taxable_income'])) echo $_POST['taxable_income']; ?>" />
			</p>
			<p>Filing Status <i>(Please select one)</i>: 
				<select name="filing_status">
					<option value="Single"<?php if (isset($_POST['filing_status']) && ($_POST['filing_status'] == 'Single')) echo ' selected="selected"'; ?>>Single</option>
					<option value="Married Filing Jointly or Qualifying Widow(er)"<?php if (isset($_POST['filing_status']) && ($_POST['filing_status'] == 'Married Filing Jointly or Qualifying Widow(er)')) echo ' selected="selected"'; ?>>Married Filing Jointly or Qualifying Widow(er)</option>		
				</select></p>
		
	<p><button type="submit" name="submit" class="btn btn-primary">Calculate</button></p>
	
	
</form>

<?php include ('footer.html'); ?>