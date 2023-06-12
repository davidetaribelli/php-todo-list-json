const {createApp} = Vue;

createApp({
    data(){
        return{
            apiUrl: "api.php" ,

        }
    },
    mounted(){
        axios.get(this.apiUrl).then((response) => {
            console.log("Dati ricevuti:", response.data);
        });
    } 
}).mount('#app')