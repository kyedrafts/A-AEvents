<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title> Reservation </title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">

  <style>
    :root{
      --nav-bg:#fad7d5;
      --ink:#781727;
      --page-bg:#efe9e1;
      --panel:#f4d7cf;
      --panel-2:#f2cfc8;
      --border:#caa5a1;
      --border-2:#e7c8c3;
      --field:#ffffff;
      --field-text:#6b6b6b;
      --muted:#a67b82;
      --btn-dark:#6a2c36;
      --btn-light:#a37d86;
    }

    *{box-sizing:border-box}

    body{
      margin:0;
      background:var(--page-bg);
      font-family:'Montserrat', sans-serif;
      color:var(--ink);
    }

    .nav {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px 5%;
      background-color: #fad7d5;
      position: sticky;
      top: 0;
      z-index: 1000;
    }

    .menu-bar {
      font-size: 24px;
      cursor: pointer;
      color: #781727;
      flex: 1;
      display: flex;
      justify-content: flex-start;
      transition: transform 0.3s ease;
    }

    .nav-links {
      display: flex;
      gap: 30px;
      justify-content: center;
      flex: 2;
    }

    .nav-links a {
      text-decoration: none;
      color: #781727;
      transition: 0.4s;
      font-size: 14px;
    }

    .nav-links a:hover, .nav-links a.active {
      color: #f28aa1;
      font-weight: bold;
      text-decoration: none;
    }

    .logo {
      text-decoration: none;
      width: 45px;
      height: 45px;
      flex: 1;
      display: flex;
      justify-content: flex-end;
    }

    .logo img {
      width: 45px;
      height: 45px;
      border-radius: 50%;
      object-fit: cover;
      display: block;
    }

    .sidebar {
      height: 100%;
      width: 0;
      position: fixed;
      z-index: 2000;
      left: 0;
      background-color: white;
      overflow-x: hidden;
      transition: 0.6s;
      padding-top: 90px;
      border-right: 0.5px solid #f28aa1;
    }

    .sidebar a {
      padding: 20px 35px;
      text-decoration: none;
      font-size: 15px;
      color: #4a202a;
      display: block;
      transition: 0.3s;
    }

    .sidebar .closebtn {
      position: absolute;
      top: 0;
      right: 25px;
      font-size: 36px;
    }

    .wrap{
      max-width:1000px;
      margin:40px auto 70px;
      padding:0 20px;
    }

    .outer-frame{
      background:rgba(255,255,255,.35);
      border:6px solid #d9c7b6;
      padding:32px;
    }

    .form-card{
      background:linear-gradient(180deg, var(--panel), #f1d3cb 60%, #eed0c7);
      border:3px solid var(--border);
      padding:34px 34px 28px;
      position:relative;
      box-shadow:0 15px 35px rgba(120,23,39,.08);
      border-radius:12px;
    }

    .inner-stroke{
      position:absolute;
      inset:14px;
      border:2px solid var(--border-2);
      pointer-events:none;
      opacity:.9;
      border-radius:8px;
    }

    .section-title{
      font-weight:800;
      letter-spacing:.5px;
      margin:8px 0 16px;
      font-size:24px;
    }

    .subhead{
      margin-top:26px;
      display:flex;
      align-items:center;
      justify-content:space-between;
      flex-wrap:wrap;
      gap:10px;
    }

    .help{
      font-size:12px;
      color:rgba(120,23,39,.6);
      font-style:italic;
    }

    .label{
      font-family:'Playfair Display', serif;
      font-weight:700;
      font-size:18px;
      margin:16px 0 6px;
    }

    .grid-2{
      display:grid;
      grid-template-columns:1fr 1fr;
      gap:28px 50px;
    }

    .field, .pill, select, textarea{
      width:100%;
      border-radius:999px;
      border:1px solid transparent;
      background:var(--field);
      padding:10px 16px;
      font-size:13px;
      color:var(--field-text);
      outline:none;
      transition:all .25s ease;
    }

    textarea{
      border-radius:16px;
      resize:vertical;
      min-height:90px;
    }

    .field:focus, .pill:focus, select:focus, textarea:focus{
      border-color:var(--btn-dark);
      box-shadow:0 0 0 3px rgba(106,44,54,.15);
    }

    .guests-row{
      display:flex;
      gap:14px;
      flex-wrap:wrap;
      margin-top:6px;
    }

    .radio-line{
      display:flex;
      gap:20px;
      margin-top:12px;
      font-size:13px;
      font-weight:600;
      color:rgba(120,23,39,.75);
      flex-wrap:wrap;
    }

    input[type="radio"], input[type="checkbox"]{
      accent-color:var(--ink);
    }

    .inclusions-title{
      margin:30px 0 18px;
      font-family:'Playfair Display', serif;
      font-weight:700;
      font-size:22px;
    }

    .inclusions-grid{
      display:grid;
      grid-template-columns:1fr 1fr;
      gap:30px 60px;
    }

    .checklist{
      display:grid;
      gap:12px;
    }

    .check-item{
      display:flex;
      align-items:center;
      gap:10px;
      font-weight:600;
      font-size:14px;
    }

    .meeting-grid{
      margin-top:10px;
      display:grid;
      grid-template-columns:1fr 1fr;
      gap:28px 50px;
    }

    .actions{
      display:flex;
      justify-content:flex-end;
      gap:16px;
      margin-top:28px;
    }

    .btn{
      border:0;
      padding:10px 28px;
      border-radius:999px;
      font-weight:700;
      font-family:'Playfair Display', serif;
      cursor:pointer;
      transition:all .25s ease;
    }

    .btn.submit{
      background:var(--btn-dark);
      color:#fff;
    }

    .btn.submit:hover{
      transform:translateY(-2px);
      box-shadow:0 8px 18px rgba(0,0,0,.15);
    }

    .btn.alt{
      background:var(--btn-light);
      color:#fff;
    }

    .btn.alt:hover{
      opacity:.9;
      transform:translateY(-2px);
    }

    .full, .partial, .on-the-day {
      display: none;
      margin-top: 10px;   
      padding: 5px;     
    }

    input[type="number"] {
      padding: 8px 12px;
      font-size: 13px;
      border-radius: 999px;
      background-color: #f9f9f9;
      transition: border-color 0.3s ease;
    }

    @media (max-width:900px){
      .grid-2, .meeting-grid, .inclusions-grid{
        grid-template-columns:1fr;
      }
      .actions{
        justify-content:center;
      }
    }
  </style>
</head>

<body>
  <nav class="nav">
    <div class="menu-bar" onclick="toggleSidebar()">☰</div>
    <div class="nav-links">
      <a href="index.html">Home</a>
      <a href="2AboutUs.html">About Us</a>
      <a href="3WeddingPackage.html">Wedding Packages</a>
      <a href="4Reviews.html">Reviews</a>
      <a href="5Reservation.php" class="active">Reservation</a>
    </div>
    <a href="index.html" class="logo">
      <img src="logo.jpg" alt="A&A Logo">
    </a>
  </nav>

  <div id="sidebar" class="sidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="toggleSidebar()">×</a>
    <a href="0Menu_Budget.html">BUDGET</a>
    <a href="0Menu_Expect.html">WHAT TO EXPECT</a>
    <a href="0Menu_Vendors.html">VENDORS</a>
    <a href="0Menu_Venues.html">VENUES</a>
  </div>

  <main class="wrap">
    <div class="outer-frame">
      <form class="form-card" action="submit.php" method="POST">
        <div class="inner-stroke"></div>

        <div class="section-title">CONTACT DETAILS</div>

        <div class="grid-2">
          <div>
            <div class="label">Name</div>
            <div style="display:grid;grid-template-columns:1fr 1fr;gap:14px;">
              <input class="field" name="first_name" placeholder="First" required>
              <input class="field" name="last_name" placeholder="Last" required>
            </div>

            <div class="label">Email Address</div>
            <input class="field" type="email" name="email" placeholder="example@email.com" required>

            <div class="label">Phone Number</div>
            <input class="field" type="tel" name="phone" placeholder="+63..." required>
          </div>

          <div>
            <div class="label">Social Media Link</div>
            <input class="field" name="social_media" placeholder="Instagram or Facebook link">

            <div class="label">How did you hear about us?</div>
            <select name="referral_source">
              <option value="">Select one</option>
              <option>Google</option>
              <option>Recommendation</option>
              <option>Social Media</option>
              <option>Website</option>
              <option>Others</option>
            </select>
          </div>
        </div>

        <div class="subhead">
          <div class="section-title">WEDDING INQUIRY</div>
          <div class="help">You may leave this blank if still undecided</div>
        </div>

        <div class="grid-2">
          <div>
            <div class="label">Wedding Date</div>
            <input class="field" type="date" name="wedding_date">

            <div class="label">Church Location</div>
            <input class="field" name="church_location" placeholder="City / Church Name">

            <div class="label">Color Theme</div>
            <input class="field" name="color_theme" placeholder="Blush, Neutral, etc.">
          </div>

          <div>
            <div class="label">Package Type</div>
            <select name="package_type" class="package-menu">
              <option value="">Select package</option>
              <option value = "full">Full Coordination</option>
              <option value = "partial">Partial Coordination</option>
              <option value = "on-the-day">On-the-day Coordination</option>
            </select>

            <div class="label">Reception Location</div>
            <input class="field" name="reception_location" placeholder="Venue name">

            <div class="label">Estimated Guests</div>
            <div class="guests-row">
              <input class="pill" type="number" name="guest_adults" placeholder="Adults" min="0">
              <input class="pill" type="number" name="guest_kids" placeholder="Kids" min="0">
            </div>

            <div class="radio-line">
              <label><input type="radio" name="timeblock" value="Daytime only"> Daytime only</label>
              <label><input type="radio" name="timeblock" value="Daytime and Night"> Daytime and Night</label>
            </div>
          </div>
        </div>

            <div class = "full">
              <div class="inclusions-title">Select preferred package</div>
                <div class="radio-line">
                  <label><input type="radio" name="package_type" value="Package-1"> Package 1</label>
                  <label><input type="radio" name="package_type" value="Package-2"> Package 2</label>
                </div>
                <div class="inclusions-title">Select preferred inclusions</div>

                <div class="inclusions-grid">
                  <div class="checklist">
                    <label class="check-item"><input type="checkbox" name="priority[]" value="Plated Dinner"> Plated Dinner</label>
                    <label class="check-item"><input type="checkbox" name="priority[]" value="Photographer"> Photographer</label>
                    <label class="check-item"><input type="checkbox" name="priority[]" value="Coordinator"> Coordinator</label>
                    <label class="check-item"><input type="checkbox" name="priority[]" value="Buffet Style"> Buffet Style</label>
                    <label class="check-item"><input type="checkbox" name="priority[]" value="Host"> Host</label>
                    <label class="check-item"><input type="checkbox" name="priority[]" value="Hair & Make-Up"> Hair & Make-Up</label>
                  </div>

                  <div class="checklist">
                    <label class="check-item"><input type="checkbox" name="additional[]" value="Mobile Bars"> Mobile Bars</label>
                    <label class="check-item"><input type="checkbox" name="additional[]" value="Grazing Table"> Grazing Table</label>
                    <label class="check-item"><input type="checkbox" name="additional[]" value="Dessert Booth"> Dessert Booth</label>
                    <label class="check-item"><input type="checkbox" name="additional[]" value="Perfume Bar"> Perfume Bar</label>
                    <label class="check-item"><input type="checkbox" name="additional[]" value="Coffee Booth"> Coffee Booth</label>
                    <label class="check-item"><input type="checkbox" name="additional[]" value="Photo Booth"> Photo Booth</label>
                  </div>
                </div>
            </div>

            <div class = "partial">
              <div class="inclusions-title">Select preferred package</div>
                <div class="radio-line">
                  <label><input type="radio" name="package_type" value="Package-1"> Package 1</label>
                  <label><input type="radio" name="package_type" value="Package-2"> Package 2</label>
                </div>
                <div class="label">Inclusions to be removed:</div>
              <textarea name="meeting_agenda" placeholder="Is there any inclusions you want to remove?"></textarea>
            </div>

            <div class = "on-the-day">
                <div class="label">How many coordinators do you need for your wedding?</div>
              <input class="pill" type="number" name="coordinators" placeholder="Coordinators" min="1" max="6">
            </div>
        
        <div class="section-title" style="margin-top:30px;">MEETING</div>
        <div class="meeting-grid">
          <div>
            <div class="label">Preferred Date</div>
            <input class="field" type="date" name="meeting_date">
          </div>

          <div>
            <div class="label">Preferred Time</div>
            <input class="field" type="time" name="meeting_time">
          </div>

          <div>
            <div class="label">Location</div>
            <input class="field" name="meeting_location" placeholder="Online or Office">
          </div>

          <div>
            <div class="label">Agenda</div>
            <textarea name="meeting_agenda" placeholder="What would you like to discuss?"></textarea>
          </div>
        </div>

        <div class="actions">
          <button class="btn submit" type="submit">Submit</button>
          <button class="btn alt" type="button" onclick="window.location.href='2AboutUs.html'">Contact Us</button>
        </div>

        <input type="hidden" name="_subject" value="New Wedding Reservation Inquiry">
        <input type="hidden" name="_captcha" value="false">
      </form>
    </div>
  </main>

  <script>
    function toggleSidebar(){
      const sidebar = document.getElementById("sidebar");
      sidebar.style.width = sidebar.style.width === "250px" ? "0" : "250px";
    }

    //////

    const menu = document.querySelector(".package-menu");

    menu.addEventListener("change", function() {

      document.querySelectorAll(".full, .partial, .on-the-day").forEach(div => {
        div.style.display = "none";
      });

      if (this.value) {
        document.querySelector("." + this.value).style.display = "block";
      }
      });
  </script>
</body>

</html>
