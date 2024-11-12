<?php
require_once __DIR__ . "/lib/bootstrap.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Basic Meta Tags -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="robots" content="index, follow" />
  <meta name="author" content="NUCIDA Group" />
  <title>
    NUCIDA - Leading the Way in Business Consulting and Software Solutions
  </title>
  <meta
    name="description"
    content="NUCIDA Group offers expert consulting, software development, quality assurance, and marketing services to help businesses grow." />
  <meta
    name="keywords"
    content="business development, business consulting, software testing, software quality assurance, software development, SEO services, digital marketing, IT solutions, quality management, marketing strategies" />

  <!-- Open Graph Meta Tags (for social media sharing) -->
  <meta
    property="og:title"
    content="NUCIDA Group: Business Development & Consulting Services" />
  <meta
    property="og:description"
    content="Elevate your business with NUCIDA's consulting and software solutions." />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="http://www.nucidagroup.com" />
  <!-- Update with your actual URL -->
  <meta
    property="og:image"
    content="http://www.nucidagroup.com/assets/images/logo.png" />
  <!-- Update with your actual image path -->

  <!-- Twitter Card Meta Tags -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta
    name="twitter:title"
    content="NUCIDA Group: Business Development & Consulting Services" />
  <meta
    name="twitter:description"
    content="Expert consulting and software solutions to drive your business forward." />
  <meta
    name="twitter:image"
    content="http://www.nucidagroup.com/assets/images/logo.png" />
  <!-- Update with your actual image path -->

  <!-- Canonical URL -->
  <link rel="canonical" href="http://www.nucidagroup.com" />
  <!-- Update with your actual URL -->


  <!-- Owl Carousel CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <!-- Owl Carousel Theme (Optional) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

  <!-- jQuery (Required for Owl Carousel) -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <!-- Owl Carousel JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>


  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/odometer@0.4.8/themes/odometer-theme-default.css" />
  <script src="https://cdn.jsdelivr.net/npm/odometer@0.4.8/odometer.min.js"></script>

  <link rel="shortcut icon" href="../assets/icon.svg" type="image/x-icon" />
  <link rel="stylesheet" href="./css/styles.css" />
</head>

<body>
  <div id="index_hero">
    <header>
      <div class="container">
        <a href="#" class="menu">
          <div>
            <span></span>
            <span></span>
            <span></span>
          </div>
          MENU
        </a>
        <a href="/" class="logo">
          <img src="./assets/logo.svg" alt="NUCIDA" />
        </a>
        <div>
          <div class="lang">
            <a href="?lang=de">DE</a>
            <a href="?lang=en">EN</a>
            <a href="?lang=fr">FR</a>
            <a href="?lang=thai">THAI</a>
          </div>
          <a href="#" class="icon"><img src="./assets/tel.svg" alt="" /></a>
          <a href="#" class="icon"><img src="./assets/mail.svg" alt="" /></a>
        </div>
      </div>
      <nav>
        <div class="container">
          <a href="#" class="close">&times;</a>
          <a href="/" class="logo"><img src="./assets/logo.svg" alt="" /></a>
          <h3>navigations</h3>
          <div class="navs grid">
            <div>
              <h4>SERVICE PORTFOLIO</h4>
              <ul>
                <li>
                  <div>
                    <label for="a89">BERATUNG QM / QS</label>
                    <input type="checkbox" id="a89" />
                    <ul>
                      <li><a href="#">DIGITALISIERUNG / KI</a></li>
                      <li><a href="#">SOFTWAREQUALITÄT</a></li>
                      <li><a href="#">KONZEPTION</a></li>
                      <li><a href="#">STRATEGIE </a></li>
                      <li><a href="#">STRATEGIE </a></li>
                      <li><a href="#">IMPLEMENTIERUNG </a></li>
                      <li><a href="#">PROZESS </a></li>
                    </ul>
                  </div>
                </li>
                <li>
                  <div>
                    <label for="a89_">TESTMANAGEMENT</label>
                    <input type="checkbox" id="a89_" />
                    <ul>
                      <li><a href="#">TESTPROZESS</a></li>
                      <li><a href="#">TESTAUTOMATION</a></li>
                      <li><a href="#">QS-CLOUD</a></li>
                    </ul>
                  </div>
                </li>
                <li><a href="#">COACHINGS</a></li>
                <li>
                  <div>
                    <label for="a89__">ONLINE SCHULUNGEN</label>
                    <input type="checkbox" id="a89__" />
                    <ul>
                      <li><a href="#">TUTORIALS ZU PRODUKTEN</a></li>
                    </ul>
                  </div>
                </li>
                <li>
                  <div>
                    <label for="a89___">SOFTWARE PRODUKTE</label>
                    <input type="checkbox" id="a89___" />
                    <ul>
                      <li><a href="#">SOFTWARE ENTWICKLUNG</a></li>
                      <li><a href="#">BERATUNG & EMPFEHLUNG</a></li>
                    </ul>
                  </div>
                </li>
                <li><a href="#">ZERTIFIZIERUNGEN</a></li>
                <li><a href="#">ZUSATZLEISTUNGEN</a></li>
              </ul>
            </div>
            <div>
              <h4>STANDORTE</h4>
              <ul>
                <li>
                  <div>
                    <label for="23v">KARTE</label>
                    <input type="checkbox" id="23v" />
                    <ul>
                      <li><a href="#">DEUTSCHLAND</a></li>
                      <li><a href="#">UK</a></li>
                      <li><a href="#">MITTELEUROPA</a></li>
                      <li><a href="#">USA</a></li>
                      <li><a href="#">THAILAND</a></li>
                    </ul>
                  </div>
                </li>
                <li>
                  <div>
                    <label for="23v_">ANGEBOTE SPEZIFISCH</label>
                    <input type="checkbox" id="23v_" />
                    <ul>
                      <li><a href="#">nach Standorten?</a></li>
                    </ul>
                  </div>
                </li>
                <li>
                  <div>
                    <label for="23v__">KONTAKTAUFNAHME</label>
                    <input type="checkbox" id="23v__" />
                    <ul>
                      <li><a href="#">mit jedem Standort?</a></li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
            <div>
              <h4>REFERENZEN</h4>
              <ul>
                <li>
                  <div>
                    <label for="908">KUNDEN MIT LOGOS</label>
                    <input type="checkbox" id="908" />
                    <ul>
                      <li><a href="#">nach Standorten?
                          Tesla, IBM, Roche. TUI, 1&1</a></li>
                    </ul>
                  </div>
                </li>
                <li><a href="#">BRANCHEN</a></li>
                <li><a href="#">AUFGABE / LÖSUNG</a></li>
              </ul>
            </div>
            <div>
              <h4>ÜBER UNS</h4>
              <ul>
                <li>
                  <div>
                    <label for="90cv">UNTERNEHMEN</label>
                    <input type="checkbox" id="90cv" />
                    <ul>
                      <li><a href="#">Gründung </a></li>
                      <li><a href="#"> Historie
                          Markenstory </a></li>
                      <li><a href="#"> Vision </a></li>
                      <li><a href="#">Mission Unternehmenskultur</a></li>
                      <li><a href="#"> / Leitbild Portrait GFy</a></li>
                    </ul>
                  </div>
                </li>
                <li>
                  <div>
                    <label for="90cv_">TEAM / SOZIETÄT</label>
                    <input type="checkbox" id="90cv_" />
                    <ul>
                      <li><a href="#">Persönlichkeiten
                          Aufgabe </a></li>
                      <li><a href="#">Zuständigkeiten
                          »Steckbrief« </a></li>
                      <li><a href="#">Kontaktdaten? </a></li>
                    </ul>
                  </div>
                </li>
                <li>
                  <div>
                    <label for="90cv__">COACHING</label>
                    <input type="checkbox" id="90cv__" />
                    <ul>
                      <li><a href="#">Persönlichkeiten</a></li>
                    </ul>
                  </div>
                </li>
                <li>
                  <div>
                    <label for="90cv___">MITGLIED WERDEN</label>
                    <input type="checkbox" id="90cv___" />
                    <ul>
                      <li><a href="#">Kanäle für Ausschreibungen</a></li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
            <div>
              <h4>MEDIA</h4>
              <ul>
                <li>
                  <div>
                    <label for="879xc">GLOSSAR</label>
                    <input type="checkbox" id="879xc" />
                    <ul>
                      <li><a href="#">geordnet nach Leistungen?</a></li>
                    </ul>
                  </div>
                </li>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">PRESSE</a></li>
                <li><a href="#">DOWNLOADS</a></li>
              </ul>
            </div>
            <div>
              <h4>NEWS</h4>
              <ul>
                <li><a href="#">AKTUELLES</a></li>
                <li><a href="#">NEWSLETTER</a></li>
                <li>
                  <div>
                    <label for="z09xc">BLOG</label>
                    <input type="checkbox" id="z09xc" />
                    <ul>
                      <li><a href="#">mit regelmäßigen Einträgen</a></li>
                    </ul>
                  </div>
                </li>
                <li><a href="#">VIDEOS</a></li>
              </ul>
            </div>
            <div>
              <h4>KONTAKT</h4>
              <ul>
                <li>
                  <div>
                    <label for="z09xc_">KONTAKTFORMULAR</label>
                    <input type="checkbox" id="z09xc_" />
                    <ul>
                      <li><a href="#">mit Themenauswahl</a></li>
                    </ul>
                  </div>
                </li>
                <li>
                  <div>
                    <label for="z09xc_">Standort spezifisch</label>
                    <input type="checkbox" id="z09xc_" />
                    <ul>
                      <li><a href="#">Ansprechpartner</a></li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div>
            <a href="#" class="btn"> UNSERE <span>REFERENZEN &gt;&gt;</span> </a>
            <a href="#" class="btn"> UNSERE <span>REFERENZEN &gt;&gt;</span> </a>
          </div>
        </div>
      </nav>
    </header>
    <section>
      <h5>
        <span class="dot"></span>
        <span class="bold">NUCIDA</span>
        <span class="light">GROUP</span>
        <span class="dot end"></span>
      </h5>
      <h1>
        <span class="red">IMAGE</span>
        EVERYTHING
        <span class="font2">runs</span>
        BY
        <span class="bold">ITSELF</span>
      </h1>
      <a href="#" class="btn">TERMIN <span>VEREINBAREN >></span> </a>
    </section>
    <div class="scroller">
      <div>
        <span></span>
        <span></span>
      </div>
      <span class="red">></span>
      <span>SCROLL</span>
    </div>
  </div>
  <main>
    <section class="container text-container" id="boost">
      <h2>
        <span class="dot"></span>
        <span class="font2">we</span>
        <span class="red">BOOST</span>
        <span class="font2">your</span>
        <span class="bold">BUSINESS</span>
        <span class="dot end"></span>
      </h2>
      <p>
        The NUCIDA consulting team supports you in your projects in the areas of marketing, software quality, financial management and digital transformation. No matter whether we solve an urgent problem for you or a new project is to be planned successfully. We are always at your side with our know-how and take care that your company can operate even more successfully on the market.
      </p>
      <div class="grid">
        <div>
          <h4>BUSINESS CONSULTING</h4>
          <ul>
            <li>PROCESS CONSULTING</li>
            <li>STRATEGY CONSULTING</li>
            <li>BUSINESS DEVELOPMENT</li>
            <li>MARKETING</li>
            <li>VENTURE CAPITAL</li>
            <li>C-LEVEL COACHING</li>
          </ul>
        </div>
        <div>
          <h4>SOFTWARE QUALITY</h4>
          <ul>
            <li>QUALITY STRATEGY</li>
            <li>TEST STRATEGY</li>
            <li>PROCESS MANAGEMENT</li>
            <li>TEST MANAGEMENT</li>
            <li>TEST AUTOMATION</li>
            <li>TEST REPORTING</li>
          </ul>
        </div>
        <div>
          <h4>BUSINESS DEVELOPMENT</h4>
          <ul>
            <li>PROCESS CONSULTANCY</li>
            <li>STRATEGY CONSULTING</li>
            <li>MANAGER & TEAM COACHING</li>
            <li>DOCUMENTATION SYSTEM</li>
            <li>QM/QA SERVICES</li>
          </ul>
        </div>
      </div>
    </section>
    <section id="looks">
      <div class="container">
        <div class="blind content">
          <h5>
            <span class="dot"></span>
            <span class="bold">NUCIDA</span>
            <span class="light">GROUP</span>
            <span class="dot end"></span>
          </h5>
          <h2>
            <span>IT</span>
            <span class="font2">looks</span>
            <span>COMPLICATED</span>
            <br />
            <span>BUT THEN</span>
            <span class="red">EVERYTHING</span>
            <span>BECOMES</span>
            <span class="bold">EASIER</span>
          </h2>
        </div>
        <div class="img">
          <img src="./assets/icon.svg" alt="" />
          <div style="--top: 5%; --left: 50%;">
            <span class="icon_"></span>
            <div>Software <span>Testing</span></div>
          </div>
          <div style="--top: 20%; --left: 30%;">
            <span class="icon_"></span>
            <div>Software <span>Testing</span></div>
          </div>
          <div style="--top: 70%; --left: 60%;">
            <span class="icon_"></span>
            <div>Software <span>Testing</span></div>
          </div>
        </div>
      </div>
    </section>
    <section class="container text-container">
      <h2>
        <span class="dot"></span>
        <span class="font2">we</span>
        <span class="red">BOOST</span>
        <span class="font2">your</span>
        <span class="bold">BUSINESS</span>
        <span class="dot end"></span>
      </h2>
      <p>
        We want to use our knowledge to create a competitive edge for as many people as possible. In various industries, we create easy access to the topics surrounding digital transformation. Because for us, digitization is much more than just technology; it starts with digital culture, puts business models to the test, and generates innovations. In the process, we also take on operational, digital services for our customers; worldwide from North America to Southeast Asia! On this page you will find current examples of how we work with our customers.
      </p>
    </section>
    <section id="management">
      <div class="grid grid-2 container">
        <div>
          <h3>
            <span class="red">LEAN</span>
            <span>MANAGEMENT</span>
          </h3>
          <img src="./assets/ai_bg.png" alt="" />
          <div class="content">
            <div class="icon">
              <img src="./assets/lean.svg" alt="" />
            </div>
            <p>
              NUCIDA helps companies with the digital transformation of their business processes. By combining visual modeling and descriptions of the processes including their workflows, we increase transparency and standardization. The additional model validation proves the improvements achieved through this. Together with the business units concerned, we reduce frictional losses and waste of resources.
            </p>
          </div>
        </div>
        <div>
          <h3>
            <span class="red">AGILE</span>
            <span>PROZESSE</span>
          </h3>
          <img src="./assets/ai_bg.png" alt="" />
          <div class="content">
            <div class="icon">
              <img src="./assets/agile.svg" alt="" />
            </div>
            <p class="truncate" style="--line: 8;">
              At NUCIDA, we advise companies on agile topics to improve self-organization, the distribution of authority, role clarity, and the effective design of meetings and decision-making processes without the organization drifting into chaos. Agile transformation creates the basis for remaining competitive in a rapidly changing environment through an increased ability to change, learn and innovate.
            </p>
          </div>
        </div>
        <div>
          <h3>
            <span class="red">STRATEGY </span>
            <span>CONSULTING</span>
          </h3>
          <img src="./assets/ai_bg.png" alt="" />
          <div class="content">
            <div class="icon">
              <img src="./assets/strategie.svg" alt="" />
            </div>
            <p class="truncate" style="--line: 8;">
              NUCIDA Consulting helps maximize your success with smart ideas, proven methodologies, innovative technologies and massive implementation power. We create superior strategies and tactics to establish highly profitable business models including effective as well as efficient organizations. Regarding digitalization and digital transformation, we bring together strategic thinking and technological expertise.
            </p>
          </div>
        </div>
        <div>
          <h3>
            <span class="red">TEAM</span>
            <span>BUILDING</span>
          </h3>
          <img src="./assets/ai_bg.png" alt="" />
          <div class="content">
            <div class="icon">
              <img src="./assets/team.svg" alt="" />
            </div>
            <p class="truncate" style="--line: 8;">
              Team and organizational constellations use information that escapes our conscious attention. NUCIDA promotes the efficiency of teams and organizations through further development and improvement of conflict resolution intelligence. We take into account all relationships, communication channels, as well as stakeholders and / or excluded system elements.
            </p>
          </div>
        </div>
        <div>
          <h3>
            <span class="red">INTERIM</span>
            <span>MANAGEMENT</span>
          </h3>
          <img src="./assets/ai_bg.png" alt="" />
          <div class="content">
            <div class="icon">
              <img src="./assets/interim.svg" alt="" />
            </div>
            <p class="truncate" style="--line: 8;">
              Interim management is also called temporary management. It is a temporary assignment of a NUCIDA project manager in your company who takes over precisely defined management tasks. The goal is, among other things, to set up an efficient, transparent project organization, to plan projects systematically, to drive forward decisions, and to distribute tasks in a binding manner.
            </p>
          </div>
        </div>
        <div>
          <h3>
            <span class="red">BUSINESS</span>
            <span>DEVELOPMENT</span>
          </h3>
          <img src="./assets/ai_bg.png" alt="" />
          <div class="content">
            <div class="icon">
              <img src="./assets/business.svg" alt="" />
            </div>
            <p class="truncate" style="--line: 8;">
              NUCIDA Business Development focuses on the development of business areas and on the systematic further development of existing and innovative business fields. Our NUCIDA consultants identify new market and marketing opportunities in order to transform them into concrete business models and strategies. Here, time is the livelihood security or the expansion of enterprises.
            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="container text-container" style="padding-bottom: 0;">
      <h2>
        <span class="dot"></span>
        <span class="font2">we</span>
        <span class="red">BOOST</span>
        <span class="font2">your</span>
        <span class="bold">BUSINESS</span>
        <span class="dot end"></span>
      </h2>
      <p>
        For us, digiti­zation does not simply mean moder­nizing what already exists, but above all reshaping the future. That is why we have made it our goal to pro­vide our customers with sustai­nable sup­port in the digiti­zation of the entire value chain. Our work always has only one goal: your suc­cess!
      </p>
    </section>
    <section id="features" class="container grid grid-3">
      <div>
        <img src="./assets/hand.svg" alt="" />
        <h5>
          <span class="dot"></span>
          <div class="red">
            <div class="odometer roller" data-max="191">0</div>
            <span>+</span>
          </div>
          <span class="dot end"></span>
        </h5>
        <h5>satisfied customers</h5>
      </div>
      <div>
        <img src="./assets/shake.svg" alt="" />
        <h5>
          <span class="dot"></span>
          <div class="red">
            <div class="roller odometer" data-max="98">0</div>
            <span>%</span>
          </div>
          <span class="dot end"></span>
        </h5>
        <h5>retention rate</h5>
      </div>
      <div>
        <img src="./assets/coins.svg" alt="" />
        <h5>
          <span class="dot"></span>
          <div class="red">
            <span><small>$</small></span>
            <div class="odometer roller" data-max="200">0</div>
            <span><small>B+</small></span>
          </div>
          <span class="dot end"></span>
        </h5>
        <h5>our clients’ overall revenue</h5>
      </div>
    </section>
    <section id="excited">
      <div class="container">
        <div class="blind content">
          <h5>
            <span class="dot"></span>
            <span class="bold">NUCIDA</span>
            <span class="light">GROUP</span>
            <span class="dot end"></span>
          </h5>
          <h2>
            <span class="font2">everyone</span>
            <span>IT TALKING</span>
            <span>ABOUT AI.</span>
            <br />
            <span>WE ARE</span>
            <span class="red">EXISTED</span>
            <span>ABOUT </span>
            <span class="bold">Ai 2.0!</span>
          </h2>
          <a href="#" class="btn">UNSERE <span class="red">REFERENZEN >></span></a>
        </div>
      </div>
    </section>
    <section id="global">
      <div class="container grid grid-3">
        <div>
          <img src="./assets/global_c.svg" alt="" />
          <h4>
            <span class="dot"></span>
            <span class="red">Collaboration</span>
            <span class="dot end"></span>
          </h4>
          <h5>
            Achieve more together
          </h5>
          <p>
            We have a flair for uni­fying complex processes without reducing their performance. We offer solutions to opti­mize the cost of your business processes.
          </p>
        </div>
        <div>
          <img src="./assets/kollab.svg" alt="" />
          <h4>
            <span class="dot"></span>
            <span class="red">Affiliate</span>
            <span class="dot end"></span>
          </h4>
          <h5>
            Participate in success
          </h5>
          <p>
            With your participation in our affiliate program you parti­ci­pate in our success and here­by expand your service portfolio.
          </p>
        </div>
        <div>
          <img src="./assets/affiliate.svg" alt="" />
          <h4>
            <span class="dot"></span>
            <span class="red">Webinare</span>
            <span class="dot end"></span>
          </h4>
          <h5>
            Using online seminars
          </h5>
          <p>
            Make your com­pany com­peti­tive. Train your em­ployees to become experts through our online seminars.
          </p>
        </div>
      </div>
    </section>
    <section id="partner" class="container">
      <h2>
        <span class="dot"></span>
        <span class="font2">our</span>
        <span class="red">REFERENCES</span>
        <span class="dot end"></span>
      </h2>
      <div class="grid">
        <div>
          <img src="./assets/P1.png" alt="" />
        </div>
        <div>
          <img src="./assets/P2.png" alt="" />
        </div>
        <div>
          <img src="./assets/P3.png" alt="" />
        </div>
        <div>
          <img src="./assets/P4.png" alt="" />
        </div>
        <div>
          <img src="./assets/P5.png" alt="" />
        </div>
        <div>
          <img src="./assets/P6.png" alt="" />
        </div>
        <div>
          <img src="./assets/P7.png" alt="" />
        </div>
        <div>
          <img src="./assets/P8.png" alt="" />
        </div>
        <div>
          <img src="./assets/P9.png" alt="" />
        </div>
        <div>
          <img src="./assets/P10.png" alt="" />
        </div>
        <div>
          <img src="./assets/P11.png" alt="" />
        </div>
        <div>
          <img src="./assets/P12.png" alt="" />
        </div>
        <div>
          <img src="./assets/P13.png" alt="" />
        </div>
        <div>
          <img src="./assets/P14.png" alt="" />
        </div>
        <div>
          <img src="./assets/P15.png" alt="" />
        </div>
        <div>
          <img src="./assets/P16.png" alt="" />
        </div>
        <div>
          <img src="./assets/P17.png" alt="" />
        </div>
        <div>
          <img src="./assets/P18.png" alt="" />
        </div>
    </section>
    <section id="testimonial">
      <div class="container">
        <h2>
          <span class="dot"></span>
          <span class="red">CUSTOMER'S</span>
          <span class="font2">testimonials</span>
          <span class="dot end"></span>
        </h2>
        <div class="owl-carousel owl-theme">
          <div class="item">
            <p>
              The NUCIDA Group advises us on the establishment and further development of our quality assurance within the myClaim product line. In doing so, the consulting team with a lot of experience understands how to confidently introduce all success-critical topics.
            </p>
            <h5>
              <div>
                <span class="red">RAINER</span>
                <span>ERHARDT</span>
              </div>
              <div class="red">DAT GROUP <small>| www.dat.de</small></div>
            </h5>
          </div>
          <div class="item">
            <p>
              The NUCIDA Group advises us in the area of software quality and test management. This has enabled us to achieve a significant reduction in testing effort while at the same time improving software quality.
            </p>
            <h5>
              <div>
                <span class="red">Peter </span>
                <span>Kuntze,</span>
              </div>
              <div class="red">DB Netz<small>| www.dbnetze.com</small></div>
            </h5>
          </div>
          <div class="item">
            <p>
              We owe NUCIDA Group the utmost respect and gratitude, as we would not be as far along in our many IT projects as we currently are without their project input for test automation.
            </p>
            <h5>
              <div>

                <span class="red">Dr. Michael </span>
                <span>Rook,</span>
              </div>
              <div class="red">DB Cargo<small>| www.dbcargo.com</small></div>
            </h5>
          </div>
          <div class="item">
            <p>
              Thank you very much for your support in the area of quality assurance and development. Everything worked very well from my perspective. We will continue to purchase more project services from NUCIDA consultants in the future.
            </p>
            <h5>
              <div>

                <span class="red">Peter </span>
                <span>Wolf,</span>
              </div>
              <div class="red">Koerber Group <small>| www.koerber.com</small></div>
            </h5>
          </div>
          <div class="item">
            <p>
              NUCIDA Group supports the validation of IT systems with profound know-how in the field of GxP. The topics are: Change & Configuration Management, development of service processes and training of individual IT service units
            </p>
            <h5>
              <div>
                <span class="red">Dr. Alexander </span>
                <span>Labhardt,</span>
              </div>
              <div class="red">Hofmann-La Roche <small>| www.roche.com</small></div>
            </h5>
          </div>
          <div class="item">
            <p>
              NUCIDA Group consists of recognized QM experts who meet the specific requirements of projects. The consulting team has a strong sense of quality and the will to methodically achieve project goals.
            </p>
            <h5>
              <div>
                <span class="red">Dr. Gunter </span>
                <span>Dubrau,</span>
              </div>
              <div class="red">ICW / x-tension <small>| www.icw-global.com</small></div>
            </h5>
          </div>
          <div class="item">
            <p>
            Time and time again, NUCIDA Group consultants deliver outstanding results. We will continue to award more project work to NUCIDA Group in the future.
            </p>
            <h5>
              <div>
                <span class="red">Andreas </span>
                <span>Sent,</span>
              </div>
              <div class="red">Knappschaft Bahn See  <small>| www.kbs.de</small></div>
            </h5>
          </div>
          <div class="item">
            <p>
            In the field of software quality, one can expect international level of performance from NUCIDA consultants and will never be disappointed; very good cooperation in IT projects.
            </p>
            <h5>
              <div>
                <span class="red">Jens </span>
                <span>Winter,</span>
              </div>
              <div class="red">IBM <small>| www.ibm.com</small></div>
            </h5>
          </div>
          <div class="item">
            <p>
            We were able to save 90% of our quality assurance costs thanks to the implementation of the NUCIDA QA Cloud platform.
            </p>
            <h5>
              <div>
                <span class="red">Nikolai </span>
                <span>Back,</span>
              </div>
              <div class="red">Pickert & Partner <small>| www.pickert.gmbh</small></div>
            </h5>
          </div>
          <div class="item">
            <p>
            We at BMW Group rely heavily on enterprise-ready, robust and mature software. After evaluating some competitors over a longer time we finally decided for Xray. This high-quality software supports agile development processes very well, integrates smoothly into Jira and proves to be the missing part for testing in Jira in any aspect.
            </p>
            <h5>
              <div>
                <span class="red">Michael </span>
                <span>Merwald,</span>
              </div>
              <div class="red">BMW <small>| www.bmw.com</small></div>
            </h5>
          </div>
          <div class="item">
            <p>
            NUCIDA brought our engineers back to using a centralized tool for their test execution and specification. Xray has a very simple UI and a great API, so folks need only a couple of minutes to get used to it, without any training necessary. The team always has an open ear for feature requests and a quick reaction on bug fixes.
            </p>
            <h5>
              <div>
                <span class="red">Florian </span>
                <span>Rohde,</span>
              </div>
              <div class="red">Tesla <small>| www.tesla.com</small></div>
            </h5>
          </div>
          <div class="item">
            <p>
            The support service so heart-warming it almost melts you. Seriously, the questions I addressed were pretty hardcore but every item was resolved with a very detailed answer. After some ideas of mine, even an improvement report was created - looking forward to working with you guys.
            </p>
            <h5>
              <div>
                <span class="red">Robert </span>
                <span>Aksenov,</span>
              </div>
              <div class="red">T-Systems <small>| www.t-systems.com</small></div>
            </h5>
          </div>
        </div>
        <script>
          // Initialize Owl Carousel
          $(".owl-carousel").owlCarousel({
            loop: true,
            autoplay: true,
            autoplayTimeout: 10000,
            nav: true,
            items: 1,
            lazyLoad: true,
            dots: true,
            margin: 10,
          });
        </script>
      </div>

    </section>
    <section id="join">
      <div class="container text-container">
        <h2>
          <span class="dot"></span>
          <span class="font2">join</span>
          <span>US IN THE</span>
          <br>
          <span class="red">SELECTION</span>
          <span class="bold">PROCESS</span>
          <span class="dot end"></span>
        </h2>
        <p>
        We believe in partnership every step of the way, including choosing the best solutions for your business. By involving you in the selection process, we ensure that the tools, strategies, and approaches we implement align perfectly with your goals. Together, we’ll evaluate options, consider innovations, and tailor solutions that empower your business to thrive. Join us to make informed, impactful choices that drive your success.
        </p>
        <a href="#" class="btn">30 MINUTES <span>INITIAL CONSULTATION >></span> </a>
      </div>
    </section>
  </main>
  <footer>
    <div class="container grid grid-4">
      <div class="brand">
        <a href="#" class="logo">
          <img src="./assets/logo.svg" alt="NUCIDA GROUP">
        </a>
        <div class="socials">
          <a href="#">
            <img src="./assets/fb.svg" alt="NUCIDA GROUP">
          </a>
          <a href="#">
            <img src="./assets/linkedin.svg" alt="NUCIDA GROUP">
          </a>
        </div>
      </div>
      <div class="contact">
        <h4><span class="bold">NUCIDA</span> LONDON</h4>
        <span>LONDON, EC3V 3NG</span>
        <div>
          <span class="red">T</span>
          020 82424431
        </div>
        <div>
          <span class="red">E</span>
          INFO@NUCIDA.COM
        </div>
        <div>
          NUCIDA.COM
        </div>
      </div>
      <nav>
        <h4>STANDORTE</h4>
        <ul>
          <li>BANGKOK</li>
          <li>FRANKFURT</li>
          <li>KARLSRUHE</li>
          <li>LONDON</li>
          <li>NEW YORK</li>
          <li>WASHINGTON DC</li>
        </ul>
      </nav>
      <div class="nav">
        <ul>
          <li>AGBS</li>
          <li>IMPRESSUM</li>
          <li>DSGVO</li>
        </ul>
        <div>
          <div class="lang">
            <a href="?lang=de">DE</a>
            <a href="?lang=en">EN</a>
            <a href="?lang=fr">FR</a>
            <a href="?lang=thai">THAI</a>
          </div>
        </div>
      </div>
    </div>
    <div class="line"></div>
  </footer>
</body>

<script src="./js/app.js"></script>

</html>