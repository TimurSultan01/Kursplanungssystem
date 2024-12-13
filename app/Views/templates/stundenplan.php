<div class="container mt-5">
    <h2>zukünftiger Stundenplan</h2>
    <?php 
    if ($zustand == 'prof'){
        echo $zustand;
    }
    elseif ($zustand == 'stud'){
        echo $zustand;
    } else {
        echo 'Du bist nicht angemeldet';
    }
    ?>
</div>