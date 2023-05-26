<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Flipbook</title>
		<link rel="stylesheet" href="{{ asset('/css/flipbook/flipbook.css')}}" />
		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
			integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
			crossorigin="anonymous"
			referrerpolicy="no-referrer"
		/>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
	</head>
	<body>
		@yield('flipbookContent')

		<!-- controls -->
		<div id="controls">
			<div class="all">
				<div class="ui-slider" id="page-slider">
					<div class="bar">
						<div class="progress-width">
							<div class="progress">
								<div class="handler"></div>
							</div>
						</div>
					</div>
				</div>

				<div class="ui-options" id="options">
					<a
						class="ui-icon show-hint"
						title="Full Screen"
						id="ui-icon-full-screen"
					>
						<i class="fa fa-expand"></i>
					</a>
				</div>
			</div>
		</div>
		<!-- / controls -->

		<!-- partial -->

		<script src="https://code.jquery.com/jquery-2.0.3.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.9.1/underscore-min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/backbone.js/1.4.0/backbone-min.js"></script>
		<script src="{{asset('/js/flipbook/flipbook.js')}}"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

	</body>
</html>
