# How to Upload to cPanel - Easy Guide

## 🚀 Method 1: cPanel File Manager (EASIEST - Recommended)

### Step 1: Create a ZIP file of your site
```bash
# Run this in Terminal from the git folder:
cd /Users/jordanoliver/Downloads/git
zip -r heritageps-updated.zip . -x "*.git*" -x "*_bak" -x "*.py" -x "*.md"
```

This creates `heritageps-updated.zip` with only the files you need.

### Step 2: Upload via cPanel File Manager
1. **Login to cPanel** (usually yoursite.com/cpanel or yoursite.com:2083)
2. Click **"File Manager"** icon
3. Navigate to **`public_html`** folder (or wherever your site lives)
4. Click **"Upload"** button at the top
5. **Drag & drop** `heritageps-updated.zip` or click to browse for it
6. Wait for upload to complete

### Step 3: Extract the ZIP
1. In File Manager, **right-click** on `heritageps-updated.zip`
2. Click **"Extract"**
3. Choose **"Extract Here"** or select destination
4. Click **"Extract File(s)"**
5. **Delete** the ZIP file after extraction

### Step 4: Test Your Site
Visit your website and check:
- ✅ Navigation appears on all pages
- ✅ New 12-item menu shows up
- ✅ Phone numbers are correct
- ✅ Active page highlighting works

---

## 💻 Method 2: FTP/SFTP (More Control)

### Using FileZilla (Free FTP Client)

1. **Download FileZilla**: https://filezilla-project.org/

2. **Get your FTP credentials from cPanel:**
   - cPanel → Files → FTP Accounts
   - Or use your main cPanel username/password

3. **Connect:**
   - Host: `ftp.yourdomain.com` or your server IP
   - Username: Your cPanel username
   - Password: Your cPanel password
   - Port: 21 (FTP) or 22 (SFTP - more secure)

4. **Upload:**
   - Left side: Navigate to `/Users/jordanoliver/Downloads/git`
   - Right side: Navigate to `/public_html`
   - **Select all folders/files** (exclude .git, _bak, .py, .md files)
   - **Drag to right side** to upload
   - Wait for completion

5. **Overwrite?** 
   - When prompted, choose **"Overwrite"** for files that already exist

---

## 🔧 Method 3: Git Push (Advanced)

If your cPanel has Git support:

1. **In cPanel:** Git Version Control → Create Repository
2. **In Terminal:**
```bash
cd /Users/jordanoliver/Downloads/git
git init
git add .
git commit -m "PHP conversion complete"
git remote add cpanel ssh://username@yoursite.com/~/repositories/sitename.git
git push cpanel master
```

---

## 📋 What Files to Upload

### ✅ Upload These:
```
/includes/header.php          (NEW - Required!)
/index.php                    (Renamed from .html)
/about/index.php
/why-heritage/index.php       (Renamed folder!)
/industries-served/index.php
/services/index.php
/integrated-payments/index.php
/product-solutions/index.php
/partners/index.php           (NEW PAGE)
/edge/index.php               (NEW PAGE)
/sixpac/index.php
/affiliates/index.php
/contact/index.php
/thank-you/index.php
/privacy-policy/index.php
/northstatebank/index.php
/emv-and-nfc/index.php
/ams/index.php
/content/                     (All your images/CSS)
/favicon.ico
/robots.txt
/sitemap.xml
```

### ❌ Don't Upload These:
```
*.md files                    (Documentation - local only)
*.py files                    (Scripts - local only)
*_bak files                   (Backups - local only)
.git folder                   (Git repository - local only)
*.html files in root/folders  (Old files - replaced by .php)
```

---

## 🎯 Quick Command to Create Clean ZIP

Run this to create a ZIP with ONLY the files you need:

```bash
cd /Users/jordanoliver/Downloads/git

# Create clean ZIP (excludes documentation and backups)
zip -r heritageps-upload.zip \
  includes/ \
  content/ \
  about/ \
  why-heritage/ \
  industries-served/ \
  services/ \
  integrated-payments/ \
  product-solutions/ \
  partners/ \
  edge/ \
  sixpac/ \
  affiliates/ \
  contact/ \
  thank-you/ \
  privacy-policy/ \
  northstatebank/ \
  emv-and-nfc/ \
  ams/ \
  index.php \
  favicon.ico \
  robots.txt \
  sitemap.xml \
  -x "*.html" -x "*_bak" -x "*.md" -x "*.py" -x ".git/*"
```

This creates `heritageps-upload.zip` ready for cPanel!

---

## ⚠️ Important: Backup First!

**Before uploading, backup your live site:**

### In cPanel:
1. Go to **"Backup"** or **"Backup Wizard"**
2. Click **"Download a Home Directory Backup"**
3. Save the backup file to your computer
4. Wait for it to complete before proceeding

OR

### Using File Manager:
1. Select all files in `public_html`
2. Click **"Compress"**
3. Choose **"Zip Archive"**
4. Name it: `backup-before-php-conversion-2025-11-04.zip`
5. Download it to your computer

---

## 🔍 After Upload Checklist

### 1. Test All Pages:
Visit each page and verify:
- [ ] Homepage: https://www.heritageps.net/
- [ ] About: https://www.heritageps.net/about/
- [ ] Why Heritage: https://www.heritageps.net/why-heritage/
- [ ] Industries: https://www.heritageps.net/industries-served/
- [ ] Services: https://www.heritageps.net/services/
- [ ] Integrated: https://www.heritageps.net/integrated-payments/
- [ ] Products: https://www.heritageps.net/product-solutions/
- [ ] Partners: https://www.heritageps.net/partners/
- [ ] Edge: https://www.heritageps.net/edge/
- [ ] SixPac: https://www.heritageps.net/sixpac/
- [ ] Affiliates: https://www.heritageps.net/affiliates/
- [ ] Contact: https://www.heritageps.net/contact/

### 2. Check Navigation:
- [ ] 12 menu items appear
- [ ] Active page is highlighted correctly
- [ ] All links work
- [ ] Mobile menu works

### 3. Check Phone Numbers:
- [ ] Homepage shows: (877) 590-4629
- [ ] About shows: (919) 453-1204
- [ ] Why Heritage shows: (919) 562-4247
- [ ] Check others per CONVERSION-COMPLETE.md

### 4. Test Old URLs (if .htaccess added):
- [ ] https://www.heritageps.net/about.html → redirects to /about/
- [ ] Old links still work

---

## 🆘 Troubleshooting

### Navigation Doesn't Appear?
**Check:** Does `/includes/header.php` exist on server?
- In cPanel File Manager, navigate to site root
- Look for `includes` folder
- Verify `header.php` is inside it

### PHP Errors?
**Check:** PHP version in cPanel
- cPanel → Software → Select PHP Version
- Should be **PHP 7.4 or higher**
- Enable these extensions: json, zip, mbstring

### Old Navigation Still Shows?
**Clear browser cache:**
- Chrome: Cmd+Shift+R (Mac) or Ctrl+Shift+R (Windows)
- Or use Incognito/Private window

### Pages Show PHP Code?
**Check:** File extensions are `.php` not `.html`
- cPanel → File Manager
- Rename any `.html` files to `.php`

---

## 💡 Pro Tips

### 1. Use SFTP Instead of FTP
- More secure (encrypted)
- Same process, just use port 22
- Enable in cPanel → SSH Access

### 2. Keep Local Backup
- Keep `/Users/jordanoliver/Downloads/git` folder
- This is your "source of truth"
- Make changes here, then upload

### 3. Selective Updates Later
When you need to update the header:
1. Edit `/includes/header.php` locally
2. Upload ONLY that one file via cPanel File Manager
3. All 17 pages update instantly!

### 4. Create .htaccess for URL Redirects
See `CONVERSION-COMPLETE.md` for .htaccess code to redirect old .html URLs

---

## 📞 Need Help?

If something doesn't work:
1. Check PHP error logs in cPanel
2. Verify file permissions (should be 644 for .php files, 755 for folders)
3. Contact your hosting provider if PHP errors occur

**You're ready to go! Use Method 1 (ZIP upload) for the easiest experience.**
