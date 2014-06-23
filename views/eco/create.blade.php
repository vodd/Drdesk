@extends('layouts.main')

@section('content')
<H1>EcoGraphy</H1>
{{Form::open(array('url'=>'eco/store/'.$client->id))}}

  <textarea class="textz" name="text" style="height:300px;">
<h2 style="text-align: center;"><strong>Dr R.KHELOUG -&nbsp;</strong>Chirurgien Cardiaque&nbsp;</h2>
<h3 style="text-align: center;"><em>CABINET MEDICAL DE CHIRURGIE CARDIAQUE &amp; D'EXPLORATION CARDIO-VASCULAIRE</em></h3>
<h3 style="text-align: center;">ECHOCARDIOGRAPHIE TRANSTHORACIQUE</h3>
<hr />
<p><span style="text-decoration: underline;"><strong>Nom et Pr&eacute;nom :</strong></span> {{$client->name}} {{$client->firstname}} &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span style="text-decoration: underline;"><strong>Age</strong></span>: {{$client->age}}&nbsp;ans &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span style="text-decoration: underline;"><strong>Date</strong></span>: {{date('d/m/Y')}}</p>
<p><strong>Motif :</strong></p>
<p><span style="text-decoration: underline;"><strong>AORTE :</strong></span></p>
<p style="padding-left: 30px;">&Oslash;TM&nbsp;= &nbsp; mm &nbsp; &nbsp; Sigmo&iuml;des : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Aorte initial : non dilat&eacute;e</p>
<p style="padding-left: 30px;">EIS = mm &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&Oslash;anneau aortique = &nbsp;mm&nbsp;</p>
<p style="padding-left: 30px;"><span style="text-decoration: underline;">Doppler :</span></p>
<p style="padding-left: 60px;">Gmax = &nbsp;mmhg &nbsp; &nbsp; &nbsp; GMy = &nbsp;mmhg &nbsp; &nbsp; &nbsp; VEL= &nbsp;M/S &nbsp; &nbsp; &nbsp; ITV= &nbsp;Cm</p>
<p style="padding-left: 60px;">pas de fuite ni st&eacute;nose &nbsp; &nbsp; &nbsp; &nbsp;VEL IA = &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; PHT= &nbsp;ms</p>
<p><span style="text-decoration: underline;"><strong>OREILLETTE GAUCHE :</strong></span></p>
<p style="padding-left: 30px;">&Oslash;TM= &nbsp;mm non dilat&eacute;e &nbsp; &nbsp; Vol og = ml &nbsp; &nbsp; &nbsp;OG/AO=</p>
<p style="padding-left: 30px;">Echos intra autriculaire : absents</p>
<p style="padding-left: 30px;">SIA :&nbsp;sans def&eacute;ct</p>
<p><span style="text-decoration: underline;"><strong>VENTRICULE GAUCHE : </strong></span><strong>coudure ao/vg</strong></p>
<p style="padding-left: 30px;">SIV &nbsp;mm &nbsp; &nbsp; PP &nbsp; mm &nbsp; &nbsp; &nbsp; DTD &nbsp;mm &nbsp; &nbsp; &nbsp; DTS &nbsp;mm &nbsp; &nbsp; &nbsp;FE&nbsp;% &nbsp; &nbsp; FR %</p>
<p style="padding-left: 30px;">Pas d'hypertrophie septale</p>
<p style="padding-left: 30px;">Cin&eacute;tique globale : bonne&nbsp;</p>
<p style="padding-left: 30px;">SIV : <strong>fin</strong>&nbsp;sans def&eacute;ct</p>
<p><strong><span style="text-decoration: underline;">APPAREIL MITRAL :</span></strong>&nbsp;</p>
<p style="padding-left: 30px;">valves : fines souple et bien ax&eacute;es</p>
<p style="padding-left: 30px;">Appreil S/valvulaire : non remanie</p>
<p style="padding-left: 30px;">Doppler: E/A = &nbsp; &nbsp; &nbsp; VE = &nbsp;m/s &nbsp; &nbsp; &nbsp;VA = &nbsp;m/s &nbsp; &nbsp; &nbsp; &nbsp; DT= ms &nbsp; &nbsp; &nbsp; &nbsp;DP= ms</p>
<p style="padding-left: 60px;">VEL IM = &nbsp; &nbsp; &nbsp; &nbsp;GMY= &nbsp; mmhg &nbsp; &nbsp;GMAX= m/s &nbsp; &nbsp; PHT= ms &nbsp; &nbsp;SM d = mm&sup2; &nbsp;</p>
<p style="padding-left: 60px;">pas de fuite ni st&eacute;nose &nbsp; &nbsp; &nbsp;E/E'= &nbsp; &Oslash;anneau mitral= &nbsp;mm &nbsp; &nbsp; &nbsp;SMF= &nbsp;Cm&sup2; &nbsp; SMA = &nbsp;Cm&sup2; &nbsp; &nbsp;</p>
<p><span style="text-decoration: underline;"><strong>CAVITES DROITES</strong></span></p>
<p style="padding-left: 30px;">&Oslash;VD = &nbsp;mm &nbsp; &nbsp;&Oslash;OD = &nbsp;mm &nbsp; &nbsp;Anneau tric = mm &nbsp; Vol od =</p>
<p style="padding-left: 30px;">Doppler : ITG1/4 &nbsp; &nbsp;VEL= &nbsp; &nbsp;m/s &nbsp; &nbsp; &nbsp;GMAX= &nbsp; mmhg</p>
<p style="padding-left: 30px;">PAPS</p>
<p style="padding-left: 30px;">Tricusipides : fines</p>
<p style="padding-left: 30px;">Cavit&eacute;s droites : non dilat&eacute;es</p>
<p><strong><span style="text-decoration: underline;">PERICARDE</span> : sec</strong></p>
<p style="text-align: center;"><span style="text-decoration: underline;"><strong>CONCLUSIONS</strong></span></p>
<ul style="list-style-type: square;">
<li><strong>FONCTION SYSTOLIQUE GLOBALE VG : BONNE</strong></li>
<li><strong>PAS D'HYPERTROPHIE&nbsp;</strong></li>
<li><strong>PAS DE DILATATION CAVITAIRE</strong></li>
<li><strong>PRESSIONS DE REMPLISSAGE : NORMALES&nbsp;</strong></li>
<li><strong>PAS D'HTAP</strong></li>
</ul></textarea>
<br><br>
{{Form::submit('Sauvegarder')}}
{{Form::close()}}


{{HTML::script('js/tinymce/jquery.tinymce.min.js')}}
{{HTML::script('js/tinymce/tinymce.min.js')}}
<script type="text/javascript">
tinymce.init({
    selector: "textarea",
    menubar: true,
    plugins: [
                "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak spellchecker",
                "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                "table  directionality emoticons template textcolor paste fullpage textcolor"
        ],
    toolbar: "insertfile undo redo | styleselect | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent ",
    toolbar3: "table | hr removeformat | subscript superscript | charmap emoticons | print fullscreen | ltr rtl | spellchecker | visualchars visualblocks nonbreaking template pagebreak restoredraft"

});
</script>
@stop
