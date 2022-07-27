<header class="d-flex justify-content-between align-items-center">
    <div class="container-fluid">
        <img class="py-2" src="img/Spotify.png" alt="Spotify">
    </div>
    <div class="d-flex">
        <select class="border-0 mx-5 text-center" v-model="valueSelect" @change="changeGenre">
            <option value="All">
                All Genres
            </option>
            <option v-for="(genre, index) in genres" :key="index" :value="genre">
                {{ genre }}
            </option>
        </select>
        <select class="border-0 mx-5 text-center" v-model="authorSelect" @change="changeAuthor">
            <option value="All">
                All Artists
            </option>
            <option v-for="(author, index) in authors" :key="index" :value="author">
                {{ author }}
            </option>
        </select>
    </div>
</header>