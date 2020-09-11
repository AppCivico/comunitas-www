<?php $homolPath = isset($homolPath) ? $homolPath : null; ?>
<?php $homolServer = isset($homolServer) ? $homolServer : null; ?>
<?php $dotenv = isset($dotenv) ? $dotenv : null; ?>
<?php
  require __DIR__.'/vendor/autoload.php';
  $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
  $dotenv->load();

  $homolServer = env('HOMOL_SERVER_ADDRESS')
  $homolPath = env('HOMOL_SERVER_PATH')
?>

<?php $__container->servers(['homol' => $homolServer]); ?>

<?php $__container->startTask('deployHomol', ['on' => 'homol']); ?>
  sudo su
  cd <?php echo $homolPath; ?>

  git pull
  docker exec --user=laradock laradock_workspace_1 php artisan migrate
  docker exec --user=laradock laradock_workspace_1 php artisan cache:clear && php artisan view:clear
<?php $__container->endTask(); ?>
