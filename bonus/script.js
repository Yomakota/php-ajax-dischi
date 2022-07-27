const App = new Vue(
    {
        el: '#root',
        data: {
            albums: [],
            genres: [],
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
                .then((result) => {
                    this.albums = result.data.results;

                    this.albums.forEach((element) => {
                        if (!this.genres.includes(element.genre)) {
                            this.genres.push(element.genre);
                        }
                    });
                })
                .catch((error) => { console.log(error); });
        }
    }
);