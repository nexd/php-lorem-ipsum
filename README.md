php-lorem-ipsum
===============

Creates random fake text for testing using Lorem Ipsum

Installation
===============
To install add the following to your `composer.json`:
```
"require": {
	"isuttell/php-lorem-ipsum" : "@dev"
},
"repositories": [
	{
		"type": "vcs",
		"url" : "git@github.com:isuttell/php-lorem-ipsum.git"
	}
]
```

and then run `composer install`


Documentation
===============
The following example creates three random paragraphs

```
use \Lorem\Ipsum;

echo Ipsum::paragraphs(3);

```

## Available Methods

* `Ipsum::paragraphs($count = 5);`
* `Ipsum::sentences($count = 5);
* `Ipsum::words($count = 5);`
* `Ipsum::title($count = 5);`