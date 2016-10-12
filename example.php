<?php

require 'vendor/autoload.php';

$estimate = Ivanciric\GtpEstimator\GtpEstimator::estimate(4, 60);

echo $estimate;