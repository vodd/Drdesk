@extends('layouts.main')

@section('content')
		
      <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                  <h2 class="sub-header">{{$client->name }} {{$client->firstname}} </h2>
                        </div>
                        <table class="table table-hover">
                        	<tbody>
                        	<tr>
                        		<th>Nom du medicament</th>
                        		<th>Application</th>
                        		<th>boite</th>
                        		<th>Suppression</th>
                        	</tr>
                        	@foreach($list as $k)

                        	<tr>
                        		
									<td>{{$k->name}}</td>
									<td>{{$k->applic}}</td>
									<td>{{$k->bt}}</td>
									<td><a href="../../medicdel/{{$post->id}}/{{$k->id}}"><span class="glyphicon glyphicon-remove"></span></a></td>
                        	</tr>
                        									@endforeach
                        	</tbody>
                        </table>
                    
                    </div>
                        <a href="../../printma/{{$post->id}}/{{$client->id}}" class="btn btn-primary">Imprimer l'ordonnanace</a>
                        {{HTML::link('rapport/'.$client->id,'Rapport Medical',array('class'=>'btn btn-primary'))}}
                        {{HTML::link('rapport/'.$client->id,'Certaficat medical',array('class'=>'btn btn-primary'))}}
                    </div>

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
										<a href="../../medic/{{$id}}/%%t.id%%">%%t.name%%</a>
									</div>


							</div>
                              
                            </div>
                            <!-- /.list-group -->
							
                        </div>
                        <!-- /.panel-body -->
                    </div>
            			
		</div></div>
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

	