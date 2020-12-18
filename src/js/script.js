// !Import VUEJS & AXIOS
import Vue from 'vue';
import axios from 'axios';

const app = new Vue ({ 
    el: '#app',
    data: {
        cd: []
    },
    // Ottenimento dati al caricamento di pagina
    created() {
        const dataUrl = window.location.href + 'script/json.php'
        axios.get(dataUrl)
        .then(response => {
            // handle success
            this.cd = response.data;
        })
        .catch(error => {
        // handle error
        console.log(error);
        })
    }
});

