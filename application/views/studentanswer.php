<?php echo form_open('student_answer/answer'); ?>
<?php foreach ($subdata as $subject): ?>
    <img src=../../uploads/<?php echo $subject['img_url']; ?>>
    <h3><?php echo $subject['subject']; ?></h3>
    <h3><?php echo $subject['question']; ?></h3>
    <h3><?php echo $subject['point']; ?></h3>
    <input type="text" name="sScore"/>
    <br><br>
<?php endforeach; ?>
<input type="submit" value="提交" />
</form>