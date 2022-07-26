const App = new Vue(
    {
        el: '#root',
        data: {
            albums: []
        },
        created() {
            axios.get('http://localhost:8888/php-ajax-dischi/milestone-2/api.php')
                .then((result) => {
                    this.albums = result.data.results;
                })
                .catch((error) => { console.log(error); });
        }
    }
);