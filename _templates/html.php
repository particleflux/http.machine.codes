<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Stefan Linke">
    <meta name="description"
          content="HTTP status code <?= $code . ' - ' . $phrase ?>">
    <title><?= $code . ' - ' . $phrase ?></title>
    <style type="text/css">
        nav {
            width: 300px;
            float: left;
            display: inline;
            margin: 0;
            padding: 0;
            margin-right: 25px;
            font-size: small;
        }

        section {
            width: 600px;
            float: left;
            margin: 0;
            padding: 0;
            display: inline;
        }
    </style>
</head>
<body>
<nav role="doc-index">

    <?php
    echo implode(
        "\n",
        array_map(function ($val) {
            return "<li><a href=\"{$val['code']}.htm\">"
                . "{$val['code']} - {$val['phrase']}"
                . '</a></li>';
        },
            $statusCodes
        )
    );
    ?>
</nav>
<section>
    <h1><?= $code ?></h1>
    <h2><?= $phrase ?></h2>
    <p>
        <?= $description ?>
    </p>
    <p>
        <a href="<?= $spec_href ?>"><?= $spec ?></a>
    </p>
</section>
</body>
</html>

<?php
return "$code.htm";
