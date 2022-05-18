# Silverstripe Simple Analytics
Basic analytics module for Silverstripe CMS

This module is useful for tracking visitors on pages, when Google Analytics or Matomo are too heavy. It's also good for GDPR.

Tracks request to DB on `contentcontrollerInit`; If you want to track views of DataObjects, make sure you call this extension hook in your controller like:

```php
$usedDataObject->contentcontrollerInit($this);
```

TODO:
* [ ] Consolidate Data
* [ ] Reports
* [ ] JS Beacon and Controller, so it works behind proxies
