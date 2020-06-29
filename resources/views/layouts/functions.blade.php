<script>
    public function getSaldo(){
        var nombre = $('#name').val();
        var nombre = $('#display_name').val();
        var token = '{{csrf_token()}}';// ó $("#token").val() si lo tienes en una etiqueta html.
        var data={nombre:nombre,_token:token};
        $.ajax({
            type: "post",
            url: "{{ route('empresa.store') }}",// ó {{url(/admin/empresa)}} depende a tu peticion se dirigira a el index(get) o tu store(post) de tu controlador 
            data: data,
            success: function (msg) {
                    alert("Se ha realizado el POST con exito "+msg);
            }
        });
    }
</script>