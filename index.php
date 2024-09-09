<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP ToDo List JSON</title>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body>
    <div id="app">
        <h1>ToDo List</h1>
    </div>

    <script>
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
    </script>
</body>

</html>