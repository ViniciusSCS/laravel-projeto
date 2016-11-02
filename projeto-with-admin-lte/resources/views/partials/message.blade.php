@if(Session::has('message.success'))
<div class="alert alert-success">
    <strong>Sucesso!</strong> {{Session::get('message.success')}}
</div>
@endif
@if(Session::has('message.error'))
<div class="alert alert-danger">
    <strong>Erro!</strong> {{Session::get('message.error')}}
</div>
@endif