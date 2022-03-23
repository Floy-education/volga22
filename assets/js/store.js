let store = {

    id: 'store',

    history: {
        boxes: {},

        ranges: {},
    },

    server: {
        attributes: {},
    },

    clearServerData(){
        this.server = {
            attributes: {},
        }
    }

}

export default store