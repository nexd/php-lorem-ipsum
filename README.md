php-lorem-ipsum
===============

Creates random fake text for testing using Lorem Ipsum

Installation
---------------
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

And then run `composer install`


Documentation
---------------
The following example creates three random paragraphs

```
use \Lorem\Ipsum;
echo Ipsum::paragraphs(3);

```

Results:
```
Augue ipsum potenti pellentesque duis maecenas nunc id tincidunt phasellus aliquet dui felis malesuada. Elit vehicula suscipit et amet, senectus nulla fringilla nullam vehicula a fringilla interdum quis est ultricies tempus. Vivamus ullamcorper dignissim sodales aliquet vestibulum lacinia fusce blandit.

Semper at ante egestas posuere tempor, facilisis ullamcorper duis ligula ornare quisque. Purus netus venenatis congue, volutpat suspendisse ipsum proin, id curabitur leo dictum vestibulum. Sollicitudin volutpat porta, vulputate ornare tempus ac nisi. Gravida tempus, quam feugiat ipsum consequat, luctus malesuada posuere sapien accumsan. Proin praesent lorem justo erat curabitur lectus justo porttitor senectus vitae ante accumsan sem congue iaculis cursus nisl varius non. At ut tempus tempor elementum rutrum vel pretium, dignissim eleifend consectetur pellentesque. Quam nibh est eros, porttitor phasellus id rhoncus condimentum egestas mauris volutpat rhoncus rhoncus.

Scelerisque blandit habitant fermentum tempor integer cubilia fringilla venenatis euismod eleifend tellus. Ornare integer egestas erat, aliquam dignissim justo porta donec. Placerat curae vitae, urna ultrices elementum primis, proin libero eu lobortis elementum mattis.
```

## Available Methods

* `Ipsum::paragraphs($count = 5);`
* `Ipsum::sentences($count = 5);`
* `Ipsum::words($count = 5);`
* `Ipsum::title($count = 5);`