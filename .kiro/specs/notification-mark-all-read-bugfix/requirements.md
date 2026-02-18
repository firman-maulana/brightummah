# Notification Mark All as Read - Bug Fix

## Overview
Fix JavaScript error in admin notification system where `markAllAsRead()` function is called but not defined, causing console errors when users click the notifications button.

## Problem Statement
The recent changes to `resources/views/admin/layouts/sidebar.blade.php` added a call to `markAllAsRead()` function in the Alpine.js click handler, but the function was never implemented. This causes a JavaScript error when users click the notifications bell icon.

**Current Code (Line 204):**
```javascript
@click.prevent="open = !open; if(open && hasUnread) { markAllAsRead(); }"
```

**Error:** `Uncaught ReferenceError: markAllAsRead is not defined`

## User Stories

### 1. As an admin user
**I want** the notification indicator to disappear when I open the notifications dropdown  
**So that** I know I've acknowledged all new notifications  
**And** the system doesn't show JavaScript errors in the console

### 2. As a developer
**I want** the `markAllAsRead()` function to be properly implemented  
**So that** the notification system works as intended  
**And** makes an AJAX call to the backend API endpoint

## Acceptance Criteria

### 1.1 JavaScript Function Implementation
- [ ] `markAllAsRead()` function must be defined in the sidebar layout
- [ ] Function must be accessible from the Alpine.js component scope
- [ ] Function must make an AJAX call to `/admin/notifications/mark-all-read` endpoint
- [ ] Function must update the `hasUnread` state to `false` on success

### 1.2 Backend API Endpoint
- [ ] The `/admin/notifications/mark-all-read` route already exists (verify)
- [ ] The `NotificationController::markAllAsRead()` method already exists (verify)
- [ ] The endpoint returns a JSON response with success status

### 1.3 UI Behavior
- [ ] When notifications dropdown is opened, the red indicator dot disappears
- [ ] The `hasUnread` state is updated reactively
- [ ] No JavaScript console errors occur
- [ ] The notification count is updated in the backend

### 1.4 Error Handling
- [ ] If the AJAX call fails, show a console error (graceful degradation)
- [ ] The UI should still function even if the API call fails
- [ ] Network errors should not break the dropdown functionality

## Technical Context

### Existing Backend API
The `NotificationController` already has a `markAllAsRead()` method at `/admin/notifications/mark-all-read`:

```php
public function markAllAsRead()
{
    $user = Auth::user();
    
    Notification::where('user_id', '!=', $user->id)
        ->where('is_read', false)
        ->update(['is_read' => true]);

    return response()->json(['success' => true]);
}
```

### Current Alpine.js State
```javascript
x-data="{ open: false, hasUnread: {{ $unreadCount ?? 0 }} > 0 }"
```

### Required Implementation
The `markAllAsRead()` function needs to:
1. Make a POST request to `/admin/notifications/mark-all-read`
2. Include CSRF token
3. Update `hasUnread` to `false` on success
4. Handle errors gracefully

## Files to Modify
- `resources/views/admin/layouts/sidebar.blade.php` - Add JavaScript function

## Dependencies
- Existing NotificationController and routes (already implemented)
- Alpine.js (already included)
- Axios or fetch API for AJAX calls

## Priority
**High** - This is a bug that causes JavaScript errors and breaks expected functionality

## Related Issues
- Recent commit added Alpine.js state management for notifications
- Function call was added but implementation was missing
