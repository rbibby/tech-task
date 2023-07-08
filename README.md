# Homeowners Data Converter

## Project Requirements
* PHP 8.1+
* Composer
* NPM

## How to Use

* Clone project to your local machine and open directory in Terminal
* `composer install`
* `npm install`
* `php artisan serve`
* `npm run dev` (in separate Terminal window / tab)
* Go to the URL specified in the Terminal and upload your CSV
* The homeowners will be broken down in to individual people and returned as a JSON array

## Tests

This project has PHPUnit setup for testing. Run `vendor/bin/phpunit` to
run the test suite.

## Future Additions

Additional homeowner formats can be added later down the line by updating the
`convertToPeople` function in the `Homeowners` class. The new format can be
added to the data provider in the `HomeownersTest` file to ensure there are
no regressions to existing Homeowner parsing.

Currently I assume that the CSV has been uploaded with the header row still
there. This could be changed to be a checkbox / radio input on the upload
screen so the user gets the option not to skip the first row if they have
a CSV with no headers.

The project could be setup with Laravel Pint and GitHub actions to ensure
consistent code styling is used throughout the project.

GitHub actions could also be used to run the PHPUnit suite automatically
on each commit and fail if any tests fail.
