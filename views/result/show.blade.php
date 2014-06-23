@extends('layouts.main')

@section('content')
  <div class="printw">
    <div class="titre">
<h3>GROUPE MEDICO-CHIRURGICAL</h3>
</div>
<div class="row info">
      <div class="col-md-6 lef">
    <h5>Dr Z.{{Auth::user()->username}} <br>
    <small>{{Auth::user()->spe}}</small></h5>
      <p class="lead">Nom : {{$client->name}}</p>
      <p class="lead">Date : {{$results->created_at}}</p>
    </div>
    <div class="col-md-6 rightt">
    <h3>BILAN BIOLOGIQUE</h3> <br>
      <p class="lead">Prenom : {{$client->firstname}}</p>
      <p class="lead">Age : {{$client->age}} ans</p>
    </div>

</div>
<br>
    <div class="container lista">
      <h3>Priere de faire</h3>
      <ul class="list-group">
        {{$results->result}}
     </ul>
   </div>
 </div>
 <div class="fotprin">
  {{Auth::user()->add}} <span>Tel/fax: {{Auth::user()->fax}}</span> <br>
  Email : KHELOUG.ramadane@gmail.com <span>  Mob: {{Auth::user()->tel}} </span>
 </div>

<button class="btn btn-default btna" onclick="window.print();"><i class="fa fa-print"></i> Imprimer</button>
 <style>
   @media print{
     .navbar{display:none}
     .printw{display: block;}
     .nav{display:none}
     .titre{
       position:absolute;
       top:0;
       left:0;
     }
     .titre h5{
       font-weight:bold;

     }
     .info{
       position:absolute;
      top:18%;
      left:40px;
     }
    .rightt{
        position:relative;
        top:-111px;
        left:300px;
     }
     .rightt h3{
        margin-top:-30px;
      }
     .lista{
       position:absolute;
       top:60%;
       left:30%;
     }
     .fotprin{
       position:absolute;
       top:900px;
       left:0;
     }
     .fotprin span{
       margin-left:200px;
     }
     .panel {display:none;}
     .btna{display:none;}
   }
 </style>

@stop
