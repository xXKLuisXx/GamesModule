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

    function setNewCredits(update_credits, game_id){
        var result = $.ajax({
            type:'POST',
            url:" {{ action('BalanceController@ajaxRequestInsert') }} ",
            data:{ game_id:game_id, "_token": "{{ csrf_token() }}", update_credits:update_credits },
            success:function(data){
                    console.log(data.success)
                }
            });
    }

    function setNewCreditsView(credits){
        var credits_div = document.getElementById("goicoin_div");
        var goicoin_credits = 0
        var mx_credits = 0
        credits_div.innerText = credits;
    }
</script>