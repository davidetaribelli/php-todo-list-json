const {createApp} = Vue;

createApp({
    data(){
        return{
            apiUrl: "api.php" ,
            todoList: [],
            newTask: ""
        }
    },
    mounted(){
        axios.get(this.apiUrl).then((response) => {
            this.todoList = response.data;
        });
    },
    methods:{
        sendData(data){
            axios.post(this.apiUrl, data, {
                headers: {'Content-Type': 'multipart/form-data'}
            }).then((response) => {
                this.todoList = response.data;
                this.newTask = "";
            });
        },
        addNewTask(){
            const data = {newTask: this.newTask};

            this.sendData(data);
        },
        deleteTask(i){
            const data = {deleteIndex : i};

            this.sendData(data);
        },
        removeAllTask(){
            const data = {deleteAll : true}

            this.sendData(data);
        }
    } 
}).mount('#app')