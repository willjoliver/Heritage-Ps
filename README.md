# Heritage Payment Solutions Website

A professional payment solutions website built with PHP, Bootstrap, and modern web technologies.

## 🚀 Features

- **PHP Templating**: Modular header system using PHP includes for easy maintenance
- **Responsive Design**: Mobile-first design using Bootstrap 3.3.6
- **Contact Forms**: Integrated contact forms with validation
- **SEO Optimized**: Proper meta tags, sitemap, and robots.txt
- **Payment Solutions**: Comprehensive information on payment processing services
- **Industry Focus**: Specialized solutions for various industries

## 📋 Project Structure

```
/
├── includes/              # Shared PHP components
│   └── header.php        # Reusable header/navigation
├── content/              # Assets and resources
│   ├── themes/          # CSS, JS, and theme files
│   └── uploads/         # Images and media files
├── about/               # About pages
├── services/            # Service pages
├── product-solutions/   # Product information
├── industries-served/   # Industry-specific content
├── contact/             # Contact forms
└── [other sections]/    # Additional pages
```

## 🛠️ Technologies Used

- **PHP**: Server-side templating and includes
- **Bootstrap 3.3.6**: Responsive framework
- **jQuery 2.2.4**: DOM manipulation and interactions
- **Font Awesome 4.6.3**: Icon library
- **CSS3/HTML5**: Modern web standards

## 📦 Installation

### Prerequisites
- PHP 7.4 or higher
- Web server (Apache/Nginx)
- cPanel or FTP access (for deployment)

### Local Development

1. Clone the repository:
   ```bash
   git clone https://github.com/YOUR_USERNAME/heritage-payment-solutions.git
   cd heritage-payment-solutions
   ```

2. Start a local PHP server:
   ```bash
   php -S localhost:8000
   ```

3. Open your browser to `http://localhost:8000`

### Production Deployment

See [UPLOAD-TO-CPANEL.md](UPLOAD-TO-CPANEL.md) for detailed deployment instructions.

## 🔧 Configuration

### Phone Numbers

Phone numbers are configured per-page using PHP variables:

```php
<?php
$phone = "(888) 555-1234";
$phone_link = "8885551234";
include $_SERVER["DOCUMENT_ROOT"] . "/includes/header.php";
?>
```

### Navigation Active States

Set the active page for navigation highlighting:

```php
<?php
$active_page = "about";  // Options: home, about, services, etc.
?>
```

## 📄 Page Variables

Each page supports these variables:

- `$active_page`: Current navigation item (for highlighting)
- `$phone`: Display phone number with formatting
- `$phone_link`: Phone number for tel: links (digits only)
- `$header_class`: Optional CSS classes for header customization

## 🗂️ Available Pages

- **Home**: Main landing page
- **About**: Company information
- **Why Heritage**: Value proposition
- **Industries Served**: Target industries
- **Services**: Service offerings
- **Integrated Payments**: Payment integration solutions
- **Product Solutions**: Product catalog
- **Partners**: Partnership information
- **Edge/Etrak/SixPac**: Specialized products
- **Affiliates**: Affiliate program
- **Contact**: Contact forms and information

## 🔄 Conversion Notes

This site was converted from static HTML to PHP for easier maintenance. The conversion includes:

- Centralized header/navigation in `/includes/header.php`
- PHP includes on all pages
- Standardized page structure
- Backup files preserved with `.bak` extension

See [PHP-CONVERSION-SUMMARY.md](PHP-CONVERSION-SUMMARY.md) for full conversion details.

## 📝 Documentation

- [PHP Conversion Guide](README-PHP-CONVERSION.md)
- [Conversion Summary](PHP-CONVERSION-SUMMARY.md)
- [Upload Instructions](UPLOAD-TO-CPANEL.md)
- [Conversion Complete](CONVERSION-COMPLETE.md)

## 🤝 Contributing

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

## 📞 Contact

Heritage Payment Solutions  
Website: [Your Website URL]  
Email: [Your Email]  
Phone: [Your Phone Number]

## 📜 License

This project is proprietary and confidential.

## ⚠️ Important Notes

- Backup files (`.bak`, `_bak`) are excluded via `.gitignore`
- The `backups/` directory is not tracked
- Ensure sensitive configuration files are properly secured
- Test all forms and functionality after deployment

## 🔐 Security

- Keep PHP and dependencies updated
- Validate all form inputs
- Use HTTPS in production
- Implement CSRF protection on forms
- Review file upload permissions

## 🎯 Future Enhancements

- [ ] Implement dropdown navigation menus
- [ ] Add .htaccess for clean URLs
- [ ] Enhance form validation
- [ ] Add analytics tracking
- [ ] Implement caching strategies
- [ ] Add automated testing

---

**Built with ❤️ for Heritage Payment Solutions**
