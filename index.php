<!doctype html>
<html>
<head>
	<title>Simple page</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 20px;
            width: 50%;
        }
        table, th, td {
            border: 1px solid gray;
            padding: 5px;
        }
    </style>
</head>
<body>
    <!--<script src="/sources/main.js"></script>-->
	<?php
        $population = [8175133 => ["New Yourk", ""],
            3792621 => ["Los-Angeles", "California"],
            2695598 => ["Chicago", "Illinoise"],
            2100263 => ["Huston", "Texas"],
            1526006 => ["Philadelphia", "Pensilvania"],
            1445632 => ["Phoenix", "Arizona"],
            1327407 => ["San-Antonio", "Texas"],
            1307402 => ["San-Diego", "California"],
            1197816 => ["Dallas", "Texas"],
            945942 => ["San-Hose", "California"]];
        $total_people = 0;
        foreach ($population as $people => $city) {
            $total_people += $people;
        }
        $people_per_state = [];
        foreach ($population as $people => $city) {
            switch ($city[1]) {
                case "California":
                    $people_per_state['California'] += $people;
                    break;
                case "Illinoise":
                    $people_per_state['Illinoise'] += $people;
                    break;
                case "Texas":
                    $people_per_state['Texas'] += $people;
                    break;
                case "Arizona":
                    $people_per_state['Arizona'] += $people;
                    break;
                case "Pensilvania":
                    $people_per_state['California'] += $people;
                    break;
                default:
                    $people_per_state['Federal city'] += $people;
            }
        }
                    
        asort($population);
	?>
    <table>
        <thead>
            <tr>
                <th>City</th>
                <th>Population</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($population as $people => $city): ?>
            <tr>
                <td><?= $city[0];?></td>
                <td><?= $people;?></td>
            </tr>
            <?php endforeach; ?>
            <?php foreach ($people_per_state as $state => $people): ?>
            <tr>
                <td><strong><?= $state; ?></strong></td>
                <td><?= $people; ?></td>
            </tr>
            <?php endforeach; ?>
            <tr>
                <td>Total</td>
                <td><?= $total_people; ?></td>
            </tr>
        </tbody>
    </table>
    <?php ksort($population); ?>
    <table>
        <thead>
            <tr>
                <th>City</th>
                <th>Population</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($population as $people => $city): ?>
            <tr>
                <td><?= $city[0];?></td>
                <td><?= $people;?></td>
            </tr>
            <?php endforeach; ?>
            <?php foreach ($people_per_state as $state => $people): ?>
            <tr>
                <td><strong><?= $state; ?></strong></td>
                <td><?= $people; ?></td>
            </tr>
            <?php endforeach; ?>
            <tr>
                <td>Total</td>
                <td><?= $total_people; ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>
