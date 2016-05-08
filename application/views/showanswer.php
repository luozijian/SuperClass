

<?php foreach ($studata as $subject): ?>
    <img src=../../uploads/<?php echo $subject['img_url']; ?>>
    <h3><?php echo $subject['subject']; ?></h3>
    <h3><?php echo $subject['question']; ?></h3>
    <h3><?php echo $subject['point']; ?></h3>
    <h3>我的给分<?php echo $subject['sScore']; ?></h3>
    <h3>老师的给分<?php echo $subject['tScore']; ?></h3>
    <h3>给分理由<?php echo $subject['reason']; ?></h3>

    <br><br>
<?php endforeach; ?>