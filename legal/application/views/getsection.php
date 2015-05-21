<?php 
if(isset($data)){
foreach($data as $row){
?>
<option value="<?php echo $row['id'];?>"><?php echo $row['title'];?></option>
<?php }} ?>