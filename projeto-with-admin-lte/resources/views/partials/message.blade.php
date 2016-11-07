@if(Session::has('message.success'))
<script>
    toastr["success"]("{!!Session::get('message.success')!!}", "Sucesso ");
</script>
@endif
@if(Session::has('message.error'))
<script>
    toastr["error"]("{{Session::get('message.error')}}", "Erro ");
</script>
@endif