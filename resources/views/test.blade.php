<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
</head>

<body>
    <ul id="list">
        <li>
            thanhphan
        </li>
        <li>
            nhut truong
        </li>
    </ul>
    <button id="btn">click</button>
</body>
<script>
   $("#btn").click(function(){
      $("#list").append("<li>ok</li>")
   })
</script>

</html>