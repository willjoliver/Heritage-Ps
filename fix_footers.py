#!/usr/bin/env python3
"""
Fix remaining footer includes - manual approach
"""

import re

files = [
    "contact/index.php",
    "edge/index.php", 
    "integrated-payments/index.php",
    "product-solutions/index.php",
    "sixpac/index.php"
]

for filepath in files:
    print(f"Processing: {filepath}")
    
    with open(filepath, 'r', encoding='utf-8') as f:
        content = f.read()
    
    # Find the last </section> and replace everything after it
    # with the footer include
    pattern = r'</section>\s*<footer.*?</html>'
    replacement = '</section><?php include $_SERVER["DOCUMENT_ROOT"] . "/includes/footer.php"; ?>'
    
    new_content = re.sub(pattern, replacement, content, flags=re.DOTALL)
    
    if new_content != content:
        with open(filepath, 'w', encoding='utf-8') as f:
            f.write(new_content)
        print(f"  ✓ Fixed {filepath}")
    else:
        print(f"  - No match in {filepath}")

print("\n✅ Done!")
