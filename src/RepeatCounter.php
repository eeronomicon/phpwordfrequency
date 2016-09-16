<?php
    class RepeatCounter
    {

        function wordMatch($input1, $input2)
        {
            $punctuations = array('\'','"','(','[','{');
            if (in_array(substr($input2, 0, 1), $punctuations)) {
                $input2 = substr($input2, 1);
            }
            if (strtolower($input1) == strtolower($input2)) {
                return true;
            } else {
                return false;
            }
        }

    }
?>
