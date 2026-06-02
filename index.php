<?php
header('Content-Type: text/html; charset=utf-8');


require_once 'config/config.php';
require_once 'includes/dados.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfólio | <?php echo $nome; ?></title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <header>
        <div class="nav-container">
            <div class="nav-logo"></div>
            <nav class="nav-menu">
                <ul>
                    <li><a href="#sobre">Sobre</a></li>
                    <li><a href="#habilidades">Habilidades</a></li>
                    <li><a href="#experiencia">Experiência</a></li>
                    <li><a href="#formacao">Formação</a></li>
                    <li><a href="#projetos">Projetos</a></li>
                    <li><a href="#contato">Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="sobre" class="hero">
        <div class="container">
            <h1><?php echo $nome; ?></h1>
            <h3><?php echo $titulo; ?></h3>
            <p>
                Olá! Sou desenvolvedor apaixonado por tecnologia e resolução de problemas práticos. 
                Possuo sólida base técnica trabalhando na sustentação e otimização de ecossistemas web complexos 
                (da manutenção de legados em PHP procedural a arquiteturas modernas), unindo o trabalho de código com suporte técnico avançado em produção.
            </p>
            <a href="#contato" class="btn">Entre em contato</a>
        </div>
    </section>

    <section id="habilidades">
        <div class="container">
            <h2>Habilidades &amp; Competências</h2>
            <div class="grid-layout">
                <?php foreach ($habilidades as $hab): ?>
                    <div class="grid-col-3">
                        <div class="card">
                            <span class="badge"><?php echo $hab['nivel']; ?></span>
                            <h4><?php echo $hab['nome']; ?></h4>
                            <p><?php echo $hab['desc']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="experiencia">
        <div class="container">
            <h2>Experência Profissional</h2>
            <div class="timeline">
                <?php foreach ($experiencias as $exp): ?>
                    <div class="timeline-item">
                        <div class="timeline-header">
                            <div class="timeline-title"><?php echo $exp['cargo']; ?></div>
                            <div class="timeline-meta"><?php echo $exp['empresa']; ?> &bull; <?php echo $exp['periodo']; ?></div>
                        </div>
                        <div class="timeline-body">
                            <p><?php echo $exp['desc']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="formacao">
        <div class="container">
            <div class="grid-layout">
                <div class="grid-col-2">
                    <h2>Formação Acadêmica</h2>
                    <div class="card">
                        <span class="badge">Cursando</span>
                        <h4>Análise e Desenvolvimento de Sistemas</h4>
                        <p style="margin-bottom: 10px; color: var(--accent-color);">UNIFECAF - Unidade Taboão da Serra</p>
                        <p>Adquirindo conhecimentos aprofundados em engenharia de software, desenvolvimento web, estruturas de dados e bancos de dados relacionais.</p>
                    </div>
                </div>
                <div class="grid-col-2">
                    <h2>Cursos &amp; Certificações</h2>
                    <div class="card">
                        <ul style="list-style: none;">
                            <?php foreach ($certificados as $cert): ?>
                                <li style="margin-bottom: 20px;">
                                    <h4 style="font-size: 1.05rem; margin-bottom: 4px;"><?php echo $cert['nome']; ?></h4>
                                    <p style="margin-bottom: 8px;"><?php echo $cert['instituicao']; ?></p>
                                    <a href="<?php echo $cert['link']; ?>" target="_blank" class="btn-outline">Verificar Certificado</a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
        
    <section id="projetos">
        <div class="container">
            <h2>Meus Projetos</h2>
            <div class="grid-layout">
                <div class="grid-col-2">
                    <div class="card">
                        <span class="badge">Game TopShooter 2D </span>
                        <h4>Game TopShooter 2D Python/GD</h4>
                        <p style="margin-bottom: 15px;">O jogo consiste em um shooter top-down com sistema de combate, múltiplas armas, inimigos com perseguição automática, ambientação de cenário e sistema de loot.</p>
                        <a href="https://github.com/AdrielpMonteiro/TopDown-shooter.git" target="_blank" class="btn-outline">Ver no Git</a> 
                    </div>
                </div>
                <div class="grid-col-2">
                    <div class="card">
                        <span class="badge">Meu Portfólio </span>
                        <h4>Portfólio Web PHP/CSS </h4>
                        <p style="margin-bottom: 15px;">Meu primeiro Portfólio Web PHP/CSS, desafiador um projeto para demonstrar minhas habilidades e conhecimentos sobre programação, utilizando algumas plataformas e meus estudos para elaboração do mesmo </p>
                        <a href="hhttps://github.com/AdrielpMonteiro/Meu-Portf-lio.git" target="_blank" class="btn-outline">Ver no Git</a> 
                    </div>
                </div>
                <div class="grid-col-2">
                    <div class="card">
                        <span class="badge">Clinica dB</span>
                        <h4>Agendamento Clinica DB</h4>
                        <p style="margin-bottom: 15px;">Este é um sistema de gerenciamento de agendamentos para clínica médica, desenvolvido em Python utilizando a biblioteca CustomTkinter para a interface gráfica.</p>
                        <a href="https://github.com/AdrielpMonteiro/Projeto_Clinica.git" target="_blank" class="btn-outline">Ver no Git</a>
                    </div>
                </div>
                <div class="grid-col-2">
                    <div class="card">
                        <span class="badge">NetWork-Dev</span>
                        <h4>Front-End NetWork-Dev React</h4>
                        <p style="margin-bottom: 15px;">Aplicativo mobile híbrido desenvolvido com React Native,TypeScript, com foco em networking entre desenvolvedores através de descoberta de perfis via Bluetooth Low Energy (BLE) com sensores ESP32</p>
                        <a href="https://github.com/AdrielpMonteiro/NetworkDev.git" target="_blank" class="btn-outline">Ver no Git</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    
            
    <section id="contato">
        <div class="container">
            <h2>Contato</h2>
            <div class="card contact-info" style="max-width: 600px; margin: 0 auto;">
                <p><strong>E-mail:</strong> <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>
                <p><strong>LinkedIn:</strong> <a href="<?php echo $linkedin; ?>" target="_blank">Adriel Pereira</a></p>
                <p><strong>GitHub:</strong> <a href="<?php echo $github; ?>" target="_blank">@AdrielpMonteiro</a></p>
                <p><strong>WhatsApp:</strong> <a href="https://wa.me/5511941426786" target="_blank"><?php echo $whatsapp; ?></a></p>
                <div style="text-align: center; margin-top: 25px;">
                    <a href="mailto:<?php echo $email; ?>" class="btn">Enviar Mensagem</a>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; <?php echo date('Y'); ?> - <?php echo $nome; ?>. Desenvolvido nativamente com PHP e CSS Avançado.</p>

        </div>
    </footer>

</body>
</html>