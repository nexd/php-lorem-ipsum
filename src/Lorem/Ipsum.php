<?php
/*
Copyright (c) 2013 Isaac Suttell

Permission is hereby granted, free of charge, to any person obtaining
a copy of this software and associated documentation files (the
"Software"), to deal in the Software without restriction, including
without limitation the rights to use, copy, modify, merge, publish,
distribute, sublicense, and/or sell copies of the Software, and to
permit persons to whom the Software is furnished to do so, subject to
the following conditions:

The above copyright notice and this permission notice shall be
included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE
LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION
WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */
namespace Lorem;
/**
 * Fake Text Generator
 */
class Ipsum {
	/**
	 * Array of words to randomly pull from
	 * @var array
	 */
	private static $words = array("a", "ac", "accumsan", "adipiscing", "aenean", "aliquam", "aliquet", "amet", "ante", "arcu", "at", "auctor", "augue", "bibendum", "blandit", "commodo", "condimentum", "congue", "consectetur", "consequat", "convallis", "cras", "cubilia", "curabitur", "curae", "cursus", "dapibus", "diam", "dictum", "dignissim", "dolor", "donec", "dui", "duis", "egestas", "eget", "eleifend", "elementum", "elit", "enim", "erat", "eros", "est", "et", "etiam", "eu", "euismod", "facilisis", "fames", "faucibus", "felis", "fermentum", "feugiat", "fringilla", "fusce", "gravida", "habitant", "hendrerit", "I", "iaculis", "id", "imperdiet", "in", "integer", "interdum", "ipsum", "justo", "lacinia", "lacus", "laoreet", "lectus", "leo", "libero", "ligula", "lobortis", "lorem", "luctus", "maecenas", "magna", "malesuada", "massa", "mattis", "mauris", "metus", "mi", "molestie", "mollis", "morbi", "nam", "nec", "neque", "netus", "nibh", "nisi", "nisl", "non", "nulla", "nullam", "nunc", "odio", "orci", "ornare", "pellentesque", "pharetra", "phasellus", "placerat", "porta", "porttitor", "posuere", "potenti", "praesent", "pretium", "primis", "proin", "pulvinar", "purus", "quam", "quis", "quisque", "rhoncus", "risus", "rutrum", "sagittis", "sapien", "scelerisque", "sed", "sem", "semper", "senectus", "sit", "sodales", "sollicitudin", "suscipit", "suspendisse", "tellus", "tempor", "tempus", "tincidunt", "tortor", "tristique", "turpis", "ullamcorper", "ultrices", "ultricies", "urna", "ut", "varius", "vehicula", "vel", "velit", "venenatis", "vestibulum", "vitae", "vivamus", "viverra", "volutpat", "vulputate");


	/**
	 * Generates by default by random parahraphs
	 * @param  integer $count the number of paragraphs to create
	 * @return string
	 */
	public static function paragraphs($count = 5)
	{
        $arr = array();

        for($i = 0; $i < $count; $i++ )
        {
			$paragraph = static::sentences(mt_rand(2, 8));
			$arr[] = trim($paragraph);
        }

		return trim(implode(PHP_EOL.PHP_EOL, $arr));
	}

	/**
	 * Create by default five sentices
	 * @param  integer $count the number of sentences to create
	 * @return string
	 */
	public static function sentences($count = 5)
	{
		$sentences = '';
		for($i = 0; $i < $count; $i++ ) {

			//Randomly add commas to the sentence in logical places
			$rand = mt_rand(0, 3);
			if($rand === 0){
				$sentence = static::words(mt_rand(3, 8));
				$sentence .= ', ';
				$sentence .= static::words(mt_rand(4, 12));
			} elseif($rand === 1){
				$sentence = static::words(mt_rand(2, 4));
				$sentence .= ', ';
				$sentence .= static::words(mt_rand(3, 4));
				$sentence .= ', ';
				$sentence .= static::words(mt_rand(3, 8));
			} else {
				$sentence = static::words(mt_rand(5, 20));
			}

			//Capitlize the first word
			$sentences .= ucfirst(trim($sentence));

			//Ocassionally use a semi-colon
			switch(mt_rand(0, 10)){
				case 0:
					$sentences .= '; ';
					break;
				default:
					$sentences .= '. ';
			}
		}
		$sentences = trim($sentences);

		//Make sure a semicolon is the last character
		if(substr($sentences, -1) === ';') $sentences = substr($sentences, 0, -1) . '.';

		return $sentences;
	}

	/**
	 * Generate by default 5 random words
	 * @param  integer $count the number of words to create
	 * @return string
	 */
	public static function words($count = 5)
	{
		$words = '';
		for($i = 0; $i < $count; $i++ ) {
			$words .= static::$words[mt_rand(0, count(static::$words)-1)] . ' ';
		}
		return trim($words);
	}

	/**
	 * Generate by default five capitilized words
	 * @param  integer $count the number of words to create
	 * @return string
	 */
	public static function title($count = 5)
	{
		$words = static::words($count);
		return ucwords($words);
	}

	/**
	 * Generates fake email addresses
	 * @param  integer $count the number of emails to create
	 * @return mixed string if only one, array of strings if more than one.
	 */
	public static function email($count = 1)
    {
        $arr = array();

        for($i = 0; $i < $count; $i++ )
        {
            $endings = array('com', 'net', 'org', 'co.uk');
            if(mt_rand(0, 5) === 0)
            {
                $email = static::words(1);
                if(mt_rand(0,2)=== 0)
                {
                    $email .= '+';
                }
                else
                {
                    $email .= '.';
                }
                $email .= static::words(1);
            }
            else
            {
                $email = str_replace(" ", "", static::words(mt_rand(1,2)));
            }
            $email .= '@';
            if(mt_rand(0, 3) === 0)
            {
                $email .= str_replace(" ", "-", static::words(2));
            }
            else
            {
                $email .= str_replace(" ", "", static::words(mt_rand(1,2)));
            }
            $email .= '.' . $endings[mt_rand(0, 3)];
            $arr[] = $email;
        }

        return count($arr) > 1 ? $arr : array_pop($arr);
    }
}
