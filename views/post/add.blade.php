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
										    <button class="btn btn-default btna" onclick="window.print();"><i class="fa fa-print"></i> Imprimer</button>
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
	<div class="printw">
		<div class="titre">
<h3>GROUPE MEDICO-CHIRURGICAL</h3>
</div>
<div class="row info">
			<div class="col-md-6 left">
		<h5>الحكيم كريش ب. <br>
		Dr. KERRICHE B.</h5>
    <h4>NEURO-CHIRURGIEN</h4>
    <p>- Maladies du système nerveux <br>
          (Tète - Cerveau)<br>
      - Maladies de colonne vertébrale<br>
      - Sciatique <br>
      - Neuro-chirurgie pédiatrique <br>
    </p>
  </div>
  <div class="center">
        Nom : {{$client->name }}  <br>
        Prenom : {{$client->firstname}} <br>
        Age : {{$client->age}}<br>
        Oran Le : {{$post->created_at}}
  </div>
		<div class="col-md-6 rightt">
		<h5>الحكيمة شنتـــوف ز. <br>
      Dr. CHENTOUF Z.</h5>
      <h4>SPECIALISTE O.R.L</h4>
      <p>- Oreille - Nez - Gorge <br>
        - Sinusite - Allergologie <br>
        - Cancérologie
      </p>
		</div>

</div>
<br>
		<div class="container lista">
      <h3>ORDONNANCE</h3>
			<ul class="list-group">
          @foreach($list as $k)
            <span class='dwa'>{{$k->name}}</span>
             <span class="boite">
               @if($k->bt == 1)
               {{$k->bt}} Boite
               @else
               {{$k->bt}} Boites
               @endif
              </span><br>
            {{$k->applic}}<br><br>
          @endforeach
		</ul>
	</div>
</div>
<div id="fotprin">
	03,RUE HO-CHI-MINH <span>Tel/fax: 049 21 23 62</span> <br>
	(Près du cinéma Colisée) Oran <span>  Mob: 0556 06 90 15 </span>
</div>

<style>
	@media print{
    body
        {
            background-color:#FFFFFF;
            margin: 0px;  /* the margin on the content before printing */
       }
    @page
        {
            size: auto;   /* auto is the current printer page size */
            margin: 0mm;  /* this affects the margin in the printer settings */
        }
		.navbar{display:none}
		.printw{display: block;}
		.nav{display:none}
		.row a{display:none}
    .row{

    }
		.titre{
			position:absolute;
			top:0;
			left:0;
		}
		.titre h3{
			font-weight:bold;
      margin-left:190px;
      text-align:center;
		}
    .left{
      width:300px;
      position:absolute;
      top:10px;
      font-size:12px;
      }
		.info{
			position:absolute;
			top:10%;
			left:40px;
		}
		.rightt{
				position:relative;
				top:10px;
				left:480px;
        font-size:12px;
		}
		.rightt h3{
				margin-top:-30px;
			}
    .lista h3{
      text-decoration:underline;
      text-align:center;
    }
    .center{
      position:absolute;
      top:60px;
      left:220px;
      border:1px solid #000;
      padding:10px;
      width:250px;
      text-align:center;
    }
		.lista{
			position:absolute;
			top:50%;
			left:20%;
		}
		#fotprin{
      border-top:1px solid #000;
			position:absolute;
      top:170%;
      width:100%;
		}
    .list-group :first-child{
      font-weight:bold;
    }
    .dwa{
      font-weight:bold;
      width:900px;
    }
    .boite{

    }
		.panel {display:none;}
		.btna{display:none;}
	}
</style>
@stop
