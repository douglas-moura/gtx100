<?php
	include_once __DIR__ . '/../config.php';
	include_once __DIR__ . '/../src/layout/head.php';
?>
<main class="content">		
    <section id="metodologia-banner" class="bloco-sessao titulo-pagina">
        <div class="content-sessao">
            <h1>FALE CONOSCO PARA <strong>ENGAJAR SUAS EQUIPES</strong>.</h1><br>
        </div>
    </section>
    <section id="form-contato" class="bloco-sessao">
        <div class="content-sessao content-60_40">
            <div id="contat-infos">
                <p>GTX100, onde transformamos metas em conquistas tangíveis. Se você tem perguntas, sugestões ou deseja iniciar uma parceria de sucesso, estamos aqui para ouvir você.</p>
                <br>
                <p>Preencha o formulário ao lado, e nossa equipe entrará em contato em breve. Ou se preferir:</p>
                <br>
                <h4>Telefone</h4>
                <ul>
                    <li>+55 11 98765-4321</li>
                    <li>+55 11 2345-6789</li>
                </ul>
                <h4>E-mail</h4>
                <ul>
                    <li>contato@email.com</li>
                </ul>
            </div>
            <div id="form-box">
                <h2>Formulário de Contato</h2>
                <br>
                <form action="" method="post">
                    <div class="linha-form linha-form-2_2">
                        <input type="text" name="" id="" placeholder="Nome">
                        <input type="text" name="" id="" placeholder="Sobrenome">
                    </div>
                    <div class="linha-form linha-form-1_1">
                        <input type="text" name="" id="" placeholder="E-mail">
                    </div>
                    <div class="linha-form linha-form-1_1">
                        <input type="text" name="" id="" placeholder="Telefone/Celular">
                    </div>
                    <div class="linha-form linha-form-1_1">
                        <input type="text" name="" id="" placeholder="Empresa">
                    </div>
                    <div class="linha-form linha-form-1_1">
                        <select type="text" name="" id="" placeholder="">
                            <option value="">O que você mais espera de uma Campanha?</option>
                            <option value="">Motivar meu time de vendas</option>
                            <option value="">Motivar as equipes em geral</option>
                            <option value="">Aumentar as vendas de um produto específico</option>
                            <option value="">Aumentar a margem lucrativa das vendas</option>
                            <option value="">Ganhar mais espaço no mercado</option>
                        </select>
                    </div>
                    <div class="linha-form">
                        <button type="submit">Enviar</button>
                    </div>
                </form>
                <br>
                <p>Agradecemos pelo interesse na GTX100. Juntos, vamos alcançar novos patamares e superar expectativas.</p>
            </div>
        </div>
    </section>
</main>
<?php
	include_once __DIR__ . '/../src/layout/foot.php';
?>