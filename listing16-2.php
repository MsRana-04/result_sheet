<?php    if (isset($_POST['submit'])) {        // Concatenate the IP form components and convert to IPv4 format        
	$ip = implode('.', $_POST['ip']);        
	$ip = ip2long($ip);
        //  Concatenate the netmask form components and convert to IPv4 format        
	$netmask = implode('.', $_POST['sm']);
	$netmask = ip2long($netmask);
        // Calculate the network address        
    $na = ($ip & $netmask);        // Calculate the broadcast address        
    $ba = $na | (~$netmask);        // Number of hosts        
    $h = ip2long(long2ip($ba)) - ip2long(long2ip($na));
        //  Convert the addresses back to the dot-format representation and display        
    echo "Addressing Information: <br />";        
    echo "<ul>";        
    echo "<li>IP Address: ". long2ip($ip)."</li>";        
    echo "<li>Subnet Mask: ". long2ip($netmask)."</li>";        
    echo "<li>Network Address: ". long2ip($na)."</li>";        
    echo "<li>Broadcast Address: ". long2ip($ba)."</li>";        
    echo "<li>Total Available Hosts: ".($h - 1)."</li>";        
    echo "<li>Host Range: ". long2ip($na + 1)."-".long2ip($ba - 1)."</li>";      
	echo "</ul>";    } ?>