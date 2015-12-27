# sculpin-wordpress-convertor
A Wordpress to Scuplin Blog Post migrator

## Install

Sculptor is written in PHP, you need to install Composer (https://getcomposer.org/) and run the following in the application folder:

```
 composer install
```

## Usage
```
./bin/sculpt path/to/xml/file.wordpress.2015-07-27.xml ../path/to/your/sculpin/source/_posts/
```

keep in mind that this tool exits if target folder is not empty or does not exist
