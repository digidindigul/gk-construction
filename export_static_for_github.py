import urllib.request
import os
import re

base_url = "http://localhost:8000/"
project_dir = r"C:\Users\visha\.gemini\antigravity\scratch\gk-construction-dindigul"

pages = {
    "": "index.html",
    "about.php": "about.html",
    "projects.php": "projects.html",
    "gallery.php": "gallery.html",
    "contact.php": "contact.html",
}

for src, dest in pages.items():
    url = base_url + src
    try:
        req = urllib.request.urlopen(url)
        html = req.read().decode("utf-8")
        
        # Replace .php links with .html
        html = html.replace('href="index.php"', 'href="index.html"')
        html = html.replace('href="about.php"', 'href="about.html"')
        html = html.replace('href="projects.php"', 'href="projects.html"')
        html = html.replace('href="gallery.php"', 'href="gallery.html"')
        html = html.replace('href="contact.php"', 'href="contact.html"')
        html = html.replace('href="index.php#', 'href="index.html#')
        
        # If contact page, enhance form for static GitHub Pages
        if dest == "contact.html":
            # Add client-side friendly form handler
            form_replacement = """<form id="contactFormStatic" onsubmit="handleContactSubmit(event)" style="display: flex; flex-direction: column; gap: 16px;">
                    <div id="formSuccessMessage" style="display: none; background: #ECFDF5; border: 1.5px solid #10B981; padding: 20px; border-radius: var(--radius-md); color: #065F46; text-align: center; margin-bottom: 12px;">
                        <i class="fa-solid fa-circle-check" style="color: #10B981; font-size: 2rem; margin-bottom: 8px;"></i>
                        <h4 style="color: #065F46; font-size: 1.15rem; margin-bottom: 6px;">Thank You! Your Request Has Been Received.</h4>
                        <p style="margin-bottom: 14px; font-size: 0.92rem;">Our Chief Civil Consultant will contact you within 2 working hours.</p>
                        <a id="waDirectBtn" href="#" target="_blank" class="btn btn-gold" style="font-size: 0.88rem; padding: 10px 18px;">
                            <i class="fa-brands fa-whatsapp"></i>
                            <span>Send Details on WhatsApp</span>
                        </a>
                    </div>"""
            html = html.replace('<form action="contact.php" method="POST" style="display: flex; flex-direction: column; gap: 16px;">', form_replacement)
            
            js_script = """<script>
function handleContactSubmit(e) {
    e.preventDefault();
    const form = e.target;
    const name = form.querySelector('[name="name"]').value;
    const phone = form.querySelector('[name="phone"]').value;
    const type = form.querySelector('[name="type"]').value;
    const message = form.querySelector('[name="message"]').value;
    
    const successDiv = document.getElementById('formSuccessMessage');
    const waBtn = document.getElementById('waDirectBtn');
    
    const waText = encodeURIComponent(`Hello GK Construction,\\n\\nName: ${name}\\nPhone: ${phone}\\nProject: ${type}\\nDetails: ${message}`);
    waBtn.href = `https://wa.me/919942668806?text=${waText}`;
    
    successDiv.style.display = 'block';
    form.reset();
}
</script>
</body>"""
            html = html.replace('</body>', js_script)

        dest_path = os.path.join(project_dir, dest)
        with open(dest_path, "w", encoding="utf-8") as f:
            f.write(html)
        print(f"Exported: {dest} ({len(html)} bytes)")
    except Exception as e:
        print(f"Error exporting {src}: {e}")

print("All static pages generated for GitHub Pages!")
