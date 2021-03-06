<?php
    class RepeatCounter
    {
        function RemovePunctuations($input)
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

        function WordMatch($input1, $input2)
        {
            if (strtolower($input1) == strtolower($this->RemovePunctuations($input2))) {
                return true;
            } else {
                return false;
            }
        }

        function CountRepeats($input1, $input2)
        {
            $input_array = explode(" ", $input2);
            $output_array = array();
            foreach ($input_array as $word)
            {
                if ($this->WordMatch($input1, $word)) {
                    array_push($output_array, $word);
                }
            }
            return count($output_array);
        }

    }
?>
