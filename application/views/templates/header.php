<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?=$title?></title>
  <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/custom.css" />
    <?php if(isset($_SESSION['msg'])): ?>
    <script>alert("<?= $_SESSION['msg'] ?>")</script>
    <?php endif ?>
    <script>
      const BASE_URL = "<?= base_url() ?>";
    </script>
</head>
<body>
