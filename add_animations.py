import re

# 1. Update index.php
index_path = r"C:\Users\visha\.gemini\antigravity\scratch\gk-construction-dindigul\index.php"
with open(index_path, "r", encoding="utf-8") as f:
    idx = f.read()

# Stats
idx = idx.replace(
    '<?php foreach ($company_stats as $stat): ?>\n                <div class="stat-box">',
    '<?php $stat_i = 1; foreach ($company_stats as $stat): ?>\n                <div class="stat-box fade-in-up delay-<?php echo $stat_i++; ?>">'
)

# About layout
idx = idx.replace(
    '<div class="about-single-img-wrap">',
    '<div class="about-single-img-wrap fade-in-left">'
)
idx = idx.replace(
    '<!-- Right: Punchy Concise Copy with Visual Highlight Cards -->\n            <div>',
    '<!-- Right: Punchy Concise Copy with Visual Highlight Cards -->\n            <div class="fade-in-right">'
)

# Services section
idx = idx.replace(
    '<section class="section section-black" id="services">\n    <div class="container">\n        <div class="section-header">',
    '<section class="section section-black" id="services">\n    <div class="container">\n        <div class="section-header fade-in-left">'
)

# Service cards
for i in range(1, 7):
    old_card = f'<!-- Service {i} -->\n            <div class="service-card-dark">'
    new_card = f'<!-- Service {i} -->\n            <div class="service-card-dark fade-in-up delay-{i}">'
    idx = idx.replace(old_card, new_card)

# Why GK Section
idx = idx.replace(
    '<section class="section section-why-gk" id="why-gk">\n    <div class="container">\n        <!-- Section Header -->\n        <div class="section-header text-center">',
    '<section class="section section-why-gk" id="why-gk">\n    <div class="container">\n        <!-- Section Header -->\n        <div class="section-header text-center fade-in-right">'
)

for i in range(1, 6):
    old_card = f'<!-- Card {i}:'
    # match <div class="why-gk-card"> right after
    pattern = rf'(<!-- Card {i}:[^\n]*\n\s*<div class=")why-gk-card(")'
    idx = re.sub(pattern, rf'\1why-gk-card fade-in-up delay-{i}\2', idx)

idx = idx.replace(
    '<div class="why-gk-cta-banner">',
    '<div class="why-gk-cta-banner fade-in-up">'
)

# Projects section
idx = idx.replace(
    '<section class="section section-white" id="projects">\n    <div class="container">\n        <div class="section-header">',
    '<section class="section section-white" id="projects">\n    <div class="container">\n        <div class="section-header fade-in-left">'
)

idx = idx.replace(
    '<div class="project-filters">',
    '<div class="project-filters fade-in-up">'
)

# Process section
idx = idx.replace(
    '<section class="section section-black" id="process">\n    <div class="container">\n        <div class="section-header text-center">',
    '<section class="section section-black" id="process">\n    <div class="container">\n        <div class="section-header text-center fade-in-left">'
)

# Testimonials section
idx = idx.replace(
    '<section class="section section-white" id="testimonials">\n    <div class="container">\n        <div class="section-header text-center">',
    '<section class="section section-white" id="testimonials">\n    <div class="container">\n        <div class="section-header text-center fade-in-right">'
)

# Location box
idx = idx.replace(
    '<div class="location-box">\n            <div>',
    '<div class="location-box">\n            <div class="fade-in-left">'
)
idx = idx.replace(
    '<!-- Clean High-Clarity Dindigul Central Map Embed -->\n            <div style="border-radius: var(--radius-lg);',
    '<!-- Clean High-Clarity Dindigul Central Map Embed -->\n            <div class="fade-in-right" style="border-radius: var(--radius-lg);'
)

with open(index_path, "w", encoding="utf-8") as f:
    f.write(idx)

print("Updated index.php with animation classes.")

# 2. Update about.php
about_path = r"C:\Users\visha\.gemini\antigravity\scratch\gk-construction-dindigul\about.php"
with open(about_path, "r", encoding="utf-8") as f:
    abt = f.read()

# Stats
abt = abt.replace(
    '<?php foreach ($company_stats as $stat): ?>\n                <div class="stat-box">',
    '<?php $st_i = 1; foreach ($company_stats as $stat): ?>\n                <div class="stat-box fade-in-up delay-<?php echo $st_i++; ?>">'
)

# Section 1: Our Story
abt = abt.replace(
    '<div class="about-single-img-wrap">',
    '<div class="about-single-img-wrap fade-in-left">'
)
abt = abt.replace(
    '<!-- Right: Warm, Plain-Language Story -->\n            <div>',
    '<!-- Right: Warm, Plain-Language Story -->\n            <div class="fade-in-right">'
)

# Section 3: 6 Promises
abt = abt.replace(
    '<div class="section-header text-center">\n            <div class="badge-tag-dark"><i class="fa-solid fa-handshake text-gold"></i> Our Guarantees</div>',
    '<div class="section-header text-center fade-in-left">\n            <div class="badge-tag-dark"><i class="fa-solid fa-handshake text-gold"></i> Our Guarantees</div>'
)

# Section 4: Brand Transparency
abt = abt.replace(
    '<div class="section-header text-center">\n            <div class="badge-tag"><i class="fa-solid fa-certificate text-gold"></i> Brand Transparency</div>',
    '<div class="section-header text-center fade-in-right">\n            <div class="badge-tag"><i class="fa-solid fa-certificate text-gold"></i> Brand Transparency</div>'
)

# Brand cards
abt = abt.replace('<div class="material-card">', '<div class="material-card fade-in-up">')

# Section 5: Process
abt = abt.replace(
    '<div class="section-header text-center">\n            <div class="badge-tag-dark"><i class="fa-solid fa-list-check text-gold"></i> How We Work</div>',
    '<div class="section-header text-center fade-in-left">\n            <div class="badge-tag-dark"><i class="fa-solid fa-list-check text-gold"></i> How We Work</div>'
)

# Process cards
abt = abt.replace('<div class="process-card-dark">', '<div class="process-card-dark fade-in-up">')

# Section 6: Local Areas
abt = abt.replace('<div class="service-areas-wrap">', '<div class="service-areas-wrap fade-in-up">')

# Section 7: FAQ
abt = abt.replace(
    '<div class="section-header text-center">\n            <div class="badge-tag"><i class="fa-solid fa-circle-question text-gold"></i> Got Questions?</div>',
    '<div class="section-header text-center fade-in-right">\n            <div class="badge-tag"><i class="fa-solid fa-circle-question text-gold"></i> Got Questions?</div>'
)

# Alternate FAQ cards left and right
faq_matches = list(re.finditer(r'<div class="faq-card">', abt))
for i, m in enumerate(reversed(faq_matches)):
    cls = "fade-in-left" if i % 2 == 0 else "fade-in-right"
    abt = abt[:m.start()] + f'<div class="faq-card {cls}">' + abt[m.end():]

with open(about_path, "w", encoding="utf-8") as f:
    f.write(abt)

print("Updated about.php with animation classes.")

# 3. Update contact.php
contact_path = r"C:\Users\visha\.gemini\antigravity\scratch\gk-construction-dindigul\contact.php"
with open(contact_path, "r", encoding="utf-8") as f:
    cnt = f.read()

cnt = cnt.replace(
    '<div class="contact-info-pane">',
    '<div class="contact-info-pane fade-in-left">'
)
cnt = cnt.replace(
    '<div class="contact-form-pane">',
    '<div class="contact-form-pane fade-in-right">'
)

with open(contact_path, "w", encoding="utf-8") as f:
    f.write(cnt)

print("Updated contact.php with animation classes.")
