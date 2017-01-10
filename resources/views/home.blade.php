@extends('app')

@section('content')
<h1>Welcome Home!</h1>
@stop

@section('scripts')

<script type="text/javascript">
    $(document).ready(function(){
        alert('{{$first}} {{$last}}');
    });
</script>

@stop
