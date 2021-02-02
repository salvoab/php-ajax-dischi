axios.get('../milestone-1/music.php')
    .then(response => console.log(response.data.response))
    .catch(error => console.log(error));