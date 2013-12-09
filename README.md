php-lorem-ipsum
===============

Creates random fake text for testing using Lorem Ipsum

Installation
---------------
To install add the following to your `composer.json`:
```
"require": {
	"isuttell/php-lorem-ipsum" : "dev-master"
},
"repositories": [
	{
		"type": "vcs",
		"url" : "https://github.com/isuttell/php-lorem-ipsum.git"
	}
]
```

And then run `composer update`


Documentation
---------------
The following example creates five random paragraphs

```
use \Lorem\Ipsum;
echo Ipsum::paragraphs();
```

## Available Methods

`Ipsum::paragraphs($count = 5);`

`Ipsum::sentences($count = 5);`

`Ipsum::words($count = 5);`

`Ipsum::title($count = 5);`
