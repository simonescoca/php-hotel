<!-- Descrizione:
    Partiamo da questo array di hotel. https://www.codepile.net/pile/OEWY7Q1G
    Stampare tutti i nostri hotel con tutti i dati disponibili, iniziate in modo graduale.
    Prima stampate in pagina i dati, senza preoccuparvi dello stile.
    Dopo aggiungete Bootstrap e mostrate le informazioni con una tabella.

Bonus:
    1 - Aggiungere un form ad inizio pagina che tramite una richiesta GET permetta di filtrare gli hotel che hanno un parcheggio.
    2 - Aggiungere un secondo campo al form che permetta di filtrare gli hotel per voto
    (es. inserisco 3 ed ottengo tutti gli hotel che hanno un voto di tre stelle o superiore)

NOTA:
    deve essere possibile utilizzare entrambi i filtri contemporaneamente
    (es. ottenere una lista con hotel che dispongono di parcheggio e che hanno un voto di tre stelle o superiore)
    Se non viene specificato nessun filtro, visualizzare come in precedenza tutti gli hotel. -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
        <title>Hotels</title>
    </head>
    <body>
        <?php
            $hotels = [
                [
                    'name' => 'Hotel Belvedere',
                    'description' => 'Hotel Belvedere Descrizione',
                    'parking' => true,
                    'vote' => 4,
                    'distance_to_center' => 10.4
                ],
                [
                    'name' => 'Hotel Futuro',
                    'description' => 'Hotel Futuro Descrizione',
                    'parking' => true,
                    'vote' => 2,
                    'distance_to_center' => 2
                ],
                [
                    'name' => 'Hotel Rivamare',
                    'description' => 'Hotel Rivamare Descrizione',
                    'parking' => false,
                    'vote' => 1,
                    'distance_to_center' => 1
                ],
                [
                    'name' => 'Hotel Bellavista',
                    'description' => 'Hotel Bellavista Descrizione',
                    'parking' => false,
                    'vote' => 5,
                    'distance_to_center' => 5.5
                ],
                [
                    'name' => 'Hotel Milano',
                    'description' => 'Hotel Milano Descrizione',
                    'parking' => true,
                    'vote' => 2,
                    'distance_to_center' => 50
                ]
            ];

            foreach ($hotels as $hotel) {
                foreach ($hotel as $key => $value) {
                    
                }
            }
        ?>
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <!-- foreach delle key -->
                        <?php
                            foreach($hotel as $key => $value) {
                        ?>
                                <th scope="col">
                                    <?php
                                        if ($key === "distance_to_center") {
                                            $key = str_replace("_", " ", $key);
                                        }
                                        echo ucwords($key);
                                    ?>
                                </th>
                        <?php
                            }
                        ?>
                    </tr>
                </thead>
                <tbody>
                    <!-- foreach di hotel in hotels -->
                    <?php
                        foreach($hotels as $hotel) {
                    ?>
                            <tr>
                                <?php
                                    foreach($hotel as $key => $value) {
                                ?>
                                        <td>
                                            <?php
                                                if ($value === true) {
                                                    $value = "true";
                                                } elseif ($value === false) {
                                                    $value = "false";
                                                }
                                                echo $value
                                            ?>
                                        </td>
                                <?php
                                    }
                                ?>
                            </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </body>
</html>