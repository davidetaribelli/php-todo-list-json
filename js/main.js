const {createApp} = Vue;

createApp({
    data(){
        return{
            apiUrl: "api.php" ,
            arrayList: [],
        }
    },
    mounted(){
        axios.get(this.apiUrl).then((response) => {
            this.arrayList = response.data;
        });
    } 
}).mount('#app')