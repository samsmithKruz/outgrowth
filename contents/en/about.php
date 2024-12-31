<main>
  <section id="hero">
    <div class="container">
      <div class="blind content">
        <h5>
          <span class="dot"></span>
          <span class="bold">NUCIDA</span>
          <span class="light">GROUP</span>
          <span class="dot end"></span>
        </h5>
        <h2>
          <span>THE BIGGEST PART OF</span>
          <br />
          <span>OUR</span>
          <span class="red">DIGITAL TRANSFORMATION</span>
          <br />
          <span>IS</span>
          <span class="font2">changing</span>
          <span>THE WAY</span>
          <span class="bold">WE THINK</span>
        </h2>
        <p class="condensed">
          <span class="bold">SIMEON PRESTON</span> | COMPANY |
          <span class="red">BUPA INTERNATIONAL MARKETS LIMITED</span>
        </p>
      </div>
    </div>
  </section>
  <section id="map_text">
    <div class="container text-container">
      <img src="./assets/map.png" alt="" />
      <div class="content">
        <h2>
          <span class="dot"></span>
          <span class="red">NUCIDA</span>
          <span class="bold">LONDON</span>
          <span class="dot end"></span>
        </h2>
        <p>
          At NUCIDA London, we believe digitalization is about reshaping the future rather than simply modernizing the
          present. Our commitment is to provide sustainable support across your entire value chain, focusing on your
          success. Our approach emphasizes teamwork over hierarchy, fostering leadership that adapts and embraces agile,
          digital progress. We have successfully guided many clients on the digital transformation path, helping them
          remain future-ready. With expertise in digital processes and software development, we share our knowledge so
          you too can benefit from our experience in navigating change.
        </p>
      </div>
    </div>
  </section>
  <section id="odo">
    <div class="container text-container">
      <h2>
        <span class="dot"></span>
        <span class="font2">our</span>
        <span class="red">MODE</span>
        <span class="font2">of</span>
        <span class="bold">OPERATION</span>
        <span class="dot end"></span>
      </h2>
      <p>
        We want to work together with you as partners and find the best possible so­lu­tion. In our opinion, the sole
        appli­ca­tion of "best practices" does not ne­ce­ssar­ily lead to the goal. That is why we develop in­di­vi­dual
        solutions - tailored to your specific needs - to ensure the sus­tain­abili­ty of your success beyond the end of
        the project. Our con­sul­ting is a matter of trust. We think globally and act locally (showing the
        dis­tri­bu­tion of our clients across the various global economic regions). Dis­cre­tion and neu­tra­li­ty are a
        matter of course for us.
      </p>
      <div id="features" class="grid grid-3">
        <div>
          <h5>
            <span class="dot"></span>
            <div class="red">
              <div class="odometer roller" data-max="32">0</div>
              <span>+</span>
            </div>
            <span class="dot end"></span>
          </h5>
          <h5>CORPORATIONS</h5>
        </div>
        <div>
          <h5>
            <span class="dot"></span>
            <div class="red">
              <div class="odometer roller" data-max="45">0</div>
              <span>%</span>
            </div>
            <span class="dot end"></span>
          </h5>
          <h5>HIDDEN CHAMPIONS</h5>
        </div>
        <div>
          <h5>
            <span class="dot"></span>
            <div class="red">
              <div class="odometer roller" data-max="23">0</div>
              <span>%</span>
            </div>
            <span class="dot end"></span>
          </h5>
          <h5>STARTUPS</h5>
        </div>
      </div>
    </div>
  </section>
  <section id="britain">
    <img src="./assets/britain_icon.svg" alt="" />
  </section>
  <section id="quality" class="container text-container">
    <div class="content">
      <h2>
        <span class="dot"></span>
        <span class="font2">our</span>
        <span class="red">PROJECTS</span>
        <span class="dot end"></span>
      </h2>
      <p>
        In many projects, NUCIDA consul­tants and experts succ­ess­ful­ly support companies such as bdr Group, BMW, CAS,
        Daimler, DAT Group, Deutsche Bahn, Etihad Airways, HIB, IBM, Körber.Digital, Microsoft, PTV, Roche, SCB, Smart
        and Thai Airways in the con­text of deman­ding IT projects. (We will be happy to send you a refer­ence list upon
        request; pre­sen­ta­tion of project contents or topics regar­ding their share based on all im­ple­men­ted
        projects). When may we supp­ort you?
      </p>
      <a href="#" class="btn"> our <span>REFERENCE &gt;&gt;</span> </a>
    </div>
    <div class="qualities">
      <div>
        <h3>BUSINESS DEVELOPMENT</h3>
        <div class="line">
          <span data-line="20%" style="--line: 20%;"></span>
        </div>
      </div>
      <div>
        <h3>QUALITY MANAGEMENT</h3>
        <div class="line">
          <span data-line="15%" style="--line: 15%;"></span>
        </div>
      </div>
      <div>
        <h3>SOFTWARE TESTING</h3>
        <div class="line">
          <span data-line="25%" style="--line: 25%;"></span>
        </div>
      </div>
      <div>
        <h3>PROCESS AUTOMATION</h3>
        <div class="line">
          <span data-line="17%" style="--line: 17%;"></span>
        </div>
      </div>
      <div>
        <h3>MARKETING</h3>
        <div class="line">
          <span data-line="10%" style="--line: 10%;"></span>
        </div>
      </div>
      <div>
        <h3>INTERIM MANAGEMENT</h3>
        <div class="line">
          <span data-line="13%" style="--line: 13%;"></span>
        </div>
      </div>
    </div>
    <script>
      const targetDiv = document.querySelector("#quality .qualities");

      // Create the observer function
      const observer = new IntersectionObserver(
        (entries, observer) => {
          entries.forEach((entry) => {
            // Check if the div is intersecting (i.e., in view)
            if (entry.isIntersecting) {
              // Add the class when it enters the view
              entry.target.classList.add("show");
            } else {
              entry.target.classList.remove("show");

            }
          });
        }, {
        threshold: 0.1
      }
      ); // Threshold is how much of the div needs to be visible (10% here)

      // Start observing the div
      observer.observe(targetDiv);
    </script>
  </section>
</main>