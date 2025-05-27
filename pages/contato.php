<div class="contato-container">
    <div class="contato-info">
        <h2>Contato</h2>

        <div class="info-item">
            <i class=" fa-solid fa-square-envelope"></i>
            <p>willian_roosa@icloud.com</p>
        </div>

        <div class="info-item">
            <i class="fa-solid fa-phone"></i>
            <p>+55 (12) 99643-8207</p>
        </div>

        <div class="info-item">
            <i class="fa-brands fa-linkedin"></i>
            <a href="https://www.linkedin.com/in/willian-rosa-0500b6238/" target="_blank" rel="noopener noreferrer">https://www.linkedin.com/in/willian-rosa-0500b6238/</a>
        </div>

        <div class="info-item">
            <i class="fa-brands fa-square-github"></i>
            <a href="https://github.com/WillianRoosa" target="_blank" rel="noopener noreferrer">https://github.com/WillianRoosa</a>
        </div>
    </div> <!-- Contato-Info -->

    <div class="contato-form">
        <div class="center">
            <h2>Envie sua mensagem</h2>
            <form method="post">
                <div class="input-icon">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" name="nome" placeholder="Nome" required><br>
                </div>

                <div class="input-icon">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="email" name="email" placeholder="E-mail" required><br>
                </div>

                <div class="input-icon">
                    <i class="fa-solid fa-phone"></i>
                    <input type="tel" name="telefone" id="tel" placeholder="Telefone..." required><br>
                </div>

                <textarea required name="mensagem" placeholder="Sua mensagem..."></textarea><br>
                <input type="hidden" name="identificador" value="form-contato" />
                <input type="hidden" name="acao" value="enviar" />
                <input type="submit" value="Enviar">
            </form>
            <script src="js/validacao.js"></script>
        </div> <!-- Center -->
    </div> <!-- Contato-Form -->
</div> <!-- Contato-Container -->