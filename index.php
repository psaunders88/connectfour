<html>
    <head>
        <title>Connect 4</title>
        <link rel="stylesheet" href="assets/css/style.css"/>
        
        <script type="text/javascript" src="assets/js/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="assets/js/connectfour.js"></script>
    </head>
    <body>
        <table>
            <thead>
                <?php for($i = 0; $i < 7; $i++): ?>
                    <th>
                        <a class="drop" data-col="<?php echo $i; ?>" href="#">drop</a>
                    </th>
                <?php endfor; ?>
            </thead>
            <tbody>
                <!-- Example row -->
                <?php for($i = 0; $i < 6; $i++): ?>
                    <tr>
                        <?php for($j = 0; $j < 7; $j++): ?>
                            <td class="empty" data-col="<?php echo $j; ?>">
                                &nbsp;
                            </td>
                        <?php endfor; ?>
                    </tr>
                <?php endfor; ?>
            </tbody>
        </table>
    </body>
</html>