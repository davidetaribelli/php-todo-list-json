<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDo List</title>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</head>

<body>
    <div id="app">
        <div class="container my-5">
            <div class="row">
                <div class="col-12 rounded-3 bg-primary text-white p-3">
                    <h1 class="border-bottom"> To-do list </h1>
                    <ul class="list-group">
                        <li v-for="element in arrayList" class="list-group-item">
                            {{element.text}}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <script src="./js/main.js"></script>
</body>
</html>