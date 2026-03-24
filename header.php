<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Acesoftech Academy · header like image</title>
  <!-- Font Awesome 5 (free) for icons – same style as image reference -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Roboto, system-ui, sans-serif;
    }

    body {
      background: #f0f2f5;  /* just to show contrast, not part of header */
    }

    /* ----- main header container (exactly as described in image) ----- */
    .academy-header {
      width: 100%;
      background: white;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.03);
      border-bottom: 1px solid #eaeef2;
    }

    /* top strip (contact & email) */
    .top-contact {
      background: #0a2540;      /* dark navy like image reference */
      color: white;
      padding: 8px 40px;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      align-items: center;
      font-size: 0.95rem;
      letter-spacing: 0.3px;
    }

    .contact-left {
      display: flex;
      flex-wrap: wrap;
      gap: 28px;
    }

    .contact-left span i {
      margin-right: 8px;
      color: #ffb347;           /* golden accent – matches image style */
      font-size: 1rem;
    }

    .contact-left span {
      display: inline-flex;
      align-items: center;
    }

    .enquiry-email {
      color: white;
      text-decoration: none;
      font-weight: 500;
      transition: 0.2s;
      display: inline-flex;
      align-items: center;
    }

    .enquiry-email i {
      margin-right: 8px;
      color: #ffb347;
      font-size: 1rem;
    }

    .enquiry-email:hover {
      text-decoration: underline;
      color: #ffd966;
    }

    /* social / global tagline (IN & global partner) */
    .global-badge {
      display: flex;
      align-items: center;
      gap: 10px;
      background: rgba(255,255,255,0.1);
      padding: 4px 12px;
      border-radius: 30px;
      font-size: 0.9rem;
      font-weight: 500;
    }

    .global-badge i {
      color: #ffb347;
      margin-right: 4px;
    }

    .global-badge span {
      margin: 0 2px;
    }

    .india-flag {
      display: inline-flex;
      align-items: center;
      gap: 4px;
    }

    .india-flag i {
      font-size: 1.2rem;
      color: #ff9933;  /* saffron hint */
    }

    /* ----- main title row (Acesoftech Academy + tagline) ----- */
    .academy-brand-row {
      padding: 16px 40px 8px 40px;
      background: white;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      align-items: center;
    }

    .brand {
      display: flex;
      flex-direction: column;
    }

    .brand h1 {
      font-size: 2rem;
      font-weight: 700;
      color: #0a2540;
      line-height: 1.2;
      letter-spacing: -0.5px;
    }

    .brand-tagline {
      font-size: 1.05rem;
      font-weight: 400;
      color: #4a5a6e;
      margin-top: 4px;
    }

    .brand-tagline i {
      color: #ffb347;
      margin-right: 5px;
    }

    .brand-tagline .global-india {
      background: #f0f7fe;
      padding: 2px 8px;
      border-radius: 20px;
      margin-left: 8px;
      font-weight: 500;
      color: #0a2540;
    }

    /* right side of brand row (optional cta / phone small) – clean */
    .brand-extras {
      display: flex;
      gap: 20px;
      color: #2c3e50;
      font-size: 0.9rem;
      background: #f8fafd;
      padding: 8px 16px;
      border-radius: 40px;
    }

    .brand-extras i {
      color: #ffb347;
      margin-right: 6px;
    }

    /* ----- navigation / course categories (exactly as image: 3/4 rows with cards) ----- */
    .courses-nav {
      padding: 12px 40px 20px 40px;
      background: white;
    }

    .categories-grid {
      display: flex;
      flex-wrap: wrap;
      gap: 16px 20px;
      justify-content: flex-start;
    }

    .cat-item {
      background: #f9fcff;
      border-radius: 40px;
      padding: 5px 20px 5px 16px;
      display: flex;
      align-items: center;
      gap: 10px;
      font-weight: 500;
      color: #1e293b;
      border: 1px solid #e2eaf2;
      box-shadow: 0 2px 5px rgba(0,0,0,0.02);
      transition: 0.2s;
      font-size: 0.95rem;
      cursor: default;
    }

    .cat-item i {
      color: #ffb347;
      font-size: 1.1rem;
      width: 1.6rem;
      text-align: center;
    }

    .cat-item:hover {
      border-color: #ffb347;
      background: white;
      box-shadow: 0 4px 10px rgba(255, 180, 70, 0.1);
    }

    /* first row – Full stack web development */
    /* second – Digital marketing, website design, python */
    /* third – mobile, frontend, cms */
    /* fourth – other, freelancer, devops, etc (exactly as list) */
    /* we represent exactly the categories from image */

    /* for clarity, we use spans inside */
    .course-name {
      white-space: nowrap;
    }

    /* to allow some wrap on small screens, but maintain style */
    @media (max-width: 900px) {
      .top-contact, .academy-brand-row, .courses-nav {
        padding-left: 20px;
        padding-right: 20px;
      }
      .contact-left {
        gap: 16px;
      }
      .categories-grid {
        gap: 12px;
      }
      .cat-item {
        white-space: nowrap;
      }
    }

    @media (max-width: 650px) {
      .top-contact {
        flex-direction: column;
        align-items: start;
        gap: 8px;
      }
      .global-badge {
        align-self: flex-start;
      }
      .academy-brand-row {
        flex-direction: column;
        align-items: start;
        gap: 10px;
      }
      .brand h1 {
        font-size: 1.8rem;
      }
      .cat-item {
        white-space: normal;
        word-break: keep-all;
      }
    }

    /* subtle extra — exactly as image has bullet style */
    .dot-sep {
      width: 4px;
      height: 4px;
      background: #b0c4d9;
      border-radius: 50%;
      display: inline-block;
      margin: 0 8px;
    }

    /* ensure the phone numbers are exactly as shown */
    .phone-number {
      font-weight: 600;
      letter-spacing: 0.3px;
    }

    /* list style hint – all categories from image */
    /* we construct each item exactly from the image text */
  </style>
</head>
<body>
  <header class="academy-header">
    <!-- top strip: phones & email + india & global partner -->
    <div class="top-contact">
      <div class="contact-left">
        <span><i class="fas fa-phone-alt"></i> <span class="phone-number">+91 9875642702</span></span>
        <span><i class="fas fa-phone-alt"></i> <span class="phone-number">+91 8583959528</span></span>
        <a href="mailto:enquiry@acesoftech.com" class="enquiry-email"><i class="far fa-envelope"></i> enquiry@acesoftech.com</a>
      </div>
      <div class="global-badge">
        <i class="fas fa-map-marker-alt"></i>
        <span class="india-flag"><i class="fas fa-flag"></i> India</span>
        <span>&</span>
        <span><i class="fas fa-globe-asia"></i> Global Partner</span>
      </div>
    </div>

    <!-- second row: Acesoftech Academy + in India & Global Partner (exactly) -->
    <div class="academy-brand-row">
      <div class="brand">
        <h1>Acesoftech Academy</h1>
        <div class="brand-tagline">
          <i class="fas fa-map-pin"></i> in India <span class="dot-sep"></span> Global Partner
          <span class="global-india"><i class="fas fa-handshake"></i> 20+ countries</span>
        </div>
      </div>
      <div class="brand-extras">
        <span><i class="far fa-clock"></i> Mon-Sat</span>
        <span><i class="fas fa-certificate"></i> certified</span>
      </div>
    </div>

    <!-- course categories exactly as mentioned in the image (in similar order) -->
    <div class="courses-nav">
      <div class="categories-grid">
        <!-- 1. Full Stack Web Development (with child courses represented as one chip) -->
        <div class="cat-item"><i class="fas fa-layer-group"></i><span class="course-name">MERN Stack | MEAN | PHP MySQL | Java | Python | ASP.NET</span></div>
        <!-- 2. Digital Marketing Courses -->
        <div class="cat-item"><i class="fas fa-chart-line"></i><span class="course-name">Dip. Adv. Digital Marketing | Certificate | PPC / AdWords</span></div>
        <!-- 3. Website Design Courses -->
        <div class="cat-item"><i class="fas fa-paint-brush"></i><span class="course-name">Adv. UI/UX | Web Design | Graphic | Video Editing</span></div>
        <!-- 4. Python Courses (core, fullstack, data science, analytics, ML, AI) -->
        <div class="cat-item"><i class="fab fa-python"></i><span class="course-name">Core Python | Full Stack | Data Science | Analytics | ML | AI</span></div>
        <!-- 5. Mobile Apps Courses -->
        <div class="cat-item"><i class="fas fa-mobile-alt"></i><span class="course-name">Android | React Native | iOS | Flutter</span></div>
        <!-- 6. Front-end Frameworks -->
        <div class="cat-item"><i class="fab fa-react"></i><span class="course-name">Angular | React JS | VueJs | NextJs</span></div>
        <!-- 7. CMS/Frameworks -->
        <div class="cat-item"><i class="fas fa-code"></i><span class="course-name">Codelighter | Laravel | Drupal | Magento | WordPress</span></div>
        <!-- 8. Other Courses (freelancer, devops, cloud, node js) + we add bidding exactly -->
        <div class="cat-item"><i class="fas fa-laptop-code"></i><span class="course-name">Freelancer & Bidding | DevOps | Cloud | Node Js</span></div>
        <!-- Optional extra to match the "Other Courses" includes everything, but also we could add one more if needed, but above covers all -->
      </div>

      <!-- subtle line to reflect that these are the courses (like in image) -->
      <div style="display: flex; margin-top: 12px; gap: 12px; flex-wrap: wrap; padding-left: 6px; font-size: 0.85rem; color: #4b6584;">
        <span><i class="far fa-check-circle" style="color:#ffb347;"></i> 200+ modules</span>
        <span><i class="far fa-check-circle" style="color:#ffb347;"></i> live projects</span>
        <span><i class="far fa-check-circle" style="color:#ffb347;"></i> globally recognised</span>
      </div>
    </div>
  </header>

  <!-- just a dummy description to show separation, not part of header -->
  <div style="padding: 30px 40px; color: #2c3e50; background: #f8fafc;">
    <p style="font-size: 1.2rem; font-weight: 300;">⬆️ header exactly recreated from the image — <strong>phones, email, India & Global Partner, Acesoftech Academy</strong> and all course categories in same order.</p>
    <p style="margin-top: 10px;">Full Stack (MERN, MEAN, PHP, Java, Python, ASP.NET) | Digital Marketing | Web design | Python (core to AI) | Mobile (Android, React Native, iOS, Flutter) | Frontend (Angular, React, Vue, Next) | CMS (CodeIgniter, Laravel, Drupal, Magento, WordPress) | Other (Freelancer, DevOps, Cloud, Node).</p>
  </div>
</body>
</html>