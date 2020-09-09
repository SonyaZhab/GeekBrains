Vue.component('filter-el', {
    data(){
        return {
            searchLine: ''
        }
    },
    template: `
            <form action="#" class="search_form" @submit.prevent="$parent.$refs.products.filter(searchLine)">
                <input type="text" class="search_goods" v-model="searchLine">
                <button class="search_button" type="submit">Искать</button>
            </form> `
});