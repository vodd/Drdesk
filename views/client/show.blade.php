@extends('layouts.main')


@section('content')
      {{HTML::link('client/'.$client->id.'/edit','Modification des information',array('class'=>'btn btn-default btn-block'))}}

      <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                              <h4>Nom et Prenom : {{$client->name}} {{$client->firstname}} </h4>
      <h4>Age : {{$client->age}} </h4>
      <h4>Adresse : {{$client->address}} </h4>
      <h4>Profession : {{$client->professtion}} </h4>
      <h4>Téléphone : {{$client->tel}} </h4>
      <h4>Sexe : {{$client->sexe}} </h4>
      <h4>Lieu de naissonce : {{$client->lieunais}} </h4>
      <h4>Thare : {{$client->thare}} </h4>
    <!--  <h4>TA : {{$client->TA}} mmh - FC : {{$client->FC}} mh - Poids : {{$client->poids}} kg </h4>
      <h4>ECG : {{$client->ecg}} </h4>
      <h4>SF : {{$client->SF}} </h4>
      <h4>SP : {{$client->SP}} </h4>
      <h4>Soins : {{$client->Soin}} </h4>-->


                        </div>
                                            <div class="panel panel-default">
                        <div class="panel-heading">
      <h4>Diagnostique :</h4>    <p>{{$client->diag}} </p>



</div>
                        </div>

                        <!-- /.panel-heading -->

                        <!-- /.panel-body -->
                    </div>
                    {{HTML::link('result/create/'.$client->id,'Demandé un bilan',array('class'=>'btn btn-primary'))}}
                    {{HTML::link('rapport/'.$client->id,'AVIS',array('class'=>'btn btn-primary'))}}
                    {{HTML::link('certi/'.$client->id,'Certificat medical',array('class'=>'btn btn-primary'))}}
                    {{HTML::link('client/'.$client->id.'/edit','Modification des informations',array('class'=>'btn btn-primary'))}}

                    <!-- /.panel -->


                    <!-- /.panel -->
                </div>

                <!-- /.col-lg-8 -->
                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bell fa-fw"></i> Derniére Consultation
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="list-group">
                            @foreach($orda as $k)

                            <a href="../post/add/{{$k->id}}/{{$client->id}}" class="list-group-item">
                                  <em>{{$k->created_at}}</em>
                             </a>

                            @endforeach

                            </div>
                            <!-- /.list-group -->
                            {{HTML::link('post/save/'.$client->id,'Nouvel visite',array('class'=>'btn btn-default btn-block'))}}
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-bell fa-fw"></i> Derniér Echo
                            </div>
                            <!-- /.panel-heading-->
                            <div class="panel-body">
                                <div class="list-group">
                                @foreach($result as $k)

                                <a href="../eco/{{$k->id}}/{{$client->id}}" class="list-group-item">
                                      <em>{{$k->created_at}}</em>
                                 </a>

                                @endforeach


                                <!-- /.list-group-->
                                </div>
                                {{HTML::link('eco/create/'.$client->id,'Nouvel Eco',array('class'=>'btn btn-default btn-block'))}}

                        <!-- /.panel-body -->
                    </div>


@stop
