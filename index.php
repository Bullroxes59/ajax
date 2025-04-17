<?php

?>

<!DOCTYPE html>

<html lang="fr">
  <head>
    <meta charset="utf-8" />

    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <meta
      name="description"
      content="Region Departement Ville exemple avec Ajax & JQuery"
    />

    <meta name="author" content="Ryad Afpa Roubaix" />

    <meta name="generator" content="" />

    <title>Region Departement Ville exemple</title>

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7"
      crossorigin="anonymous"
    />



    <link href="../assets/css/floating-labels.css" rel="stylesheet" />
  </head>

  <body>
    <form class="form-signin" method="POST" action="">
      <div class="text-center mb-4">
        <h1 class="h3 mb-3 font-weight-normal">
          Region Departement Ville exemple avec ajax & jquery
        </h1>

        <?php if(isset($message)){echo $connexion->getMessageBase();} ?>
      </div>

      <div class="form-label-group">
        <select
          class="custom-select d-block w-100"
          id="region"
          name="region"
          onChange="getDepartement(this.value);"
          required
        >
      <option value="">Choisissez une region</option>
    </select>
      </div>

      <div class="form-label-group">
        <select
          class="custom-select d-block w-100"
          id="departement"
          name="departement"
          onChange="getVille(this.value);"
          required
        >
          <option value="">Choisissez un département</option>
        </select>
      </div>

      <div class="form-label-group">
        <select
          class="custom-select d-block w-100"
          id="ville"
          name="ville"
          required
        >
          <option value="">Choisissez une ville</option>
        </select>
      </div>

      <br />

      <button
        class="btn btn-lg btn-primary btn-block"
        type="submit"
        name="submit"
      >
        Valider
      </button>

      <br />

      <div class="form-label-group text-center">
        <div class="alert alert-primary" role="alert"></div>
      </div>

      <p class="mt-5 mb-3 text-muted text-center">
        &copy; Afpa Roubaix 2016-2019
      </p>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>

