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
                console.log(resp.data);
            });
        }
    }
}).mount('#app');