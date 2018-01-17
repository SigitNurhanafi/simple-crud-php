
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">Simple Crud Blog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item <?php echo ($uri[1] == null and $uri[0] == null) ? 'active' : ''; ?> ">
          <a class="nav-link" href="<?=__base_url ?>">Beranda
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item <?php echo ($uri[1] == 'artikel') ? 'active' : ''; ?>">
          <a class="nav-link" href="<?=__base_url ?>post/artikel">Artikel</a>
        </li>
        <li class="nav-item <?php echo ($uri[1] == 'berita') ? 'active' : ''; ?>">
          <a class="nav-link" href="<?= __base_url ?>post/berita">Berita</a>
        </li>
        <li class="nav-item <?php echo ($uri[0] == 'agenda') ? 'active' : ''; ?>">
          <a class="nav-link" href="<?= __base_url ?>agenda">Agenda</a>
        </li>
        <?php if (isset($_SESSION['data_admin'])):?>
        <li class="nav-item">
          <a class="nav-link" href="admin" style="color:#fff900;">DASHBOARD</a>
        </li>
        <?php endif;?>
        <if>
      </ul>
    </div>
  </div>
</nav>
