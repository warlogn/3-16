<header>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    <link rel="stylesheet" href="./static/css/index.css">
</header>

<div align='right' class="list" >
    <h2 class="list">Fes la teva elecció:</h2>
    <table>
        <tr>
            <th></th>
        </tr>
        <?php
        include 'funcs.php';
        
        $arrChars = getChars();
        $c = count($arrChars['id']);
        for ($i = 0; $i < $c; $i++ ){
            echo "<tr>";
            echo "<td><a class='list' href='fitxa.php?id=" . $arrChars['id'][$i] . "'>" . $arrChars['nom'][$i] . "</a></td>";
            echo "</tr>";
        }
        echo '<a href = "destroySession.php"> Salir de la sesión</a>';
        ?>
    </table>

</div>