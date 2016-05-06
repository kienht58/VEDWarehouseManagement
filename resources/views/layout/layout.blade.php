<!DOCTYPE html>
<html lang="en">
	<head>
		 <meta charset="utf-8">
		 <link href="{{URL::asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
	
		 <link  href="{{URL::asset('assets/css/site.min.css')}}" rel="stylesheet">
		 <linkhref="{{URL::asset('assets/css/site.css')}}" rel="stylesheet">
		 <link  href="{{URL::asset('assets/css/custom1.css')}}" rel="stylesheet">
		 <link href='https://fonts.googleapis.com/css?family=Passion+One&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Roboto+Mono:500&subset=latin,vietnamese' rel='stylesheet' type='text/css'>
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Itim&subset=latin,vietnamese' rel='stylesheet' type='text/css'>
		 <link href="{{URL::asset('assets/css/table-panel.css')}}" rel="stylesheet">
		 <script type="text/javascript"  src="{{URL::asset('assets/js/jquery-1.10.1.min.js')}}" ></script>
		 <script  type="text/javascript" src="{{URL::asset('assets/js/respond.min.js')}}" ></script>
		 <script  type="text/javascript"  src="{{URL::asset('assets/js/site.min.js')}}"></script>
		 <script  type="text/javascript"  src="{{URL::asset('assets/js/html5shiv.js')}}"></script>
		 <script type="text/javascript" src="{{URL::asset('assets/js/application.js')}}"></script>
		 <script type="text/javascript" src="{{URL::asset('assets/js/script.js')}}"></script>
		<title> Index</title>
		@yield('title')
	</head>
	<body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
         	   <span class="navbar-brand"  id="navbar-font">
	            Warehouse System Management
	          </span>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#" id="tble-content">Home</a></li>
            <li><a href="#about" id="tble-content">Inventory</a></li>
            <li><a href="#contact" id="tble-content">Providers</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" id="tble-content">Request <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#" id="tble-content">Import</a></li>
                <li><a href="#" id="tble-content">Export</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../navbar-static-top/" >Mei Ling</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
       <div style="padding-top: 50px">
    @yield('content')
    </div>

	</body>
</html>