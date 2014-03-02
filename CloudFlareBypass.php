<?php 
    $lookupArr = array("Direct.", "Direct-Connect.", "Cpanel.", "Mail.", "Host.", "Admin.", "Services.", "Ssl.", "Cloud."); 
    $found = array(); 
    if(isset($_GET["url"]) && $_GET["url"] != ""){ 
        if(!preg_match("/^()$/i",$_GET["url"])){ 
            if(substr($_GET["url"],0,4) == "www."){ 
                echo "Do not include www."; 
            } else { 
                if(preg_match("/\.(com|info|net|in|co|us|org|me|ca|biz|mobi|eu|de|tv|cc|cm|nu|ws|asia|co\.uk|org??\.uk|me\.uk|co\.cc|cz\.cc|mp|uni\.cc)$/i",$_GET["url"])){ 
                    foreach($lookupArr as $lookupKey){ 
                        $lookupHost = $lookupKey . $_GET['url']; 
                        $foundHost = gethostbyname($lookupHost); 
                        if($foundHost != $lookupHost){ 
                            $found[$lookupKey] = $foundHost; 
                        } else { 
                            $found[$lookupKey] = "IP Not Found"; 
                        } 
                    } 
                    foreach($found as $key=>$val){ 
                        echo substr($key,0,strlen($key)-1)."|"; 
                        if($val == "None"){ 
                            echo "None<br />"; 
                        } else { 
                            echo "{$val}<br />"; 
                        } 
                    } 
                } else { 
                    echo "None"; 
                } 
            } 
        } else { 
            echo "None"; 
        } 
    } 
?>
