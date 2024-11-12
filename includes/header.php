<header>
  <div class="container">
    <a href="#" class="menu">
      <div>
        <span></span>
        <span></span>
        <span></span>
      </div>
      <?php TemplateLoader::loadPart("header", "a.menu"); ?>

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
      <h3><?php TemplateLoader::loadPart("header", "h3.head"); ?></h3>
      <div class="navs grid">
        <?php TemplateLoader::loadPart("header", "#navs"); ?>
      </div>
      <div>
        <?php TemplateLoader::loadPart("header", ".btns0"); ?>
      </div>
    </div>
  </nav>
</header>