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

`Ipsum::email($count = 1);`

## CLI app

You can generate random Lorem Ipsum text from command line outside web server context using CLI script find into `bin/lorem`.

An help is available by calling `bin/lorem --help`. But it is easy to use it, for example, getting 5 paragraphs is `bin/lorem --paragraph=5` or `bin/lorem -p=5`.

Here is the full CLI app help:

```
Usage: lorem [OPTIONS]…
Generate random Lorem Ipsum texts as paragraphs, sentences, words, title or
email.
  -p, --paragraph[=N]        Generates N paragraphs.
  -s, --sentence[=N]         Generates N sentences.
  -w, --word[=N]             Generates N words.
  -t, --title[=N]            Generates title having N words.
  -e, --email[=N]            Generates N comma separated emails.


  -h, --help                 Display this help message and exit
      --version              Display version information and exit
```
