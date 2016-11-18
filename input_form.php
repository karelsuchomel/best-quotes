<?php
if(!isset($_GET["text"])) {
    echo "Text is missing...<br>\n";
    return -1;
}

$path = "do_not_read_this_file.xml"; 

$advice_file = fopen($path, "r");

$xml_input = fread($advice_file,filesize($path));
fclose($advice_file);

try {
    $advices = new SimpleXMLElement($xml_input);
}
catch(Exception $e)
{
    if(!strstr($e->getMessage(), 'XML'))
    {
        throw $e;
    }
    else
    {
        echo "XML parsing problem!<br><br>";
        echo $e;
        return -1;
    }
}

$text = htmlspecialchars($_GET["text"], ENT_XML1 | ENT_COMPAT | ENT_QUOTES, 'UTF-8');
$advices->addChild('advice', $text);

$advice_file = fopen($path, "w");
fwrite($advice_file, $advices->asXML());
fclose($advice_file);

/* Redirect browser */
header("Location: ");
 
/* Make sure that code below does not get executed when we redirect. */
exit;
