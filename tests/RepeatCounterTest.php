
<?php
    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase

    {

      function test_word_match()
      {
        $test_RepeatCounter = new RepeatCounter;
        $input1 = 'hello';
        $input2 = 'hello';
        $result = $test_RepeatCounter->wordMatch($input1, $input2);
        $this->assertEquals(true, $result);
      }

      function test_word_non_match()
      {
        $test_RepeatCounter = new RepeatCounter;
        $input1 = 'hello';
        $input2 = 'goodbye';
        $result = $test_RepeatCounter->wordMatch($input1, $input2);
        $this->assertEquals(false, $result);
      }

      function test_word_full_only()
      {
        $test_RepeatCounter = new RepeatCounter;
        $input1 = 'bread';
        $input2 = 'cornbreads';
        $result = $test_RepeatCounter->wordMatch($input1, $input2);
        $this->assertEquals(false, $result);
      }

      function test_word_case_insensitivity()
      {
        $test_RepeatCounter = new RepeatCounter;
        $input1 = 'HellO';
        $input2 = 'hELlO';
        $result = $test_RepeatCounter->wordMatch($input1, $input2);
        $this->assertEquals(false, $result);
      }
      // function test_score_letter_1 ()
      // {
      //   $test_onepoint_letters = new Game;
      //   $input_array = array('a','e','i','o','u','l','n','r','s','t');
      //   $expected_result = [1,1,1,1,1,1,1,1,1,1];
      //   $result_array = array();
      //   foreach ($input_array as $letter) {
      //       $result = $test_onepoint_letters->scoreLetter($letter);
      //       array_push($result_array, $result);
      //   }
      //   $this->assertEquals($result_array, $expected_result);
      // }


   }
 ?>
