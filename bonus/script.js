const App = new Vue(
    {
        el: '#root',
        data: {
            albums: [],
            valueSelect: 'All',
            url: 'http://localhost:8888/php-ajax-dischi/bonus/apiGenre.php?genre=',
        },
        methods: {
            changeGenre() {
                axios.get(`${this.url}${this.valueSelect}`)
                    .then((result) => { this.albums = result.data.results; })
                    .catch((error) => { console.log(error); });
            },
        },
        created() {
            axios.get(`${this.url}${'All'}`)
                .then((result) => { this.albums = result.data.results; })
                .catch((error) => { console.log(error); });
        }
    }
);