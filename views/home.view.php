<?php require 'views/partials/header.view.php' ?>

<div class="main">
    <p>
        <div> Naam: <?= $vars[0][0]->first_name . ' ' . $vars[0][0]->last_name ?> </div>
        <div> E-mail: <?= $vars[0][0]->email ?> </div>
        <div> Telefoonnummer: <?= $vars[0][0]->phone ?> </div>    
        <div> Geboortedatum: <?= $vars[0][0]->date_birth ?> </div>    
    </p>

    <p>
        <?= $vars[0][0]->pitch ?>  
    </p>

    <p>
        Werkervaring
        <ul>            
            <?php foreach($vars[1] as $job): ?>
                <li>
                    <?= $job->start_year ?> -
                    <?php if (!$job->end_year): ?>
                        heden:
                    <?php else: ?>
                        <?= $job->end_year ?>:
                    <?php endif; ?>
                    <b> <?= $job->function ?></b>
                    <?= $job->job_info ?>
                </li>            
            <?php endforeach; ?>
        </ul>
    </p>

    <p>
        Opleidingen
        <ul>            
            <?php foreach($vars[2] as $education): ?>
                <li>
                    <?= $education->start_year ?> -
                    <?php if (!$education->end_year): ?>
                        heden:
                    <?php else: ?>
                        <?= $education->end_year ?>:
                    <?php endif; ?>
                    <b> <?= $education->education_name ?></b>
                    <?= $education->education_info ?>
                </li>            
            <?php endforeach; ?>
        </ul>
    </p> 

    <p>
        Vrijwilligerswerk
        <ul>            
            <?php foreach($vars[3] as $volunteerjob): ?>
                <li>
                    <?= $volunteerjob->start_year ?> -
                    <?php if (!$volunteerjob->end_year): ?>
                        heden:
                    <?php else: ?>
                        <?= $volunteerjob->end_year ?>:
                    <?php endif; ?>
                    <b> <?= $volunteerjob->function ?></b>
                    <?= $volunteerjob->volunteerjob_info ?>
                </li>            
            <?php endforeach; ?>
        </ul>
    </p>

    <p>
        Skills:           
            <?php foreach($vars[4] as $skill): ?>
                <?= $skill->name ?>, 
            <?php endforeach; ?>
    </p>

    <p>
        Interesses:           
            <?php foreach($vars[5] as $hobby): ?>
                <?= $hobby->name ?>, 
            <?php endforeach; ?>
    </p>

    
</div>

<?php require 'views/partials/footer.view.php' ?>