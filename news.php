<?php
include('others/simple_html_dom.php');
$html = file_get_html('https://www.ndtv.com/search?searchtext=ev');

$root =  $html->find('div.SrchLstPg_ul',0);
$result =  $root->find('li.SrchLstPg-a-li',0);

foreach($result->find('a') as $element)
    echo '<li>' . $element . '</li>';
?>