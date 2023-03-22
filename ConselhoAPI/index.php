<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $dadosurl = json_decode(file_get_contents("https://api.adviceslip.com/advice"));
    $numConselho = json_encode($dadosurl->slip->id);
    $conselhoEn = json_encode($dadosurl->slip->advice);

    $curl = curl_init();

    curl_setopt_array($curl, [
        CURLOPT_URL => "https://google-translate1.p.rapidapi.com/language/translate/v2",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => "q=$conselhoEn!&target=pt&source=en",
        CURLOPT_HTTPHEADER => [
            "Accept-Encoding: application/gzip",
            "X-RapidAPI-Host: google-translate1.p.rapidapi.com",
            "X-RapidAPI-Key: c463756174msh8082e70f3825c74p1f1601jsn4ce68e80349d",
            "content-type: application/x-www-form-urlencoded"
        ],
    ]);

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);
    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
        $conselhoJSON = json_decode($response);
    }

    echo "<h1>Conselho numero $numConselho </h1>";
    echo $conselhoJSON->data->translations[0]->translatedText;
    ?>
</body>

</html>