    <fieldset>
        <?php $row = $Que->find($_GET['id']); ?>
        <input type="hidden" name="parent" value="<?= $row['text']; ?>">
        <legend><?= $row['text']; ?></legend>
        <h3><?= $row['text']; ?></h3>
        <?php
        $total=($row['count']==0)?1:$row['count'];
        $opts = $Que->all(['parent' => $row['id']]);
        
        foreach ($opts as $o) {
            $rate=$o['count']/$total;
        ?>
           <div style="display:flex">
<div style="width:30%"><?=$o['text'];?></div>
<div style="width:<?=round(50*$rate);?>%;background:#ccc;height:20px;"></div>
<div><?=$o['count'];?>票(<?=round(100*$rate);?>%);</div>
           </div>
        <?php
        }
        ?>
        <button onclick="location.href='index.php?do=que'">返回</button>
    </fieldset>