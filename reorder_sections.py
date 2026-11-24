import re

file_path = r"C:\Users\visha\.gemini\antigravity\scratch\gk-construction-dindigul\index.php"

with open(file_path, "r", encoding="utf-8") as f:
    content = f.read()

# Pattern to extract the Why GK section
pattern = r"(<!-- =+\s+WHY GK CONSTRUCTION \(CORE GUARANTEES & PROMISES\)\s+=+ -->\s+<section class=\"section section-why-gk\" id=\"why-gk\">.*?</section>)\s*"
match = re.search(pattern, content, re.DOTALL)

if not match:
    print("Error: Could not find Why GK section in index.php")
    exit(1)

why_gk_block = match.group(1)

# Clean up encoding characters if any
why_gk_block = why_gk_block.replace("Every stageâ€”from", "Every stage—from")

# Remove Why GK section from current position
content_without = content[:match.start()] + content[match.end():]

# Find the end of the services section
services_end_marker = '</section>\n\n<!-- ========================================================\n     FEATURED PROJECTS SHOWCASE'
if services_end_marker not in content_without:
    # try with \r\n
    services_end_marker = '</section>\r\n\r\n<!-- ========================================================\r\n     FEATURED PROJECTS SHOWCASE'

if services_end_marker not in content_without:
    print("Error: Could not find services section end marker")
    exit(1)

pos = content_without.find(services_end_marker)
# Insert right after the services section's closing </section>
insert_pos = pos + len('</section>')

new_content = (
    content_without[:insert_pos]
    + "\n\n"
    + why_gk_block
    + content_without[insert_pos:]
)

with open(file_path, "w", encoding="utf-8") as f:
    f.write(new_content)

print("Successfully moved Why GK section next to End-to-End Civil Engineering Solutions section!")
