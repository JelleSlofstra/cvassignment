<?php require 'views/partials/header.view.php' ?>

<div class="main">
    <p>
        <div> Name: <?= $vars[0]->first_name . ' ' . $vars[0]->last_name ?> </div>
        <div> E-mail: <?= $vars[0]->email ?> </div>
        <div> Phone: <?= $vars[0]->phone ?> </div>    
        <div> Date of birth: <?= $vars[0]->date_birth ?> </div>    
    </p>

    <p>
        <?= $vars[0]->pitch ?>  
    </p>
</div>

<?php require 'views/partials/footer.view.php' ?>