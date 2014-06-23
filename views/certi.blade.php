<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
		    <style>
	    	body{
	    		width: 148mm;
						font-family:Tahoma,arabic;
						font-size: 12px;
						position: absolute;
								top: 0;
								left: 0;
					}
							.dr{
								width: 70mm;
								margin-left: 15px;
								margin-top: 10px;
								text-align: center;
								line-height: 1;
							}
							.dr img{
								margin-bottom: -30px;
							}
							.set{
								width: 70mm;
								position: absolute;
								top: 70;
								right: 0;
								text-align: center;
								line-height: 0.5;
							}
							.addres{
								position: absolute;
								width: 100%;
								bottom: -30;
								left: 0;
								border-top: 0.5px solid #000;
								text-align: center;
							}
							.dwa{
								margin-left: 100px;
							}
							.dwa span{
										text-transform: uppercase;
										font-weight: bold;
							}
							.centerme{
								text-align: center;
							}
							.boite{
										position: absolute;
										right: 40;
								margin-left: 100px;
							}
							.soul{
										text-decoration: underline;
							}
							h2{
								text-align:center;
							}
        </style>
				<h2>{{Auth::user()->spe}}</h2>
<div class="dr" style="font-family:Arial">

<!-- 			<h1>الحكيم شنيقة هواري</h1>
<h4>طبيب مختص في جراحة العظام و المفاصل</h4> -->
<h2>Dr R.{{Auth::user()->username}}</h2>
<h3>Chirurgien Cardiaque</h3>
<h4>Mob : {{Auth::user()->tel}} <br>
Fax : {{Auth::user()->fax}}</h4>

		</div>
		<div class="set">
			Bechar Le {{date('d/m/Y')}}
			<br><h3>Nom :<small>{{$client->firstname}}</small></h3>
			<h3>Prénom : <small>{{$client->name}}</small></h3>
			<h4>Age : {{$client->age}} ans</h4>
		</div>
		<h3 class="centerme"><span class="soul">Certaficat Medical</span></h3>
		<br><br>

		<div class="dwa">
					Je soussigné Docteur R {{Auth::user()->username}} <br>
					Chirugien Cardiaque, certifie Mr/Mme Melle {{$client->name}} {{$client->firstname}} <br>
					<P><input type="radio" name="some_name" value="">Est atteint(e) de maladie Cardio-Vasculaire</P>
					.................................................................................................... <br>
					.................................................................................................... <br>
					.................................................................................................... <br>
					Chronique,nécessite un traitement médical permanent et définitif	 <br>
					<input type="checkbox" name="some_name" value="">Est apte ou inapte à l'activé Sportive
		</div>
		<div class="addres">
			<strong>{{Auth::user()->add}} <br> {{Auth::user()->email}} </strong>
		</div>
</body>
</html>
