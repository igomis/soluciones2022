<table>
    <?php printf("<!-- Capçalera de la taula -->"); ?>
    <tr><th>Prova</th>
        <?php
            foreach (array_keys($records[100]) as $key){ ?>
                <th><?= ucfirst($key) ?></th>
        <?php } ?>
    </tr>

    <?php
        printf("<!-- Cos de la taula -->");
        foreach ($records as $prueba => $record){ ?>
        <tr><td><?= $prueba ?></td>
            <?php foreach ($record as $value){ ?>
                <td><?= $value ?></td>
            <?php } ?>
        </tr>
    <?php } ?>
</table>