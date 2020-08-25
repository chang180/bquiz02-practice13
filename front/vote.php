<form action="api/vote.php" method="post">
    <fieldset>
        <?php $row = $Que->find($_GET['id']); ?>
        <input type="hidden" name="parent" value="<?= $row['id']; ?>">
        <legend><?= $row['text']; ?></legend>
        <h3><?= $row['text']; ?></h3>
        <?php
        $opts = $Que->all(['parent' => $row['id']]);
        foreach ($opts as $o) {
        ?>
            <input type="radio" name="opt" value="<?= $o['id']; ?>"><?= $o['text']; ?><br>
        <?php
        }
        ?>
        <button>我要投票</button>
    </fieldset>
</form>