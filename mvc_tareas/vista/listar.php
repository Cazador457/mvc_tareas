<!DOCTYPE html>
    <head>
        <title></title>
    </head>
    <body>
        <h1>Mis Tareas</h1>
        <ul>
            <?php foreach ($tareas as $t): ?>
                <li>
                    <?= $t['description'] ?>
                    <?= $t['completada'] ? "(✔)" : "<a href='index.php?action=completar&id=".$t['id']."'>Completar</a>" ?>
                </li> 
            <?php endforeach; ?>
        </ul>
        <form method="POST" action="index.php?action=agregar">
            <input type="text" name="description" placeholder="Nueva Tarea" required>
            <bitton type="submit">Agregar</button>
            </from>
    </body>
</html>