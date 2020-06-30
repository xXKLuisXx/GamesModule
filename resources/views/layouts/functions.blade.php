<script>
    function getActualCredits(){
        return new Promise(function(resolve, reject) {
            var result = $.ajax({
            type:'POST',
            url:" {{ action('BalanceController@ajaxRequestPost') }} ",
            data:{ user_id:1, "_token": "{{ csrf_token() }}" },
            success:function(data){
                    resolve(data.total_credits)
                }
            });  
        })
    }
</script>