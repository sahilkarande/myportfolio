<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sahil's Portfolio</title>
    <!--
      - favicon
      -->
    <link rel="shortcut icon" href="./assets/images/Slogo.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.css">

    <link rel="stylesheet" href="./assets/css/style.css">
    <!--
      - google font link
      -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
  </head>
  <body>
    <div id="myModal" class="modal">
      <span class="close" onclick="closeModal()">&times;</span>
      <img class="modal-content" id="modalImage">
    </div>
    <main>
      <aside class="sidebar" data-sidebar>
        <div class="sidebar-info">
          <figure class="avatar-box">
            <img src="assets/images/dp2.png" alt="Sahil Karande" data-src="assets/images/Passport_photo.jpg" onclick="openModal(this)">
            <ion-icon name="eye-outline" class="eye-icon"></ion-icon>
          </figure>
          <div class="info-content">
            <h1 class="name" title="Sahil Karande">Sahil Karande</h1>
            <p class="title" >Bachelor of Technology Graduate <br> Computer Engineering</p>
            <br>
            <p class="title">Data Science Aspirant</p>
          </div>
          <button class="info_more-btn" data-sidebar-btn>
            <span>Show Contacts</span>
            <ion-icon name="chevron-down"></ion-icon>
          </button>
        </div>
        <div class="sidebar-info_more">
          <div class="separator"></div>
          <ul class="contacts-list">
            <li class="contact-item">
              <div class="icon-box">
                <ion-icon name="mail-outline"></ion-icon>
              </div>
              <div class="contact-info">
                <p class="contact-title">Email</p>
                <a href="mailto:richard@example.com" class="contact-link">skarande220@gmail.com</a>
              </div>
            </li>
            <li class="contact-item">
              <div class="icon-box">
                <ion-icon name="phone-portrait-outline"></ion-icon>
              </div>
              <div class="contact-info">
                <p class="contact-title">Phone</p>
                <a href="tel:+12133522795" class="contact-link">+91 9881678709</a>
              </div>
            </li>
            <li class="contact-item">
              <div class="icon-box">
                <ion-icon name="calendar-outline"></ion-icon>
              </div>
              <div class="contact-info">
                <p class="contact-title">Birthday</p>
                <time datetime="1982-06-23">November 22, 2001</time>
              </div>
            </li>
            <li class="contact-item">
              <div class="icon-box">
                <ion-icon name="location-outline"></ion-icon>
              </div>
              <div class="contact-info">
                <p class="contact-title">Current Location</p>
                <address>Pune, Maharashtra, India</address>
              </div>
            </li>
          </ul>
          <div class="separator"></div>
          <ul class="social-list">
            <li class="social-item">
              <a href="https://twitter.com/Sahilkarande9" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>
            <li class="social-item">
              <a href="https://www.instagram.com/escaee/" class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>
            <li class="social-item">
              <a href="https://mail.google.com/" class="social-link">
                <ion-icon name="mail-outline"></ion-icon>
              </a>
            </li>
            <li class="social-item">
              <a href="https://www.linkedin.com/in/sahil-karande-a77aa7207/" class="social-link">
                <ion-icon name="logo-linkedin"></ion-icon>
              </a>
            </li>
            <li class="social-item">
              <a href="https://github.com/sahilkarande" class="social-link">
                <ion-icon name="logo-github"></ion-icon>
              </a>
            </li>
            <li class="social-item">
              <a href="https://wa.me/+919881678709" class="social-link">
                <ion-icon name="logo-whatsapp"></ion-icon>
              </a>
            </li>
          </ul>
        </div>
      </aside>
      <!--
        - #main-content
        -->
      <div class="main-content">
        <!--
          - #NAVBAR
          -->
        <nav class="navbar">
          <ul class="navbar-list">
            <li class="navbar-item">
              <button class="navbar-link  active" data-nav-link>About</button>
            </li>
            <li class="navbar-item">
              <button class="navbar-link" data-nav-link>Resume</button>
            </li>
            <li class="navbar-item">
              <button class="navbar-link" data-nav-link>Projects</button>
            </li>
            <li class="navbar-item">
              <button class="navbar-link" data-nav-link>Certificates</button>
            </li>
            <li class="navbar-item">
              <button class="navbar-link" data-nav-link>Contact</button>
            </li>
          </ul>
        </nav>
        <!--
          - #ABOUT
          -->
        <article class="about  active" data-page="about">
          <header>
            <h2 class="h2 article-title">About me</h2>
          </header>
          <section class="about-text">
            <p>I am a passionate Computer Engineering graduate with a strong focus on data science, analytics, and data engineering. My professional journey includes working as an IoT Intern at Solar Industries India Ltd., where I gained hands-on experience with big data, enhanced manufacturing processes, and developed interactive dashboards using tools like Power BI and Excel. My internship at Clustor Computing further deepened my expertise in data science, where I built dynamic Excel dashboards and Power BI reports to accelerate business decision-making.</p>
            <p>I have also worked on significant projects, including "InsightHub: Your Personal Data Analytics Companion" and "Stock Market Prediction of BSE and NSE Companies," where I applied my skills in machine learning, data analysis, and predictive modeling. These experiences have allowed me to work with technologies like Python, TensorFlow, and data visualization tools, driving innovation and delivering actionable insights.</p>
            <p>In addition to my technical experience, I have taken on leadership roles in organizations like the Google Developer Student Clubs (GDSC), where I organized successful seminars that enhanced my leadership and project management skills. I am driven by a commitment to continuous learning and growth, and I am excited to explore innovative solutions in data science, machine learning, and AI.</p>
            <p>Thank you for visiting my portfolio. I look forward to connecting with fellow professionals and exploring new opportunities that align with my expertise and passion.</p>
          </section>
          <!--
            - service
            -->
          <section class="service">
            <h3 class="h3 service-title">What i'm doing</h3>
            <ul class="service-list">
              <li class="service-item">
                <div class="service-icon-box">
                  <img src="./assets/images/icons8-data-analytics-68.png" alt="Data Science icon" width="40">
                </div>
                <div class="service-content-box">
                  <h4 class="h4 service-item-title">Data Science & Analytics</h4>
                  <p class="service-item-text">
                    Exploring the world of data science through hands-on projects and agile methodologies. Utilizing tools like Microsoft Excel, Word, PowerPoint, PowerBI, and Tableau to analyze and visualize data effectively.
                  </p>
                </div>
              </li>
              <li class="service-item">
                <div class="service-icon-box">
                  <img src="./assets/images/icon-design.svg
                    " alt="design icon" width="40">
                </div>
                <div class="service-content-box">
                  <h4 class="h4 service-item-title">Web design</h4>
                  <p class="service-item-text">
                    The most modern and high-quality design made at a professional level.
                  </p>
                </div>
              </li>
              <li class="service-item">
                <div class="service-icon-box">
                  <img src="./assets/images/icons8-web-development-50.png" alt="Code icon" width="40">
                </div>
                <div class="service-content-box">
                  <h4 class="h4 service-item-title">Web Development</h4>
                  <p class="service-item-text">
                    Crafting modern and high-quality websites using HTML, CSS, JavaScript, and PHP. Proficient in building custom web applications and user-friendly interfaces.
                  </p>
                </div>
              </li>
              <li class="service-item">
                <div class="service-icon-box">
                  <img src="./assets/images/icons8-management-50.png" alt="Communication icon" width="40">
                </div>
                <div class="service-content-box">
                  <h4 class="h4 service-item-title">Management & Communication</h4>
                  <p class="service-item-text">
                    Proficient in team management and effective communication. Organized successful seminars with the Google Developer Student Clubs (GDSC), enhancing technical, leadership, and project management skills.
                  </p>
                </div>
              </li>
              <li class="service-item">
                <div class="service-icon-box">
                  <img src="./assets/images/icon-photo.svg" alt="camera icon" width="40">
                </div>
                <div class="service-content-box">
                  <h4 class="h4 service-item-title">Photography</h4>
                  <p class="service-item-text">
                    I make high-quality photos of any category at a professional level.
                  </p>
                </div>
              </li>
              <li class="service-item">
                <div class="service-icon-box">
                  <img src="./assets/images/icons8-future-50.png" alt="Future icon" width="40">
                </div>
                <div class="service-content-box">
                  <h4 class="h4 service-item-title">The Future</h4>
                  <p class="service-item-text">
                    Excited about the ever-evolving tech industry and committed to continuous learning. Ready to contribute to organizations that value innovation, creativity, and excellence.
                  </p>
                </div>
              </li>
            </ul>
          </section>
          <!--
            - testimonials
            -->
          <section class="testimonials">
            <h3 class="h3 testimonials-title">Testimonials</h3>
            <ul class="testimonials-list has-scrollbar">
              <li class="testimonials-item">
                <div class="content-card" data-testimonials-item>
                  <figure class="testimonials-avatar-box">
                    <img src="./assets/images/memo_12.png" alt="Mayuri Nerkar" width="60" data-testimonials-avatar>
                  </figure>
                  <h4 class="h4 testimonials-item-title" data-testimonials-title>Mayuri Nerkar</h4>
                  <span style="font-size: 12px; padding-left: 96px; color: rgb(183, 168, 168);">HR Executive Clustor Computing</span> <br>
                  <div class="testimonials-text" data-testimonials-text>
                    <p>
                      During his time at CLUSTOR COMPUTING, he was punctual, hardworking inquisitive.
                      We would like to wish him best of luck for future endeavors and firmly believe that he would become an integral part of a future workplace.
                    </p>
                  </div>
                </div>
              </li>
              <li class="testimonials-item">
                <div class="content-card" data-testimonials-item>
                  <figure class="testimonials-avatar-box">
                    <img src="./assets/images/avatar-3.png" alt="Appxbuild" width="60" data-testimonials-avatar>
                  </figure>
                  <h4 class="h4 testimonials-item-title" data-testimonials-title>APPXBUILD TECHNOLOGIES PVT LTD</h4>
                  <div class="testimonials-text" data-testimonials-text>
                    <p>
                      During his internship at our firm APPXBUILD we found his performance satisfied.
                      We wish him very best in his future endeavours
                    </p>
                  </div>
                </div>
              </li>
              <li class="testimonials-item">
                <div class="content-card" data-testimonials-item>
                  <figure class="testimonials-avatar-box">
                    <img src="./assets/images/memo_35.png" alt="Bhairav Badage" width="60" data-testimonials-avatar>
                  </figure>
                  <h4 class="h4 testimonials-item-title" data-testimonials-title>Bhairav Badage</h4>
                  <span style="font-size: 12px; padding-left: 96px; color: rgb(183, 168, 168);">GDSC Lead 2021-22</span> <br>
                  <div class="testimonials-text" data-testimonials-text>
                    <p>
                      I wanted to express my heartfelt gratitude for your exceptional contributions 
                      to our GDSC community at SVPCET. Your dedication in building and nurturing 
                      our developer community, reaching out to students, and cooperating with the 
                      core team has been invaluable. As I may not send emails like this in the future, 
                      I hope we can stay connected and continue to share our personal and professional growth. 
                      Your commitment to GDSC has been truly remarkable, and 
                      I wish you all the best in your future endeavors as part of the Google Developers community
                    </p>
                  </div>
                </div>
              </li>
              <li class="testimonials-item">
                <div class="content-card" data-testimonials-item>
                  <figure class="testimonials-avatar-box">
                    <img src="./assets/images/memo_10.png" alt="Saniya Imroze" width="60" data-testimonials-avatar>
                  </figure>
                  <h4 class="h4 testimonials-item-title" data-testimonials-title>Saniya Imroze</h4>
                  <span style="font-size: 12px; padding-left: 96px; color: rgb(183, 168, 168);">GDSC Lead 2021-22</span> <br>
                  <div class="testimonials-text" data-testimonials-text>
                    <p>
                      During the period, I was quite impressed with his/her attitude and efficiency.
                      Brilliant young person who is also a consummate professional. I am convinced that he/she will demonstrate a high level of devotion and diligence in carrying out his work tasks and responsibilities in the community.
                      He/she has invariably been an active member of this clubs and associations and worked rigorously to implement changes that have aided. Through these processes, he has gained valuable knowledge that he will be able to implement in his career ahead. I have observed that she/he shows up earlier than asked, is a team player, works hard and carries her/his work in a humble and polite manner.
                      We wish you all the luck for your future endeavors. To keep the good work going on and best regards for all the upcoming challenges.
                    </p>
                  </div>
                </div>
              </li>
              <li class="testimonials-item">
                <div class="content-card" data-testimonials-item>
                  <figure class="testimonials-avatar-box">
                    <img src="./assets/images/avatar-1.png" alt="Sohail Ansari" width="60" data-testimonials-avatar>
                  </figure>
                  <h4 class="h4 testimonials-item-title" data-testimonials-title>Sohail Ansari</h4>
                  <!-- Add a line for their position below the name -->
                  <span style="font-size: 12px; padding-left: 96px; color: rgb(183, 168, 168);">Tech Pallottine Development Centre In-charge</span> <br>
                  <div class="testimonials-text" data-testimonials-text>
                    <p>
                      Sahil was employed for the project titled Online Student Mentoring System at Tech Pallottine Development Center from 1st October 2021 to 31st December 2021. 
                      We wish to acknowledge his hard work, commitment, and efforts towards the successful completion of the project. During his tenure, he demonstrated exceptional 
                      leadership qualities, design and programming skills, and maintained a self-motivated attitude towards learning new technologies. We wish him all the best for his future endeavors.
                    </p>
                  </div>
                </div>
              </li>
            </ul>
          </section>
          <!--
            - testimonials modal
            -->
          <div class="modal-container" data-modal-container>
            <div class="overlay" data-overlay></div>
            <section class="testimonials-modal">
              <button class="modal-close-btn" data-modal-close-btn>
                <ion-icon name="close-outline"></ion-icon>
              </button>
              <div class="modal-img-wrapper">
                <figure class="modal-avatar-box">
                  <img src="./assets/images/avatar-1.png" alt="Daniel lewis" width="80" data-modal-img>
                </figure>
                <img src="./assets/images/icon-quote.svg" alt="quote icon">
              </div>
              <div class="modal-content">
                <h4 class="h3 modal-title" data-modal-title>Daniel lewis</h4>
                <time datetime="2021-06-14">22 June, 2021</time>
                <div data-modal-text>
                  <p>
                    Richard was hired to create a corporate identity. We were very pleased with the work done. She has a
                    lot of experience
                    and is very concerned about the needs of client. Lorem ipsum dolor sit amet, ullamcous cididt
                    consectetur adipiscing
                    elit, seds do et eiusmod tempor incididunt ut laborels dolore magnarels alia.
                  </p>
                </div>
              </div>
            </section>
          </div>
          <!--
            - clients
            -->
          <!-- 
            <section class="clients">
            
              <h3 class="h3 clients-title">Clients</h3>
            
              <ul class="clients-list has-scrollbar">
            
                <li class="clients-item">
                  <a href="#">
                    <img src="./assets/images/logo-1-color.png" alt="client logo">
                  </a>
                </li>
            
                <li class="clients-item">
                  <a href="#">
                    <img src="./assets/images/logo-2-color.png" alt="client logo">
                  </a>
                </li>
            
                <li class="clients-item">
                  <a href="#">
                    <img src="./assets/images/logo-3-color.png" alt="client logo">
                  </a>
                </li>
            
                <li class="clients-item">
                  <a href="#">
                    <img src="./assets/images/logo-4-color.png" alt="client logo">
                  </a>
                </li>
            
                <li class="clients-item">
                  <a href="#">
                    <img src="./assets/images/logo-5-color.png" alt="client logo">
                  </a>
                </li>
            
                <li class="clients-item">
                  <a href="#">
                    <img src="./assets/images/logo-6-color.png" alt="client logo">
                  </a>
                </li>
            
              </ul>
            
            </section> -->
        </article>
        <!--
          - #RESUME
          -->
        <style>
        </style>
        <article class="resume" data-page="resume">
          <header>
            <h2 class="h2 article-title">Resume</h2>
          </header>
          <a href="Sahil_Karande.pdf" download="Sahil Karande resume.pdf" class="download-button">
            <div class="download-icon">
              <ion-icon name="cloud-download-outline"></ion-icon>
            </div>
            <div class="download-text">Download Latest Resume</div>
          </a>
          <br><br>
          <section class="timeline">
            <div class="title-wrapper">
              <div class="icon-box">
                <ion-icon name="book-outline"></ion-icon>
              </div>
              <h3 class="h3">Education</h3>
            </div>
            <ol class="timeline-list">
              <li class="timeline-item">
                <h4 class="h4 timeline-item-title" style="color: #fcca64;">Bachelor of Technology, Computer Engineering</h4>
                <span>St. Vincent Pallotti College of Engineering & Technology, Nagpur, IN</span>
                <p style="color: #3366cc;">CGPA: 8.13</p>
                <p style="color: #fcca64;">2021 - 2024</p>
              </li>
              <li class="timeline-item">
                <h4 class="h4 timeline-item-title" style="color: #fcca64;">Higher secondary education - 12th</h4>
                <span>Macaroon Students Academy, Jr. Science College, Chandrapur, IN</span>
                <p style="color: #3366cc;">CGPA: 6.13</p>
                <p style="color: #fcca64;">2020</p>
              </li>
              <li class="timeline-item">
                <h4 class="h4 timeline-item-title" style="color: #fcca64;">Central Board of Secondary Education - 10th</h4>
                <span>Macaroon Students Academy, Wani, IN</span>
                <p style="color: #3366cc;">CGPA: 7.72</p>
                <p style="color: #fcca64;">2018</p>
              </li>
            </ol>
          </section>
          <section class="timeline">
            <div class="title-wrapper">
              <div class="icon-box">
                <ion-icon name="book-outline"></ion-icon>
              </div>
              <h3 class="h3">Work Experience</h3>
            </div>
            <ol class="timeline-list">
              <!-- experience item 1 -->
              <li class="timeline-item">
                <h4 class="h4 timeline-item-title" style="color: #fcca64;">IIOT Intern</h4>
                <a href="https://www.clustorcomputing.com/" style="color: #fcca64;">Solar Industries India Limited</a>
                <div style="display: flex; align-items: center;">
                  <ion-icon name="location-outline" style="color: #D6D6D6;"></ion-icon>
                  <p style="margin-left: 5px; color: #D6D6D6;">Nagpur, Maharashtra</p>
                </div>
                <span>20th Dec 2023 - 17th July 2024 </span>
                <p class="timeline-text" style="color: #D6D6D6;">
                <ul style="list-style-type: disc; color: #D6D6D6;">
                  <li>Engaged in ongoing data analysis and visualization projects, utilizing data science techniques for predicting future product trends through
                    forecasting.
                  </li>
                  <li>Utilized Power BI, DAX queries and MS SQL, Postgres commands for data manipulation and analysis.</li>
                  <li>Actively involved in time series analysis to enhance understanding of product performance over time</li>
                  <li>Contributing to a prestigious team at Solar Industries, a globally renowned company</li>
                  <li>Dealt with real-world data sets, preparing</li>
                </ul>
                </p>
                <a href="assets\certificates\SolarCompletion.pdf" download>
                  <div href style="display: flex; align-items: center;">
                    <ion-icon name="cloud-download-outline" style="color: #3366cc;"></ion-icon>
                    <p style="margin-left: 5px; color: #3366cc ;">Download Certificate</p>
                  </div>
                </a>
              </li>
              <!-- experience item 2 -->
              <li class="timeline-item">
                <h4 class="h4 timeline-item-title" style="color: #fcca64;">Data Science Intern</h4>
                <a href="https://www.clustorcomputing.com/" style="color: #fcca64;">Clustor Computing</a>
                <div style="display: flex; align-items: center;">
                  <ion-icon name="location-outline" style="color: #D6D6D6;"></ion-icon>
                  <p style="margin-left: 5px; color: #D6D6D6;">Nagpur, Maharashtra</p>
                </div>
                <span>1st Jul 2023 - 31st Jul 2023</span>
                <p class="timeline-text" style="color: #D6D6D6;">
                <ul style="list-style-type: disc; color: #D6D6D6;">
                  <li>Worked on a project, gained handson experience in data analysis, machine learning, and data visualization.</li>
                  <li>Dealt with real-world data sets, preparing</li>
                </ul>
                </p>
                <a href="assets\certificates\Clustor Computing .pdf" download>
                  <div href style="display: flex; align-items: center;">
                    <ion-icon name="cloud-download-outline" style="color: #3366cc;"></ion-icon>
                    <p style="margin-left: 5px; color: #3366cc ;">Download Certificate</p>
                  </div>
                </a>
              </li>
              <!-- experience item 3 -->
              <li class="timeline-item">
                <h4 class="h4 timeline-item-title" style="color: #fcca64;">Summer Internship</h4>
                <a href="https://www.appxbuild.com/" style="color: #fcca64;">AppxBuild Pvt Ltd</a>
                <div style="display: flex; align-items: center;">
                  <ion-icon name="location-outline" style="color: #D6D6D6;"></ion-icon>
                  <p style="margin-left: 5px; color: #D6D6D6;">Nagpur, Maharashtra</p>
                </div>
                <span>March 2023 - April 2023</span>
                <p class="timeline-text" style="color: #D6D6D6;">
                <ul style="list-style-type: disc; color: #D6D6D6;">
                  <li>
                    Collaborated with a team of skilled
                    developers, designers, and project
                    managers to create a functional and
                    visually appealing website
                  </li>
                  <li>
                    Created a Website based on
                    WordPress and hosted it.
                  </li>
                </ul>
                </p>
                <a href="assets\certificates\APPXBUILD (1).pdf" download>
                  <div href style="display: flex; align-items: center;">
                    <ion-icon name="cloud-download-outline" style="color: #3366cc;"></ion-icon>
                    <p style="margin-left: 5px; color: #3366cc ;">Download Certificate</p>
                  </div>
                </a>
              </li>
              <!-- experience item 4 -->
              <li class="timeline-item">
                <h4 class="h4 timeline-item-title" style="color: #fcca64;">Technical Lead</h4>
                <a href="https://www.clustorcomputing.com/" style="color: #fcca64;">GDSC St. Vincent Pallotti College of Engineering and Technology</a>
                <div style="display: flex; align-items: center;">
                  <ion-icon name="location-outline" style="color: #D6D6D6;"></ion-icon>
                  <p style="margin-left: 5px; color: #D6D6D6;">Nagpur, Maharashtra</p>
                </div>
                <span>Jul 2022 - Jul 2023</span>
                <p class="timeline-text" style="color: #D6D6D6;">
                <ul style="list-style-type: disc; color: #D6D6D6;">
                  <li>Led GDSC events and mentored newcomers.</li>
                  <li>Used Technical skills for effective teamwork and communication.</li>
                </ul>
                </p>
                <a href="assets\certificates\LOR GDSC 2021.pdf" download>
                  <div href style="display: flex; align-items: center;">
                    <ion-icon name="cloud-download-outline" style="color: #3366cc;"></ion-icon>
                    <p style="margin-left: 5px; color: #3366cc ;">Download Certificate</p>
                  </div>
                </a>
              </li>
              <!-- experience item 5 -->
              <li class="timeline-item">
                <h4 class="h4 timeline-item-title" style="color: #fcca64;">Marketing, Networking and Event Managment</h4>
                <a href="https://www.clustorcomputing.com/" style="color: #fcca64;">GDSC St. Vincent Pallotti College of Engineering and Technology</a>
                <div style="display: flex; align-items: center;">
                  <ion-icon name="location-outline" style="color: #D6D6D6;"></ion-icon>
                  <p style="margin-left: 5px; color: #D6D6D6;">Nagpur, Maharashtra</p>
                </div>
                <span>Sept 2021 - Jul 2022</span>
                <p class="timeline-text" style="color: #D6D6D6;">
                <ul style="list-style-type: disc; color: #D6D6D6;">
                  <li>Led diverse marketing campaigns and research to create audience-focused strategies.</li>
                  <li>Strengthened networking and partnership skills, enabling business growth and market expansion.</li>
                </ul>
                </p>
                <a href="assets\certificates\LOR GDSC 2021.pdf" download>
                  <div href style="display: flex; align-items: center;">
                    <ion-icon name="cloud-download-outline" style="color: #3366cc;"></ion-icon>
                    <p style="margin-left: 5px; color: #3366cc ;">Download Certificate</p>
                  </div>
                </a>
              </li>
            </ol>
          </section>
          <section class="skill">
            <h3 class="h3 skills-title">Technical Skills</h3>
            <div class="skills-container">
              <div class="skills-column">
                <ul class="skills-list content-card">
                  <li class="skills-item">
                    <div class="title-wrapper">
                      <h5 class="h5">Data Engineering</h5>
                    </div>
                  </li>
                  <li class="skills-item">
                    <div class="title-wrapper">
                      <h5 class="h5">Data Science</h5>
                    </div>
                  </li>
                  <li class="skills-item">
                    <div class="title-wrapper">
                      <h5 class="h5">Machine Learning</h5>
                    </div>
                  </li>
                  <li class="skills-item">
                    <div class="title-wrapper">
                      <h5 class="h5">Big Data Analytics</h5>
                    </div>
                  </li>
                  <li class="skills-item">
                    <div class="title-wrapper">
                      <h5 class="h5">Predictive Modeling</h5>
                    </div>
                  </li>
                  <li class="skills-item">
                    <div class="title-wrapper">
                      <h5 class="h5">Data Analysis and Visualization</h5>
                    </div>
                  </li>
                  <li class="skills-item">
                    <div class="title-wrapper">
                      <h5 class="h5">Frontend Development</h5>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="skills-column">
                <ul class="skills-list content-card">
                  <li class="skills-item">
                    <div class="title-wrapper">
                      <h5 class="h5">Python</h5>
                    </div>
                  </li>
                  <li class="skills-item">
                    <div class="title-wrapper">
                      <h5 class="h5">TensorFlow</h5>
                    </div>
                  </li>
                  <li class="skills-item">
                    <div class="title-wrapper">
                      <h5 class="h5">Power BI</h5>
                    </div>
                  </li>
                  <li class="skills-item">
                    <div class="title-wrapper">
                      <h5 class="h5">Excel</h5>
                    </div>
                  </li>
                  <li class="skills-item">
                    <div class="title-wrapper">
                      <h5 class="h5">Streamlit</h5>
                    </div>
                  </li>
                  <li class="skills-item">
                    <div class="title-wrapper">
                      <h5 class="h5">Data Dashboards</h5>
                    </div>
                  </li>
                  <li class="skills-item">
                    <div class="title-wrapper">
                      <h5 class="h5">Statistical Modeling</h5>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </section>
          <section class="skill">
            <h3 class="h3 skills-title">Non-Technical Skills</h3>
            <div class="skills-container">
              <div class="skills-column">
                <ul class="skills-list content-card">
                  <li class="skills-item">
                    <div class="title-wrapper">
                      <h5 class="h5">Leadership</h5>
                    </div>
                  </li>
                  <li class="skills-item">
                    <div class="title-wrapper">
                      <h5 class="h5">Management</h5>
                    </div>
                  </li>
                  <li class="skills-item">
                    <div class="title-wrapper">
                      <h5 class="h5">Communication Skills</h5>
                    </div>
                  </li>
                  <li class="skills-item">
                    <div class="title-wrapper">
                      <h5 class="h5">Seminar Organization</h5>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="skills-column">
                <ul class="skills-list content-card">
                  <li class="skills-item">
                    <div class="title-wrapper">
                      <h5 class="h5">Presentations</h5>
                    </div>
                  </li>
                  <li class="skills-item">
                    <div class="title-wrapper">
                      <h5 class="h5">Team Collaboration</h5>
                    </div>
                  </li>
                  <li class="skills-item">
                    <div class="title-wrapper">
                      <h5 class="h5">Crowdsourcing</h5>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </section>
        </article>
        <div id="image-overlay"></div>
        <!--
          - #projects
          -->
        <article class="projects" data-page="projects">
          <header>
            <h2 class="h2 article-title">Projects</h2>
          </header>
          <section class="projects">
            <ul class="filter-list">
              <li class="filter-item">
                <button class="active" data-filter-btn="All">All</button>
              </li>
              <li class="filter-item">
                <button data-filter-btn="Web Development">Web Development</button>
              </li>
              <li class="filter-item">
                <button data-filter-btn="Data Science">Data Science</button>
              </li>
            </ul>
            <div class="filter-select-box">
              <button class="filter-select" data-select>
                <div class="select-value" data-select-value>Select category</div>
                <div class="select-icon">
                  <ion-icon name="chevron-down"></ion-icon>
                </div>
              </button>
              <ul class="select-list">
                <li class="select-item">
                  <button data-select-item="All">All</button>
                </li>
                <li class="select-item">
                  <button data-select-item="Web Development">Web Development</button>
                </li>
                <li class="select-item">
                  <button data-select-item="Data Science">Data Science</button>
                </li>
              </ul>
            </div>
            <ul class="project-list">
              <!-- project 1 -->
              <li class="project-item active" data-filter-item data-category="Web Development">
                <a href="#">

                  <figure class="project-img">
                    <!-- <div class="project-item-icon-box">
                      <ion-icon name="eye-outline"></ion-icon>
                    </div> -->
                    <img src="./assets/images/furrifyweb.jpg" alt="Furrifyweb" loading="lazy">
                  </figure>
                  <h3 class="project-title">Furrify- A Pet Community</h3>
                  <p class="project-category">Web Development</p>
                </a>
              </li>
              <!-- project 2 -->
              <li class="project-item active" data-filter-item data-category="Data Science">
                <a href="#">
                  <figure class="project-img">
                    <!-- <div class="project-item-icon-box">
                      <ion-icon name="eye-outline"></ion-icon>
                    </div> -->
                    <img src="assets\images\walmart.png" alt="Walmart Sales Prediction Dashboard" loading="lazy">
                  </figure>
                  <h3 class="project-title">Walmart Sales Prediction Dashboard</h3>
                  <p class="project-category">Data Science</p>
                </a>
              </li>
              <!-- project 2 -->
              <li class="project-item active" data-filter-item data-category="Web Development">
                <a href="#">
                  <figure class="project-img">
                    <!-- <div class="project-item-icon-box">
                      <ion-icon name="eye-outline"></ion-icon>
                    </div> -->
                    <img src="assets/images/Apnabankweb (1).png" alt="Apna Bank" loading="lazy" onclick="openModal(this)">
                  </figure>
                  <h3 class="project-title">Apna Bank</h3>
                  <p class="project-category">Web Development</p>
                </a>
              </li>
              <!-- project 1 -->
              <li class="project-item active" data-filter-item data-category="Data Science">
                <a href="#">
                  <figure class="project-img">
                    <!-- <div class="project-item-icon-box">
                      <ion-icon name="eye-outline"></ion-icon>
                    </div> -->
                    <img src="assets\images\stocksproject (1).png" alt="Stocks Prediction For BSE And NSE Companies" loading="lazy">
                  </figure>
                  <h3 class="project-title">Stocks Prediction For BSE And NSE Companies</h3>
                  <p class="project-category">Data Science</p>
                </a>
              </li>
              <!-- project 3 -->
              <li class="project-item active" data-filter-item data-category="Web Development">
                <a href="#">
                  <figure class="project-img">
                    <!-- <div class="project-item-icon-box">
                      <ion-icon name="eye-outline"></ion-icon>
                    </div> -->
                    <img src="assets\images\basicportfolio (1).png" alt="Basic Portfolio" loading="lazy">
                  </figure>
                  <h3 class="project-title">Basic Portfolio</h3>
                  <p class="project-category">Web Development</p>
                </a>
              </li>
              <!-- project 4 -->
              <li class="project-item active" data-filter-item data-category="Web Development">
                <a href="#">
                  <figure class="project-img">
                    <!-- <div class="project-item-icon-box">
                      <ion-icon name="eye-outline"></ion-icon>
                    </div> -->
                    <img src="assets\images\encipherX.png" alt="EncipherX" loading="lazy">
                  </figure>
                  <h3 class="project-title">EncipherX Website</h3>
                  <p class="project-category">Web Development</p>
                </a>
              </li>
              <!-- project 5 -->
              <li class="project-item active" data-filter-item data-category="Web Development">
                <a href="#">
                  <figure class="project-img">
                    <!-- <div class="project-item-icon-box">
                      <ion-icon name="eye-outline"></ion-icon>
                    </div> -->
                    <img src="assets\images\happiness.png" alt="Online Student Mentoring System" loading="lazy">
                  </figure>
                  <h3 class="project-title">Happiness Center - Online Student Mentoring System</h3>
                  <p class="project-category">Web Development</p>
                </a>
              </li>
              <!-- project 6 -->
              <li class="project-item active" data-filter-item data-category="Web Development">
                <a href="#">
                  <figure class="project-img">
                    <!-- <div class="project-item-icon-box">
                      <ion-icon name="eye-outline"></ion-icon>
                    </div> -->
                    <img src="assets\images\GDSC.png" alt="GDSC Website" loading="lazy">
                  </figure>
                  <h3 class="project-title">GDSC Website</h3>
                  <p class="project-category">Web Development</p>
                </a>
              </li>
              <!-- project 1 -->
              <li class="project-item active" data-filter-item data-category="Data Science">
                <a href="#">
                  <figure class="project-img">
                    <!-- <div class="project-item-icon-box">
                      <ion-icon name="eye-outline"></ion-icon>
                    </div> -->
                    <img id="project-image" src="assets\images\stocksproject (1).png" alt="Stocks Prediction For BSE And NSE Companies" loading="lazy">
                  </figure>
                  <h3 class="project-title">Stocks Prediction For BSE And NSE Companies</h3>
                  <p class="project-category">Data Science</p>
                </a>
              </li>
              <!-- project 3 -->
              <li class="project-item active" data-filter-item data-category="Data Science">
                <a href="#">
                  <figure class="project-img">
                    <!-- <div class="project-item-icon-box">
                      <ion-icon name="eye-outline"></ion-icon>
                    </div> -->
                    <img src="assets\images\drugclassification (1).png" alt="Drug Classification" loading="lazy">
                  </figure>
                  <h3 class="project-title">Drug Classification</h3>
                  <p class="project-category">Data Science</p>
                </a>
              </li>
              <!-- Add more project items here -->
            </ul>
          </section>
        </article>
        <!-- certificates section -->
        <article class="certificates" data-page="certificates">
          <header>
            <h2 class="h2 article-title">Certificates</h2>
          </header>
          <section class="projects">
            <ul class="project-list">
              <!-- project 1 -->
              <li class="project-item active">
                <a href="https://drive.google.com/file/d/1Dho2Ahf3655KqUht6pTE4ZSLpe98jaKr/view?usp=sharing">
                  <figure class="project-img">
                    <!-- <div class="project-item-icon-box">
                      <ion-icon name="eye-outline"></ion-icon>
                    </div> -->
                    <img src="assets\certificates\SolarCompletionCertif.jpg" alt="Solar Industries" loading="lazy">
                  </figure>
                  <h3 class="project-title">IIOT Internship</h3>
                  <p class="project-category">Solar Industries India Limited</p>
                </a>
              </li>
              <li class="project-item active">
                <a href="https://archive.nptel.ac.in/content/noc/NOC24/SEM1/Ecertificates/106/noc24-cs17/Course/NPTEL24CS17S36290251330681948.pdf">
                  <figure class="project-img">
                    <!-- <div class="project-item-icon-box">
                      <ion-icon name="eye-outline"></ion-icon>
                    </div> -->
                    <img src="assets\images\NPTEL_CC.jpg" alt="NPTEL" loading="lazy">
                  </figure>
                  <h3 class="project-title">Cloud Computing</h3>
                  <p class="project-category">NPTEL</p>
                </a>
              </li>
              <!-- project3 -->
              <li class="project-item active">
                <a href="https://archive.nptel.ac.in/content/noc/NOC24/SEM1/Ecertificates/106/noc24-cs52/Course/NPTEL24CS52S56290023630681948.pdf">
                  <figure class="project-img">
                    <!-- <div class="project-item-icon-box">
                      <ion-icon name="eye-outline"></ion-icon>
                    </div> -->
                    <img src="assets\images\NPTEL_RL.jpg" alt="NPTEL" loading="lazy">
                  </figure>
                  <h3 class="project-title">Reinforcement Learning</h3>
                  <p class="project-category">NPTEL</p>
                </a>
              </li>
              <!-- project 4 -->
              <!-- project 2 -->
              <li class="project-item active" >
                <a href="https://drive.google.com/file/d/1XQk4pr6LwPpHMpRhIeuV3TDiHlZHej9Q/view?usp=drive_link">
                  <figure class="project-img">
                    <!-- <div class="project-item-icon-box">
                      <ion-icon name="eye-outline"></ion-icon>
                    </div> -->
                    <img src="assets\certificates\Images\Clustor Computing - Internship Certificate_page-0001.jpg" alt="clustorcomputing" loading="lazy">
                  </figure>
                  <h3 class="project-title">Data Science Internship</h3>
                  <p class="project-category">Clustor Computing</p>
                </a>
              </li>
              <!-- project 2 -->
              <li class="project-item active" >
                <a href="https://drive.google.com/file/d/1VSh5o9ti4fi4XiI8b4Sjg6hWX3xexVFo/view?usp=drive_link">
                  <figure class="project-img">
                    <!-- <div class="project-item-icon-box">
                      <ion-icon name="eye-outline"></ion-icon>
                    </div> -->
                    <img src="assets\certificates\Images\TPDC - Online Student Mentoring System_page-0001.jpg" alt="TPDC" loading="lazy">
                  </figure>
                  <h3 class="project-title">Online Student Mentoring System</h3>
                  <p class="project-category">TPDC Cell</p>
                </a>
              </li>
              <!-- project 1 -->
              <li class="project-item active">
                <a href="https://drive.google.com/file/d/1pxKwoYVBCRxcpvggSNFBUCYWEwOVqExt/view?usp=drive_link">
                  <figure class="project-img">
                    <!-- <div class="project-item-icon-box">
                      <ion-icon name="eye-outline"></ion-icon>
                    </div> -->
                    <img src="assets\certificates\Images\APPXBUILD (1)_page-0001.jpg" alt="Appxbuild" loading="lazy">
                  </figure>
                  <h3 class="project-title">Web Development Internship</h3>
                  <p class="project-category">AppxBuild</p>
                </a>
              </li>
              <!-- project 2 -->
              <li class="project-item active" >
                <a href="https://drive.google.com/file/d/1XQk4pr6LwPpHMpRhIeuV3TDiHlZHej9Q/view?usp=drive_link">
                  <figure class="project-img">
                    <!-- <div class="project-item-icon-box">
                      <ion-icon name="eye-outline"></ion-icon>
                    </div> -->
                    <img src="assets\certificates\Images\Clustor Computing - Internship Certificate_page-0001.jpg" alt="clustorcomputing" loading="lazy">
                  </figure>
                  <h3 class="project-title">Data Science Internship</h3>
                  <p class="project-category">Clustor Computing</p>
                </a>
              </li>
              <!-- project 2 -->

              <!-- project 1 -->
              <li class="project-item active" >
                <a href="https://drive.google.com/file/d/1glA5yW6WTbO3FWNEFdZ-okuQbWCb-jSQ/view?usp=drive_link">
                  <figure class="project-img">
                    <!-- <div class="project-item-icon-box">
                      <ion-icon name="eye-outline"></ion-icon>
                    </div> -->
                    <img src="assets\certificates\Images\Coursera - Introduction to Python Programming_page-0001.jpg" alt="Python Programming" loading="lazy">
                  </figure>
                  <h3 class="project-title">Introduction to Python Programming</h3>
                  <p class="project-category">Coursera</p>
                </a>
              </li>
              <!-- project 1 -->
              <li class="project-item active" >
                <a href="https://drive.google.com/file/d/1p_sVZcp77fnjfvkyQ3gN-KK2mDgHWPnW/view?usp=drive_link">
                  <figure class="project-img">
                    <!-- <div class="project-item-icon-box">
                      <ion-icon name="eye-outline"></ion-icon>
                    </div> -->
                    <img src="assets\certificates\Images\Coursera - Introduction to Data Analysis using Microsoft_page-0001.jpg" alt="Dataanalysis" loading="lazy">
                  </figure>
                  <h3 class="project-title">Introduction to Data Analysis using Microsoft</h3>
                  <p class="project-category">Coursera</p>
                </a>
              </li>
              <!-- project 1 -->
              <li class="project-item active" >
                <a href="https://drive.google.com/file/d/1zC_zYOYpnh50jmfStVLShVj8RrIieF7r/view?usp=drive_link">
                  <figure class="project-img">
                    <!-- <div class="project-item-icon-box">
                      <ion-icon name="eye-outline"></ion-icon>
                    </div> -->
                    <img src="assets\certificates\Images\Coursera - Introduction to Microsoft Excel_page-0001.jpg" alt="Microsoft Excel" loading="lazy">
                  </figure>
                  <h3 class="project-title">Introduction to Microsoft Excel</h3>
                  <p class="project-category">Coursera</p>
                </a>
              </li>
              <!-- project 1 -->
              <li class="project-item active" >
                <a href="https://drive.google.com/file/d/1dkBEpp5jBeJ4ahpI_-5PDzSVvOmPyxQU/view?usp=drive_link">
                  <figure class="project-img">
                    <!-- <div class="project-item-icon-box">
                      <ion-icon name="eye-outline"></ion-icon>
                    </div> -->
                    <img src="assets\certificates\Images\MicrosoftCertificate_page-0001.jpg" alt="Microsoft" loading="lazy">
                  </figure>
                  <h3 class="project-title">Microsoft AI Classroom Series</h3>
                  <p class="project-category">Microsoft</p>
                </a>
              </li>
              <!-- project 1 -->
              <li class="project-item active" >
                <a href="https://drive.google.com/file/d/1MV2Nw1CZfRro_BTo1kO1DrDshhqt4AqA/view?usp=drive_link">
                  <figure class="project-img">
                    <!-- <div class="project-item-icon-box">
                      <ion-icon name="eye-outline"></ion-icon>
                    </div> -->
                    <img src="assets\certificates\Images\MLSA Attendee Certificates-132_page-0001.jpg" alt="Microsoft" loading="lazy">
                  </figure>
                  <h3 class="project-title">Microsoft Azure Fundamentals</h3>
                  <p class="project-category">Microsoft</p>
                </a>
              </li>
              <!-- project 1 -->
              <li class="project-item active" >
                <a href="https://drive.google.com/file/d/1AdO8JT8QJrkuOuKW7PbSCkoCTAfcJsWA/view?usp=drive_link">
                  <figure class="project-img">
                    <!-- <div class="project-item-icon-box">
                      <ion-icon name="eye-outline"></ion-icon>
                    </div> -->
                    <img src="assets\certificates\Images\Sahil Santosh Karande - MLSA_page-0001.jpg" alt="Microsoft" loading="lazy">
                  </figure>
                  <h3 class="project-title">Hands on Web Development</h3>
                  <p class="project-category">Microsoft</p>
                </a>
              </li>
              <!-- project 1 -->
              <li class="project-item active" >
                <a href="https://drive.google.com/file/d/1QWGEmOPeqKnMbMBKE8Bj1WuBH88BwKLl/view?usp=drive_link">
                  <figure class="project-img">
                    <!-- <div class="project-item-icon-box">
                      <ion-icon name="eye-outline"></ion-icon>
                    </div> -->
                    <img src="assets\certificates\Images\LOR GDSC 2022_page-0001.jpg" alt="Microsoft" loading="lazy">
                  </figure>
                  <h3 class="project-title">Letter of Recommendation</h3>
                  <p class="project-category">GDSC SVPCET 2022</p>
                </a>
              </li>
              <!-- project 1 -->
              <li class="project-item active" >
                <a href="https://drive.google.com/file/d/1QWGEmOPeqKnMbMBKE8Bj1WuBH88BwKLl/view?usp=drive_link">
                  <figure class="project-img">
                    <!-- <div class="project-item-icon-box">
                      <ion-icon name="eye-outline"></ion-icon>
                    </div> -->
                    <img src="assets\certificates\Images\GDSC LOR_page-0001.jpg" alt="Microsoft" loading="lazy">
                  </figure>
                  <h3 class="project-title">Letter of Recommendation</h3>
                  <p class="project-category">GDSC SVPCET 2021</p>
                </a>
              </li>
              <!-- project 1 -->
              <li class="project-item active" >
                <a href="https://drive.google.com/file/d/1UShHUdcQ6pccFipKSVK6AAeu4opuUimx/view?usp=drive_link">
                  <figure class="project-img">
                    <!-- <div class="project-item-icon-box">
                      <ion-icon name="eye-outline"></ion-icon>
                    </div> -->
                    <img src="assets\certificates\Images\Sahil Karande_30-DGC_page-0001.jpg" alt="Microsoft" loading="lazy">
                  </figure>
                  <h3 class="project-title">30 Days of Gooogle Cloud</h3>
                  <p class="project-category">Google Cloud</p>
                </a>
              </li>
              <!-- project 1 -->
              <li class="project-item active" >
                <a href="https://drive.google.com/file/d/13gbFK4K6MUbN6Ic29j8xaCwy1gESTq8Y/view?usp=drive_link">
                  <figure class="project-img">
                    <!-- <div class="project-item-icon-box">
                      <ion-icon name="eye-outline"></ion-icon>
                    </div> -->
                    <img src="assets\certificates\Images\Spoken Tutotial IIT Bombay -Completion of C Training_page-0001.jpg" alt="SpokenTutorials" loading="lazy">
                  </figure>
                  <h3 class="project-title">C Language training</h3>
                  <p class="project-category">Spoken Tutorials IIT Bombay</p>
                </a>
              </li>
              <!-- project 1 -->
              <li class="project-item active" >
                <a href="https://drive.google.com/file/d/1TIaAK5ZjsHKoQYIyD9QtGEiIzT_jd52p/view?usp=drive_link">
                  <figure class="project-img">
                    <!-- <div class="project-item-icon-box">
                      <ion-icon name="eye-outline"></ion-icon>
                    </div> -->
                    <img src="assets\certificates\Images\TCS NQT Scoe card_page-0001.jpg" alt="TCS NQT" loading="lazy">
                  </figure>
                  <h3 class="project-title">Cognitive Exam Score</h3>
                  <p class="project-category">TCS NQT</p>
                </a>
              </li>
              <!-- project 1 -->
              <li class="project-item active" >
                <a href="https://drive.google.com/file/d/1l-4XGdManavyFghcCorK2Kl2lvWI_ZGw/view?usp=drive_link">
                  <figure class="project-img">
                    <!-- <div class="project-item-icon-box">
                      <ion-icon name="eye-outline"></ion-icon>
                    </div> -->
                    <img src="assets\certificates\Images\Sahil_Feb_2022_participation_17615_page-0001.jpg" alt="AI " loading="lazy">
                  </figure>
                  <h3 class="project-title">Artificial Intelligence Program</h3>
                  <p class="project-category">Techfest IIT Bombay</p>
                </a>
              </li>
              <!-- project 1 -->
              <li class="project-item active" >
                <a href="https://drive.google.com/file/d/11MCKqKnPeH9k572W3iHtB-SAhy9uyjZR/view?usp=drive_link">
                  <figure class="project-img">
                    <!-- <div class="project-item-icon-box">
                      <ion-icon name="eye-outline"></ion-icon>
                    </div> -->
                    <img src="assets\certificates\Images\Unstop - Flipkart 5.0 - COP_page-0001.jpg" alt="Flipkart 5.0 " loading="lazy">
                  </figure>
                  <h3 class="project-title">Flipkart 5.0</h3>
                  <p class="project-category">Unstop</p>
                </a>
              </li>
              <!-- project 1 -->
              <li class="project-item active" >
                <a href="https://drive.google.com/file/d/1O8NDChxsJ7lxxf_wWr6MmAznrAbu6jtA/view?usp=drive_link">
                  <figure class="project-img">
                    <!-- <div class="project-item-icon-box">
                      <ion-icon name="eye-outline"></ion-icon>
                    </div> -->
                    <img src="assets\certificates\Images\Unstop - TechWiz - COP_page-0001.jpg" alt="TechWiz " loading="lazy">
                  </figure>
                  <h3 class="project-title">TechWiz</h3>
                  <p class="project-category">Unstop</p>
                </a>
              </li>
              <!-- project 1 -->
              <li class="project-item active" >
                <a href="https://drive.google.com/file/d/1Ehxz3gzVfCi_KmD8uzq_wgMsmOc_Pa6i/view?usp=drive_link">
                  <figure class="project-img">
                    <!-- <div class="project-item-icon-box">
                      <ion-icon name="eye-outline"></ion-icon>
                    </div> -->
                    <img src="assets\certificates\Images\YBI  - Python And ML_page-0001.jpg" alt="YBI" loading="lazy">
                  </figure>
                  <h3 class="project-title">Python Programming and Machine Learning</h3>
                  <p class="project-category">YBI Foundation</p>
                </a>
              </li>
              <!-- project 1 -->
              <li class="project-item active" >
                <a href="https://drive.google.com/file/d/1GZfZOsHkF4kwQUVxmHyesm8nJQc2DPo9/view?usp=drive_link">
                  <figure class="project-img">
                    <!-- <div class="project-item-icon-box">
                      <ion-icon name="eye-outline"></ion-icon>
                    </div> -->
                    <img src="assets\certificates\Images\Technex - EncipherX.jpg" alt="EncipherX " loading="lazy">
                  </figure>
                  <h3 class="project-title">EncipherX Team Member</h3>
                  <p class="project-category">Technex 2022</p>
                </a>
              </li>
              <!-- project 1 -->
              <li class="project-item active" >
                <a href="https://drive.google.com/file/d/1PkwUVMf-Rzi2afpWbkeunzn35h5qCNO2/view?usp=drive_link">
                  <figure class="project-img">
                    <!-- <div class="project-item-icon-box">
                      <ion-icon name="eye-outline"></ion-icon>
                    </div> -->
                    <img src="assets\certificates\Images\Infinity Ideatank.jpg" alt="Ideatank team Member" loading="lazy">
                  </figure>
                  <h3 class="project-title">Ideatank Team Member</h3>
                  <p class="project-category">Infinity 2022</p>
                </a>
              </li>
              <!-- project 1 -->
              <li class="project-item active" >
                <a href="https://drive.google.com/file/d/1MXC6Bo8v5N7ugiST2BsAf20UOy0fGgot/view?usp=drive_link">
                  <figure class="project-img">
                    <!-- <div class="project-item-icon-box">
                      <ion-icon name="eye-outline"></ion-icon>
                    </div> -->
                    <img src="assets\certificates\Images\Infinity Registration.jpg" alt="Registration head" loading="lazy">
                  </figure>
                  <h3 class="project-title">Registration Head</h3>
                  <p class="project-category">Infinity 2022</p>
                </a>
              </li>
              <!-- project 1 -->
              <li class="project-item active" >
                <a href="https://drive.google.com/file/d/1K8W-7Z-rXnLTwTceoSNTnkX_KKfNLkjm/view?usp=drive_link">
                  <figure class="project-img">
                    <!-- <div class="project-item-icon-box">
                      <ion-icon name="eye-outline"></ion-icon>
                    </div> -->
                    <img src="assets\certificates\Images\Suryodaya COP.jpg" alt="Ideafest" loading="lazy">
                  </figure>
                  <h3 class="project-title">Ideafest</h3>
                  <p class="project-category">Patent Fest 2023</p>
                </a>
              </li>
              <!-- project 1 -->
              <li class="project-item active" >
                <a href="https://drive.google.com/file/d/1pTUil5E3TfGohQDVlIz0YA_rlwJZ5XcO/view?usp=drive_link">
                  <figure class="project-img">
                    <!-- <div class="project-item-icon-box">
                      <ion-icon name="eye-outline"></ion-icon>
                    </div> -->
                    <img src="assets\certificates\Images\SAHIL KARANDE YCCE _page-0001.jpg" alt="Antaheen " loading="lazy">
                  </figure>
                  <h3 class="project-title">Technoclick</h3>
                  <p class="project-category">Antaheen 21.0 Civil Department YCCE</p>
                </a>
              </li>
              <!-- project 1 -->
              <li class="project-item active" >
                <a href="https://drive.google.com/file/d/16YOyahRegW4Z_bMDb9jhTKITUrsWvtl8/view?usp=drive_link">
                  <figure class="project-img">
                    <!-- <div class="project-item-icon-box">
                      <ion-icon name="eye-outline"></ion-icon>
                    </div> -->
                    <img src="assets\certificates\Images\Cisco - Introduction to IOT_page-0001.jpg" alt="Antaheen " loading="lazy">
                  </figure>
                  <h3 class="project-title">Introduction to IOT</h3>
                  <p class="project-category">Cisco Networking Academy</p>
                </a>
              </li>
            </ul>
          </section>
        </article>
        <script></script>
        <!--
          - #CONTACT
          -->
        <article class="contact" data-page="contact">
          <header>
            <h2 class="h2 article-title">Contact</h2>
          </header>
          <section class="mapbox" data-mapbox>
            <figure>
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30594.409782773484!2d73.78878237140137!3d18.44396393860206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2951a8a2d6d43%3A0x49d870c8e2fa28a3!2sDhayari%2C%20Pune%2C%20Maharashtra!5e1!3m2!1sen!2sin!4v1724606966247!5m2!1sen!2sin"
                width="400" height="300" loading="lazy">
              </iframe>
            </figure>
          </section>
          <section class="contact-form">
            <h3 class="h3 form-title">Contact Form</h3>
            <form action="https://formspree.io/f/xgejzlak" method="POST" class="form" data-form>
              <div class="input-wrapper">
                <input type="text" name="fullname" class="form-input" placeholder="Full name" required data-form-input>
                <input type="email" name="email" class="form-input" placeholder="Email address" required data-form-input>
              </div>
              <textarea name="message" class="form-input" placeholder="Your Message" required data-form-input></textarea>
              <button class="form-btn" type="submit" disabled data-form-btn>
                <ion-icon name="paper-plane"></ion-icon>
                <span>Send Message</span>
              </button>
            </form>
          </section>
        </article>
      </div>
    </main>
    <!--
      - custom js link
      -->
    <script src="assets\js\script.js"></script>
    <!--
      - ionicon link
      -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  </body>
</html>