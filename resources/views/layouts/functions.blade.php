<script>
    function getActualCredits(){
        var result = $.ajax({
            type:'POST',
            url:" {{ action('BalanceController@ajaxRequestPost') }} ",
            data:{ user_id:1, "_token": "{{ csrf_token() }}" },
            success:function(data){
                    return result.responseJSON.total_credits;     
                }
            });
    }
</script>