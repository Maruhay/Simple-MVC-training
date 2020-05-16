<main class="container">
    <div class="row">
        <div class="col-12 col-md-8">
            <?php

            $page = htmlspecialchars($_GET['page']);
            switch ($page){
                case 'register':
                    include_once 'register.html';
                    break;
                case 'posts':
                    include_once 'posts.php';
                    break;
                case 'profile':
                    include_once 'profile.html';
                    break;
                default:
                    include_once 'login.html';
                    break;
            }

            ?>
        </div>
        <div class="col-12 col-md-4">
            <?php

            include_once 'nav.html';

            ?>
        </div>
    </div>
</main>