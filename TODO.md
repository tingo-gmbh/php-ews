# To Do List

### Contact Item Type
 * Make EmailAddresses and PhoneNumbers return an associative array of values

### EWSAutoDiscover
 * Add CA Info back in to this class

### HttpPlayback
 * Probably move to it's own library

### All Types
 * Add a dirty/clean state to objects, so you can do `$api->updateItem($items)` and have it know what to update
 * Make IndexedFieldURI's return an associative array of values

### Test Coverage
 * Increase to at least 90%

### Code Generation
 * See if we can't upgrade to ZendFramework 3

### Features
 * Create interfaces for at least the API classes
 * Merge `getFileAttachments()` and `getItemAttachments()` to `getAllAttachments()` in `NonEmptyArrayOfAttachmentsType`
 * Implement `ItemType::getAttachments($attachmentType = null)` to allow selection of certain types of attachments
 * When you fetch a list of items, certain information is discarded in the drilling down like the offset, if all items
 are in the view or if this requests contains the last item in the list. There's also no easy way to get a list starting
 at an offset. This should be fixed
 
### Incorrectly returned values
 * `ItemType::getCategories()` return a `stdClass` with a property `String` which holds the categories, rather than returning them directly

### Feature
 * Implement a "Always return as Array" feature (Will break BC)
