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
1. Article thumbnail is hardcoded: `assets/img/blog/details-1-8.jpg