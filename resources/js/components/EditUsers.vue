<template>
    <div>
        <h2>Editar Usuario</h2>
        <form @submit.prevent="editarUsers">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" v-model="nombre" />
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" v-model="email" />
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="text" class="form-control" id="password" v-model="password" />
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="number" class="form-control" id="phone" v-model="phone" />
            </div>
            <button class="btn btn-danger">Update</button>
        </form>
    </div>
</template>

<script>
export default {
    props: ['params'],
    data() {
        return {
            id: null,
            nombre: '',
            email: '',
            password: '',
            phone: '',
        };
    },
    created() {
        this.id = this.$route.params.id;
        this.$axios
            .get(`/api/users/${this.id}`)
            .then((response) => {
                this.nombre = response.data.name;
                this.email = response.data.email;
                this.phone = response.data.phone;
            })
            .catch((error) => {
                console.log(error);
            });
    },
    methods: {
        editarUsers() {
            const formData = new FormData();
            formData.append('name', this.nombre);
            formData.append('email', this.email);
            formData.append('password', this.password);
            formData.append('phone', this.phone);
            this.$axios
                .post(`/api/users/${this.id}/edit`, formData)
                .then((response) => {
                    console.log(response.data);
                })
                .catch((error) => {
                    console.log(error);
                });
        },
    },
};
</script>
