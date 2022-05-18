<?php

namespace Atwx\SimpleAnalytics\Model;

use SilverStripe\ORM\DataObject;

/**
 * Simple Object to hold a specific request. Should be consolidated later on by a task.
 */
class TrackingData extends DataObject
{
    private static $table_name = "Analytics_TrackingData";

    private static $db = [
        'URL' => 'Varchar(255)',
        'IPAddress' => 'Varchar(15)'
    ];

    private static $has_one = [
        'TrackedObject' => DataObject::class, //Page or DataObject
    ];
}
