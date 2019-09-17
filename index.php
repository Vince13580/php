<?php
function start_page($title)
{
    echo '<!DOCTYPE html> <html lang="fr"> <head><title>' . PHP_EOL . $title . '</title></head><body>' . PHP_EOL;
};
?>
<?php
function end_page()
{
echo '<body><hr/><br/><strong>Test</strong><br/><hr/></body>' . PHP_EOL;
};
?>
<?php
start_page('test');
end_page();
?>


<body>
</body>
</html>



