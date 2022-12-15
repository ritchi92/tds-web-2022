<?php
$content=file_get_contents('test.yaml');
$yamlContent=yaml_parse($content);
echo '<pre>'.print_r($yamlContent,true).'</pre>';