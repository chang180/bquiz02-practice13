請輸入信箱以查詢密碼<br>
<input type="text" name="email" id="email"><br>
<div id="res"></div><br>
<button id="find">尋找</button>
<script>
    $("#find").on("click",function(){
        $.post("api/chk_email.php",{"email":$("#email").val()},function(res){
            $("#res").text(res);
        })
    })
</script>