<!--
*	Author:	Robert Hunter
*	Assignment:	Minor	Project	–	Eco Ninja, SxSW
*	Date	:	12/07/15
*	Ref:	
-->
<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
	<title>Econ Ninja template</title>
	<!-- Global stylesheet to reset page style for common starting point on each browser -->
	<!--<link rel="stylesheet" type="text/css" href="css/GlobalDefaults.css">
	<!-- The Global.css file has styling elements shared across site e.g. header, footer, nav, headings etc -->
	<link rel="stylesheet" type="text/css" href="css/Global.css">
	<link rel="stylesheet" type="text/css" href="Bootstrap3/css/bootstrap.min.css">
	</head>
	<body>
		<div class="container-fluid">	

				<header class="bg-greenDark">
				
				</header>

				<div class="navbar navbar-default">
				    <div class="container-fluid bg-cream">

				      <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
				      <div class="navbar-header">
					       	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				              <span class="sr-only">Toggle navigation</span>
				              <span class="icon-bar"></span>
				              <span class="icon-bar"></span>
				              <span class="icon-bar"></span>
	            			</button>
	            		</div>
				  	

				  		<div id="navbar" class="navbar-collapse collapse">
				            <ul class="nav navbar-nav navbar-right">
					             <li role="presentation">
							    	<a class="topNav" href="index.html">Home</a>
							    </li>
							    <li role="presentation">
							    	<a class="topNav" href="registration.html">Profile</a>
							    </li>
							    <li role="presentation">
							    	<a class="topNav" href="quiz.html">Challenge</a>
							    </li>
							    <li role="presentation">
							    	<a class="topNav" href="Leaderboard.php">Leaderboards</a>
							    </li>
							    <li role="presentation">
							    	<a class="topNav" href="#">Blog</a>
							    </li>
							    <li role="presentation">
							    	<a class="topNav" href="#">Gallery</a>
							    </li>
							    <li role="presentation">
							    	<a class="topNav" href="#">About</a>
							    </li>
				          </ul>
				        </div>			  
				
				  </div> <!-- Close nav collapse -->
				</div>	 <!-- Close container fluid -->

				<div class="mainContent"> 
				<!-- Hey declan. The mainContent div is where the page specific content will be located. Editing anything outside of this section could break the standard layout elements of the site -->
				<!-- Start of content here. Edit after -->
					
					<div class="jumbotron">
						<div class="container">
						
							<div class="row">

								<div class="col-sm-12 col-md-12">
							  	<h3 class="lead"> 
									The Planet <b>EARTH</b> is the coolest place in the univese to live. It has been under <b>THREAT</b> for some time now. We need to take better care of it. With your <b>HELP</b> we will <b>SAVE</b> it.
								</h3>

							
		  						<div class="col-sm-6 col-md-6">
		  							<a class="btn btn-primary btn-lg mainContent" href="#" role="button">
		  							Climate change Video</a>
		  						</div>	
		  						<div class="col-sm-6 col-md-6">	
			  							<a id="popoverBTN" class="btn btn-primary btn-lg mainContent" class="btn btn-primary btn-lg mainContent" role="button" data-toggle="popover"> 
			  								Fun Facts
			  							</a>
		  					<!--		
		  					<button id="popoverBTN" type="button" class="btn btn-default popoverBTN" data-container="body" data-toggle="popover"> Fun Facts </button>-->
		  						</div>
		  						<div class="col-sm-6 col-md-6">
		  							<a class="btn btn-primary btn-lg mainContent" href="#" role="button"> Latest News</a>
		  						</div>
		  						<div class="col-sm-6 col-md-6">
		  							<a class="btn btn-primary btn-lg mainContent" href="#" role="button"> Test Your Knowledge</a>
		  						</div>
		  					</div>
						
						</div>
					</div>

				 
				<!-- End Of main content here -->
				</div>

				<footer class="bg-yellow">
					<img src="assets/imgs/ENJ_Logo.png" class="img-responsive" alt="Eco Ninja Header">
				</footer>
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="Bootstrap3/js/bootstrap.min.js"></script>	
		<script> 

				$(document).ready(function(){
				// initialize popovers
				$('[data-toggle="popover"]').popover();
			});


				// logic for random fact popover
				var fact1 = "Fact 1: Excepteur sint obcaecat cupiditat non proident culpa.";
				var fact2 = "Fact 2: Excepteur sint obcaecat cupiditat non proident culpa.";
				var fact3 = "Fact 3: Excepteur sint obcaecat cupiditat non proident culpa.";
				var fact4 = "Fact 4: Excepteur sint obcaecat cupiditat non proident culpa.";
				var randomFactArray = [fact1, fact2, fact3, fact4];

				function randomInt(min,max) {
					return Math.floor(Math.random() * (max - min)) + min;
				}

				function randomFact (){
						var randIDX =  randomInt(0,4);
						return randomFactArray[randIDX];
				}
				function randomPos (){
						var posArray = ['left','right','top','bottom'];
						var randIDX =  randomInt(0,4);
						return posArray[randIDX];
				}

				$('#popoverBTN').popover({
						content: function () {
							return randomFact();
						},
						delay: { "show": 500, "hide": 500 },
						placement: function() {
							return randomPos();
						},
						trigger: 'hover'
				});

				$('#popoverBTN').on('hidden.bs.popover', function () {
  						console.log('popover hidden');
				});

		</script>

	</body>
</html>