const {createApp} = Vue;

createApp({

    data(){
        return {
            todo: [],
            itemText: "",
            apiUrl: "server.php",
        }
    },
    methods:{
        getData(){
            axios.get(this.apiUrl).then((res)=>{
                this.todo = res.data;
                console.log(res.data);
            });
        },
        toggleDone(id){
            const item = this.todo.find((el)=>{
            return el.id === id;
            })
            console.log(item);
            if(item){
                item.done = !item.done; 
            }
        },

        removeItem(id){
            const i = this.todo.findIndex((el)=> el.id === id);

        if(i !== -1){
            this.todo.splice(i, 1);
        }
        console.log(i);
        },

        addTodo(){
            const list = {...this.newObj}
            const newObj = {
                id: "",
                text: "",
                done: false
            }
            list.id = 0;
           
            this.todo.forEach((el)=>{
                if (list.id < el.id){
                    list.id = el.id;
                }
            });
            newObj.id = list.id + 1;
            this.todo.unshift(newObj);
            this.id = newObj.id;
            this.text = newObj.text;
            this.done = true;
          
            const data = new FormData();
            for (let key in list) {
                data.append(key, list[key]);
            }
            axios.post(this.apiUrl, data).then((res)=>{
                console.log(res.data);
                this.list = res.data;
            });
        }
    },
    mounted(){
        /* console.log(this.todoList); */
        this.getData();
    }

}).mount('#app');