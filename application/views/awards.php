
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
    <div id="carousel-example-generic" class="carousel slide" data-interval="false" data-ride="carousel">
    <!-- Indicators -->

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active start">
        <div class="jumbotron">
            <form method="POST" action="<?php echo base_url();?>index.php/welcome/email" accept-charset="UTF-8" class="form-inline" id="vote-form">                <h1>BeyondD Staff Awards</h1>
                <p class="lead">Howdy Sydneysiders, welcome to the first official BeyondD staff awards!</p>
                <p class="lead">Please take 5 minutes to nominate your candidates for 14 award categories – the winners will be announced on Thursday, 19 December, during our Secret Santa lunch.</p>
                <p class="lead"><strong>This is how it works:</strong> You can either type a name into the text field, or select a name from the full staff list displayed below the text field. Once you have selected a nominee, click “Submit Vote” to move on to the next award category.</p>
                <p class="lead"><strong>Deadline:</strong> Please vote by EOB Wednesday, 18 December</p>
                <p class="lead">Enjoy!</p>
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
            <form method="POST" action="<?php echo base_url();?>index.php/welcome/award" accept-charset="UTF-8" class="form-inline award-form" id="awardone-form">                <div class="result alert alert-danger"></div>
                <h1>Tourette Award</h1>
                <p class="lead">Who the f**k has the f*****g biggest potty mouth in this f*****g office? Vote f*****g now!</p>
                <div class="form-group">
                    <label class="sr-only" for="name1">Enter Name</label>
                    <input type="name" class="form-control input-lg typeahead name" id="name1" placeholder="Type Name" required>
                    <input type="hidden" id="user_id_1" class="user_id" name="user_id" value="">
                    <input type="hidden" id="award1" class="award" name="award" value="1">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-lg btn-success">Submit Vote</button>
                </div>
            </form>        
        </div>
    </div>
    <div class="item award-2">
            <div class="jumbotron">
                <form method="POST" action="<?php echo base_url();?>index.php/welcome/award" accept-charset="UTF-8" class="form-inline award-form" id="awardtwo-form">                    <div class="result alert alert-danger"></div>
                    <h1>Garbage Disposal Award</h1>
                    <p class="lead">Who's most likely to be back for seconds at lunch? Bon ap&eacute;tit!</p>
                    <div class="form-group">
                        <label class="sr-only" for="name1">Enter Name</label>
                        <input type="name" class="form-control input-lg typeahead name" id="name2" placeholder="Type Name" required>
                        <input type="hidden" id="user_id_2" class="user_id" value="">
                        <input type="hidden" id="award1" class="award" name="award" value="2">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-lg btn-success">Submit Vote</button>
                    </div>
                </form>            
            </div>
    </div>
    <div class="item award-4">
        <div class="jumbotron">
            <form method="POST" action="<?php echo base_url();?>index.php/welcome/award" accept-charset="UTF-8" class="form-inline award-form" id="award3-form">                    <div class="result alert alert-danger"></div>
                <h1>Thirsty Camel Award</h1>
                <p class="lead">Who's most punctual at the BeyondD bar on a Friday? See you there in 3 - 2 - 1 ...</p>
                <div class="form-group">
                    <label class="sr-only" for="name1">Enter Name</label>
                    <input type="name" class="form-control input-lg typeahead name" id="name2" placeholder="Type Name" required>
                    <input type="hidden" id="user_id_2" class="user_id" value="">
                    <input type="hidden" id="award1" class="award" name="award" value="3">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-lg btn-success">Submit Vote</button>
                </div>
            </form>            
        </div>
    </div>
    <div class="item award-5">
        <div class="jumbotron">
            <form method="POST" action="<?php echo base_url();?>index.php/welcome/award" accept-charset="UTF-8" class="form-inline award-form" id="award4-form">                    <div class="result alert alert-danger"></div>
                <h1>The Bear Grylls Award</h1>
                <p class="lead">Bears sh*t in the woods - would you if you had to? Tell us who you think is most likely to survive in the wild!</p>
                <div class="form-group">
                    <label class="sr-only" for="name1">Enter Name</label>
                    <input type="name" class="form-control input-lg typeahead name" id="name2" placeholder="Type Name" required>
                    <input type="hidden" id="user_id_2" class="user_id" value="">
                    <input type="hidden" id="award1" class="award" name="award" value="4">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-lg btn-success">Submit Vote</button>
                </div>
            </form>            
        </div>
    </div>
    <div class="item award-5">
        <div class="jumbotron">
            <form method="POST" action="<?php echo base_url();?>index.php/welcome/award" accept-charset="UTF-8" class="form-inline award-form" id="award5-form">                    <div class="result alert alert-danger"></div>
                <h1>The Bill Clinton Award</h1>
                <p class="lead">We don't want to know what's (or who's) going on under your desks, but we DO want to know who's most likely to have skeletons in their closet?</p>
                <div class="form-group">
                    <label class="sr-only" for="name1">Enter Name</label>
                    <input type="name" class="form-control input-lg typeahead name" id="name2" placeholder="Type Name" required>
                    <input type="hidden" id="user_id_2" class="user_id" value="">
                    <input type="hidden" id="award1" class="award" name="award" value="5">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-lg btn-success">Submit Vote</button>
                </div>
            </form>            
        </div>
    </div>
    <div class="item award-5">
        <div class="jumbotron">
            <form method="POST" action="<?php echo base_url();?>index.php/welcome/award" accept-charset="UTF-8" class="form-inline award-form" id="award6-form">                    <div class="result alert alert-danger"></div>
                <h1>Office Sweetheart Award</h1>
                <p class="lead">We're all awesome (clearly), but who in the office makes your day by being... totally amazing?  Nominate your personal office sweetheart!</p>
                <div class="form-group">
                    <label class="sr-only" for="name1">Enter Name</label>
                    <input type="name" class="form-control input-lg typeahead name" id="name2" placeholder="Type Name" required>
                    <input type="hidden" id="user_id_2" class="user_id" value="">
                    <input type="hidden" id="award1" class="award" name="award" value="6">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-lg btn-success">Submit Vote</button>
                </div>
            </form>            
        </div>
    </div>
     <div class="item award-5">
        <div class="jumbotron">
            <form method="POST" action="<?php echo base_url();?>index.php/welcome/award" accept-charset="UTF-8" class="form-inline award-form" id="awardseven-form">                    <div class="result alert alert-danger"></div>
                <h1>Office Gentleman Award</h1>
                <p class="lead">We're all awesome (clearly), but who in the office makes your day by being... totally amazing?  Nominate your personal office gentleman!</p>
                <div class="form-group">
                    <label class="sr-only" for="name1">Enter Name</label>
                    <input type="name" class="form-control input-lg typeahead name" id="name2" placeholder="Type Name" required>
                    <input type="hidden" id="user_id_2" class="user_id" value="">
                    <input type="hidden" id="award1" class="award" name="award" value="7">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-lg btn-success">Submit Vote</button>
                </div>
            </form>            
        </div>
    </div>
    <div class="item award-5">
        <div class="jumbotron">
            <form method="POST" action="<?php echo base_url();?>index.php/welcome/award" accept-charset="UTF-8" class="form-inline award-form" id="award7-form">                    <div class="result alert alert-danger"></div>
                <h1>Road Runner Award</h1>
                <p class="lead">We would all rather spend time outside these office walls than inside (unless we have to evacuate at 47 degrees) – but who's meep-meeping the fastest to the office departure gate each day?</p>
                <div class="form-group">
                    <label class="sr-only" for="name1">Enter Name</label>
                    <input type="name" class="form-control input-lg typeahead name" id="name2" placeholder="Type Name" required>
                    <input type="hidden" id="user_id_2" class="user_id" value="">
                    <input type="hidden" id="award1" class="award" name="award" value="8">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-lg btn-success">Submit Vote</button>
                </div>
            </form>            
        </div>
    </div>
    <div class="item award-5">
        <div class="jumbotron">
            <form method="POST" action="<?php echo base_url();?>index.php/welcome/award" accept-charset="UTF-8" class="form-inline award-form" id="award8-form">                    <div class="result alert alert-danger"></div>
                <h1>Big Kahuna Award</h1>
                <p class="lead">Who knows what's hot or not, yay or nay, top or flop, or simply hilarious on the Web right now, and makes an effort to spread the word via email?</p>
                <div class="form-group">
                    <label class="sr-only" for="name1">Enter Name</label>
                    <input type="name" class="form-control input-lg typeahead name" id="name2" placeholder="Type Name" required>
                    <input type="hidden" id="user_id_2" class="user_id" value="">
                    <input type="hidden" id="award1" class="award" name="award" value="9">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-lg btn-success">Submit Vote</button>
                </div>
            </form>            
        </div>
    </div>
    <div class="item award-5">
        <div class="jumbotron">
            <form method="POST" action="<?php echo base_url();?>index.php/welcome/award" accept-charset="UTF-8" class="form-inline award-form" id="award9-form">                    <div class="result alert alert-danger"></div>
                <h1>Early Bird Award</h1>
                <p class="lead">Who's most likely to be the first to arrive in the office?</p>
                <div class="form-group">
                    <label class="sr-only" for="name1">Enter Name</label>
                    <input type="name" class="form-control input-lg typeahead name" id="name2" placeholder="Type Name" required>
                    <input type="hidden" id="user_id_2" class="user_id" value="">
                    <input type="hidden" id="award1" class="award" name="award" value="10">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-lg btn-success">Submit Vote</button>
                </div>
            </form>            
        </div>
    </div>
    <div class="item award-5">
        <div class="jumbotron">
            <form method="POST" action="<?php echo base_url();?>index.php/welcome/award" accept-charset="UTF-8" class="form-inline award-form" id="award10-form">                    <div class="result alert alert-danger"></div>
                <h1>Kim Kardashian / Brody Jenner Award</h1>
                <p class="lead">Who's the biggest socialtite in the office?</p>
                <div class="form-group">
                    <label class="sr-only" for="name1">Enter Name</label>
                    <input type="name" class="form-control input-lg typeahead name" id="name2" placeholder="Type Name" required>
                    <input type="hidden" id="user_id_2" class="user_id" value="">
                    <input type="hidden" id="award1" class="award" name="award" value="11">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-lg btn-success">Submit Vote</button>
                </div>
            </form>            
        </div>
    </div>

    <div class="item award-5">
        <div class="jumbotron">
            <form method="POST" action="<?php echo base_url();?>index.php/welcome/award" accept-charset="UTF-8" class="form-inline award-form" id="award11-form">                    <div class="result alert alert-danger"></div>
                <h1>Gossip Girl XOXO Award</h1>
                <p class="lead">Did you hear that someone did something outrageous/funny/weird for some random reason some time last week? Who knows all the office gossip - and is ready to share it?</p>
                <div class="form-group">
                    <label class="sr-only" for="name1">Enter Name</label>
                    <input type="name" class="form-control input-lg typeahead name" id="name2" placeholder="Type Name" required>
                    <input type="hidden" id="user_id_2" class="user_id" value="">
                    <input type="hidden" id="award1" class="award" name="award" value="12">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-lg btn-success">Submit Vote</button>
                </div>
            </form>            
        </div>
    </div>

    <div class="item award-5">
        <div class="jumbotron">
            <form method="POST" action="<?php echo base_url();?>index.php/welcome/award" accept-charset="UTF-8" class="form-inline award-form" id="award12-form">                    <div class="result alert alert-danger"></div>
                <h1>Clark Kent Award</h1>
                <p class="lead">Up up and away! Who is most likely to have a secret identity as a superhero?</p>
                <div class="form-group">
                    <label class="sr-only" for="name1">Enter Name</label>
                    <input type="name" class="form-control input-lg typeahead name" id="name2" placeholder="Type Name" required>
                    <input type="hidden" id="user_id_2" class="user_id" value="">
                    <input type="hidden" id="award1" class="award" name="award" value="13">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-lg btn-success">Submit Vote</button>
                </div>
            </form>            
        </div>
    </div>

    <div class="item award-5">
        <div class="jumbotron">
            <form method="POST" action="<?php echo base_url();?>index.php/welcome/award" accept-charset="UTF-8" class="form-inline award-form" id="award13-form">                    <div class="result alert alert-danger"></div>
                <h1>TMI – Totes Inapprop! Award</h1>
                <p class="lead">We're looking for the person who delivers the most shocking comments. No further explanation necessary.</p>
                <div class="form-group">
                    <label class="sr-only" for="name1">Enter Name</label>
                    <input type="name" class="form-control input-lg typeahead name" id="name2" placeholder="Type Name" required>
                    <input type="hidden" id="user_id_2" class="user_id" value="">
                    <input type="hidden" id="award1" class="award" name="award" value="14">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-lg btn-success">Submit Vote</button>
                </div>
            </form>            
        </div>
    </div>

    <div class="item award-5">
        <div class="jumbotron">
                <h1>A big thank you to all the potty mouths, road runners, sweethearts, thirsty camels and superheroes who participated – look forward to the awards lunch!</h1>
        </div>
    </div>

    <!-- Controls -->
     <!-- <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
    </a> -->
    </div>
    <?php $c = 1; ?>
    <div class="nominee">
        <h2>Choose a nominee by clicking on their name:</h2>
        <div class="list-group col-md-4">
        	<?php foreach ($names as $value): ?>
            	<a href="#" class="list-group-item" data-value="<?php echo ucwords($value->name); ?>"><?php echo $value->name; ?></a>
            	<?php if ($c == 14):?></div><div class="list-group col-md-4"><?php $c = 1; ?><?php endif; ?>
            	<?php $c++; ?>
            <?php endforeach; ?>
        </div>
    </div>

    </div>
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
                    '<?php echo ucwords($value->name); ?>'<?php if ($i != $length):?>,<?php endif; ?>                                          
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