let app = new Vue({
    el: '#root',
    data: {
        disks: []
    },
    mounted(){
        axios.get('../milestone-1/music.php')
        .then(response => this.disks = response.data.response)
        .catch(error => console.log(error));
    }
});