# GK Construction — Premier Builders & Civil Engineering Firm
> **Location:** Dindigul, Tamil Nadu, India  
> **Tagline:** Built With Precision  
> **Contact:** +91 99426 68806 | gkconstruction235@gmail.com  
> **Address:** 15, GTN Sali Rd, near MSP School, Masilamanipuram, Anna Nagar, Dindigul - 624005  

---

## 🏗️ Project Overview
Corporate luxury website for **GK Construction**, a premier civil engineering and turnkey contracting firm based in Dindigul, Tamil Nadu. Designed specifically for client presentations and high-converting family/commercial investor inquiries.

### 🎨 Visual Theme & Identity
- **Palette:** Luxury Gold (`#CCA43B`), Obsidian Black (`#0B0E14`), and Pure White (`#FFFFFF`).
- **Typography:** Poppins (Google Fonts).
- **Navigation:** Modern floating navbar featuring the pure golden architectural emblem on desktop and bold **"GK Construction"** on mobile, with custom 3-line animated hamburger toggle.
- **Animations:** High-performance hardware-accelerated text sliding in from the left (`fade-in-left`), right (`fade-in-right`), and upward reveals (`fade-in-up`) triggered via `IntersectionObserver`.

---

## 🌟 Key Pages & Features

1. **Home (`index.html` / `index.php`)**:
   - Sunlit full-stretch architectural villa banner with subtle obsidian fade.
   - Strict 2-line responsive headline (*"Building Architectural Landmarks in Dindigul"*).
   - 4-metric dashboard strip (15+ Years, 250+ Landmarks, 100% Vastu, 10-Yr Warranty).
   - About GK Construction overview with single landmark residence image.
   - End-to-End Civil Engineering Solutions (6 dark luxury service cards).
   - **Why GK Construction** section with 5 trust guarantees (Zero Delay Policy, 450+ QC Checks, Milestone Escrow Money Safety, Zero Cost Overruns Price Lock, 10-Year Structural Stability Deed) and consultation banner.
   - Signature Projects portfolio with smooth category tabs.
   - Precision Engineering 5-stage roadmap timeline.
   - Real client testimonials and interactive Dindigul headquarters map.

2. **About Us (`about.html` / `about.php`)**:
   - Elaborate, friendly narrative written in everyday, plain verbal terms for local families.
   - 6 clear promises for every homeowner.
   - **100% Brand Transparency Grid** (Tata Tiscon Fe 550D steel, UltraTech 53 grade cement, Finolex wires, Supreme pipes, Asian Paints Royale, etc.).
   - 5-step construction process from soil inspection to Grahapravesam.
   - Local Dindigul coverage areas (GTN Salai, MSP School, Palani Rd, Roundana, Chinnalapatti, Kodaikanal).
   - Common family questions (FAQ) with clear answers on bank home loans, NRI tracking, and turnkey scope.

3. **Our Projects (`projects.html` / `projects.php`)**:
   - Filterable showcase of residential villas, commercial hubs, and industrial PEB warehouses.

4. **Gallery (`gallery.html` / `gallery.php`)**:
   - High-definition architectural photography and site milestones.

5. **Contact Us (`contact.html` / `contact.php`)**:
   - Head office address details, direct helplines, WhatsApp live chat, interactive Google Map, and consultation inquiry form.

---

## 🚀 How to Deploy on GitHub Pages (Instant Client Review)

This repository includes a pre-built static HTML deployment (`index.html`, `about.html`, `projects.html`, `gallery.html`, `contact.html`) that works natively on GitHub Pages with zero build step required.

### 1. Initialize & Push to GitHub:
```bash
git init
git add .
git commit -m "Initial release: GK Construction Corporate Website"
git branch -M main
git remote add origin https://github.com/digidindigul/gk-construction.git
git push -u origin main
```

### 2. Enable GitHub Pages:
1. Open your repository on **GitHub.com** (`https://github.com/digidindigul/gk-construction`).
2. Go to **Settings** > **Pages** (in the left sidebar).
3. Under **Branch**, select `main` and folder `/ (root)`.
4. Click **Save**.
5. Your live website will be ready in under 1 minute at:
   `https://digidindigul.github.io/gk-construction/`

---

## 💻 Local Development (PHP & XAMPP)
To run the dynamic PHP version locally:
```bash
# Using PHP built-in server:
php -S localhost:8000

# Or place the folder inside XAMPP htdocs:
C:\xampp\htdocs\gk-construction-dindigul\
```
To re-generate the static HTML files after making edits to PHP files:
```bash
python export_static_for_github.py
```
