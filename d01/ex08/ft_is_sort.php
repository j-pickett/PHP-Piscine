<?php
	function ft_is_sort($str)
	{
		$sort = $str;
        sort($sort, SORT_STRING);
        while($sort)
        {
        if ($sort == $str)
			return (true);
        else
            return (false);
        }
    }
?>