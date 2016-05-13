<html>
<head>
<!-- Pricer -->
<!-- JQuery -->
<script src="js/jquery-1.11.2.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<!-- Font awesome cdn -->
<!-- <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"> -->

<!-- Font awesome local -->
<link href="./font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<!-- Tooltip -->
<link rel="stylesheet" href="css/tooltip.css">

<!-- D3JS -->
<script src="js/d3.min.js"></script>

<style>
@media (min-width: 970px){.container{width: 750px;}}
td{font-size:14px;}
</style>
<title>Bond pricer</title>
</head>

<body>
<div class='container'>
<input type='hidden' id='student_id'>

<h1>
	<i class='fa fa-bar-chart'></i> <span id='title'>Bond pricer</span>
</h1>

<hr />


<div class="row">

  <div class="col-sm-4">
    <div class="input-group">
      <span class="input-group-addon">Redeem price</span>
      <input type="text" class="form-control" placeholder="Remboursement" value='102.54' style='text-align:right' id='a'>
      <span class="input-group-addon">%</span>
    </div><!-- /input-group -->
  </div>
  
  <div class="col-sm-4">
    <div class="input-group">
      <span class="input-group-addon">Maturity</span>
      <input type="number" class="form-control" placeholder="Maturite" value='5' style='text-align:right' id='b'>
      <span class="input-group-addon">Year</span>
    </div><!-- /input-group -->
  </div>

  <div class="col-sm-4">
    <div class="input-group">
      <span class="input-group-addon">Coupon</span>
      <input type="text" class="form-control" placeholder="Coupon" value='6.00' style='text-align:right' id='c'>
      <span class="input-group-addon">%</span>
    </div><!-- /input-group -->
  </div>
</div><!-- /.row -->

<br />

<div class="row">

  <div class="col-sm-4">
    <div class="input-group">
    <span class="input-group-addon">Market rate</span>
      <input type="text" class="form-control" placeholder="Remboursement" value='5.00' style='text-align:right' id='d'>
      <span class="input-group-addon">%</span>
    </div><!-- /input-group -->
  </div>
  
  <div class="col-sm-4">
    <div class="input-group">
      <span class="input-group-addon">Delta</span>
      <input type="text" class="form-control" placeholder="Delta" value='0.1' style='text-align:right' id='e'>
      <span class="input-group-addon">%</span>
    </div><!-- /input-group -->
  </div>

</div><!-- /.row -->

<hr />

<table class='table table-condensed'>
<thead>
<th></th>
<th style='text-align:right'>- delta</th>
<th style='text-align:right'>nominal</th>
<th style='text-align:right'>+ delta</th>
</thead>
<tbody>
  <tr id='r1'><td>Discounting rate<td style='text-align:right'>0<td style='text-align:right'>0<td style='text-align:right'>0
  <tr id='r2'><td>Price (P)<td style='text-align:right'>0<td style='text-align:right'>0<td style='text-align:right'>0
  <tr id='r3'><td>Duration<td style='text-align:right'>0<td style='text-align:right'>0<td style='text-align:right'>0
  <tr id='r4'><td>Duration implied price (IP)<td style='text-align:right'>0<td style='text-align:right'>0<td style='text-align:right'>0
  <tr id='r5'><td>Price delta (IP-P)  <td style='text-align:right'>0<td style='text-align:right'>0<td style='text-align:right'>0
</tbody>
</table>

<div id='details'></div>

<div class='row'>
	<div class='col-xs-12'>
		<h3>Graph</h3>
		<div id='graphDiv'></div>
	</div>	
</div>


https://docs.google.com/spreadsheets/d/11oRidhRwjw1sxhVGjB6aIrorothsinqyLQxe9Z0laQ0/edit#gid=0


<script src='js/tooltip.js'></script>
<script src='js/pricer.js'></script>


