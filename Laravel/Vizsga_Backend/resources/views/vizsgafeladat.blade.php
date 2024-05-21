<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="vizsgafeladat">
    <meta name="keywords" content="HTML, CSS, PHP">
    <meta name="author" content="Petrovai Asztrik Örs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vizsga</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        .tr {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            border: 1px solid black;
            margin-left: 20px;
            margin-right: 20px;
        }

        .trhead {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            border: 1px solid black;
            margin-left: 20px;
            margin-right: 20px;
        }

        .td {
            padding: 10px;

        }

        select {
            margin-bottom: 20px;
            margin-left: 10px;
        }

        @media only screen and (max-width: 600px) {
            .tr {
                display: grid;
                grid-template-columns: 1fr;
                border: 1px solid black;
                margin-left: 20px;
                margin-right: 20px;
            }

            .trhead {
                display: none;
                visibility: hidden;
            }
        }
    </style>
</head>

<body>
    <h4>Szótár</h4>
    <h3>Szavak</h3>
    <form action="">
        <select name="tema" id="tema">
            <option value="gyumolcs">gyümölcs</option>
            <option value="munkak">munkák</option>
        </select>
        <div class="table">
            <div class="trhead">
                <div class="td">ANGOL</div>
                <div class="td">MAGYAR</div>
                <div class="td">VISSZAJELZÉS</div>
            </div>
            <div class="tr">
                <div class="td">apple</div>
                <div class="td"><input type="text"></div>
                <div class="td"><input type="checkbox" disabled="true"></div>
            </div>
            <div class="tr">
                <div class="td">pineapple</div>
                <div class="td"><input type="text"></div>
                <div class="td"><input type="checkbox" disabled="true"></div>
            </div>

        </div>
    </form>

</body>

</html>