# To Do List

### Contact Item Type
 * Make EmailAddresses and PhoneNumbers return an associative array of values

### EWSAutoDiscover
 * Add CA Info back in to this class

### All Types
 * Add a dirty/clean state to objects, so you can do `$api->updateItem($items)` and have it know what to update
 * Make IndexedFieldURI's return an associative array of values

### Code Generation
 * See if we can't upgrade to ZendFramework 3

### Features
 * Create interfaces for at least the API classes
 * Merge `getFileAttachments()` and `getItemAttachments()` to `getAllAttachments()` in `NonEmptyArrayOfAttachmentsType`
 * Implement `ItemType::getAttachments($attachmentType = null)` to allow selection of certain types of attachments
 * Add an easy way to find items starting off at an offset

### Incorrectly returned values
 * `ItemType::getCategories()` return a `stdClass` with a property `String` which holds the categories, rather than returning them directly

### Feature
 * Implement a "Always return as Array" feature (Will break BC)