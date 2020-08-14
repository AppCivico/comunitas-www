@setup
require __DIR__.'/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$homolServer = env('HOMOL_SERVER_ADDRESS')
@endsetup

@servers(['homol' => $homolServer])


@task('deployHomol', ['on' => 'homol'])
    sudo su
    cd /home/jenkins-data/dev-persistent/comunitas-www/src
    git pull
    docker exec --user=laradock laradock_workspace_1 php artisan migrate
    docker exec --user=laradock laradock_workspace_1 php artisan cache:clear && php artisan view:clear
@endtask
