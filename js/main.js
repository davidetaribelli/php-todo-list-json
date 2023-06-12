const {createApp} = Vue;

createApp({
    data(){
        return{
            apiUrl: "api.php", 
        }
    },
    mounted(){
        axios.get(this.apiUrl).then((response) => {
            console.log("Dati ricevbuti:", response.data)
        });
    } 
}).mount('#app')