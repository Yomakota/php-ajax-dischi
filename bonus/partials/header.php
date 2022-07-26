<header class="d-flex justify-content-between align-items-center">
    <div class="container-fluid">
        <img class="py-2" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/Spotify_logo_without_text.svg/2048px-Spotify_logo_without_text.svg.png" alt="Spotify">
    </div>
    <div class="px-3">
        <select class="border-0 text-center" v-model="valueSelect" @change="changeGenre">
            <option value="All">All Genres</option>
            <option value="Rock">Rock</option>
            <option value="Pop">Pop</option>
            <option value="Jazz">Jazz</option>
            <option value="Metal">Metal</option>
        </select>
    </div>
</header>