
<?php
    require_once "src/Src.php";

    class SrcTest extends PHPUnit_Framework_TestCase
    //run test in terminal: ./vendor/bin/phpunit tests
    //on Mac: run: export PATH=$PATH:./vendor/bin
    //then run phpunit tests

    {

      function test_score_letter_1 ()
      {
        $test_onepoint_letters = new Game;
        $input_array = array('a','e','i','o','u','l','n','r','s','t');
        $expected_result = [1,1,1,1,1,1,1,1,1,1];
        $result_array = array();
        foreach ($input_array as $letter) {
            $result = $test_onepoint_letters->scoreLetter($letter);
            array_push($result_array, $result);
        }
        $this->assertEquals($result_array, $expected_result);
      }

      function test_word_score()
      {
        $test_wordscore = new Game;
        $input = 'dog';
        $result = $test_wordscore->scoreWord($input);
        $this->assertEquals(5, $result);
      }

   }
 ?>
