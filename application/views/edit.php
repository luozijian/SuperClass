<?php echo form_open_multipart('teacher_edit/do_upload');?>
<label for="image1">第一大题图片</label>
<input type="file" name="userfile" size="20" />

<br /><br />

<input type="submit" value="上传" />

</form>

<?php echo form_open('teacher_edit/create'); ?>

<label for="subject1">第一大题</label>
<input type="text" name="subject" id="subject1"/>
<br>

<label for="subject1">此处用JS获取图片名称</label>
<input type="text" name="img_url" id="img_url1"/>
<br>

<label for="question1">第一小题</label>
<input type="text" name="question" id="question1"/>
<br>

<label for="point1">得分点一</label>
<input type="text" name="point" id="point1"/>
<br>

<label for="tScore1">分数</label>
<input type="text" name="tScore" id="tScore1" />
<br>

<label for="tScore1">理由</label>
<input type="text" name="reason" id="reason1" />
<br>

<input type="submit" value="提交" />
</form>