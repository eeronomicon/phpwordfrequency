<?php
    class RepeatCounter
    {
        function removePunctuations($input)
        {
          $punctuations = array('\'','"','(','[','{',',','.','?',')',']','}','!');
          if (in_array(substr($input, 0, 1), $punctuations)) {
              $input = substr($input, 1);
          }
          if (in_array(substr($input, strlen($input) - 1), $punctuations)) {
              $input = substr($input, 0, strlen($input) - 1);
          }
              return $input;
        }

        function wordMatch($input1, $input2)
        {
            if (strtolower($input1) == strtolower($this->removePunctuations($input2))) {
                return true;
            } else {
                return false;
            }
        }

    }
?>
