const {
    createApp
} = Vue;

createApp({
    data() {
        return {
            url: 'api.php',
        };
    },
    mounted() {
        this.getData();
    },
    methods: {
        getData() {
            axios.get(this.url).then((resp) => {
                resp.data.forEach(todo => {
                    console.log(`ID = ${todo.id}, Done = ${todo.done}, Name = ${todo.name}`);
                });
            }).catch((error) => {
                console.error('Errore durante il recupero dei dati:', error);
            });
        }
    }
}).mount('#app');