const camposDoFormulario = document.querySelectorAll('[required]');

        camposDoFormulario.forEach((campo) => {
            campo.addEventListener("keydown", () => verificaCampo(campo));
            campo.addEventListener("invalid", evento => evento.preventDefault());
        });

        const tiposDeErro = [
            'valueMissing',
            'typeMismatch',
            'patternMismatch',
            'tooShort',
            'customError'
        ];

        const mensagens = {
            nome: {
                valueMissing: "O campo de nome não pode estar vazio.",
                tooShort: "Por favor, preencha um nome válido."
            },

            email: {
                valueMissing: "O campo de e-mail não pode estar vazio.",
                typeMismatch: "Por favor, preencha com um email válido.",
                tooShort: "Por favor, preencha com um email válido."
            },

            mensagem: {
                valueMissing: "O campo de mensagem não pode estar vazio.",
                tooShort:     "Por favor, com alguma mensagem legível."
            }
        };

        function verificaCampo(campo) {
            let mensagem = "";
            campo.setCustomValidity('');
            
            tiposDeErro.forEach(erro => {
                if (campo.validity[erro]) {
                    mensagem = mensagens[campo.name][erro];
                }
            });

            const mensagemErro = campo.parentNode.querySelector('.mensagem-erro');
            const validadorDeInput = campo.checkValidity();

            if (!validadorDeInput) {
                mensagemErro.textContent = mensagem;
            } else {
                mensagemErro.textContent = "";
            }
        }