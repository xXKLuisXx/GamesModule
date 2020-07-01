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

    function setActualCredits($bet){
        return new Promise(function(resolve, reject) {
            var result = $.ajax({
            type:'POST',
            url:" {{ action('BalanceController@ajaxRequestInsert') }} ",
            data:{ user_id:1, "_token": "{{ csrf_token() }}", bet:$bet },
            success:function(data){
                    resolve(data.success)
                }
            });  
        })
    }

    function setNewCredits($update_credits){
        var result = $.ajax({
            type:'POST',
            url:" {{ action('BalanceController@ajaxRequestInsert') }} ",
            data:{ user_id:1, "_token": "{{ csrf_token() }}", update_credits:$update_credits },
            success:function(data){
                    console.log(data.success)
                }
            });
    }

</script>