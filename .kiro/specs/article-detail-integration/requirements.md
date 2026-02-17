---
title: Article Detail Page - Backend Integration
status: draft
created: 2026-02-17
---

# Article Detail Page Backend Integration

## Overview
The article detail page (`resources/views/pages/detailarticle.blade.php`) has been redesigned with a comprehensive blog layout including breadcrumbs, enhanced content display, comments section, tags, social sharing, related articles, and newsletter subscription. However, the new design currently uses hardcoded placeholder content instead of dynamic data from the `$article` model.

## Current State

### Article Model Structure
Based on `app/Models/Article.php`, the Article model has the following fields:
- `title` (string)
- `thumbnail` (string) - image path
- `hashtags` (array) - stored as JSON
- `content` (array) - stored as JSON
- `has_photo` (boolean)
- `created_at` (timestamp)
- `updated_at` (timestamp)

### Controller
The `ArticleController::detail($id)` method fetches the article and passes it to the view as `$article`.

### Current Issues
1. Article thumbnail is hardcoded: `assets/img/blog/details-1-8.jpg`
2. Article title is hardcoded: "judul"
3. Article date is hardcoded: "date"
4. Article author is hardcoded: "username penulis"
5. Article content is hardcoded with placeholder UX design text
6. Tags are hardcoded: "Research", "Team", "Ui Design"
7. Comments section is hardcoded with fake users
8. Related articles section shows hardcoded blog posts
9. No integration with actual comment system
10. No integration with related articles query

## Requirements

### 1. Dynamic Article Header
**User Story**: As a visitor, I want to see the actual article title, thumbnail, date, and author information.

**Acceptance Criteria**:
- [ ] Replace hardcoded thumbnail with `$article->thumbnail`
- [ ] Replace hardcoded title with `$article->title`
- [ ] Display formatted publication date from `$article->created_at`
- [ ] Display article author (need to determine source - User relationship or separate field)
- [ ] Handle missing thumbnail gracefully with placeholder image

### 2. Dynamic Article Content
**User Story**: As a visitor, I want to read the actual article content in a well-formatted layout.

**Acceptance Criteria**:
- [ ] Render `$article->content` array dynamically
- [ ] Maintain the design structure (paragraphs, lists, images)
- [ ] Support different content block types if content is structured
- [ ] Preserve HTML formatting if content contains HTML
- [ ] Handle empty or missing content gracefully

### 3. Dynamic Tags/Hashtags
**User Story**: As a visitor, I want to see relevant tags for the article.

**Acceptance Criteria**:
- [ ] Display tags from `$article->hashtags` array
- [ ] Make tags clickable (link to tag filter/search)
- [ ] Handle articles with no tags
- [ ] Limit display to reasonable number (e.g., first 5 tags)

### 4. Comments System Integration
**User Story**: As a visitor, I want to see and post comments on articles.

**Acceptance Criteria**:
- [ ] Determine if comments system exists in database
- [ ] If yes: Display actual comments with user info, timestamps
- [ ] If no: Either remove section or implement basic comments table
- [ ] Implement comment submission form functionality
- [ ] Add authentication check for posting comments
- [ ] Display comment count dynamically

**Decision Required**: Does a comments system exist? Check for:
- Comments table in database migrations
- Comment model
- Relationship between Article and Comment models

### 5. Related Articles
**User Story**: As a visitor, I want to discover similar articles.

**Acceptance Criteria**:
- [ ] Query and display 3 related articles based on:
  - Same hashtags/tags
  - Same category (if categories exist)
  - Most recent articles as fallback
- [ ] Display article thumbnail, title, daemplate
- Related articles display correctly
- Comments system is functional or removed
- Social sharing works with actual article data
- Newsletter subscription is functional or removed
- All links and navigation work correctly
- Design maintains visual fidelity to the new layout
- No errors occur with missing or incomplete data
the exact structure of the `content` JSON array? Can you provide an example of how content is stored?

5. **Related Articles Logic**: What criteria should be used for "related articles"? Tags, categories, or simply most recent?

6. **Blog Listing Page**: Does a blog listing/index page exist? What route should the breadcrumb "Blog" link point to?

## Success Criteria

The integration will be considered successful when:
- All article data displays dynamically from the database
- No hardcoded content remains in the ttional)

## Questions for Clarification

1. **Author Attribution**: How should article authorship be tracked? Should we add a `user_id` foreign key to the articles table?

2. **Comments System**: Does a comments system already exist in the database? Should we implement one or remove the comments section from the design?

3. **Newsletter**: Is there an existing newsletter/subscription system? Should we integrate with a third-party service or build a simple subscription table?

4. **Content Structure**: What is formation
3. Format dates properly

### Phase 3: Related Articles (Priority: Medium)
1. Implement related articles query
2. Display related articles section
3. Handle edge cases

### Phase 4: Comments System (Priority: Medium)
1. Assess existing comments infrastructure
2. Implement or integrate comments display
3. Add comment submission functionality

### Phase 5: Additional Features (Priority: Low)
1. Social sharing integration
2. Newsletter subscription
3. View counter (optional)
4. Reading time estimate (opback image for missing thumbnails

### Performance
- Eager load relationships (author, comments) to avoid N+1 queries
- Cache related articles query if expensive
- Consider pagination for comments if many exist

## Implementation Plan

### Phase 1: Core Article Data (Priority: High)
1. Replace hardcoded title, thumbnail, date
2. Render article content from database
3. Display hashtags/tags
4. Update breadcrumbs

### Phase 2: Author & Metadata (Priority: High)
1. Add/verify User relationship
2. Display author inf exists, structure
3. **newsletter_subscriptions table**: Check if exists
4. **Article-User relationship**: Verify in Article model

### Content Rendering
The `$article->content` field is stored as JSON array. Need to determine:
- Structure of content array
- How to render different content types (text, images, lists, etc.)
- Whether to use a content builder/renderer component

### Image Paths
- Ensure thumbnail paths are relative to `public/` directory
- Handle both absolute and relative paths
- Provide fall subscription in database or integrate with email service
- [ ] Show success/error messages
- [ ] Prevent duplicate subscriptions

**Decision Required**: Newsletter system implementation
- Check if newsletter/subscription functionality exists
- Determine if using third-party service (Mailchimp, etc.)
- Or implement basic subscription table

## Technical Considerations

### Database Schema Review
Need to verify/add:
1. **articles table**: Check for `user_id` or `author_id` column
2. **comments table**: Check ito navigate back through the site hierarchy.

**Acceptance Criteria**:
- [ ] Update breadcrumb "Home" link to use `route('home')`
- [ ] Add "Blog" link (determine if blog listing page exists)
- [ ] Display current article title in breadcrumb
- [ ] Truncate long titles in breadcrumb if needed

### 9. Newsletter Integration
**User Story**: As a visitor, I want to subscribe to the newsletter.

**Acceptance Criteria**:
- [ ] Implement newsletter subscription form handler
- [ ] Validate email address
- [ ] Store has `user_id` or `author_id` column
- Check if Article model has User relationship
- If not, consider adding this relationship

### 7. Social Sharing
**User Story**: As a visitor, I want to share articles on social media.

**Acceptance Criteria**:
- [ ] Update social share links with actual article URL
- [ ] Include article title and description in share parameters
- [ ] Ensure Facebook, Twitter/X, Instagram, and other platform links work correctly

### 8. Breadcrumb Navigation
**User Story**: As a visitor, I want te, and link
- [ ] Handle case where fewer than 3 related articles exist
- [ ] Exclude current article from related articles

### 6. Author Information
**User Story**: As a visitor, I want to know who wrote the article.

**Acceptance Criteria**:
- [ ] Determine author source (User relationship or separate field)
- [ ] Display author name in metadata section
- [ ] Consider adding author profile link if User relationship exists

**Decision Required**: How is article authorship tracked?
- Check if `articles` table