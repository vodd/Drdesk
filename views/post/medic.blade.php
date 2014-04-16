@extends('layouts.main')

@section('content')
      <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                  <h2 class="sub-header">{{$client->name }} {{$client->firstname}} </h2>
 
			{{Form::open(array('url'=>'post/save'))}}
				{{Form::hidden('client_id',$client->id)}}
				{{Form::input('date','date')}}
				{{Form::submit('OK')}}
			{{Form::close()}}
	
                        </div>
                        <!-- /.panel-heading -->

                        <!-- /.panel-body -->
                    </div></div>
	                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bell fa-fw"></i> Liste des medicaments
                        </div>
                         {{HTML::link('post/add/'.$client->id,'Ajouter des medicaments',array('class'=>'btn btn-default btn-block'))}}
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="list-group">
                                <div ng-app='app' class="container">
							<form action="#">
								<input type="text" ng-model="zztop">
							</form>
							<div ng-controller="searchCtrl">
								<div ng-repeat="t in resutla | filter:zztop">
									<a href="../medic/%%t.id%% ">%%t.name%% </a>
								</div>
							</div>
                              
                            </div>
                            <!-- /.list-group -->

                        </div>
                        <!-- /.panel-body -->
                    </div>
	<script type="text/javascript">
	var app = angular.module('app', []);
		app.config(function($interpolateProvider) {
		  $interpolateProvider.startSymbol('%%');
		  $interpolateProvider.endSymbol('%%');
		});
		app.controller('searchCtrl',function ($scope){
			$scope.resutla = <?php echo $med ?>;
		});
	</script>
@stop

	