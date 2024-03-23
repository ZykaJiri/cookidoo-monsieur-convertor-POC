# Convert cookidoo recipes to monsieur
> This project converts the recipes from cookidoo to monsieur cuisine connect and uploads them, with images, to your monsieur cuisine account
## To get the raw recipes from cookidoo use cookidump or scrape them from network tab in browser
https://github.com/auino/cookidump

You may also use the dumped-recipes.json which is taken from cookidump

## Requirements
- PHP 8+
- Composer
- Uncommented iconv extension in php.ini

## Installation
1. Clone the repository
2. Run `composer install`
3. Fill in the .env file with your chatgpt credentials (costs about 0.01$ per recipe for gpt4) - you can use .env.template

## Usage
`bin/console test`
