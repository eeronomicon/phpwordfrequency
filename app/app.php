<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RepeatCounter.php";

    $app = new Silex\Application();
    $app['debug'] = true;
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render("start.html.twig");
    });

    $app->post("/frequency", function() use ($app) {
        $input1 = $_POST['word_to_match'];
        $input2 = $_POST['match_here'];
        $newRepeatCounter = new RepeatCounter;
        $word_count = $newRepeatCounter->CountRepeats($input1, $input2);
        return $app['twig']->render("finish.html.twig", array('word_to_match'=>$input1,'match_here'=>$input2,'word_count'=>$word_count));
    });

    return $app;
?>
