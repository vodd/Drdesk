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
            	top: 60;
            	right: 0;
            	text-align: center;
            	line-height: 0.5;
            }
            .addres{
            	position: absolute;
            	width: 100%;
            	bottom: 0;
            	left: 0;
            	border-top: 0.5px solid #000;
            	text-align: center;
            }
            .dwa{
            	margin-left: 40px;
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
        </style>
        <div class="dr" style="font-family:Arial">
<!-- 			<h1>الحكيم شنيقة هواري</h1>
			<h4>طبيب مختص في جراحة العظام و المفاصل</h4> -->
			<img src="img/title.png" alt="">
			<h2>Dr. CHENIKA Houari</h2>
			<h4>MEDECIN SPECIALISTE</h4>
			<p>
			En chirurigie orthopédique & traumatologie <br>
			Maladies des Os et des Artuculations <br>
			LES URGENCES TRAUMATOLOGIE <br>
			TRAUMATOLOGIE du sport <br>	
			<strong>Tel. : 041 35 26 79 - Mob. : 0661 477 031</strong>
			</p>
		</div> 
		<div class="set">
			
			<br><h3>Nom :<small>{{$client->firstname}}</small></h3>
			<h3>Prénom : <small>{{$client->name}}</small></h3>
			<h4>Age : {{$client->age}} ans</h4>	
		</div>
		<h3 class="centerme"><span class="soul">Certaficat Medical</span></h3>
		<br><br>
		
		<div class="dwa">

		</div>
		<div class="addres">
			<strong>Cité Lauriers Rose Bt. C3 R.D.C. N°02 Maraval ORAN</strong>
		</div>
</body>
</html>

