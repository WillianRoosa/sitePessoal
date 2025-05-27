<section class="banner-container"> <!-- Aqui fica o Banner principal -->
    <div style="background-image: url('<?php echo INCLUDE_PATH; ?>img/banner.avif');" class="banner-single"></div> <!-- Banner-single -->
    <div style="background-image: url('<?php echo INCLUDE_PATH; ?>img/banner2.avif');" class="banner-single"></div> <!-- Banner-single -->
    <div style="background-image: url('<?php echo INCLUDE_PATH; ?>img/banner3.avif');" class="banner-single"></div> <!-- Banner-single -->
    <div class="overlay"></div> <!-- Aqui está meu overlay, deixar dinâmico o site -->
    <div class="center"> <!-- Center para deixar design responsivo -->

        <form method="post">
            <h2>Digite seu melhor e-mail !</h2>
            <input type="email" name="email" required />
            <input type="hidden" name="identificador" value="form_home" />
            <input type="submit" name="acao" value="Enviar Cadastro !" />
        </form>
    </div> <!-- Center -->
    <div class="bullets"></div> <!-- Bullets -->
</section> <!-- Banner-Countainer -->

<section class="descricao-autor"> <!-- Aqui está toda descrição do autor -->
    <div class="center"> <!-- Center -->
        <div id="sobre" class="w50 left"> <!-- w50 quer dizer que vai pegar 50% da largura da tela -->
            <h2>Willian Vinicius da Rosa</h2>
            <p>
                Me chamo Willian Rosa tenho 23 anos, sou um desenvolvedor backend apaixonado por criar soluções robustas e escaláveis que fazem a diferença no desempenho e eficiência de sistemas. Com ampla experiência em tecnologias como (PHP, MySql, HTML, CSS, JavaScript, Laravel, etc.), tenho me especializado na construção de APIs, integração de bancos de dados e na implementação de processos que garantem a segurança e performance de plataformas de alto tráfego.

                Com foco em resolver problemas complexos e otimizar o desempenho de sistemas, busco sempre a excelência em cada linha de código, criando soluções seguras, ágeis e de fácil manutenção. Meu trabalho é orientado pela melhoria contínua e pela busca por novas tecnologias que possam trazer mais eficiência e inovação tanto no desenvolvimento back-end como front-end.

                Quando não estou escrevendo código, adoro compartilhar meus conhecimentos e aprender com a comunidade de tecnologia, sempre buscando novos desafios. Adoro explorar novas ferramentas, frameworks e metodologias, gosto de contribuir para projetos open-source e explorar novas tendências em arquitetura de software.
            </p>
        </div> <!-- w50 -->

        <div class="w50 left"> <!-- w50 -->
            <img class="right" src="<?php echo INCLUDE_PATH; ?>img/minha_foto.jpeg"> <!-- Minha imagem imagem importada no site -->
        </div> <!-- w50 -->
        <div class="clear"></div> <!-- Clear -->
    </div> <!-- Center -->
</section>

<section class="especialidades"> <!-- Aqui fica suas especialidades -->
    <div class="center">
        <h2 class="title">Minhas especialidades</h2>

        <div class="w33 left box-especialidade"> <!-- Caixa com as especialidades, serão definidas com ícones -->
            <h3><img src="<?php echo INCLUDE_PATH; ?>svg/php.svg"></h3>
            <h4>PHP</h4>
            <p>
                Desenvolvedor especialista na criação de aplicações web dinâmicas e escaláveis, utilizando Laravel, Symfony e CodeIgniter. Experiência com bancos relacionais (MySQL, PostgreSQL) e NoSQL (MongoDB), criando esquemas otimizados e seguros. Desenvolvimento de APIs RESTful e GraphQL de alto desempenho, seguindo boas práticas de segurança contra SQL Injection, XSS e CSRF. Familiaridade com PHPUnit, Composer, Docker e CI/CD, garantindo código testável e entregas eficientes.
            </p>
        </div> <!-- w33 -->

        <div class="w33 left box-especialidade">
            <h3><img src="<?php echo INCLUDE_PATH; ?>svg/html.svg"></h3>
            <h4>HTML5</h4>
            <p>
                Tenho conhecimento aprofundado em HTML5, com foco no uso eficaz de tags semânticas como header, footer, article, section e nav, garantindo páginas bem estruturadas, acessíveis e otimizadas para SEO.

                Aplico as melhores práticas de otimização para mecanismos de busca, utilizando corretamente elementos como title, meta, alt em imagens e criação de URLs amigáveis, contribuindo para um melhor ranqueamento nos buscadores.

                Experiência na criação de formulários avançados, com uso de tipos modernos de input, validação nativa do HTML5 e integração com JavaScript para validações dinâmicas e interativas, proporcionando uma experiência fluida ao usuário.
            </p>
        </div> <!-- w33 -->

        <div class="w33 left box-especialidade">
            <h3><img src="<?php echo INCLUDE_PATH; ?>svg/css.svg"></h3>
            <h4>CSS3</h4>
            <p>
                Criação de layouts responsivos e fluidos com CSS Grid e Flexbox, otimizando a experiência do usuário em qualquer dispositivo. Domínio de pré-processadores (Sass, LESS) para código mais escalável e organizado. Implementação de animações e transições suaves (@keyframes, transition, transform), melhorando a interatividade da interface. Experiência com Bootstrap, Tailwind CSS e Foundation, acelerando o desenvolvimento de interfaces modernas.
            </p>
        </div> <!-- w33 -->

        <div class="w33 left box-especialidade">
            <h3><img src="<?php echo INCLUDE_PATH; ?>svg/javascript.svg"></h3>
            <h4>JavaScript</h4>
            <p>
                Experiência sólida na manipulação do DOM para criar interfaces dinâmicas e interativas, utilizando JavaScript puro e jQuery para atualizações em tempo real sem recarregar a página.

                Desenvolvimento de componentes reutilizáveis, com foco em organização e escalabilidade do código, aplicando conceitos de estado e props.

                Domínio de frameworks modernos como React, Vue, Angular e Svelte, criando interfaces modulares e performáticas.

                Integração com CSS Grid e Flexbox para layouts responsivos, seguindo princípios mobile-first. Criação de animações e transições suaves para interfaces mais envolventes.
            </p>
        </div> <!-- w33 -->
        <div class="clear"></div>
    </div> <!-- Center -->
</section>

<section class="extras"> <!-- Sessão que recebe todos os extras do site -->
    <div class="center">
        <div class="w50 left depoimentos-container"> <!-- w50 Depoimento Container -->

            <h2 class="title">Experiências</h2>

            <div class="depoimento-single"> <!-- Recebe os depoimentos dos clientes -->
                <div class="depoimento-descricao"> <!-- Recebe os depoimentos dos clintes referente aos trabalhos prestados -->
                    <p class="nome-autor">— Grupo Care Business | Desenvolvedor PHP e Suporte Técnico | Jun 2024 - Jan 2025.</p><br>

                    <h4>Responsabilidades:</h4>

                    <p>
                        * Atuação como Desenvolvedor PHP Júnior, combinando suporte técnico e desenvolvimento de software. Responsável pelo atendimento e interação direta com clientes, realizando análises e propondo melhorias para o ERP, além de contribuir ativamente nas sprints para otimização de desempenho e novas funcionalidades.<br>

                        * Participação ativa nas sprints para otimização do desempenho do ERP.<br>

                        * Participação em reuniões semanais com Product Owners para alinhamento e evolução do projeto, bem como na organização e acompanhamento das tasks dos desenvolvedores através da ferramenta Asana.<br>

                        * Apoio na análise e implementação de integrações com plataformas como iPaaS e Microsoft Azure, além de colaborar no desenvolvimento de soluções com inteligência artificial aplicadas a processos fiscais e jurídicos.
                    </p> <br>

                    <h4>Principais entregas e resultados:</h4>

                    <p>
                        * Organização e acompanhamento semanal das tasks dos desenvolvedores utilizando a ferramenta Asana.<br>

                        * Realização de reuniões e alinhamentos com clientes para definição e priorização de melhorias no ERP.<br>

                        * Suporte técnico e contribuição direta para a evolução do produto, com foco em estabilidade e performance.
                    </p><br>

                    <h4>Competências:</h4>

                    <p>
                        PHP - Laravel - Desenvolvimento backend - Análise de dados - Capacidade analítica - Trabalho em equipe - Interação com clientes - HTML5 - CSS - Git - Programação - Comunicação - Atendimento ao cliente - Monitoramento proativo
                    </p>
                </div>
            </div> <!-- Depoimento Single -->

            <div class="depoimento-single"> <!-- Recebe os depoimentos dos clientes -->
                <div class="depoimento-descricao"> <!-- Recebe os depoimentos dos clintes referente aos trabalhos prestados -->
                    <p class="nome-autor">— Tech Solutions Digital | Desenvolvedor PHP Junior | Jan 2023 - Dez 2023.</p><br>

                    <h4>Responsabilidades:</h4>

                    <p>
                        * Desenvolvimento e manutenção de sistemas web utilizando PHP 7+ e Laravel.<br>

                        * Criação de APIs RESTful para integração entre sistemas internos e aplicativos mobile.<br>

                        * Implementação de autenticação e autorização com OAuth 2.0.<br>

                        * Otimização de consultas SQL para melhorar a performance de sistemas críticos.<br>

                        * Participação em code reviews, seguindo boas práticas de Clean Code e PSR.<br>

                        * Integração com serviços de terceiros, como PagSeguro, SendGrid e AWS S3.
                    </p><br>

                    <h4>Principais conquistas:</h4>

                    <p>
                        * Redução do tempo de resposta da API em 35% após reestruturação do código e otimização de queries.<br>

                        * Desenvolvimento de um sistema de gestão de conteúdo (CMS) personalizado, aumentando a produtividade do time de marketing.
                    </p>
                </div>
            </div> <!-- Depoimento Single -->

            <div class="depoimento-single"> <!-- Recebe os depoimentos referente os trabalho -->
                <div class="depoimento-descricao"> <!-- Recebe as experiência referente aos trabalhos prestados -->
                    <p class="nome-autor">— Inova Web Solutions | Desenvolvedor Backend PHP | Mar 2020 - Dez 2021.</p><br>

                    <h4>Responsabilidades:</h4>

                    <p>
                        * Desenvolvimento de sistemas de e-commerce utilizando PHP com o framework CodeIgniter.<br>

                        * Criação e manutenção de módulos personalizados para plataformas como WooCommerce e Magento.<br>

                        * Implementação de rotinas de envio de e-mails transacionais utilizando PHPMailer.<br>

                        * Manutenção de banco de dados MySQL, com foco em segurança e integridade dos dados.<br>

                        * Aplicação de testes automatizados com PHPUnit para garantir qualidade do código.
                    </p><br>

                    <h4>Principais conquistas:</h4>

                    <p>
                        * Implementação de uma rotina de backup automatizada, reduzindo riscos de perda de dados.<br>

                        * Responsável pela migração bem-sucedida de um sistema legado em PHP 5.6 para PHP 7.4, melhorando a segurança e performance.
                    </p>
                </div>
            </div> <!-- Depoimento Single -->

        </div> <!-- w50 Depoimento Container -->

        <div id="servicos" class="w50 left servicos-container"> <!-- w50 Serviços Container -->
            <h2 class="title">Serviços</h2>
            <div class="servicos"> <!-- Recebe os tipos de serviços prestados -->
                <ul>
                    <li>
                        <h3>Desenvolvimento de website</h3>
                        <p>Criação de sites institucionais: Desenvolvimento de sites simples para empresas e profissionais, com foco em apresentação e informações institucionais.</p>
                        <p>Lojas virtuais (E-commerce): Desenvolvimento de plataformas de comércio eletrônico, com integração de sistemas de pagamento, gestão de produtos, carrinho de compras, entre outros.</p>
                        <p>Sites responsivos: Criação de sites que se adaptam a diferentes dispositivos, como desktop, tablet e smartphone.</p>
                    </li>
                </ul>

                <ul>
                    <li>
                        <h3>Desenvolvimento de aplicativos Web</h3>
                        <p>Aplicações web personalizadas: Desenvolvimento de soluções específicas para empresas, como sistemas de gestão, CRMs, ERPs, entre outros.</p>
                        <p>Sistemas de automação de processos: Desenvolvimento de sistemas para automatizar tarefas ou processos empresariais, como fluxos de trabalho, controle de estoque, etc.
                        </p>
                        <p>Integrações de API: Integração de diversas APIs de terceiros (como Google Maps, redes sociais, sistemas financeiros) aos sistemas existentes.
                        </p>
                    </li>
                </ul>

                <ul>
                    <li>
                        <h3>Desenvolvimento de Software</h3>
                        <p>Desenvolvimento de software sob medida: Criação de soluções específicas para necessidades empresariais, como softwares de gestão de projetos, controle financeiro, e mais.</p>
                        <p>Desenvolvimento de software desktop: Criação de softwares que rodam em dispositivos locais, como programas de edição de imagens, sistemas de contabilidade, etc.</p>
                    </li>
                </ul>

                <ul>
                    <li>
                        <h3>Desenvolvimento com Inteligência Artificial e Machine Learning</h3>
                        <p>Implementação de soluções de IA: Desenvolvimento de sistemas que utilizam inteligência artificial para automatizar tarefas, melhorar a tomada de decisões ou criar produtos inovadores.</p>
                        <p>Análise de dados e modelagem preditiva: Uso de técnicas de machine learning para analisar grandes volumes de dados e gerar insights ou previsões.
                        </p>
                    </li>
                </ul>
            </div> <!-- Serviços -->
        </div> <!-- w50 Serviços Container -->
        <div class="clear"></div> <!-- Clear -->
    </div> <!-- Center -->
</section>