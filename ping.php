
    <?php

    // function pingAddress(){
    // 	$pingresult = exec("ping -n 3 facebook.com", $outcome, $status);
    // 	echo "<pre>";
    // 	var_dump($outcome);

    
   // pingAddress();

    // $target="localhost";
    // $pingresult=system("nmap{$target}");
    // echo "<pre>";
    // var_dump($pingresult);
?>

<form action="listing16-2.php" method="post"> <p> IP Address:<br /> 
<input type="text" name="ip[]" size="3" maxlength="3" value="" />. 
<input type="text" name="ip[]" size="3" maxlength="3" value="" />. 
<input type="text" name="ip[]" size="3" maxlength="3" value="" />. 
<input type="text" name="ip[]" size="3" maxlength="3" value="" /> </p>
<p> Subnet Mask:<br /> 
<input type="text" name="sm[]" size="3" maxlength="3" value="" />. 
<input type="text" name="sm[]" size="3" maxlength="3" value="" />. 
<input type="text" name="sm[]" size="3" maxlength="3" value="" />. 
<input type="text" name="sm[]" size="3" maxlength="3" value="" /> </p>
<input type="submit" name="submit" value="Calculate" />
</form>