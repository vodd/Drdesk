@extends('layouts.main')

@section('content')

<H1>Bilan biologique</H1>
{{Form::open(array('url'=>'result/store/'.$client->id,'class'=>'form-horizontal'))}}
  <div class="row">
    <div class="col-md-6">
      <input type="checkbox" name="result[]" value="<li>FNS-VS-TX de plaquettes</li>"> FNS-VS-TX de plaquettes <br>
      <input type="checkbox" name="result[]" value="<li>Test Hémolyse</li>"> Test Hémolyse <br>
      <input type="checkbox" name="result[]" value="<li>Fer Sérique-Férritinémie- CT fix fer</li>"> Fer Sérique-Férritinémie- CT fix fer <br>
      <input type="checkbox" name="result[]" value="<li>CRP / Latex / W.Rose F Rhumatoide</li>"> CRP / Latex / W.Rose F Rhumatoide <br>
      <input type="checkbox" name="result[]" value="<li>ASLO / Fibrinémie-Anti D-N-A</li>"> ASLO / Fibrinémie-Anti D-N-A <br>
      <input type="checkbox" name="result[]" value="<li>Electrophorèse des Protéines</li>"> Electrophorèse des Protéines <br>
      <input type="checkbox" name="result[]" value="<li>Glycémiea a jeun-HGPO-GPP : 2H</li>"> Glycémiea a jeun-HGPO-GPP : 2H <br>
      <input type="checkbox" name="result[]" value="<li>H b1AC</li>"> H b1AC <br>
      <input type="checkbox" name="result[]" value="<li>Cholesterol Total-HDL-LDL</li>"> Cholesterol Total-HDL-LDL <br>
      <input type="checkbox" name="result[]" value="<li>Triglycérides</li>"> Triglycérides <br>
      <input type="checkbox" name="result[]" value="<li>Créatinine + Clearance (MDRD)</li>"> Créatinine + Clearance (MDRD) <br>
      <input type="checkbox" name="result[]" value="<li>Acide Urique</li>"> Acide Urique <br>
      <input type="checkbox" name="result[]" value="<li>Ionogramme : Na,K,Cl</li>"> Ionogramme : Na,K,Cl <br>
      <input type="checkbox" name="result[]" value="<li>Calcémie sans Garrot + PH + Mg</li>"> Calcémie sans Garrot + PH + Mg<br>
      <input type="checkbox" name="result[]" value="<li>Calciurie 24H / Natriurèse 24H</li>"> Calciurie 24H / Natriurèse 24H<br>
      <input type="checkbox" name="result[]" value="<li>SGOT-SGPT-LDH-CPK-GGT</li>"> SGOT-SGPT-LDH-CPK-GGT<br>
      <input type="checkbox" name="result[]" value="<li>Phosphatases Alcaline</li>"> Phosphatases Alcalines<br>
      <input type="checkbox" name="result[]" value="<li>TP-INR(S/AVK=...........)</li>"> TP-INR(S/AVK=...........)<br>
      <input type="checkbox" name="result[]" value="<li>Bilirubine(T.D. +I.)</li>"> Bilirubine(T.D. +I.)<br>
    </div>
    <div class="col-md-6">
      <input type="checkbox" name="result[]" value="<li>HIV-HA-HB-HC-BW</li>"> HIV-HA-HB-HC-BW<br>
      <input type="checkbox" name="result[]" value="<li>Troponine-CPKMB</li>"> Troponine-CPKMB <br>
      <input type="checkbox" name="result[]" value="<li>PRO BNP-D.Dimeres</li>"> PRO BNP-D.Dimeres <br>
      <input type="checkbox" name="result[]" value="<li>Protidémie-Albuminémie</li>"> Protidémie-Albuminémie <br>
      <input type="checkbox" name="result[]" value="<li>Compte Addis</li>"> Compte Addis <br>
      <input type="checkbox" name="result[]" value="<li>Digoxinèmie</li>"> Digoxinèmie <br>
      <input type="checkbox" name="result[]" value="<li>M A U + P T U des 24H</li>"> M A U + P T U des 24H <br>
      <input type="checkbox" name="result[]" value="<li>E C B des Urines + Antibiogramme</li>"> E C B des Urines + Antibiogramme<br>
      <input type="checkbox" name="result[]" value="<li>Coproparasito</li>"> Coproparasito <br>
      <input type="checkbox" name="result[]" value="<li>PSA : T + L</li>"> PSA : T + L <br>
      <input type="checkbox" name="result[]" value="<li>Hormonologie</li>"> Hormonologie <br>
      <input type="checkbox" name="result[]" value="<li>FT4 - TSHus-anti TPO-anti TG</li>"> FT4 - TSHus-anti TPO-anti TG <br>
      <input type="checkbox" name="result[]" value="<li>Cortisolemie Basale t0</li>"> Cortisolemie Basale t0 <br>
      <input type="checkbox" name="result[]" value="<li>Cortisole s/Synactene 0.25mg a t 60</li>"> Cortisole s/Synactene 0.25mg a t 60<br>
      <input type="checkbox" name="result[]" value="<li>GH : S /HGPO</li>"> GH : S /HGPO<br>
      <input type="checkbox" name="result[]" value="<li>PTH</li>"> PTH<br>
      <input type="checkbox" name="result[]" value="<li>Autre</li>"> Autre<br>
      <input type="checkbox" name="result[]" value="<li>DG</li>"> DG<br>

  </div>

  <br>
{{Form::submit('Enregistré',array('class'=>'btn btn-info'))}}

{{Form::close()}}

</form>



@stop
