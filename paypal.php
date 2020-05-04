<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="HE76H3J3LUHDU">
<input type="hidden" name ="item_name" value=
 <table>
<!-- <tr><td><input type="hidden" name="on0" value="Cards">Cards</td></tr><tr><td><select name="os0"> -->
  <tr><td><input type="hidden" name="on0" value="<?php echo $pdt_row['name'];?>" name="name"><?php echo $pdt_row['name'];?></td></tr><tr><td><select name="os0">  
    <option value="Small">Small <?php echo $pdt_row['price'];?></option>
    <option value="Large">Large $1.50 USD</option>
</select> </td></tr>
<tr><td><input type="hidden" name="on1" value="Design">Design</td></tr><tr><td><input type="text" name="os1" maxlength="200"></td></tr>
</table> 
<input type="hidden" name="currency_code" value="USD">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form> 
</body>
</html>