#!/usr/bin/env python3
"""
Script to update all PHP index files to:
1. Remove duplicate header closing code
2. Replace footer with include
"""

import os
import re

# List of files that need updating
files_to_update = [
    "about/index.php",
    "northstatebank/index.php",
    "services/index.php",
    "emv-and-nfc/index.php",
    "industries-served/index.php",
    "affiliates/index.php",
    "1stpaypos/index.php",
    "why-heritage/index.php",
    "thank-you/index.php",
    "ams/index.php",
    "privacy-policy/index.php",
    "edge/index.php",
    "sixpac/index.php",
    "product-solutions/index.php",
    "integrated-payments/index.php",
    "contact/index.php",
    "index.php",  # Root index
]

# Base directory
base_dir = "/Users/jordanoliver/Documents/Heritage-Ps"

# Pattern to find and remove duplicate header closing (both versions)
header_pattern1 = r'<div class="content"><div class="container"><div class="row"></div></div></div></header>'
header_pattern2 = r'\s*<div class="content">\s*<div class="container">\s*<div class="row"></div>\s*</div>\s*</div>\s*</header>'

# Pattern to find the footer and everything after
footer_pattern = r'</section><footer id="footer".*?</html>'

# Replacement for footer
footer_replacement = r'</section><?php include $_SERVER["DOCUMENT_ROOT"] . "/includes/footer.php"; ?>'

def update_file(filepath):
    """Update a single PHP file."""
    try:
        with open(filepath, 'r', encoding='utf-8') as f:
            content = f.read()
        
        original_content = content
        
        # Step 1: Remove duplicate header closing (try both patterns)
        if header_pattern1 in content:
            content = content.replace(header_pattern1, '')
            print(f"  ✓ Removed duplicate header closing")
        elif re.search(header_pattern2, content):
            content = re.sub(header_pattern2, '', content)
            print(f"  ✓ Removed duplicate header closing (with whitespace)")
        
        # Step 2: Replace footer with include
        content = re.sub(footer_pattern, footer_replacement, content, flags=re.DOTALL)
        
        if content != original_content:
            with open(filepath, 'w', encoding='utf-8') as f:
                f.write(content)
            print(f"  ✓ Replaced footer with include")
            return True
        else:
            print(f"  - No changes needed")
            return False
            
    except Exception as e:
        print(f"  ✗ Error: {str(e)}")
        return False

def main():
    """Main function to process all files."""
    print("Updating PHP files...\n")
    
    updated_count = 0
    for file_path in files_to_update:
        full_path = os.path.join(base_dir, file_path)
        if os.path.exists(full_path):
            print(f"Processing: {file_path}")
            if update_file(full_path):
                updated_count += 1
        else:
            print(f"Skipping (not found): {file_path}")
    
    print(f"\n✅ Complete! Updated {updated_count} files.")

if __name__ == "__main__":
    main()
