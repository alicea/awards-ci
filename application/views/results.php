<?php 

$awards = array('Tourette Award', 'Garbage Disposal Award', 'Thirsty Camel Award', 'The Bear Grylls Award', 'The Bill Clinton Award', 'Office Sweetheart Award', 'Office Gentleman Award',
	'Road Runner Award', 'Big Kahuna Award', 'Early Bird Award', 'Kim Kardashian / Brody Jenner Award', 'Gossip Girl XOXO Award', 'Clark Kent Award', 'TMI – Totes Inapprop! Award');

?>
<!DOCTYPE html>
<html>
  <head>
    <title>BDV | Beyondd Staff Awards</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link media="all" type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    <link media="all" type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-theme.min.css'); ?>">
    <link media="all" type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/styles.css'); ?>">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
            
    <br />
    
    <?php $count = 0; ?>
<?php foreach ($results as $key => $value): ?>
	<?php 
	// print_r($value); 
	// exit();
	?>
<table class="table table-striped" style="border: 1px solid #ccc;">
	<?php $innerCount = 0; ?>
	<?php foreach ($value as $result): ?>
	
		<tr <?php echo ($innerCount == 0 ? 'class="success"' : ''); ?>>
			<td width="20%"><?php echo $awards[$count]; ?></td>
			<td width="40%"><?php echo $result->vote; ?></td>
			<td width="40%"><?php echo $result->votes; ?></td>
		</tr>
		<?php $innerCount++; ?>
	<?php endforeach; ?>
	</table>
	<?php $count++; ?>
<?php endforeach; ?>

</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.validate.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/typeahead.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/script.js'); ?>"></script>

    </body>
</html>