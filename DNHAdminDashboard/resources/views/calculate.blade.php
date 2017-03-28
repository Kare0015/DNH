@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>De Nieuwlandse Haven</h1>
@stop

@section('content')

    <!DOCTYPE html>
<html>
<body>
<script language="javascript">
    function multiply(){
        var ans= (document.form.one.value)*15;
        document.form.berekenen.value=ans;
    }
    if (document.form.one === parseInt(data, 10)){
            alert("Number is integer")
    }
    else  {
            alert("Number is not a integer")
    }
</script>
<form name="form">
    <input type="text" name="one" size="2">
    <input type="button" value="berekenen" name="now" onClick="multiply()">
    <input type="text" name="berekenen" size="2">
</form>
</body>

</html>
@stop