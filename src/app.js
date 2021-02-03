import Vue from "vue";

let app = new Vue({
    el: '#root',
    data: {
        disks: [],
        //Bonus
        genres: [],
        selectedGenre: 'All'
    },
    //metodi per il Bonus
    methods:{
        fillSelect(){
            const selectElement = document.querySelector('select');
            for(let genre of this.genres){
                const markup = `<option value="${genre}">${genre}</option>`;
                selectElement.insertAdjacentHTML('beforeend', markup);
            }
        },
        filterGenre(){
            const url = `../milestone-1/music.php?genre=${this.selectedGenre}`;
            axios.get(url)
                .then(response => {
                    this.disks = response.data.response;
                })
                .catch(error => console.log(error));
        }
    },
    mounted(){
        axios.get('../milestone-1/music.php')
        .then(response => {
            this.disks = response.data.response;
            //Bonus
            for(let disk of this.disks){
                if(!this.genres.includes(disk.genre)){
                    this.genres.push(disk.genre);
                }
            }
            this.fillSelect();
        })
        .catch(error => console.log(error));
    }
});