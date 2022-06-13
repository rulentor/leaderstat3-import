<?
$post = $_POST;
$get = $_GET;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Парсер проверка АПИ</title>
</head>
<body>
<p>Форма АПИ</p>
<form method='post' action=''>
<label>Наименование</label>
<input id='name' name='name'/>
<input type='submit' value='Отправить'/>
</form>
<input type='button' value='Пульнуть' onclick='find()'/>
</body>
</html>
<script>
var url = "https://suggestions.dadata.ru/suggestions/api/4_1/rs/suggest/okved2";
var token = "39c340a98e0b220c38943c9d6d0fab269747321d";
var query = {
  //query: "запуск",
  query: "13.10.4",  
  //name: "запуск",   
}
var options = {
    method: "POST",
    mode: "cors",
    headers: {
        "Content-Type": "application/json",
        "Accept": "application/json",
        "Authorization": "Token " + token
    },
    body: JSON.stringify(query)
}

function find() {
fetch(url, options)
.then(response => response.text())
.then(result => console.log(result))
.catch(error => console.log("error", error));
}
</script>