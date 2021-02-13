<?php include('./inc/header.php'); ?>
<?php 
    $app->router->get('/', function(){
         return 'Hello world';
    });
    $app->router->get('/contact', function(){
        return 'Contact';
    });
    $app->run();

?>
<?php include('./inc/footer.php'); ?>


