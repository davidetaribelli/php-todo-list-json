<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDo List</title>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
                        <li v-for="(element,i) in todoList" @click="deleteTask(i)" class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <span>{{element}}</span>
                            </div>
                            <div class="p-2 bg-primary text-white rounded-3">
                                <i class="fa-solid fa-trash-can" @click="deleteTask"></i>
                            </div>
                        </li>
                    </ul>
                    <div class="input-group my-3">
                        <input type="text" v-model="newTask" @keyup.enter="addNewTask" class="form-cxontrol w-100 p-2 rounded-3 border-0" placeholder="Add to list">
                        <button @click="addNewTask" class="btn btn-success my-2 me-4 px-3 rounded-3">Add</button>
                        <button @click="removeAllTask" class="btn btn-danger my-2 px-3 rounded-3">Remove</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="./js/main.js"></script>
</body>

</html>