<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH' crossorigin='anonymous'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css' integrity='sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==' crossorigin='anonymous' referrerpolicy='no-referrer' />
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.8/axios.min.js" integrity="sha512-PJa3oQSLWRB7wHZ7GQ/g+qyv6r4mbuhmiDb8BjSFZ8NZ2a42oTtAq5n0ucWAwcQDlikAtkub+tPVCw4np27WCg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="css/style.css">
    <script src='https://unpkg.com/vue@3/dist/vue.global.js'></script>
    <script src="js/script.js" type="module"></script>
    <title>Vue To Do List</title>
</head>
<body>
    <div id="app">
        <header class="p-4">
            
        </header>
        <main class="p-4">
            <h2 class="text-center text-uppercase">To Be Read</h2>
                <ul class="list-group list-group-flush rounded border border-5 border-light mt-4">
                    <li class="list-group-item d-flex justify-content-between pointer" v-for="(item,index) in todo" :key="item.id">
                       <span :class="{'text-decoration-line-through' : item.done}" @click="toggleDone(item.id)">
                        {{item.text}}
                        </span>
                       <i class="fa-regular fa-circle-xmark" @click="removeItem(item.id)"></i>
                    </li>
                </ul>
                <div id="input-container" class="d-flex justify-content-between pt-4">
                    <input class="form-control me-4 " type="text" id="todotext" v-model="itemText" @keyup.enter="addTodo">
                    <button class="btn btn-success" @click="addTodo()">Add</button>
                </div>
            </div>
        </main>
    </div>
    
</body>
</html>