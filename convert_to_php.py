#!/usr/bin/env python3
"""
Script to convert HTML files to PHP with includes
"""

import re
import os

# Define page-specific settings
pages_config = {
    'index.php': {
        'phone': '(877) 590-4629',
        'phone_link': '8775904629',
        'active_page': 'home',
        'header_class': 'text-center index'
    },
    'about/index.php': {
        'phone': '(919) 453-1204',
        'phone_link': '9194531204',
        'active_page': 'about',
        'header_class': 'text-center alt services'
    },
    'why-heritage/index.php': {
        'phone': '(919) 562-4247',
        'phone_link': '9195624247',
        'active_page': 'why-heritage',
        'header_class': 'text-center alt services'
    },
    'industries-served/index.php': {
        'phone': '(919) 453-1204',
        'phone_link': '9194531204',
        'active_page': 'industries-served',
        'header_class': 'text-center alt services'
    },
    'services/index.php': {
        'phone': '(919) 453-1204',
        'phone_link': '9194531204',
        'active_page': 'services',
        'header_class': 'text-center alt services'
    },
    'integrated-payments/index.php': {
        'phone': '(877) 590-4629',
        'phone_link': '8775904629',
        'active_page': 'integrated-payments',
        'header_class': 'text-center alt services'
    },
    'product-solutions/index.php': {
        'phone': '(919) 453-1204',
        'phone_link': '9194531204',
        'active_page': 'product-solutions',
        'header_class': 'text-center alt services'
    },
    'partners/index.php': {
        'phone': '(919) 562-4247',
        'phone_link': '9195624247',
        'active_page': 'partners',
        'header_class': 'text-center alt services'
    },
    'edge/index.php': {
        'phone': '(877) 590-4629',
        'phone_link': '8775904629',
        'active_page': 'edge',
        'header_class': 'text-center alt services'
    },
    'sixpac/index.php': {
        'phone': '(919) 453-1204',
        'phone_link': '9194531204',
        'active_page': 'sixpac',
        'header_class': 'text-center alt services'
    },
    'affiliates/index.php': {
        'phone': '(919) 453-1204',
        'phone_link': '9194531204',
        'active_page': 'affiliates',
        'header_class': 'text-center alt services'
    },
    'contact/index.php': {
        'phone': '(919) 453-1204',
        'phone_link': '9194531204',
        'active_page': 'contact',
        'header_class': 'text-center alt services'
    }
}

def convert_file(filepath, config):
    """Convert a single HTML file to PHP with header include"""
    print(f"Converting {filepath}...")
    
    # Read the file
    with open(filepath, 'r', encoding='utf-8') as f:
        content = f.read()
    
    # For homepage, the header includes the <div class="content">... section
    # For other pages, header ends after </div></nav></div>
    
    if 'index.php' == os.path.basename(filepath) and 'index.php' == filepath.replace(os.getcwd() + '/', ''):
        # Homepage - header includes hero section
        # Pattern: </head><body...><header...>...(everything until)</header>
        pattern = r'(</head>\s*)<body[^>]*>.*?</header>'
        replacement = r'\1\n<?php\n$active_page = "' + config['active_page'] + r'";\n$phone = "' + config['phone'] + r'";\n$phone_link = "' + config['phone_link'] + r'";\n$header_class = "' + config['header_class'] + r'";\ninclude $_SERVER["DOCUMENT_ROOT"] . "/includes/header.php";\n?>\n'
    else:
        # Other pages - header ends after navigation
        # Pattern: </head><body...><header...>...(until)</div></nav></div>
        # Try both with and without whitespace/newlines
        pattern = r'(</head>\s*)<body[^>]*>.*?</div>\s*</nav>\s*</div>'
        replacement = r'\1\n<?php\n$active_page = "' + config['active_page'] + r'";\n$phone = "' + config['phone'] + r'";\n$phone_link = "' + config['phone_link'] + r'";\n$header_class = "' + config['header_class'] + r'";\ninclude $_SERVER["DOCUMENT_ROOT"] . "/includes/header.php";\n?>\n'
    
    # Perform replacement
    new_content = re.sub(pattern, replacement, content, count=1, flags=re.DOTALL)
    
    if new_content == content:
        print(f"  ⚠️  Warning: No replacement made for {filepath}")
        return False
    
    # Write back
    with open(filepath, 'w', encoding='utf-8') as f:
        f.write(new_content)
    
    print(f"  ✅ Converted successfully")
    return True

def main():
    """Main conversion function"""
    os.chdir('/Users/jordanoliver/Downloads/git')
    
    for filepath, config in pages_config.items():
        if os.path.exists(filepath):
            convert_file(filepath, config)
        else:
            print(f"⚠️  File not found: {filepath}")
    
    print("\n✅ All conversions complete!")

if __name__ == '__main__':
    main()
