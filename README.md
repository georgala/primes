# primes
A web service in PHP returning a list of prime numbers up to a value.

This project follows the Eratosthenes method. At first there is an initialization about the range of numbers by given a specific value (lim=15) and then using a loop through the numbers, shows the list of the declared prime numbers in json and xml format.

To test this project and see the returning list on your browser:

1. Install PHP on your machine with Apache server.
2. Make a new folder "primes" into http folder and move the prime_json.php file there.
3. Make a new folder "xml" into "primes" folder and move the prime_xml.php file there.
4. Open a web browser and type the url for the json format-> localhost/primes/prime_json.php?lim=15
5. At the same webpage type the url for the xml format-> localhost/primes/xml/prime_xml.php?lim=15
6. See the results in a returned list from the above urls.
