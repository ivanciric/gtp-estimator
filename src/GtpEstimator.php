<?php

namespace Ivanciric\GtpEstimator;

class GtpEstimator
{
    private $visibleObjects = false;
    private $maxObservedSerialNumber = false;

    /**
     * GtpEstimator constructor.
     * @param $visibleObjects
     * @param $maxObservedSerialNumber
     */
    public function __construct($visibleObjects, $maxObservedSerialNumber)
    {
        $this->visibleObjects = $visibleObjects;
        $this->maxObservedSerialNumber = $maxObservedSerialNumber;
    }

    /**
     * @param $visibleObjects
     * @param $maxObservedSerialNumber
     * @return mixed
     */
    public static function estimate($visibleObjects, $maxObservedSerialNumber)
    {
        $estimator = new static($visibleObjects, $maxObservedSerialNumber);

        return $estimator->calculate();
    }

    /**
     * @return bool|int
     */
    private function calculate()
    {
        if (!$this->visibleObjects
            || !$this->maxObservedSerialNumber
            || ($this->visibleObjects > $this->maxObservedSerialNumber) )
        {
            return false;
        }

        $estimation = $this->maxObservedSerialNumber + ($this->maxObservedSerialNumber / $this->visibleObjects) - 1;

        return (int)$estimation;
    }
}
