

@section('title', 'Contactos')

<style>
    body {
        background-color: #f4f4f4;
    }

    .section-title {
        text-align: center;
        margin-top: 5%;
        color: #333;
        padding: 2%;
        background-color: rgba(255, 255, 255, 0.7);
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .contact-info {
        margin-top: 3%;
        color: #333;
    }

    .contact-info ul {
        list-style-type: none;
        padding-left: 0;
    }

    .contact-form {
        margin-top: 3%;
    }
</style>
@extends('site.layout')
{{-- Define o início da seção de conteúdo --}}
@section('content')

<div class="container">
    <h3 class="section-title">Entre em contacto connosco</h3>

    <div class="row justify-content-center">
        <!-- Informações de contato -->
        <div class="col-md-6 contact-info">
            <p>Se você tiver alguma dúvida ou sugestão, fique à vontade para entrar em contato conosco através dos seguintes meios:</p>
            <ul>
                <li><strong>Telefone:</strong> (+351)-XXX-XXX-XXX</li>
                <li><strong>Email:</strong> contacto@bibliotecaexemplo.com</li>
                <li><strong>Presencialmente:</strong> Visite nossa biblioteca na Rua das Letras, 123, Bairro Literário.</li>
            </ul>
        </div>

        <!-- Formulário de contato -->
        <div class="col-md-6 contact-form">
            <h2>Deixe a sua mensagem</h2>
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Mensagem</label>
                    <textarea class="form-control" id="message" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn btn-outline-secondary">Enviar Mensagem</button>
            </form>
        </div>
    </div>
</div>

@endsection
