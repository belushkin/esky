esky
====

Test task for esky.pl

### Requirements:
Data is provided in 3 sources 
- json file,
- xml file,
- php file,

### Appliaction should enable 
- filtering data
- showing data with current filters and sort order

### Filters that You should implement:
- data source ("php", "json", "xml")
- group ("europe", "world", "all")
- filtering by selected field:
 * field to filter ("price", "code", "name")
 * filter type (">", "<", "ilike")
 * filter value
- sort by ("price", "code", "name", "unsorted")
- sort order (ascending, descending)

Data source filter is required (if user not choose data source – error/exception should be handled)

Other filters and sort are optional.

### Basic script usage:
```php
// Load the source: php, json, xml
$ php index.php -s php
$ php index.php -s json
$ php index.php -s xml

// Group By country: europe, world, all
$ php index.php -sphp -geurope
$ php index.php -sphp -gworld
$ php index.php -sphp -gall

// Filter by selected field
$ php index.php -sphp -f'name = rupia indyjska'
$ php index.php -sphp -gworld -f'name =rupia indyjska'
$ php index.php -sphp -geurope -f'code=PLN'
$ php index.php -sphp -f'price > 1'

// Sort By: price, code, name
$ php index.php -sphp -f'price > 1' -iprice -dASC
$ php index.php -sphp -f'price > 1' -iprice -ddesc
$ php index.php -sxml -gworld -f'price > 0.2' -iprice -ddesc

// Run tests:
// $ vendor/bin/phpunit -c tests/phpunit.xml tests/
```
