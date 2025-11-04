# PHP Conversion Guide

This guide explains how to convert your static HTML pages to use PHP includes for automatic header updates.

## What Was Created

### 1. `/includes/header.php`
This file contains the shared header navigation code that will be used across all pages.

## How to Convert Each Page

### Steps to Convert a Page:

1. **Rename the file** from `.html` to `.php`
   - Example: `about/index.html` → `about/index.php`

2. **Set page variables** at the very top (after `<!DOCTYPE html>` or in the `<body>` tag area)
   
3. **Replace the header HTML** with a PHP include statement

4. **Upload to your server**

### Example Conversion

**BEFORE (about/index.html):**
```html
</head>
<body id="post-5" class="type-page layout-about ">
<header class="text-center alt services">
    <div class="header-top hidden-xs">
        <!-- Long header HTML code here -->
    </div>
    <div id="nav-container">
        <!-- Long navigation HTML code here -->
    </div>
    <div class="content">
        <div class="container">
            <div class="row"></div>
        </div>
    </div>
</header>
```

**AFTER (about/index.php):**
```php
</head>
<body id="post-5" class="type-page layout-about ">
<?php
// Page-specific settings
$active_page = 'about';
$phone = '(919) 453-1204';
$phone_link = '9194531204';
$header_class = 'text-center alt services';

// Include shared header
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>
<header class="<?php echo $header_class; ?>">
    <div class="content">
        <div class="container">
            <div class="row"></div>
        </div>
    </div>
</header>
```

### Page-Specific Variables

Each page needs these variables set:

- **$active_page**: The slug of the current page (for highlighting in menu)
  - Options: 'about', 'why-heritage', 'industries-served', 'services', 'integrated-payments', 'product-solutions', 'partners', 'edge', 'sixpac', 'affiliates', 'contact', '' (for homepage)
  
- **$phone**: The phone number to display (with formatting)
  - Examples: '(877) 590-4629', '(919) 453-1204', '(919) 562-4247'
  
- **$phone_link**: The phone number for tel: links (no formatting)
  - Examples: '8775904629', '9194531204', '9195624247'

- **$header_class**: CSS classes for the header element
  - Common: 'text-center alt services' (most pages) or 'text-center index' (homepage)

## Setting Up .htaccess (for backward compatibility)

Create or update `/. htaccess` to redirect old .html URLs to .php:

```apache
# Enable mod_rewrite
RewriteEngine On

# Redirect .html to .php (if .php exists)
RewriteCond %{REQUEST_FILENAME}\.php -f
RewriteRule ^(.*)\.html$ /$1.php [R=301,L]

# Allow .php files to be accessed without extension (optional)
RewriteCond %{REQUEST_FILENAME}.php -f
RewriteRule ^([^\.]+)$ $1.php [NC,L]
```

## Benefits

✅ **Update header once** - Change `/includes/header.php` and it updates everywhere
✅ **No broken links** - .htaccess redirects old URLs automatically
✅ **Easy maintenance** - Add menu items in one place
✅ **Phone number management** - Change per-page or globally
✅ **Consistent navigation** - No more copy/paste errors

## Testing

1. Upload files to your cPanel
2. Test that PHP is working: visit `/about/index.php`
3. Verify navigation appears correctly
4. Check that active menu item is highlighted
5. Test old .html URLs redirect to .php

## Quick Reference: Page Settings

| Page | active_page | phone | phone_link |
|------|-------------|-------|------------|
| Homepage | '' | (877) 590-4629 | 8775904629 |
| About | 'about' | (919) 453-1204 | 9194531204 |
| Why Heritage | 'why-heritage' | (919) 562-4247 | 9195624247 |
| Industries | 'industries-served' | (919) 453-1204 | 9194531204 |
| Services | 'services' | (919) 453-1204 | 9194531204 |
| Integrated Payments | 'integrated-payments' | (877) 590-4629 | 8775904629 |
| Product Solutions | 'product-solutions' | (919) 453-1204 | 9194531204 |
| Partners | 'partners' | (919) 562-4247 | 9195624247 |
| Edge | 'edge' | (877) 590-4629 | 8775904629 |
| SixPac | 'sixpac' | (919) 453-1204 | 9194531204 |
| Affiliates | 'affiliates' | (919) 453-1204 | 9194531204 |
| Contact | 'contact' | (919) 453-1204 | 9194531204 |

## Next Steps

1. Convert one page first (recommended: `/about/index.html`)
2. Upload to your server and test
3. Once confirmed working, convert remaining pages
4. Set up .htaccess for URL redirects
5. Test all pages and navigation

Need help? The conversion is straightforward but if you get stuck, just ask!
