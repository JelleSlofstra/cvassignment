<?php require 'views/partials/header.view.php' ?>

<div class="main">
    <p>
        <div> Naam: <?= $vars['user'][0]->first_name . ' ' . $vars['user'][0]->last_name ?> </div>
        <div> E-mail: <?= $vars['user'][0]->email ?> </div>
        <div> Telefoonnummer: <?= $vars['user'][0]->phone ?> </div>    
        <div> Geboortedatum: <?= $vars['user'][0]->date_birth ?> </div>    
    </p>

    <p>
        <?= $vars[0][0]->pitch ?>  
    </p>

    <p>
        <h2>Werkervaring</h2>
        <ul>            
            <?php foreach($vars['jobs'] as $job): ?>
                <li>
                    <?= $job->start_year ?> -
                    <?php if (!$job->end_year): ?>
                        heden:
                    <?php else: ?>
                        <?= $job->end_year ?>:
                    <?php endif; ?>
                    <b> <?= $job->function ?></b>
                    <?= $job->info ?>
                </li>            
            <?php endforeach; ?>
        </ul>
    </p>

    <p>
        <h2>Opleidingen</h2>
        <ul>            
            <?php foreach($vars['educations'] as $education): ?>
                <li>
                    <?= $education->start_year ?> -
                    <?php if (!$education->end_year): ?>
                        heden:
                    <?php else: ?>
                        <?= $education->end_year ?>:
                    <?php endif; ?>
                    <b> <?= $education->name ?></b>
                    <?= $education->info ?>
                </li>            
            <?php endforeach; ?>
        </ul>
    </p> 

    <p>
        <h2>Vrijwilligerswerk</h2>
        <ul>            
            <?php foreach($vars['volunteerjobs'] as $volunteerjob): ?>
                <li>
                    <?= $volunteerjob->start_year ?> -
                    <?php if (!$volunteerjob->end_year): ?>
                        heden:
                    <?php else: ?>
                        <?= $volunteerjob->end_year ?>:
                    <?php endif; ?>
                    <b> <?= $volunteerjob->function ?></b>
                    <?= $volunteerjob->info ?>
                </li>            
            <?php endforeach; ?>
        </ul>
    </p>

    <p>
        <h2>Overig</h2>
        Skills:           
            <?php foreach($vars['skills'] as $skill): ?>
                <?= $skill->name ?>, 
            <?php endforeach; ?>
    </p>

    <p>
        Interesses:           
            <?php foreach($vars['hobbies'] as $hobby): ?>
                <?= $hobby->name ?>, 
            <?php endforeach; ?>
    </p>

    
</div>

<?php require 'views/partials/footer.view.php' ?>