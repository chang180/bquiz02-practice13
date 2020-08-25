<fieldset>
<form action="api/que.php" method="post">
<legend>新增問卷</legend>
問卷名稱<input type="text" name="que"><br id="more">
選項<input type="text" name="opt[]"><button type="button" onclick="moreOpt()">更多</button><br>
<button>新增</button>|<button type="reset">清空</button>
</form>
</fieldset>
<script>
    function moreOpt(){
        let el=`選項<input type="text" name="opt[]"><br>`;
    $("#more").after(el);
    }
</script>