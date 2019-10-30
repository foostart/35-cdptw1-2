<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
if (!class_exists('lessc')) {
    $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
    require_once($dir_block . '/libs/lessc.inc.php');
}
$less = new lessc;
$less->compileFile('less/982.less', 'css/982.css');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>982</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo $url_path ?>/css/bootstrap.min.css" media="screen">
    
    <link rel="stylesheet" href="<?php echo $url_path ?>/css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $url_path ?>/css/982.css" media="screen">
    <script src="<?php echo $url_path ?>/js/jquery.min.js"></script>
    <script src="<?php echo $url_path ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo $url_path ?>/js/swiper.min.js"></script>
    <script src="<?php echo $url_path ?>/js/982.js"></script>
</head>
<body>
    <?php include $dir_block . '/982-content.php'; ?>
    <script>
        new Swiper('.swiper-container', {
            spaceBetween: 30,
            pagination: {
        el: '.swiper-pagination',
      },
          navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
</script>
</body>
</html>



