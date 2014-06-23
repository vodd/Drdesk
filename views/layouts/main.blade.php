<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Razi Beta v24052014</title>

    {{HTML::style('css/bootstrap.min.css')}}
    {{HTML::style('css/font-awesome.css')}}
    {{HTML::style('css/plugins/morris/morris-0.4.3.min.css')}}
    {{HTML::style('css/plugins/timeline/timeline.css')}}
    {{HTML::style('css/sb-admin.css')}}
    {{HTML::style('css/fullcalendar.min.css')}}

    {{HTML::script('js/angular.min.js')}}
    {{HTML::script('js/jquery-1.10.2.js')}}
    {{HTML::script('js/bootstrap.min.js')}}
    {{HTML::script('js/jquery-ui.custom.min.js')}}
    {{HTML::script('js/plugins/metisMenu/jquery.metisMenu.js')}}
    {{HTML::script('js/plugins/morris/raphael-2.1.0.min.js')}}
    {{HTML::script('js/plugins/morris/morris.js')}}
    {{HTML::script('js/sb-admin.js')}}
    {{HTML::script('js/demo/dashboard-demo.js')}}
    {{HTML::script('js/fullcalendar.min.js')}}



</head>

<body>

    <div id="wrapper">

        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Razi <small>Beta v24052014</small></a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li>
                        {{HTML::link('user/'.Auth::user()->id.'/edit','Parametres')}}
                        </li>
                        <li class="divider"></li>
                        <li>{{HTML::link('user/logout','Parametres')}}
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

        </nav>
        <!-- /.navbar-static-top -->

        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div >
                        {{Form::open(array('url'=>'search','class'=>'input-group custom-search-form'))}}


                            <input type="text" class="form-control" placeholder="Recherche..." name="search">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        {{Form::close()}}
                        </div>
                        <!-- /input-group -->
                    </li>
                    <li>
                        {{HTML::link('client/create',' Ajouter un patient',array('class'=>'glyphicon glyphicon-user'))}}
                    </li>
                    <li>
                        {{HTML::link('client',' Liste des patients',array('class'=>'glyphicon glyphicon-user'))}}
                    </li>
<!--                     <li>
    {{HTML::link('post',' Derniere Consultation',array('class'=>'glyphicon glyphicon-calendar'))}}
</li> -->
                    <li>
                        {{HTML::link('product',' Liste des Medicament',array('class'=>'glyphicon glyphicon-list-alt'))}}
                    </li>
                    <li>
                </ul>
                <!-- /#side-menu -->
            </div>
            <!-- /.sidebar-collapse -->
        </nav>
        <!-- /.navbar-static-side -->

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

                          @yield('content')

                    <!-- /.panel -->
                    <div class="panel panel-default">

                        <div class="panel-body">

                        </div>
                        <!-- /.panel-body -->

                    <!-- /.panel -->




    <!-- /#wrapper -->

    <!-- Core Scripts - Include with every page -->



    <script>

	$(document).ready(function() {

		var date = new Date();
		var d = date.getDate();
		var m = date.getMonth();
		var y = date.getFullYear();

		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,basicWeek,basicDay'
			},
			editable: true,
			events: [
				{
					title: 'All Day Event',
					start: new Date(y, m, 1)
				},
				{
					title: 'Long Event',
					start: new Date(y, m, d-5),
					end: new Date(y, m, d-2)
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: new Date(y, m, d-3, 16, 0),
					allDay: false
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: new Date(y, m, d+4, 16, 0),
					allDay: false
				},
				{
					title: 'Meeting',
					start: new Date(y, m, d, 10, 30),
					allDay: false
				},
				{
					title: 'Lunch',
					start: new Date(y, m, d, 12, 0),
					end: new Date(y, m, d, 14, 0),
					allDay: false
				},
				{
					title: 'Birthday Party',
					start: new Date(y, m, d+1, 19, 0),
					end: new Date(y, m, d+1, 22, 30),
					allDay: false
				},
				{
					title: 'Click for Google',
					start: new Date(y, m, 28),
					end: new Date(y, m, 29),
					url: 'http://google.com/'
				}
			]
		});

	});

</script>

</body>

</html>
