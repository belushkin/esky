esky
====

Test task for esky.pl

Requirements:
Data is provided in 3 sources 
- json file,
- xml file,
- php file,

Appliaction should enable 
- filtering data
- showing data with current filters and sort order

Filters that You should implement:
- data source („php”, „json”, „xml’)
- group („europe”, „world’, „all”)
- filtering by selected field:
 -- field to filter („price”, „code”, „name”)
 -- filter type („>”, „<”, „ilike”)
 -- filter value
- sort by („price”, „code”, „name”, „unsorted”)
- sort order (ascending, descending)

Data source filter is required (if user not choose data source – error/exception should be handled)
Other filters and sort are optional.

Basic script usage:

php index.php -s php
php index.php -s json
php index.php -s xml

php index.php -> error
