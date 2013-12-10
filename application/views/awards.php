
<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap 101 Template</title>
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
    <div id="carousel-example-generic" class="carousel slide" data-interval="false" data-ride="carousel">
    <!-- Indicators -->

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active start">
        <div class="jumbotron">
            <form method="POST" action="<?php echo base_url();?>index.php/welcome/email" accept-charset="UTF-8" class="form-inline" id="vote-form"><input name="_token" type="hidden" value="JTcykicMZeypJ44r7lVaFkOB6NeXxvSmPqQNGWPE">                <h1>Beyond D Staff Awards</h1>
                <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                <div class="form-group">
                    <label class="sr-only" for="email">Email address</label>
                    <input type="email" class="form-control input-lg" id="email" placeholder="Enter email address" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-lg btn-success">Start Voting </button>
                </div>
                <div class="result"></div>
            </form>        </div>
      </div>
      <div class="item award-1">
        <div class="jumbotron">
            <form method="POST" action="<?php echo base_url();?>index.php/welcome/award" accept-charset="UTF-8" class="form-inline award-form" id="awardone-form"><input name="_token" type="hidden" value="JTcykicMZeypJ44r7lVaFkOB6NeXxvSmPqQNGWPE">                <div class="result alert alert-danger"></div>
                <h1>Tourettes Award</h1>
                <p class="lead">Biggest potty mouth</p>
                <div class="form-group">
                    <label class="sr-only" for="name1">Enter Name</label>
                    <input type="name" class="form-control input-lg typeahead name" id="name1" placeholder="Type Name" required>
                    <input type="hidden" id="user_id_1" class="user_id" name="user_id" value="">
                    <input type="hidden" id="table1" class="table" name="table" value="awardone">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-lg btn-success">Submit Vote</button>
                </div>
            </form>        </div>
    </div>
    <div class="item award-2">
            <div class="jumbotron">
                <form method="POST" action="<?php echo base_url();?>index.php/welcome/award" accept-charset="UTF-8" class="form-inline award-form" id="awardtwo-form"><input name="_token" type="hidden" value="JTcykicMZeypJ44r7lVaFkOB6NeXxvSmPqQNGWPE">                    <div class="result alert alert-danger"></div>
                    <h1>Garbage Disposal Award</h1>
                    <p class="lead">Most likely to back for seconds at lunch</p>
                    <div class="form-group">
                        <label class="sr-only" for="name1">Enter Name</label>
                        <input type="name" class="form-control input-lg typeahead name" id="name2" placeholder="Type Name" required>
                        <input type="hidden" id="user_id_2" class="user_id" value="">
                        <input type="hidden" id="table1" class="table" name="table" value="awardtwo">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-lg btn-success">Submit Vote</button>
                    </div>
                </form>            </div>
      </div>

    <!-- Controls -->
     <!-- <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
    </a> -->
    </div>
    <?php $c = 0; ?>
    <div class="nominee">
        <h2>Nominee list:</h2>
        <div class="list-group col-md-6">
        	<?php foreach ($names as $value): ?>
            	<a href="#" class="list-group-item" data-value="<?php echo $value->name; ?>"><?php echo $value->name; ?></a>
            	<?php if ($c == 5):?></div><div class="list-group col-md-6"><?php $i = 0; ?><?php endif; ?>
            	<?php $c++; ?>
            <?php endforeach; ?>
        </div>
    </div>

      <!-- <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      </ol> -->

        </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.validate.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/typeahead.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/script.js'); ?>"></script>

    <?php $i = 1; ?>
    <?php $length = count($names); ?>
    <script type="text/javascript">
        $(window).load(function(){  
            $('.item .typeahead').typeahead({                                
              name: 'names',                                                          
              local: [<?php foreach ($names as $value): ?>
                    '<?php echo $value->name; ?>'<?php if ($i != $length):?>,<?php endif; ?>                                          
                   	<?php $i++; ?>
                      <?php endforeach; ?>],                                         
              limit: 10                                                                   
            });

            $('.list-group-item').on('click', function(e){
                e.preventDefault();
                var name = $(this).data('value');
                $('.item.active').find('.name').val(name);
            });

        });

      </script>
    </body>
</html>