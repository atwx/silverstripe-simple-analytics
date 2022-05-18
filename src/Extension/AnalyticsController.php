<?php

namespace Atwx\SimpleAnalytics\Extension;

use Atwx\SimpleAnalytics\Model\TrackingData;
use SilverStripe\CMS\Controllers\ContentController;
use SilverStripe\Core\Extension;

class AnalyticsController extends Extension
{
    public function contentcontrollerInit(ContentController $controller) {
        $trackingData = TrackingData::create();
        $trackingData->IPAddress = $controller->getRequest()->getIP();
        $trackingData->URL = $controller->getRequest()->getURL();
        $trackingData->setComponent('TrackedObject', $this->owner);

        $this->owner->extend('updateTrackingData', $trackingData, $controller);

        $trackingData->write();
    }
}
