<header class="d-flex justify-content-between align-items-center">
    <div class="container-fluid">
        <img class="py-2" src="img/Spotify.png" alt="Spotify">
    </div>
    <div class="px-3">
        <select class="border-0 mx-5 text-center" v-model="valueSelect" @change="changeGenre">
            <option value="All">
                All Genres
            </option>
            <option v-for="(genre, index) in genres" :key="index" :value="genre">
                {{ genre }}
            </option>
        </select>
    </div>
</header>