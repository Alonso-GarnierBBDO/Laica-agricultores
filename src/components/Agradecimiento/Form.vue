<template>
    <div class="form-agradecimiento">
        <form>
            <div class="image">
                <img src="@/assets/img/Arboles.svg" alt="">
            </div>
            <div class="input-file-group">
                <div>
                    <label for="name">NOMBRE <span>*</span></label>
                    <input v-on:blur="formInput" type="text" id="name" v-model="validation.value.name">
                    <p class="error-message" v-if="validation.errors.name" >{{ validation.errors.name }}</p>
                </div>
                <div>
                    <label for="last-name">APELLIDOS <span>*</span> </label>
                    <input v-on:blur="formInput" type="text" id="last-name" v-model="validation.value.lastName">
                    <p class="error-message" v-if="validation.errors.lastName" >{{ validation.errors.lastName }}</p>
                </div>
            </div>
            <div class="input-file">
                <label for="phone">TELÉFONO <span>*</span></label>
                <input v-on:blur="formInput" type="number" id="phone" v-model="validation.value.phone">
                <p class="error-message" v-if="validation.errors.phone">{{ validation.errors.phone }}</p>
            </div>
            <div class="input-file">
                <label for="email">CORREO ELECTRÓNICO<span>*</span></label>
                <input v-on:blur="formInput" type="email" id="email" v-model="validation.value.email">
                <p class="error-message" v-if="validation.errors.email">{{ validation.errors.email }}</p>
            </div>
            <div class="input-file">
                <label for="message">MENSAJE <span>*</span></label>
                <textarea v-on:blur="formInput" name="" id="message" cols="10" rows="2" v-model="validation.value.message"></textarea>
                <p class="error-message" v-if="validation.errors.message">{{ validation.errors.message }}</p>
            </div>
            <button @click="sendForm" :disabled="validation.sendMessage ? true : false" class="send_form" type="button">{{ validation.textSubmit }}</button>
            <button class="reglamento" @click="showModalReglamento = true" type="button">REGLAMENTO</button>
        </form>

        <!-- Modal de formulario enviado -->

        <n-modal
            v-model:show="showModal"
            preset="dialog"
            title="Mensaje enviado"
            content="¡Gracias por su mensaje!"
            positive-text="Aceptar"
            @positive-click="submitCallback"
        />

        <n-modal 
            v-model:show="showModalReglamento" 
            class="mostra_reglamento"
            preset="card"
        >
            <n-card
                :bordered="false"
                size="huge"
                role="dialog"
                aria-modal="true"
            >
                <iframe src ="https://www.um.es/docencia/barzana/DAWEB/Lenguaje-de-programacion-JavaScript-1.pdf" type="application/pdf"></iframe>
            </n-card>
        </n-modal>

    </div>
</template>


<script>

    import { ref } from 'vue'

    export default{
        setup () {
            return {
            showModal: ref(false),
            showModalReglamento: ref(false),
            cancelCallback () {
                message.success('Cancel')
            },
            submitCallback () {
                message.success('Submit')
            }
            }
        },
        data(){
            return{
                validation: {
                    errors: {
                        name: '',
                        lastName: '',
                        phone: '',
                        message: '',
                        email: ''
                    },
                    value: {
                        name: '',
                        lastName: '',
                        phone: '',
                        message: '',
                        email: ''
                    },
                    send: false,
                    sendMessage: false,
                    textSubmit: "ENVIAR"
                }
            }
        },
        methods: {
            formInput(element){
                const input = element.target;
                if(input.value){
                    input.classList.add('active')

                    if(input.id == 'last-name'){
                        this.validation.errors.lastName = ''
                    }else if(input.id == 'name'){
                        this.validation.errors.name = ''
                    }else if(input.id == 'phone'){
                        this.validation.errors.phone = ''
                    }else if(input.id == 'message'){
                        this.validation.errors.message = ''
                    }else if(input.id == 'email'){
                        const re = /\S+@\S+\.\S+/;
                        if(re.test(input.value)){
                            this.validation.errors.email = ''
                        }else{
                            this.validation.errors.email = 'El correo electrónico no es valido'
                        }
                    }

                }else{
                    input.classList.remove('active')

                    if(input.id == 'last-name'){
                        this.validation.errors.lastName = 'El apellido es requerido'
                    }else if(input.id == 'name'){
                        this.validation.errors.name = 'El nombre es requerido'
                    }else if(input.id == 'phone'){
                        this.validation.errors.phone = 'El teléfono es requerido'
                    }else if(input.id == 'message'){
                        this.validation.errors.message = 'El mensaje es requerido'
                    }else if(input.id == 'email'){
                        this.validation.errors.email = 'El correo electrónico es requerido'
                    }
                }
            },
            sendForm(){
                const element = document.querySelectorAll('input, textarea');

                this.validateForm();
                if(this.validation.send){

                    element.forEach(e=>{
                        e.disabled = true;
                    })
                    this.validation.sendMessage = true;
                    this.validation.textSubmit = "ENVIANDO..."
                    this.$emit("mensaje", {
                                            "name": `${this.validation.value.name} ${this.validation.value.lastName}`,
                                            "message": this.validation.value.message
                                        })

                }

            },
            validateForm(){

                if( 
                    this.validation.value.name && 
                    this.validation.value.lastName && 
                    this.validation.value.phone &&
                    this.validation.value.message
                ){
                    const re = /\S+@\S+\.\S+/;
                    if(re.test(this.validation.value.email)){
                        this.validation.errors.email = ''
                        this.validation.send = true;
                        this.sendEmail();

                    }else{
                        this.validation.errors.email = 'El correo electrónico no es valido'
                    }

                }else{
                    this.validation.send = false;
                }

                this.viewErrors();

            },

            viewErrors(){
                const element = document.querySelectorAll('input, textarea');
                element.forEach( e => {
                    if(!e.value){
                        if(e.id == 'last-name'){
                            this.validation.errors.lastName = 'El apellido es requerido'
                        }else if(e.id == 'name'){
                            this.validation.errors.name = 'El nombre es requerido'
                        }else if(e.id == 'phone'){
                            this.validation.errors.phone = 'El teléfono es requerido'
                        }else if(e.id == 'message'){
                            this.validation.errors.message = 'El mensaje es requerido'
                        }else if(e.id == 'email'){
                            this.validation.errors.email = 'El correo electrónico es requerido'
                        }
                    }else{
                        if(e.id == 'last-name'){
                            this.validation.errors.lastName = ''
                        }else if(e.id == 'name'){
                            this.validation.errors.name = ''
                        }else if(e.id == 'phone'){
                            this.validation.errors.phone = ''
                        }else if(e.id == 'message'){
                            this.validation.errors.message = ''
                        }else if(e.id == 'email'){
                            this.validation.errors.email = ''
                        }
                    }
                });
            },
            submitCallback(){
                window.scrollTo(0,document.body.scrollHeight);
            },
            async sendEmail(){
                const form = new FormData();
                form.append('name', this.validation.value.name);
                form.append('lastName', this.validation.value.lastName);
                form.append('phone', this.validation.value.phone);
                form.append('email', this.validation.value.email);
                form.append('message', this.validation.value.message);

                console.log(this.validation.value.name)

                await fetch('https://laicadev.alonsocr.com/public/api/send-email',{
                    method: "POST",
                    body: form
                }).then(res=>{
                    return res.json().then(()=>{
                        this.showModal = ref(true);
                        this.validation.sendMessage = false;
                        this.validation.textSubmit = "ENVIAR"

                        const element = document.querySelectorAll('input, textarea');
                        element.forEach(e=>{
                            e.disabled = false;
                        })

                        this.validation.value.name = "";
                        this.validation.value.lastName = "";
                        this.validation.value.phone = "";
                        this.validation.value.email = "";
                        this.validation.value.message = "";

                    })
                })

            }
        },

    }

</script>

<style>
    @import url(@/assets/css/parts/componets/Agredecimiento/Form.css);
</style>