@extends('layouts.main')

@section('content')

{{Form::open(array('url'=>'eco/store/'.$client->id))}}
  <textarea class="textz" name="text" style="height:300px;">
    <p><span style="text-decoration: underline;"><strong>Nom et Prénom : {{$client->name}} {{$client->firstname}}</strong></span></p>
    {{$eco->text}}
</textarea>
{{Form::submit('ok')}}
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
