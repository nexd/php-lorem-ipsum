<?php
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

	public static function paragraphs($count = 5)
	{
		$paragraphs = '';
		for($i = 0; $i < $count; $i++ ) {
			$paragraph = static::sentences(mt_rand(2, 8));
			$paragraphs .= trim($paragraph) . PHP_EOL . PHP_EOL;
		}
		return trim($paragraphs);
	}

	public static function sentences($count = 5)
	{
		$sentences = '';
		for($i = 0; $i < $count; $i++ ) {
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
			$sentences .= ucfirst(trim($sentence));
			switch(mt_rand(0, 10)){
				case 0:
					$sentences .= '; ';
					break;
				default:
					$sentences .= '. ';
			}
		}
		$sentences = trim($sentences);
		if(substr($sentences, -1) === ';') $sentences = substr($sentences, 0, -1) . '.';
		return $sentences;
	}

	public static function words($count = 5)
	{
		$words = '';
		for($i = 0; $i < $count; $i++ ) {
			$words .= static::$words[mt_rand(0, count(static::$words)-1)] . ' ';
		}
		return trim($words);
	}

	public static function title($count = 5)
	{
		$words = static::words($count);
		return ucwords($words);
	}
}