# Exchange Rate App

This is an Exchange Rate App built with Laravel, allowing users to request the current exchange rate and view the history of rates based on previous queries. The app supports handling the INR/EUR rate and can be easily extended to include other rates.

## Features

- Fetches current exchange rate using a third-party API
- Stores and displays the history of exchange rate queries
- Supports INR/EUR rate by default
- Easy to extend with additional rates

## Installation

1. Unzip the folder in xampp(htdocs) or wampp(www) directory
2. Navigate to the project directory:
	cd exchange-rate-app
3. Install the dependencies:
	composer install
4. Generate the application key:
	php artisan key:generate
5. Configure the database connection in the `.env` file:
	DB_CONNECTION=mysql
	DB_HOST=127.0.0.1
	DB_PORT=3306
	DB_DATABASE=exchange_rate_app
	DB_USERNAME=root
	DB_PASSWORD=
	(Note: If you get error database not found create database manually.)
6. Run the database migrations:
	php artisan migrate
7. Seed the database with initial currency data:
	php artisan db:seed
8. Start the development server:
	php artisan serve
9. Access the app in your web browser at `http://localhost:8000`

## Usage

- Navigate to the homepage where you can select the "From Currency" and "To Currency" from the dropdown lists.
- Click the "Fetch Exchange Rate" button to retrieve the current exchange rate.
- The exchange rate will be displayed along with a historical table showing previous queries and rates.

## Possibilities for Extending/Improving the App

1. Add More Currency Rates: Extend the app to support additional currency rates.
2. User Authentication: Implement user authentication to allow users to create accounts and save their exchange rate queries
3. Graphical Representation: Enhance the app by adding graphical representations of the exchange rate history using charting libraries like Chart.js or Highcharts.
4. Cache API Responses: Implement caching mechanisms to reduce the number of API calls and improve performance.
