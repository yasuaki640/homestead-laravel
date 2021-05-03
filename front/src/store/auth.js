import axios from "axios";

const state = {
    user: null
}

const getters = {}

const mutations = {
    setUser(state, user) {
        state.user = user
    }
}

const actions = {
    async register(context, data) {
        const response = await axios.post('/api/users', data)
        context.commit('setUser', response.data)
    }
}

export default {
    namespaced: true,
    state,
    getters,
    mutations,
    actions
}