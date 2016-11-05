@if(session()->has('mensaje_texto'))
  <script>
    swal({
      title : "{{ session('mensaje_titulo') }}",
      text :  "{{ session('mensaje_texto') }}",
      type : "{{ session('mensaje_tipo') }}",
      @if(session()->has('mensaje_confirmar'))
        confirmButtonText : "{{ session('mensaje_confirmar') }}",
      @else
        showConfirmButton : false,
        timer : 1800
      @endif


    })
  </script>
@endif