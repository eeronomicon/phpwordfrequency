
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
        $this->assertEquals(true, $result);
      }

      function test_word_non_alpha()
      {
        $test_RepeatCounter = new RepeatCounter;
        $input1 = 'wd-40';
        $input2 = 'WD-40';
        $result = $test_RepeatCounter->wordMatch($input1, $input2);
        $this->assertEquals(true, $result);
      }

      function test_word_leading_punctuation()
      {
        $test_RepeatCounter = new RepeatCounter;
        $input1 = 'hello';
        $input2 = '"Hello';
        $result = $test_RepeatCounter->wordMatch($input1, $input2);
        $this->assertEquals(true, $result);
      }

      function test_word_trailing_punctuation()
      {
        $test_RepeatCounter = new RepeatCounter;
        $input1 = 'hello';
        $input2 = 'Hello?';
        $result = $test_RepeatCounter->wordMatch($input1, $input2);
        $this->assertEquals(true, $result);
      }

      function test_word_count()
      {
        $test_RepeatCounter = new RepeatCounter;
        $input1 = 'the';
        $input2 = 'The room of the percussions contains (The drums and The) Mallets for thee.';
        $result = $test_RepeatCounter->CountRepeats($input1, $input2);
        $this->assertEquals(4, $result);
      }

   }
 ?>
