<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cartela de Bingo</title>
    <style>
        /* Estilos CSS para a cartela de bingo */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url("<?= base_url('/assets/img/background.jpeg') ?>");
            height: 100vh;
            background-size: cover;
            display: flex;
            align-items: end;
            flex-wrap: wrap;
        }

        table {
            border-collapse: collapse;
            background-color: #fff;
            border-radius: 5px;
        }

        table,
        tr,
        td {
            border: 1px solid #000;
        }

        td {
            min-width: 40px;
            height: 30px;
            font-weight: bold;
            text-align: center;
        }

        .premio {
            background-color: #000;
            color: #fff;
            font-weight: bold;
            text-transform: uppercase;
        }

        .premio>th {
            padding: 10px;
        }

        .bingo{
            background-color: #aaa;
        }

        .table-numeros td{
            width: 12px !important;
        }
    </style>
</head>

<body>
    <div class="conteiner-bingo">
        <?php for ($t = 0; $t < 3; $t++) : ?>
            <table>
                <thead>
                    <tr class="premio">
                        <th colspan="5"><?=($t + 1)?>º Prêmio</th>
                    </tr>
                    <tr class="bingo">
                        <td>B</td>
                        <td>I</td>
                        <td>N</td>
                        <td>G</td>
                        <td>O</td>
                    </tr>
                </thead>

                <TBOdy>
                    <?php for ($i = 0; $i < 5; $i++) : ?>
                        <tr>
                            <?php for ($j = 0; $j < 5; $j++) : ?>
                                <td>00</td>
                            <?php endfor; ?>
                        </tr>
                    <?php endfor; ?>
                </TBOdy>

            </table>
        <?php endfor; ?>

        <div style="margin-bottom: 20px;">
            <table class="table-numeros">
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </div>

</div>
</body>

</html>