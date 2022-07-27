const App = new Vue(
    {
        el: '#root',
        data: {
            albums: [],
            genres: [],
            valueSelect: 'All',
            authors: [],
            authorSelect: 'All',
            url: 'http://localhost:8888/php-ajax-dischi/bonus/api.php',
            url_genre: 'http://localhost:8888/php-ajax-dischi/bonus/apiGenre.php?genre=',
            url_author: 'http://localhost:8888/php-ajax-dischi/bonus/apiAuthor.php?author=',
        },
        methods: {
            printCards() {
                axios.get(this.url)
                    .then((result) => {
                        this.albums = result.data;
                    })
                    .catch((error) => { console.log(error) });
            },
            changeGenre() {
                axios.get(`${this.url_genre}${this.valueSelect}`)
                    .then((result) => {
                        this.albums = result.data.results;
                        this.albums.forEach((element) => {
                            if (!this.genres.includes(element.genre)) {
                                this.genres.push(element.genre);
                            }
                        });
                    })
                    .catch((error) => { console.log(error); });
            },
            changeAuthor() {
                axios.get(`${this.url_author}${this.authorSelect}`)
                    .then((result) => {
                        this.albums = result.data.results;
                        this.albums.forEach((element) => {
                            if (!this.authors.includes(element.author)) {
                                this.authors.push(element.author);
                            }
                        });
                    })
                    .catch((error) => { console.log(error); });
            },
        },
        created() {
            this.printCards();
            this.changeGenre();
            this.changeAuthor();
        }
    }
);