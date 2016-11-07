@if(Session::has('message.success'))
<script>
    toastr["success"]("Sucesso ", "{{Session::get('message.success')}}");
</script>
@endif
@if(Session::has('message.error'))
<script>
    toastr["error"]("Erro ", "{{Session::get('message.error')}}"");
</script>
@endif