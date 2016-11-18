<?php
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

$random_int = rand(0, ($advices->count() - 1));
