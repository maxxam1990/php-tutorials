<?php include ('header.php'); ?>
<body> 
	<h1>Hello Mr. Max!<h1>
	<img src="img/emoji.png" alt="" style="width: 150px; height: 150px;"> 
	<h2>You have successfully logged in to the Tax Calculator v.0.1</h2>
	<h3>Find the instructions on how to operate it below:</h3>
	<p>
		To make this calculator work, we will need to collect a little bit of information about you.
		<br/>
		<br/>
		When you click on the <a href="calculator.php">TAX CALCULATOR</a> tab on the navigation menu, a 
		form will open asking you to fill up your filing status and your annual income.
		<br/>
		<br/>
		This infomation will be used to calculate the primitive federal income.
	</p>
	<p>
		<h4>The table below shows the logic applied to the calculations:</h4>
		    <table border="1" align=center>
				<h2>Filing Status: Single </h2>
				<thead>
					<tr>
						<th>Taxable Income</th>
						<th>Tax Rate</th>
					<tr>
				</thead>
				<tbody>
					<tr>
						<td>$0 - $9,275</td>
						<td>10%</td>
					</tr>
					<tr>
						<td>$9,276 - $37,650</td>
						<td>$927.50 plus 15% of the amount over $9,275</td>
					</tr>
					<tr>
						<td>$37,651 - $91,150</td>
						<td>$5,183.75 plus 25% of the amount over $37,650</td>
					</tr>
					<tr>
						<td>$91,151 - $190,150</td>
						<td>$18,558.75 plus 28% of the amount over $91,150</td>
					</tr>
					<tr>
						<td>$190,151 - $413,350</td>
						<td>$46,278.75 plus 33% of the amount over $190,150</td>
					</tr>
					<tr>
						<td>$413,351 - $415,050</td>
						<td>$119,934.75 plus 35% of the amount over $413,350</td>
					</tr>
					<tr>
						<td>$415,051 or more</td>
						<td>$120,529.75 plus 39.6% of the amount over $415,050</td>
					</tr>					
				</tbody>  
			</table>
	</p>
	<p>
		<table border="1" align=center>
			<h2>Filing Status: Married Filing Jointly or Qualifying Widow(er): </h2>
			<thead>
				<tr>
					<th>Taxable Income</th>
					<th>Tax Rate</th>
				<tr>
			</thead>
			<tbody>
				<tr>
					<td>$0 - $18,450</td>
					<td>10%</td>
				</tr>
				<tr>
					<td>$18,451 - $74,900</td>
					<td>$1,845.00 plus 15% of the amount over $18,450</td>
				</tr>
				<tr>
					<td>$74,901 - $151,200</td>
					<td>$10,312.50 plus 25% of the amount over $74,900</td>
				</tr>
				<tr>
					<td>$151,201 - $230,450</td>
					<td>$29,387.50 plus 28% of the amount over $151,200</td>
				</tr>
				<tr>
					<td>$230,451 - $411,500</td>
					<td>$51,577.50 plus 33% of the amount over $230,450</td>
				</tr>
				<tr>
					<td>$411,501 - $464,850</td>
					<td>$111,324.00 plus 35% of the amount over $411,500</td>
				</tr>
				<tr>
					<td>$464,851 or more</td>
					<td>$129,996.50 plus 39.6% of the amount over $464,850</td>
				</tr>					
			</tbody>  
		</table>
	</p>

<?php include ('footer.html'); ?>