# GtpEstimator
German Tank Problem estimator in PHP

## Installation
In composer.json file add the following in the require array:

``` bash
"ivanciric/gtp-estimator": "0.0.*"
```

## Usage

See example.php file.


Suppose k = 4 tanks with serial numbers 19, 40, 42 and 60 are captured. The maximal observed serial number, m = 60. The unknown total number of tanks is called N.

The formula for estimating the total number of tanks suggested by the frequentist approach outlined below is

    N ≈ m + m/k − 1 = 74 
   
Using GtpEstimator:
```
$estimate = Ivanciric\GtpEstimator\GtpEstimator::estimate(4, 60);
```
    
Wikipedia: 
https://en.wikipedia.org/wiki/German_tank_problem