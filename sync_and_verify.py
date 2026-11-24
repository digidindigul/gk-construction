import os
import shutil
import subprocess
import urllib.request

src_dir = r"C:\Users\visha\.gemini\antigravity\scratch\gk-construction-dindigul"
dst_dir = r"C:\xampp\htdocs\gk-construction-dindigul"

# Copy tree
for root, dirs, files in os.walk(src_dir):
    rel_path = os.path.relpath(root, src_dir)
    dest_path = os.path.join(dst_dir, rel_path)
    os.makedirs(dest_path, exist_ok=True)
    for f in files:
        src_file = os.path.join(root, f)
        dst_file = os.path.join(dest_path, f)
        shutil.copy2(src_file, dst_file)
print("Successfully synced files to XAMPP htdocs.")

# PHP lint
php_exe = r"C:\xampp\php\php.exe"
php_ok = True
for root, dirs, files in os.walk(src_dir):
    for f in files:
        if f.endswith(".php"):
            full_p = os.path.join(root, f)
            res = subprocess.run([php_exe, "-l", full_p], capture_output=True, text=True)
            if "No syntax errors detected" not in res.stdout:
                print("Syntax error in", f, res.stdout, res.stderr)
                php_ok = False
if php_ok:
    print("All PHP files linted cleanly with zero syntax errors!")

# Test HTTP request
req = urllib.request.urlopen("http://localhost:8000/")
html = req.read().decode("utf-8")
print("HTTP status:", req.status)
print("Page length:", len(html))
print("Has hero-line-1:", "hero-line-1" in html)
print("Has hero-line-2:", "hero-line-2" in html)
print("Has id='why-gk':", 'id="why-gk"' in html)
print("Has gk-emblem.png:", "gk-emblem.png" in html)
print("Has Zero Delay Guarantee:", "Zero Delay Guarantee" in html)
print("Has 450+ Quality Control:", "450+ Quality Control Checks" in html)
